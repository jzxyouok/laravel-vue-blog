
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/*
 * By extending the Vue prototype with a new '$bus' property
 * we can easily access our global event bus from any child component.
 */

// const app = new Vue({
//     el: '#items-list',

// 	// props: ['list'],

//     data: {
// 	    pagination: {
// 	        total_pages: 0,
// 	        per_page: 7,
// 	        from: 1,
// 	        to: 0,
// 	        current_page: 1
// 	    },
// 	    offset: 4,// left and right padding from the pagination <span>,just change it to see effects
// 	    items: [],
// 	    url: itemsUrl
//     },

//     // computed: {
//     //     isActived: function () {
//     //         return this.pagination.current_page;
//     //     },
//     //     pagesNumber: function () {
//     //         if (!this.pagination.to) {
//     //             return [];
//     //         }
//     //         var from = this.pagination.current_page - this.offset;
//     //         if (from < 1) {
//     //             from = 1;
//     //         }
//     //         var to = from + (this.offset * 2);
//     //         if (to >= this.pagination.last_page) {
//     //             to = this.pagination.last_page;
//     //         }
//     //         var pagesArray = [];
//     //         while (from <= to) {
//     //             pagesArray.push(from);
//     //             from++;
//     //         }
//     //         return pagesArray;
//     //     }
//     // },

//     // methods: {
//     //     fetchItems: function (page) {
//     //         var data = {page: page};
//     //         this.$http.get(this.url, data).then(function (response) {
//     //             //look into the routes file and format your response
//     //             this.$set('items', response.data.data.data);
//     //             this.$set('pagination', response.data.meta.pagination);
//     //         }, function (error) {
//     //             // handle error
//     //         });
//     //     },
//     //     changePage: function (page) {
//     //         this.pagination.current_page = page;
//     //         this.fetchItems(page);
//     //     }
//     // },

//     created: function() {
//         // this.fetchItems(this.pagination.current_page);
//     }
// });
