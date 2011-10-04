/* =Archives */
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