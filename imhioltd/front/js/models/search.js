module.exports = Backbone.Model.extend({
    defaults: {
        search: '',
        data: [],
    },

    search: function () {
        let self = this;
        return $.ajax({
            type: "GET",
            url: '/api/actors/search',
            data: {
                q: this.get("search"),
            },
            success: function (response) {
                self.set("data", response);
                return response;
            }
        });
    }
});