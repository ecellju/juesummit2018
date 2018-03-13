<!DOCTYPE html>
<html>
<head>
		<title>E Summit</title>



<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<style type="text/css">
html{
    height: 100%;
}

.container2 {
 display: -webkit-box;      /* OLD - iOS 6-, Safari 3.1-6 */
display: -moz-box;         /* OLD - Firefox 19- (buggy but mostly works) */
display: -ms-flexbox;      /* TWEENER - IE 10 */
display: -webkit-flex;     /* NEW - Chrome */
display:flex;
    display: -webkit-flex;     /* NEW - Chrome */
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-flow: row nowrap;
          flex-flow: row nowrap;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.container2 .item {
  display: grid;
  margin: auto;
  position: relative;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  text-align: center;
  color: white;
  -webkit-transition: .3s;
  transition: .3s;
  max-width: 20%;
  height: 100vh;
  min-width: 10%;
  background-color: rgba(34, 34, 34, 0.4);
}
.container2 .item:before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-position: center bottom;
  background-size: cover;
 
}
.container2 .item1:before {
  background-image: "ilu_02.png";
}
.container2 .item2:before{
  background-image: url('https://upload.wikimedia.org/wikipedia/commons/8/82/Ashton_Kutcher_talks_at_Startup_School.jpg');
}
.container2 .item3:before{
    background-image: url('https://www.citylifebarcelona.com/wp-content/uploads/POSTER_WIN-Prizes_FINAL_BCN.jpg');
}
.container2 .item4:before{
    background-image: url('https://www.artflakes.com/artwork/products/1238440/zoom/no215-my-the-internship-minimal-movie-poster.jpg');
}
.container2 .item5:before{
    background-image: url('http://graphicgoogle.com/wp-content/uploads/2016/12/Creative-Designer-Lecture-Poster-2.jpg');
}
.container2 .item1:before{
    background-image: url('https://cdn4.euraxess.org/sites/default/files/news/falling_walls_sing_2017.jpg');
}
.container2 .item:hover {
  -webkit-transition: .5s;
  transition: .5s;
  max-width: 40% !important;
  -webkit-box-flex: 2;
      -ms-flex-positive: 2;
          flex-grow: 2;
  cursor: pointer;
  color: #fff;
  background-color: rgba(0, 0, 255, 0.3);
}
.container2 .item:hover p {
  -webkit-transform: none;
          transform: none;
  -webkit-transition: .3s;
  transition: .3s;
  display: block;
}
.container2 .content {
  margin: auto;
  font-size: 2em;
  z-index: 2;
}
.container2 p {
  -webkit-transform: translateY(120vh);
          transform: translateY(120vh);
          display: none;
}
.container2 button {
  -webkit-transform: translateY(120vh);
          transform: translateY(120vh);
          display: none;
}
.container2 .item:hover button {
  -webkit-transform: none;
          transform: none;
  -webkit-transition: .3s;
  transition: .3s;
  display: block;
}


.hideme
{
    opacity:0;
}

/* -------------------------------------------------------------------------------------------------------------------------- */
			.temp-hide{display:none;}



		body {
  padding: 0;
  margin: 0;
  background-color: #130d0a;
  font-family: 'Playfair Display', serif;
  color: #fff;
  height: 100%;
}
#background {
background: radial-gradient(at bottom right, #32577a 25%, #05363b 55%, #000000 90%); background: #160d44; /* Old browsers */
background: -moz-linear-gradient(top, #160d44 1%, #ea3848 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top, #160d44 1%,#ea3848 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom, #160d44 1%,#ea3848 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#160d44', endColorstr='#ea3848',GradientType=0 ); /* IE6-9 */
background-repeat: no-repeat;
background-attachment: fixed;
}
#background-footer {
background: radial-gradient(at bottom right, #32577a 25%, #05363b 55%, #000000 90%); background: #160d44; /* Old browsers */
background: -moz-linear-gradient(top, #000313 1%, #ea3848 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top, #000313 1%,#ea3848 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom, #000313 1%,#ea3848 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#160d44', endColorstr='#ea3848',GradientType=0 ); /* IE6-9 */
	
}	
#hero {
  height: 800px;
  overflow: hidden;
  position: relative;
}

#content {
  background-color: #000313;
}

.layer {
  background-position: bottom center;
  background-size: auto;
  background-repeat: no-repeat;
  width: 100%;
  height: 800px;
  position: fixed;
  z-index: -1;
}

#hero-mobile {
  display: none;
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/272781/full_illustration.png") no-repeat center bottom/cover;
  height: 320px;
}

.first-section {
  padding: 50px 0 20px 0;
}

.text-header {
  font-size: 50px;
  text-align: center;
}

h1 {
  line-height: 120%;
  margin-bottom: 30px;
}

p {
  color: #ede0d5;
  font-size: 18px;
  line-height: 150%;
}

#hero, .layer {
  min-height: 800px;
}

.layer-bg {
  background-image: url("assets/img/mm.png");
}

.layer-1 {
  background-image: url("assets/img/moon.png");
  background-position: right top;
}

.layer-2 {
  background-image: url("assets/img/stars.png");
 
  background-size: contain;
}

.layer-3 {
  background-image: url("assets/img/mm2.png");
  

}

.layer-4 {
  background-image: url("assets/img/ironman2.png");
  transform: translate(0,10px);
	-ms-transform: translate(0,10px); /* IE 9 */
    -webkit-transform: translate(0,10px); /* Safari */
  transition: transform 2s ease-in-out;	
  background-size: contain;
}

/*.layer-overlay {
  background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/272781/ilu_overlay.png\a      ");
}
*/
@media only screen and (max-width: 768px) {
  #hero {
    display: none;
  }

  #hero-mobile {
    display: block;
  }
}
.tutorial-link {
  color: #fff;
  font-size: 18px;
  text-decoration: underline;
}
.tutorial-link:hover {
  color: #ede0d5;
}

			.aboutwithunderline:after{
       content: '';
      position:absolute;
      bottom:0;
      left: 42%;
      right: 42%;
      height: 3px;
      background:white;
      display:block;
}



[data-wipe] {
  display: inline-block;
  padding: 12px 18px;
  text-decoration: none;
  position: relative;
  border: 2px solid #445561;
  border-radius: 3px;
  text-transform: uppercase;
  letter-spacing: 0.1em;
  text-align: left;
  color: #445561;
  overflow: hidden;
}
[data-wipe]:before, [data-wipe]:after {
  content: attr(data-wipe);
  padding-top: inherit;
  padding-bottom: inherit;
  white-space: nowrap;
  position: absolute;
  top: 0;
  overflow: hidden;
  color: #F1F1F2;
  background: #445561;
}
[data-wipe]:before {
  left: 0;
  text-indent: 18px;
  width: 0;
}
[data-wipe]:after {
  padding-left: inherit;
  padding-right: inherit;
  left: 100%;
  text-indent: calc(-100% - 36px);
  transition: 0.2s ease-in-out;
}
[data-wipe]:hover:before {
  width: 100%;
  transition: width 0.2s ease-in-out;
}
[data-wipe]:hover:after {
  left: 0;
  text-indent: 0;
  transition: 0s 0.2s ease-in-out;
}







@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600);

* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  font-family: "Source Sans Pro", sans-serif;
}

.keynotecard {
  text-decoration: none;

  font-family: "Source Sans Pro", sans-serif;
}

.keynotecard h3 {
  font-size: 18px;
}

.keynotecard p {
  font-size: 13px;
  line-height: 1.4;
}

.keynotecard .work {
    height: 40%;
  margin: 80px auto;
  position: relative;
  transition: all .4s;
  overflow: hidden;
}

.keynotecard .work img { 
    display: block; 
    margin-bottom: 0!important; 
    max-width: 100%; 
    margin: 0 auto; 
    position: relative;
}

.keynotecard .details {
  position: absolute;
  bottom: -50px;
  background: rgba(0, 0, 0, .6);
  color: #fff;
  width: 100%;
  padding: 8px 15px;
  transition: all .4s;
}

.keynotecard .work:hover .details {
  background: rgba(0, 0, 0, .8);
  bottom: 0;
  transition: all .4s;
}


.keynotecard .btn {
  color: #fff;
  background: #4cafe0;
  padding: 6px 12px;
  border-radius: 2px;
  display: inline-block;
  margin: 15px 0 5px;
  transition: all .4s;
}

.keynotecard .btn:hover {
  background: #3983A9;
  transition: all .4s;
}















@import url("https://fonts.googleapis.com/css?family=Work+Sans:400,700,900");
body {
  font-family: 'Work Sans', sans-serif;
  background: #111;
  text-align: center;
}

.wrapper {
  width: 100vw;
  /*height: 100vh;*/
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.buttonschedule {
  touch-callout: none;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  display: inline-block;
  border: .2em solid;
  position: relative;
  cursor: pointer;
  overflow: hidden;
  opacity: 0.6;
  color: #FFF;
}
.buttonschedule__text {
  display: block;
  padding: 1em 2em;
  text-transform: uppercase;
  font-weight: bold;
}
.buttonschedule__text:before {
  content: attr(title);
}
.buttonschedule__text--bis {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  -webkit-transform: translateX(-1em);
          transform: translateX(-1em);
  opacity: 0;
}
.buttonschedule__mask {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: white;
  -webkit-transform: translateX(-100%) rotate(45deg);
          transform: translateX(-100%) rotate(45deg);
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
}

.buttonschedule:hover {
  opacity: 1;
}
.buttonschedule:hover .buttonschedule__text {
  -webkit-animation: fx-text .5s ease-out;
          animation: fx-text .5s ease-out;
}
.buttonschedule:hover .buttonschedule__text--bis {
  -webkit-animation: fx-text-bis .5s ease-out;
          animation: fx-text-bis .5s ease-out;
}
.buttonschedule:hover .buttonschedule__mask {
  -webkit-animation: fx-mask .5s ease-out;
          animation: fx-mask .5s ease-out;
}

.buttonschedule:active {
  opacity: 1;
  background: white;
  color: inherit;
}

@-webkit-keyframes fx-mask {
  0% {
    -webkit-transform: translateX(-100%) rotate(45deg);
            transform: translateX(-100%) rotate(45deg);
  }
  100% {
    -webkit-transform: translateX(100%) rotate(45deg);
            transform: translateX(100%) rotate(45deg);
  }
}

@keyframes fx-mask {
  0% {
    -webkit-transform: translateX(-100%) rotate(45deg);
            transform: translateX(-100%) rotate(45deg);
  }
  100% {
    -webkit-transform: translateX(100%) rotate(45deg);
            transform: translateX(100%) rotate(45deg);
  }
}
@-webkit-keyframes fx-text {
  0% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(1em);
            transform: translateX(1em);
    opacity: 0;
  }
}
@keyframes fx-text {
  0% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(1em);
            transform: translateX(1em);
    opacity: 0;
  }
}
@-webkit-keyframes fx-text-bis {
  0% {
    -webkit-transform: translateX(-1em);
            transform: translateX(-1em);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
    opacity: 1;
  }
}
@keyframes fx-text-bis {
  0% {
    -webkit-transform: translateX(-1em);
            transform: translateX(-1em);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
    opacity: 1;
  }
}











		</style>
<!--		<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>-->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One" rel="stylesheet">
</head>
	<body id="background">
				<div id='hero'>
		  <div class='layer-2 layer' data-depth='0.50' data-type='parallax'></div>
		  <div class='layer-bg layer' data-depth='0.10' data-type='parallax'></div>
		  <div class='layer-1 layer' data-depth='0.20' data-type='parallax'></div>

		  <div class='layer-4 layer' id="iron-man" data-depth='1.00' data-type='parallax'></div>
		  <div class='layer-3 layer' data-depth='0.80' data-type='parallax'></div>
		  <div class='layer-overlay layer' data-depth='0.85' data-type='parallax'></div>
			</div>
  
<div id='hero-mobile'></div>


<div id='content'>

  <div class='container'>
    <section class='first-section'>
      <div class='row' >
        <div class='col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3' >
          <img src="assets/img/logo.png" style="height: 400px ; width:  600px;" />
         
          <h3 style="letter-spacing: 3px;text-align: center;color: white;margin-top: -115px">Tomorrow happens here</h3>
        </div>
      </div>
      <div class='row' style="margin-top: 5%;margin-bottom: 20%;text-align: center;">
<!--
        <div class='about-vid  col-lg-6 col-md-6 col-sm-6' style="overflow: hidden;">
          <img src="https://media1.tenor.com/images/ec324ff5561eafab43cc4b88382c8439/tenor.gif?itemid=3518069"/>
        </div>
-->
        <div class='about-text col-sm-12' style="text-align: center;">
            <div></div>
<!--
            <h1 class="aboutwithunderline hideme" style="font-family: 'Alfa Slab One', cursive;
                    ; letter-spacing: 4px;color: white">About</h1>
-->
            </div>
            <div >
            <div id="divToShowHide" class=' hideme about-text ' style="text-align: center;">
            <br><br>
               <p>
                Jadavpur University Entrepreneurship Cell presents to you <strong>Jadavpur University Entrepreneurship Summit 2018</strong>.<br> This will marks Jadavpur University’s arrival in the league of institutions promoting and nurturing entrepreneurship among the youth. We wish to ignite the passion of Entrepreneurship in the minds of the students, as well as reward the entrepreneurial zest.
            </p>
            </div>
            </div>
          
    </div>
      </div>
    </section>
  </div>
</div>

</div>


<div style="background-color: #000313;color: white;margin-top: -20px;min-height: 700px">
<div class = "events-header" style="height: 50%;padding-bottom: 100px">
<h1 style="font-family: 'Alfa Slab One', cursive;
; letter-spacing: 3px;color: white;text-align: center;" >Highlighted Events</h1>
<br>
<h4 style="color: #036197;letter-spacing: 2px;text-align: center;">- Come see what we have in store for you -</h4>
</div>
<div class="container2" >

  <div class=" item item1" style="color: black !important">
    <div class="content">
   </div>
  </div>
  <div class="item item2" style="color: black !important">
    <div class="content" style="color: black !important">
     <button class="btn btn-info">Know More</button>
    </div>
  </div>
  <div class="item item3" style="color: black !important">
    <div class="content">
      </p>
       <button class="btn btn-info">Know More</button>
    </div>
  </div>
  <div class="item item4" style="color: black !important">
    <div class="content">
       <button class="btn btn-info">Know More</button>
    </div>
  </div>
  <div class="item item5" style="color: black !important">
    <div class="content">
      <button class="btn btn-info" style="background-color: black !important">Know More</button>
    </div>
  </div>
</div>
</div>
<div id='content'>
  <div class='container'>
    <section class='first-section'>
      <div class='row' style="margin-top: 15%;margin-bottom: 20%;text-align: center;">
        <div class='about-vid  col-lg-6 col-md-6 col-sm-6' style="overflow: hidden;">
          <img src="https://i.imgur.com/iPlrYte.png"/>
        </div>
        <div class='about-text col-sm-6' style="text-align: center;">
            <h1 class="aboutwithunderline" style="font-family: 'Alfa Slab One', cursive;
                    ; letter-spacing: 4px;color: white">Falling Walls Lab</h1>
        </div>
            <div class=' about-text ' style="text-align: jusitify;">
            <br><hr><br>
               <p style="margin-top: 40px">
               Where scientists , economists, Nobel laureates and professors and inventors orate about their discoveries and make the world aware of the amazing inventions having the potential to change the world.
               <hr>
               <strong>Venue</strong> : Gandhi Bhavan , Jadavpur University<br>
               <strong>Date </strong> : 8th April, 2018
            </p>
            </div>          
   	  </div>
      </div>
    </section>
  </div>
<div class="temp-hide scheduleandshit" style="background-color: #000917;margin-top: -10px">
<div style="height: 30%">
   <h4 style="padding-top: 10%;color: white">BPlans? Internships ? Great Personalities? Don't worry, we have got you all covered </h4>
  </div>
    <div class="wrapper">

  <br>
  
  <div class="buttonschedule">
    <span class="buttonschedule__mask"></span>
    <span class="buttonschedule__text">Schedule for E Summit  <i class="fas fa-clipboard-list"></i>

</span>
    <span class="buttonschedule__text buttonschedule__text--bis">Schedule for E Summit</span>
  </div>
  
</div>
</div>
<div class=" temp-hide keynote row" style="height: auto;padding-bottom:50px;background-color: #000917;margin-top: -22px">


    
<h2 style="font-family: 'Alfa Slab One', cursive;
; letter-spacing: 4px;color: white;text-align: center;padding-top: 125px"> Keynote Speakers </h2>
<br>
<h4 style="letter-spacing: 3px;color:#036197 ">-Come see these Titans right at the heart of JU-</h4>


<div class="keynotecard col-md-4 col-sm-6" style="display: inline-block;">
  <div class="work">
    <img src="https://imagesvc.timeincapp.com/v3/mm/image?url=https%3A%2F%2Ffortunedotcom.files.wordpress.com%2F2018%2F01%2Fgettyimages-543263054.jpg">
      <div class="details"><h3>Travis Kalanick</h3>
        <p>Random attention seeking dude</p>
        <div class="btn">Hear him Live !</div>
    </div>
  </div>
</div>

<div class="keynotecard col-sm-6 col-md-4" style="display: inline-block;"> 
 <div class="work">
    <img src="https://media.wired.com/photos/593222b926780e6c04d2a195/master/w_582,c_limit/Zuck-TA-AP_17145748750763.jpg">
      <div class="details"><h3>The Zuck</h3>
        <p>Random attention seeking dude</p>
        <div class="btn">Hear him Live !</div>
    </div>
  </div>
</div>
<div class="keynotecard col-md-4 col-sm-6" style="display: inline-block;">
  <div class="work">
    <img src="https://imagesvc.timeincapp.com/v3/mm/image?url=https%3A%2F%2Ffortunedotcom.files.wordpress.com%2F2018%2F01%2Fgettyimages-543263054.jpg">
      <div class="details"><h3>Travis Kalanick</h3>
        <p>Random attention seeking dude</p>
        <div class="btn">Hear him Live !</div>
    </div>
  </div>
</div>


    <div class="wrapper">

  <br>
  
  <div class="buttonschedule">
    <span class="buttonschedule__mask"></span>
    <span class="buttonschedule__text">Come hear them all   <i class="fas fa-microphone"></i> </span>
    <span class="buttonschedule__text buttonschedule__text--bis">Come hear them all </span>
  </div>
  
</div>
</div>

<div class="sponsors temp-hide" style="text-align: center;background-color: #000917;margin-top: -22px;padding-bottom: 50px">
    <div>
 <h2 style="font-family: 'Alfa Slab One', cursive;
; letter-spacing: 4px;color: white;text-align: center;padding-top: 125px">Our Sponsors </h2>
<br>
<h4 style="letter-spacing: 3px;color:#036197 ">-Their support made it possible-</h4>
    </div>

    <div class="titlesponsor" style="margin-top: 150px">
    <img src="http://diylogodesigns.com/blog/wp-content/uploads/2016/04/google-logo-icon-PNG-Transparent-Background.png" style="height: 300px;width: auto" />
        
<h4 style="letter-spacing: 3px;color:#036197 ">-Title Sponsor-</h4>
    </div>

</div>
  <div class='container-fluid' id="background-footer">
   <div style="  background-image: url("assets/img/stars.png");
 
  background-size: contain;">
 <style>
	 .footer-social{
    font-size:30px;
    color:#000313;
    text-decoration:none!important;
    padding-left:0!important
}
.fa-facebook:hover{
    color:#3b5998
}
.fa-linkedin:hover{
    color:#007bb5
}
.fa-twitter:hover{
    color:#55acee
}
.fa-youtube-play:hover{
    color:#b00
}
.fa-instagram:hover{
    color:#8a3ab9;
}

	   </style>
     	   <section class='first-section' style="padding-bottom: 0px">
      	<div class='row' >
	          <div class = "events-header" style="height: 50%;padding-bottom: 100px">
				<h1 style="font-family: 'Alfa Slab One', cursive;
				; letter-spacing: 3px;color: white;text-align: center;" >Stay Updated</h1>
				<br>
				<h4 style="color: #036197;letter-spacing: 2px;text-align: center;">- Follow us on Social Media -</h4>
			</div>
			<div> 
  				<a href="https://www.facebook.com/juecell/" target="_blank" class="col-xs-offset-1 col-xs-2 footer-social fa fa-facebook"></a>
  				<a href="https://twitter.com/ju_ecell" target="_blank" class="col-xs-2 footer-social fa fa-twitter"></a> 
  				<a href="https://in.linkedin.com/company/jadavpur-university-entrepreneurship-cell" target="_blank" class="col-xs-2 footer-social fa fa-linkedin"></a> 
  				<a href="https://www.youtube.com/channel/UCAiMo_wiKzdJd0rPoBlmf3Q" target="_blank" class="col-xs-2 footer-social fa fa-youtube-play"></a> 
  				<a href="https://www.instagram.com/ecell_jadavpur/" target="_blank" class="col-xs-2 footer-social fa fa-instagram"></a> 
  			</div>
   		</div>
   		<br>
   		<style>
			@media (max-width: 767.98px) { 
				.end-footer {
					text-align: center !important;
				}
			}
		</style>
   		<div class='row' style="margin-top: 10% ;color: inherit; background-color: rgba(0,0,0, .5)">
   			<div class="container-fluid" style="border-top: 1px solid rgba(22, 13, 68, 1)">
				<div class="col-sm-8 end-footer" style="text-align: left">
					<img id="footer-logo" src="https://i.imgur.com/NSBCfAX.png" style="margin-top:10px;margin-bottom:10px;height:70px">
				</div>
				<div class="col-sm-4 end-footer" style="text-align: right;color:whitesmoke; padding-top:1.5%;font-size:15px">
					<div class="col-xs-12">
						ecell@jadavpuruniversity.in
					</div>
					<div class="col-xs-12">
						+91 9876543210
					</div>
				</div>				
			</div>
		</div>
      </div>
    </section>
</div>
  </div>
</div>


<script type="text/javascript">
(function() {
  window.addEventListener('scroll', function(event) {
    var depth, i, layer, layers, len, movement, topDistance, translate3d;
    topDistance = this.pageYOffset;
    layers = document.querySelectorAll("[data-type='parallax']");
    for (i = 0, len = layers.length; i < len; i++) {

      layer = layers[i];
      depth = layer.getAttribute('data-depth');
      movement = -(topDistance * depth);
      translate3d = 'translate3d(0, ' + movement + 'px, 0)';
      layer.style['-webkit-transform'] = translate3d;
      layer.style['-moz-transform'] = translate3d;
      layer.style['-ms-transform'] = translate3d;
      layer.style['-o-transform'] = translate3d;
      layer.style.transform = translate3d;
    }

  });

}).call(this);
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
var i=1;
	setInterval(function(){ 
		if(i%2==1)document.getElementById('iron-man').style.transform= "translateY(-5px)";
		else document.getElementById('iron-man').style.transform= "translateY(+5px)";
		i++;
	}, 2000);
	
</script>
<script type="text/javascript" >

$(document).ready(function() {
    
    $(window).scroll( function(){
    
        $('.hideme').each( function(i){
            
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},1500);
                    
            }
            
        }); 
    
    });
    
});
</script>

		

	</body>
</html>
