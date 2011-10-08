/*------------------------------------------------------------------------------
Function:			 FunctionHandler()
Author:				 Aaron Gustafson (aaron at easy-designs dot net)
Creation Date:	2009-04-02
Version:				0.2
Homepage:			 http://github.com/easy-designs/FunctionHandler.js
License:				MIT License (see homepage)
Note:					 If you change or improve on this script, please let us know by
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
(function(a){if(a.fn.jquery.replace(/\./g,"")<143){throw new Error("jQuery 1.4.3 or higher is required");return}a.fn.ajaxInclude=function(){return this.each(function(){var d=a(this),f=d.data("target"),e=f&&a(f)||d,b=["append","replace","before","after"],h=b.length,g,c;while(h--){g=b[h];if(d.is("[data-"+g+"]")){c=d.data(g);break}}if(g=="replace"){g+="With"}if(c&&g){a.get(c,function(i){d.trigger("ajaxInclude",[e,i]);e[g](i)})}})}})(jQuery);


jQuery.getScripts = function(scripts, onComplete)
{
	var
	i	= 1,
	ii = scripts.length,
	s	= ii + 1,
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
		$('body')
			.bind( 'ajaxInclude', function(){
				
				// only if a large screen
				if ( $(window).width() > 700 )
				{
					// only run the form thing once
					$(this).delegate('#comment_form input, #comment_form textarea','focus',function setup(){
						// remove this delegation
						$('body').undelegate('#comment_form input, #comment_form textarea');
						// load the stuff
						$.getScript('/js/jquery.textile.js',function(){
							var
							$comments	= $('#comments .hfeed'),
							$name		= $('#comments-name'),
							$text		= $('#comments-comment'),
							$preview	= $('<li class="preview hentry">' +
											'<div class="entry-content"></div>' + // this needed to be a div for IE
											'<ul class="meta"><li>' + 
											'<img class="photo" src="/img/gravitar.png" alt=""/><span></span>' + 
											'</li><li>This is a preview</li></ul>' + 
											'</li>').hide(),
							$comment	= $preview.find('.entry-content');
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
							$name.bind('keyup blur change',updatePreview);
							$text.bind('keyup blur change',updatePreview);
						});
					});
					
					$('#bookmark a').click(function(e){
						e.preventDefault();
						window.open(this.href,'share-this','height=300,width=500,status=no,toolbar=no');
					});
				}
				
			});
		
		
		$("[data-append],[data-replace],[data-after],[data-before]")
			.ajaxInclude();

		
		
		//if ( $(window).width() >  )
		// Google+
		//(function() {
		//	var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		//	po.src = 'https://apis.google.com/js/plusone.js';
		//	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		//})();
	});