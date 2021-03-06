<?php
/*
///##### STOP! #####\\\
DO NOT EDIT THIS FILE DIRECTLY
This file is mamanged by GIT
Contribute at https://github.com/cchsctv/cchsctv.com/
*/
$page_title = "Cast";
require 'header.php';


?>
<style type="text/css">
p.style{
	font-family: HelveticaNeue-Light, Helvetica, Arial, sans-serif;
	font-size: 1.2em;
	color:white;
	margin:0px;
	letter-spacing:1px;
}
p.head{
	font-family: HelveticaNeue-Light, Helvetica, Arial, sans-serif;
	font-size: 1.5em;
	color:white;
	margin:8px 0;
	font-weight: bold;
	letter-spacing:2px;
  width:100%;
}
.name {
  position:absolute;
  background-color:rgba(0, 0, 0, 0.8);
  transform:translateY(calc(-.9em - 50%));
  transform:translateY(-100%);
}
.name p{
	font-family: HelveticaNeue-Light, Helvetica, Arial, sans-serif;
	font-size: .9em;
	color:white;
	margin:5px;
	font-weight: bold;
	text-shadow: -2px 2px #000000;
  text-align:left;
}
.director {
  position:absolute;
  transform:translateY(calc(-0.15em - 200%));
  background-color:rgba(195, 14, 14, 0.8);
}
p.sub{
	font-family: HelveticaNeue-Light, Helvetica, Arial, sans-serif;
	font-size: .75em;
	color:white;
	margin:5px;
  font-weight: bold;
	letter-spacing:1px;
	background-color:rgba(195, 14, 14, 0.8); /*REMOVE THIS*/
}
p.pichardo{
	font-family: HelveticaNeue-Light, Helvetica, Arial, sans-serif;
	font-size: .9em;
	color:black;
	margin:5px;
	line-height:150%;
	letter-spacing:1px;
}
.bardivider {
  width: 100%;
  background-color: #c30e0e;
  float:left;
  text-align:center;
  border: solid black;
	border-width: 0;
  margin-top: 5px;
}
.officer_container {
  width: calc(calc(calc(100% - 5px) * 0.3333) - 5px);
  border:5px solid #383838;
  border-right:none;
  border-bottom:none;
  background-color:black;
  height: auto;
  float: left;
  justify-content: space-between;
}
.officer_container img {
  width: 100%;
  height: auto;
  vertical-align: middle;
}
.officer_inner {
  background-color:#c30e0e;
  height: auto;
  float: left;
  justify-content: space-between;
}
.staff_container {
  width: calc(calc(calc(100% - 5px) * 0.25) - 5px);
  border:5px solid #383838;
  border-right:none;
  border-bottom:none;
  height: auto;
  float: left;
  justify-content: space-between;
}
.staff_container img {
  width: 100%;
  height: auto;
  vertical-align: middle;
}
.chardo_bio {
  width: calc(calc(calc(100% - 5px) * 0.5) - 5px);
  width: calc(100% - 10px);
  width: 100%;
  background-color:#505050;
  float:left;
  text-align:center;
  background-color:black;
  padding-top: 10px;
}
@media only screen and (max-width: 720px) {
  .topnav a:not(:nth-child(3)) {
    display: none;
  }
  .topnav a:nth-child(3) {
    display: inherit;
  }
  .bardivider{
    width: calc(100% + 20px);
    transform: translateX(-10px);
		border-width: 10px 0;
  }
}
@media only screen and (max-width: 680px) {
  .officer_container {
    width: calc(calc(calc(100% - 5px) * 0.5) - 5px);
  }
  .staff_container {
    width: calc(calc(calc(100% - 5px) * 0.33) - 5px);
  }
}
@media only screen and (max-width: 580px) {
  .staff_container {
    width: calc(calc(calc(100% - 5px) * 0.5) - 5px);
  }
}
@media only screen and (max-width: 400px) {
  .officer_container {
    width: calc(100% - 10px);
  }
  .staff_container {
    width: calc(100% - 10px);
  }
}
}
</style>
<?php
include 'topnav.php';
?>
<!-- PAGE BEGIN-->

<div style="clear:both"></div>

<div class="bardivider" style="margin:0;border-top:none"><p class="head">2017-2018 OFFICERS</p></div>

<!-- BEGIN OFFICERS -->
<!-- OFFICER PICTURES MUST HAVE 230x170 ASPECT RATIO -->
<div class="officer_container">
  <img src="ctv_images/staff/lianchung.jpg" data-rjs="2">
    <div class="name">
  <p>Casey Chapter</p>
    </div>
  <div style="position:relative;">
  <p class="sub" style="position:relative; text-align:left;">President</p>
</div>
</div>
<div class="officer_container">
  <img src="ctv_images/staff/lexidelgado.jpg" data-rjs="2">
    <div class="name">
  <p>Ashton Bosse</p>
    </div>
  <div style="position:relative;">
  <p class="sub" style="position:relative; text-align:left;">Vice President</p>
</div>
</div>
<div class="officer_container">
  <img src="ctv_images/staff/isytocci.jpg" data-rjs="2">
    <div class="name">
  <p>Jakob Wolk</p>
    </div>
  <div style="position:relative;">
  <p class="sub" style="position:relative; text-align:left;">Asst. Vice President</p>
</div>
</div>
<div class="officer_container">
  <img src="ctv_images/staff/caseychapter.jpg" data-rjs="2">
    <div class="name">
  <p>Casey Chapter</p>
    </div>
  <div style="position:relative;">
  <p class="sub" style="position:relative; text-align:left;">Secretary</p>
</div>
</div>
<div class="officer_container">
  <img src="ctv_images/staff/felipelopez.jpg" data-rjs="2">
    <div class="name">
  <p>Felipe Lopez</p>
    </div>
  <div style="position:relative;">
  <p class="sub" style="position:relative; text-align:left;">Treasurer</p>
</div>
</div>
<div class="officer_container">
  <img src="ctv_images/staff/samanthatowle.jpg" data-rjs="2">
    <div class="name">
  <p>Samantha Towle</p>
    </div>
  <div style="position:relative;">
  <p class="sub" style="position:relative; text-align:left;">Historian</p>
</div>
</div>
<div class="officer_container">
  <img src="ctv_images/staff/harrisness.jpg" data-rjs="2">
    <div class="name">
  <p>Harris Ness</p>
    </div>
  <div style="position:relative;">
  <p class="sub" style="position:relative; text-align:left;">Bussiness Manager</p>
</div>
</div>
<div class="officer_container">
  <img src="ctv_images/staff/jakobwolk.jpg" data-rjs="2">
    <div class="name">
  <p>Jakob Wolk</p>
    </div>
  <div style="position:relative;">
  <p class="sub" style="position:relative; text-align:left;">Equipment Manager</p>
</div>
</div>
<div class="officer_container">
  <img src="ctv_images/staff/jasonchua.jpg" data-rjs="2">
    <div class="name">
  <p>Jason Chua</p>
    </div>
  <div style="position:relative;">
  <p class="sub" style="position:relative; text-align:left;">Senior Operations Manager</p>
</div>
</div>

<!-- END OFFICERS -->

<div class="bardivider"><p class="head">2016-2017 STAFF</p></div>

<!-- BEGIN STAFF -->
<!-- STAFF PICTURES MUST HAVE SQUARE (170x170) ASPECT RATIO -->
<div class="staff_container">
  <img src="ctv_images/staff/kiarabencosme.jpg" data-rjs="2">
  <div class="name">
  <p>Kiara Bencosme</p></div>
</div>
<div class="staff_container">
  <img src="ctv_images/staff/ashtonbosse.jpg" data-rjs="2">
  <div class="name">
  <p>Ashton Bosse</p></div>
</div>
<div class="staff_container">
  <img src="ctv_images/staff/markbrent.jpg" data-rjs="2">
  <div class="name">
  <p>Mark Brent</p></div>
</div>
<div class="staff_container">
  <img src="ctv_images/staff/gabrielacarbone.jpg" data-rjs="2">
  <div class="name">
  <p>Gabriela Carbone</p></div>
</div>
<div class="staff_container">
  <img src="ctv_images/staff/emilyehrlich.jpg" data-rjs="2">
  <div class="name">
  <p>Emily Ehrlich</p></div>
</div>
<div class="staff_container">
  <img src="ctv_images/staff/briannafranco.jpg" data-rjs="2">
  <div class="name">
  <p>Brianna Franco</p></div>
</div>
<div class="staff_container">
  <img src="ctv_images/staff/madisongailboord.jpg" data-rjs="2">
  <div class="name">
  <p>Madison Gailboord</p></div>
</div>
<div class="staff_container">
  <img src="ctv_images/staff/adamglantz.jpg" data-rjs="2">
  <div class="name">
  <p>Adam Glantz</p></div>
</div>
<div class="staff_container">
  <img src="ctv_images/staff/lyndseykleiman.jpg" data-rjs="2">
  <div class="name">
  <p>Lyndsey Kleiman</p></div>
</div>
<div class="staff_container">
  <img src="ctv_images/staff/krzyszakorytkowski.jpg" data-rjs="2">
  <div class="director"><p class="sub">News Director</p></div>
  <div class="name">
  <p>Krzysza Korytkowski</p>

</div>
</div>
<div class="staff_container">
  <img src="ctv_images/staff/jessicaless.jpg" data-rjs="2">
  <div class="name">
  <p>Jessica Less</p></div>
</div>
<div class="staff_container">
  <img src="ctv_images/staff/jacobmayer.jpg" data-rjs="2">
  <div class="name">
  <p>Jacob Mayer</p></div>
</div>
<div class="staff_container">
  <img src="ctv_images/staff/jemmamiller.jpg" data-rjs="2">
  <div class="director"><p class="sub">Entertainment Director</p></div>
  <div class="name">
  <p>Jemma Miller</p>
  </div>
</div>
<div class="staff_container">
  <img src="ctv_images/nophoto.jpg" data-rjs="2">
  <div class="name">
  <p>Sergio Owen</p></div>
</div>
<div class="staff_container">
  <img src="ctv_images/staff/alexapichardo.jpg" data-rjs="2">
  <div class="name">
  <p>Alexa Pichardo</p></div>
</div>
<div class="staff_container">
  <img src="ctv_images/staff/kallirodgers.jpg" data-rjs="2">
  <div class="name">
  <p>Kalli Rogers</p></div>
</div>
<div class="staff_container">
  <img src="ctv_images/staff/andrewrothschild.jpg" data-rjs="2">
  <div class="name">
  <p>Andrew Rothschild</p></div>
</div>
<div class="staff_container">
  <img src="ctv_images/staff/justinerusso.jpg" data-rjs="2">
  <div class="name">
  <p>Justine Russo</p></div>
</div>
<div class="staff_container">
  <img src="ctv_images/staff/daniellesiso.jpg" data-rjs="2">
  <div class="name">
  <p>Danielle Siso</p></div>
</div>
<div class="staff_container">
  <img src="ctv_images/staff/rebeccasmitherman.jpg" data-rjs="2">
  <div class="name">
  <p>Rebecca Smitherman</p></div>
</div>
<div class="staff_container">
  <img src="ctv_images/staff/douglasweimann.jpg" data-rjs="2">
  <div class="name">
  <p>Douglas Weimann</p></div>
</div>
<div class="staff_container">
  <img src="ctv_images/staff/annavillalonga.jpg" data-rjs="2">
  <div class="director"><p class="sub">Sports Director</p></div>
  <div class="name">
  <p>Anna Villalonga</p>
  </div>
</div>

<!-- END STAFF -->

<!-- BLANK CAST BOX
<div class="staff_container">
  <img src="ctv_images/staff/nophoto.jpg" data-rjs="2">
  <div class="name">
  <p>Anna Villalonga-Diez</p></div></div>
-->



<div class="bardivider" style="border-bottom:none"><p class="head">ADVISOR</p></div>
<!-- BEGIN ADVISOR -->
<!-- ALL PICTURES MUST BE 170x170 -->
<div class="chardo_bio">
  <div class="officer_container" style="border: 0px; padding-right:10px; background-color:black">
    <img src="ctv_images/staff/pichardo.jpg">
    <div class="name">
    <p>Mr. Pichardo</p></div>
  </div>
  <p class="pichardo" style="text-align:justify; text-indent:50px; color:white">
    Since joining CTV in 2005, <b>Alfredo Pichardo</b> has worked to bring his real world
    experience into the classroom. Having worked as a Coordinating Producer, Technical Operations Manager,
    and Studio Camera Operator for networks such as Univision, Telemundo, NBC, CBS, and MTV, Mr. Pichardo is
    able to prepare CTV students for careers in television far beyond what can be taught from a textbook.
    He has a wife, three kids, and a CTV family that wouldn’t be the same without him.
  </p><p class="pichardo" style="text-align:center;">Email:
    <a href="mailto:apichardo@cchsctv.com">apichardo@cchsctv.com</a>&nbsp;&nbsp;&nbsp;Resume:
    <a href="pdf/pichardoresume.pdf" target="_blank">(click here)</a>
  </p>
</div>
<!-- END ADVISOR -->




<div style="clear:both"></div>

<?php require 'footer.php' ?>
