(window.webpackJsonp=window.webpackJsonp||[]).push([[1],{15:function(e,t,s){(function(t){e.exports=Backbone.View.extend({item_template:_.template(t("#search-item-template").html()),search_results:t(".search-results"),events:{"input .search":"changeSearchText","keyup .search":"updateList","click .search-button":function(){this.model.trigger("reloadList")}},initialize:function(e){this.model.on("change:search",this.ajaxSearch,this);let s=this;t(document).on("click",function(e){s.search_results.empty(),s.search_results.hide()})},updateList:function(e){13==e.keyCode&&this.model.trigger("reloadList")},changeSearchText:function(e){this.model.set("search",t(e.target).val())},ajaxSearch:function(){let e=this;this.model.get("search").length>2&&this.model.search().then(function(t){e.search_results.empty(),e.search_results.hide(),t.length>0&&(e.search_results.show(),_.each(t,function(t){e.search_results.append(e.item_template(t))}))})}})}).call(this,s(0))}}]);