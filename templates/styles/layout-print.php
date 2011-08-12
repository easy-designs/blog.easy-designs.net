/* ---------------------------------
 * Print Layout Styles
 * Created by Easy! Designs, LLC
 * http://easy-designs.net
 * --------------------------------- */

body { font-size: 120%; }
h1, h2, h3, h4, h5, h6 { margin: 1em 0; }

/* =Widows & Orphans */
p { widows: 4; orphans: 4; }

/* =Page Breaks */
ul, ol, pre, div.gist, ol#comments li { page-break-inside: avoid; }
ol#comments { page-break-inside: inherit; }

/* =Hidden */
.sidebar, #search-form, #comment-form, #extras, #pagination { display: none; }