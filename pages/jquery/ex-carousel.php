<?php
$parentNav="jquery-home";
$pageName="jquery-carousel-1";
$category="jquery-carousel";
?>
<?php include '../../includes/header.php'; ?>
 <style rel="stylesheet" type="text/css" />
.my_carousel { position: relative; width: 760px; margin: 0px; background-color: #fff; margin: 30px auto 20px auto; }

.carousel_container { height: 340px; margin: 0px; background: #a00 url(../../../../assets/img/carousel-1/background.jpg) no-repeat 0px 0px; }
#carousel { margin: 0px auto 0px auto; width: 600px; height: 300px; }
#carousel img { width: 300px; height: 225px; cursor: pointer; }
.nextItem { position: absolute; top: 230px; left: 0px; z-index: 1001; cursor: pointer; }
.prevItem { position: absolute; top: 230px; right: 0px; z-index: 1002; cursor: pointer; }

.caption_container { width: 435px; border-left: 3px solid #713e1b; margin: 0px 0px 0px 165px; padding: 0px 0px 0px 20px; }
#captions h2 { font-family: Georgia; font-size: 32px; font-weight: normal; margin: 0px 0px 5px 0px; color: #6d8824; }
#captions p { font-family: Arial; font-size: 14px; color: #444; margin: 0px 0px 0px 3px; }

.leaves { position: absolute; top: 270px; left: 102px; z-index: 1000; }

.carousel_data { display: none; }
</style>
<script type="text/javascript">
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());
</script>


<section id="rightCol1">
<!-- PAGE CODE STARTS HERE-->

<h1>JQUERY Carousel</h1>

<!-- Carousel -->
		<div class="my_carousel">
        
			<!-- Carousel Containter -->
			<div class="carousel_container">
				<div id="carousel"></div>
				<img class="nextItem" src="../../assets/img/carousel-1/arrow_left.png"/>
				<img class="prevItem" src="../../assets/img/carousel-1/arrow_right.png"/>
			</div>
			
            
            
			<!-- Caption Container -->
			<div class="caption_container">
				<div id="captions"></div>
			</div>
			
			<img class="leaves" src="../../assets/img/carousel-1/leaves.png"/>
			
            
            
            
			<!-- Carousel Data -->
			<div class="carousel_data">
				
				<!-- begin items -->

				<!-- Item -->
				<div class="carousel_item">
					<div class="image">
						<img src="../../assets/img/carousel-1/teapots_green.png" alt="teapot_green" />
					</div>
					<div class="caption">
						<h2>Green Teapot</h2>
						<p>Duis aute irure dolor in reprehenderit in voluptate cat.</p>
					</div>
				</div>
				
                
                
				<!-- Item -->
				<div class="carousel_item">
					<div class="image">
						<img src="../../assets/img/carousel-1/teapots_steel.png" alt="teapot_steel" />
					</div>
					<div class="caption">
						<h2>Steel Teapot</h2>
						<p>Voluptate velit esse cillum dolore eu fugiat nulla pariatur ollit anim id est laborum ipsum dolor sit amet consectetur adipisicing.</p>
					</div>
				</div>
				
                
                
				<!-- Item -->
				<div class="carousel_item">
					<div class="image">
						<img src="../../assets/img/carousel-1/teapots_gold.png" alt="teapot_gold" />
					</div>
					<div class="caption">
						<h2>Golden Teapot</h2>
						<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
					</div>
				</div>			
				
                
                
				<!-- Item -->
				<div class="carousel_item">
					<div class="image">
						<img src="../../assets/img/carousel-1/teapots_orange.png" alt="teapot_orange" />
					</div>
					<div class="caption">
						<h2>Orange Teapot</h2>
						<p>Lorem ipsum dolor dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
				
                
                
				<!-- Item -->
				<div class="carousel_item">
					<div class="image">
						<img src="../../assets/img/carousel-1/teapots_blue.png" alt="teapot_blue" />
					</div>
					<div class="caption">
						<h2>Blue Teapot</h2>
						<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehender. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt nostrud exercitation ullamco laboris ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
				
                
                
				<!-- Item -->
				<div class="carousel_item">
					<div class="image">
						<img src="../../assets/img/carousel-1/teapots_iron.png" alt="teapot_iron" />
					</div>
					<div class="caption">
						<h2>Iron Teapot</h2>
						<p>Ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehender.</p>
					</div>
				</div>
							
                            
                            	
				<!-- Item -->
				<div class="carousel_item">
					<div class="image">
						<img src="../../assets/img/carousel-1/teapots_clay.png" alt="teapot_clay" />
					</div>
					<div class="caption">
						<h2>Clay Teapot</h2>
						<p>Duis aute irure dolor in reprehender. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt nostrud exercitation ullamco.</p>
					</div>
				</div>
				
                
                
				<!-- end items -->
				
			</div>			
		</div>
        
        

<blockquote>
<p>
//CSS

.my_carousel { position: relative; width: 760px; margin: 0px; background-color: #fff; margin: 30px auto 20px auto; }

.carousel_container { height: 340px; margin: 0px; background: #a00 url(../../images/background.jpg) no-repeat 0px 0px; }
#carousel { margin: 0px auto 0px auto; width: 600px; height: 300px; }
#carousel img { width: 300px; height: 225px; cursor: pointer; }
.nextItem { position: absolute; top: 230px; left: 0px; z-index: 1001; cursor: pointer; }
.prevItem { position: absolute; top: 230px; right: 0px; z-index: 1002; cursor: pointer; }

.caption_container { width: 435px; border-left: 3px solid #713e1b; margin: 0px 0px 0px 165px; padding: 0px 0px 0px 20px; }
#captions h2 { font-family: Georgia; font-size: 32px; font-weight: normal; margin: 0px 0px 5px 0px; color: #6d8824; }
#captions p { font-family: Arial; font-size: 14px; color: #444; margin: 0px 0px 0px 3px; }

.leaves { position: absolute; top: 270px; left: 102px; z-index: 1000; }

.carousel_data { display: none; }


// JavaScript Document
// Written by Chris Converse for lynda.com

    var startingItem = 3;


// ATTACH IMAGES TO CAROUSEL
// EACH TIME WE FIND .carousel_item INSIDE .carousel_data 
// TARGET #carousel AND APPEND ANY DIV WITH .image AND ADD THE HTML


    $(document).ready(function() {
        $('.carousel_data .carousel_item').each(function(){	
            $('#carousel').append( $(this).find('.image').html() );
        });
        
        // ADD THE createCarousel(); FUNCTION
        createCarousel();
        
        // ADD THE createCarousel(); FUNCTION
        showCaption();
    });



// CREATE THE CAROUSEL
// TARGET div#carousel AND ADD .roundabout SETTINGS

    function createCarousel(){
        $('div#carousel').roundabout({
           
            startingChild: window.startingItem,		// STARTING ITEM IS SET AT THE TOP TO 3
            childSelector: 'img',  					// TURN ALL IMG INTO THE ROUNDABOUT
            tilt: -4.5,								// ADD A TILT
            minOpacity:1,							// SET BACKGROUND TEA POTS
            minScale: .45,							// SCALE FOR BACKGROUND IMAGES
            duration: 1200,							// SET SPEED
            
            // ADD CLICK FUNCTIONS
            clickToFocus: true,						
            clickToFocusCallback: showCaption
        
        });
        
        // ACTIVATE THE createCustomButtons(); functions
        createCustomButtons();
    }


// CREATING THE BUTTONS

function createCustomButtons(){
	
	$('.nextItem').click(function(){
		hideCaption();
		$('div#carousel').roundabout('animateToNextChild', showCaption);
	});
	
	$('.prevItem').click(function(){
		hideCaption();
		$('div#carousel').roundabout('animateToPreviousChild', showCaption);
	});
	
	$('div#carousel img').click(function(){
		hideCaption();
	});
}


// CREATE HIDE CAPTION FUNCTION

function hideCaption(){
	$('#captions').animate({'opacity':0}, 250);
}


// CREATE SHOW CAPTION FUNCTION

function showCaption(){
	
    // GET WHICH CHILD IMG IS IN FOCUS
	var childInFocus = $('div#carousel').data('roundabout').childInFocus
	
    // SET CAPTION TO SAME AS childInFocus
    var setCaption = $('.carousel_data .carousel_item .caption:eq('+childInFocus+')').html();
	
    //ADD setCaption TO #captions
    $('#captions').html(setCaption);
    
	//ANIMATE CAPTION BOX IN TO VIEW
	var newHeight = $('#captions').height()+'px';
	$('.caption_container').animate({'height':newHeight}, 500, function(){
		$('#captions').animate({'opacity':1}, 250);	
	});
	
}
</p>
</blockquote>
<!-- PAGE CODE ENDS HERE-->
</section><!-- END RIGHTCOL1 -->
<script src="../../assets/js/vendor/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="../../assets/js/plugins/carousel.js"></script>
<script type="text/javascript" src="../../assets/js/plugins/jquery.roundabout.min.js"></script>
<?php include '../../includes/footer.php'; ?>  