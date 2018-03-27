module.exports = Backbone.View.extend({
    item_template: _.template($('#search-item-template').html()),
    search_results: $('.search-results'),
    events: {
        "input .search": "changeSearchText",
        "keyup .search" : "updateList",
        "click .search-button" : function() { this.model.trigger("reloadList")},
    },

    initialize : function() {
        this.model.on('change:search', this.ajaxSearch, this)
        let self = this;
        $(document).on("click", function(event){
            self.search_results.empty();
            self.search_results.hide();
        });
    },
    updateList: function(event) {
        if(event.keyCode == 13) {
            this.model.trigger("reloadList");
        }
    },

    changeSearchText: function (event) {
        this.model.set("search", $(event.target).val())
    },

    ajaxSearch: function()
    {
        let self = this;
        if (this.model.get("search").length > 2) {
            this.model
                .search()
                .then(function (response) {
                    self.search_results.empty();
                    self.search_results.hide();
                    if (response.length > 0) {
                        self.search_results.show();
                        _.each(response, function (item) {
                            self.search_results.append(
                                self.item_template(item)
                            );
                        });
                    }
                });
        }
    }
});