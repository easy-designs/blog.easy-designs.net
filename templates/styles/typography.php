{assign_variable:sans="'ratio-1', 'ratio-2', 'Myriad Pro', 'Trebuchet MS', sans-serif"}
{assign_variable:serif="Georgia, Times, 'Times New Roman', serif"}
{assign_variable:italic="'apolline-1', 'apolline-2'"}
{assign_variable:mono="Monaco, Courier, 'Courier New', 'Andale Mono', 'Lucida Console', 'Bitstream Vera Sans Mono', monospace, serif"}

/* =General */
body {
	/* text-rendering: optimizeLegibility; WebOS can’t handle it */
}

/* =Text */
h1, h2, h3, h4, h5, h6, legend {
	font-family: {sans};
	line-height: 1.25;
}
h1 {
	font-size: 1.5em;
	font-weight: 500;
	line-height: 1.15;
}
h2, fieldset legend {
	font-size: 1.5em;
	font-weight: 400;
}
h2 {
	margin-bottom: 5px;
}
h3 {
	font-family: {serif};
	font-size: 0.875em;
}
h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
	display: inline-block;
}
blockquote {
	border-left: 10px solid;
	padding-left: 10px;
	margin: 1.5em 0;
}
blockquote:first-child {
	margin-top: 0;
}
blockquote p:last-child {
	margin-bottom: 0;
}
img {
	max-width: 100%;
}
p, ul, ol, dl, table, pre,
figure, canvas, object, embed, video, audio {
	font: 1em/1.5 {serif};
	margin: 0 0 1.5em;
}
figcaption {
	font: inherit;
}
figure figcaption a, .figure figcaption a {
	display: inline;
}
li p, li table, li pre, li ul {
	font-size: 1em;
}
cite, em, dfn, .notes {
	font-family: {italic}, {serif};
	font-style: italic;
	font-size: 100%; 
}
.wf-apolline1apolline2-i4-active cite,
.wf-apolline1apolline2-i4-active em, 
.wf-apolline1apolline2-i4-active dfn {
	font-size: 120%;
	line-height: .8;
}
.notes {
	font-size: 0.92307692em;
}
cite.publisher,
cite.publication {
	white-space: nowrap;
}
cite.publisher {
	font: inherit;
}
pre, code {
	font: 0.92307692em/1.5 {mono};
}
article .gist .gist-file .gist-meta {
	font-size: 0.625em;
}
article .gist pre {
	font-size: 0.75em;
}
sup, sub {
	font-size: .7em;
	line-height: 1;
}
sup {
	vertical-align: super;
}
sub {
	vertical-align: sub;
}
strong {
	font-weight: bold;
}
object, embed, audio, video, iframe {
	display: block;
	margin: 1.5em 0;
}
form {
	margin-top: 8px;
}
form li {
	clear: both;
	margin: 0 0 .5em;
}
fieldset {
	margin-bottom: 16px;
}
fieldset legend {
	padding: 5px 0 2px;
}
input, select, textarea {
	border: 1px solid;
	border-radius: 3px;
	font: 1.07692308em/1.3 {serif};
	width: 95%;
}
input[type=file],
input[type=radio],
input[type=checkbox] {
	border: 0;
	border-radius: 0;
	cursor: pointer;
}
label {
	font-weight: bold;
	display: block;
}
select {
	cursor: pointer;
}
button {
	border: 2px solid #117f40;
	border-radius: 5px;
	cursor: pointer;
	display: inline-block;
	font: 500 1.38461538em/1 {sans};
	padding: 7px 7px 4px;
	vertical-align: middle;
}
form li {
	list-style: none;
	margin-bottom: 10px;
}
fieldset.radio,
fieldset.checkbox {
	margin-bottom: 10px;
}
fieldset.radio legend,
fieldset.checkbox legend {
	font: inherit;
	font-weight: bold;
}
.radio label,
.checkbox label {
	font-weight: normal;
	display: inline;
}
.radio ul,
.checkbox ul {
	margin: 0;
	padding: 0;
}
.radio li,
.checkbox li {
	display: inline;
	margin-right: 10px;
}
.textarea label {
	margin-bottom: 2px;
}
.radio input,
.checkbox input {
	width: auto;
}


/* =Generic */
.more {
	margin: -1.5em 0 0;
}
time, .date, .phone {
	white-space: nowrap;
}
a[rel=feed]:after {
	content: url({cdn}/general/rss-icon.png);
	position: absolute;
	padding-left: 5px;
}


/* =Microformats */
.adr,
.post-office-box,
.street-address,
.extended-address,
.country {
	display: block;
}


/* =Header */
#tagline {
	font-size: 2.25em;
	line-height: 1.2;
	margin: 0 0 20px;
	text-align: center;
}
#tagline em {
	font-family: {sans};
}


/* =Main */
.focal ul,
.focal ol {
	margin: 0 0 1.5em;
	padding-left: 1em;
}
.focal .also li {
	margin: 0;
}
.focal ol {
	list-style-type: decimal;
	padding-left: .75em;
	margin-left: .5em;
}
.focal ul {
	list-style: url(http://cdn1.easy-designs.net/css/bullet.png);
}
.focal .meta {
	list-style: none;
	margin-bottom: 0;
	margin-left: 0;
	padding-left: 0;
}


/* =Notices */
.notice {
	border: 1px solid;
	margin-bottom: 1.5em;
	padding: 10px 14px;
}

/* =Sidebars */
.sidebar h2 {
	font: 400 1.25em/1.2 {sans};
}
.sidebar p,
.sidebar ul,
.sidebar ol,
.sidebar dl {
	font: 0.75em/1.5 {serif};
}
#bookmark {
		margin-bottom: 1em;
}
#bookmark p, #bookmark iframe {
	margin: 0 0 .5em;
}

/* =Inline lists */
ul.inline {
	margin-left: 0;
	padding-left: 0;
}
ul.inline li {
	display: inline;
	margin: 0;
}
.inline li:after {
	content: ", ";
}
.inline li:last-child:before {
	content: 'and ';
}
.inline li:only-child:before,
.inline li:last-child:after {
	content: '';
}


/* =Blog */
#single-entry h1 {
	font-weight: 400;
	margin-bottom: 10px;
}


/* =Comments */
#comment-loader {
	font: 400 1em/1 {sans};
	text-align: center;
	text-decoration: none;
}
#comments .entry-content > :last-child {
	margin-bottom: 0;
}
#comments .hentry .meta {
	list-style: none;
}
#comments .meta li {
	line-height: 1.3;
}
#comments .meta li:last-child {
	font-size: 0.84615385em;
}


/* =Comment Form */
#comment-form label {
	font-size: 1.07692308em;
}


/* =Archives */
#archive .hentry h2 {
	font-size: 1.38461538em;
	font-weight: 400;
	padding-right: 20px;
}
#archive .hentry h2 a {
	text-decoration: none;
}
#archive .hentry .meta {
	font-size: 0.84615385em;
	list-style: none;
}


/* =Footer Content */
#events .when {
	margin: 0;
}
#events .summary {
	font: 1.0769em/1.2 {serif};
	margin: 0 0 7px;
}
.promo h2 {
	font-size: 1.25em;
	font-weight: normal;
	margin-bottom: 5px;
}
#page-footer p {
	font-size: 0.6875em;
}
#about-us h2,
#more h2 {
	font-size: 1.125em;
	font-weight: normal;
}
#more ul {
	font-size: 14px;
	list-style: none;
}
#more li {
	line-height: 22px;
	margin-bottom: 5px;
	padding-left: 25px;
}
#elsewhere section h3 {
	margin-bottom: 5px;
}


/* =Home */
#home .hfeed {
	list-style: none;
	margin-left: 0;
	padding-left: 0;
}
#home .hentry h3 {
	font-weight: 400;
	font-family: {sans};
}
#home .hentry h3 a {
	text-align: center;
	text-decoration: none;
	text-transform: uppercase;
}
.front-n-center em {
	font-style: normal;
	font-weight: 700;
}
#home .hentry .meta li {
	display: inline;
}
#home .hentry h2,
#home .hentry h3 {
	font-size: 1.385em;
}
#home .hentry h2 {
	font-family: {serif};
	font-weight: 400;
	margin: 16px 0 10px;
}


/* =Search */
#search-form input,
#search-form label {
	font-size: 0.92307692em;
	padding: 3px 7px 4px;
}
#search-form label {
	font-weight: normal;
}
#search-form button {
	font-size: 0.92307692em;
	padding: 4px 3px 2px;
}


/* =Pagination */
#pagination li {
	list-style: none;
	margin: 0;
	padding: 0;
}
#pagination a {
	text-decoration: none;
}
#pagination a em {
	font-family: {sans};
	font-weight: 500;
	font-style: normal;
	text-align: center;
	text-indent: 0;
}


#easy-network a {
	font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Arial, sans-serif;
	text-decoration: none;
	text-transform: uppercase;
}
#easy-network a:focus,
#easy-network a:hover {
	text-decoration: underline;
}


@media screen and (min-width:860px) {

    h1 {
        font-size: 2.25em;
    }
	
}