<!DOCTYPE html>
<html lang="{lang}" id="easy-reader_net" itemscope itemtype="http://schema.org/Blog" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml">
<head>

	<meta charset="{charset}"/>
	<meta http-equiv="Content-Language" content="{lang}"/>

{exp:lg_better_meta_pl:template}
	
{if "{embed:post}"=="Y"}
	<meta property="og:site_name" content="{site_name}" />
	<meta property="og:title" content="{embed:title}" />
	<meta property="og:type" content="article" />
	<meta property="og:image" content="{site_url}img/facebook-icon.png?20111216" />
	<meta property="og:url" content="{embed:canonical_url}" />
	<meta property="og:description" content="{embed:description}" />
	<meta property="fb:admins" content="EasyDesignsLLC" />
	<meta name="medium" content="blog" />
{/if}
	
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
	
</head>