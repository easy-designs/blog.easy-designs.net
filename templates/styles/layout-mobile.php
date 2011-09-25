{assign_variable:easy_css_images="http://cdn1.easy-designs.net"}

/* ---------------------------------
	* Mobile Layout Styles
	* Created by Easy! Designs, LLC
	* http://easy-designs.net
	* --------------------------------- */

/* =Global Layout */
body {
	position: relative;
}
#page-header, #content, #main, #extras, aside.promo, #page-footer {
	width: 100%;
	position: relative;
	z-index: 1;
}

/* =Figures */
figure,
.figure {
	position: relative;
	z-index: 2;
}
figure a,
.figure a {
	display: block;
}
figure img,
.figure img {
	display: block;
	position: relative;
	z-index: 1;
}
.frame,
.frame b {
	background: url({cdn}/css/project-frame.png) 0 0 no-repeat;
	display: block;
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0;
	left: 0;
	z-index: 2;
}
.frame b {
	background-position: 0 -157px;
	height: 100%;
}
a:hover .frame b {
	opacity: 0;
}
.figure.featured	{
		padding-top: 160px;
		width: 220px;
}
.figure.featured img,
.figure.featured .frame {
	height: 157px;
	width: 100%;
	position: absolute;
	top: 0;
}
.align-left {
	float: left;
	margin: 0 5px 0 -7px;
}
.align-right {
	float: right;
	margin: 0 -7px 0 5px;
}


/* =Header */
#page-header {
	border-top: 14px solid;
	border-bottom: 7px solid;
	margin: 0;
}
#logo {
	left: 0;
	height: 80px;
	margin: -14px 0 0;
	padding: 0;
	position: relative;
}
#logo img {
	position: absolute;
	left: 50%;
	margin-left: -126px;
	top: 25px;
	z-index: 1;
}


/* =Main Content */
#archive .hfeed,
#single-entry #main {
	margin:  0 0 4em;
}
#single-entry article.focal {
	padding: 1% 4%;
}
.focal header {
	margin: 0;
	padding: 1em 0;
}
article.focal figure {
	background: #fff;
	width: 85%;
	margin-left: auto;
	margin-right: auto;
	position: relative;
	-moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; 
	-ms-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; 
	-o-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; 
	-webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; 
	box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; 
}
article.focal figure img,
article.focal figure video,
article.focal figure audio,
article.focal figure object,
article.focal figure embed,
article.focal figure canvas,
article.focal figure iframe {
	background: #fff;
	border: 10px solid;
	margin-left: -10px;
	width: 100%;
	height: auto;
}
article.focal figure figcaption {
	background: #fff;
	padding: 0px 10px 10px;
	text-align: center;
}
article.focal figure:after { 
	background: transparent;
	-moz-box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); 
	-ms-box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); 
	-o-box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); 
	-webkit-box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); 
	box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); 
	content: ''; 
	-moz-transform: skew(15deg) rotate(6deg); 
	-ms-transform: skew(15deg) rotate(6deg); 
	-o-transform: skew(15deg) rotate(6deg); 
	-webkit-transform: skew(15deg) rotate(6deg); 
	transform: skew(15deg) rotate(6deg); 
	width: 70%; 
	height: 55%; 
	position: absolute; 
	right: 30px; 
	bottom: 20px; 
	z-index: -1; 
} 
article.focal figure:before { 
	background: transparent;
	-moz-box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); 
	-ms-box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); 
	-o-box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); 
	-webkit-box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); 
	box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); 
	content: ''; 
	width: 70%; 
	height: 55%; 
	-moz-transform: skew(-15deg) rotate(-6deg); 
	-ms-transform: skew(-15deg) rotate(-6deg); 
	-o-transform: skew(-15deg) rotate(-6deg); 
	-webkit-transform: skew(-15deg) rotate(-6deg); 
	transform: skew(-15deg) rotate(-6deg); 
	position: absolute; 
	left: 30px; 
	bottom: 20px; 
	z-index: -2; 
}
article.focal .gist-meta {
	display: none;
}


/* =Comments */
#comments {
	margin: 0;
	padding: 15px 20px 20px;
}
#comments p:last-child {
	margin-bottom: 0;
}
#comments .hfeed {
	list-style: none;
	margin-bottom: -20px;
	padding: 0;
	overflow: hidden;
}
#comments .entry-content {
	background-color: #f4fdfe;
	-moz-border-radius: 15px;
	-o-border-radius: 15px;
	-webkit-border-radius: 15px;
	border-radius: 15px;
	margin: 0;
	padding: 5%;
	position: relative;
	z-index: 2;
}
#comments .meta {
	margin: 0;
	padding: 30px 0 0 150px;
	position: relative;
	top: -15px;
	width: 45%;
	z-index: 1;
}
#comments .hentry .meta .vcard {
	margin-top: -4px;
}
#comments .meta img {
	float: left;
	margin-right: 5px;
}


/*= Comment Form */
#main form ol {
	margin: 0;
	padding: 0;
}


/* =Archives
#archive #main {
	min-height: 900px;
	padding-bottom: 60px;
}
#archive .hfeed {
	list-style: none;
	margin: 0 -20px;
	padding: 0;
}
#archive .hentry {
	margin: 0 0 15px 0;
}
#archive .hentry article {
	display: table-row;
}
#archive .hentry .meta,
#archive .hentry .body {
	display: table-cell;
	vertical-align: top;
}
#archive .hentry .meta {
	border-radius: 0 30px 30px 0;
	list-style: none;
	margin: 0;
	padding: 20px;
	position: relative;
	width: 85px;
}
#archive .hentry .vcard {
	margin-bottom: 5px;
}
#archive .hentry .vcard a {
	display: block;
	position: relative;
	padding-top: 50px;
}
#archive .hentry .vcard img {
	display: block;
	margin-bottom: 5px;
}
#archive .hentry .vcard img,
#archive .hentry .vcard .frame {
	width: 65px;
	height: 45px;
	position: absolute;
	top: 0;
	left: 0;
}
#archive .hentry .vcard .frame {
	background-image: url({cdn}/css/frame-author-wide.png);
}
#archive .hentry .body {
	border-radius: 30px 0 0 30px;
	padding: 20px 25px 20px 20px;
	width: 460px;
}
#archive .hentry:first-child .meta,
#archive .hentry:first-child .body {
	border-top-left-radius: 0;
	border-top-right-radius: 0;
}
#archive .hentry.last .meta,
#archive .hentry.last .body {
	border-bottom-left-radius: 0;
	border-bottom-right-radius: 0;
} */


/* =Sidebars */
.sidebar .inner > * {
	display: none;
}
.sidebar #bookmark {
	display: block;
	padding: 0 20px;
	overflow: hidden;
}
#bookmark p {
	float: left;
	margin-right: 10px;
}
/* .sidebar {
	position: absolute;
	left: 50%;
	right: 0;
	top: 20px;
	bottom: 20px;
	z-index: 2;
}
.sidebar .inner {
	position: absolute;
	padding: 18px 0 16px 18px;
	left: 200px;
	right: 0;
	top: 0;
	bottom: 0;
}
.sidebar .inner > * {
	width: 184px;
}
.sidebar figure {
	margin-bottom: .75em;
}
.sidebar ul.author {
	margin: -1em 0 1.5em;
}
.sidebar ul.author li {
	margin-bottom: .5em;
}
.sidebar .vcard img,
.sidebar .vcard .frame,
.sidebar .vcard img,
.sidebar .vcard .frame {
	height: 122px;
	width: 122px;
}
.sidebar .vcard .frame {
	background: url({cdn}/css/frame-author.png)
}
.easy-writers {
	overflow: hidden;
}
.easy-writers .vcard {
	float: left;
}
.easy-writers .vcard a {
	display: block;
	margin: 0 8px 8px 0;
	height: 48px;
	width: 48px;
	position: relative;
	overflow: hidden;
}
.easy-writers .vcard img {
	width: 48px;
	height: 48px;
}
.easy-writers .vcard img,
.easy-writers .vcard span {
	position: absolute;
	top: 0;
	left: 0;
	bottom: 0;
	right: 0;
	z-index: 1;
}
.easy-writers .vcard .fn {
	z-index: 0;
} */


/* =Home
#home #main {
	padding: 20px 20px 0;
	min-height: 0;
	width: 820px;
}
#home .hfeed {
	border-spacing: 20px 0;
	display: table;
	margin: 0 0 0 -20px;
}
#home .hentry {
	display: table-cell;
	vertical-align: top;
	padding: 20px;
	width: 180px;
}
#home .hentry h3 {
	background: transparent url({cdn}/css/banner-bg.png) no-repeat 100% 100%;
	position: relative;
	height: 126px;
	width: 226px;
	margin: 0 -3px;
}
#teasers .hentry h3:hover {
	background-position: 0 0;
}
#home .hentry h3 a {
	position: absolute;
	padding-top: 95px;
	display: block;
	width: 100%;
}
#home .hentry img {
	display: block;
	position: absolute;
	left: 50%;
}
#programming.hentry img {
	margin-left: -71px;
	top: -17px;
}
#process.hentry img {
	margin-left: -60px;
	top: -16px;
}
#potpourri.hentry img {
	margin-left: -85px;
	top: -8px;
} */


/* =Footer Content */
#about-us {
	padding: 20px 20px 0;
}
#more {
	padding: 0 20px;
}
#page-footer {
	clear: both;
}
#page-footer p {
	margin: 0 auto;
	padding: 10px 20px;
}


/* =Pagination */
ul#pagination {
	height: 32px;
	margin: 1em 0 0;
	position: absolute;
	left: 20px;
	right: 20px;
	bottom: -3.8em;
}
ul#pagination li {
	text-indent: -999em;
	width: 50%;
	position: absolute;
	top: 0;
	bottom: 0;
	z-index: 0;
}
#pagination .prev {
	left: 0;
}
#pagination .next {
	right: 0;
}
#main #pagination .prev:hover,
#main #pagination .next:hover {
	z-index: 1;
}
#pagination li a {
	display: block;
	text-indent: -999em;
	height: 32px;
	position: absolute;
	top: 0;
	left: 0;
}
#pagination .prev a {
	background: url({easy_css_images}/css/icon-prev.png) 0 -32px no-repeat;
	right: 0;
}
#pagination .prev {
	background: 1px 0 no-repeat;
}
#pagination .prev:hover {
	background-image: url({easy_css_images}/css/icon-prev.png);
}
#pagination .next a {
	background: url({easy_css_images}/css/icon-next.png) 100% -32px no-repeat;
	right: 0;
}
#pagination .next {
	background: 100% 0 no-repeat;
}
#pagination .next:hover {
	background-image: url({easy_css_images}/css/icon-next.png);
}
#pagination .prev a:hover,
#pagination .next a:hover {
	background-image: none;
}
#pagination .prev a em,
#pagination .next a em {
	opacity: 0;
	line-height: 32px;
	height: 32px;
	overflow: hidden;
	position: absolute;
}
#pagination .prev a:hover em {
	opacity: 1;
	left: 20%;
	right: -80%;
}
#pagination .next a:hover em {
	opacity: 1;
	right: 20%;
	left: -80%;
}

/* =Search */
#search-form {
	margin: 0;
}
#search-form p {
	margin: 0;
	padding: 20px 0 0 20px;
	overflow: hidden;
}
#search-form input,
#search-form button {
	float: left;
	margin: 0;
}
#search-form input {
	border-radius: 3px 0 0 3px;
	border-width: 1px 0 1px 1px;
	font-size: 12px
	height: 24px;
	padding: 4px 5px;
	width: 191px;
}
#search-form button {
	font-size: 12px;
	border-radius: 0 5px 5px 0;
	border-width: 2px;
	height: 25px;
	padding: 5px 7px;
}
#search-form label {
	line-height: 2;
	position: absolute;
	left: -999em;
	z-index: 1;
}

/* =Social Links */
#social-links {
	overflow: hidden;
	margin: 0;
}
#social-links li {
	float: left;
	margin: 0 10px 0 0;
	padding: 0;
}
#social-links li a {
	background: top left no-repeat;
	-moz-border-radius: 4px;
	-ms-border-radius: 4px;
	-o-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
	display: block;
	overflow: hidden;
	text-indent: -999em;
	width: 30px;
	height: 30px;
}




/*

#main,
#home #main,
#main article,
.focal,
.focal .hfeed,
.focal .hfeed .hentry article,
#page-header {
	margin: 0;
	padding: 0;
}
#logo,
#main,
#home #main,
#main article,
.focal,
.focal .hfeed,
.focal .hfeed .hentry article {
	width: 100%;
}
#main {
	position: relative;
}
#search-form {
	left: 0;
	right: auto;
	top: auto;
	bottom: 70px;
	margin: 0;
	width: 100%;
	z-index: 10;
}
#search-form input {
	margin-left: 20px;
	width: 60%;
}
#content {
	position: static;
}
#tagline {
	font-size: 1.3em;
	padding-top: 14px;
}
#home .hfeed {
	display: block;
	margin: 0;
	padding-bottom: 10px;
}
#home .hentry,
aside.promo .inner,
#about-us,
#more,
#software, #retreats, #events,
#page-footer p {
	width: auto;
}
#home .hentry {
	-moz-border-radius: 30px;
	-webkit-border-radius: 30px;
	-o-border-radius: 30px;
	border-radius: 30px;
	display: block;
	margin-bottom: 2em;
	padding: 1.5em 2em 2.5em;
}
#home .hentry img {
	display: none;
}
#home .hentry h3 {
	height: 36px;
	margin: 0 auto;
}
#teasers {
	margin: 0 1em;
}
#teasers .hentry h3:hover {
	background-position: 100% 100%;
}
#home .hentry h3 a {
	padding-top: 5px;
	position: relative;
	text-align: center;
	width: auto;
}
aside.promo .inner,
#more {
	margin: 0;
}
aside.promo .inner {
	padding: 0;
	position: static;
}
.figure.featured {
	float: left;
	position: relative;
	left: -0.7em;
}
section#extras, aside#about, article#about-us {
	background-image: none;
}
#about h2, #about p {
	padding-left: 0;
}
#about-us {
	padding: 20px;
}
#more {
	padding: 0 20px;
}
#software, #retreats, #events {
	padding: 20px 20px 0;
}
#page-footer p {
	padding: 40px 20px 20px;
}


#archive #main {
	min-height: 100px;
	padding-bottom: 1em;
}

article ul#pagination,
#single-entry ul#pagination,
.search ul#pagination {
	left: 20px;
	bottom: -4em;
	margin: 0;
	width: 90%;
}
.search ul#pagination {
	bottom: 1em;
}
#archive .hentry .meta {
	font-size: 1em;
	width: 12%;
}
#archive .hentry .body {
	width: 88%;
}
#archive h1,
.search .focal p {
	padding: 0 20px;
}
.search .focal #search-results p {
	padding: 0;
}




#comment-form {
	padding: 20px;
	width: 90%;
}
#comment-form label {
	display: block;
	float: none;
	text-align: left;
}

*/
 
/* =Hide non-essentials */
#elsewhere,
#easy-network {
	display: none;
}