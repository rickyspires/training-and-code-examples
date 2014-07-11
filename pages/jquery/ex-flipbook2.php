<?php
$parentNav="jquery-home";
$pageName="jquery-flipbook-1";
$category="jquery-flipbook";
?>
<?php include '../../includes/header.php'; ?>
 <style rel="stylesheet" type="text/css" />
#book{
    background: none repeat scroll 0 0;
    height: 361px;
    position: relative;
    width: 600px;
    z-index: 0; 
	margin: 0 auto;   
}

.flippage{
    height: 361px;
    left: 300px;
    overflow: hidden;
    position: absolute;
    top: 0;
    width: 300px;

}

.fliphtml{
    border-color: #000000;
    border-style: solid;
    border-width: 0;
    color: #FFFFFF;
    height: 361px;
    left: 0;
    overflow: hidden;
    position: absolute;
    top: 0;
    width: 300px;
}

.book_nav {
	margin: 20px auto;
    top: 470px;
    width: 240px;}
.book_nav a {
	display: inline-block;
	width: 18px;
	height: 18px;
	margin-left: 15px;
	background: url(../../assets/img/carousel-2/non-active-btn.png) no-repeat 0px 0px;
	cursor: pointer;
}
.book_nav a:hover {background: url(../../assets/img/carousel-2/active-btn.png) no-repeat 0px 0px;}
.book_nav a.selected {background: url(../../assets/img/carousel-2/active-btn.png) no-repeat 0px 0px;}


</style>

<section id="rightCol1">
<h1>Flipbook 2 - THIS IS NOT WORKING YET</h1>

<!-- PAGE CODE STARTS HERE-->
<div id="book">

    <div id="flippage_0" class="flippage" >
        <div id="fliphtml_0" class="fliphtml" style="background-color:#3f98bc;z-index:6;">
        </div>
    </div>
    <div id="flippage_1" class="flippage">
        <div id="fliphtml_1" class="fliphtml" style="background-image:url(http://img638.imageshack.us/img638/4933/flip01.jpg);z-index:5">
        </div>
    </div>
    <div id="flippage_2" class="flippage">
        <div id="fliphtml_2" class="fliphtml" style="background-image:url(http://img222.imageshack.us/img222/168/flip02.jpg);z-index:4">
        </div>
    </div>
    <div id="flippage_3" class="flippage">
        <div id="fliphtml_3" class="fliphtml" style="background-image:url(http://img714.imageshack.us/img714/673/flip03.jpg);z-index:3">
        </div>
    </div>
    <div id="flippage_4" class="flippage">
        <div id="fliphtml_4" class="fliphtml" style="background-image:url(http://img684.imageshack.us/img684/5764/flip04g.jpg);z-index:2">
        </div>
    </div>
    <div id="flippage_5" class="flippage">
        <div id="fliphtml_5" class="fliphtml" style="background-color:#3f98bc;z-index:1">
        </div>
    </div>
</div>

<div class="book_nav"></div>

<blockquote>
 
</blockquote>
<!-- PAGE CODE ENDS HERE-->
</section><!-- END RIGHTCOL1 -->
<script src="../../assets/js/vendor/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
       
	   // Generate Navigation links
		$('#book .flippage').each(function(index){ //SEARCH FOR EVERYTIME THERE IS A PAGE INSIDE OF BOOK
			$('.book_nav').append('<a class="book_nav_item" ></a>'); // ADD <A> TAG TO EACH
		});
		
		
		
		$('.book_nav a.book_nav_item').click(function(){  //FOR EACH MARQUEE NAV <A>
		
			// Set the navigation state
			$('.book_nav a.book_nav_item').removeClass('selected'); // REMOVE SELECTED FROM ALL
			$(this).addClass('selected'); // ADD SELECTED TO THE CURRENT ONE
			
			
			if($('.flippage').css('left')== '300px'){
                //right page
                if($('.flippage').next()){
                    $('.flippage').next().width('0px');
                }
                $('.flippage').animate({'width': '0'}, 300, function(){
                    if($('.flippage').next()){
                        $('.flippage').next().animate({left: '0',width: '300px'}, 300);
                        $('.flippage').prev().animate({'width': '0px'},300);
                    }
                });
                
            }else{
                //left page
                $('.flippage').prev().prev().animate({width: '300px'},300);
                $('.flippage').animate({left: '300',width: '0px'},300,function(){
                    $('.flippage').prev().animate({'width': '300px'}, 300, function(){

                    });
                });
            }    
		     
		});
	
	
	
	    $('.flippage').click(function(){ //main effect loop

            $this = $(this);

            if($(this).css('left')== '300px'){
                //right page
                if($(this).next()){
                    $(this).next().width('0px');
                }
                $(this).animate({'width': '0'}, 300, function(){
                    if($(this).next()){
                        $(this).next().animate({left: '0',width: '300px'}, 300);
                        $(this).prev().animate({'width': '0px'},300);
                    }
                });
                
            }else{
                //left page
                $(this).prev().prev().animate({width: '300px'},300);
                $(this).animate({left: '300',width: '0px'},300,function(){
                    $(this).prev().animate({'width': '300px'}, 300, function(){

                    });
                });
            }    

        });
});
</script>
<?php include '../../includes/footer.php'; ?>  