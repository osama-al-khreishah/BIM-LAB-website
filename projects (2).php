<!DOCTYPE html>
<html lang="en-US">
<head>
<style>

@font-face {
    font-family: 'Moayad_Light';
    src: url('NeoSansProLight.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'Moayad_Regular';
    src: url('NeoSansPro.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}
.myfont{font-family: 'Moayad_Regular', Arial, Helvetica, sans-serif; font-size:34pt; }
p{ font-size:14pt;font-family: 'Moayad_Light', Arial, Helvetica, sans-serif; }

</style>
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<title>BIM Lab</title>
<meta name="description" content="Engineering Services / BIM Services">
<meta name="keywords" content="bim,jordan,amman,lab,building,information,modelling,modeling,implementation,engineering,services,revit,autodesk,developers,architecture,mep,structure,mechanical,electrical,plumbing,project,projects
">
<script type="text/javascript">
var picture1 = "img/tbh_orange.png";
var picture2 = "img/tbh.png";
if (document.images) {
image1 = new Image();
image1.src = picture1
image2 = new Image();
image2.src = picture2;
}
function mover(img){
document["change"].src = img.src;
}
function mout(img){
document["change"].src = img.src;
}
</script>
<link rel='stylesheet' id='jayjay-css'  href='css/style.css' media='all' />
<script type='text/javascript' src='javascript/jquery.js'></script>
<script type='text/javascript' src='javascript/jquery-migrate.min.js'></script>
<script type='text/javascript' src='javascript/jquery.cookie.js'></script>
<meta name="generator" content="WPML ver:3.1.8.4 stt:1,42;0" />
<link rel="alternate" hreflang="en-US" href="portfolio.html" />
<link rel="alternate" hreflang="pl-PL" href="portfolio.html" />

<script type='text/javascript'> 
   
function OnMouseIn (elem) {
            //var resBox=document.getElementById(elem);
   	    elem.getElementsByTagName('div')[0].style.display = 'block';
            //document.getElementById('i1').style.display = 'block';
        }
        function OnMouseOut (elem) {
            //var resBox=document.getElementById(elem);
   	    elem.getElementsByTagName('div')[0].style.display = 'none';    
	   //document.getElementById('i1').style.display = 'none';
        }

    </script>
<!-- ## NXS/OG ## -->
<!-- ## NXS/OG ## -->


        <!--<link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Archivo+Narrow:400,400italic,700,700italic' rel='stylesheet' type='text/css'>-->

        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/third-party.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script>
		jQuery(document).ready(function () {
		$('.m-menu').mouseover(function() {
$(this).children('.arr-class').show();
});

$('.m-menu').mouseout(function() {
$(this).children('.arr-class').hide();
});

});
		</script>
        <script src="javascript/modernizr-2.8.3.min.js"></script>
        <meta property="og:image" content="https://pbs.twimg.com/profile_images/601407094277873664/WT2mk28E_400x400.jpg" />
        <link type="text/css" media="screen" rel="stylesheet" href="css/awwwards.css" />
				<script type="text/javascript" src="javascript/freewall.js"></script>
				<style type="text/css">
					.free-wall {
						margin:15;
						right:4%;
						width:90%;
						float:right;
					}
					.brick img {
						margin: 0;
						display: block;
					}
				</style>

<script>
jQuery(document).ready(function () {


$( ".cboxElement" ).click(function(e) {
e.preventDefault();
var p=$(this).offset().top;
//alert(p);
//var offset_t = $(this).offset().top - $(window).scrollTop();
//var top = offset_t;
//var m=e.pageY-p;
$("html, body").animate({ scrollTop: 0 }, "fast");
var href = $(this).attr('href');
var tit = $(this).attr('title');
$(".wrp").css("margin-top","5%");
//$(".wrp").center();
$("#target-image").attr("src","");
$("#target-image").attr("src",href);
$("#tit").text(tit);
$("#cboxOverlay").show();
$("#wrappp").show();
});
$( "#cboxClose" ).click(function(e) {
$("#cboxOverlay").hide();
$("#wrappp").hide();
});

$( "#wrappp" ).click(function(e) {
$("#cboxOverlay").hide();
$("#wrappp").hide();
});

jQuery(document).ready(function () {
$('#page').hide();
$('.preloader').show();
var i=0;
var px="px";
var x='"';
var y;
var mx=400;
function myTimer() {
i=i+10;
mx=mx-10;
y=i+px;
$('.progress-bar_bg div').css("width",y);

if (mx == 0)
{
clearInterval(myVar);
$('#page').show();
$('.preloader').slideUp("slow");
}
}
var myVar = setInterval(function(){ myTimer() }, 60);
});



(function($){
     $.fn.extend({
          center: function (options) {
               var options =  $.extend({ // Default values
                    inside:window, // element, center into window
                    transition: 0, // millisecond, transition time
                    minX:0, // pixel, minimum left element value
                    minY:0, // pixel, minimum top element value
                    withScrolling:true, // booleen, take care of the scrollbar (scrollTop)
                    vertical:true, // booleen, center vertical
                    horizontal:false // booleen, center horizontal
               }, options);
               return this.each(function() {
                    var props = {position:'relative'};
                    if (options.vertical) {
                         var top = ($(options.inside).height() - $(this).outerHeight()) / 2;
                         if (options.withScrolling) top += $(options.inside).scrollTop() || 0;
                         top = (top > options.minY ? top : options.minY);
                         $.extend(props, {top: top+'px'});
                    }
                    if (options.horizontal) {
                          var left = ($(options.inside).width() - $(this).outerWidth()) / 2;
                          if (options.withScrolling) left += $(options.inside).scrollLeft() || 0;
                          left = (left > options.minX ? left : options.minX);
                          $.extend(props, {left: left+'px'});
                    }
                    if (options.transition > 0) $(this).animate(props, options.transition);
                    else $(this).css(props);
                    return $(this);
               });
          }
     });
})(jQuery);
});
</script>


</head>


	<body tabindex="0" style="overflow-y: visible;" class="page page-id-15 page-template page-template-template-skills page-template-template-skills-php skills">

              <div id="nav_bar">

            <a class="logo" rel="index" href="http://www.bimlab.com/">
                <img src="img/bim-small.png" alt="">
                <center></center>
            </a>

            <div class="lang">
                <a href="#" class="active">EN</a>
                <a href="ar/projects.php" class="">عر</a>
            </div>



        <nav class="en">
               <!-- <a rel="index" href="index.html" class="home-link active"><img src="img/home_orange.png"></a>
                <a rel="BIM" href="BIM.html"><img src="img/bim.png"></a>
                <a rel="about" href="about.html"><img src="img/about.png"></a>
                <a rel="services" href="services.html"><img src="img/services.png"></a>
                <a rel="projects" href="projects.php"><img src="img/projects.png"></a>
                <a rel="contact" href="contact.php"><img src="img/contact.png"></a>-->
                <a rel="index" href="index.html" class="m-menu"><i class="fa fa-home"></i>
	<div class="arr-class"></div>
	</a>

                <a rel="BIM" href="bim.html" class="m-menu"><i class="fa fa-user-secret"></i><div class="arr-class"></div></a>
                <a rel="about" href="aboutus.html" class="m-menu"><i class="fa fa-skyatlas"></i><div class="arr-class"></div></a>
                <a rel="services" href="services.html" class="m-menu"><i class="fa fa-code"></i><div class="arr-class"></div></a>
                <a rel="projects" href="projects.php" class="active m-menu"><i class="fa fa-pencil"></i><div class="arr-class"></div></a>
                <a rel="contact" href="contactus.php" class="m-menu"><i class="fa fa-envelope-o"></i><div class="arr-class"></div></a>
            </nav>

            <ul>
                <li><a href="https://www.twitter.com/BIMLab" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.linkedin.com/company/bim-lab" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://www.facebook.com/BIMLabJo" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://thebimhub.com/companies/bim-lab-2/" target="_blank" onMouseOver="mover(image1)" onMouseOut="mout(image2)"><img name="change" src="img/tbh.png" border=0></a></li>
            </ul>

            <a id="mobile-link" href=""><i class="fa fa-bars"></i></a>

        </div>

        <div style="display: block; opacity: 1;" id="page" class="en">


<div id="demo" class="container gallery magicwall">
		<div id="freewall" class="free-wall"></div>
</div>

            <div id="particles-js"><canvas height="608" width="1301" style="width: 100%; height: 100%;"></canvas></div>

            <div class="preloader">
                <div class="inner">

                    <img src="img/logopreload.png">
                    <span>BIM Lab is Loading</span>


                    <div class="progress-bar">

                        <!--<span>0</span>-->

                        <div class="progress-bar_bg">
                            <div></div>
                        </div>

                    </div>

                </div>

            </div>

             <a class="blog-link" href="clients.php">
                <img src="img/blogdark.png">
                <span class="folded-corner"></span>
            </a>
<style>
.port-caption {
     background-color: #333333;
    //bottom: 15px;
    display: none;
    height: 100%;
    //left: 15px;
    opacity: 0.7;
    position: absolute;
    //right: 15px;
    //top: 15px;
    width: 100%;
transition: all 0.3s ease-in-out 0s;
//transition: width 2s, height 4s;
//transform: scale(0, 0);
//transform-origin: center center 0;
vertical-align:middle;

}
.port-caption:hover{
//transform: scale(1, 1);
height: 100%;
width: 100%;
}
.lnk{
color:white;
font-family:'Moayad_Regular', Arial, Helvetica, sans-serif;
text-align:center;
}

.lnk:hover{
color:#FFFFFF;
}
</style>

<script type="text/javascript">
</script>
            <script src="javascript/jquery-1.11.2.min.js"></script>
            <script>window.jQuery || document.write('<script src="javascript/jquery-1.11.2.min.js"><\/script>')</script>
            <script src="javascript/velocity.min.js"></script>
            <script src="javascript/plugins.js"></script>
            <script src="javascript/main.js"></script>
						<script type="text/javascript">
					$(function(){
							var temp = "<div onmouseover='OnMouseIn (this)' onmouseout='OnMouseOut (this)' class='brick' style='width:{width}px;'><div id='i{index}' class='port-caption' name='caption'><div style='font-size:30px;text-align:center;color:white;height:100%;width:100%;position:absolute;'><a class='lnk' href='project-details-{index}.html'><div style='display: table; height: 100%; width: 100%; overflow: hidden;'><div style='display: table-cell; vertical-align: middle;'><div>text {index}</div></div></div></a></div></div><a class='scf' style='cursor:pointer'><img src='i/photo/{index}.jpg' width='100%'></a></div>";
							var w = 1, h = 1, html = '', limitItem = 6;
							w = 2 + 3 * Math.random() << 0;
																	html+="<div onmouseover='OnMouseIn (this)' onmouseout='OnMouseOut (this)' class='brick' style='width:"+w*220+"px;'><div id='i{31582365042.jpg}' class='port-caption' name='caption'><div style='font-size:30px;text-align:center;color:white;height:100%;width:100%;position:absolute;'><a class='lnk' href='project-details.php?id=1'><div style='display: table; height: 100%; width: 100%; overflow: hidden;'><div style='display: table-cell; vertical-align: middle;'><div>BIM Adoptation</div><br><div style='font-size: 22px'>BIM Adoption Projects</div></div></div></a></div></div><a class='scf' style='cursor:pointer'><img src='http://www.bimlab.com/bimlap/Uploads/31582365042.jpg' width='100%'></a></div>";
																			html+="<div onmouseover='OnMouseIn (this)' onmouseout='OnMouseOut (this)' class='brick' style='width:"+w*220+"px;'><div id='i{01582364741.jpg}' class='port-caption' name='caption'><div style='font-size:30px;text-align:center;color:white;height:100%;width:100%;position:absolute;'><a class='lnk' href='project-details.php?id=2'><div style='display: table; height: 100%; width: 100%; overflow: hidden;'><div style='display: table-cell; vertical-align: middle;'><div>BIM Adoption</div><br><div style='font-size: 22px'>BIM Adoption Projects</div></div></div></a></div></div><a class='scf' style='cursor:pointer'><img src='http://www.bimlab.com/bimlap/Uploads/01582364741.jpg' width='100%'></a></div>";
																			html+="<div onmouseover='OnMouseIn (this)' onmouseout='OnMouseOut (this)' class='brick' style='width:"+w*220+"px;'><div id='i{01582370015.jpg}' class='port-caption' name='caption'><div style='font-size:30px;text-align:center;color:white;height:100%;width:100%;position:absolute;'><a class='lnk' href='project-details.php?id=3'><div style='display: table; height: 100%; width: 100%; overflow: hidden;'><div style='display: table-cell; vertical-align: middle;'><div>BIM Adoption</div><br><div style='font-size: 22px'>BIM Adoption Projects</div></div></div></a></div></div><a class='scf' style='cursor:pointer'><img src='http://www.bimlab.com/bimlap/Uploads/01582370015.jpg' width='100%'></a></div>";
																			html+="<div onmouseover='OnMouseIn (this)' onmouseout='OnMouseOut (this)' class='brick' style='width:"+w*220+"px;'><div id='i{11582368679.jpg}' class='port-caption' name='caption'><div style='font-size:30px;text-align:center;color:white;height:100%;width:100%;position:absolute;'><a class='lnk' href='project-details.php?id=4'><div style='display: table; height: 100%; width: 100%; overflow: hidden;'><div style='display: table-cell; vertical-align: middle;'><div>BIM Adoption</div><br><div style='font-size: 22px'>BIM Adoption Projects</div></div></div></a></div></div><a class='scf' style='cursor:pointer'><img src='http://www.bimlab.com/bimlap/Uploads/11582368679.jpg' width='100%'></a></div>";
																			html+="<div onmouseover='OnMouseIn (this)' onmouseout='OnMouseOut (this)' class='brick' style='width:"+w*220+"px;'><div id='i{11582366258.jpg}' class='port-caption' name='caption'><div style='font-size:30px;text-align:center;color:white;height:100%;width:100%;position:absolute;'><a class='lnk' href='project-details.php?id=5'><div style='display: table; height: 100%; width: 100%; overflow: hidden;'><div style='display: table-cell; vertical-align: middle;'><div>BIM Adoption</div><br><div style='font-size: 22px'>BIM Adoption Projects</div></div></div></a></div></div><a class='scf' style='cursor:pointer'><img src='http://www.bimlab.com/bimlap/Uploads/11582366258.jpg' width='100%'></a></div>";
																			html+="<div onmouseover='OnMouseIn (this)' onmouseout='OnMouseOut (this)' class='brick' style='width:"+w*220+"px;'><div id='i{01582369973.jpg}' class='port-caption' name='caption'><div style='font-size:30px;text-align:center;color:white;height:100%;width:100%;position:absolute;'><a class='lnk' href='project-details.php?id=6'><div style='display: table; height: 100%; width: 100%; overflow: hidden;'><div style='display: table-cell; vertical-align: middle;'><div>BIM Adoption</div><br><div style='font-size: 22px'>BIM Adoption Projects</div></div></div></a></div></div><a class='scf' style='cursor:pointer'><img src='http://www.bimlab.com/bimlap/Uploads/01582369973.jpg' width='100%'></a></div>";
																			html+="<div onmouseover='OnMouseIn (this)' onmouseout='OnMouseOut (this)' class='brick' style='width:"+w*220+"px;'><div id='i{41582366811.jpg}' class='port-caption' name='caption'><div style='font-size:30px;text-align:center;color:white;height:100%;width:100%;position:absolute;'><a class='lnk' href='project-details.php?id=7'><div style='display: table; height: 100%; width: 100%; overflow: hidden;'><div style='display: table-cell; vertical-align: middle;'><div>BIM Adoption</div><br><div style='font-size: 22px'>BIM Adoption Projects</div></div></div></a></div></div><a class='scf' style='cursor:pointer'><img src='http://www.bimlab.com/bimlap/Uploads/41582366811.jpg' width='100%'></a></div>";
																			html+="<div onmouseover='OnMouseIn (this)' onmouseout='OnMouseOut (this)' class='brick' style='width:"+w*220+"px;'><div id='i{31582364750.jpg}' class='port-caption' name='caption'><div style='font-size:30px;text-align:center;color:white;height:100%;width:100%;position:absolute;'><a class='lnk' href='project-details.php?id=8'><div style='display: table; height: 100%; width: 100%; overflow: hidden;'><div style='display: table-cell; vertical-align: middle;'><div>BIM Adoption</div><br><div style='font-size: 22px'>BIM Adoption Projects</div></div></div></a></div></div><a class='scf' style='cursor:pointer'><img src='http://www.bimlab.com/bimlap/Uploads/31582364750.jpg' width='100%'></a></div>";
																			html+="<div onmouseover='OnMouseIn (this)' onmouseout='OnMouseOut (this)' class='brick' style='width:"+w*220+"px;'><div id='i{01545145952.jpg}' class='port-caption' name='caption'><div style='font-size:30px;text-align:center;color:white;height:100%;width:100%;position:absolute;'><a class='lnk' href='project-details.php?id=9'><div style='display: table; height: 100%; width: 100%; overflow: hidden;'><div style='display: table-cell; vertical-align: middle;'><div>The Landmark, Parcel 05</div><br><div style='font-size: 22px'>Retail</div></div></div></a></div></div><a class='scf' style='cursor:pointer'><img src='http://www.bimlab.com/bimlap/Uploads/01545145952.jpg' width='100%'></a></div>";
																			html+="<div onmouseover='OnMouseIn (this)' onmouseout='OnMouseOut (this)' class='brick' style='width:"+w*220+"px;'><div id='i{51545146169.jpg}' class='port-caption' name='caption'><div style='font-size:30px;text-align:center;color:white;height:100%;width:100%;position:absolute;'><a class='lnk' href='project-details.php?id=10'><div style='display: table; height: 100%; width: 100%; overflow: hidden;'><div style='display: table-cell; vertical-align: middle;'><div>The Landmark, Parcel 20</div><br><div style='font-size: 22px'>Retail</div></div></div></a></div></div><a class='scf' style='cursor:pointer'><img src='http://www.bimlab.com/bimlap/Uploads/51545146169.jpg' width='100%'></a></div>";
																			html+="<div onmouseover='OnMouseIn (this)' onmouseout='OnMouseOut (this)' class='brick' style='width:"+w*220+"px;'><div id='i{41545146925.jpg}' class='port-caption' name='caption'><div style='font-size:30px;text-align:center;color:white;height:100%;width:100%;position:absolute;'><a class='lnk' href='project-details.php?id=11'><div style='display: table; height: 100%; width: 100%; overflow: hidden;'><div style='display: table-cell; vertical-align: middle;'><div>The Landmark, Parcel 10</div><br><div style='font-size: 22px'>Retail</div></div></div></a></div></div><a class='scf' style='cursor:pointer'><img src='http://www.bimlab.com/bimlap/Uploads/41545146925.jpg' width='100%'></a></div>";
																			html+="<div onmouseover='OnMouseIn (this)' onmouseout='OnMouseOut (this)' class='brick' style='width:"+w*220+"px;'><div id='i{21545147949.jpg}' class='port-caption' name='caption'><div style='font-size:30px;text-align:center;color:white;height:100%;width:100%;position:absolute;'><a class='lnk' href='project-details.php?id=12'><div style='display: table; height: 100%; width: 100%; overflow: hidden;'><div style='display: table-cell; vertical-align: middle;'><div>The Landmark, Parcel 32</div><br><div style='font-size: 22px'>Retail</div></div></div></a></div></div><a class='scf' style='cursor:pointer'><img src='http://www.bimlab.com/bimlap/Uploads/21545147949.jpg' width='100%'></a></div>";
																			html+="<div onmouseover='OnMouseIn (this)' onmouseout='OnMouseOut (this)' class='brick' style='width:"+w*220+"px;'><div id='i{11440409987.jpg}' class='port-caption' name='caption'><div style='font-size:30px;text-align:center;color:white;height:100%;width:100%;position:absolute;'><a class='lnk' href='project-details.php?id=13'><div style='display: table; height: 100%; width: 100%; overflow: hidden;'><div style='display: table-cell; vertical-align: middle;'><div>Hyundai Showroom</div><br><div style='font-size: 22px'>Retail</div></div></div></a></div></div><a class='scf' style='cursor:pointer'><img src='http://www.bimlab.com/bimlap/Uploads/11440409987.jpg' width='100%'></a></div>";
																			html+="<div onmouseover='OnMouseIn (this)' onmouseout='OnMouseOut (this)' class='brick' style='width:"+w*220+"px;'><div id='i{31545141224.jpg}' class='port-caption' name='caption'><div style='font-size:30px;text-align:center;color:white;height:100%;width:100%;position:absolute;'><a class='lnk' href='project-details.php?id=14'><div style='display: table; height: 100%; width: 100%; overflow: hidden;'><div style='display: table-cell; vertical-align: middle;'><div>The Lobby Restaurant Lounge</div><br><div style='font-size: 22px'>Restaurants</div></div></div></a></div></div><a class='scf' style='cursor:pointer'><img src='http://www.bimlab.com/bimlap/Uploads/31545141224.jpg' width='100%'></a></div>";
																			html+="<div onmouseover='OnMouseIn (this)' onmouseout='OnMouseOut (this)' class='brick' style='width:"+w*220+"px;'><div id='i{51545142581.jpg}' class='port-caption' name='caption'><div style='font-size:30px;text-align:center;color:white;height:100%;width:100%;position:absolute;'><a class='lnk' href='project-details.php?id=15'><div style='display: table; height: 100%; width: 100%; overflow: hidden;'><div style='display: table-cell; vertical-align: middle;'><div>Palma Restaurant</div><br><div style='font-size: 22px'>Restaurants</div></div></div></a></div></div><a class='scf' style='cursor:pointer'><img src='http://www.bimlab.com/bimlap/Uploads/51545142581.jpg' width='100%'></a></div>";
																			html+="<div onmouseover='OnMouseIn (this)' onmouseout='OnMouseOut (this)' class='brick' style='width:"+w*220+"px;'><div id='i{31582371875.jpg}' class='port-caption' name='caption'><div style='font-size:30px;text-align:center;color:white;height:100%;width:100%;position:absolute;'><a class='lnk' href='project-details.php?id=16'><div style='display: table; height: 100%; width: 100%; overflow: hidden;'><div style='display: table-cell; vertical-align: middle;'><div>Peony</div><br><div style='font-size: 22px'>Restaurants</div></div></div></a></div></div><a class='scf' style='cursor:pointer'><img src='http://www.bimlab.com/bimlap/Uploads/31582371875.jpg' width='100%'></a></div>";
																			html+="<div onmouseover='OnMouseIn (this)' onmouseout='OnMouseOut (this)' class='brick' style='width:"+w*220+"px;'><div id='i{01582367948.png}' class='port-caption' name='caption'><div style='font-size:30px;text-align:center;color:white;height:100%;width:100%;position:absolute;'><a class='lnk' href='project-details.php?id=17'><div style='display: table; height: 100%; width: 100%; overflow: hidden;'><div style='display: table-cell; vertical-align: middle;'><div>Haider Murad Villa</div><br><div style='font-size: 22px'>Residential</div></div></div></a></div></div><a class='scf' style='cursor:pointer'><img src='http://www.bimlab.com/bimlap/Uploads/01582367948.png' width='100%'></a></div>";
																			html+="<div onmouseover='OnMouseIn (this)' onmouseout='OnMouseOut (this)' class='brick' style='width:"+w*220+"px;'><div id='i{21440368399.jpg}' class='port-caption' name='caption'><div style='font-size:30px;text-align:center;color:white;height:100%;width:100%;position:absolute;'><a class='lnk' href='project-details.php?id=18'><div style='display: table; height: 100%; width: 100%; overflow: hidden;'><div style='display: table-cell; vertical-align: middle;'><div>Sakkijha Private Residence</div><br><div style='font-size: 22px'>Residential</div></div></div></a></div></div><a class='scf' style='cursor:pointer'><img src='http://www.bimlab.com/bimlap/Uploads/21440368399.jpg' width='100%'></a></div>";
																			html+="<div onmouseover='OnMouseIn (this)' onmouseout='OnMouseOut (this)' class='brick' style='width:"+w*220+"px;'><div id='i{41440369338.jpg}' class='port-caption' name='caption'><div style='font-size:30px;text-align:center;color:white;height:100%;width:100%;position:absolute;'><a class='lnk' href='project-details.php?id=19'><div style='display: table; height: 100%; width: 100%; overflow: hidden;'><div style='display: table-cell; vertical-align: middle;'><div>Al Battikhi Private Residence</div><br><div style='font-size: 22px'>Residential</div></div></div></a></div></div><a class='scf' style='cursor:pointer'><img src='http://www.bimlab.com/bimlap/Uploads/41440369338.jpg' width='100%'></a></div>";
																			html+="<div onmouseover='OnMouseIn (this)' onmouseout='OnMouseOut (this)' class='brick' style='width:"+w*220+"px;'><div id='i{31545144802.jpg}' class='port-caption' name='caption'><div style='font-size:30px;text-align:center;color:white;height:100%;width:100%;position:absolute;'><a class='lnk' href='project-details.php?id=20'><div style='display: table; height: 100%; width: 100%; overflow: hidden;'><div style='display: table-cell; vertical-align: middle;'><div>Abu Ghoush Villa</div><br><div style='font-size: 22px'>Residential</div></div></div></a></div></div><a class='scf' style='cursor:pointer'><img src='http://www.bimlab.com/bimlap/Uploads/31545144802.jpg' width='100%'></a></div>";
																			html+="<div onmouseover='OnMouseIn (this)' onmouseout='OnMouseOut (this)' class='brick' style='width:"+w*220+"px;'><div id='i{01545142793.jpg}' class='port-caption' name='caption'><div style='font-size:30px;text-align:center;color:white;height:100%;width:100%;position:absolute;'><a class='lnk' href='project-details.php?id=21'><div style='display: table; height: 100%; width: 100%; overflow: hidden;'><div style='display: table-cell; vertical-align: middle;'><div>Al Hourani Mosque</div><br><div style='font-size: 22px'>Religious</div></div></div></a></div></div><a class='scf' style='cursor:pointer'><img src='http://www.bimlab.com/bimlap/Uploads/01545142793.jpg' width='100%'></a></div>";
																			html+="<div onmouseover='OnMouseIn (this)' onmouseout='OnMouseOut (this)' class='brick' style='width:"+w*220+"px;'><div id='i{01545143673.jpg}' class='port-caption' name='caption'><div style='font-size:30px;text-align:center;color:white;height:100%;width:100%;position:absolute;'><a class='lnk' href='project-details.php?id=22'><div style='display: table; height: 100%; width: 100%; overflow: hidden;'><div style='display: table-cell; vertical-align: middle;'><div>Health Center Prototype</div><br><div style='font-size: 22px'>healthcare</div></div></div></a></div></div><a class='scf' style='cursor:pointer'><img src='http://www.bimlab.com/bimlap/Uploads/01545143673.jpg' width='100%'></a></div>";
																			html+="<div onmouseover='OnMouseIn (this)' onmouseout='OnMouseOut (this)' class='brick' style='width:"+w*220+"px;'><div id='i{11545148453.jpg}' class='port-caption' name='caption'><div style='font-size:30px;text-align:center;color:white;height:100%;width:100%;position:absolute;'><a class='lnk' href='project-details.php?id=23'><div style='display: table; height: 100%; width: 100%; overflow: hidden;'><div style='display: table-cell; vertical-align: middle;'><div>Al Waseel Resort and Spa</div><br><div style='font-size: 22px'>Recreational</div></div></div></a></div></div><a class='scf' style='cursor:pointer'><img src='http://www.bimlab.com/bimlap/Uploads/11545148453.jpg' width='100%'></a></div>";
																			html+="<div onmouseover='OnMouseIn (this)' onmouseout='OnMouseOut (this)' class='brick' style='width:"+w*220+"px;'><div id='i{41582452212.jpg}' class='port-caption' name='caption'><div style='font-size:30px;text-align:center;color:white;height:100%;width:100%;position:absolute;'><a class='lnk' href='project-details.php?id=35'><div style='display: table; height: 100%; width: 100%; overflow: hidden;'><div style='display: table-cell; vertical-align: middle;'><div>Khalid Al Saeed Villa</div><br><div style='font-size: 22px'>Residential</div></div></div></a></div></div><a class='scf' style='cursor:pointer'><img src='http://www.bimlab.com/bimlap/Uploads/41582452212.jpg' width='100%'></a></div>";
																			html+="<div onmouseover='OnMouseIn (this)' onmouseout='OnMouseOut (this)' class='brick' style='width:"+w*220+"px;'><div id='i{01582453382.jpg}' class='port-caption' name='caption'><div style='font-size:30px;text-align:center;color:white;height:100%;width:100%;position:absolute;'><a class='lnk' href='project-details.php?id=36'><div style='display: table; height: 100%; width: 100%; overflow: hidden;'><div style='display: table-cell; vertical-align: middle;'><div>BIM Adoptation</div><br><div style='font-size: 22px'>BIM Adoptation projects</div></div></div></a></div></div><a class='scf' style='cursor:pointer'><img src='http://www.bimlab.com/bimlap/Uploads/01582453382.jpg' width='100%'></a></div>";
																$("#freewall").html(html);

							var wall = new Freewall("#freewall");
							wall.reset({
								selector: '.brick',
								animate: true,
								cellW: 150,
								cellH: 'auto',
								onResize: function() {
									wall.fitWidth();
								}
							});

							var images = wall.container.find('.brick');
							images.find('img').load(function() {
								wall.fitWidth();
							});
							wall.refresh();
						});

						</script>

<div id="cboxOverlay" style="opacity: 0.9; cursor: pointer; visibility: visible; display: none;"></div>
<div id="wrappp" style="z-index:9999; position: absolute;text-align:center;width:100%;height:100%;display:none">
<div class="wrp">
<div><img id="target-image" src=""/>
</div>
<div style="width: 100%;">
<span id="tit" style="font-weight:bold;font-size:12pt"></span>
<button type="button" id="cboxClose" style="background: url('img/controls.png') no-repeat scroll -25px 0 rgba(0, 0, 0, 0);
    bottom: 0;
    height: 25px;
    position: relative;
    right: 0;
    text-indent: -9999px;
    width: 25px;margin-left:10px;">close</button>
</div>
</div></div>

</body></html>
