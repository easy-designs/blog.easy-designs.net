/*! Dependent Anchor Include Pattern */
/*
 * Copyright 2011, Scott Jehl (scottjehl.com), Emil Bjorklund (thatemil.com),
 * and Aaron Gustafson (aaron-gustafson.com)
 * 
 * Dual licensed under the MIT
 * Idea from Scott Gonzalez
 * 
 * to use, place attributes on an already-functional anchor pointing to content
 * that should either replace, or insert before or after that anchor
 * after the page has loaded
 * 
 * Replace:	<a href="…" data-replace="articles/latest/fragment">Latest Articles</a>
 * Before:	<a href="…" data-before="articles/latest/fragment">Latest Articles</a>
 * After:	<a href="…" data-after="articles/latest/fragment">Latest Articles</a>
 * 
 * On domready, you can use it like this: 
 * 
 *	$("[data-append],[data-replace],[data-after],[data-before]").ajaxInclude();
 * 
 * To set certain elements to lazy load based on specific CSS-based breakpoint
 * indicators, set the indicator in your CSS like this:
 * 
 * 	body:after {
 *		content: 'large';
 *		display: none;
 *	}
 * 
 * Then add a corresponding attribute to the lazy-loading element:
 * 
 *   <a href="…" data-include-size="large" data-replace="articles/latest/fragment">Latest Articles</a>
 * 
 * If you would like the element to insert the fragment when the user taps it,
 * add the data-include-on-tap attribute:
 * 
 *   <a href="…" data-include-on-tap data-replace="articles/latest/fragment">Comments</a>
 * 
 */
(function( $, window, document, UNDEFINED ){
	
	if ( $.fn.jquery.replace(/\./g,'') < 143 )
	{ 
		throw new Error('jQuery 1.4.3 or higher is required');
		return;
	}
	
	var tap_evt = 'click';
	if ( 'ontouchstart' in window ||
		 'createTouch' in document )
	{
		tap_evt = 'touchend';
	}
	
	function watchResize( callback )
	{
		var resizing;
		callback.size = 0;
		function done()
		{
			var curr_size = window.innerWidth;
			clearTimeout( resizing );
			resizing = null;
			// only run on a true resize
			if ( callback.size != curr_size )
			{
				callback();
				callback.size = curr_size;
			}
		}
		window.addEventListener('resize', function(){
			if ( resizing )
			{
				clearTimeout( resizing );
				resizing = null;
			}
			resizing = setTimeout( done, 50 );
		});
		// init
		callback();
	}
	
	$.fn.ajaxInclude = function()
	{
		return this.each(function(){
			
			var $el			= $( this ),
				target		= $el.data( 'target' ),
				size		= $el.data('include-size'),
				$targetEl	= target && $( target ) || $el,
				methods		= [ 'append', 'replace', 'before', 'after' ],
				ml			= methods.length,
				loaded		= false,
				method,
				url;
			
			// Lazy loader function
			function lazyLoad()
			{
				if ( loaded )
				{
					return;
				}
				
				while ( ml-- )
				{
					method	= methods[ ml ];
					if ( $el.is( '[data-' + method + ']' ) )
					{
						url		= $el.data( method );
						break;
					}
				}

				if ( method == 'replace' )
				{
					method += 'With';
				}

				if ( url && method )
				{
					$.get( url, function( data ){
						$el.trigger( 'ajaxInclude', [$targetEl, data] );
						$targetEl[ method ]( data );
					});
				}
				
				loaded = true;
				
			}
			
			// manage link or button clicks
			if ( $el.is('[data-include-on-tap]') )
			{
				$el.on( tap_evt, function(e){
					
					e.preventDefault();
					lazyLoad();
					
				});
			}

			// watch resizing of the browser
			watchResize(function(){
				
				// get the current size and match it against the test value (sans quotes)
				var MQ = window.getComputedStyle(document.body,':after').getPropertyValue('content').replace(/"/g,'');
				
				if ( size != UNDEFINED &&
					 size != MQ )
				{
					return;
				}
				
				lazyLoad();
				
			});

		});
		
	};
	
})( jQuery, window, document );