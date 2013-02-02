	<link rel="alternate" type="application/rss+xml" title="All Posts" href="/rss/"/>
{if segment_2=="archives"}
	{if segment_3=="author" OR segment_3=="category" OR segment_3=="tag"}
	<link rel="alternate" type="application/rss+xml" title="{embed:title}" href="/rss/by-{segment_3}/{segment_4}.rss"/>
	{/if}
{/if}