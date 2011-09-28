{assign_variable:easy_images="http://cdn1.easy-designs.net/global"}
{assign_variable:my_weblog="blog"}
{assign_variable:team="{exp:structure:child_ids entry_id='388'}"}

			<section class="sidebar" role="complementary"><div class="inner">

{!-- individual post or author archive --}
{if embed:author}

	{exp:weblog:entries site="easy-designs" weblog="staff" username="{embed:author}" 
	                    limit="1" status="open|closed" dynamic="off" rdf="off" 
						disable="categories|category_fields|member_data|pagination|trackbacks"}

				<div class="vcard">
					<figure>
						<img class="photo" src="{easy_images}/{url_title}.jpg" alt="" />
						<b class="frame"></b>
					</figure>
					<h2 class="fn">{title}</h2>
					{staff_mini_bio}
				</div>
				<ul class="browse author">
  	{if embed:version!="archive"}
					<li><a href="/archives/by-author/{url_title}/">See all of {title}&#8217;s posts</a></li>
	  {/if}
					<li><a rel="feed" href="/rss/by-author/{url_title}.rss">Subscribe to {title}&#8217;s posts</a></li>
				</ul>

	{/exp:weblog:entries}

{!-- general archive --}
{if:else}

				<h2>Easy writers</h2>
				<nav role="navigation">
					<ul class="easy-writers">
	{exp:weblog:entries site="easy-designs" entry_id="{team}" fixed_order="{team}"
											dynamic="off" parse="inward" rdf="off"
											disable="categories|category_fields|member_data|pagination|trackbacks"
											cache="yes" refresh="1440"}
						<li class="vcard">
							<a title="{title}" href="/archives/by-author/{url_title}/">
								<img style="background-image: url({easy_images}/{url_title}-sm.jpg);" src="{cdn}/css/frame-author-sm.png" alt=""/>
								<span class="fn">{title}</span>
							</a>
						</li>
	{/exp:weblog:entries}
					</ul>
				</nav>
				
{/if}

{!-- general archive --}
{if embed:version=="archive"}

				<h2>Browse by category</h2>
				<nav role="navigation">
					<ul class="browse">
	{exp:weblog:categories weblog="{my_weblog}" show="151|184|183" parent_only="yes" style="none"}
						<li><a href="/archives/by-category/{category_url_title}/">{category_name}</a></li>
	{/exp:weblog:categories}
					</ul>
				</nav>

				<h2>Browse by tag</h2>
				<nav role="navigation">
					<ul class="browse inline">
	{exp:weblog:categories weblog="{my_weblog}" show="not 151|184|183" style="none"}
		{if category_name!='personal' AND category_name!='Programming' AND category_name!='Process' AND category_name!='Potpourri' AND category_name!='Tags'}
						<li><a href="/archives/by-tag/{category_url_title}/">{category_name}</a></li>
		{/if}
	{/exp:weblog:categories}
					</ul>
				</nav>

				<h2>Browse by year</h2>
				<nav role="navigation">
					<ul class="browse">
	{exp:query sql="SELECT DISTINCT YEAR( FROM_UNIXTIME( `entry_date` ) ) AS `year` 
									FROM	 `exp_weblog_titles`
									WHERE	 `weblog_id` = 1
									ORDER BY `year` DESC"}
						<li><a href="/archives/{year}/">{year}</a></li>
	{/exp:query}
					</ul>
				</nav>

{!-- single entry --}
{if:else}

	{exp:weblog:entries entry_id="{embed:entry_id}" rdf="off"
  										disable="category_fields|member_data|pagination|trackbacks"}
				<h2>Filed under</h2>
				<nav role="navigation">
					<ul class="browse">
		{categories show="151|184|183"}
						<li><a rel="tag" href="/archives/by-category/{category_url_title}/">{category_name}</a></li>
		{/categories}
					</ul>
				</nav>

				<h2>Tagged</h2>
				<nav role="navigation">
					<ul class="browse inline">
		{categories show="not 151|184|183"}
			{if category_name!='personal' AND category_name!='Programming' AND category_name!='Process' AND category_name!='Potpourri' AND category_name!='Tags'}
						<li><a rel="tag" href="/archives/by-tag/{category_url_title}/">{category_name}</a></li>
			{/if}
		{/categories}
					</ul>
				</nav>

		{if entry_related}
				<h2>Related entries</h2>
				<nav role="navigation">
					<ul class="browse also">
				  		{entry_related}
						<li><a href="/archives/{entry_date format='%Y/%m/%d'}/{url_title}/">{title}</a></li>
						{/entry_related}
					</ul>
				</nav>
    	{/if}

		{reverse_related_entries weblog="translations"}
		  {if count=="1"}
				<h2>Available translations</h2>
				<nav role="navigation">
					<ul class="also">
		  {/if}
						<li class="offsite">
							<a href="{translation_link}" hreflang="{translation_language code='yes'}">{translation_language}</a>
						</li>
		  {if count==total_results}
	    			</ul>
				</nav>
		  {/if}
		{/reverse_related_entries}
		
	{/exp:weblog:entries}
	
{/if}

			</div></section>{!-- end sidebar --}