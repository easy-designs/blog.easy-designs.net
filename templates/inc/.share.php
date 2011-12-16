{assign_variable:css_images="http://cdn3.easy-designs.net/css"}
{assign_variable:this_url="<?php echo urlencode( 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ); ?>"}

				<section id="bookmark">
					<h2>Like it? Share it</h2>
	      			<p class="twitter"><a href="https://twitter.com/intent/tweet?original_referer={this_url}&amp;source=tweetbutton&amp;text={exp:replace find=" " replace="+"}{embed:title}{/exp:replace}&amp;url={this_url}&amp;via=EasyDesigns" class="twitter-share-button" data-count="none" data-via="EasyDesigns"><img src="{css_images}/button-twitter-enabled.png" alt="Tweet"/></a></p>
	                <p class="facebook"><a href="http://www.facebook.com/sharer.php?u={this_url}"><img src="{css_images}/button-facebook-enabled.png" alt="Like on Facebook"/></a></p>
					<p class="linkedin"><a href="https://www.linkedin.com/cws/share?url={this_url}&amp;original_referer={this_url}"><img src="{css_images}/button-linkedin-enabled.png" alt="Share on LinkedIn"/></a></p>
					<p class="google_plus"><a href="https://m.google.com/app/plus/x/1b6yl2bi94z61/?content={this_url}&amp;v=compose&amp;hideloc=1"><img src="{css_images}/button-googleplus-enabled.png" alt="Share on Google Plus"/></a></p>
	            </section>