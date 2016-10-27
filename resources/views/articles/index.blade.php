@extends('layouts.app')

@section('content')
	<div id="items-list">
		<div v-if="!items.length">Записи не найдены</div>
        <article class="post" v-for="item in items">
            <a href="item.link" class="entry-media" v-if="item.image">
                <img src="http://farm8.staticflickr.com/7192/6902225428_aab1cb4ac6_c.jpg" alt="" />
            </a>
            <div class="entry-body">
                <a v-bind:href="item.alias">
                    <h2 class="entry-title">@{{ item.title }}</h2>
                </a>
                <p>@{{ item.short_description }}</p>
            </div>
            <div class="entry-meta">
                <span class="entry-type"></span>
                <span class="entry-date">@{{ item.publishedDate }}</span>
                <span class="entry-comments"> @{{ item.commentsCount }} комментариев</span>
            </div>
            <div class="clr"></div>
        </article>

        <hr>

        <div class="pagination">
            <ul>
                <li v-if="pagination.current_page > 1">
                    <a href="#" aria-label="Previous"
                       @click.prevent="changePage(pagination.current_page - 1)">
                        &larr; Пред.
                    </a>
                </li>
                <li v-for="page in pagesNumber"
                    v-bind:class="[ page == isActived ? 'active' : '']">
                    <a href="#"
                       @click.prevent="changePage(page)">@{{ page }}</a>
                </li>
                <li v-if="pagination.current_page < pagination.last_page">
                    <a href="#" aria-label="Next"
                       @click.prevent="changePage(pagination.current_page + 1)">
                        След. &rarr;
                    </a>
                </li>
            </ul>
        </div>
	</div>
@endsection

@section('scripts')
<script>
    const app = new Vue({
        el: '#items-list',

        data: {
    	    pagination: {
    	        per_page: 10,
    	        current_page: 1,
    	        last_page: 1
    	    },
    	    offset: 3,// left and right padding from the pagination <span>,just change it to see effects
    	    items: [],
    	    url: itemsUrl
        },

        computed: {
            isActived: function () {
                return this.pagination.current_page;
            },
            pagesNumber: function () {
                if (!this.pagination.last_page) {
                    return [];
                }
                var from = this.pagination.current_page - this.offset;
                if (from < 1) {
                    from = 1;
                }
                var to = from + (this.offset * 2);
                if (to >= this.pagination.last_page) {
                    to = this.pagination.last_page;
                }
                var pagesArray = [];
                while (from <= to) {
                    pagesArray.push(from);
                    from++;
                }
                return pagesArray;
            }
        },

        methods: {
            fetchItems: function (page) {
                var data = {page: page};
                this.$http.post(this.url, data).then(function (response) {
                    this.items = response.data.data.data;
                    this.pagination.per_page = response.data.data.meta.pagination.per_page;
                    this.pagination.current_page = response.data.data.meta.pagination.current_page;
                    this.pagination.last_page = response.data.data.meta.pagination.total_pages;
                }, function (error) {
                    // handle error
                });
            },
            changePage: function (page) {
                this.pagination.current_page = page;
                this.fetchItems(page);
                $('#back-to-top').click();
            }
        },

        created: function() {
            this.fetchItems(this.pagination.current_page);
        }
    });
</script>
@endsection