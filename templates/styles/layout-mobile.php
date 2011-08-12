/* ---------------------------------
  * Mobile Layout Styles
  * Created by Easy! Designs, LLC
  * http://easy-designs.net
  * --------------------------------- */

{assign_variable:dark_green="rgb(17, 126, 63)"}
{assign_variable:dark_grey="rgb(180, 180, 180)"}
{assign_variable:background_blue_alpha="rgba(180, 246, 248, .43)"}

body {
  position: relative;
}

#home,
#archive,
#single-entry {
  background: none;
}

h1,
#single-entry h1 {
  font-size: 1.5em;
}

img {
  max-width: 100%;
}

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

#page-header {
  position: static;
}

#logo {
  left: 0;
  height: 80px;
  margin: -14px 0 0;
  padding: 0;
}

#logo img {
  left: 50%;
  margin-left: -117px;
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

/*
#elsewhere section p {
  margin-top: 1.5em;
}
*/

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

/* =Archives */
#archive #main {
  min-height: 100px;
  padding-bottom: 1em;
}

.focal header {
  margin: 0;
  padding: 1em 0;
}

#archive .hfeed,
#single-entry #main {
  margin: 0 0 4em;
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

/*
.sidebar,
.sidebar .inner {
  background: {background_blue_alpha};
  position: static;
  margin: 0;
}

.sidebar .inner {
  padding: 20px;
}

.sidebar .inner > * {
  width: 100%;
}
*/

/* =Single-Entry */
article.focal figure {
	width: 85%;
}
article.focal figure img,
article.focal figure video,
article.focal figure audio,
article.focal figure object,
article.focal figure embed,
article.focal figure canvas,
article.focal figure iframe {
	border-width: 10px;
	width: 100%;
}
article.focal figure img,
article.focal figure video,
article.focal figure audio,
article.focal figure object,
article.focal figure embed,
article.focal figure canvas {
	height: auto;
}
#archive h1,
.search .focal p {
  padding: 0 20px;
}

#single-entry article.focal {
  padding: 1% 4%;
  width: 92%;
}

.search .focal #search-results p {
  padding: 0;
}

#single-entry #comments.focal {
  padding: 20px;
}

#comments .entry-content {
  padding-left: 0;
  padding-right: 0;
}

/*
.sidebar figure {
  float: left;
  margin-right: 20px;
  margin-bottom: 0;
}

.sidebar ul.author {
  margin: 1em 0 1.5em;
}
*/

#comments {
  left: 0;
  margin: 0;
  padding: 15px 20px 10px;
  width: auto;
}

#comments .hfeed .hentry {
  background: none;
  width: auto;
}

#comments .hfeed .entry-content {
  background: none;
  background-color: #f4fdfe;
  -moz-border-radius: 15px;
  -webkit-border-radius: 15px;
  border-radius: 15px;
  margin: 0;
  padding: 5%;
  position: relative;
  width: 90%;
  z-index: 2;
}

#comments .hentry .meta {
  background-position: 0 -5px;
  position: relative;  
  width: 45%;
  z-index: 1;
}

#comments .hentry .meta .vcard {
  margin-top: -4px;
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
input, select, textarea {
	width: 95%;
	float: none;
}
.radio input,
.checkbox input {
	width: auto;
}
li.submit,
li.checkbox {
	margin-left: 0;
}

/* =Hide non-essentials */
#elsewhere,
.sidebar {
  display: none;
}