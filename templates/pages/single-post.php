{exp:lg_replace:haystack needles="the_entry_id|the_permalink|comment_link|comment_form"}

{exp:weblog:entries weblog="blog" limit="1" require_entry="yes" rdf="off"
                    track_views="one" disable="categories|pagination|trackbacks"}
	{if no_results}
		{redirect="errors/404"}
	{/if}

	{!-- variables for insertion elsewhere --}
	{exp:lg_replace:replacement needle="the_entry_id"}{entry_id}{/exp:lg_replace:replacement}
	
	{exp:lg_replace:replacement needle="the_permalink"}{site_url}archives/{entry_date format='%Y/%m/%d'}/{url_title}/{/exp:lg_replace:replacement}

	{exp:lg_replace:replacement needle="comment_link"}{if allow_comments}<a href="#comment-form">Be the first</a>.{/if}{/exp:lg_replace:replacement}

	{exp:lg_replace:replacement needle="comment_form"}
		<section id="comment-form" class="focal">
			<h2>Post a Comment</h2>
		{if allow_comments}
			{embed="inc/.comment-form" entry_id="{entry_id}" return="{site_url}archives/{entry_date format='%Y/%m/%d'}/{url_title}/#comments"}
		{/if}
		{if allow_comments==FALSE}
			<p>Comments are now closed on this entry.</p>
		{/if}
		</section>
	{/exp:lg_replace:replacement}
	{!-- end variables for insertion elsewhere --}

{embed="inc/.head" entry_id="{entry_id}" title="{title}" canonical_url="{the_permalink}"
									 author="{screen_name}"}
{embed="inc/.header" body_id="single-entry"}

		<section role="main" id="main">
			<article role="article" class="focal">

				<header>
					<h1>{exp:typogrify}{title}{/exp:typogrify}</h1>
					<h3 class="meta">Posted by <a href="/archives/by-author/{username}/">{author}</a> on <time class="published" datetime="{entry_date format='%Y-%m-%dT%H:%i:%s'}" pubdate="pudate">{entry_date format='%d %F %Y'}</time> | 
  					<a rel="bookmark" href="{the_permalink}">Permalink</a></h3>
				</header>
		  	{exp:typogrify}{exp:replace find="<p><div|</div></p>" replace="<div|</div>" multiple="yes"}
					{exp:allow_eecode embed="y"}
						{entry_body}
					{/exp:allow_eecode}
				{/exp:replace}{/exp:typogrify}

			</article>

{embed="inc/.sidebar" entry_id="{entry_id}" author="{username}"}

{/exp:weblog:entries}

			<section id="comments" class="focal">
				<h2>Comments</h2>
{exp:comment:entries sort="asc"}
	{if no_results}
				<p id="no-comments">No comments have been left on this entry. {comment_link}</p>
	{/if}
	{if count=="1"}
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
			</section>

{comment_form}{!-- comes from LG Replace (above) --}

{embed="inc/.pagination" entry_id="{the_entry_id}"}{!-- comes from LG Replace (above) --}

{/exp:lg_replace:haystack}

		</section>{!-- #main --}
		
{embed="inc/.footer"}