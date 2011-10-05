{exp:lg_replace:haystack needles="the_permalink|comment_form"}

	{exp:weblog:entries weblog="blog" url_title="{embed:url_title}" cache="yes" refresh="360"}

		{exp:lg_replace:replacement needle="the_permalink"}{site_url}archives/{entry_date format='%Y/%m/%d'}/{url_title}/{/exp:lg_replace:replacement}

		{exp:lg_replace:replacement needle="comment_form"}
		    {if allow_comments}
		<section id="comment-form" class="focal">
			<h2>Post a Comment</h2>
			{embed="inc/.comment-form" entry_id="{entry_id}" return="{site_url}archives/{entry_date format='%Y/%m/%d'}/{url_title}/#comments"}
		</section>
			{/if}
		{/exp:lg_replace:replacement}
		{!-- end variables for insertion elsewhere --}

	{/exp:weblog:entries}

	{exp:comment:entries sort="asc" url_title="{embed:url_title}"}
	   	{if no_results}
		        <h2>Comments</h2>
    			<p id="no-comments">No comments have been left on this entry.</p>
	   	{/if}
		{if count=="1"}
        		<h2>Comments</h2>
    	        <ol class="hfeed">
		{/if}
					<li class="hentry" id="comment-{comment_id}">
						<article class="entry-content">
							{exp:typogrify}{comment}{/exp:typogrify}
						</article>
						<ul class="meta">
							<li class="author vcard">
		{if '{url}'!=''}
								<a class="url" href="{url}">
		{/if}
									<img src="/img/css/frame-comment-avatar.png" style="background-image:url({exp:gravatar email='{email}' size='32' default='{site_url}img/gravitar.png'});" alt=""/>
									<span class="fn">{name}</span>
		{if '{url}'!=''}
	  						</a>
		{/if}
							</li>
							<li><time class="published" datetime="{comment_date format='%Y-%m-%dT%H:%i:%s'}" pubdate="pudate">{comment_date format="%d %F %Y at %g%a"}</time> | <a rel="bookmark" title="Permalink to this comment" href="{the_permalink}#comment-{comment_id}">#</a></li>
						</ul>
					</li>
		{if count==total_results}
				</ol>
		{/if}
	{/exp:comment:entries}

	{comment_form}{!-- comes from LG Replace (above) --}

{/exp:lg_replace:haystack}