<?php
$parentNav="jquery-home";
$pageName="jquery-slider-2";
$category="jquery";
?>
<?php include '../../includes/header.php'; ?>
 <style rel="stylesheet" type="text/css" />
.marquee_panels { display: none; }
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
	background: url(../images/template/marquee_caption.png) 0px 0px;
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
	background: url(../images/template/nav_buttons.png) no-repeat 0px 0px;
	cursor: pointer;
}
.marquee_nav a:hover { background-position: -25px 0px; }
.marquee_nav a.selected { background-position: -50px 0px; }

.marquee_container.autoplay .marquee_nav a { opacity: .4; }
.marquee_container.autoplay .marquee_nav a.selected { opacity: 1; }
</style>

<section id="rightCol1">
<!-- PAGE CODE STARTS HERE-->
<h1>Slider 1</h1>


	<div class="marquee_container">
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

// CHANGES MADE

- CSS

.marquee_container.autoplay .marquee_nav a{
	opacity: .4;
	filter: alpha(opacity=40);
}

.marquee_container.autoplay .marquee_nav a.selected{
	opacity: 1;
	filter: alpha(opacity=100);
}



- HTML

div class="marquee_container autoplay">



- ADD THE ACTIONS PREVIEW AREA

	div class="autoPlay">< /div>
	div class="currentPanel">< /div>
	div class="totalPanels">< /div>
	div class="timePassed">< /div>
	div class="timeToChange">< /div>
	
	
		
- IN THE GLOBAL AREA FOR JAVASCRIPT SET UP SOME VARs

	var currentPanel = 1;
	var totalPanels = 0;
	var autoPlay = true;
	var timePassed = 0;
	var timeToChange = 3;
	var photoWidth = 0;


- Set up debugger

	// you can remove this later
	// to get the global var you need to type window.
	
	/* debug */ $('.autoPlay').html('autoPlay = '+window.autoPlay);
	/* debug */ $('.timePassed').html('timePassed = '+window.timePassed);
	/* debug */ $('.timeToChange').html('timeToChange = '+window.timeToChange);
	/* debug */ $('.currentPanel').html('currentPanel = '+window.currentPanel);
	/* debug */ $('.wrapPhotos').html('wrapPhotos = '+window.wrapPhotos);


</blockquote>
<!-- PAGE CODE ENDS HERE-->
</section><!-- END RIGHTCOL1 -->
<script src="../../assets/js/vendor/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="../../assets/js/plugins/jquery.imgpreload.min.js"></script>
<script type="text/javascript" src="../../assets/js/plugins/farinspace/jquery.imgpreload.min.js"></script>
<script type="text/javascript">

var currentPanel = 1;
var totalPanels = 0;
var autoPlay = true;
var timePassed = 0;
var timeToChange = 3;

function autoAdvance(){
	
	if (window.timePassed == window.timeToChange){
		window.timePassed = 0;
		if(window.currentPanel == window.totalPanels){
			currentPanel = 0;
		}
		if (autoPlay == true){
			$('.marquee_nav a.marquee_nav_item:nth-child('+(window.currentPanel+1)+')').trigger('click');
		}
	}else{
		window.timePassed += 1;
	}
	$('.timePassed').html('timePassed = '+window.timePassed);  //......................
	$('.autoPlay').html('autoPlay = '+window.autoPlay);  //......................
}

$(document).ready(function(){

	//NEW...................................................
	// Set up debugger
	/* debug */ $('.autoPlay').html('autoPlay = '+window.autoPlay);  //......................
	/* debug */ $('.timePassed').html('timePassed = '+window.timePassed);  //......................
	/* debug */ $('.timeToChange').html('timeToChange = '+window.timeToChange);  //......................
	/* debug */ $('.currentPanel').html('currentPanel = '+window.currentPanel);  //.....................
	setInterval(autoAdvance, 1000);
	
	//NEW..............................................

	//NEW....................
	
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
	
	//NEW...................


	// Generate Navigation links
	$('.marquee_panels .marquee_panel').each(function(index){
		$('.marquee_nav').append('<a class="marquee_nav_item" ></a>');
		totalPanels = index + 1;  //NEW..................................................................
		$('.totalPanels').html('totalPanels = '+totalPanels);  //......................
	});
	
	// Generate Photo Lineup
	$('img.marquee_panel_photo').each(function(index){
		var photoWidth = $('.marquee_container').width();
		var photoPosition = index * photoWidth;
		$('.marquee_photos').append('<img class="marquee_photo" style="left: '+photoPosition+'" src="'+$(this).attr('src')+'" alt="'+$(this).attr('alt')+'" width="700" height="350" />');
		$('.marquee_photos').css('width', photoPosition+photoWidth);
	});

	// Set up Navigation Links
	$('.marquee_nav a.marquee_nav_item').click(function(){
		
		// Set the navigation state
		$('.marquee_nav a.marquee_nav_item').removeClass('selected');
		$(this).addClass('selected');
		
		var navClicked = $(this).index();
		var marqueeWidth = $('.marquee_container').width();
		var distanceToMove = marqueeWidth*(-1);
		var newPhotoPosition = navClicked*distanceToMove + 'px';
		var newCaption = $('.marquee_panel_caption').get(navClicked);
		window.currentPanel = navClicked + 1;
		/* debug */ $('.currentPanel').html('currentPanel = '+window.currentPanel);  //.....................
		
		// Animate the photos and caption
		$('.marquee_photos').animate({left: newPhotoPosition}, 1000);
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