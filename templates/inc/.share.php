{assign_variable:css_images="http://cdn3.easy-designs.net/css"}
{assign_variable:this_url="<?php echo urlencode( 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ); ?>"}

				<h2>Like what you read? Spread the word</h2>
				<section id="bookmark">
	      			<p class="twitter"><a href="http://twitter.com/share" class="twitter-share-button" data-count="none" data-via="EasyDesigns"><img src="{css_images}/button-twitter-enabled.png" alt="Tweet"/></a></p>
	                <p class="facebook"><a href="http://www.facebook.com/sharer.php?u={this_url}"><img src="{css_images}/button-facebook-enabled.png" alt="Like on Facebook"/></a></p>
					<p class="linkedin"><a href="https://www.linkedin.com/cws/share?url={this_url}&amp;original_referer={this_url}"><img src="{css_images}/button-linkedin-enabled.png" alt="Share on LinkedIn"/></a></p>
<?php	/*                <p class="google_plus"><a href="https://plusone.google.com/_/+1/confirm?hl=en-US&amp;url=<?php echo $page; ?>&amp;referer=<?php echo $page; ?>" class="g-plusone" data-annotation="none" data-size="small">+1</a><!--div class="g-plusone" data-annotation="none"></div--></p> */ ?>
	            </section>