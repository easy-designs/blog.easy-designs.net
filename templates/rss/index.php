<?php

global $IN, $DB, $PREFS;

$archives		 = array( 'author', 'category', 'tag' );
$archive		 = $IN->fetch_uri_segment(2);
$sub_archive = $IN->fetch_uri_segment(3);
$username = $category = '';
$title			 = 'Recent Posts';
$base				 = '/archives/';
$limit 			 = 10;
if ( ! empty( $archive ) &&
		 in_array( $archive, $archives ) &&
		 ! empty( $sub_archive ) )
{
	$not_found = TRUE;
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
        $not_found = FALSE;
				$username  = $query->row['username'];
				$title     = 'Posts by ' . $query->row['screen_name'];
				if ( $IN->GBL( 'no-limit', 'GET' ) ) $limit = '';
			}
			break;
		default:
			$base .= "by-{$archive}/{$sub_archive}/";
			$query = $DB->query(
				"SELECT `cat_id`,
								`cat_name`
				 FROM		`{$PREFS->ini('db_prefix')}_categories`
				 WHERE	`cat_url_title` = '{$sub_archive}'"
			);
			if ( $query->num_rows > 0 )
			{
				$not_found = FALSE;
				$title		 = ( $archive=='tag' ? "Posts Tagged “{$query->row['cat_name']}”"
									 										: "Posts Filed Under “{$query->row['cat_name']}”" );
				$category  = $query->row['cat_id'];
				if ( $IN->GBL( 'no-limit', 'GET' ) ) $limit = '';
			}
			break;
	}
}
elseif ( ! empty( $archive ) &&
		     ! in_array( $archive, $archives ) )
{
	$not_found = TRUE;
}

if ( $not_found )
{
	header('Location: /rss/');
	exit;
}

?>
{exp:rss:feed weblog="{master_weblog_name}" show_future_entries="no" parse="inward"}
<?xml version="1.0" encoding="{encoding}"?>
{assign_variable:master_weblog_name="blog"}
{assign_variable:permalink="{site_url}archives/{entry_date format='%Y/%m/%d'}/{url_title}/"}
<rss version="2.0"
		 xmlns:dc="http://purl.org/dc/elements/1.1/"
		 xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
		 xmlns:admin="http://webns.net/mvcb/"
		 xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
		 xmlns:content="http://purl.org/rss/1.0/modules/content/">
	<channel>
		<title>{exp:xml_encode}Easy Reader: <?php echo $title; ?>{/exp:xml_encode}</title>
		<link><?php echo $base; ?></link>
		<language>{weblog_language}</language>
		<dc:language>{weblog_language}</dc:language>
		<description>{exp:xml_encode}{weblog_description}{/exp:xml_encode}</description>
		<copyright>(c) Copyright 2005–{current_time format='%Y'} Easy! Designs, LLC. All rights reserved unless otherwise noted.</copyright>
		<dc:rights>(c) Copyright 2005–{current_time format='%Y'} Easy! Designs, LLC. All rights reserved unless otherwise noted.</dc:rights>
		<dc:creator>{exp:xml_encode}Easy! Designs, LLC{/exp:xml_encode}</dc:creator>
		<dc:date>{gmt_date format="%Y-%m-%d"}</dc:date>
		<admin:generatorAgent rdf:resource="http://expressionengine.com/" />
	{exp:weblog:entries weblog="{master_weblog_name}" limit="<?php echo $limit; ?>" rdf="off"
											category="<?php echo $category; ?>" username="<?php echo $username; ?>" 
											orderby="date" sort="desc" sticky="off" status="open"
											cache="yes" refresh="30"
											disable="category_fields|member_data|pagination|trackbacks"}
		<item>
			<title>{exp:xml_encode}{title}{/exp:xml_encode}</title>
			<author>{screen_name}</author>
			<description>{exp:xml_encode}{entry_excerpt}{/exp:xml_encode}</description>
		{if categories}
			<dc:subject>{exp:xml_encode}{categories backspace="2"}{category_name}, {/categories}{/exp:xml_encode}</dc:subject> 
		{/if}
			<link>{permalink}</link>
			<guid>{permalink}</guid>
			<dc:date>{entry_date format="%Y-%m-%dT%H:%i:%s%Q"}</dc:date>
			<pubDate>{entry_date format="%D, %j %M %Y %H:%i:%s %Q"}</pubDate>
		</item>
	{/exp:weblog:entries}
	</channel>
</rss>
{/exp:rss:feed}