/* Dependent Anchor Include Pattern */
(function(f,e,a,d){if(f.fn.jquery.replace(/\./g,"")<143){throw new Error("jQuery 1.4.3 or higher is required");return}var c="click";if("ontouchstart" in e||"createTouch" in a){c="touchend"}function b(i){var h;i.size=0;function g(){var j=e.innerWidth;clearTimeout(h);h=null;if(i.size!=j){i();i.size=j}}e.addEventListener("resize",function(){if(h){clearTimeout(h);h=null}h=setTimeout(g,50)});i()}f.fn.ajaxInclude=function(){return this.each(function(){var o=f(this),n=o.data("target"),p=o.data("include-size"),m=n&&f(n)||o,i=["append","replace","before","after"],k=i.length,l=false,g,h;function j(){if(l){return}while(k--){g=i[k];if(o.is("[data-"+g+"]")){h=o.data(g);break}}if(g=="replace"){g+="With"}if(h&&g){f.get(h,function(q){o.trigger("ajaxInclude",[m,q]);m[g](q)})}l=true}if(o.is("[data-include-on-tap]")){o.on(c,function(q){q.preventDefault();j()})}b(function(){var q=e.getComputedStyle(a.body,":after").getPropertyValue("content").replace(/"/g,"");if(p!=d&&p!=q){return}j()})})}})(jQuery,window,document);(function(c){var f={version:"0.2"},b={};function a(){var g=c("body").attr("id");if(g!=false&&typeof(b[g])!="undefined"){d(b[g])}if(typeof(b["*"])!="undefined"){d(b["*"])}}c(document).ready(a);f.register=function(j,h){if((typeof(j)!="string"&&!(j instanceof Array))||typeof(h)!="function"){return false}if(typeof(j)=="string"&&j.indexOf(", ")!=-1){j=j.split(", ")}if(j instanceof Array){for(var g=j.length-1;g>=0;g--){e(j[g],h)}}else{e(j,h)}return true};function e(h,g){if(typeof(b[h])=="undefined"){b[h]=[]}b[h].push(g)}function d(g){if(!(g instanceof Array)){return}for(var h=g.length-1;h>=0;h--){g[h]()}}window.FunctionHandler=f})(jQuery);jQuery.getScripts=function(a,f){var b=1,d=a.length,c=d+1,e=function(h,g){if(b++==d){f()}};while(c){jQuery.getScript(a[c-1],e);c--}};(function(e,b,d){var c=(!!b.createElementNS&&!!b.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect),a=d.indexOf("Opera Mini")>-1;if(c&&!a){e("html").addClass("has-svg")}}(jQuery,document,window.navigator.userAgent));(function(c){var a=c("#search"),d="",b="";a.on("focus",function(){d=a.val();a.val(b)}).on("blur",function(){if(a.val()==b){a.val(d)}})}(jQuery));(function(c,b){var a="click";if("ontouchstart" in window||"createTouch" in document){a="touchend"}FunctionHandler.register("*",function(){if(b.location.hash==""){b.scrollTo(0,1);
/* Make labels clickable in touch (looking at you iOS) */
}if(a!="click"){c("label").attr("onclick","")}c.getScript("http://use.typekit.com/tjo5hgd.js",function(){try{Typekit.load()}catch(d){}});c("[data-append],[data-replace],[data-after],[data-before]").ajaxInclude()});FunctionHandler.register("single-entry",function(){c("body").bind("ajaxInclude",function(){if(window.getComputedStyle(document.body,":after").getPropertyValue("content")=="large"){c(this).delegate("#comment_form input, #comment_form textarea","focus",function e(){c("body").undelegate("#comment_form input, #comment_form textarea");c.getScript("/js/jquery.textile.js",function(){var i=c("#comments .hfeed"),k=c("#comments-name"),f=c("#comments-comment"),h=c('<li class="preview hentry"><div class="entry-content"></div><ul class="meta"><li><img class="photo" src="/img/gravitar.png" alt=""/><span></span></li><li>This is a preview</li></ul></li>').hide(),g=h.find(".entry-content");function j(){if(f.val()){if(h.is(":hidden")){if(i.length<1){i=c('<ol class="hfeed" id="comments"></ol>');c("#no-comments").replaceWith(i)}h.appendTo(i).animate({height:"show",opacity:"show"},"fast")}j=function(){if(k.val()){h.find(".meta span").text(k.val())}g.html(c.textile(f.val()))};j()}}j();k.bind("keyup blur change",j);f.bind("keyup blur change",j)})})}});c("#bookmark").on(a,"a",function(f){if(c(b).width()>700){f.preventDefault();b.open(this.href,"share-this","height=300,width=500,status=no,toolbar=no")}});function d(){c("iframe").each(function(){var h=c(this),g=h.data("proportion"),e=h.attr("width"),f=h.width();if(!g){g=h.attr("height")/e;h.data("proportion",g)}if(f!=e){h.css("height",Math.round(f*g)+"px")}})}c(b).bind("resize load",d)})})(jQuery,window);