{assign_variable:easy_css_images="http://images.easy-designs.net/css"}
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
.promo, #page-footer {
  background-color: {background_green};
}
.inner {
  background-color: {background_blue_blue};
  background-color: {background_blue_alpha};
}
#page-footer p {
  background-color: {background_blue_green};
  background-color: {background_blue_alpha};
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
#comments .hentry {
  background: transparent url({cdn}/css/bubble-top.png) no-repeat 0 0;
}
#comments .entry-content {
  background: transparent url({cdn}/css/bubble-mid.png) repeat-y;
}
#comments .meta {
  background: transparent url({cdn}/css/bubble-bottom.png) no-repeat 0 0;
}


/* =Home */
#teasers h3 a {
  color: {white};
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
#about-us {
  background: url({cdn}/css/orange-stars.png) no-repeat 11px 19px;
}
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
body {
  background: {background_white_alpha} url({cdn}/css/star.png) center 0 no-repeat;
}
#extras {
  background: {background_white_alpha} url({cdn}/css/star-2.png) center top no-repeat;
}
#about {
  background: {background_green_alpha} url({cdn}/css/star-2.png) center -231px no-repeat;
}