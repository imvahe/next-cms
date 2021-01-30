var str = $("#div").html();
var regex = "/(?!(?:[^<]+>|[^>]+<\\/a>))\\b(" + value + ")\\b/is";
$("#div").html(str.replace(regex, "<a href='#" + value +">" + value + "</a>"));
