<!DOCTYPE html>
<html lang="{lang}" id="easy-reader_net" itemscope itemtype="http://schema.org/Blog" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml">
<head>

	<meta charset="{charset}"/>
	<meta http-equiv="Content-Language" content="{lang}"/>

{exp:lg_better_meta_pl:template}
	
	<meta property="og:site_name" content="The Easy Designs Blog" />
	<meta property="og:image" content="{site_url}img/facebook-icon.png" />
	<meta property="og:locale" content="en_US" />
	<meta property="fb:admins" content="aaronmgustafson" />
{if "{embed:post}"=="Y"}
	<meta property="og:type" content="article" />
	<meta property="og:title" content="{embed:title}" />
	<meta property="og:description" content="{embed:description}" />
	<meta property="og:url" content="{embed:canonical_url}" />
{if:else}
	<meta property="og:type" content="blog" />
	<meta property="og:title" content="The Easy Designs Blog" />
	<meta property="og:description" content="We are the people that power Easy Designs, a content-focused web development consultancy. We live to improve the usability, accessibility, findability, and interoperability of the web through the use of web standards, progressive enhancement, and other best practices. This is our blog." />
	<meta property="og:url" content="{site_url}" />
{/if}
	<meta name="medium" content="blog" />
	
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