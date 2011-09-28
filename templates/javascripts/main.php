/*------------------------------------------------------------------------------
Function:       FunctionHandler()
Author:         Aaron Gustafson (aaron at easy-designs dot net)
Creation Date:  2009-04-02
Version:        0.2
Homepage:       http://github.com/easy-designs/FunctionHandler.js
License:        MIT License (see homepage)
Note:           If you change or improve on this script, please let us know by
                emailing the author (above) with a link to your demo page.
------------------------------------------------------------------------------*/
(function(){var FunctionHandler={version:"0.2"},pages={};function initialize(){var body_id=$("body").attr("id");if(body_id!=false&&typeof(pages[body_id])!="undefined"){run(pages[body_id])}if(typeof(pages["*"])!="undefined"){run(pages["*"])}}$(document).ready(initialize);FunctionHandler.register=function(id,callback){if((typeof(id)!="string"&&!(id instanceof Array))||typeof(callback)!="function"){return false}if(typeof(id)=="string"&&id.indexOf(", ")!=-1){id=id.split(", ")}if(id instanceof Array){for(var i=id.length-1;i>=0;i--){add(id[i],callback)}}else{add(id,callback)}return true};function add(id,callback){if(typeof(pages[id])=="undefined"){pages[id]=[]}pages[id].push(callback)}function run(arr){if(!(arr instanceof Array)){return}for(var i=arr.length-1;i>=0;i--){arr[i]()}}window.FunctionHandler=FunctionHandler})();

/*
  * anchor-include pattern for already-functional links that work as a client-side include
  * Copyright 2011, Scott Jehl, scottjehl.com
  * Dual licensed under the MIT
  * Idea from Scott Gonzalez
  * to use, place attributes on an already-functional anchor pointing to content
    * that should either replace, or insert before or after that anchor
    * after the page has loaded
    * Replace:	<a href="..." data-replace="articles/latest/fragment">Latest Articles</a>
    * Before:	<a href="..." data-before="articles/latest/fragment">Latest Articles</a>
    * After:	<a href="..." data-after="articles/latest/fragment">Latest Articles</a>
    * On domready, you can use it like this: 
         $("[data-append],[data-replace],[data-after],[data-before]").ajaxInclude();
*/
(function( $ ){
	$.fn.ajaxInclude = function( e ) {
		return this.each(function(){
			var el			= $( this ),
				target		= el.data( "target" ),
				targetEl	= target && $( target ) || el,
				methods		= [ "append", "replace", "before", "after" ],
				method,
				url;

			for( var ml = methods.length, i=0; i < ml; i++ ){
				if( el.is( "[data-" + methods[ i ] + "]" ) ){
					method	= methods[ i ];
					url		= el.data( method );
				}
			}

			if( method === "replace" ){
				method += "With";
			}

			if( url && method ){
				$.get( url, function( data ) {
					targetEl[ method ]( data );
					el.trigger( "ajaxInclude", [targetEl, data] );
				});
			}
		});
	};
})( jQuery );


jQuery.getScripts = function(scripts, onComplete)
{
  var
  i  = 1,
  ii = scripts.length,
  s  = ii + 1,
  onScriptLoaded = function(data, response)
  {
    if (i++ == ii) onComplete();
  };
  while ( s )
  {
    $.getScript( scripts[s-1], onScriptLoaded );
    s--;
  }
};

{embed="javascripts/eCSStender"}
eCSStender.addMethod('findBySelector',$);

FunctionHandler.register(
  '*',
  function()
  {
		
		// Typekit
	  $.getScript('http://use.typekit.com/tjo5hgd.js',function(){
	    try {
	      Typekit.load();
	    } catch( e ) { }
	  });
	
		// Google Analytics
		window._gaq = window._gaq || [];
		window._gaq.push(['_setAccount', 'UA-176472-7']);
		window._gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
		
  });

FunctionHandler.register(
  'single-entry',
  function()
  {
    $.getScript('/js/jquery.textile.js',function(){
      var
      $comments = $('#comments .hfeed'),
      $name     = $('#comments-name'),
      $text     = $('#comments-comment'),
      $preview  = $('<li class="preview hentry">' +
	                  '<div class="entry-content"></div>' + // this needed to be a div for IE
	                  '<ul class="meta"><li>' + 
		                '<img class="photo" src="/img/gravitar.png" alt=""/><span></span>' + 
		                '</li><li>This is a preview</li></ul>' + 
	                  '</li>').hide(),
      $comment  = $preview.find('.entry-content');
  	  function updatePreview()
  	  {
  	    if ( $text.val() )
  	    {
    	    if ( $preview.is(':hidden') )
    	    {
    	      if ( $comments.length < 1 )
    	      {
    	        $comments = $('<ol class="hfeed" id="comments"></ol>');
    	        $('#no-comments').replaceWith($comments);
    	      }
    	      $preview.appendTo($comments)
										.animate({height:'show',opacity:'show'},'fast');
    	    }
    	    updatePreview = function()
					{
						if ( $name.val() )
		  	    {
		  	      $preview.find('.meta span').text($name.val())
		  	    }
						$comment.html( $.textile( $text.val() ) );
					};
					updatePreview();
  	    }
  	  }
	    updatePreview();
	    $name.keyup(updatePreview)
	         .blur(updatePreview)
	         .change(updatePreview);
  	  $text.keyup(updatePreview)
  	       .blur(updatePreview)
	         .change(updatePreview);
  	});
  	
  	// Twitter
  	$.getScript('http://platform.twitter.com/widgets.js');
  	
  	// Google+
  	(function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();
  });

/*------------------------------------------------------------------------------
Function:       eCSStender.CSS3-backgrounds-and-borders.js
Author:         Aaron Gustafson (aaron at easy-designs dot net)
Creation Date:  2010-04-24
Version:        0.3.4
Homepage:       http://github.com/easy-designs/eCSStender.CSS3-backgrounds-and-borders.js
License:        MIT License 
Note:           If you change or improve on this script, please let us know by
                emailing the author (above) with a link to your demo page.
------------------------------------------------------------------------------*/
(function(){if(eCSStender===undefined){return}var d=eCSStender,f=new b(d),a=new c(d);function b(x){var A,y="property",r="-moz-",p="-webkit-",h="-khtml-",k=" ",j=": ",s="; ",v="border-radius",z="-topleft",l="border-top-left-radius",n="border-top-right-radius",q="border-bottom-right-radius",o="border-bottom-left-radius",t=j+"3px";x.register({fragment:"radius",test:function(){return(!x.isSupported(y,l+t)&&(x.isSupported(y,r+v+z+t)||x.isSupported(y,p+l+t)||x.isSupported(y,h+l+t)))},fingerprint:"net.easy-designs."+v},false,u);function u(e,D,C){var E=e+" { ",B;if(D[v]!=A){B=i(D[v]);if(B.length>1){E+=g(B)}else{E+=r+v+j+D[v]+s+p+v+j+D[v]+s+h+v+j+D[v]+s}D[v]=null}for(var F in D){if(x.isInheritedProperty(D,F)){continue}E+=w(D,F)}E+="} ";x.embedCSS(E,C)}function i(D){var E=D.split("/"),B=[];if(E.length>1){var F=x.trim(E[0]).split(k);var e=x.trim(E[1]).split(k);F=m(F);e=m(e);for(var C=0;C<4;C++){B[C]=F[C]+k+e[C]}}else{B=m(x.trim(E[0]).split(k))}return B}function m(e){if(e.length<4){if(e[1]==A){e[1]=e[0]}if(e[2]==A){e[2]=e[0]}if(e[3]==A){e[3]=e[1]}}return e}function g(e){if(x.isSupported(y,p+l+t)||x.isSupported(y,h+l+t)){g=function(B){return p+l+j+B[0]+s+p+n+j+B[1]+s+p+q+j+B[2]+s+p+o+j+B[3]+s+h+l+j+B[0]+s+h+n+j+B[1]+s+h+q+j+B[2]+s+h+o+j+B[3]+s}}else{g=function(B){return r+v+z+j+B[0]+s+r+v+"-topright: "+B[1]+s+r+v+"-bottomright: "+B[2]+s+r+v+"-bottomleft: "+B[3]+s}}return g(e)}function w(e,B){if(x.isSupported(y,r+v+z+t)){w=function(C,D){return D.replace(/border-(top|bottom)-(left|right)-radius/,r+v+"-$1$2")+j+C[D]+s}}else{w=function(C,D){return D+j+C[D]+s}}return w(e,B)}}function c(x){var B,z="property",q="-moz-",p="-webkit-",g="-khtml-",m=" ",l=": ",r="; ",u="box-shadow",o="filter: ",w="progid:DXImageTransform.Microsoft.Shadow",y="2px",i="black",j="rgb(0, 0, 0)",A=l+j+m+y+m+y+m+y,h=A+m+y,n=o+w+"(color=#000000,direction=135,strength=3)",v=false;x.register({property:u,test:function(){return(!x.isSupported(z,u+h)&&(x.isSupported(z,q+u+h)||x.isSupported(z,p+u+A)||x.isSupported(z,p+u+h)||x.isSupported(z,g+u+A)||x.isSupported(z,g+u+h)||x.isSupported(z,o+n)))},fingerprint:"net.easy-designs."+u},false,t);function t(C,G,J){var I=C+" { ",H=G[u],e=H.match(/((?:rgb|hsl)a?\([^\)]+\))/g),E=count=(e instanceof Array?e.length:0),D="%MASKED_COLOR",F="%";if(E){while(E--){H=H.replace(e[E],D+E+F)}}I+=k(H);E=count;if(E){while(E--){I=I.replace(new RegExp(D+E+F,"g"),e[E])}}I+="} ";x.embedCSS(I,J)}function k(e){if(x.isSupported(z,o+n)){k=function(K){var F=K.split(","),I="zoom: 1; "+o,G=F.length,D,J,C,H,E;while(G--){K=x.trim(F[G]).split(m);D=K.length;J=s(K[0],K[1]);C=H=null;switch(D){case 5:C=x.trim(K[2]).replace(/(\d+).*/,"$1");H=x.trim(K[3]);E=x.trim(K[4]);break;case 4:C=x.trim(K[2]).replace(/(\d+).*/,"$1");E=x.trim(K[3]);break;case 3:E=x.trim(K[2]);break}I+=w+"(color="+E+",direction="+J+",strength="+C+") "}return I+r}}else{if(x.isSupported(z,p+u+h)||x.isSupported(z,g+u+h)){v=true}k=function(K){var H=K.split(","),L=[],I=H.length,G=null,D,F,C,J,E;while(I--){K=x.trim(H[I]).split(m);D=K.length;F=K[0]+" "+K[1];C=J=G;switch(D){case 5:C=x.trim(K[2]);J=x.trim(K[3]);E=x.trim(K[4]);break;case 4:C=x.trim(K[2]);E=x.trim(K[3]);break;case 3:E=x.trim(K[2]);break}L[I]=F+m+(C!=G?C+m:"")+(v&&J!=G?J+m:"")+E}L=L.join(", ")+r;return p+u+l+L+g+u+l+L+q+u+l+L}}return k(e)}function s(e,C){return 270-(Math.atan2(C,0-e)*180/Math.PI)}}})();

/*------------------------------------------------------------------------------
Function:       eCSStender.transitions.js
Author:         Aaron Gustafson (aaron at easy-designs dot net)
Creation Date:  2010-05-31
Version:        0.1
Homepage:       http://github.com/easy-designs/eCSStender.transitions.js
License:        MIT License 
Note:           If you change or improve on this script, please let us know by
                emailing the author (above) with a link to your demo page.
------------------------------------------------------------------------------*/
(function(){if(typeof eCSStender=="undefined"){return}var c=eCSStender,a=new b(c);function b(h){var q="property",g="-moz-",j="-webkit-",m="-khtml-",o="-o-",p="-ms-",i=" ",d=": ",f="; ",k="transition-duration",n=d+"0.5s";h.register({fragment:"transition",test:function(){var e=k+n;return(!h.isSupported(q,e))},fingerprint:"net.easy-designs."+k},false,l);function l(e,s,r){var t="",u;for(var v in s){if(h.isInheritedProperty(s,v)){continue}u=v+d+s[v]+f;t+=g+u+j+u+m+u+o+u+p+u}if(t!=""){h.embedCSS(e+" { "+t+" } ",r)}}}})();