{assign_variable:white="rgb(255, 255, 255)"}
{assign_variable:white_alpha="rgb(255, 255, 255, .43)"}
{assign_variable:black="rgb(30, 30, 30)"}
{assign_variable:text="rgb(65, 65, 65)"}
{assign_variable:text_green="rgb(22, 127, 53)"}
{assign_variable:background_white_alpha="rgba(255, 255, 255, 0)"}
{assign_variable:background_green="rgb(104, 205, 91)"}
{assign_variable:background_green_alpha="rgba(104, 205, 91, 1)"}
{assign_variable:blue="rgb(180, 246, 248)"}
{assign_variable:background_blue="rgb(224, 251, 253)"}
{assign_variable:background_blue_alpha="rgba(180, 246, 248, .43)"}
{assign_variable:background_blue_blue="rgb(204, 249, 251)"}
{assign_variable:background_blue_green="rgb(137, 224, 160)"}
{assign_variable:background_white_blue="rgb(242, 253, 254)"}
{assign_variable:background_white_blue_alpha="rgba(255, 255, 255, .6)"}
{assign_variable:light_green="rgb(84, 173, 68)"}
{assign_variable:dark_green="rgb(17, 126, 63)"}
{assign_variable:yellow="rgb(251, 224, 44)"}
{assign_variable:orange="rgb(242, 98, 42)"}
{assign_variable:dark_orange="rgb(222, 78, 22)"}
{assign_variable:red="rgb(215, 34, 41)"}
{assign_variable:dark_red="rgb(186, 32, 37)"}
{assign_variable:light_grey="rgb(200, 200, 200)"}
{assign_variable:dark_grey="rgb(180, 180, 180)"}

/* =Elements */
body {
  background-color: {white};
  color: {text};
}
a:link, a:visited, a:active {
  color: {text_green};
}
a:hover,
#more a:hover {
  color: {orange};
}
blockquote {
	border-color: {blue};
}
input, select, textarea {
  border-color: {dark_grey};
}
input:hover,
select:hover,
textarea:hover,
input:focus,
select:focus,
textarea:focus {
  border-color: {text};
}
button {
  background-color: {light_green};
  border-color: {dark_green};
  color: {white};
}
button:hover {
  background-color: {orange};
  border-color: {dark_orange};
  color: {white};
}
code {
  color: {dark_orange}
}
pre.shell {
  background-color: {black};
  color: {light_grey};
}

/* =Classes */
.notice {
  background-color: {light_green};
  border-color: {dark_green};
  color: {white};
}
.notice.failure {
  background-color: {red};
  border-color: {dark_red};
  color: {white};
}
.error label {
  color: {dark_red};
}
.error input,
.error select,
.error textarea {
  border-color: {dark_red};
  color: {dark_red};
}

/* =Layout */
#page-header {
  border-top-color: {background_green};
  border-bottom-color: {blue};
}
#search-form input,
#search-form label {
  color: {text};
}
#page-header, #main, #elsewhere {
  background-color: {background_blue};
  background-color: {background_blue_alpha};
}
#logo {
  background-color: {background_blue_blue};
  background-color: {background_blue_alpha};
}
.promo, #page-footer, #search-form {
  background-color: {background_green};
}
.inner {
  background-color: {background_blue_blue};
  background-color: {background_blue_alpha};
}
.sidebar .inner {
	background: transparent;
}
#page-footer p, #search-form p {
  background-color: {background_blue_green};
  background-color: {background_blue_alpha};
}

/* =Figures */
article.focal figure,
article.focal figure img,
article.focal figure video,
article.focal figure audio,
article.focal figure object,
article.focal figure embed,
article.focal figure canvas,
article.focal figure iframe,
article.focal figure figcaption {
	background: {white};
	border-color: {white};
}
article.focal figure:after,
article.focal figure:before { 
	background: transparent;
}


/* =Sidebars */
.sidebar h2, .sidebar h3 {
  color: {text};
}


/* =Archives */
#archive .hentry .body,
#archive .hentry .meta {
	background-color: {background_white_blue};
  background-color: {background_white_blue_alpha};
}
#archive .hentry:hover .body,
#archive .hentry:hover .meta {
  background-color: {white};
}
#archive .hentry h2 {
  color: {dark_green};
}


/* =Comments */
#comments {
  background-color: {background_white_blue};
  background-color: {background_blue_alpha};
}
#comments .meta {
  background: transparent url({cdn}/css/bubble-bottom.png) 0 -5px no-repeat;
}


/* =Home */
#teasers h3 a {
	text-shadow: {dark_green} 0 0 8px;
  color: {white};
}
#teasers h3:hover a {
	text-shadow: {orange} 0 0 8px;
}
#home .hentry h2 {
  color: {dark_green};
}
#teasers .hentry {
  background-color: {background_white_blue};
  background-color: {background_white_blue_alpha};
}
#teasers .hentry:hover {
  background-color: {white};
}
#teasers .hentry h2:hover {
  color: {orange};
}


/* =Search */
#search-results .term {
	background-color: {yellow};
}


/* =Footer Content */
#more li {
  background: url({cdn}/css/all-entries.png) no-repeat 0 50%;
}
#more li:first-child {
  background: url({cdn}/general/rss-icon.png) no-repeat 0 50%;
}
#more a {
  color: {text};
}
#elsewhere h2 {
  color: {text};
}


/* =Pagination */
#pagination a {
  color: {text};
}


/* =RGBa Enhancements */
#social-links li {
    background: transparent;
}
#social-links li.twitter a {
	background-image: url({cdn}/css/twitter.png);
}
#social-links li.facebook a {
	background-image: url({cdn}/css/facebook.png);
}
#social-links li.google a {
	background-image: url({cdn}/css/google.png);
}
#social-links li.github a {
	background-image: url({cdn}/css/github.png);
}

#easy-network a {
    color: inherit;
    opacity: 0.5;
}
#easy-network a:hover,
#easy-network a:focus {
    opacity: 0.99;
}
#easy-network .easy-designs a {
    background-image: url({cdn}/css/en-easy-designs.png);
}
#easy-network .easy-readers a {
    background-image: url({cdn}/css/en-easy-readers.png);
}
#easy-network .r4g a {
    background-image: url({cdn}/css/en-r4g.png);
}

@media screen and (min-width:570px) {
	#search-form,
	#search-form p {
		background: transparent;
	}
	.sidebar .inner {
	  background-color: {background_blue_blue};
	  background-color: {background_blue_alpha};
	}
}

@media screen and (min-width:860px) {
    
    body {
      background: {white} url({cdn}/css/star.png) center 0 no-repeat;
    }
    #comments .hentry {
		  background: transparent url({cdn}/css/bubble-top.png) no-repeat 0 0;
		}
		#comments .entry-content {
		  background: transparent url({cdn}/css/bubble-mid.png) repeat-y;
		}
		#comments .meta {
			background-position: 0 0;
		}
	#extras {
      background: {background_white_alpha} url({cdn}/css/star-2.png) center top no-repeat;
    }
    #about {
      background: {background_green_alpha} url({cdn}/css/star-2.png) center -231px no-repeat;
    }
		#about-us {
		  background: url({cdn}/css/orange-stars.png) no-repeat 31px 19px;
		}
		
}