<?php
$parentNav="jquery-home";
$pageName="jquery-carousel-2";
$category="jquery-carousel";
?>
<?php include '../../includes/header.php'; ?>
      <style rel="stylesheet" type="text/css" />
		.my_carousel img{border:none;}
		.my_carousel h2, .my_carousel p, .my_carousel a{font-family:"Trebuchet MS", Helvetica, sans-serif; color: #1e1e1e; text-decoration: none; text-align:left; font-weight:normal;} 
		.my_carousel h2{font-size: 16px; line-height: 26px;} 
		.my_carousel p{font-size: 14px; color: #444444;} 
		
		#content-wrapper{width: 918px; margin: 0 auto; position: relative;}
		
	
        .my_carousel {
    		position: relative;
    		width: 100%;
		}
		
		#carousel-btns{
			display: block;
			height: 18px;
			left: 0;
			margin: 0 auto;
			position: absolute;
			right: 0;
			top: -100px;
			width: 210px;
    	}
		
		#carousel { height: 210px; margin: 165px auto 0; width: 90%;}
		#carousel img { width: 329px; height: 476px; cursor: pointer; }
		.nextItem, .prevItem { z-index: 150; position: absolute; top: 0px; cursor: pointer; width: 57px; height: 105px; }
		.nextItem {left: 40px;}
		.prevItem {right: 40px;}
		
		.roundabout-moveable-item {
			height: 380px;
			width: 276px;
			cursor: pointer;
			display:block;
		}
		
		.roundabout-moveable-item img {
			height: 100%;
			width: 100%;
		}
		
		.roundabout-in-focus {
			cursor: auto;
		}
		
		#carousel-descriptions {
			display:block;
			width:85%;
			margin:25px auto;
			padding:0;
			position: relative;
    		top: 100px;
		}
		#carousel-descriptions ul{
		 list-style: none; 
		}
		#carousel-descriptions li.desc {
			display:none;
			padding-bottom: 60px;
		}
		
		#carousel-descriptions li.current {
			display:block;
		}
	

		#carousel-controls {
			max-width:900px;
			width:auto;
			margin:0 auto;
			overflow:auto;
			border-collapse:collapse;
			text-align:center;
			top: 20px;
			position:relative;
		}
		
		#carousel-controls span {
			width:100px;
			display:inline-block;
			font-size:14px;
			text-align:center;
			margin:0 5px;
			padding:5px;
			cursor:pointer;
						
		}
		
		#carousel-controls .control {
			background-image:url(../../assets/img/carousel-2/non-active-btn.png);
			width: 7px;
			height:7px;
		}
		#carousel-controls .current {
			background-image:url(../../assets/img/carousel-2/active-btn.png);
			width: 7px;
			height:7px;
		}
		
		#ribbon{
			height: 132px;
			width:141px;
			top: 0px;
			position:absolute;	
			right:110px;	
		}
	
		.clearfix:before,
		.clearfix:after {
			content: " "; /* 1 */
			display: table; /* 2 */
		}
		
		.clearfix:after {
			clear: both;
		}
		
		/*
		 * For IE 6/7 only
		 * Include this rule to trigger hasLayout and contain floats.
		 */
		
		.clearfix {
			*zoom: 1;
		}

	</style> 
<section id="rightCol1">    	
	<!-- Carousel -->
		<div class="my_carousel">	
             <div id="carousel-controls">
                <span class="control current"></span>
                <span class="control"></span>
                <span class="control"></span>
                <span class="control"></span>
                <span class="control"></span>
            </div>
            <img class="nextItem" src="../../assets/img/carousel-2/arrow_left.png"/>
			<img class="prevItem" src="../../assets/img/carousel-2/arrow_right.png"/>
                
            <div id="carousel">
                <img src="../../assets/img/carousel-2/Machines-lattissima.png" alt="" class="slide" />
                <img src="../../assets/img/carousel-2/Machines-pixie.png" alt="" class="slide" />
                <img src="../../assets/img/carousel-2/Machines-citiz-2.png" alt="" class="slide" />
                <img src="../../assets/img/carousel-2/Machines-aeroccino.png" alt="" class="slide" />
                <img src="../../assets/img/carousel-2/Machines-u.png" alt="" class="slide" />
            </div>
      
            <ul id="carousel-descriptions">
                <li class="desc current">
                <img class="machine-title" src="../../assets/img/carousel-2/logo-latt.jpg"/></a>
                </li>
 <li class="desc current">
                <img class="machine-title" src="../../assets/img/carousel-2/logo-pixie.jpg"/></a>
                </li>
                 <li class="desc current">
                <img class="machine-title" src="../../assets/img/carousel-2/logo-citiz.jpg"/></a>
                </li>
                 <li class="desc current">
                <img class="machine-title" src="../../assets/img/carousel-2/logo-u.jpg"/></a>
                </li>
                 <li class="desc current">
                <img class="machine-title" src="../../assets/img/carousel-2/logo-pixie.jpg"/></a>
                </li>
               
            </ul>
        </div>

<!-- end content wrapper -->    
</section>	



  <!-- JS for jquery carousel 1 -->
        <script src="../../assets/js/vendor/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="../../assets/js/plugins/carousel.js"></script>
        <script type="text/javascript" src="../../assets/js/plugins/jquery.roundabout.min.js"></script>

    <script type="text/javascript">
    (function($) {
    
    var $descriptions = $('#carousel-descriptions').children('li'),
        $controls = $('#carousel-controls').find('span'),
        $carousel = $('#carousel').roundabout({
			childSelector:"img", 
		    tilt: 0,
			minOpacity:1,
			minZ: 50,
			autoplay: false,
			autoplayDuration:2000,
			minScale: 1,
			duration: 1200
		    })
			.on('focus', 'img', function() {
              var slideNum = $carousel.roundabout("getChildInFocus");
                
                $descriptions.add($controls).removeClass('current');
				
                $($descriptions.get(slideNum)).addClass('current');
                $($controls.get(slideNum)).addClass('current');
				
        });
   		
	
		$('#carousel')
		.bind('animationStart', function() {
			
			 var ua = $.browser;
			 if ( ua.msie && ua.version.slice(0,1) == "8" ) {
	 			hideCaptionIE8();
			 }else{
			    hideCaption();
			 }
		})
		.bind('animationEnd', function() {
			
			var ua = $.browser;
			 if ( ua.msie && ua.version.slice(0,1) == "8" ) {
	 			showCaptionIE8();
			 }else{
			    showCaption();
			 }
			
		});
				
		$('.nextItem').click(function(){
			
			var ua = $.browser;
			 if ( ua.msie && ua.version.slice(0,1) == "8" ) {
	 			hideCaptionIE8();
				$('div#carousel').roundabout('animateToNextChild', showCaptionIE8);
			 }else{
			    hideCaption();
				$('div#carousel').roundabout('animateToNextChild', showCaption);
			 }
			 
		});
		
		$('.prevItem').click(function(){
			
			var ua = $.browser;
			 if ( ua.msie && ua.version.slice(0,1) == "8" ) {
	 			hideCaptionIE8();
				$('div#carousel').roundabout('animateToPreviousChild', showCaptionIE8);
			 }else{
			    hideCaption();
				$('div#carousel').roundabout('animateToPreviousChild', showCaption);
			 }
			 
		});
		
		
			
    $controls.on('click dblclick', function() {
        var slideNum = -1,
            i = 0, len = $controls.length;
    
        for (; i<len; i++) {
            if (this === $controls.get(i)) {
                slideNum = i;
                break;
            }
        }
        
        if (slideNum >= 0) {
            $controls.removeClass('current');
            $(this).addClass('current');
            $carousel.roundabout('animateToChild', slideNum);
        }
    });

 
    function hideCaptionIE8(){
	$('.machine-title, .left, #descBody .online-btn, ul.bulletPoints').animate({'opacity':0}, 250);
	}
	
	function showCaptionIE8(){
		$('.machine-title, .left, #descBody .online-btn, ul.bulletPoints').animate({'opacity':1}, 250);	
	}
	function hideCaption(){
	$('.machine-title, .left, #descBody .online-btn').animate({'opacity':0}, 250);
	}
	
	function showCaption(){
		$('.machine-title, .left, #descBody .online-btn').animate({'opacity':1}, 250);	
	} 
	
    }(jQuery));
	
	
    </script>

<blockquote>
<p>
</p>
</blockquote>
<!-- PAGE CODE ENDS HERE-->
</section><!-- END RIGHTCOL1 -->

    
<?php include '../../includes/footer.php'; ?>  


