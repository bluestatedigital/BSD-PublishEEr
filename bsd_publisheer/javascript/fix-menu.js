;(function($){
var $publishMenu = $("#navigationTabs a:contains(\"Publish\") + ul").attr("id", "publish-menu").addClass("clearfix");
$pubChannels = $publishMenu.children("li").addClass("channels").detach();
$("#publish-menu").prepend("<li id=\"listjs-search-li\"><label id=\"listjs-search-label\" for=\"list-js-search\">Channel Search<input id=\"listjs-search\" type=\"text\" class=\"search\" placeholder=\"Channel Name\"/></label></li>");
$publishMenu.append("<li id=\"channel-publish-list\"><ul class=\"listjs\"></ul></li>");
$pubChannels.appendTo("#channel-publish-list ul.listjs").children("a").addClass("channel-publish-name");
var oPublish = { valueNames: ["channel-publish-name"], listClass: "listjs" };
var cPublish = new List("publish-menu", oPublish);

var $editMenu = $("#navigationTabs a:contains(\"Edit\") + ul").attr("id", "edit-menu").addClass("clearfix");
$editChannels = $editMenu.children("li").addClass("channels").detach();
$("#edit-menu").prepend("<li id=\"listjs-search-li\"><label id=\"listjs-search-label\" for=\"list-js-search\">Channel Search<input id=\"listjs-search\" type=\"text\" class=\"search\" placeholder=\"Channel Name\"/></label></li>");
$editMenu.append("<li id=\"channel-edit-list\"><ul class=\"listjs\"></ul></li>");
$editChannels.appendTo("#channel-edit-list ul.listjs").children("a").addClass("channel-edit-name");
var oEdit = { valueNames: ["channel-edit-name"], listClass: "listjs" };
var cEdit = new List("edit-menu", oEdit);
})(jQuery);
