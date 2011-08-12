{assign_variable:my_weblog="blog"}
{assign_variable:my_template_group="blog"}
{assign_variable:permalink="/archives/{entry_date format='%Y/%m/%d'}/{url_title}"}
      <aside id="elsewhere" class="promo"><div class="inner">
        
        <section id="software">
          <h2>We made this</h2>
          <h3 class="figure featured">
            <a href="http://ecsstender.org">
            <img title="eCSStender" src="{cdn}/general/ecsstender-logo.png" alt="" />
            <b class="frame"><b></b></b>
          </a>
          </h3>
          <p><strong>Take control of your CSS!</strong> Say goodbye to the browser-specific properties and hacks cluttering your files and say hello to lean, mean CSS. With <a href="http://ecsstender.org">eCSStender</a>, when you write the rules, browsers pay attention.</p>
        </section>
        
        <section id="retreats">
          <h2>Learn with us</h2>
          <h3 class="figure featured">
            <a href="http://retreats4geeks.com/2010/retreat-js/">
              <img title="eCSStender" src="{cdn}/general/r4g-logo.png" alt="" />
              <b class="frame"><b></b></b>
            </a>
          </h3>
          <p>Join us April 8th&#8211;10th, 2011 for <a href="http://retreats4geeks.com/2011/html5-css3/">our HTML5 &amp; CSS3 retreat</a>, an intimate training experience in a beautiful setting, tailored to attendees, and focused on topics you want to cover.</p>
        </section>
        
<?php global $DB;

      $future = (bool)$DB->query(
        "SELECT count(`title`) AS `count`
         FROM   `exp_weblog_titles`
         WHERE  `weblog_id` = 6
           AND  `entry_date` > UNIX_TIMESTAMP()"
      )->row['count'];
      
      $block = $future ? '366' : '367'; ?>
        <section id="events">
{exp:weblog:entries site="easy-designs" weblog="blocks" entry_id="<?php echo $block; ?>" dynamic="off"
                    disable="categories|category_fields|custom_fields|member_data|pagination|trackbacks"}
					<h2>{title}</h2>
{/exp:weblog:entries}
					<ol class="hcalendar">
{exp:weblog:entries site="easy-designs" weblog="events"
										dynamic="off" category="not 131"
<?php if ( $future ): ?>
										show_expired="no" show_future_entries="yes" 
<?php else: ?>
										show_expired="yes" show_future_entries="no" 
<?php endif; ?>
                    orderby="entry_date" sort="<?php echo $future ? 'asc' : 'desc'; ?>" limit="5"
                    disable="categories|category_fields|member_data|pagination|trackbacks"}
            <li class="vevent">
              <p class="when">{exp:daterange microformatted="yes" html5="yes" start="{entry_date}" end="{expiration_date}"}</p>
              <h3 class="summary">
	{if event_url OR upcoming_id}
								<a rel="external" href="{if event_url}{exp:ee_typography formatting="none" auto_link="n" allowed_html="none"}{event_url}{/exp:ee_typography}{if:else}http://upcoming.yahoo.com/event/{upcoming_id}/{/if}">{event_series}</a>
	{if:else}
								{title}
	{/if}
							</h3>
            </li>
{/exp:weblog:entries}
          </ol>
        </section>
	 			
	 			
	 			
	 			
{!--    # temporarily commenting out this content (until our site launches)
        <section id="publications">
          <h2>More to read</h2>
{exp:weblog:entries site="easy-designs" weblog="publications" dynamic="off" rdf="off"
                    orderby="entry_date" sort="DESC" limit="1"
                    disable="category_fields|member_data|pagination|trackbacks"}
          <h3><a rel="bookmark permalink" href="http://easy-designs.net/portfolio/publications/{categories}{category_url_title}s{/categories}/{url_title}/">{title}</a></h3>
          <p class="meta">by {pub_authors}</p>
					{pub_excerpt}
{/exp:weblog:entries}
        </section>
        <section id="portfolio">
          <h2>More to see</h2>
{exp:weblog:entries site='easy-designs' weblog="project_images" parse="inward"
                    entry_id="{exp:random_sticky_entries site='easy-designs' weblog='project_images' limit='1'}"
                    dynamic="off" orderby="random" limit="1"
                    disable="categories|category_fields|member_data|pagination|trackbacks"}
          <h3 class="figure featured">
  					{related_entries id="image_project"}
            <a href="http://easy-designs.net/portfolio/projects/{url_title}/">
  					{/related_entries}
  		  			<img src="http://images.easy-designs.net/projects/{image_file}-md.png" alt="{image_title}" />
  		  			<b class="frame"><b></b></b>
  						{related_entries id="image_project"}
              {exp:typogrify}{title}{/exp:typogrify}
            </a>
          </h3>
          {exp:typogrify}
            {exp:word_limit_plus if_exceeds="15" stop_after="10" the_link=''}
              {project_brief}
            {/exp:word_limit_plus}
          {/exp:typogrify}
  				{/related_entries}
{/exp:weblog:entries}
        </section>
        <section id="presentations">
          <h2>More to learn</h2>
          <ul>
{exp:weblog:entries weblog="presentation" site="easy-designs" dynamic="off" sticky="off"
										orderby="entry_date" sort="desc" limit="3" parse="inward"
										disable="categories|category_fields|member_data|pagination|trackbacks"}
            <li>
              <h3>{related_entries id='presentation_event'}<a href="http://easy-designs.net/portfolio/education/{url_title}/">{/related_entries}{title}</a></h3>
							<p class="meta">Presented by {presentation_by} at {related_entries id='presentation_event'}<a href="http://easy-designs.net/portfolio/education/{url_title}/">{event_series}</a> in <span class="location">{event_location}</span>{/related_entries}</p>
            </li>
{/exp:weblog:entries}
          </ul>
        </section>
				# ending the comment --}
      </div></aside>