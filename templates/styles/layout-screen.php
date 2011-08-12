{assign_variable:easy_css_images="http://images.easy-designs.net/css"}

/* =Global Layout */
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
.figure.featured  {
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
  height: 70px;
  margin: -14px 0 0 -430px;
  padding-top: 14px;
  position: relative;
  left: 50%;
  width: 860px;
}
#logo img {
  position: absolute;
  left: 30px;
  top: 30px;
  z-index: 1;
}
#search-form  {
  position: absolute;
  top: 22px;
  right: 50%;
  margin: 0 -410px 0 0;
}
#search-form p {
  margin: 0;
  padding: 0;
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


/* =Main Content */
#main {
  float: none;
  margin: 0 auto;
  padding: 20px 250px 70px 20px;
  min-height: 700px;
  width: 590px;
  position: static;
}
.focal {
	position: relative;
	z-index: 3;
}
header {
	margin: 0 0 1em;
}
article.focal figure {
	background: #fff;
	width: 520px;
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
	border: 10px solid #fff; 
	width: 500px;
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


/* =Comments */
#comments {
  left: 6px;
  margin: 0 0 20px -10000px;
  padding: 15px 0 10px 9992px;
}
#comments .hfeed {
	list-style: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
}
#comments .hentry {
  margin-bottom: -20px;
  padding-top: 20px;
}
#comments .entry-content {
	margin-bottom: 15px;
  padding-left: 20px;
  padding-right: 45px;
}
#comments .meta {
  margin: 0 0 2em;
  padding: 30px 0 0 150px;
  position: relative;
  top: -15px;
}
#comments .meta img {
  float: left;
  margin-right: 5px;
}


/*= Comment Form */
form {
  margin-top: 8px;
}
#main form ol {
  margin: 0;
  padding: 0;
}
form li {
  clear: both;
  margin: 0 0 .5em;
}
label {
  float: left;
  width:  100px;
  margin: 0 10px 0 0;
}
input, textarea {
  width: 450px;
  margin-right: -10px;
	padding: 7px;
}
textarea {
  height: 200px;
}
li.submit, li.checkbox {
  margin-left: 110px;
}
li.submit {
	margin-top: 1.5em;
}
.checkbox label {
	float: none;
  width: auto;
}
.checkbox input {
	float: none;
  margin-right: 0;
  width: auto;
}
.captcha {
  padding-top: 20px;
}


/* =Archives */
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
}


/* =Sidebars */
.sidebar {
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
}


/* =Home */
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
}


/* =Footer Content */
#extras {
	float: left;
  width: 100%;
  margin-top: -231px;
  padding-top: 231px;
  z-index: 0;
}
aside.promo {
	float: left;
}
aside.promo .inner {
	float: left;
  min-height: 100px;
  position: relative;
  left: 50%;
  margin-left: -430px;
  width: 860px;
}
aside.promo h2 {
  margin-bottom: 3px;
}
#software,
#retreats,
#events {
  float: left;
  padding: 22px 20px 2px 40px;
  width: 220px;
}
#about-us {
  width: 580px;
}
#more {
  margin-left: 20px;
  padding-right: 20px;
  width: 240px;
}
#about-us,
#more {
  float: left;
  padding: 22px 0 2px;
}
#page-footer {
  clear: both;
}
#page-footer p {
  margin: 0 auto;
  padding: 10px 20px;
  width: 820px;
}


/* =Pagination */
ul#pagination {
  margin: 1em 0 0;
  clear: both;
  margin-right: 20px;
  position: absolute;
  width: 580px;
  bottom: 20px;
  height: 32px;
  z-index: 10;
}
article ul#pagination {
	bottom: -50px;
}
.search ul#pagination {
	bottom: 20px;
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
  background: url({easy_css_images}/icon-prev.png) 0 -32px no-repeat;
  right: 0;
}
#pagination .prev {
  background: 1px 0 no-repeat;
}
#pagination .prev:hover {
  background-image: url({easy_css_images}/icon-prev.png);
}
#pagination .next a {
  background: url({easy_css_images}/icon-next.png) 100% -32px no-repeat;
  right: 0;
}
#pagination .next {
  background: 100% 0 no-repeat;
}
#pagination .next:hover {
  background-image: url({easy_css_images}/icon-next.png);
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