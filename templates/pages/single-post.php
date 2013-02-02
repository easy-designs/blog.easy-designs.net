{exp:lg_replace:haystack needles="the_entry_id|the_permalink|comment_loader"}

	{exp:weblog:entries weblog="blog" limit="1" require_entry="yes" rdf="off"
	                    track_views="one" disable="categories|pagination|trackbacks"}
		{if no_results}
			{redirect="errors/404"}
		{/if}

		{!-- variables for insertion elsewhere --}
		{exp:lg_replace:replacement needle="the_entry_id"}{entry_id}{/exp:lg_replace:replacement}
	
		{exp:lg_replace:replacement needle="the_permalink"}{site_url}archives/{entry_date format='%Y/%m/%d'}/{url_title}/{/exp:lg_replace:replacement}

		{exp:lg_replace:replacement needle="comment_loader"}
		    {if allow_comments}
			<section id="comments" class="focal">
				<a id="comment-loader" data-replace="/comments/{url_title}/" href="/archives/{entry_date format='%Y/%m/%d'}/{url_title}/comments/#comments">View comments on this entry and add your own</a>
			</section>
			{/if}
		    {if allow_comments==FALSE AND comment_total!=0}
			<section id="comments" class="focal">
				<a id="comment-loader" data-replace="/comments/{url_title}/" href="/archives/{entry_date format='%Y/%m/%d'}/{url_title}/comments/#comments">View comments on this entry</a>
			</section>
			{/if}
		{/exp:lg_replace:replacement}
		
		{!-- end variables for insertion elsewhere --}

		{embed="inc/.head" entry_id="{entry_id}" post="Y"
		                   title="{title}" canonical_url="{the_permalink}"
						   description="{exp:html_strip}{exp:word_limit_plus if_exceeds="200" stop_after="160"}{entry_excerpt}{/exp:word_limit_plus}{/exp:html_strip}"
						   author="{screen_name}" username="{username}"}
		{embed="inc/.header" body_id="single-entry" body_class="hentry"}

		<section role="main" id="main">
			<article role="article" class="focal">

				<header>
					<h1 itemprop="name" class="entry-title">{exp:typogrify}{title}{/exp:typogrify}</h1>
                    {exp:query sql="SELECT `url_title` AS `author_url_title`
                                    FROM   `exp_weblog_titles` AS `t`
                                    INNER JOIN `exp_members` AS `m` ON `t`.`author_id` = `m`.`member_id`
                                    WHERE  `m`.`username` = '{username}'
                                        AND  `t`.`weblog_id` = 8"}
					<h3 class="meta byline author vcard">Posted by <a class="fn" href="/archives/by-author/{author_url_title}/">{author}</a> on 
					    <time class="published updated" datetime="{entry_date format='%Y-%m-%dT%H:%i:%s'}" pubdate="pudate">{entry_date format='%d %F %Y'}</time> | 
  					    <a rel="bookmark" href="{the_permalink}">Permalink</a></h3>
                    {/exp:query}
				</header>
				<div class="entry-content">

				{exp:easy_src_sencha_io}
					{exp:typogrify}
						{exp:replace find="<p><div|</div></p>" replace="<div|</div>" multiple="yes"}
							{exp:allow_eecode embed="y"}
								{entry_body}
							{/exp:allow_eecode}
						{/exp:replace}
					{/exp:typogrify}
				{/exp:easy_src_sencha_io}

				</div>

				{embed="inc/.share" title="{title}"}

			</article>

		{embed="inc/.sidebar" entry_id="{entry_id}" author="{username}"}

		{if segment_4=="comments"}
			<section id="comments" class="focal">
			{embed="inc/.comments" url_title="{url_title}"}
			</section>
		{if:else}
			{comment_loader}
		{/if}

		{embed="inc/.pagination" entry_id="{entry_id}"}{!-- comes from LG Replace (above) --}

	{/exp:weblog:entries}

{/exp:lg_replace:haystack}

		</section>{!-- #main --}
		
{embed="inc/.footer"}