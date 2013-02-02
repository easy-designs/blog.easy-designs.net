<?php

global $IN, $DB, $PREFS;

$archives    = array( 'author', 'category', 'tag', 'date' );
$archive     = $IN->fetch_uri_segment(3);
$sub_archive = $IN->fetch_uri_segment(4);
$username = $category = $day = $month = $year = '';
$title       = 'Post Archive';
$base        = '/archives/';
if ( ! empty( $archive ) &&
     in_array( $archive, $archives ) &&
     ! empty( $sub_archive ) )
{
	$show = 'not found';
	switch ( $archive )
	{
		case 'author':
		  $base .= "by-{$archive}/{$sub_archive}/";
			$query = $DB->query(
			  "SELECT `m`.`screen_name`,
			          `m`.`username`
			   FROM   `{$PREFS->ini('db_prefix')}_members` AS `m`
			     INNER JOIN `exp_weblog_titles` AS `t` ON `t`.`author_id` = `m`.`member_id`
				 WHERE  `t`.`url_title` = '{$sub_archive}'"
			);
			if ( $query->num_rows > 0 )
			{
				$show     = $archive;
				$username = $query->row['username'];
				$title    = 'Posts by ' . $query->row['screen_name'];
			}
			break;
		case 'date':
		$show = $archive;  
		$year  = $sub_archive;
		  $month = $IN->fetch_uri_segment(5);
		  $day   = $IN->fetch_uri_segment(6);
		  if ( ! empty( $day ) && is_numeric( $day ) )
			{
				$base .= "{$year}/{$month}/{$day}/";
				$title = 'Posts from ' . date( 'd F Y', strtotime("{$year}-{$month}-{$day}") );
			}
			elseif ( ! empty( $month ) && is_numeric( $month ) )
			{
			  $base .= "{$year}/{$month}/";
				$title = 'Posts from ' . date( 'F Y', strtotime("{$year}-{$month}") );
			}
			else
			{
			  $base .= "{$year}/";
				$title = "Posts from {$year}";
			}
		  break;
		default:
		  $base .= "by-{$archive}/{$sub_archive}/";
			$query = $DB->query(
			  "SELECT `cat_id`,
								`cat_name`
			   FROM   `{$PREFS->ini('db_prefix')}_categories`
				 WHERE  `cat_url_title` = '{$sub_archive}'"
			);
			if ( $query->num_rows > 0 )
			{
				$show     = $archive;
				$title    = ( $archive=='tag' ? "Posts tagged &#8220;{$query->row['cat_name']}&#8221;"
																			: "Posts filed under &#8220;{$query->row['cat_name']}&#8221;" );
				$category = $query->row['cat_id'];
			}
		  break;
	}
}

if ( $show == 'not found' )
{
	header('Location: /archives/');
	exit;
}

?>
{assign_variable:easy_images="http://cdn1.easy-designs.net/global"}
{assign_variable:permalink="/archives/{entry_date format='%Y/%m/%d'}/{url_title}/"}

{embed="inc/.head" title="<?php echo $title; ?>"}
{embed="inc/.header" body_id="archive"}

    <section id="main">
        <article class="focal">

			<header>
                <h1>{exp:typogrify}<?php echo $title; ?>&nbsp;<a href="{if segment_3=="author" OR segment_3=="category" OR segment_3=="tag"}/rss/by-{segment_3}/{segment_4}{if:else}/rss/posts{/if}.rss" title="Subscribe to this archive"><img src="{cdn}/general/rss-icon.png" alt="Subscribe"/></a>{/exp:typogrify}</h1>
			</header>

{exp:weblog:entries weblog="blog" orderby="date" sort="desc" limit="10" rdf="off"
                    category="<?php echo $category; ?>" username="<?php echo $username; ?>" 
					year="<?php echo $year; ?>" month="<?php echo $month; ?>" day="<?php echo $day; ?>"
                    paginate="bottom" paginate_base="<?php echo $base; ?>"}
    {if no_results}
            <p>No posts were found. Sorry.</p>
    {/if}
	{if count=="1"}
	        <ol class="hfeed">
	{/if}
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
                            <h2><a class="entry-title" rel="bookmark permalink" href="{permalink}">{title}</a></h2>
                            <div class="entry-summary">
						        {exp:allow_eecode embed="y"}{entry_excerpt}{/exp:allow_eecode}
					        </div>
                            <p class="more"><a rel="bookmark" href="{permalink}">Read&nbsp;more&#8230;</a></p>
                        </section>
          	        </article>
		        </li>
	{if count==total_results}
	        </ol>
	{/if}
          
  {paginate}
    		<ul id="pagination">
    			{if previous_page}<li class="prev"><a href="{auto_path}"><em>Previous Page</em></a></li>{/if}
    			{if next_page}<li class="next"><a href="{auto_path}"><em>Next Page</em></a></li>{/if}
    		</ul>
  {/paginate}
        
{/exp:weblog:entries}
		</article>

{embed="inc/.sidebar" version="archive"<?php echo $archive=='author' ? "author='{$username}'" : ''; ?>}
      
    </section>{!-- #main --}

{embed="inc/.footer"}