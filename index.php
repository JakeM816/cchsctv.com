<?php
/*
///##### STOP! #####\\\
DO NOT EDIT THIS FILE DIRECTLY
This file is mamanged by GIT
Contribute at https://github.com/cchsctv/cchsctv.com/
*/
$page_title = "Home";
require 'header.php';
?>
<style type="text/css">
p.style{
	margin:0px;
	letter-spacing:1px;
}
p.large{
  line-height: normal;
  font-size: .9em;
  padding: 2%;
	letter-spacing:1px;
	font-weight:bold;
	text-shadow: 2px 2px 2px #000000;
  position: absolute;
  text-align: center;
  bottom: -1em;
  background-color:rgba(0, 0, 0, 0.6);
}
p.oname{
	font-size: 1em;
	color:white;
	margin:0px;
	margin-top:8px;
	letter-spacing:1px;
	text-align:center;
}
p.oposition{
	font-size: .75em;
	color:#c30e0e;
	margin:0px;
	letter-spacing:1px;
	font-weight:bold;
	text-transform: uppercase;
	text-align:center;
}
table{width:100%}
.bar {
  width:100%;
  background-position: center top;
  background-size:cover;
  border:solid black;
  border-width: 10px 0;
}
p.bar {
	text-align: center;
  border:none;
  vertical-align: middle;
  font-size: 1.3em;
}
.inner {
  width: calc(100% - 10px);
}
.embed-box {
  background-color:#292F33;
  line-height: 0;
}
img {
  max-width: 100%;
  height: auto;
}
iframe {
  width: 100%;
  max-width: none !important;
}
.column{
  width: 50%;
  height: 27em;
  box-sizing: border-box;
}
.column.right{
	float:right;
	border-left: 5px solid black;
}
.column.left {
	border-right: 5px solid black;
}
.column iframe{
  height: 27em !important;
	overflow-y: scroll; /* has to be scroll, not auto */
	-webkit-overflow-scrolling: touch;
}
.blog-description{
  min-height: 2.6em;
}
@media only screen and (max-width: 720px) {
  .topnav a:not(:nth-child(1)) {
    display: none;
  }
  .topnav a:nth-child(1) {
    display: inherit;
  }
  .bar{
    width: calc(100% + 20px);
    transform: translateX(-10px);
  }
  p.bar {
    width: calc(100% - 20px);
    transform: translateX(10px);
  }
  .topnav a:first-child {display: block !important;}
}
@media only screen and (max-width: 540px){
  .column{
    width: 100%;
    float: none !important;
  }
	.column.left {
		border: none;
		border-top: 10px solid black;
	}
	.column.right {
		border: none;
	}
	.column.autoheight {height: auto;}
  p.large {
    font-size: .8em;
    background-color: black;
    background-color:#292F33;
    position: relative;
    margin: 0;
    bottom: 0;
  }
}
</style>

<?php
require 'topnav.php';
?>

<div style="background-color:#000000; position:relative; line-height:0;">
  <img src="ctv_images/homeimg16-8.jpg" style="border:5px; position:relative; width: 100%;" data-rjs="1">
  <div style="text-align:right; padding-top:10px; z-index:100; position:absolute; width: 99%; top:0px; line-height:normal;">
    <a href="https://twitter.com/cchsctv" class="twitter-follow-button" data-show-count="false">Follow @cchsctv</a>
    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script><br>
    <div class="fb-like" data-href="https://facebook.com/cchsctv" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
      <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=222805151086135";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      </script>
  </div>
  <!--
  <div>
      <p class="large" align="center">CTV is one of America's leading high school television production programs. Based at Cooper City High School in Cooper City, Florida, we create content for CCHS students, the South Florida community, and beyond.
      </p>
  </div>
  -->
</div>


<!-- TO CHANGE RED BAR, REPLACE THIS CODE WITH THE BELOW CODE-->
  <div class="bar" style="background-image:url(ctv_images/barblank.png);" data-rjs="2"><table><tr><td><p class="bar">
    <a href="video.php?autoplay=true">Watch This Week's Episode</a>
  </p></td></tr></table></div>

<!-- TO CHANGE RED BAR, USE THIS CODE
<div class="bar" style="background-image:url(ctv_images/barblank.png);" data-rjs="2"><table><tr><td><p class="bar">
  <a href="https://blog.cchsctv.com">STN BLOG - Follow CTV's progress at STN Nationals in Los Angeles</a>
</p></td></tr></table></div> -->

<div class="column right autoheight" style="background-color:black;padding:.5em;
  display: flex;
  justify-content: center;
  flex-direction: column;">
<p style="text-align:center;font-size:1.25em;margin:0;">
<b>CTV</b>, or Cowboy Television, is one of America’s leading high school television production programs. Located at Cooper City High School in Cooper City, Florida, we aim to broadcast our school’s news with journalistic integrity and professionalism. Through news, sports and entertainment segments, our program fosters creativity while producing content for CCHS students, the Cooper City community and beyond.
</p>
</div>

<!--<div style="width:380px; height:400px; background-color:#000000; float:left; border:5px solid white; border-top:0px; border-right:0px; background-image:url(ctv_images/officerbg.jpg); background-position:right;">-->
<div class="column left" style="background-color:#c30e0e;background-image:url(ctv_images/officerbg.jpg); background-position:center;background-size:cover">
<p class="oname" style="font-weight:bold; padding:10px 0; text-align:center; color:#c30e0e;margin:0">2016-2017 CTV OFFICERS</p>
<p class="oname">Lian Chung-Valuntas</p></td>
<p class="oposition">PRESIDENT</p></td>
<p class="oname">Lexi Delgado</p></td>
<p class="oposition">Vice President</p></td>
<p class="oname">Isabella Tocci</p></td>
<p class="oposition">Asst Vice President</p></td>
<p class="oname">Casey Chapter</p></td>
<p class="oposition">Secretary</p></td>
<p class="oname">Felipe Lopez</p></td>
<p class="oposition">Treasurer</p></td>
<p class="oname">Samantha Towle</p></td>
<p class="oposition">Historian</p></td>
<p class="oname">Harris Ness</p></td>
<p class="oposition">Business Manager</p></td>
<p class="oname">Jakob Wolk</p></td>
<p class="oposition">Equipment Manager</p></td>
<p class="oname">Jason Chua</p></td>
<p class="oposition">Senior Ops Manager</p></td>
<p class="style" style="padding:10px; text-align:center; font-size:.6em;"><a href="cast.html">View our full cast &raquo;</a></p>
</div>

<!-- ScoreStream Bar -->
<div class="embed-box bar" style="overflow:hidden; position:relative;padding:0">
  <iframe src="https://scorestream.com/widgets/scoreboards/horz?userWidgetId=12704" style="max-width:690px; height:100px" title="Realtime sports scoreboard widget" scrolling="no" frameBorder="0"></iframe>
</div>

<!-- Twitter Embed-->
<div class="twitter embed-box column right" style="overflow:hidden; position:relative;">
    <a class="twitter-timeline" data-height="405" data-dnt="true" data-theme="dark" href="https://twitter.com/cchsctv">Tweets by cchsctv</a>
    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>



<!-- Lariat Embed -->
<div class="embed-box column left" style="overflow:hidden;padding:0;position:relative;display:flex;flex-direction:column;text-align:left;">

	<iframe src="lariat_forwarder.php" style="border:none;"></iframe>

	<!--
  <a class="wordpress-timeline" href="https://thelariatonline.com" lang="en" data-theme="dark" data-link-color="#aaaaff" height="510.2" style="z-index: 0"></a>
  <script type="text/javascript" src="https://widgets.wp.com/platform.js"></script>
	 -->
</div>


<!--
<center  style="line-height:0;width:100%"><img src="ctv_images/lower-banner.jpg" alt="" usemap="imgmap20155214647" data-rjs="2">
  <map id="imgmap20155214647" name="imgmap20155214647">
    <area shape="rect" alt="Cooper City High" title="" coords="88,49,195,71" href="http://www.coopercityhigh.net" target="_blank" />
    <area shape="rect" alt="Broward County Public Schools" title="" coords="322,50,432,72" href="http://www.browardschools.com" target="_blank" />
    <area shape="rect" alt="Cooper City, Florida" title="" coords="564,49,660,70" href="http://www.coopercityfl.org" target="_blank" />
  </map></center>
-->


<?php require 'footer.php' ?>
