define("main/0.1.0/module-monitor",["#jquery/1.7.2/jquery"],function(e,t,n){function i(e,t,n,i){function c(){a=parseInt(o.css("left")),s.bind("click",function(e){e.preventDefault();var t=r(this);h(t),p()}),l.bind("click",function(e){d()})}function h(e){var n=e.find("."+t),r=n.clone();f.html(""),f.append(r)}function p(){o.show(),o.css("left",u+"px")}function d(){o.css("left",a+"px")}var s=e,t=t,o=n,u=0,a=0,f=r("#book-desc-content"),l=r("#book-desc-close");return{init:c}}var r=e("#jquery/1.7.2/jquery");n.exports=i}),define("main/0.1.0/main",["./module-monitor","#jquery/1.7.2/jquery"],function(e){var t=e("#jquery/1.7.2/jquery");t(function(){t("#loading").hide();if(t.browser.msie&&t.browser.version<10||typeof document.querySelector!="function")return location.href=t("#logo").attr("href")+"/wp-content/themes/invade/browser.html",!1;t("#wrapper").show(),t("#footer").show(),t(".to-search").click(function(){t("#s").focus()}),t(".to-cat").click(function(){t("#category").click()}),t(".to-top").click(function(){t("html, body").stop().animate({scrollTop:0},500)}),t(".to-bottom").click(function(){t("html, body").stop().animate({scrollTop:t(document).height()+"px"},500)}),t(".to-comment").click(function(){t("html, body").stop().animate({scrollTop:t(document).height()+"px"},500,function(){t("#author").focus()})});var n=e("./module-monitor"),r=new n(t("#book-post-list .item"),"info",t("#book-desc"),0);r.init();var i=new n(t("#about"),"info",t("#book-desc"),0);i.init();var s=new n(t("#category"),"info",t("#book-desc"),0);s.init()})});