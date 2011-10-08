@media screen and (min-width:481px) { 

	/* =Archives */
	#archive h1 {
		padding: 0 20px;
	}
	#archive.search .focal > p {
		padding: 0 20px;
	}
	#archive .hentry article {
		display: table;
		width: 100%;
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
		width: 85px;
		position: relative;
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


	/* =Pagination */
	ul#pagination {
		left: 20px;
		right: 20px;
	}
	
	
	/* =Footer Content */
	#about-us {
		padding: 20px 20px 0;
	}
	#more {
		padding: 0 20px;
	}
	#page-footer p {
		padding: 20px;
	}
	

}

@media screen and (min-width:570px) {

	#logo img {
		margin-left: 0;
		left: 20px;
		top: 25px;
	}
	 
	/* =Search */
	#search-form {
		position: absolute;
		z-index: 1;
		top: 15px;
		right: 20px;
	}

}
	
	
@media screen and (min-width:650px) {

	/* =Main */
	#single-entry #main {
		margin: 0;
		padding: 0 250px 70px 0;
		min-height: 700px;
		width: auto;
		position: relative;
	}
	#single-entry .focal {
		position: relative;
		z-index: 3;
	}
	

	/* =Sidebar */
	#single-entry .sidebar {
		width: 240px;
		position: absolute;
		top: 20px;
		bottom: 20px;
		right: 0;
		z-index: 2;
	}
	#single-entry .sidebar .inner {
		display: block;
		position: absolute;
		padding: 18px 0 16px 18px;
		left: 0;
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


	/* = Pagination */
	#single-entry #pagination {
		bottom: 20px;
		right: 260px;
		z-index: 10;
	}
	
	
	
}

@media screen and (min-width:700px) {

	/* =Main */
	#main {
		margin: 0;
		padding: 0 240px 70px 0;
		min-height: 700px;
		width: auto;
		position: relative;
	}
	.focal {
		position: relative;
		z-index: 3;
	}
	
	 
	/* =Sidebar */
	.sidebar {
		width: 240px;
		position: absolute;
		right: 0;
		top: 20px;
		bottom: 20px;
		z-index: 2;
	}
	.sidebar .inner {
		display: block;
		position: absolute;
		padding: 18px 0 16px 18px;
		left: 0;
		right: 0;
		top: 0;
		bottom: 0;
	}
	
	
	/* =Home */
	#tagline {
		font-size: 2.25em;
	}
	#home #main {
		padding: 20px 20px 0;
		min-height: 0;
	}
	#home .hfeed {
		border-spacing: 10px 0;
		display: table;
		margin: 0 -10px;
	}
	#home .hentry {
		border-radius: 50px 50px 0 0;
		display: table-cell;
		vertical-align: top;
		position: relative;
		padding: 136px 10px 10px;
		width: 34%;
	}
	#home #teasers .hentry h3 {
		position: absolute;
		top: 10px;
		left: 50%;
		height: 126px;
		margin: 0 0 0 -113px;
		padding: 0;
	}
	#home #teasers .hentry h3:hover {
		background-position: 0 0;
	}
	#home .hentry h3 a {
		background: center top no-repeat;
		padding-top: 108px;
		position: relative;
		top: -13px;
	}
	.wf-active #home .hentry h3 a,
	.wf-inactive #home .hentry h3 a {
		padding-top: 105px;
	}
	#programming.hentry h3 a {
		background-image: url({cdn}/general/programming-icon.png);
	}
	#process.hentry h3 a {
		background-image: url({cdn}/general/process-icon.png);
	}
	#potpourri.hentry h3 a {
		background-image: url({cdn}/general/potpourri-icon.png);
		padding-top: 105px;
		top: -10px;
	}
	.wf-active #potpourri.hentry h3 a,
	.wf-inactive #potpourri.hentry h3 a {
		padding-top: 102px;
	}
	

}