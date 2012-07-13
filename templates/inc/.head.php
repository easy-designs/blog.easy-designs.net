<!DOCTYPE html>
<html lang="{lang}" id="easy-reader_net" itemscope itemtype="http://schema.org/Blog" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml">
<head>

	<meta charset="{charset}"/>
	<meta http-equiv="Content-Language" content="{lang}"/>

{exp:lg_better_meta_pl:template}
	
	<meta property="og:site_name" content="The Easy Designs Blog" />
	<meta property="og:image" content="{site_url}img/facebook-icon.png?v=20111226" />
	<meta property="og:locale" content="en_US" />
	<meta property="fb:admins" content="aaronmgustafson" />
    <meta name="twitter:card" value="summary"/>
    <meta name="twitter:site" value="@EasyDesigns"/>
{if "{embed:post}"=="Y"}
    {!-- Twitter Card --}
    {exp:weblog:entries site="easy-designs" weblog="staff" username="{embed:username}"
                        limit="1" status="open|closed" dynamic="off" rdf="off"
                        disable="categories|category_fields|member_data|pagination|trackbacks"}
    <meta name="twitter:creator" value="@{staff_twitter}">
    {/exp:weblog:entries}
    {!-- Open Graph --}
	<meta property="og:type" content="article" />
	<meta property="og:title" content="{embed:title}" />
	<meta property="og:description" content="{embed:description}" />
	<meta property="og:url" content="{embed:canonical_url}" />
{if:else}
    {!-- Twitter Card --}
    <meta name="twitter:creator" value="@EasyDesigns"/>
	{!-- Open Graph --}
    <meta property="og:type" content="blog" />
	<meta property="og:title" content="The Easy Designs Blog" />
	<meta property="og:description" content="We are the people that power Easy Designs, a content-focused web development consultancy. We live to improve the usability, accessibility, findability, and interoperability of the web through the use of web standards, progressive enhancement, and other best practices. This is our blog." />
	<meta property="og:url" content="{site_url}" />
{/if}
	<meta name="medium" content="blog" />
	<meta name="readability-verification" content="hZuWXd47SsNtJX3bhRNYJRjtMznZD2fsaD62bp73"/>
	
	<meta name="MSSmartTagsPreventParsing" content="true"/>
	<meta name="Copyright" content="(c) Copyright {copyright_year}. All rights reserved unless otherwise indicated."/>
	<meta http-equiv="imagetoolbar" content="no"/>
	<meta name="Rating" content="General"/>
	<meta http-equiv="X-UA-Compatible" content="chrome=1"/>
	<meta name="viewport" content="width=device-width"/>
	
	<link rel="home" href="/"/>
	<link rel="copyright" href="#copyright"/>
	<link rel="shortcut icon" type="image/ico" href="/favicon.ico"/>
	<!--[if lte IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

{embed="styles/.html"}
{embed="rss/.html" title="{embed:title}"}

	<!-- start Mixpanel -->
	<script type="text/javascript">(function(d,c){var a,b,g,e;a=d.createElement("script");a.type="text/javascript";a.async=!0;a.src=("https:"===d.location.protocol?"https:":"http:")+'//api.mixpanel.com/site_media/js/api/mixpanel.2.js';b=d.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b);c._i=[];c.init=function(a,d,f){var b=c;"undefined"!==typeof f?b=c[f]=[]:f="mixpanel";g="disable track track_links track_forms register register_once unregister identify name_tag set_config".split(" ");for(e=0;e<g.length;e++)(function(a){b[a]=function(){b.push([a].concat(Array.prototype.slice.call(arguments,0)))}})(g[e]);c._i.push([a,d,f])};window.mixpanel=c})(document,[]);
	mixpanel.init("3d4b8695f15126a331ac1a3a71847f21");</script>
	<!-- end Mixpanel -->
</head>