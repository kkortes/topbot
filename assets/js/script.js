(function(){var t,e;$("img").each(function(){return $(this).attr("src")?void 0:$(this).attr("src",window.dpath+"assets/image/dummies/dummy-rectangular.jpg")}),$(".file-list li").click(function(){var t,i;return t=$(this),i=t.next(),e($(this)),i.is(":visible")&&i.is("ul")?(t.find("span").html("+"),i.slideUp("fast")):(t.find("span").html("-")&&i.is("ul"),i.slideDown("fast"))}),e=function(t){var e;return e=t.attr("rel"),$(".viewport div:not(."+e+")").slideUp("fast"),$(".viewport ."+e).slideDown("fast")},t=function(){return window.getComputedStyle(document.body,":before").getPropertyValue("content").replace(/'/g,"").replace(/"/g,"")},$(window).resize(function(){return clearTimeout(window.counter),window.counter=setTimeout(function(){return window.platform=t()},500)})}).call(this);