{assign_variable:easy_css_images="http://cdn1.easy-designs.net"}

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
#tagline {
	font-size: 1.3em;
	padding: 14px 10px 0;
}


/* =Main Content */
#single-entry #main {
	margin:  0 0 4em;
}
#single-entry article.focal {
	padding: 3px 10px;
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


/* =Sharing Options */
#bookmark {
	overflow: hidden;
}
#bookmark p {
	float: left;
	margin-right: 10px;
}


/* =Comments */
#comments {
	margin: 0;
	padding: 15px 10px 20px;
}
#comments p:last-child {
	margin-bottom: 0;
}
#comment-loader {
	display: block;
	margin: -15px -10px -20px;
	padding: 15px 10px;
}
#comments .hfeed {
	list-style: none;
	margin: 20px 0 -10px;
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


/* =Archives */
#archive #main {
	padding-bottom: 3.2em;
}
#archive h1 {
	padding: 0 10px;
}
#archive .focal {
	position: relative;
}
#archive .hfeed {
	list-style: none;
	margin: 0;
	padding: 0;
}
#archive .hentry {
	margin: 0 0 15px 0;
}
#archive .hentry .meta {
	display: none;
}
#archive .hentry .body {
	padding: 10px 10px 15px;
}
#archive.search .focal > p {
	padding: 0 10px;
}


/* =Sidebars */
.sidebar .inner {
	display: none;
}


/* =Home */
#home .hfeed {
	display: block;
	margin: 0;
	padding: 21px 0 1px;
}
#home .hentry {
	margin: 0 0 3em;
	padding: 0 10px 10px;
}
#potpourri.hentry {
	margin-bottom: 1.5em;
}
#home .hentry h3 {
	background: transparent url({cdn}/css/banner-bg.png) no-repeat 50% 100%;
	width: 226px;
	height: 31px;
	margin: 0 auto -28px;
	padding-top: 5px;
	position: relative;
	top: -21px;
	text-align: center;
}
.wf-active #home .hentry h3,
.wf-inactive #home .hentry h3 {
	height: 34px;
	padding-top: 2px;
}
#home .hentry h3:hover {
	background-position: 50% -90px;
}
#home .hentry h3 a {
	display: block;
}
#home .hentry p {
	margin: 0;
}



/* =Footer Content */
#about-us {
	padding: 20px 10px 0;
}
#more {
	padding: 0 10px;
}
#page-footer {
	clear: both;
}
#page-footer p {
	margin: 0 auto;
	padding: 10px;
}


/* =Pagination */
ul#pagination {
	height: 32px;
	margin: 1em 0 0;
	padding: 0;
	position: absolute;
	left: 10px;
	right: 10px;
	bottom: -3.8em;
	z-index: 10;
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
	padding: 20px 0 10px 10px;
	overflow: hidden;
}
#search-form input,
#search-form button {
	float: left;
	margin: 0;
}
#search-form input {
	-khtml-border-radius: 3px 0 0 3px;
	-moz-border-radius: 3px 0 0 3px;
	-o-border-radius: 3px 0 0 3px;
	-webkit-border-top-left-radius: 3px;
	-webkit-border-bottom-left-radius: 3px;
	border-radius: 3px 0 0 3px;
	border-width: 1px 0 1px 1px;
	font-size: 12px
	height: 24px;
	padding: 4px 5px;
	width: 191px;
}
#search-form button {
	font-size: 12px;
	-khtml-border-radius: 0 5px 5px 0;
	-moz-border-radius: 0 5px 5px 0;
	-o-border-radius: 0 5px 5px 0;
	-webkit-border-top-right-radius: 5px;
	-webkit-border-bottom-right-radius: 5px;
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
	-o-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
	display: block;
	overflow: hidden;
	text-indent: -999em;
	width: 30px;
	height: 30px;
}

/* =Hide non-essentials */
#elsewhere,
#easy-network {
	display: none;
}