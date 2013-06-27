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
(function( $, window, document, UNDEFINED ){
	
	if ( $.fn.jquery.replace(/\./g,'') < 143 )
	{ 
		throw new Error('jQuery 1.4.3 or higher is required');
		return;
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

			watchResize(function(){
				
				var MQ = window.getComputedStyle(document.body,':after').getPropertyValue('content');
				
				if ( loaded ||
					 ( size != UNDEFINED &&
					   size != MQ ) )
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
				
			});

		});
	};
})( jQuery, window, document );