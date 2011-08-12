{embed="inc/.head"}
{embed="inc/.header" body_id="home"}

    <section id="main">
      <article class="focal">

        <h4 id="tagline" class="front-n-center">We may be <em>easy</em>, but&nbsp;we&#8217;ve&nbsp;got&nbsp;<em>standards</em>.</h4>

        <section id="teasers">
          <ul class="hfeed">
{exp:weblog:categories show="151|184|183" weblog="blog" disable="category_fields" style="linear"}
  {exp:weblog:entries weblog="blog" category="{category_id}"
                      orderby="date" sort="desc" limit="1" rdf="off"}
              <li class="hentry" id="{category_url_title}">
                <h3>
									<a rel="tag" href="/archives/by-category/{category_url_title}/">
										<img src="{category_image}" alt=""/>
										{category_name}
									</a>
								</h3>
                <h2><a class="entry-title" rel="bookmark permalink" href="/archives/{entry_date format='%Y/%m/%d'}/{url_title}/">{title}</a></h2>
                <div class="entry-summary">
									{entry_excerpt}
								</div>
                <ul class="meta">
	  {exp:query sql="SELECT `url_title` AS `author_url_title`
	                  FROM   `exp_weblog_titles` AS `t`
	                    INNER JOIN `exp_members` AS `m` ON `t`.`author_id` = `m`.`member_id`
	                  WHERE  `m`.`username` = '{username}'
	                    AND  `t`.`weblog_id` = 8"}
                  <li class="author vcard">by <a class="fn" href="/archives/by-author/{author_url_title}/">{author}</a></li>
		{/exp:query}
                  <li><time class="published" datetime="{entry_date format='%Y-%m-%dT%H:%i:%s'}" pubdate="pudate">{entry_date format='%d %F %Y'}</time></li>
                </ul>
              </li>
  {/exp:weblog:entries}
{/exp:weblog:categories}
          </ul>
        </section>{!-- #teasers --}

      </article>
    </section>{!-- #main --}

{embed="inc/.footer"}