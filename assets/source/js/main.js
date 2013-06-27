
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
(function($){var FunctionHandler={version:"0.2"},pages={};function initialize(){var body_id=$("body").attr("id");if(body_id!=false&&typeof(pages[body_id])!="undefined"){run(pages[body_id])}if(typeof(pages["*"])!="undefined"){run(pages["*"])}}$(document).ready(initialize);FunctionHandler.register=function(id,callback){if((typeof(id)!="string"&&!(id instanceof Array))||typeof(callback)!="function"){return false}if(typeof(id)=="string"&&id.indexOf(", ")!=-1){id=id.split(", ")}if(id instanceof Array){for(var i=id.length-1;i>=0;i--){add(id[i],callback)}}else{add(id,callback)}return true};function add(id,callback){if(typeof(pages[id])=="undefined"){pages[id]=[]}pages[id].push(callback)}function run(arr){if(!(arr instanceof Array)){return}for(var i=arr.length-1;i>=0;i--){arr[i]()}}window.FunctionHandler=FunctionHandler})(jQuery);

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
		jQuery.getScript( scripts[s-1], onScriptLoaded );
		s--;
	}
};

// SVG Handling
// Adapted from Modernizr
(function( $, document, UA ){

	var has_svg = ( !!document.createElementNS && !!document.createElementNS( 'http://www.w3.org/2000/svg', 'svg' ).createSVGRect ),
		Opera_Mini = UA.indexOf( 'Opera Mini' ) > -1;
		
	if ( has_svg && ! Opera_Mini )
	{
		$('html').addClass('has-svg');
	}
	
}( jQuery, document, window.navigator.userAgent ));


(function($){
	
	var $field = $('#search'),
		val = '',
		empty = '';
	
	$field
		.on( 'focus', function(){
			val = $field.val();
			$field.val( empty );
		})
		.on( 'blur', function(){
			if ( $field.val() == empty )
			{
				$field.val( val );
			}
		});
	
}(jQuery));


(function($, WIN){
	
	var tap_evt = 'click';
	if ( 'ontouchstart' in window ||
		 'createTouch' in document )
	{
		tap_evt = 'touchend';
	}
	
	FunctionHandler.register(
		'*',
		function()
		{

			// for iOS (remove the toolbar)
			if ( WIN.location.hash == '' )
			{
	  			WIN.scrollTo(0, 1);
			}

			/*! Make labels clickable in touch (looking at you iOS) */
			if ( tap_evt != 'click' )
			{
				$('label').attr('onclick','');
			}

			// Typekit
			$.getScript('http://use.typekit.com/tjo5hgd.js',function(){
				try {Typekit.load();} catch( e ) {}});

			// Google Analytics
			//window._gaq = window._gaq || [];
			//window._gaq.push(['_setAccount', 'UA-176472-7']);
			//window._gaq.push(['_trackPageview']);
            //
			//(function() {
			//	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			//	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			//	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			//})();
			
			$("[data-append],[data-replace],[data-after],[data-before]")
				.ajaxInclude();

		});

	FunctionHandler.register(
		'single-entry',
		function()
		{
			$('body')
				.bind( 'ajaxInclude', function(){

					// only if a large screen
					if ( window.getComputedStyle(document.body,':after').getPropertyValue('content') == 'large' )
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

					}

				});
			
			$('#bookmark').on( tap_evt, 'a', function(e){
				if ( $(WIN).width() > 700 )
				{
					e.preventDefault();
					WIN.open(this.href,'share-this','height=300,width=500,status=no,toolbar=no');
				}
			});
			
			function adjustIframes()
			{
				$('iframe').each(function(){
					var
					$this		= $(this),
					proportion	= $this.data( 'proportion' ),
					w			= $this.attr('width'),
					actual_w	= $this.width();
					
					if ( ! proportion )
					{
						proportion = $this.attr('height') / w;
						$this.data( 'proportion', proportion );
					}

					if ( actual_w != w )
					{
						$this.css( 'height', Math.round( actual_w * proportion ) + 'px' );
					}
				});
			}
			$(WIN).bind('resize load',adjustIframes);
		});
			
})(jQuery,window);