<?php
$parentNav="jquery-home";
$pageName="jquery-slider-3";
$category="jquery";
?>
<?php include '../../includes/header.php'; ?>
 <style rel="stylesheet" type="text/css" />

 	.slidecontainer, .prev, .next, .slidewrapper, ul#slides {display: block; margin:0; padding:0;}

 	.slidecontainer{
	 	border: 1px solid #008000;
	    margin: 0 auto;
	    position: relative;
	    width: 690px;
	 }
 	.prev, .next {
	 	background-color: #CCCCCC;
	    position: absolute;
	    text-align: center;
	    top: 30%;
	    width: 20px;
	    cursor:pointer;
	}
 	.prev{left:0;}
 	.next{right:0;}
 	.mask{
 		border: 3px solid #000000;
	    margin: 0 auto;
	    position: relative;
	    z-index:1;
	}
 	
 	ul#slides {border:1px solid blue; list-style: none; float: left; position: relative;}
 	ul#slides li {background-color:#ccc; display: inline-block; float: left;}
 	ul li {margin: 0px;}
</style>

<section id="rightCol1">
<!-- PAGE CODE STARTS HERE-->
<h1>Slider 3</h1>


<div class="slidecontainer">

	<div class="prev"><</div>
	<div class="next">></div>

	<div class="mask">

			<ul id="slides">

				<li class="active">slide1</li>
				<li class="">slide2</li>
				<li class="">slide3</li>
				<li class="">slide4</li>
				<li class="">slide5</li>

			</ul>

	</div>
</div>



        
<!-- PAGE CODE ENDS HERE-->
</section><!-- END RIGHTCOL1 -->
<script src="../../assets/js/vendor/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="../../assets/js/plugins/jquery.imgpreload.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){


	var slidewidth = 50;
	var slideheight = 50;

	//get number of slides
	var numslides = $('ul#slides li').size();

	//total slide wrapper width
	var ulwidth = slidewidth*numslides;

	//slide size and mask
	$('ul#slides li, .mask').css({'width': slidewidth+'px','height': slideheight+'px'});	

	//slide wrapper width
	$('ul#slides').css({'width': ulwidth+'px'});

	
	var prevclicks = 0;
	var nextclicks = 0;

	$(".prev").on('click',function() {

		prevclicks++;
		newposition1 = (prevclicks*slidewidth);
		console.log(newposition1);

		if(newposition1 == ulwidth -slidewidth){
			$(this).hide();
		}else{
			$(this).show();
		}

	    $("ul#slides").animate({"left": "-="+ slidewidth +"px"},"slow");
	});


	$(".next").on('click',function() {

		nextclicks++;
		newposition2 = (nextclicks*slidewidth);
		console.log(newposition2);

		if(newposition2 == ulwidth -slidewidth){
			$(this).hide();
		}else{
			$(this).show();
		}

	    $("ul#slides").animate({"left": "+="+ slidewidth +"px"},"slow");
	});

});

</script>
<?php include '../../includes/footer.php'; ?>  