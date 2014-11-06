
/* Adding file: reset.css */
/* http://meyerweb.com/eric/tools/css/reset/ */
/* v1.0 | 20080212 */

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td {
	margin: 0;
	padding: 0;
	border: 0;
	outline: 0;
	font-size: 100%;
/*	color:#444;   Kutscher */
	vertical-align: baseline;
	background: transparent;
/*
	-moz-hyphens:auto;  Kutscher 
	-ms-hyphens:auto;  Kutscher 
	-o-hyphens:auto;  Kutscher 
	-webkit-hyphens:auto;  Kutscher
	lang="de";   Kutscher */
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}

/* remember to define focus styles! */
:focus {
	outline: 0;
}

/* remember to highlight inserts somehow! */
ins {
	text-decoration: none;
}
del {
	text-decoration: line-through;
}

/* tables still need 'cellspacing="0"' in the markup */
table {
	border-collapse: collapse;
	border-spacing: 0;
}
/* Adding file: grid.css */
/*
	Variable Grid System.
	Learn more ~ http://www.spry-soft.com/grids/
	Based on 960 Grid System - http://960.gs/

	Licensed under GPL and MIT.
*/


/* Containers
----------------------------------------------------------------------------------------------------*/
.container_12 {
	margin-left: auto;
	margin-right: auto;
	width: 960px;
}

/* Grid >> Global
----------------------------------------------------------------------------------------------------*/

.grid_1,
.grid_2,
.grid_3,
.grid_4,
.grid_5,
.grid_6,
.grid_7,
.grid_8,
.grid_9,
.grid_10,
.grid_11,
.grid_12 {
	display:inline;
	float: left;
	position: relative;
	margin-left: 8px;
	margin-right: 8px;
}

/* Grid >> Children (Alpha ~ First, Omega ~ Last)
----------------------------------------------------------------------------------------------------*/

.alpha {
	margin-left: 0;
}

.omega {
	margin-right: 0;
}

/* Grid >> 12 Columns
----------------------------------------------------------------------------------------------------*/

.container_12 .grid_1 {
	width:64px;
}

.container_12 .grid_2 {
	width:144px;
}

.container_12 .grid_3 {
	width:224px;
}

.container_12 .grid_4 {
	width:304px;
}

.container_12 .grid_5 {
	width:384px;
}

.container_12 .grid_6 {
	width:464px;
}

.container_12 .grid_7 {
	width:544px;
}

.container_12 .grid_8 {
	width:624px;
}

.container_12 .grid_9 {
	width:704px;
}

.container_12 .grid_10 {
	width:784px;
}

.container_12 .grid_11 {
	width:864px;
}

.container_12 .grid_12 {
	width:944px;
}



/* Prefix Extra Space >> 12 Columns
----------------------------------------------------------------------------------------------------*/

.container_12 .prefix_1 {
	padding-left:80px;
}

.container_12 .prefix_2 {
	padding-left:160px;
}

.container_12 .prefix_3 {
	padding-left:240px;
}

.container_12 .prefix_4 {
	padding-left:320px;
}

.container_12 .prefix_5 {
	padding-left:400px;
}

.container_12 .prefix_6 {
	padding-left:480px;
}

.container_12 .prefix_7 {
	padding-left:560px;
}

.container_12 .prefix_8 {
	padding-left:640px;
}

.container_12 .prefix_9 {
	padding-left:720px;
}

.container_12 .prefix_10 {
	padding-left:800px;
}

.container_12 .prefix_11 {
	padding-left:880px;
}



/* Suffix Extra Space >> 12 Columns
----------------------------------------------------------------------------------------------------*/

.container_12 .suffix_1 {
	padding-right:80px;
}

.container_12 .suffix_2 {
	padding-right:160px;
}

.container_12 .suffix_3 {
	padding-right:240px;
}

.container_12 .suffix_4 {
	padding-right:320px;
}

.container_12 .suffix_5 {
	padding-right:400px;
}

.container_12 .suffix_6 {
	padding-right:480px;
}

.container_12 .suffix_7 {
	padding-right:560px;
}

.container_12 .suffix_8 {
	padding-right:640px;
}

.container_12 .suffix_9 {
	padding-right:720px;
}

.container_12 .suffix_10 {
	padding-right:800px;
}

.container_12 .suffix_11 {
	padding-right:880px;
}



/* Push Space >> 12 Columns
----------------------------------------------------------------------------------------------------*/

.container_12 .push_1 {
	left:80px;
}

.container_12 .push_2 {
	left:160px;
}

.container_12 .push_3 {
	left:240px;
}

.container_12 .push_4 {
	left:320px;
}

.container_12 .push_5 {
	left:400px;
}

.container_12 .push_6 {
	left:480px;
}

.container_12 .push_7 {
	left:560px;
}

.container_12 .push_8 {
	left:640px;
}

.container_12 .push_9 {
	left:720px;
}

.container_12 .push_10 {
	left:800px;
}

.container_12 .push_11 {
	left:880px;
}



/* Pull Space >> 12 Columns
----------------------------------------------------------------------------------------------------*/

.container_12 .pull_1 {
	left:-80px;
}

.container_12 .pull_2 {
	left:-160px;
}

.container_12 .pull_3 {
	left:-240px;
}

.container_12 .pull_4 {
	left:-320px;
}

.container_12 .pull_5 {
	left:-400px;
}

.container_12 .pull_6 {
	left:-480px;
}

.container_12 .pull_7 {
	left:-560px;
}

.container_12 .pull_8 {
	left:-640px;
}

.container_12 .pull_9 {
	left:-720px;
}

.container_12 .pull_10 {
	left:-800px;
}

.container_12 .pull_11 {
	left:-880px;
}




/* Clear Floated Elements
----------------------------------------------------------------------------------------------------*/

/* http://sonspring.com/journal/clearing-floats */

.clear {
	clear: both;
	display: block;
	overflow: hidden;
	visibility: hidden;
	width: 0;
	height: 0;
}

/* http://perishablepress.com/press/2008/02/05/lessons-learned-concerning-the-clearfix-css-hack */

.clearfix:after {
	clear: both;
	content: ' ';
	display: block;
	font-size: 0;
	line-height: 0;
	visibility: hidden;
	width: 0;
	height: 0;
}

.clearfix {
	display: inline-block;
}

* html .clearfix {
	height: 1%;
}

.clearfix {
	display: block;
}
/* Adding file: text.css */

/**
 * Basic Styles
 *
 * @section basic styles
 */
html {
  font-size: medium;
}
body {
  font-family: Arial,Helvetica,sans-serif;
  font-size:75%;
/*  font-size: 82%;  Kutscher */
}
a {
  text-decoration: none;
  font-weight: bold;
}
a:hover {
  text-decoration: underline;
}
a:focus {
  outline: 1px dotted;
}
p, dl, hr, h1, h2, h3, h4, h5, h6, ol, ul, pre, table, address, fieldset {
  margin-top: 0.7272em;
  margin-bottom: 0.7272em;
}
hr {
  border: 0 #ccc solid;
  border-top-width: 1px;
  clear: both;
  height: 0;
}
.hidden {
  display: none;
}
/**
 * Headings
 *
 * @section basic styles
 * @subsection headings
 */
h1, h2, h3, h4, h5, h6 {
  font-family: Arial, Helvetica, sans-serif;
}
h1 {
  font-size: 1.5em; /* ersetzt */  /* Kutscher */
}
h2 {
  font-size: 1.5em; /* ersetzt */  /* Kutscher */
}
/**
 * Listings
 *
 * @section basic styles
 * @subsection listings
 */
ol {
  list-style: decimal;
}
ul {
  list-style: disc;
}
li {
  margin-left: 15px;
}
.linkNonBold {
  font-weight: normal;
}

/* Adding file: global.css */
a.image {
  font-size:0.8em;
  font-weight:normal;
}

/**
 * Removes bottom border in firefox 3.x

 * @section flash player box
 * @workaround
 * @affected   Firefox 3.x
 * @css-for    All
 */
.flashPlayerBox object {
  display: block;
}

/**
 * More Link
 *
 * @section global
 * @subsection more link
 */
.moreLink {
  font-weight: bold;
  color: #333;
}
.moreLink:hover {
  color: #060;
}
.noTextTransform {
  text-transform:none !important;
}

/**
 * Hide content from screen to provide content for screenreaders
 *
 * @section global
 */
.auralOnly {
  display:none;
  visibility:hidden;
}

/**
 * Error and Success messages
 *
 * @section global
 * @subsection messages
 */
strong.error {
  color: black;
  line-height: 1.4em;
  display: block;
  font-size: 1.2em;
  margin-bottom: 1em;
}
strong.success {
  color: #090;
  line-height: 1.4em;
  display: block;
}

.errorBox {
  clear: both;
  border: 1px solid #FFCC35;
  color: #000;
  background-color: #FFFFCC;
  font-weight: bold;
  line-height: 1.4em;
  margin: 1em 0;
  padding: 1em 0;
  font-family: Arial,Helvetica,sans-serif;
  text-align: center;
}

/**
 * Page Kicker
 *
 * @section page kicker
 */
#pageKicker {
  margin-top: 8px;
  border-top: 1px solid #fff;
  border-bottom: 1px solid #fff;
  padding: 0.4em 0;
  font-family: Arial,Helvetica,sans-serif;
}

/**
 * DRadio Links
 *
 * @section page kicker
 * @subsection today
 */
#pageKicker .today {
  font-weight: bold;
  padding-left: 8px;
}

/**
 * DRadio Links
 *
 * @section page kicker
 * @subsection dradio links
 */
#pageKicker .dradioLinks {
  list-style-image: none;
  list-style-position: outside;
  list-style-type: none;
  float: right;
  margin: 0;
  padding: 0;
}
#pageKicker .dradioLinks li {
  float: left;
  margin: 0;
}
#pageKicker .dradioLinks li a {
  background-image: url(img/iconArrow.gif);
  background-repeat: no-repeat;
  background-position: 0 0.4em;
  padding: 0 7px;
  display: block;
  font-weight: bold;
  font-size: 0.917em; /* ersetzt */
}
#pageKicker .dradioLinks li.last a {
  padding-right: 0;
}
#pageKicker .dradioLinks li a.dradio { color: #626262; }
#pageKicker .dradioLinks li a.dlf { color: #0063ae; }
#pageKicker .dradioLinks li a.kultur { color: #e35804; }

/**
 * Page Content
 *
 * @section page content
 */
#pageContent {
  background: #fff;
  overflow: hidden;
}
#pageContent h1 {
  background-color: #b8bcb8;
  background-image: url(img/boxHeaderBg.png);
  background-repeat: repeat-x;
  border-bottom: 1px solid #777E77;
  color: #333;
  font-size: 1.167em; /* ersetzt */
  height: 2.7857em;
  line-height: 2.9em;
  margin: 0;
  padding: 0 8px;
/*  padding: 0 10px;  Kutscher */
  text-transform: uppercase;
}
#pageContent h1 span.articleDate {
  text-transform: none;
  color: #666;
}
#pageContent h1 span.resultMessage {
  text-transform: none;
  color: #666;
  font-size: 0.857em; /* ersetzt */
  margin-left: 0.25em;
}
#pageContent .pageText {
  line-height: 1.4em;
  margin-right: 16px;
}
/**
 * Page Content Footer
 *
 * @section page content
 * @subsection footer
 */
#pageContentFooter {
  border-top: 0.1em solid #ccc;
}
#pageContentFooter .richtextBox p {
  font-size: 0.834em;
}
/**
 * Page Content Closure
 *
 * @section page content
 * @subsection page content closure
 */
#pageContentClosure {
  border-top: 0.1em solid #ccc;
  padding: 0.6667em 0;
  line-height: 1.4em;
  font-family: Arial,Helvetica,sans-serif;
}
#pageContentClosure a.backToTop {
  color: #000;
  margin-left: 8px;
  display: block;
}
#pageContentClosure ul {
  list-style-image: none;
  list-style-position: outside;
  list-style-type: none;
  margin: 0;
}
#pageContentClosure ul li {
  float: left;
  margin: 0 0.4em 0 0;
}
#pageContentClosure ul li a {
  background-position: top left;
  background-repeat: no-repeat;
  padding: 0 0 1px 0;
  margin-right: 8px;
  color: #000;
}
#pageContentClosure ul li a.print,
#pageContentClosure ul li a.recommend {
  padding-left: 22px;
}
#pageContentClosure ul li a.itunes,
#pageContentClosure ul li a.podcast,
#pageContentClosure ul li a.rss {
  padding-left: 18px;
}
#pageContentClosure ul li a.print {
  background-image: url(img/iconViewmodePrint.gif);
}
#pageContentClosure ul li a.recommend {
  background-image: url(img/iconRecommend.gif);
}
#pageContentClosure ul li a.itunes,
#pageContentClosure ul li a.podcast,
#pageContentClosure ul li a.rss {
  background-image: url(img/feed-icon-14x14.png);
}

/**
 * Global Box styles
 *
 * @section box
 */
.box {
  background: #fff;
  margin-bottom: 1.333em;
}
.box .header {
  background-color: #b8bcb8;
  background-image: url(img/boxHeaderBg.png);
  background-repeat: repeat-x;
  border-bottom: 1px solid #777E77;
  margin: 0;
  color: #333;
  font-size: 1.167em; /* ersetzt */
  height: 2.7857em;
  line-height: 2.9em;
  padding: 0 8px;
  text-transform: uppercase;
}
.box .footer {
  background-color: #f0f0f0;
  background-image: url(img/boxFooterBg.png);
  background-repeat: repeat-x;
  background-position: bottom left;
  border-bottom: 1px solid #777E77;
  border-top: 1px solid #777E77;
  line-height: 2em;
  text-align: right;
}
.box .footer ul {
  font-family: Arial,Helvetica,sans-serif;
  font-weight: bold;
  color: #333;
  float: right;
  padding: 0 8px;
  margin: 0;
  list-style-image: none;
  list-style-position: outside;
  list-style-type: none;
}
.box .footer li {
  float: left;
  margin: 0 0 0 4px;
  padding: 0 0 0 10px;
  background-image: url(img/dot.png);
  background-repeat: no-repeat;
  background-position: 0 9px;
}
.box .footer li a {
  color: #333;
}
.box .footer li.first {
  background: none;
  padding-left: 0;
  margin-left: 0;
}
.box .richtextBox {
  padding: 0.001em 8px;
  font-size: 0.917em; /* ersetzt */
  line-height: 1.4em;
}
/**
 * Empty List Message
 *
 * @section general
 * @subsection empty list
 */
p.emptyListMessage {
  text-align: center;
  margin: 3em 16px;
  font-weight: bold;
  color: #666;
}

/**
 * Do not show the datepicker on startup
 */
#ui-datepicker-div {
  display: none;
}
span.upperCase {
  text-transform:uppercase;
}

/**
* Review
*
* @section Review
*/
ul.authorList li {
  margin-bottom:0.2em;
}

/**
* Frequency list
*
* @section FrequencyPage
*/
table.frequency {
  margin-left:0px !important;
}

/**
* Generic station color styles
*/
.deutschlandradiocolor { color: #626262; }
.deutschlandfunkcolor { color: #0063ae; }
.dradiokulturcolor { color: #e35804; }
.dradiowissencolor { color: #006600; }
.deutschlandradioblock {
  display: block;
  background-color: #c5c5c5;
  padding: 0.5em;
}
.deutschlandfunkblock {
  display: block;
  background-color: #bdccd6;
  padding: 0.5em;
}
.dradiokulturblock {
  display: block;
  background-color: #e8c9bf;
  padding: 0.5em;
}
.dradiowissenblock {
  display: block;
  background-color: #b3e2ae;
  padding: 0.5em;
}


/**
* Sets the switch for detail and quick views on the right
* site of the content area
*/
p.page-switch {
  text-align: right;
}

/**
* alignment of images within tables
*/
#pageContentMain td {
  vertical-align:top;
}

/**
 * Collapse Header
 *
 * @subsection collapsable
 * @subsubsection header
 */
.collapsable .boxcontroller {
  position: relative;
}
.collapsable .boxcontroller h2 {
  font-size: 1em; /* 14px */
  margin: 0;
  padding-left: 24px;
}
.collapsable .boxcontroller h2 a {
  color: #333333;
}
.collapsable .boxcontroller h2 a span {
  position: absolute;
  top: 50%;
  left: 8px;
  margin-top: -6px;
  width: 12px;
  height: 12px;
  line-height: 12px;
  zoom: 1;
  background-image: url(img/boxHeaderArrows.gif);
  background-position: 0 -72px;
}
.collapsed .boxcontroller h2 a span {
  background-position: 0 -48px;
}

/**
*
* html5player
*
*/
#visible .pbar {
  z-index:200;
  position:absolute;
  overflow:hidden;
  cursor:pointer;
}
#visible .pbarimg {
  position:absolute;
  height:100%;
  width:100%;
}
#visible .playpause {
  width:14px;
  height:16px;
  z-index:20;
  position:absolute;
  top:26px;
  cursor:pointer;
}
#visible .pshade {
  color:black;
  background-color:black;
  zoom: 1;
  filter: alpha(opacity=50);
  opacity: 0.5;
  position:absolute;
  height:19px;
  top:21px;
  z-index:30;
}
#visible.dlr .pshade {
  top:25px;
}
#visible .ptext {
  z-index:20;
  line-height:100%;
  font-weight:bold;
  position:absolute;
  color:white;
}
#visible .ptext div{
  display:inline;
}
#visible #back {
  width:100%;
  z-index:10;
}
#visible #playpausedummy {
  height:40px;
  width:40px;
  left:13px;
  top:13px;
}
#visible #play {
  left:29px;
}
#visible #pause {
  left:27px;
  visibility:hidden;
}
#visible #volumecontainer {
  width:14px;
  height:39px;
  z-index:20;
  left:65px;
  top:16px;
}
#visible #volumerail {
  left:0;
  top:0;
}
#visible #volumeslider {
  left:0;
  top:100%;
}
#visible #pbarrail {
  height:13px;
  left:92px;
  top:33px;
  width:137px;
}
#visible.dlr #pbarrail {
  top:46px;
}
#visible #pbarbuffer {
  height:2px;
  left:92px;
  top:39px;
  width:137px;
}
#visible.dlr #pbarbuffer {
  top:52px;
}
#visible #pbardone {
  height:13px;
  left:92px;
  top:33px;
  width:137px;
}
#visible.dlr #pbardone {
  top:46px;
}
#visible .pbarhidden {
  left:-100%;
  top:0;
}
#visible #length {
  height:10px;
  width:110px;
  left:185px;
  top:10px;
  text-align:right;
  font-size:80%;
}
#visible #annotation {
  height:10px;
  width:150px;
  left:92px;
  top:10px;
  font-size:80%;
}
#visible #title {
  height:19px;
  width:183px;
  left:85px;
  top:21px;
  overflow:hidden;
  font-size:115%;
  white-space:nowrap;
}
#visible.dlr #title {
  top:27px;
}
#visible #pshade1 {
  width:9px;
  left:85px;
}
#visible #pshade2 {
  width:5px;
  left:85px;
}
#visible #pshade3 {
  width:5px;
  left:265px;
}
#visible #pshade4 {
  width:9px;
  left:261px;
}
#visible #visualizedElementContainer {
  z-index:50;
  position:absolute;
  left:237px;
  top:45px;
  overflow:hidden;
  width:53px;
  height:15px;
}
#visible #visualize {
  z-index:40;
  position:absolute;
}
#visible .visualizedElement {
  z-index:50;
  position:absolute;
  top:100%;
}
#visible .socialMedia {
  position:absolute;
  top:45px;
  left:74px;
  width:100px;
  text-align:center;
  z-index:300;
}
#visible .socialMedia_12 {
  position:absolute;
  top:47px;
  left:93px;
  width:135px;
  text-align:center;
  z-index:300;
}
#visible .facebook, #visible .googleplus, #visible .twitter {
  display:inline;
  text-align:center;
  position:relative;
  width:20px;
}
#visible .socialMedia_12 .facebook,
#visible .socialMedia_12 .googleplus,
#visible .socialMedia_12.twitter {
  margin-right:5px;
}

  #playerArea div.fallbackLink {
  padding:0 1em 1em;
}

/**
 * Disqus Thread general styles
 */
div#disqus_thread {
  border-top: 0.1em solid #CCCCCC;
  padding: 8px;
}

a.startpageMobileLink {
  color: #666666;
  font-size: 1.8em;
  font-weight: bold;
}

/* hide blind navigation */
.hideNavigation {
  height: 0px;
  visibility: hidden;
  position: absolute;
  left: -20000px;
}

/* hide #pageContent div on startpage */
.hidePageContent {
  display: none;
}

/* Adding file: dialogs.css */
form {
  margin-top: 1.6em;
}
form p.confirmationText {
  padding: 0;
  margin: 0;
}
form .markerMandatory {
  color: #f00;
  padding-left: 4px;
}
form .field,
form .buttons {
  padding: 1.2em 0;
  background-color: #f2f2f2;
  border-bottom: 1px solid #fff;
  font-size: 0.834em;
}
form .field label {
  font-family: Arial,Helvetica,sans-serif;
  font-weight: bold;
  text-transform: uppercase;
  line-height: 1.3333em;
  margin-left: 8px;
  display: block !important;
}
form .checkbox {
  position: relative;
}
form .checkbox input {
  position: absolute;
  vertical-align: middle;
  left: 0;
  top: -1px;
  padding: 0;
  margin: 0;
}
form .checkbox label {
  display: inline;
  font-weight: normal;
  font-family:Arial, Helvetica, sans-serif;
  text-transform: none;
  margin: 0;
  padding-left: 18px;
}

/**
 * Input Text Field
 *
 * @section dialog
 * @subsection text
 */
form .field input.text {
  width: 384px;
  font-size: 12px;
  font-family:Arial, Helvetica, sans-serif;
  height: 1.5em;
  line-height: 1.5em;
}
form .grid_1 input.text { width: 47px; }
form .grid_2 input.text { width: 127px; }
form .grid_3 input.text { width: 207px; }
form .grid_4 input.text { width: 287px; }
form .grid_5 input.text { width: 367px; }
form .grid_6 input.text { width: 447px; }

/**
 * Input Textarea
 *
 * @section dialog
 * @subsection textarea
 */
form .field textarea {
  font-family:Arial, Helvetica, sans-serif;
  font-size: 12px;
  height: 8.4em;
  width: 384px;
  line-height: 1.4em;
}

/**
 * Input Checkgroup
 *
 * @section dialog
 * @subsection checkgroup
 */
form .checkgroup {
  margin: 0.4em 0;
}
form .checkgroup input {
  line-height: 1.4em;
  float: left;
  margin: 0;
}
form .checkgroup label {
  line-height: 1.4em;
  float: left;
  margin: 0 0 0 0.4em;
}

/**
 * Additional dialog field class "stationRadioSelection"
 *
 * To correct positioning of station radio elements in audio archive.
 *
 * @section dialog
 */
form .stationRadioSelection .grid_4 {
  width: 456px;
}
form .stationRadioSelection .grid_4 .grid_2 {
  width: 228px;
}

/**
 * Input Date Field
 *
 * @section dialog
 * @subsection text
 * @subsubsection date
 */
form .date input.text {
  width: 75px;
}
form .date strong label {
  margin-left: 0;
}

/**
 * Autocomplete
 *
 * @section dialogs
 * @subsection date picker
 */
.ui-helper-hidden-accessible {
  display: none;
}
ul.ui-autocomplete {
  background-color: #FFF;
  border: #000 solid 1px;
  width: 233px;
}

ul.ui-autocomplete li {
  line-height: 1.3em;
  list-style: inside none none;
}

ul.ui-autocomplete li a {
  color: #000;
  text-decoration: none;
  font-weight: normal;
}

ul.ui-autocomplete li a:hover {
  background-color: #DDD;
}

/**
 * Date picker
 *
 * @section dialogs
 * @subsection date picker
 */
img.ui-datepicker-trigger {
  position: relative;
  left: 10px;
  top: 4px;
  cursor: pointer;
}
#ui-datepicker-div {
  font-family: Arial,Helvetica,sans-serif;
}
#ui-datepicker-div table {
  width: 251px;
  border: 1px solid #888;
  border-collapse: collapse;
  margin: 0 0 0 1px;
  font-size: 0.917em; /* ersetzt */
}
#ui-datepicker-div .ui-datepicker-header {
  width: 250px;
  font-weight: bold;
  text-transform: uppercase;
  text-align: center;
  border: 1px solid #888;
  border-bottom: none;
}
#ui-datepicker-div .ui-datepicker-prev,
#ui-datepicker-div .ui-datepicker-next {
  display: block;
  height: 2em;
  left: 0;
  position: absolute;
  top: 0;
  width: 2em;
}
#ui-datepicker-div .ui-datepicker-next {
  right: 0;
  left: auto;
}
#ui-datepicker-div .ui-datepicker-prev span,
#ui-datepicker-div .ui-datepicker-next span{
  background-image: url(img/boxHeaderArrows.gif);
  background-repeat: no-repeat;
  background-position: 0 -12px;
  height: 12px;
  left: 50%;
  margin: -6px 0 0 -6px;
  overflow: hidden;
  position: absolute;
  text-indent: -99999px;
  top: 50%;
  width: 12px;
}
#ui-datepicker-div .ui-datepicker-header a.ui-state-disabled span {
  background-image: none;
}
#ui-datepicker-div .ui-datepicker-next span {
  top: 50%;
  right: 10px;
  background-position: 0 0px;
}
#ui-datepicker-div .ui-datepicker-header {
  position: relative;
  display: block;
  background-image: url(img/boxHeaderBg.png);
  height: 2em;
}
#ui-datepicker-div .ui-datepicker-title {
  height: 2em;
  line-height: 2em;
}
#ui-datepicker-div th {
  text-transform: uppercase;
  color: #666;
  line-height: 2em;
  background-color: #fff;
}
#ui-datepicker-div td {
  border: 1px solid #999;
  text-align: center;
  background-color: #f6f6f6;
  line-height: 2em;
}
#ui-datepicker-div td.ui-state-disabled {
  color: #999;
  font-weight: bold;
}
#ui-datepicker-div td a {
  display: block;
  color: #000;
}
#ui-datepicker-div td a.ui-state-highlight {
  background-color: #b8bcb8;
}
#ui-datepicker-div td a.ui-state-active {
  background-color: #bad2b8;
}

/**
 * Password link in login page dialog
 *
 * @section content login
 * @subsection password link
 */
.contentLogin .passwordLink,
form .buttons .cancelLink {
  margin-left: 10px;
}

form.aodSearchBox {
  margin:0;
}
form.aodSearchBox fieldset {
/*  background:#f6f6f6;*/
  padding:.5em;
  margin:0;
}
form.aodSearchBox fieldset label {
  font-weight:bold;
  display:block;
  width:7em;
  float:left;
}
form.aodSearchBox fieldset#stations div {
  width:50%;
  float:left;
  height:2em;
}
form.aodSearchBox fieldset#stations label {
  display:inline;
  font-weight:bold;
  float:none;
}
form.aodSearchBox fieldset#stations input {
}
form.aodSearchBox fieldset label#dateHeading {
  display:block;
  margin-bottom:.5em;
  clear:left;
  float:none;
}
form.aodSearchBox fieldset input[type=text] {
  margin-bottom:1em;
  border:1px solid #999999;
  background-image:url(/themes/dradio/img/searchFieldBg.png);
  background-position:-1px -20px;
}
form.aodSearchBox fieldset input[type=submit],
form.aodSearchBox fieldset input[type=reset] {
  border:1px solid #999999;
  background:white;
}
form.aodSearchBox fieldset input#from,
form.aodSearchBox fieldset input#to {
  width:8em;
}

form.aodSearchBox fieldset input#to {
  margin-bottom:0;
}
form.aodSearchBox fieldset select {
  border:1px solid #999;
  background:white;
  width:13em;
}
form.aodSearchBox fieldset#stations {
  border-bottom:1px solid #ccc;
}
form.aodSearchBox fieldset#stations img{
  height:15px;
}
form.aodSearchBox fieldset#submitAod {
  border-top:1px solid #ccc;
  text-align:center;
}

/*
 * fixFeedbackCss is a generic class that can be added to various types  of fields
 * in the papaya feedback form creator
 * Corresponding CSS can be added here
 */
.checkgroup.grid_2.fixFeedbackCss {
  margin-right: 11px;
  margin-left: 8px;
  width: auto;
}
.checkgroup.grid_2.fixFeedbackCss label {
  line-height: 20px;
}
/* Adding file: pageHeader.css */
/**
 * Page Header
 *
 * @section page header
 */
#pageHeader {
  background-image: url(img/headerGeneric.jpg);
  border-bottom: 1px solid #fff;
  font-family: Arial,Helvetica,sans-serif;
}
#pageHeader .spacer {
  height: 2.58em;
  border-bottom: 1px solid #fff;
  margin-right: 8px;
}
#pageHeader,
#pageHeader a {
  color: #333;
}

/**
 * DRadio Logo
 *
 * @section page header
 * @subsection logo
 */
#pageHeader div h1.logo {
  display: block;
}

#pageHeader div h1.logo span {
  float: left;
  display: block;
  padding: 33px 0 0 10px;
}

#pageHeader div h1.logo a {
  float: left;
}
#pageHeader div.logo {
  font-size: 0.084em; /* ersetzt */
}

/**
 * Meta Navigation
 *
 * @section page header
 * @subsection meta navigation
 */
#pageHeader .metaNavigation {
  border-bottom: 1px solid #fff;
  font-size: 0.917em; /* ersetzt */
  padding: 0.91em 0;
  font-weight: bold;
}
#pageHeader .alpha .metaNavigation {
  padding-left: 8px;
}

/**
 * Login Box
 *
 * @section page header
 * @subsection login
 */
#pageHeader .login {
  top: 2.9em;
  left: 0;
  display: block;
  position: absolute;
  z-index: 1;
}
#pageHeader .login form,
#pageHeader .login fieldset {
  margin: 0;
}
#pageHeader .login legend {
  display: none;
}
#pageHeader .login .formLine {
  position: relative;
  margin-top: 0.8em;
}
#pageHeader .login .formLine label {
  color: #fff;
}
#pageHeader .login .formLine input {
  border: 1px solid #fff;
  background: none;
  color: #fff;
  font-weight: bold;
  padding: 2px 4px;
  font-size: 0.909em; /* nichtersetzt */
  width: 134px;
}
#pageHeader .login .error {
  font-weight: normal;
  color: #FF0000;
  margin: 0.8em 0;
}
#pageHeader .login .link {
  margin: 0.4em 0 0 5px;
  line-height: 1.3em;
}
#pageHeader .login .link a {
  color: #fff;
  font-weight: normal;
}
.jsEnabled #pageHeader .login .submit {
  text-decoration: underline;
  font-weight: bold;
}
.jsEnabled #pageHeader .login .error {
  position: absolute;
  left: -160px;
  width: 144px;
}
.jsEnabled #pageHeader .loginHidden {
  display: none;
}
.jsEnabled #pageHeader .login .formLine label {
  position: absolute;
  top: 4px;
  left: 5px;
  cursor: text;
  font-size: 0.909em; /* nichtersetzt */
}

/**
 * Search
 *
 * @section page header
 * @subsection search
 */
#pageHeader .search {
  margin: 8px 0 0 0;
}
#pageHeader .search form {
  margin: 0;
}
#pageHeader .search .field {
  background-image: url(img/searchFieldBg.png);
  background-position: -1px -1px;
  border: 1px solid #999;
  font-size: 0.917em; /* ersetzt */
  height: 1.55em;
  padding: 4px 2px 2px 24px;
  width: 233px;
  margin: 0;
}
#pageHeader .search button {
  width: 24px;
  height: 24px;
  padding: 0;
  margin: 0 0 0 7px;
  background: url(img/searchButton.png);
  border: none;
  vertical-align: top;
}
#pageHeader .search button .hidden {
  display: none;
  height: 0;
}

/**
 * Time
 *
 * @section page header
 * @subsection time
 */
#pageHeader .currentTime {
  color: #fff;
  font-size: 1.5em; /* ersetzt */
  font-weight: bold;
  margin: 38px 0 8px 0;
}
#pageHeader .currentTime .zone {
  font-size: 0.6111em; /* nichtersetzt */
  color:#BFBFBF;
}

/**
 * Page Zoom
 *
 * @section page header
 * @subsection page zoom
 */
#pageHeader .pageZoom ul {
  float: right;
  font-size: 1.084em; /* ersetzt */
  font-weight: bold;
  list-style-image: none;
  list-style-position: outside;
  list-style-type: none;
  margin: 41px 0 8px 0;
}
#pageHeader .pageZoom li {
  display: inline;
  margin: 0 0px;
}
#pageHeader .pageZoom .min {
  font-size: 0.85em; /* nichtersetzt */
}
#pageHeader .pageZoom .max {
  font-size: 1.15em; /* nichtersetzt */
}
#pageHeader .pageZoom a {
  color: #e0e0e0;
}
#pageHeader .pageZoom .active a {
  text-decoration: underline;
}
/* Adding file: pageFooter.css */
/**
 * Page Footer
 *
 * @section page footer
 */
#pageFooter {
  border-bottom: 0.1em solid #fff;
  margin-top: 4.8em;
  margin-bottom: 1.6em;
}
#pageFooter .footerBox {
  border-top: 0.1em solid #fff;
  padding: 0.8em 0 1.6em 0;
}
#pageFooter .partnerLogos {
  text-align: right;
  vertical-align: top;
}
#pageFooter .partnerLogos span {
  display: block;
  text-align: left;
}
#pageFooter .partnerLogos a {
  color: #333;
  margin-left: 8px;
  display: inline-block;
}
#pageFooter p,
#pageFooter ul {
  color: #333;
  font-family: Arial,Helvetica,sans-serif;
  font-size: 0.917em; /* ersetzt */
  font-weight: bold;
  margin: 0;
  padding: 0;
}
#pageFooter ul {
  list-style-image: none;
  list-style-position: outside;
  list-style-type: none;
}
#pageFooter li {
  margin: 0;
  padding: 0;
}
#pageFooter ul a {
  color: #333;
  line-height: 1.2em;
}
/* Adding file: teaser.css */
/**
 * Teaser
 *
 * @section teaser
 */
.teaserItem {
  border-bottom: 1px solid #777E77;
}
.teaserItemLast {
  border-bottom: none !important;
}

/**
 * Short Teaser
 *
 * @section teaser
 * @section short teaser
 */
.shortTeaser {
  padding: 0 8px;
  border-bottom: 1px solid #ccc;
}
.shortTeaser h3 {
  color: #006600;
  font-weight: bold;
  font-size: 1.084em; /* ersetzt */
  padding: 0.6153em 0 0 0;
  margin: 0;
}
.shortTeaser p {
  padding: 0 0 0.7272em;
  margin: 0;
  font-size: 0.917em; /* ersetzt */
  line-height: 1.4em;
  color: #000;
}

/**
 * Picture / TextTeaser
 *
 * @section teaser
 * @subsection picture teaser
 */
.pictureTeaser {
  border-bottom: 1px solid #ccc;
  width:100%;
}
.pictureTeaserLast {
  border-bottom: none;
}
.pictureTeaser.singleLineTeaser {
  padding-bottom:4px !important;
}
.pictureTeaser .image {
  float: left;
  width: 144px;
  display: block;
}
.pictureTeaser.wide .image {
  float:none;
}
.pictureTeaser img {
  width: 144px;
}
.pictureTeaser h3 {
  color: #006600;
  font-weight: bold;
  font-size: 1.084em; /* ersetzt */
  margin: 0 4px 0 152px;
  padding: 0.6153em 0 0.6153em 0;
  line-height: 1.2em;
}
.pictureTeaser h3.singleLineTeaser {
  font-size:1em;
}
.pictureTeaser h3.singleLineTeaser .headline {
  font-weight:normal;
  color:#000;
}
.pictureTeaser h3.wide {
  margin-left: .572em;
}
.pictureTeaser h3 small {
  font-size: 0.8em; /* ersetzt */
  text-transform: uppercase;
  display: block;
  color: #666;
}
.pictureTeaser h3 a:hover small {
  text-decoration: underline;
}
.pictureTeaser p {
  margin: 0 4px 0 152px;
  padding: 0 0 0.7272em;
  font-size: 0.917em; /* ersetzt */
  line-height: 1.2727em;
/*  color: #444;   Kutscher */
  color:#000;
}
.pictureTeaser p.compact {
  padding: 0;
}
.pictureTeaser p.bottomLink {
  padding:0;
  margin-bottom:.4em;
}
.pictureTeaser .inlineBottomLink {
  display:inline-block;
  margin-bottom:.4em;
}
/**
 * Text Teaser
 *
 * @section teaser
 * @subsection text teaser
 */
.textTeaser {
  border-bottom: 1px solid #ccc;
}
.textTeaser h3 {
  color: #006600;
  font-weight: bold;
  font-size: 1.084em; /* ersetzt */
  margin: 0 4px 0 152px;
  padding: 0.6153em 0 0.6153em 0;
  line-height: 1.2em;
}
.textTeaser h3 small {
  font-size: 0.8em; /* ersetzt */
  text-transform: uppercase;
  display: block;
  color: #666;
}
.textTeaser h3 a:hover small {
  text-decoration: underline;
}
.textTeaser p {
  margin: 0 4px 0 152px;
  padding: 0 0 0.7272em;
  font-size: 0.917em; /* ersetzt */
  line-height: 1.2727em;
  color: #000;
}
.textTeaser p {
  padding:4px 0 0 0;
  margin:0 8px;
  color:#666666;
}
.textTeaser p span{
  color:#000;
}

/**
 * Teaserbox Without Footer
 *
 * @section startpage
 * @subsection header
 */
.teaserBoxWithoutFooter p{
  margin-left:8px;
}
.teaserBoxWithoutFooter .image{
  display:inline;
  margin-right:8px;
  margin-bottom:4px;
}
.teaserBoxWithoutFooter .pictureTeaser{
  border-color:#878787;
  padding-bottom:20px;
}

/**
* Teaserbox With Empty Footer
*
* @section startpage
* @section header
*/
.teaserBoxWithEmptyFooter p{
  margin-left:8px;
}
.teaserBoxWithEmptyFooter .image{
  display:inline;
  margin-right:8px;
  /* margin-bottom:4px; */
}
.teaserBoxWithEmptyFooter .pictureTeaser{
  border-bottom:0;
}
.teaserBoxWithEmptyFooter p.previewTeaserBroadcast {
  font-weight:bold;
  color:#006600;
}
.teaserBoxWithEmptyFooter p.previewTeaserBroadcast span {
  font-weight:normal;
  color:#666666;
  font-size:0.8em; /* nichtersetzt */
  text-transform:uppercase;
}

/**
 * Paged Teaser Box
 *
 * @section teaser
 * @subsection paged teaser
 */
.pagedTeaserBox .footer li.prevPage,
.pagedTeaserBox .footer li.nextPage {
  cursor: pointer;
  width: 14px;
  height: 14px;
  padding: 0;
  margin-top: 5px;
  background-image: url(img/boxButtons.png);
  background-position: 0 0;
  overflow: hidden;
}
.pagedTeaserBox .footer li.prevPageDisabled,
.pagedTeaserBox .footer li.nextPageDisabled {
  cursor: default;
}
.pagedTeaserBox .footer li.nextPage { background-position: 0 -14px; }
.pagedTeaserBox .footer li.prevPageDisabled { background-position: 0 -28px; }
.pagedTeaserBox .footer li.nextPageDisabled { background-position: 0 -42px; }
.pagedTeaserBox .body {
  position: relative;
  overflow: hidden;
}
.pagedTeaserBox .teaserList {
  position: absolute;
  left: 0;
  top: 0;
}
.pagedTeaserBox .page {
  float: left;
}

/**
 * Current Article Teaser Box
 *
 * @section teaser
 * @section current article teaser
 */
.currentArticleTeaser .body {
  position: relative;
  background-color: #b8bcb8;
  background-image: url(img/boxHeaderBg.png);
  background-repeat: repeat-x;
  height: 22.3em;
}
.currentArticleTeaser h1 {
  background-color: #b8bcb8;
  background-image: url(img/boxHeaderBg.png);
  background-repeat: repeat-x;
  color: #333;
  font-size: 1.167em; /* ersetzt */
  height: 2.7857em;
  line-height: 2.9em;
  margin: 0;
  padding: 0 8px;
  text-transform: uppercase;
  cursor: pointer;
  float: left;
  position: relative;
}
.currentArticleTeaser h1 span {
  position: absolute;
  top: 0;
  left: 0;
  height: 2.785em;
  width: 8px;
}
.currentArticleTeaser h1.active {
  background-image: url(img/boxHeaderBgActive.png);
  background-position: top left;
  background-color: #0b3106;
  color: #fff;
  border-right: none;
}
.currentArticleTeaser h1 a{
  color:#333;
}
.currentArticleTeaser h1.active a{
  color:#fff;
  text-decoration:none;
}
.currentArticleTeaser h1.activeFollowing a{
  color:#333;
  text-decoration:none;
}
.currentArticleTeaser h1 a:hover{
  text-decoration:underline;
}
.currentArticleTeaser h2 {
  color: #006600;
}
.currentArticleTeaser h2 small {
  color: #666;
  display: block;
  font-size: 0.6112em; /* nichtersetzt */
  padding-bottom: 0.3em;
  text-transform: uppercase;
}
.currentArticleTeaser .shadowFixture {
  float: left;
  height: 3.9em;
  width: 8px;
  position: relative;
}
.currentArticleTeaser .shadowFixture span {
  position: absolute;
  top: 0;
  left: 0;
  height: 3.9em;
  width: 8px;
}
.currentArticleTeaser .activeFollowing span {
  background-image: url(img/boxHeaderTabShadow.png);
  background-repeat: no-repeat;
}
.currentArticleTeaser .panel .grid_4 div {
  margin-right: 16px;
  font-size: 0.917em; /* ersetzt */
  line-height: 1.4em;
}
.currentArticleTeaser .panel {
  border-top: 1px solid #777E77;
  background-color: #fff;
  overflow: hidden;
  height: 19em;
}
.currentArticleTeaser .panel {
  position: absolute;
  top: 3.25em;
  left: 0;
}
.currentArticleTeaser .panel a.image {
  line-height:0;
}
.currentArticleTeaser .footer {
  height: 3.2em;
}
.currentArticleTeaser .footer li {
  background-image: url(img/boxFooterNavBar.gif);
  background-position: left top;
  font-size: 1.0833em; /* nichtersetzt */
  height: 2.4615em;
  margin-left: 16px;
  line-height: 2.4615em;
  text-transform: uppercase;
  font-family:  Arial,Helvetica,sans-serif;
}

/**
 * Livestream Player
 *
 * @section teaser
 * @subsection current article teaser
 * @subsubsection livestream player
 */
.currentArticleTeaser .livestream {
  position: absolute;
  right: 0;
  bottom: 0;
  width: 320px;
  height: 68px;
  background-image: url(img/currentArticlePlayer.png);
  font-family: Arial,Helvetica,sans-serif;
}
.currentArticleTeaser .livestream h3 {
  position: absolute;
  top: 3px;
  left: 100px;
  color: #fff;
  line-height: 35px;
  margin: 0;
  font-size: 18px;
}
.currentArticleTeaser .livestream ul {
  left: 100px;
  line-height: 23px;
  position: absolute;
  top: 42px;
  margin: 0;
}
.currentArticleTeaser .livestream ul li {
  display: inline;
  margin: 0 0.5em 0 0;
  font-size: 12px;
}
.currentArticleTeaser .livestream ul li a {
  color: #999;
}
.currentArticleTeaser .livestream ul li a.active {
  color: #fff;
}
.currentArticleTeaser .livestream .playButton {
  position: absolute;
  top: 15px;
  left: 14px;
  width: 38px;
  height: 39px;
  cursor: pointer;
}

/**
 * Current Broadcasts Teaser Box
 *
 * @section teaser
 * @section current broadcasts teaser
 */
.currentBroadcastsTeaser .body {
  position: relative;
  background-color: #b8bcb8;
  background-image: url(img/boxHeaderBg.png);
  background-repeat: repeat-x;
  height: 18.5em; /* 222 px */
}
.currentBroadcastsTeaser h1 {
  background-color: #b8bcb8;
  background-image: url(img/boxHeaderBg.png);
  background-repeat: repeat-x;
  color: #333;
  font-size: 1.167em; /* ersetzt */
  height: 2.7857em;
  line-height: 2.9em;
  margin: 0;
  padding: 0 8px;
  text-transform: uppercase;
  cursor: pointer;
  float: left;
  position: relative;
}
.currentBroadcastsTeaser h1 span {
  position: absolute;
  top: 0;
  left: 0;
  height: 2.785em;
  width: 8px;
}
.currentBroadcastsTeaser h1.active {
  background-image: url(img/boxHeaderBgActive.png);
  background-position: top left;
  background-color: #0b3106;
  color: #fff;
  border-right: none;
}
.currentBroadcastsTeaser h1 a{
  color:#333;
}
.currentBroadcastsTeaser h1.active a{
  color:#fff;
  text-decoration:none;
}
.currentBroadcastsTeaser h1.activeFollowing a{
  color:#333;
  text-decoration:none;
}
.currentBroadcastsTeaser h1 a:hover{
  text-decoration:underline;
}
.currentBroadcastsTeaser .shadowFixture {
  float: left;
  height: 3.9em;
  width: 8px;
  position: relative;
}
.currentBroadcastsTeaser .shadowFixture span {
  position: absolute;
  top: 0;
  left: 0;
  height: 3.9em;
  width: 8px;
}
.currentBroadcastsTeaser .activeFollowing span {
  background-image: url(img/boxHeaderTabShadow.png);
  background-repeat: no-repeat;
}
.currentBroadcastsTeaser .panel {
  border-top: 1px solid #777E77;
  background-color: #fff;
  overflow: hidden;
  height: 15.1667em; /* 182 px */
}
.currentBroadcastsTeaser .panel {
  position: absolute;
  top: 3.25em;
  left: 0;
  width: 100%;
}

/**
 * News Teaser (unfolded with js tabbing styles)
 *
 * @section teaser
 * @section news teaser
 */
.jsEnabled .newsTeaser .tabbed {
  position: relative;
/*  background-color: #b8bcb8;*/
  background-image: url(img/boxHeaderBg.png);
  background-repeat: repeat-x;
  min-height: 22.4em;
}
.newsTeaser h1 {
  background-color: #b8bcb8;
  background-image: url(img/boxHeaderBg.png);
  background-repeat: repeat-x;
  color: #333;
  font-size: 1.084em; /* ersetzt */
  height: 2em;
  line-height: 1em;
  margin: 0;
  padding: 0.5em 8px;
  text-transform: uppercase;
}
.newsTeaser .tabbed h1 {
  width: 136px;
  float: left;
  overflow: hidden;
  position: relative;
  cursor: pointer;
}
.newsTeaser a:hover {
  text-decoration: underline;
}
.jsEnabled .newsTeaser .shadowFixture {
  display: none;
}
.newsTeaser h1 .headline {
  display: block;
  color: #999;
  font-size: 0.8461em; /* nichtersetzt */
}
.newsTeaser h1 .headline span {
  display: none;
}
.jsEnabled .newsTeaser h1.active {
  background-image: url(img/boxHeaderBgContinents.png);
  background-position: center;
  background-color: #0b3106;
  border-right: none;
  color: #fff;
  padding-top: 1.5em;
  height: 1em;
}
.jsEnabled .newsTeaser h1.active .headline {
  display: none;
}
.jsEnabled .newsTeaser h1 .shadow {
  position: absolute;
  top: 0;
  left: 0;
  width: 8px;
  height: 3em;
}
.jsEnabled .newsTeaser h1.activeFollowing .shadow {
  background-image: url(img/boxHeaderTabShadow.png);
  background-repeat: no-repeat;
}
.newsTeaser .panel {
  border-top: 1px solid #777E77;
  background-color: #fff;
  overflow: hidden;
}
.jsEnabled .newsTeaser .tabbed .panel {
  position: absolute;
  top: 3.25em;
  left: 0;
  min-height: 19em;
}
.jsEnabled .newsTeaser .tabbed .panel .footer {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 304px;
}
.newsTeaser ol {
  margin: 0;
  padding: 0;
  list-style-image: none;
  list-style-position: outside;
  list-style-type: disc;
  width: 304px;
}
.newsTeaser ol li {
  margin: 0;
  border-bottom: 1px solid #ced4ce;
  padding: 0.6em 1em;
}
.newsTeaser ol li.last {
  border-bottom: none;
}
.newsTeaser ol li a {
  font-size: 0.917em; /* ersetzt */
  font-weight: normal;
  color: #000;
  line-height: 1.2727em;
  display: block;
}
.newsTeaser ol li a:visited {
  color: #666;
}
.newsTeaser .footer ul {
  float: left;
}
.newsTeaser .footer li {
  background-position: 0 12px;
  font-family:  Arial,Helvetica,sans-serif;
  height: 2.6666em;
  line-height: 2.6666em;
}

/**
 * Additional news teaser box styles (folded output)
 */
.newsTeaserFolded .tabbed {
  position: relative;
  background-color: #b8bcb8;
  background-image: url(img/boxHeaderBg.png);
  background-repeat: repeat-x;
  min-height: 22.4em;
}

.newsTeaserFolded a,
.newsTeaserFolded a:visited {
  color: #333333;
  text-decoration: none;
}
.newsTeaserFolded a:hover {
  text-decoration: underline;
}

.newsTeaserFolded .active a {
  color: #fff;
}

.newsTeaserFolded .shadowFixture {
  display: none;
}
.newsTeaserFolded h1.active {
  background-image: url(img/boxHeaderBgContinents.png);
  background-position: center;
  background-color: #0b3106;
  border-right: none;
  color: #fff;
  padding-top: 1.5em;
  height: 1em;
}
.newsTeaserFolded h1.active .headline {
  display: none;
}
.newsTeaserFolded h1 .shadow {
  position: absolute;
  top: 0;
  left: 0;
  width: 8px;
  height: 3em;
}
.newsTeaserFolded h1.activeFollowing .shadow {
  background-image: url(img/boxHeaderTabShadow.png);
  background-repeat: no-repeat;
}
.newsTeaserFolded .tabbed .panel {
  position: absolute;
  top: 3.25em;
  left: 0;
  min-height: 19em;
}
.newsTeaserFolded .tabbed .panel .footer {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 304px;
}
.textTeaserListCompact h3 {
  margin: 0 0 0 8px;
  padding: 8px 0 0 0;
}
.textTeaserListCompact p {
  margin: 0 0 0 8px;
}

/* Adding file: contentList.css */
.contentListHead {
  border-bottom: 0.1em solid #ccc;
}
.contentListFoot {
  border-top: 0.1em solid #ccc;
  border-bottom: none;
}
.contentListHead p {
  color: #666;
  font-family: Arial,Helvetica,sans-serif;
  font-weight: bold;
  margin: 5px 0 5px 8px;
}
.contentListHead p.prefix_2 {
  margin-left: 0;
}
.orderByLinks {
  text-align: right;
  margin-right: 8px;
  font-weight: bold;
  color: #666;
  font-family: Arial,Helvetica,sans-serif;
}
/**
 * List Paging
 *
 * @section list paging
 */
.paging {
  list-style-image: none;
  list-style-position: outside;
  list-style-type: none;
  float: right;
  font-family: Arial,Helvetica,sans-serif;
  margin: 5px 8px 5px 0;
}
.paging li {
  color: #666;
  float: left;
  font-weight: bold;
  margin: 0;
}
.paging li a,
.paging li span {
  display: block;
  float: right;
  width: 14px;
  height: 14px;
  background: url(img/boxButtons.png);
  margin-left: 4px
}
.paging li.nextPage a { background-position: 0 -14px; }
.paging li.prevPage span { background-position: 0 -28px; }
.paging li.nextPage span { background-position: 0 -42px; }
.paging li.overview a { background-position: 0 -112px; }
.paging li a span,
.paging li span span {
  display: none;
}
/**
 * Content List
 *
 * @section content list
 */
.contentList {
  margin: 0;
  padding: 0;
  list-style-image: none;
  list-style-position: outside;
  list-style-type: none;
}

/**
 * Content List
 *
 * @section content list
 */
.contentList2 {
  margin: 0;
  padding: 0;
  list-style-image: none;
  list-style-position: outside;
  list-style-type: none;
}

/**
 * List Item
 *
 * @section content list
 * @subsection list item
 */
.contentList2 li {
  margin: 0;
  padding: 10px 8px 8px 0;
}
.contentList2 li.toBeContinued {
  padding-bottom: 0;
}
.contentList2 li div.text {
  margin-left: 1em;
  padding-bottom: 0.8em;
  border-bottom: 0.1em solid #ccc;
}
.contentList2 li.toBeContinued .text {
  border-bottom: none;
  padding-bottom: 0;
}
.contentList2 li.last div.text {
  border-bottom: none;
}
.contentList2 li p {
  margin: 0.8em 0;
  line-height: 1.4em;
}
.contentList2 li p.subtitle strong {
  font-style: italic;
  font-weight: normal;
  color: #666;
}

/**
 * Title
 *
 * @section content list
 * @subsection list item
 * @subsubsection title
 */
.contentList2 li h2 {
  font-size: 1em;
  display: inline;
  margin: 0;
}
.contentList2 li h2 small {
  font-size: 1em; /* ersetzt */
  display: block;
  margin: 0 8px 3px 0;
}
.contentList2 li h2 small .text .overline,
.contentList2 li h2 small .overline {
  text-transform: uppercase;
}
.contentList2 li h2 small .text .overline {
}
.contentList2 li h2 .title {
  font-size: 1.1em; /* ersetzt */
  margin: 0;
}

/**
 * List Item
 *
 * @section content list
 * @subsection list item
 */
.contentList li {
  margin: 0;
  padding: 10px 8px 8px 0;
}
.contentList li.toBeContinued {
  padding-bottom: 0;
}
.contentList li .image {
  display: block;
  float: left;
  width: 144px;
}
.contentList li .image img {
  width: 144px;
}
.contentList li div.text {
  margin-left: 160px;
  padding-bottom: 0.8em;
  border-bottom: 0.1em solid #ccc;
}
.contentList li.toBeContinued .text {
  border-bottom: none;
  padding-bottom: 0;
}
.contentList li.last div.text {
  border-bottom: none;
}
.contentList li p {
  margin: 0.8em 0;
  line-height: 1.4em;
}
.contentList li p.subtitle strong {
  font-style: italic;
  font-weight: normal;
  color: #666;
}
.eventEntry {
  clear: both;
}
/**
 * Title
 *
 * @section content list
 * @subsection list item
 * @subsubsection title
 */
.contentList li h2 {
  font-size: 1em;
  display: inline;
  margin: 0;
}
.contentList li h2 small {
  color: #666;
  font-size: 0.917em; /* ersetzt */
  display: block;
  margin: 0 8px 3px 0;
}
.contentList li h2 small .text .overline,
.contentList li h2 small .overline {
  color: #666;
  text-transform: uppercase;
}
.contentList li h2 small .text .overline {
  padding-left: 0.3em;
  margin-left: 0.3em;
  border-left: 0.175em solid #666;
}
.contentList li h2 .title {
  font-size: 1.5em; /* ersetzt */
  margin: 0;
}

/**
 * Audio Link
 *
 * @section content list
 * @subsection list item
 * @subsubsection audio link
 */
.contentList h2 .audio a {
  background-image: url(img/iconAudio.gif);
  background-repeat: no-repeat;
  background-position: right 3px;
  padding-right: 23px;
}
.contentList h3 .audio a .audioIcon{
  background-image: url(img/iconAudioSmall.gif);
  background-repeat: no-repeat;
  background-position: right 1px;
  padding-right: 16px;
}
.contentList li a.audio {
  display: inline-block;
  background-image: url(img/iconAudio.gif);
  height: 18px;
  width: 15px;
  margin: 0.3em 0 -0.3em 5px;
}
.contentList li a.audio span {
  display: none;
}

/**
 * Article Links
 *
 * @section content list
 * @subsection list item
 * @subsubsection article links
 */
.contentList li ul.articleLinks,
.contentList li ul.audioLinks {
  list-style-image: none;
  list-style-position: outside;
  list-style-type: none;
  margin: 0.8em 8px 0.8em 0;
}
.contentList li ul.audioLinks {
  float: right;
  margin-top: 0.6em;
}
.contentList li ul.articleLinks li,
.contentList li ul.audioLinks li {
  margin: 0;
  padding: 0 16px 0 0;
  display: inline;
  font-size: 0.917em; /* ersetzt */
  font-weight: bold;
  white-space: nowrap;
}
.contentList li ul.audioLinks li {
  display: inline;
  padding-bottom: 0.4em;
}
.contentList li ul.articleLinks li .comments,
.contentList li ul.articleLinks li .similarArticles,
.contentList li ul.audioLinks li a {
  background-image: url(img/iconComment.gif);
  background-repeat: no-repeat;
  background-position: 0 0px;
  color: #333;
  font-family: Arial,Helvetica,sans-serif;
  padding: 1px 0 2px 22px;
}
.contentList li ul.articleLinks li .similarArticles {
  background-image: url(img/iconSimilarArticles.gif);
}
.contentList li ul.audioLinks li a {
  background-image: url(img/iconAudioSmall.gif);
  padding-top: 0px;
  padding-left: 15px;
}
.contentList li ul.articleLinks li .comments span {
  font-size: 0.75em; /* ersetzt */
}
.contentList li.topicGroupMember {
  padding-top:0;
}
.contentList div.broadcastData {
  margin-bottom:.8em;
  line-height:1.4em;
}
.contentList .toBeContinued {
  padding-top:1em;
  margin-bottom:1.2em;
}
.contentList .toBeContinued.nextIsSingleLine {
  margin-bottom:.5em;
}
.contentList .topicGroupStart.toBeContinued .clear,
.contentList .topicGroupMember.toBeContinued .clear {
  display:none;
}
.contentList div.portalTeaser p {
  margin-bottom:0;
}
/**
 * Audio Details
 *
 * @section content list
 * @subsection audio details
 */
.contentList dl.audioDetails {
  margin: 0.6667em 0;
  line-height: 1.4em;
}
.contentList dl.audioDetails dt {
  float: left;
  clear: left;
  margin-right: 0.5em;
}
.contentList dl.audioDetails dd {
  font-weight: bold;
}
.contentList dl.audioDetails dd a {
  color: #333;
}
.contentList2 dl.audioDetails {
  margin: 0.6667em 0;
  line-height: 1.4em;
}
.contentList2 dl.audioDetails dt {
  float: left;
  clear: left;
  margin-right: 0.5em;
}
.contentList2 dl.audioDetails dd {
  font-weight: bold;
}
.contentList2 dl.audioDetails dd a {
  color: #333;
}

.contentList.dayOverview li h2 {
  line-height:1.2em;
}
.contentList.dayOverview li h2 small {
  text-transform:uppercase;
  margin-bottom:0;
  font-size:.8em;
}
.contentList.dayOverview h3 {
  margin-top:0;
}

.contentList + .previewTeasersGap {
  height:1.333em;
  background:#e9ebe9;
  border-top:0.1em solid #ccc;
}

#keyMatchList {
  margin: 0;
  padding: 0;
  list-style-image: none;
  list-style-position: outside;
  list-style-type: none;
}

#keyMatchList li {
  margin: 0;
}

#keyMatchList li div {
  padding: 8px;
  margin: 2px;
  margin-left: 12px;
}

#keyMatchList li div a {
  text-decoration: none;
}
#keyMatchList li div a:hover {
  text-decoration: underline;
}
#keyMatchList li div a.link_arrow_left {
  background-image: url(dlr/img/pfeil.gif);
  background-position: top left;
  background-repeat: no-repeat;
  padding-left: 10px;
}

#keyMatchList div.bg-dlr {
  background-color: #EEE;
}
#keyMatchList div.bg-dlf {
  background-color: #BCE;
}
#keyMatchList div.bg-drk {
  background-color: #ECB;
}
#keyMatchList div.bg-drw {
  background-color: #BEC;
}


/* Adding file: contentArticle.css */
/**
 * Content Article
 *
 * @section content article
 */
.contentArticle .text {
  padding: 0 24px 0 0;
  line-height: 1.4em;
}

/**
 * Image
 *
 * @section content article
 * @subsection image
 */
.contentArticle .image {
  margin-top: 1.6em;
}
.contentArticle .image a {
  display: block;
}
.contentArticle .image a.source {
  display: inline;
}
.contentArticle .image dd {
  margin-top: 0.8em;
  padding-left: 8px;
}
.contentArticle .largeImage dd {
  margin-top: 0.2em;
}
/**
 * Title
 *
 * @section content article
 * @subsection title
 */
.contentArticle h2 {
  font-size: 1.5em;
  margin-top: 0.8889em;
}
.contentArticle h2 small {
  color: #666;
  display: block;
  font-size: 0.6112em; /* nichtersetzt */ /* 11px von 18px */
  padding-bottom: 0.3em;
  text-transform: uppercase;
}
.contentArticle p.subtitle {
  margin: -1em 8px 1em 0;
}
.contentArticle p.subtitle em {
  font-style: italic;
  font-weight: normal;
  color: #666;
}
.contentArticle p.author {
  font-style: italic;
  font-weight: normal;
  color: #666;
}
.contentArticle p.kicker {
  line-height: 1.4em;
}

/**
 * Audio Link
 *
 * @section content list
 * @subsection list item
 * @subsubsection audio link
 */
.contentArticle h2 .audio a {
  background-image: url(img/iconAudio.gif);
  background-repeat: no-repeat;
  background-position: right 3px;
  padding-right: 23px;
}

/**
 * General Content Styles
 *
 * @section content article
 * @section general content styles
 */
.contentArticle p {
  line-height: 1.4em;
}
.contentArticle table {
  width: 100%;
}
.contentArticle table thead td,
.contentArticle table th {
  font-weight: bold;
  text-align: center;
  padding-bottom: 0.4em;
}
.contentArticle table tbody {
  border-color: #cecece;
  border-style: solid;
  border-width: 0.1em 0;
}
.contentArticle table.noBorders tbody {
  border-width: 0;
}

.contentArticle table tr {
  margin: 0.8em 0;
  line-height: 1.4em;
}
.contentArticle table td {
  padding: 0.4em;
}
.contentArticle li {
  margin-left: 15px;
  line-height: 1.4em;
}
.contentArticle em {
  color: #666;
  font-style: italic;
}

/* Adding file: contentNews.css */
/**
 * Content News
 *
 * @section content news
 */
.contentNews h2 {
  font-size: 1.0em;
  font-family: Verdana,Geneva,sans-serif !important;
  margin: 1.6em 0;
}
.contentNews h3 {
  font-size: 1.5em; /* ersetzt */
  font-weight: bold;
  margin: 0.8em 0;
  display: inline;
}
.contentNews small.time {
  font-size: 0.917em; /* ersetzt */
  color: #333;
  display: inline;
  font-weight: bold;
  font-family: Arial,Helvetica,sans-serif;
  margin-left: 1em;
  white-space: nowrap;
}
.contentNews small.time span {
  position: absolute;
  left: -9999px;
}
.contentNews p {
  margin: 0.6666em 0 1.3333em 0;
  line-height: 1.4em;
}
.contentNews .details {
  margin: 0 16px 0 0;
}

/**
 * News Listing
 *
 * @section content news
 * @subsection list
 */
.contentNews .furtherNewsTitle {
  margin-left: 8px;
}
.contentNews ul.list {
  list-style-image: none;
  list-style-position: outside;
  list-style-type: none;
}
.contentNews ul.list li {
  margin: 1.9em 16px 2.4em 0;
}
.contentNews ul.list h3 {
  font-size: 1.167em; /* ersetzt */
}
.contentNews .additionalNews {
  border-top: 0.1em solid #ccc;
}
.contentNews .contentLinkBox {
  vertical-align: middle;
  text-align: center;
}
.contentNews ul.linkList {
  line-height:1.4em;
}

/* Short news list */
.shortNews h2 {
  font-weight:bold;
  font-size:1em;
}
.shortNews .shortNewsDay {
  border-bottom:1px solid #ccc;
}
.shortNews .shortNewsDay.last {
  border-bottom:none;
}
.shortNews .shortNewsItem h2 {
  font-size:1.2em;
  margin-bottom:0;
}
.shortNews .shortNewsItem p {
  margin-top:.25em;
  font-style:italic;
}
.contentNews h2.headline {
  font-size:1.5em;
  margin:.8889em 0 .7272em;
}
.contentNews h2.headline span.overline {
  color:#666;
  display:block;
  font-size:.6112em;
  padding-bottom:.3em;
  text-transform:uppercase;
}
/* Adding file: contentPlaylist.css */
/**
 * Content Playlist
 *
 * @section content playlist
 */
.contentPlaylist h2 {
  font-family:Arial, Helvetica, sans-serif;
  margin: 1.6em 24px 1.6em 0;
  padding-bottom: 1.4em;
  border-bottom-width: 0.1em;
  border-bottom-style: solid;
  border-bottom-color: #cccccc;
}
.contentPlaylist h3 {
  font-size: 1.5em; /* ersetzt */
  font-weight: bold;
  margin: 0.8em 0;
  display: inline;
}
.contentPlaylist p {
  margin: 0.6666em 0 1.3333em 0;
  line-height: 1.4em;
}
.contentPlaylist .details {
  margin: 0 16px 0 0;
}

/**
 * Playlist Listing
 *
 * @section content playlist
 * @subsection list
 */
.contentPlaylist .furtherNewsTitle {
  margin-left: 8px;
}
.contentPlaylist ul.contentList {
  list-style-image: none;
  list-style-position: outside;
  list-style-type: none;
}
.contentPlaylist ul.contentList li {
  margin: 0 16px 0 0;
  padding-top: 10px;
}
.contentPlaylist ul.contentList h3 {
  font-size: 1.084em; /* ersetzt */
}
.contentPlaylist table tr td {
  line-height: 1.4em;
}
.contentPlaylist table tr td.lable {
  width: 100px;
}
/* Adding file: contentSchedule.css */
/**
 * Content Schedule
 *
 * @section content schedule
 */
.contentSchedule p {
  line-height: 1.4em;
  margin: 0.6667em 16px 2em 0;
}
.contentSchedule h3 {
  margin-top: 1.3333em;
}
.contentSchedule h3 strong {
  text-transform: uppercase;
}
.contentSchedule form {
  margin: 0.8em 0 0 0;
}
.contentSchedule strong.scheduleTitle {
  font-size: 10 px;
  font-weight: 900;
  text-transform: uppercase;
}

/**
 * List
 *
 * @section content schedule
 * @subsection list
 */
.contentSchedule table {
  width: 100%;
  margin: 0.8em 0 0 0;
}
.contentSchedule thead tr {
  position: absolute;
  left: -9999px;
}
.contentSchedule td {
  border-bottom: 1px solid #fff;
}
.contentSchedule tr.last td {
  border-bottom: none;
}
.contentSchedule td.time {
  background-color: #ddd;
  width: 144px;
  padding: 0.6667em;
}
.contentSchedule td.description {
  background-color: #eee;
  padding: 0 .6667em;
}
.contentSchedule td.description p {
  margin-bottom: 8px;
}
.contentSchedule td.description p.subDescription .title {
  font-family: Arial, Helvetica, sans-serif;
  font-weight: bold;
}

.contentSchedule a.psradio {
  color: #000;
  float: right;
  padding-left: 11px;
  background-image: url("img/reddot.gif");
  background-position: top left;
  background-repeat: no-repeat;
}

.contentSchedule div.grid_6.prefix_2.alpha.omega {
  padding-left: 169px;
}

.contentSchedule form div.field div.grid_6.omega {
  right: -10px;
}

/* Adding file: contentSitemap.css */
/**
 * Content Sitemap
 *
 * @section content sitemap
 */
.contentSiteMap ul {
  margin-top: 0.55em;
  margin-bottom: 0.55em;
}
.contentSiteMap ul ul {
  margin: 0;
}
.contentSiteMap ul li {
  list-style-image: none;
  list-style-position: outside;
  list-style-type: none;
  margin: 0;
  padding: 0.8em 0;
  font-size: 0.834em;
}
.contentSiteMap ul li li {
  margin-left: 32px;
  padding-left: 31px;
  border-left: 1px solid #060;
  background-image: url(img/drwSitemapBorder.gif);
  background-position: -1px -68px;
  background-repeat: no-repeat;
  font-size: 1em;
}
.contentSiteMap ul li li.first {
  padding-top: 1.6em;
  background-position: -1px -62px;
}
.contentSiteMap ul li li.last {
  border-left: none;
  padding-bottom: 0;
  background-position: 0px -68px;
}
.contentSiteMap ul li a {
  display: block;
  border: 1px solid #060;
  padding: 1.6em 16px;
  width: 192px;
}
.contentSiteMap ul li a:hover {
  background-color: #060;
  color: #fff;
}
/* Adding file: calendar.css */
/**
 * Calendar
 *
 * @section calendar
 */
.calendar {
  background-color: #fff;
  font-family: Arial,Helvetica,sans-serif;
}
.calendar table {
  width: 100%;
}
.calendar .header {
  background-image: url(img/boxHeaderBg.png);
  display: block;
  font-weight: bold;
  height: 2.7857em;
  position: relative;
  text-align: center;
}
.calendar .header a.prev,
.calendar .header a.next {
  display: block;
  height: 2.9em;
  position: absolute;
  top: 0;
  width: 2.8571em; 
}
.calendar .header a.prev {
  position:absolute;
  left:0px;
  margin:0 4px 0 10px;
}
.calendar .header a.next {
  position:absolute;
  right:0px;
  margin:0 10px 0 4px;
}
.calendar .header a.prev span,
.calendar .header a.next span {
  background-image: url(img/boxHeaderArrows.gif);
  background-repeat: no-repeat;
  background-position: 0 -12px;
  height: 12px;
  left: 50%;
  margin: -6px 0 0 -6px;
  overflow: hidden;
  position: absolute;
  text-indent: -99999px;
  top: 50%;
  width: 12px;
}
.calendar .calendar .header a.disabled span {
  background-image: none;
}
.calendar .header a.next span {
  top: 50%;
  right: 10px;
  background-position: 0 0px;
}
.calendar .header h2 {
  font-size: 1em;
  height: 2.7857em;
  line-height: 2.9em;
  text-transform: uppercase;
  margin: 0;
  color: #000;
}
.calendar .header .leftSection {
  position:absolute;
  left:0px;
  width:60%;
}
.calendar .header .rightSection {
  position:absolute;
  right:0px;
  width:40%;
}
.calendar table {
  margin: 0;
}
.calendar th {
  text-transform: uppercase;
  color: #666;
  line-height: 1.667em;
}
.calendar td {
  border: 1px solid #999;
  text-align: center;
  background-color: #f6f6f6;
  line-height: 2em;
}
.calendar td.disabled {
  font-weight: normal;
}
.calendar td a,
.calendar td span {
  display: block;
  color: #000;
}
.calendar td a.active,
.calendar td span.active {
  background-color: #bad2b8;
}
.calendar td.weekEnd {
  border-left-width: 0px;
  border-right-width: 0px;
}
.calendar td.otherMonth,
.calendar td.otherMonth a {
  color: #999;
}
/* Adding file: dlr.comments.css */
/**
 * Styles for comment box
 *
 * @section comments
 */
.comments h2 {
  margin: 1.6em 1.6em 1.6em 0;
}

.comments h3 {
  font-family: Arial, Helvetica, sans-serif;
  font-weight: bold;
  font-size:   12px;
  color:       #666;
}

.comments h2 span {
  text-transform: uppercase;
}

/**
 * Order Links
 *
 * @section comments
 * @subsection order links
 */
.comments .orderLinks {
  list-style-image: none;
  list-style-position: outside;
  list-style-type: none;
  float: right;
  font-family: Arial,Helvetica,sans-serif;
  margin: 1.6em 1.6em 1.6em 0;
}
.comments .orderLinks li {
  color: #666;
  float: left;
  font-weight: bold;
  margin: 0 0 0 0; 
}
.comments .orderLinks a,
.comments .orderLinks span {
  display: block;
  float: right;
  width: 14px;
  height: 14px;
  background: url(img/boxButtons.png);
  background-position: 0 -56px;
  margin-left: 4px
}
.comments .orderLinks li.descending a { background-position: 0 -70px; }
.comments .orderLinks li.ascending span { background-position: 0 -84px; }
.comments .orderLinks li.descending span { background-position: 0 -98px; }
.comments .orderLinks li a span,
.comments .orderLinks li span span {
  position: absolute;
  left: -9999px;
  margin: 0 0 0 0;
}

/**
 * Comments list
 *
 * @section comments
 * @subsection list
 */
.comments ul.list {
  list-style-image: none;
  list-style-position: outside;
  list-style-type: none;
  margin: 1.6em 0;
}
.comments ul.list li {
  margin: 1.6em 0;
  padding: 0;
}
.comments ul.list .comment {
  margin-right: 16px;
}
.comments ul.list .comment h3 {
  margin: 0.2em 0;
  font-size: 12px;
}
.comments ul.list .comment h3 span {
  color: #000;
}
.comments ul.list .comment p {
  line-height: 1.4em;
  margin: 0.2em 0;
  overflow: hidden;
  margin-bottom: 0.6667em;
}
.comments ul.list p.author {
  margin-left: 8px;
  font-family: Arial,Helvetica,sans-serif;
  font-weight: bold;
  color: #888;
  line-height: 1.4em;
}
.comments ul.list p.author .date {
  display: block;
}

/**
 * Comment Form
 *
 * @section comments
 * @subsection form
 */
.commentForm h2 {
  font-size: 1.5em; /* ersetzt */
  margin: 0.4444em;
  margin-left: 0;
}
.commentForm p {
  line-height: 1.4em;
}
.commentForm form p.name {
  font-size: 12px;
  font-family: Arial,Helvetica,sans-serif;
  margin: 0;
}
.comments .abuse {
  font-size: 0.917em; /* ersetzt */
  line-height: 1.4em;
  color: #888;
  font-weight: bold;
}
/**
 * No Comments Message
 *
 * @section comments
 * @subsection empty list
 */
p.noCommentsMessage {
  margin: 1em 16px 0.5em 0px;
  font-size: 0.917em; /* ersetzt */
  font-weight: bold;
  color: #666;
}
/* Adding file: gallery.css */
.galleryThumbnail {
  display: block;
  float: left;
  padding: 20px;
}
a.galleryThumbnailFrame {
  display: block;
  text-align: center;
  vertical-align: center;
}
.galleryThumbnailFrame img {
  border: none;
}
.galleryNavigation {
  clear: both;
  text-align: center;
}
.galleryTitle {
  display: block;
  font-weight: bold;
  padding-bottom: 0.5em;
}

/* lightbox */
#lbOverlay,
#lightboxOverlay {
  position: fixed;
  z-index: 9999;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: #000;
  cursor: pointer;
}
#lbCenter, #lbBottomContainer,
#lightboxCenter, #lightboxBottomContainer {
  position: absolute;
  z-index: 9999;
  overflow: hidden;
  background-color: #fff;
}
.lbLoading,
.lightboxLoading {
  background: #fff url(img/lightbox_loading.gif) no-repeat center;
}
#lbImage,
#lightboxImage {
  position: absolute;
  left: 0;
  top: 0;
  border: 10px solid #fff;
  background-repeat: no-repeat;
}
#lbPrevLink, #lbNextLink,
#lightboxPrevLink, #lightboxNextLink {
  display: block;
  position: absolute;
  top: 0;
  width: 50%;
  outline: none;
}
#lbPrevLink,
#lightboxPrevLink {
  left: 0;
}
#lbPrevLink:hover,
#lightboxPrevLink:hover {
  background: transparent url(img/lightbox_prevlabel.gif) no-repeat 0 15%;
}
#lbNextLink,
#lightboxNextLink {
    right: 0;
}
#lbNextLink:hover,
#lightboxNextLink:hover {
  background: transparent url(img/lightbox_nextlabel.gif) no-repeat 100% 15%;
}
#lbBottom,
#lightboxBottom {
  font-family: Verdana, Arial, Geneva, Helvetica, sans-serif;
  font-size: 10px;
  color: #666;
  line-height: 1.4em;
  text-align: left;
  border: 10px solid #fff;
  border-top-style: none;
}
#lbCloseLink,
#lightboxCloseLink {
  display: block;
  float: right;
  width: 66px;
  height: 22px;
  background: transparent url(img/lightbox_closelabel.gif) no-repeat center;
  margin: 5px 0;
  outline: none;
}
#lbCaption, #lbNumber,
#lightboxCaption, #lightboxNumber {
  margin-right: 71px;
}
#lbCaption,
#lightboxCaption {
  font-weight: bold;
  color: #004371;
}

/* Adding file: dlr.head.css */
/* further hanges (no review yet) */

html, body{
  background:#e9ebe9;
}
a{
  color:#000;
}
#pageHeader{
  background-repeat:no-repeat;
  background-image: url(dlr/img/head.jpg);
}
#pageHeader div a:hover{
  color:#000;
}
#pageHeader .grid_3 a{
  color:#333;
}
#pageHeader .grid_3 a:hover{
  color:#fff;
}
#pageHeader .grid_4 a{
  color:#333;
}
#pageHeader .grid_4 a:hover{
  color:#fff;
}
#pageHeader .metaNavigation span{
  color:#666666;
  font-size:12px;
}
#pageHeader .time .metaNavigation{
  font-size:14px;
}
#pageHeader .outputLinks .min{
  font-size:10px;
}
#pageHeader .outputLinks .max{
  font-size:15px;
}
#pageHeader .outputLinks .active{
  text-decoration:underline;
}
#pageHeader .fontSwitch a:hover{
  text-decoration:none;
}
#pageHeader .small{
  font-size:10px;
}
#pageHeader .big{
  font-size:15px;
}

/* Grids */
#pageHeader{
  height:106px;
  overflow:hidden;
  position:relative;
}
#pageHeader .grid_4{
  width:296px;
}
#pageHeader .metaNavigation{
  border:none;
}
#pageHeader .spacer{
  display:none;
}
#top #pageHeader .logo{
  margin-top:-42px;
}
#pageHeader .metaNavigation{
  font-size:12px;
  padding:8px 0;
}
#pageHeader .outputLinks {
  width:296px;
}
#pageHeader .fontSwitch{
  position:absolute;
  right:4px;
}
#pageHeader .fontSwitch ul{
  margin:0;
}
#pageHeader .search{
  margin: 25px 0 0;
}
#pageHeader .search span{
  font-size:12px;
}
#pageHeader .time .metaNavigation{
  padding-top:7px;
}
#pageKicker{
  border-top:none;
}
#pageKicker .dradioLinks li a{
  height:21px;
  overflow:hidden;
  line-height:200px;
  padding:0;
  margin:4px 0 0 12px;
}
#pageKicker .dradioLinks li .dlf{
  background:url("dlr/img/logoDlf.png");
  width:113px;
}
#pageKicker .dradioLinks li .kultur{
  background:url("dlr/img/logoDkultur.png");
  width:157px;
}
#pageKicker .dradioLinks li .dradio{
  background:url("dlr/img/logoDlr.png");
  width:119px;
}
#pageKicker .dradioLinks li .wissen{
  background:url("dlr/img/logoDwissen.png");
  width:96px;
}
#top #pageKicker .grid_8{
  width:936px;
}
#pageFooter{
  margin-top:16px;
}

#pageHeader .currentTimeStep .time {
  color:#333333;
}
#pageHeader .metaNavigation.currentDate {
  padding-left:0;
  float:left;
  width:17.75em;
}
#pageHeader .metaNavigation.currentTimeStep span.zone {
  margin-right:.5em;
}
/* Adding file: dlr.navigation.css */
.subNavigation .subMainLinks {
  color:#666;
  text-decoration:none;
}
#pageSubHeader .mainNavigation li li {
  display:block;
}
.subNavigation .subMainLinks:hover {
  color:#000;
  cursor:pointer;
}

/* secondary navigation (dlf,dkultur) */
#pageSubHeader ul.subNavigation {
  list-style-type:none;
  margin:0;
  text-transform:uppercase;
  font-weight:bold;
  color:#666;
  height:1em;
  padding-bottom:.5em;
  padding-top:.8em;
  font-size:.9em;
  margin-bottom:.1em;
  padding-right:1em;
}
#pageSubHeader ul.subNavigation > li {
  float:left;
}
#pageSubHeader ul.subNavigation > li.socialMedia {
  margin-top:-.3em;
  margin-left:5px;
}
#pageSubHeader ul.subNavigation > li.socialMedia:hover {
  padding:0;
}
#pageSubHeader ul.subNavigation > li:hover {
  color:#000;
  text-decoration:none;
  color:#000;
  cursor:pointer;
  padding-bottom:.5em;
}
.jsDisabled #pageSubHeader ul.subNavigation > li:hover ul{
  display:block;
}
#pageSubHeader ul.subNavigation > li ul{
  display:none;
  position:absolute;
  display:none;
  color:#666;
  background:#CEDBE3;
  list-style-type:none;
  z-index:3;
  margin-left:-.5em;
  top:1.6em;
}
#pageSubHeader ul.subNavigation > li ul li{
  margin:0;
  padding:.5em;
  border-bottom:1px solid #E9EBE9;
}

#pageSubHeader ul.subNavigation > li a:hover,
#pageSubHeader ul.subNavigation > li ul li a:hover{
  color:#000;
  text-decoration:none;
}
#pageSubHeader ul.subNavigation > li a,
#pageSubHeader ul.subNavigation > li ul li a {
    color:#666;
}
#pageSubHeader ul.subNavigation li.socialMedia {
  float:right;
}

/* New main navigation */
#pageSubHeader ul.mainNavigation{
  margin:1.667em 8px 1.667em 0;
  width:100%;
}
#pageSubHeader ul.mainNavigation > li{
  display:inline-block;
  overflow:hidden;
/*  padding-bottom:1.3em !important;*/
}
#pageSubHeader ul.mainNavigation li{
  list-style-type:none;
  list-style-position:outside;
  list-style-image:none;
  margin:0;
  padding:0;
/*  font-size:1.1em;   Kutscher */
  font-size:1.2em;
  font-weight:bold;
  font-family:Arial,Helvetica,sans-serif;
  text-transform:uppercase;
}
#pageSubHeader ul.mainNavigation li ul{
  position:absolute;
  z-index:5;
  background:#e9ebe9;
  padding:0;
  padding-top:1em;
  top:1.3em;
  left:-9999px;
  opacity:.95;
  box-shadow:2px 2px 3px #888888;
}
.jsEnabled #pageSubHeader ul.mainNavigation li ul{
  padding-left:10px;
}
#pageSubHeader ul.mainNavigation li ul li{
  font-size:1em !important;
  opacity:1;
  margin-bottom:.7em !important;
}
#pageSubHeader ul.mainNavigation li ul li a{
  background:none;
  float:none;
  opacity:1;
  text-transform:none;
  padding:0;
}
#pageSubHeader ul.mainNavigation li:hover {
  color:#000;
}
#pageSubHeader ul.mainNavigation li a:focus,
#pageSubHeader ul.mainNavigation li a:hover {
  color:#000;
  text-decoration:none;
}
#pageSubHeader ul.mainNavigation li a {
  color:#666;
  padding:0 0 0 10px;
  margin-right:.5em;
  background:url(img/arrow_right_dradio.png) no-repeat;
  float:left;
}
#pageSubHeader ul.mainNavigation.hasSocialMedia {
  margin:1.3em 0;
}
#pageSubHeader .mainNavigation img{
  vertical-align:text-bottom;
}
#pageSubHeader .mainNavigation li.socialMedia{
  float:right;
  padding-top:0 !important;
  height:22px;
}
#pageSubHeader .mainNavigation li.socialMedia a{
  background:none;
}
.jsDisabled #pageSubHeader ul.mainNavigation li:hover ul{
  display:block;
  position:absolute;
  left:auto;
  padding-left:1em;
}
/* Adding file: dlr.content.css */
/**
 * underline links in content text
 */
#pageContentMain a {
  text-decoration:underline;
}
#pageContentMain h1 a,
#pageContentMain h2 a,
#pageContentMain h3 a,
#pageContentMain h4 a,
#pageContentMain h5 a,
#pageContentMain h6 a,
#pageContentMain div.more a {
  text-decoration:none;
}
#pageContentMain h1 a:hover,
#pageContentMain h2 a:hover,
#pageContentMain h3 a:hover,
#pageContentMain h4 a:hover,
#pageContentMain h5 a:hover,
#pageContentMain h6 a:hover,
#pageContentMain div.more a:hover {
  text-decoration:underline;
}
/**
 * Current broadcasts page
 */
.contentCurrentBroadcasts .contentList li.broadcast {
  margin-left: 0pt;
}

/**
 * Picture / TextTeaser
 *
 * @section teaser
 * @subsection picture teaser
 */
.pictureTeaser .image {
  display:block;
  margin-bottom:4px;
  margin-right:8px;
}
.pictureTeaser h3 {
  color:#333;
  font-size:1.167em;
  line-height:1.25em;
}
.pictureTeaser h3 a {
  color:#333;
}
.pictureTeaser h3 small {
  color:#666;
  font-size:.743em;
  text-transform:uppercase;
}
.pictureTeaser p {
  font-size:1em;
  line-height:1.416em;
  margin:0 .333em 0 .666em;
}
.pictureTeaser.programTip h3.program {
  padding-bottom:.15em;
  font-size:1em;
  margin-left:.7em;
}
.pictureTeaser.programTip h3.headline {
  padding-top:0;
}
/**
* Schedule page
*/
.contentSchedule div {
  border-bottom: 1px solid rgb(204, 204, 204);
  margin-bottom: 8px;
}
.contentSchedule td.description h4 a {
  text-decoration:underline !important;
}
.contentSchedule td.time {
  font-weight:bold;
}
/**
* Traffic news
*/
.streetNumber {
  display:inline-block;
  width:30px;
  height:20px;
  background:url("dlr/img/streetBg.png") no-repeat left top;
  font-size:11px;
  line-height:20px;
  text-align:center;
  font-family:Arial, sans-serif;
}
.streetNumberHighway {
  background-position:0 -20px;
}
.streetNumberHighway a {
  color:#fff;
  text-decoration:none !important;
}
.streetNumberStateroad {
  background-position:0 -40px;
  color:#000;
}
.streetNumberStateroad a {
  text-decoration:none !important;
}
/**
* Weather symbol legend tables
*/
table.formattable {
  border: 1px none #000000;
  margin: 0px 0px 20px;
  padding: 0px;
  border-collapse:collapse;
  font-family: Verdana, Arial, Helvetica, sans-serif;
  font-size: 11px;
}
.formattable td {
  padding: 3px;
  font-family: Verdana, Arial, Helvetica, sans-serif;
  font-size: 11px;
  border: 1px solid #CCCCCC;
  margin: 0px;
  border-collapse:collapse;
  color:#666666;
}
.formattable th {
  padding: 3px;
  border-collapse:collapse;
  font-size: 11px;
  font-family: Verdana, Arial, Helvetica, sans-serif;
}

/* content header area */
.contentHeader .multiNews {
  margin:1.4em 0 1.4em .666em;
}
.contentHeader .multiNews h3 {
  font-size:1.167em;
}
.contentHeader .multiNews ul {
  line-height:1.4em;
}

/* new background gradient for h1 */
#pageContent h1 {
  background-image:url("dlr/img/h1_gradient.gif");
  background-color:#fff;
  background-position:left bottom;
}

.contentList li ul.articleLinks li .similar {
  background-image:url("img/iconSimilar.gif");
  background-position:0 2px;
}
.contentList li h2{
  font-size:12px;
}
.contentList li h2 .title{
  font-size:1.167em;
}
.contentList li p.subtitle strong,
.contentList li h2 small span.broadcast{
  color:#000;
}
.contentList li h2 span.announcement {
  display:block;
  font-weight:normal;
  margin-bottom:0.7272em;
}
.contentList li div.more {
  line-height:1.4em;
  margin-top:.2em;
  font-weight:bold;
}

/* new color for h2 */
h2 .title a,
.contentArticle h2,
#pageContentFooter h3 a {
  color:#000;
  line-height:1.25em;
}
.contentArticle h2 {
  font-size:1.5em;
  margin-top:.8889em;
}
.contentArticle p.subtitle {
  margin:-.5em 8px .5em 0;
}
.contentArticle p.author {
  margin-top:.5em;
}
.contentArticle em {
  color:#000;
}
#top .pageTitle2 {
  color:#000;
  font-size:14px;
}
#top .dlr,
#top p.dlr{
  color:#666 !important;
}
#top .drk,
#top .dradiokulturcolor,
#top .dradiokulturcolor a,
#top p.drk{
  color:#E85417 !important;
}
#top .dlf,
#top .deutschlandfunkcolor,
#top .deutschlandfunkcolor a,
#top p.dlf{
  color:#036 !important;
}
#top .drw,
#top .dradiowissencolor,
#top .dradiowissencolor a,
#top p.drw{
  color:#060 !important;
}

.ca2,
.ca2First {
  border-top:1px solid #cccccc;
  clear:both;
  float:left;
  width:100%;
}
.ca2.drk.pos_1 {
  border-top:1px solid #E85417;
}
.ca2.dlf.pos_1 {
  border-top:1px solid #06a;
}
.ca2.drw {
  border-top:1px solid #060;
}
.ca2First {
  border-top:none;
}

#top .ca .pageTitle2{
  clear:both;
  border:none;
}
#top .ca2 .pageTitle2 {
  font-weight:normal;
  font-size:1em;
}

.moreLink:hover{
  color:#000;
}

/* Captions */
.contentArticle .image dd,
.contentArticle .largeImage dd,
.contentArticle .lightboxImage dd{
    font-size:0.834em;
}

/* Review-Service (only via JS, default hidden) */
.service{
  background:#eee;
  font-family:Arial,Helvetica,sans-serif;
  position:absolute;
  right:8px;
  top:7px;
  width:auto;
  font-size:11px
}

.inactive ol{
  display:none;
}

.service ol a{
  font-size:12px;
  line-height:18px;
}

.service li{
  line-height:14px;
  list-style-type:none;
  margin:0;
  padding:0;
}

.service li a{
  position:relative;
  clear:both;
  width:auto;
}

.inactive a,
.service ol a{
  border:medium none;
}

.service a{
  font-size:11px;
  cursor:pointer;
  float:left;
  width:100%;
}

.inactive strong{
  background:#ccc;
  border-color:#fff;
}

.service strong{
  background:#ccc;
  margin-bottom:-1px;
  padding:2px 4px;
  display:inline-block;
  text-transform:uppercase;
}

.service .first{
  margin-top:4px;
}

.service ol{
  background:#eee;
  border-bottom-style:solid;
  border-bottom-width:1px;
  border-color:#eee;
  border-left-style:solid;
  border-left-width:1px;
  border-right-style:solid;
  border-right-width:1px;
  float:none;
  margin:0;
  padding:4px;
  width:auto;
}

/* Fonts */
#top .arial_headline,
#top .arial p{
  font-family:Arial,Helvetica,sans-serif;
  font-size:12px;
}

/* Gray background */
#top .field{
  width:100%;
  float:left;
  background:#f1f5f5;
}

h6{
  text-transform:uppercase;
}

/* Separator (News) */
#top .cn2{
  clear:both;
  display:inline-block;
  padding-bottom:12px;
}

#top .cn2 .omega{
  float:right;
}

#top .cn2,
#top .cn2 p,
#top .cn2 li{
  margin-bottom:0;
  margin-top:0;
  padding-bottom:0;
  padding-top:0;
}
#top .cn2 a{
  text-decoration:none;
}
#top .cn2 a:hover{
  text-decoration:underline;
}
/* Comments-Font */
.contentListHead p.prefix_2{
  margin-left:0;
}

.container_12 .prefix_2{
  padding-left:160px;
}

.container_12 .grid_4{
  width:304px;
}

.commentsFont p{
  font-family:Arial,Helvetica,sans-serif;
  font-size:12px;
  padding-bottom:8px;
  padding-top:8px;
}

.contentListHead p{
  color:#666666;
  font-weight:bold;
  margin:5px 0 5px 8px;
}

.contentListFoot{
  border-top:none;
}

.commentsFont .noCommentsMessage{
  padding-bottom:0;
}

#top .abuse p{
  padding-top:0;
  width:452px;
}

/* Footer */
#pageContentClosure{
  clear:both;
  float:left;
  width:100%;
}
#pageContentClosure ul li a.print {
  background-image:url("dlr/img/iconViewmodePrint.gif") !important;
}

/* Forms & Tables */
#mainSearchForm {
  margin-top:0;
  background: none repeat scroll 0 0 #F2F2F2
}
#pageColumnRight.mainSearchForm .box {
  margin-bottom: 0px;
}
#mainSearchForm .field, form .buttons {
  border-bottom: none;
}
#top #mainSearchForm .field {
  width: auto;
}
#pageColumnRight .box #playerSearchPage a {
  color: #666666;
  text-decoration: none;
}
#mainSearchForm input[type="checkbox"] {
  margin:0;
}
#mainSearchForm .checkgroup {
  margin-left:8px;
}
#mainSearchForm .checkgroup.settings input,
#mainSearchForm .checkgroup.settings label{
  line-height:1.8em;
  margin-top:.3em !important;
}
#mainSearchForm .checkgroup.settings select{
  margin-left:.5em;
}
#mainSearchForm .field.date strong label {
  margin-right:.7em;
}
#mainSearchForm .field.stations div.station label input{
  margin-right:.25em;
}
#mainSearchForm .field.stations div.station label{
  margin-right:.5em;
}
#top form .field .labelFloat{
  display:inline;
  float:left;
  margin:7px 8px 0 0;
}

#top .fs table {
  margin-left:160px;
  width:464px;
}

#top form .field,
#pageContent table td.description,
#pageContent table td.description h4{
  font-size:1em;
}

#top .contentSchedule p{
  font-size:1em;
}

#top form .field label{
  font-size:10px;
  display:inline;
}

#top .contentList li h2 small{
  font-size:.9167em;
}

#top .borderTop{
  border-top:1px solid #CCCCCC;

}

#top #abc a,
#top #abc,
#top #abc strong{
  line-height:1.4em;
}

p#abc {
  margin-left:2em;
  margin-right:2em;
  text-align:center;
  font-size:1.167em;
}

.spaceLeft {
  clear:both;
  float:left;
  width:120px;
}

.prevPage,
.nextPage{
  width:18px;
  overflow:hidden;
}

.contentNews small.time{
  margin-left:0;
  padding-bottom:4px;
  display:inline-block;
}

#top .contentList li .imgWithText,
#top .imgWithText {
  font-size:12px;
  font-weight:bold;
  margin-top:0;
  padding:0 0 0 8px;
}

#top .text p,
#top .contentArticle li{
  font-size:1em;
}

#top .text .arial_headline,
#top .text strong.arial_headline,
#top .text p.arial_headline{
  font-size:14px;
}

/* Two-column */
.two_col{
  display:block;
  font-size:12px;
  line-height:17px;
  padding-left:160px;
}

.two_col .left{
  float:left;
  margin-right:8px;
  width:212px;
}

.two_col .right {
  float:left;
  margin:0;
  width:212px;
}

/* Audio on Demand-Form */
#top .aodform .omega .grid_2 {
  float:left;
  font-size:10px;
  margin-right:10px;
  width:auto;
}

#top form .field,
#top form .buttons{
  padding:8px 0;
}

/* three columns */
.three_cols {
  border-bottom:1px solid #CCCCCC;
  border-top:1px solid #CCCCCC;
  float:left;
  margin-bottom:28px;
  margin-top:-8px;
  padding:8px 0;
  width:100%;
}

.three_cols div {
  float:left;
  margin-right:10px;
  width:140px;
}

.three_cols .last{
  margin:0;
}
.three_cols .first {
  clear:left;
}

.three_cols .center_img {
  background:none repeat scroll 0 0 #F2F2F2;
  display:block;
  height:160px;
  text-align:center;
  vertical-align:middle;
}

.three_cols .galleryItem .center_img {
  height: auto;
}

.gallery .text .metadata {
  float: left;
  padding-right: 70px;
}

/* News box modifications */
#top .newsTeaser h1.active {
  padding-bottom:11px;
  padding-top:15px;
}

#top .newsTeaser h1.active {
  background-image:url("img/world.gif");
  background-position:center center;
}

#top .newsTeaser h1.activeFollowing .shadow {
  background-image:url("img/shadow.gif");
}

#top .box .footer {
  background-image:url("img/gradient_top.gif");
}
.newsTeaser ol li a {
  font-size:12px;
}


.textBox img {
  display:none;
}

.textBox .tipp {
  padding-top:40px;
}

.textBox .tipp h4 {
  left:8px;
  top:0;
  width:260px;
}

#top .pictureTeaser{
  border-color:#CED4CE0;
  float:left;
}

/* Box Footer */
.footer .links span {
  background:url("img/li.gif") no-repeat scroll 2px 4px transparent;
  display:inline-block;
  height:10px;
  width:8px;
}

.footer .rss {
  background:url("img/rss.gif") no-repeat scroll right top transparent;
  padding-right:14px;
}

#top .box .newsTeaser .footer ul{
  float:left;
  width:auto;
}

#top #startpage .ui-sortable-helper .header {
  background-image:none;
  background-color:#666;
}

.newsBox{
  float:left;
  overflow:hidden;
  width:304px;
}

#top .box .newsBox .tabbed{
  width:105%;
}

.authorList li{
  font-size:12px;
  line-height:17px;
}

h2,
.pageTitle,
h2.pageTitle{
  font-size:18px;
}

.contentArticle .field p{
  font-size:12px;
}

/**
* Press gallery
*/
.gallery .three_cols {
  border-top: none;
  border-bottom: none;
  margin: 0.8em 0 0 0;
}
.gallery .galleryItem .galleryItemDescription{
  font-family:Arial,Helvetica,sans-serif;
  font-size:1.2em;
  margin:0.8em 0;
}
.gallery .galleryItem .galleryItemEnlarge {
  display:block;
  margin-top:0.8em;
}

/**
* Frequency list
*/
.frequencySearchForm {
  margin-top: 0.6em;
  font-weight:bold;
}
.frequencySearchForm p {
  padding-bottom: 0.6em;
}
.frequencySearchForm .labelFloat {
  padding-right: 3px;
}
.frequencySearchForm .button {
  margin: 0.9em 12px 0.8em 0;
}
.frequencySearchForm #zip {
  margin-right: 12px;
}

/**
* Podcasts page
*/
.podcasts h2.podcastsGroupTitle {
  margin-bottom: 0;
  font-size:1.2em;
}
.podcasts .three_cols {
  border-top: none;
  border-bottom: none;
  margin: 0 0;
}

/**
 * Poll
 */
.communityOnePollBox {
  margin-top: 0;
  padding: 0.5em 5px;
  font-size: 1.2em;
}
.communityOnePollBox h3 {
  font-size: 1em;
  margin-bottom: 0.4em;
}
.communityOnePollAnswersListBox {
  list-style-type: none;
}
.communityOnePollAnswersListBox li {
  margin-left: 5px;
}
.communityOnePollAnswersList li span {
  margin-left: 5px;
}
.communityOnePollAnswersList .bar {
  height: 10px;
  width: 50%;
  margin: 0.2em 0 0.5em 0;
}
.communityOnePollAnswersList .bar .barResult {
  height: 10px;
  background-color: #333;
}

/**
 * Newsletter
 */
.newsletterTeaser {
  font-weight: bold;
}
.formNewsletterUnsubscribe .row,
.contentRegistration .row {
  padding: .5em 0;
}
.formNewsletterUnsubscribe .row .label,
.contentRegistration .row .label {
  display: table-cell;
  vertical-align: top;
  padding-left: .5em;
  line-height: 1.4em;
}
.formNewsletterUnsubscribe .row .input,
.contentRegistration .row .input {
  display: table-cell;
  vertical-align: top;
}
.formNewsletterUnsubscribe .row .input input[type=checkbox],
.contentRegistration .row .input input[type=checkbox] {
  margin: 0;
}
.formNewsletterUnsubscribe {
  margin-bottom: 1em;
}
.formNewsletterUnsubscribe .submit {
  margin-top: 1em;
  margin-bottom: 1.33em;
}
.formNewsletterUnsubscribe .row .label {
  vertical-align: middle;
}
.contentRegistration form {
  margin: 1em 0;
}
.contentRegistration .row .label {
  font-weight: bold;
}
.contentRegistration .row .label em {
  display: block;
  margin-top: .3em;
  width: 30em;
  font-style: normal;
  font-weight: normal;
}
/**
 * Contact form
 */
.contentContactFormular .legend {
  margin: 0 8px;
}

/**
 * Frequency list
 */
table.frequency {
  font-size:1em;
}
table.frequency td.description:first-child {
  background-color:#ddd !important;
  font-weight:bold;
}
table.frequency td.description {
  padding:.6667em;
}
table.frequency td {
  border-bottom: 2px solid #fff;
}
table.frequency td.indoor {
  font-size:1.5em !important;
  padding:.295em;
}
.dradioImageSubtitle,
.papayaImageSubtitle,
.contentArticle .image dd,
.contentArticle .largeImage dd,
.contentArticle .lightboxImage dd {
  font-size:.834em;
  line-height: 1.2em;
  margin-top: 0.4em;
}

.contentLoginBox {
  padding:8px;
}
.contentLoginBox form {
  margin: 4px 0 5px 0;
}
.contentLoginBox input {
  display: inline;
}
.contentLoginBox input.input {
  background-image: url("img/searchFieldBg.png");
  background-position: -1px -20px;
  border: 1px solid #999999;
  width: 40%;
  margin-right: 5px;
}
.contentLoginBox button.confirm {
  background: url("img/searchButton.png") repeat scroll 0 0 transparent;
  border: medium none;
  height: 24px;
  margin: -2px 0 0 3px;
  padding: -2px 0 0 0;
  vertical-align: top;
  width: 24px;
}
p.page-switch {
  margin-right:2em;
}

#top .newsTeaserBox {
  background:#fff;
}
#top .newsTeaserBox div.heading {
  float:left;
  width:100%;
  border-bottom:1px solid #777E77;
  background:url("img/gradient_top.gif") repeat-x #e3e3e3;
}
#top .newsTeaserBox div.heading h1 {
  font-size:1.166em;
  line-height:1em;
  padding:.5em 8px;
  text-transform:uppercase;
  margin:0;
}
#top .newsTeaserBox div.heading h1 {
  padding-top:1em;
  padding-bottom:.786em;
}
#top .newsTeaserBox div.heading h1.active {
  float:left;
  background:url("img/world.gif") center center;
  height:1em;
  color:#FFF;
}
#top .newsTeaserBox div.heading h1 a{
  color:#333;
}
#top .newsTeaserBox div.heading h1.active a{
  color:#fff;
  text-decoration:none;
}
#top .newsTeaserBox div.heading h1.activeFollowing a{
  color:#333;
  text-decoration:none;
}
#top .newsTeaserBox div.heading h1 a:hover{
  text-decoration:underline;
}
#top .newsTeaserBox div.heading div.shadow {
  float:left;
  width:1em;
  height:3.25em;
  background-image:url(img/shadow.gif);
  width:10px;
}
#top .newsTeaserBox div.newsTeaserContent {
  background:#fff;
  border-bottom:1px solid #777e77;
  min-height:167px;
}
#top .newsTeaserBox div.newsTeaserContent .newsTeaserItem {
  padding:0 8px;
}
#top .newsTeaserBox div.footer {
  border-top:1px solid #ccc;
}
#top .newsTeaserBox .newsTeaserItem h3 {
  margin-bottom:0;
  line-height:1.3em;
}
#top .newsTeaserBox .newsTeaserItem p {
  margin-top:0;
  line-height:1.3em;
}
#top .newsTeaserBox .newsTeaserItem span.headline {
  font-weight:bold;
}
#top .newsTwoColsWithSymbolBox {
  background:#fff;
}
#top .newsTwoColsWithSymbolBox div.heading {
  float:left;
  width:100%;
  border-bottom:1px solid #777E77;
  background:url("img/gradient_top.gif") repeat-x #e3e3e3;
}
#top .newsTwoColsWithSymbolBox div.heading h1 {
  font-size:1.166em;
  line-height:1em;
  padding: 1em 8px .786em;
  text-transform:uppercase;
  margin:0;
  color:#666;
}
#top .newsTwoColsWithSymbolBox div.heading h1 a{
  color:#666;
}
#top .newsTwoColsWithSymbolBox div.heading h1 a:hover{
  text-decoration:underline;
}
#top .newsTwoColsWithSymbolBox div.newsTeaserPanel {
  min-height:19.3em;
  min-height:235px;
}
#top .newsTwoColsWithSymbolBox div.newsTeaserPanel div.newsTeaserItems {
  background:url('img/continents.jpg') no-repeat;
  margin-left:1em;
}
#top .newsTwoColsWithSymbolBox div.newsTeaserPanel div.newsTeaserItems ul {
  margin-left:13em;
  line-height:1.8em;
  padding-right:1em;
  list-style-image: url('img/bullet.png');
}
#top .newsTwoColsWithSymbolBox div.newsTeaserPanel div.newsTeaserItems ul li a {
  font-weight:normal;
}
#top .newsTwoColsWithSymbolBox div.newsTeaserPanel div.newsTeaserItems ul li a span {
  font-weight:bold;
}
#top .newsTwoColsWithSymbolBox div.footer {
  border-bottom:1px solid #878787;
  padding:.2em .5em 1.4em;
}
#top .newsTwoColsWithSymbolBox div.footer ul {
  list-style-type:none;
  margin:0;
  height:1em;
  float:none;
}
#top .newsTwoColsWithSymbolBox div.footer ul li.rss {
  float:left;
  margin:0 4.7em 0 0;
  font-weight:bold;
  background:url(img/rss.gif) right center no-repeat;
  padding:3px 13px 0 0;
}

#top .newsTwoColsWithSymbolBox div.footer ul li.furtherNews {
  float:right;
  font-weight:bold;
  color:#666;
  padding-top:3px;
  background-image:none;
}
#top .newsTwoColsWithSymbolBox div.footer ul li.furtherNews a {
  color:#333;
}

.topicOfTheDayTeaser h1 {
  cursor: default;
}
.topicOfTheDayTeaser .panel {
  border-bottom:1px solid #777E77 !important;
}
#pageContentMain .textBlockBottom,
#pageContentMain .textBlockTop {
  padding:0 .667em .667em;
  line-height:1.4em;
}
#pageContentMain .textBlockBottom {
  border-top: 0.1em solid #ccc;
}
#pageContentMain .nextBroadcast {
  padding:.667em;
  line-height:1.4em;
  border-bottom:.1em solid #ccc;
  border-top:.1em solid #ccc;
}
#pageColumnRight .richtextBox,
#pageContentMain .richtextBox,
#startpage .richtextBox {
  font-size:1em !important;
  padding-bottom:.667em !important;
  border-bottom:.1em solid #ccc !important;
  line-height:1.416em;
}
#pageColumnRight .richtextBox audio,
#startpage .richtextBox audio {
  width:280px;
  display:block;
}
/* recommendation form */
.recommendationForm {
  border-top:1px solid #ccc;
  margin-top:2em;
}
.recommendationForm h2 {
  font-size:1.167em;
}
.recommendationForm form .field input.text {
  width:384px;
  border:1px solid #ccc;
}
.recommendationForm form .field textarea {
  border:1px solid #ccc;
}
.recommendationForm form .buttons input[type=submit] {
  border:1px solid #ccc;
  margin-top:.7em;
  background:white;
}
.contentArticle .fullArticleLink {
  margin:1.25em 0;
}

.contentArticle div.weather {
  padding-left:20px;
  padding-right:20px;
}

.contentArticle div.weather .weatherImage {
  max-width:584px;
}

.font-weight-normal {
  font-weight: normal !important;
}

#radionight {
  border-top: 0.1em solid #ccc;
}

#radionight a {
  text-decoration:none;
}

#radionight a:hover {
  text-decoration:underline;
}

.contentHeader .radionight {
  padding:0 .667em .667em 0;
}
.contentHeader .radionight .broadcast h3{
  margin-bottom:0;
}
.contentHeader .radionight .broadcast p{
  margin-top:0;
}
.contentHeader .radionight .broadcast{
  width:149px;
  float:left;
}

.latestPressReview {
  padding:0 .75em .75em;
}
.latestPressReview h3 {
  font-size:1.1em;
  line-height:1.25;
  margin-bottom:.333em;
  margin-top:.9em;
}
.latestPressReview h3 small {
  display:block;
  text-transform:uppercase;
  font-size:.9em;
  color:#666;
}
.latestPressReview p {
  line-height:1.3em;
  margin:0;
}

.box .richtextWithImage .image {
  margin-bottom:.5em;
}
.box .richtextWithImage .text {
  padding:0 .75em .3em;
  line-height:1.3em;
  border-bottom:1px solid #ccc;
}
.box .richtextWithImage .text p {
  margin:0;
  margin-bottom:.45em;
}

sub, sup {
  font-size: 80%;
}

sub {
    vertical-align: sub;
}
sup {
    vertical-align: super;
}

/* Adding file: dlr.sidebar.css */

.linkBox ol {
  margin: 0;
  padding: 0;
  list-style-image: none;
  list-style-position: outside;
  list-style-type: none;
  width: 304px;
}
.linkBox ol li {
  margin: 0;
  border-bottom: 1px solid #ced4ce;
}
.linkBox ol li.last {
  border-bottom: none;
}
.linkBox ol li a {
  font-size: 12px;
  font-weight: bold;
  color: #000;
  line-height: 1.2727em;
  display: block;
  padding: 4px 8px;
}
.linkBox ol li a.focus {
  color:#666;
}

.linkBoxInline {
  border-bottom: 1px solid #ced4ce;
}
.linkBoxInline ol {
  margin: 0;
  padding: 0;
  list-style-image: none;
  list-style-position: outside;
  list-style-type: none;
  display: inline;
  border-bottom: none;
}
.linkBoxInline ol li {
  margin: 0;
  display: inline;
}
.linkBoxInline ol li.last {
  border-bottom: none;
}
.linkBoxInline ol li a {
  font-size: 12px;
  font-weight: bold;
  color: #888;
  line-height: 1.2727em;
  padding: 4px 8px;
}
.linkBoxInline ol li a.active {
  font-size: 12px;
  font-weight: bold;
  color: #000;
  line-height: 1.2727em;
  padding: 4px 8px;
}


/* further hanges (no review yet) */

/* New background for boxes */
#pageColumnRight .box .header,
#pageColumnRight .box .footer{
  background-image:url("dlr/img/h1_gradient.gif");
  background-position:left bottom;
  background-color:#fff;
  clear:both;
}
#pageColumnRight .box .footer.hasSocialMediaIcons ul{
  width:194px !important;
}
#pageColumnRight .box .footer.hasSocialMediaIcons ul li{
  background-image:none !important;
  padding-left:4px;
}
#pageColumnRight .box .footer.hasSocialMediaIcons ul li a{
  font-size:1.1em;
}
#pageColumnRight .box .footer.hasSocialMediaIcons ul.downloadLink{
  width:13px !important;
}
#pageColumnRight .box .footer.hasSocialMediaIcons ul.socMed{
  width:auto !important;
  float:right;
  height:16px;
  padding-right:2px;
  padding-left:0;
}
#pageColumnRight .box .footer.hasSocialMediaIcons ul.socMed li{
  background:none;
  padding:0;
  margin:4px 6px 0 0;
}
#pageColumnRight .box .footer.hasSocialMediaIcons ul.socMed li a{
  display:inline-block;
  width:16px;
  height:16px;
  text-decoration:none;
}
#pageColumnRight .box .footer.hasSocialMediaIcons ul.socMed li.download {
  margin-right:10px;
  padding-left:0;
}
#pageColumnRight .box .footer.hasSocialMediaIcons ul.socMed li.download a{
  background-image:url('../../themes/dradio/img/audioplayer/dlr/download.png');
  background-position:left;
  background-repeat:no-repeat;
}
#pageColumnRight .box .footer.hasSocialMediaIcons ul.socMed li.facebook a{
  background-image:url('../../themes/dradio/img/social-networks/16x16/facebook_grey.png');
}
#pageColumnRight .box .footer.hasSocialMediaIcons ul.socMed li.twitter a{
  background-image:url('../../themes/dradio/img/social-networks/16x16/twitter_grey.png');
}
#pageColumnRight .box .footer.hasSocialMediaIcons ul.socMed li.googleplus a{
  background-image:url('../../themes/dradio/img/social-networks/16x16/gplus_grey.png');
}
/* Picture / Text Teaser */
.pictureTeaserList,
.textTeaserList{
  border-bottom:1px solid #ccc;
  float:left;
  width:100%;
}

#pageColumnRight .pictureTeaser,
#pageColumnRight .textTeaser{
  padding:4px 0 8px 0;
}

#top #pageColumnRight .last{
  border:none;
}

.box .footer ul{
  float:left;
}

.box .footer{
  border-color:#ccc;
}

#top .newsTeaser_2 h1.active{
  /* background-image:url("img/verlauf.gif"); */
  background-position:left top;
  padding-bottom:11px;
  padding-top:15px;
  width:auto;
  cursor:pointer;
  float:left;
  overflow:hidden;
  position:relative;
}

#top .newsTeaser h1,
#top .newsTeaser .tabbed{
  background-image:url("dlr/img/h1_gradient.gif");
  background-position:0 -11px;
}

#top .newsTeaser .tabbed{
  float:left;
  width:100%;
}

.newsTeaser .tabbed h1{
  width:auto;
  padding-bottom:10px;
  padding-top:3px;
}

/* Audiotipp Box */
/*
.tipp {
  padding-top:90px;
  position:relative;
}

.tipp{
  float:left;
  width:304px;
}

.tipp img {
  float:left;
  margin:1px 12px 4px 0;
}

.tipp p a {
  font-family:Arial, Helvetica, sans-serif;
  font-size:12px;
}

.tipp .hl {
  position:absolute;
  top:-1px;
  left:0;
}

.tipp h4 strong {
  color:#666666;
  font-size:12px;
  text-transform:uppercase;
  margin-top:48px;
}

.tipp h4 {
  bottom:-10px;
  color:#000000;
  font-size:16px;
  line-height:18px;
  left:152px;
  position:absolute;
  width:95%;
}

#top .tipp p{
  font-size:12px;
  line-height:17px;
  margin:8px 8px -4px 8px;
}
*/

/* Link-Portlet */
#top .linkPortlet li{
  padding:0;
}

#top .linkPortlet li a{
  font-size:12px;
  font-weight:bold;
  padding:4px 8px;
}

#top .linkPortlet li .active {
  background:#666666;
  color:#FFFFFF;
  text-decoration:none;
}

#top #pageColumnRight .linkPortlet h1{
  padding:4px 8px 8px 8px;
}

.newsTeaser ol li a:visited{
  color:#000;
}

/* Calendar*/
.calendar td a.active, .calendar td span.active{
  background:#ccc;
}

/* only-Text-Box */
#top .textOnly {
  padding:0 0 12px;
  width:304px;
}

#top .textOnly .panel p{
  color:#666666;
  font-size:12px;
  line-height:15px;
  margin:0 8px;
  padding:12px 0 0;
}

/* OnAir Box */
#startpage .currentBroadcasts h2.header {
  color:#666;
}
#startpage .currentBroadcast,
#pageColumnRight .currentBroadcast {
  border-bottom: 1px solid #ccc;
  width:100%;
}
#startpage .currentBroadcast.last,
#pageColumnRight .currentBroadcast.last {
  border-bottom:0;
}
#startpage .currentBroadcast div,
#pageColumnRight .currentBroadcast div {
  padding: 4px 0 8px;
  margin-left:8px;
}
#startpage .currentBroadcast div p,
#pageColumnRight .currentBroadcast div p {
  margin:0;
  padding:4px 0 0;
  color:#666;
  font-weight:bold;
  
}
#startpage .currentBroadcast span.nolink,
#pageColumnRight .currentBroadcast span.nolink {
  color:#000;
  font-weight:bold;
}
#startpage .currentBroadcasts .footer,
#pageColumnRight .currentBroadcasts .footer {
  text-align:left;
  padding:0 8px;
}
#startpage .currentBroadcasts .footer a,
#pageColumnRight .currentBroadcasts .footer a {
  color:#333;
}
/* Adding file: dlr.listPage.css */
/* Changes e.g. for audio archive page */
.contentList li h3.audio {
  margin:0;
}
.contentList li .audioDetails dt {
  font-weight:bold;
}
.contentList li .audioDetails dd {
  font-weight:normal;
}
.contentList2 .text h2 .audio  a .audioIcon{
  background-image: url(dlr/img/iconAudioSmall.gif);
  background-repeat: no-repeat;
  background-position: center 2px;
  padding-right: 16px;
}
.contentList h3 .audio a.drw .audioIcon {
  background-image: url("img/iconAudioSmall.gif");
}
.contentList h3 .audio a.dlf .audioIcon {
  background-image: url("dlf/img/iconAudioSmall.gif");
}
.contentList h3 .audio a.drk .audioIcon {
  background-image: url("drk/img/iconAudioSmall.gif");
}
.contentList h3 .audio a .audioIcon {
  background-image: url("dlr/img/iconAudioSmall.gif");
}
/* further content list changes (no review yet) */
#pageContent h1{
  background-image:url("dlr/img/gradient.gif");
  background-position:left bottom;
}

.contentList li ul.articleLinks li .comments,
.contentList li ul.articleLinks li .similarArticles,
.contentList li ul.audioLinks li a {
  background-image:url("dlr/img/iconComment.gif");
  background-position:0 1px;
}
.contentList li ul.articleLinks li .similar {
  background-image:url("dlr/img/iconSimilar.gif");
  background-position:0 2px;
}
.contentList li ul.audioLinks li a {
  background-image: url("dlr/img/iconAudioSmall.gif");
}

.contentList li.last .text {
  padding-bottom: 0px;
}

.paging li a, .paging li span{
  background-image:url("dlr/img/boxButtons.png") !important;
}

#pageContentClosure ul li a.recommend {
  background-image:url("dlr/img/iconRecommend.gif");
}

.textTeaser .body{
  padding-top:4px;
}
.textTeaser .footer{
  font-size:9px;
}
.textTeaser .pictureTeaser p{
  padding:4px 0 0 0;
  margin:0 8px;
  color:#666666;
}
.textTeaser .pictureTeaser p span{
  color:#000;
}
.pictureTeaserList{
  border-bottom:none;
}
.textTeaser .last{
  border:none !important;
}

#pageColumnRight .box .footer ul{
  width:288px !important;
  font-size:12px;
}
#pageSubHeader .mainNavigation .sub  .subactive strong{
  background:#666;
  color:#fff;
  padding:2px 8px;
  margin:0 8px 0 -8px;
}
#pageSubHeader .mainNavigation .sub  .subactive:hover{
  text-decoration:none;
}

.contentList li .imgWithText,
.imgWithText{
  margin-top:0 !important;
  padding:0 0 0 8px !important;
  font-weight:bold;
}
.audio .title .dlf{
  font-size:1em !important;
}
.header{
  font-size:14px !important;
}
form .buttons{
  background:#f1f5f5;

}
.field{
  width:100%;
  float:left;
  background:#f1f5f5;
}
.contentCurrentBroadcasts .contentList h2 span {
  font-size:1.167em;
}
.contentCurrentBroadcasts .contentList h2 span.title a {
  text-decoration:underline !important;
}
.contentCurrentBroadcasts .contentList li.broadcast div.description{
  margin-top:.3em;
}
/* Adding file: dlr.detailPage.css */
/* set color in page title e.g. for traffic news page */
#pageContent h2.pageTitle{
  color:#666;
}

/* further hanges (no review yet) */

.contentArticle h2 .audio a{
  background-image:url("dlr/img/audio.gif");
  color:#666;
}
.image dt a{
  position:relative;
}
.image dt a span{
  position:absolute;
  bottom:8px;
  right:8px;
  height:16px;
  width:16px;
  background:url("dlr/img/zoom.png") no-repeat bottom right;
}
.image dt .video span{
  background-image:url("dlr/img/play.png");
}
/* Adding file: dlr.css */
/**
* Overwrite font definitions
*/
body {
  font-family: Arial,Helvetica,sans-serif;
}

/* further hanges (no review yet) */
#top .field{
  background:#F2F2F2;
  float:left;
  width:100%;
}
#top form .field, #pageContent table td.description{
  background:#F2F2F2;
}
#pageHeader .grid_3 a{
  color:#000;
}
#pageHeader .grid_4 a{
  color:#333;
}
h2 .title a,
.contentArticle h2,
#pageContentFooter h3 a{
  color:#333;
}

/* Navigation */
#top .subRessorts .sub a{
  width:112px;
}
#top .subService .sub a{
  width:176px;
}
#top .subRessorts .sub li .naviLong{
  white-space:nowrap;
}

/**
* Sitemap colors
*/
.contentSiteMap ul li li {
  border-left: 1px solid #666;
  background-image: url(img/dlrSitemapBorder.gif);
}
.contentSiteMap ul li a {
  border: 1px solid #666;
  font-weight: bold;
}
.contentSiteMap ul li a:hover {
  background-color: #666;
}

.quoteblock {
  color:#666;
}

/**
 * Styles for comment box
 *
 * @section comments
 */
.comments h2 {
  color: #666;
}

.comments .contentListHead a:visited,
.comments .abuse a:visited {
  color: #666;
}

/**
 * Comment Form
 *
 * @section comments
 * @subsection form
 */
.commentForm h2 {
  color: #666;
}

a.linkAudio {
  background:url("../../themes/dradio/dlr/img/iconAudioSmall.gif") no-repeat scroll right 1px transparent;
  padding:0 15px 0 0;
}
/* scrollable */
.scrollable {
  position:relative;
  overflow:hidden;
  width:944px;
  height:500px;
  display:block;
}
.scrollable .items {
  position:absolute;
  width:20000em;
}
.scrollable .items div.page {
  float:left;
  width:944px;
}
.themeOfTheDay .scrnav {
  height:40px;
}

/* slider */
.scrollable {
  position:relative;
  overflow:hidden;
  width:944px;
  height:430px;
  display:block;
}
.scrollable .items {
  position:absolute;
  width:20000em;
}
.scrollable .items div.page {
  float:left;
  width:945px;
}
.themeOfTheDay .footer {
  border-top:1px solid #ccc;
  background-image:url('img/gradient_top.gif');
  background-position:0 30px;
}

.topicOfTheDayTeaser .scrnav,
.themeOfTheDay .scrnav {
  height:2em;
}
.topicOfTheDayTeaser .scrnav a.browse,
.themeOfTheDay .scrnav a.browse{
  height:10px;
  cursor:pointer;
  display:block;
  margin-top:3px;
  text-decoration:none;
}
.topicOfTheDayTeaser .scrnav .right,
.themeOfTheDay .scrnav .right{
  float:right;
  padding:0px 15px 0 0;
  margin-right:7px;
  background:url('img/sliderBoxButtons.png') 100% -10px no-repeat;
  height:10px;
}
.topicOfTheDayTeaser .scrnav .left,
.themeOfTheDay .scrnav .left{
  float:left;
  padding:0px 0 0 15px;
  margin-left:7px;
  background:url('img/sliderBoxButtons.png') 0 0 no-repeat;
  height:10px;
}
.topicOfTheDayTeaser .scrnav a.left.disabled,
.themeOfTheDay .scrnav a.left.disabled{
  background-position: 0% -20px;
  cursor:default;
  color:#ccc;
}
.topicOfTheDayTeaser .scrnav a.right.disabled,
.themeOfTheDay .scrnav a.right.disabled{
  background-position:100% -30px;
  cursor:default;
  color:#ccc;
}
.topicOfTheDayTeaser .navi,
.themeOfTheDay .navi {
  margin-left:auto;
  margin-right:auto;
  width:12em;
  text-align:center;
  height:0;
}
.topicOfTheDayTeaser .navi a, 
.themeOfTheDay .navi a { 
  display:block;
  width:8px;
  height:8px;
  float:left;
  margin:5px 4px 4px 4px;
  font-size:1px;
  background:url('img/nav_buttons.png') 0 0 no-repeat;
}
.topicOfTheDayTeaser .navi a:hover, .topicOfTheDayTeaser .navi a.active,
.themeOfTheDay .navi a:hover, .themeOfTheDay .navi a.active {
  background-position:0 -8px;
}
.topicOfTheDayTeaser .topicOfTheDayFooter,
.themeOfTheDay .footer {
  padding-top:.3em;
}
.topicOfTheDayTeaser .body .topBorder,
.themeOfTheDay .body .topBorder {
  z-index:1;
}
.topicOfTheDayTeaser h1,
.themeOfTheDay h1 {
  z-index:1;
}
.scrollableNews {
  position:relative;
  overflow:hidden;
  width:304px;
  display:block;
}
.scrollableNews .items {
  position:absolute;
  width:20000em;
}
.scrollableNews .items div.page {
  float:left;
  width:304px;
}
.scrollableNews .newsTeaserContent {
  height:191px;
}
.scrollableNews .newsTeaserItem {
  height:190px;
  overflow:auto;
}
.scrollableNews li.next {
  float:left;
  margin-left:0px;
  margin-top:3px;
  background:url(img/sliderBoxButtons.png) 0 -10px;
  width:10px;
  height:10px;
}
.scrollableNews li.prev {
  float:left;
  margin-top:3px;
  background:url(img/sliderBoxButtons.png) 0 0px;
  width:10px;
  height:10px;
}
.scrollableNews li.next.disabled {
  background-position: 0 -30px;
}
.scrollableNews li.prev.disabled {
  background-position: 0 -20px;
}
.scrollableNews .pictureTeaser {
  height:190px;
  overflow:auto;
}
.scrollableNews .browse {
  cursor:pointer;
}

.box .richtextWithImage .image {
  margin-bottom:.5em;
}
.box .richtextWithImage .text {
  padding:0 .75em .3em;
  line-height:1.3em;
  border-bottom:1px solid #ccc;
}
.box .richtextWithImage .text p {
  margin:0;
  margin-bottom:.45em;
}
#breakingNews {
  background-color:#aa0000;
  padding:.5em 1em .3em;
  margin-bottom:1.6em;
}

#breakingNews h2 {
  margin:0;
  padding:0;
  float:left;
  color:#fff;
  font-size:1.15em;
  text-transform:uppercase;
  line-height:1.2em;
}

#breakingNews p {
  margin:0 0 0 7.5em;
  line-height:1.2em;
  color:#fff;
  font-weight:bold;
  font-size:1.15em;
}

