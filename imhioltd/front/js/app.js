module.exports = Backbone.View.extend({
    el: "body",

    models: {
        search: require('./models/search')
    },
    views: {},

    run: function () {
        let searchModel = new this.models.search();
        if ($( "#search" ).length) {
            this.views.search = require('./views/search');
            new this.views.search({el:"#search", model: searchModel})
        }

        if ($( ".search-table" ).length ) {
            this.views.search_list = require('./views/search_list');
            new this.views.search_list({el:".search-table", model: searchModel})
        }
    },
});