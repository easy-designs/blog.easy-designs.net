<body{if embed:body_id} id="{embed:body_id}"{/if}{if embed:body_class} class="{embed:body_class}"{/if}>
	<header role="banner" id="page-header">
{if '{embed:body_id}'=='home'}
		<h1 id="logo">
{if:else}
 		<h4 id="logo"><a href="/" title="Return to the homepage">
{/if}
			<img src="{cdn}/general/easy-blog.png" alt="The Easy Designs Blog" />
{if '{embed:body_id}'=='home'}
		</h1>
{if:else}
		</a></h4>
{/if}

	</header>
	<section id="content">
