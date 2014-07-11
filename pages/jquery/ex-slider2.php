<?php
$parentNav="jquery-home";
$pageName="jquery-slider-1";
?>
<?php include '../../includes/header.php'; ?>
 <style rel="stylesheet" type="text/css" />

@charset "UTF-8";

body { padding: 35px;background-color: #fff; font-family: Arial; color: #555; font-size: .75em; }


.marquee_panels {
display: none;
}
.marquee_container { position: relative; width: 700px; height: 350px; overflow: hidden; margin: 0px 0px 30px 0px; padding: 0px; }
.marquee_photos { position: absolute; top: 0px; left: 0px; display: none; }
.marquee_caption {
	width: 700px;
	margin: 0px;
	padding: 15px 0px 10px 0px;
	color: #fff;
	position: absolute;
	top: 340px;
	left: 0px;
	background: url(../../assets/img/slider1/template/marquee_caption.png) 0px 0px;
}
.marquee_caption_content { width: 410px; padding: 0px 0px 0px 25px; }
.marquee_caption h2 { margin: 0px 0px 10px 0px; color: #fff; font-size: 1.25em; font-weight: normal; text-transform: uppercase; }
.marquee_caption p { margin: 0px 0px 12px 0px; color: #fff; }
.marquee_caption a { color: #ffc600; }
.marquee_caption a:hover { color: #fff; }
.marquee_flag { float: left; margin-right: 10px; }

.marquee_nav { position: absolute; width: 240px; top: 310px; right: 20px; text-align: right; }
.marquee_nav a {
	display: inline-block;
	width: 18px;
	height: 18px;
	margin-left: 15px;
	background: url(../../assets/img/slider1/template/nav_buttons.png) no-repeat 0px 0px;
	cursor: pointer;
}
.marquee_nav a:hover { background-position: -25px 0px; }
.marquee_nav a.selected { background-position: -50px 0px; }

.marquee_container.autoplay .marquee_nav a { opacity: .4; }
.marquee_container.autoplay .marquee_nav a.selected { opacity: 1; }


</style>

<section id="rightCol1">
<!-- PAGE CODE STARTS HERE-->
<h1>Slider 2</h1>

	
				<div class="marquee_container autoplay">
			<div class="marquee_photos"></div>
			<div class="marquee_caption">
				<div class="marquee_caption_content"></div>
			</div>
			<div class="marquee_nav"></div>
		</div>
		<div class="autoPlay"></div>
		<div class="currentPanel"></div>
		<div class="totalPanels"></div>
		<div class="timePassed"></div>
		<div class="timeToChange"></div>
		
		<div class="marquee_panels">
			<!-- Panel -->
			<div class="marquee_panel">
				<img class="marquee_panel_photo" src="../../assets/img/slider1/photos/london.jpg" alt="London" width="700" />
				<div class="marquee_panel_caption">
					<img class="marquee_flag" src="../../assets/img/slider1/template/flag_england.jpg" width="20" height="13" />
					<h2>London</h2>
					<p>Fusce neque dolor adipiscing sed consectetuer et lacinia sit amet quam. Suspendisse wisi quam consectetuer in blandit sed suscipit eu eros.</p>
					<p><a href="#">Check it out!</a></p>
				</div>
			</div>
			<!-- Panel -->
			<div class="marquee_panel">
				<img class="marquee_panel_photo" src="../../assets/img/slider1/photos/milan.jpg" alt="Milan" width="700" />
				<div class="marquee_panel_caption">
					<img class="marquee_flag" src="../../assets/img/slider1/template/flag_italy.jpg" width="20" height="13" />
					<h2>Mil&aacute;n</h2>
					<p>Fusce neque dolor adipiscing sed consectetuer et lacinia sit amet quam. Suspendisse wisi quam consectetuer in blandit sed suscipit eu eros.</p>
					<p><a href="#">Check it out!</a></p>
				</div>
			</div>
			<!-- Panel -->
			<div class="marquee_panel">
				<img class="marquee_panel_photo" src="../../assets/img/slider1/photos/staugustine.jpg" alt="St. Augustine" width="700" />
				<div class="marquee_panel_caption">
					<img class="marquee_flag" src="../../assets/img/slider1/template/flag_usa.jpg" width="20" height="13" />
					<h2>St. Augustine</h2>
					<p>Fusce neque dolor adipiscing sed consectetuer et lacinia sit amet quam. Suspendisse wisi quam consectetuer in blandit sed suscipit eu eros.</p>
					<p><a href="#">Check it out!</a></p>
				</div>
			</div>
			<!-- Panel -->
			<div class="marquee_panel">
				<img class="marquee_panel_photo" src="../../assets/img/slider1/photos/montreal.jpg" alt="Montreal" width="700" />
				<div class="marquee_panel_caption">
					<img class="marquee_flag" src="../../assets/img/slider1/template/flag_canada.jpg" width="20" height="13" />
					<h2>Montr&eacute;al</h2>
					<p>Fusce neque dolor adipiscing sed consectetuer et lacinia sit amet quam. Suspendisse wisi quam consectetuer in blandit sed suscipit eu eros.</p>
					<p><a href="#">Check it out!</a></p>
				</div>
			</div>
		</div>
		
        
<blockquote>

</blockquote>
<!-- PAGE CODE ENDS HERE-->
</section><!-- END RIGHTCOL1 -->
<script type="text/javascript" src="../../assets/js/vendor/jquery-1.6.min.js"></script>
<script type="text/javascript" src="../../assets/js/plugins/jquery.imgpreload.min.js"></script>

<script type="text/javascript">
/*  JavaScript Document                      */
/*  Written by Chris Converse for lynda.com  */

var currentPanel = 1;
var totalPanels = 0;
var autoPlay = true;
var timePassed = 0;
var timeToChange = 6;
var photoWidth = 0;

$(document).ready(function(){
	
	// Set up debugger
	/* debug */ $('.autoPlay').html('autoPlay = '+window.autoPlay);
	/* debug */ $('.timePassed').html('timePassed = '+window.timePassed);
	/* debug */ $('.timeToChange').html('timeToChange = '+window.timeToChange);
	/* debug */ $('.currentPanel').html('currentPanel = '+window.currentPanel);
	/* debug */ $('.wrapPhotos').html('wrapPhotos = '+window.wrapPhotos);
	setInterval(autoAdvance, 1000);
	
	window.photoWidth = $('.marquee_container').width();  // NEW
	
	$('.marquee_container').hover(
		function(){
			window.autoPlay = false;
			$(this).removeClass('autoplay');
		},
		function(){
			window.autoPlay = true; window.timePassed = 0;
			$(this).addClass('autoplay');
		}
	);
	
	
	// Generate Photo Lineup
	$('img.marquee_panel_photo').each(function(index){
		var photoWidth = $('.marquee_container').width();
		var photoPosition = index * photoWidth;
		$('.marquee_photos').append('<img class="marquee_photo" style="left: '+photoPosition+'" src="'+$(this).attr('src')+'" alt="'+$(this).attr('alt')+'" width="700" height="350" />');
		$('.marquee_photos').css('width', photoPosition+photoWidth);
	});
	
	
	
	// Generate Navigation links
	$('.marquee_panels .marquee_panel').each(function(index){
		$('.marquee_nav').append('<a class="marquee_nav_item" ></a>');
		totalPanels = index + 1;
		$('.totalPanels').html('totalPanels = '+totalPanels);
	});
	
	// Generate Photo Lineup
	$('img.marquee_panel_photo').each(function(index){
		$('.marquee_photos').append('<img class="marquee_photo" src="'+$(this).attr('src')+'" alt="'+$(this).attr('alt')+'" width="700" height="350" />');
		$('.marquee_photos').css('width', photoPosition+photoWidth);
	});
	
	// Duplicate first and last photos and add place them at the beginning and end of the lineup
	$('.marquee_photos img:last-child').clone().insertBefore('.marquee_photos img:first-child');
	$('.marquee_photos img:nth-child(2)').clone().insertAfter('.marquee_photos img:last-child');
	
	// Position all photos
	$('.marquee_photos img').each(function(index){
		var photoPosition = index * window.photoWidth;
		$(this).css('left',photoPosition+'px');
		$('.marquee_photos').css('width',photoPosition+window.photoWidth+'px');
	});
	
	// position second photo as first
	$('.marquee_photos').css('left','-'+window.photoWidth+'px');

	// Set up Navigation Links
	$('.marquee_nav a.marquee_nav_item').click(function(test){
		// Set the navigation state
		$('.marquee_nav a.marquee_nav_item').removeClass('selected');
		$(this).addClass('selected');
		var navClicked = $(this).index();
		var distanceToMove = window.photoWidth*(-1);
		var newPhotoPosition = (navClicked*distanceToMove)-window.photoWidth + 'px';  //NEW subtract window.width
		var newCaption = $('.marquee_panel_caption').get(navClicked);
				
		// Animate photos
		if( window.currentPanel == window.totalPanels && navClicked == 0){
			newPhotoPosition = (window.photoWidth*(window.totalPanels+1)*-1)+'px';
			$('.marquee_photos').animate({left: newPhotoPosition}, 1000, function(){
				$('.marquee_photos').css('left','-'+window.photoWidth+'px');
			});
		}else if( window.currentPanel == 1 && navClicked == (window.totalPanels-1)){
			newPhotoPosition = '0px';
			$('.marquee_photos').animate({left: newPhotoPosition}, 1000, function(){
				$('.marquee_photos').css('left','-'+(window.photoWidth*window.totalPanels)+'px');
			});
		}else{
			$('.marquee_photos').animate({left: newPhotoPosition}, 1000);
		}
		
		window.currentPanel = navClicked + 1;
		/* debug */ $('.currentPanel').html('currentPanel = '+window.currentPanel);  //.....................
		
		// Animate the caption
		$('.marquee_caption').animate({top: '340px'}, 500, function(){
			var newHTML = $(newCaption).html();
			$('.marquee_caption_content').html(newHTML);
			setCaption();
		});
	});
	
	// Preload all images, then initialize marquee
	$('.marquee_panels img').imgpreload(function(){
		initializeMarquee();
	});

});

function autoAdvance(){
	
	if (window.timePassed == window.timeToChange){
		window.timePassed = 0;
		if (window.autoPlay == true){
			if(window.currentPanel == window.totalPanels){
				$('.marquee_nav a.marquee_nav_item:nth-child(1)').trigger('click');
			}else{
				$('.marquee_nav a.marquee_nav_item:nth-child('+(window.currentPanel+1)+')').trigger('click');
			}
		}
	}else{
		window.timePassed += 1;
	}
	/* debug */ $('.timePassed').html('timePassed = '+window.timePassed);
	/* debug */ $('.autoPlay').html('autoPlay = '+window.autoPlay);

}

function initializeMarquee(){
	$('.marquee_caption_content').html(
		$('.marquee_panels .marquee_panel:first .marquee_panel_caption').html()
	);
	$('.marquee_nav a.marquee_nav_item:first').addClass('selected');
	$('.marquee_photos').fadeIn(1500);
	setCaption();
}

function setCaption(){
	var captionHeight = $('.marquee_caption').height();
	var marqueeHeight = $('.marquee_container').height();
	var newCaptionTop = marqueeHeight - captionHeight - 15;
	$('.marquee_caption').delay(100).animate({top: newCaptionTop}, 500);
}

</script>
<?php include '../../includes/footer.php'; ?>  