<template>
    <div>
        <div v-if="!articles.length">Записи не найдены</div>
        <article class="post" v-for="article in articles">
            <a href="article.link" class="entry-media" v-if="article.image">
                <img src="http://farm8.staticflickr.com/7192/6902225428_aab1cb4ac6_c.jpg" alt="" />
            </a>
            <div class="entry-body">
                <a href="article.link">
                    <h2 class="entry-title">{{ article.title }}</h2>
                </a>
                <p>{{ article.short_description }}</p>
            </div>
            <div class="entry-meta">
                <span class="entry-type"></span>
                <span class="entry-date">{{ article.publishedDate }}</span>
                <span class="entry-comments"> {{ article.commentsCount }} комментариев</span>
            </div>
            <div class="clr"></div>
        </article>
    </div>
</template>

<script>
    export default {

        props: ['articles'],

        data: function() {
            return {
                items: []
            }
        },

        // computed: {
        //     articles: function() {
        //         return JSON.parse(this.list).data;
        //     }
        // },

        created() {
            this.$on('pagination-items', function (items) {
                this.items.push(items);    
            }.bind(this));
        },
        
        mounted() {
            console.log('Component ready.');
        }
    }
</script>