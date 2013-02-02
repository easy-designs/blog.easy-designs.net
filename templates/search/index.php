{assign_variable:easy_images="http://cdn1.easy-designs.net/global"}
{assign_variable:permalink="/archives/{entry_date format='%Y/%m/%d'}/{url_title}/"}

{embed="inc/.head"}
{embed="inc/.header" body_id="archive" body_class="search"}

    <section id="main">
      <article class="focal">
				<header>
          <h1>{exp:typogrify}Search Results{/exp:typogrify}</h1>
				</header>

				<p>You searched for <em class="term">{exp:search:keywords}</em>. Your search returned {exp:search:total_results} results.</p>

				<ol class="hfeed" id="search-results" class="focal"> 
{exp:search:search_results rdf="off"}
					<li class="hentry{if count=='10' OR count==total_results} last{/if}">
          	<article>
            	<ul class="meta">
  {exp:query sql="SELECT `url_title` AS `author_url_title`
                  FROM   `exp_weblog_titles` AS `t`
                    INNER JOIN `exp_members` AS `m` ON `t`.`author_id` = `m`.`member_id`
                  WHERE  `m`.`username` = '{username}'
                    AND  `t`.`weblog_id` = 8"}
	              <li class="author vcard">
	                <a href="/archives/by-author/{author_url_title}/">
	                  <img src="{easy_images}/{author_url_title}-wide.jpg" alt=""/>
	                  <b class="frame"></b>
	                  <span class="fn">{author}</span>
	                </a>
	              </li>
  {/exp:query}
	              <li><time class="published" datetime="{entry_date format='%Y-%m-%dT%H:%i:%s'}" pubdate="pudate">{entry_date format='%d %M %Y'}</time></li>
                {categories show="151|184|183"}<li>
									<a rel="tag" href="/archives/by-category/{category_name}/">{category_name}</a>
								</li>{/categories}
                {if comment_total!="0"}<li><a href="{permalink}#comments">{comment_total} Comment{if comment_total!="1"}s{/if}</a></li>{/if}
              </ul>
              <section class="body">
                <h2><a class="entry-title" rel="bookmark permalink" href="{permalink}">{exp:typogrify}{exp:search_summary hash="{segment_2}"}{title}{/exp:search_summary}{/exp:typogrify}</a></h2>
                <p class="entry-summary">
									{exp:typogrify}
									  {exp:search_summary hash="{segment_2}"}
											{entry_body}
										{/exp:search_summary}
									{/exp:typogrify}
								</p>
                <p class="more"><a rel="bookmark" href="{permalink}">Read&nbsp;more&#8230;</a></p>
              </section>
          	</article>
					</li>
{/exp:search:search_results}
        </ol> 
      </article>

{exp:bu_search_pagination}
  {if '{total_pages}' != '1'}  
		    <ul id="pagination">
		      <li class="prev">
		        {if "{current_page}"=='1'}<em>Previous Page</em>{/if}
		        {if prev_page_path}<a href="{path={prev_page_path}}"><em>Previous Page</em></a>{/if}
		      </li>
		      <li class="next">
		        {if "{current_page}"=="{total_pages}"}<em>Next Page</em>{/if}
		        {if next_page_path}<a href="{path={next_page_path}}"><em>Next Page</em></a>{/if}
		      </li>
		    </ul>
  {/if}
{/exp:bu_search_pagination}

{embed="inc/.sidebar" version="archive"}

  	</section>

{embed="inc/.footer"}