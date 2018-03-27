module.exports = Backbone.View.extend({
    item_template: _.template($('#list-item-template').html()),
    initialize: function () {
        this.listenTo(this.model, "reloadList", this.reloadList);
    },

    reloadList: function () {

        let self = this,
            table = $('tbody');
        table.empty();
        _.each(this.model.get("data"), function (item) {
            table.append(
                self.item_template(item)
            );
        });
    }
});