(function(e,d,a,c){if(e.fn.jquery.replace(/\./g,"")<143){throw new Error("jQuery 1.4.3 or higher is required");return}function b(h){var g;h.size=0;function f(){var i=d.innerWidth;clearTimeout(g);g=null;if(h.size!=i){h();h.size=i}}d.addEventListener("resize",function(){if(g){clearTimeout(g);g=null}g=setTimeout(f,50)});h()}e.fn.ajaxInclude=function(){return this.each(function(){var m=e(this),l=m.data("target"),n=m.data("include-size"),k=l&&e(l)||m,h=["append","replace","before","after"],i=h.length,j=false,f,g;b(function(){var o=d.getComputedStyle(a.body,":after").getPropertyValue("content");if(j||(n!=c&&n!=o)){return}while(i--){f=h[i];if(m.is("[data-"+f+"]")){g=m.data(f);break}}if(f=="replace"){f+="With"}if(g&&f){e.get(g,function(p){m.trigger("ajaxInclude",[k,p]);k[f](p)})}j=true})})}})(jQuery,window,document);(function(c){var f={version:"0.2"},b={};function a(){var g=c("body").attr("id");if(g!=false&&typeof(b[g])!="undefined"){d(b[g])}if(typeof(b["*"])!="undefined"){d(b["*"])}}c(document).ready(a);f.register=function(j,h){if((typeof(j)!="string"&&!(j instanceof Array))||typeof(h)!="function"){return false}if(typeof(j)=="string"&&j.indexOf(", ")!=-1){j=j.split(", ")}if(j instanceof Array){for(var g=j.length-1;g>=0;g--){e(j[g],h)}}else{e(j,h)}return true};function e(h,g){if(typeof(b[h])=="undefined"){b[h]=[]}b[h].push(g)}function d(g){if(!(g instanceof Array)){return}for(var h=g.length-1;h>=0;h--){g[h]()}}window.FunctionHandler=f})(jQuery);jQuery.getScripts=function(a,f){var b=1,d=a.length,c=d+1,e=function(h,g){if(b++==d){f()}};while(c){jQuery.getScript(a[c-1],e);c--}};(function(e,b,d){var c=(!!b.createElementNS&&!!b.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect),a=d.indexOf("Opera Mini")>-1;if(c&&!a){e("html").addClass("has-svg")}}(jQuery,document,window.navigator.userAgent));(function(c){var a=c("#search"),d="",b="";a.on("focus",function(){d=a.val();a.val(b)}).on("blur",function(){if(a.val()==b){a.val(d)}})}(jQuery));(function(b,a){FunctionHandler.register("*",function(){if(a.location.hash==""){a.scrollTo(0,1)}b.getScript("http://use.typekit.com/tjo5hgd.js",function(){try{Typekit.load()}catch(c){}});b("[data-append],[data-replace],[data-after],[data-before]").ajaxInclude()});FunctionHandler.register("single-entry",function(){b("body").bind("ajaxInclude",function(){if(window.getComputedStyle(document.body,":after").getPropertyValue("content")=="large"){b(this).delegate("#comment_form input, #comment_form textarea","focus",function d(){b("body").undelegate("#comment_form input, #comment_form textarea");b.getScript("/js/jquery.textile.js",function(){var h=b("#comments .hfeed"),j=b("#comments-name"),e=b("#comments-comment"),g=b('<li class="preview hentry"><div class="entry-content"></div><ul class="meta"><li><img class="photo" src="/img/gravitar.png" alt=""/><span></span></li><li>This is a preview</li></ul></li>').hide(),f=g.find(".entry-content");function i(){if(e.val()){if(g.is(":hidden")){if(h.length<1){h=b('<ol class="hfeed" id="comments"></ol>');b("#no-comments").replaceWith(h)}g.appendTo(h).animate({height:"show",opacity:"show"},"fast")}i=function(){if(j.val()){g.find(".meta span").text(j.val())}f.html(b.textile(e.val()))};i()}}i();j.bind("keyup blur change",i);e.bind("keyup blur change",i)})})}});b("#bookmark").delegate("a","click",function(d){if(b(a).width()>700){d.preventDefault();a.open(this.href,"share-this","height=300,width=500,status=no,toolbar=no")}});function c(){b("iframe").each(function(){var g=b(this),f=g.data("proportion"),d=g.attr("width"),e=g.width();if(!f){f=g.attr("height")/d;g.data("proportion",f)}if(e!=d){g.css("height",Math.round(e*f)+"px")}})}b(a).bind("resize load",c)})})(jQuery,window);