<?php
$parentNav="jquery-home";
$pageName="jquery-select-divs";
$category="jquery";
?>
<?php include '../../includes/header.php'; ?>
<style>
    #book{width:208px; background-color:brown; border:1px solid #333;}
	a{
		cursor: pointer;
	
	}
	.group{border: 1px solid green;}
	
	.page{width:100px; height: 100px; background-color:#eee; border:1px solid #ddd; display: inline-block; padding:0; margin:0;}
	.yellow{ 
		background-color: yellow;
	}
</style>

<script src="../../assets/js/vendor/jquery-1.9.1.min.js"></script>
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<section id="rightCol1">
<h1>Select pages</h1>
<div id="book">
    <div id="page1" class="page">1</div>
    <div id="page2" class="page">2</div>
    <div id="page3" class="page">3</div>
    <div id="page4" class="page">4</div>
    <div id="page5" class="page">5</div>
</div>
<div id="book_nav"></div>

</section>

<script>
$(document).ready(function(){
	
	$('.page').each(function(index){
	$('#book_nav').append('<a class="pagelink">link</a>');
	});
	
	
	
	$('#book_nav').find('a.pagelink:not(:first-child):even').each(function(){ 
		$(this)
		.add( $(this).nextAll('a.pagelink') )
		.wrapAll('<div class="group"></div>'); 
	});
	
	
	$('a.pagelink').click(function(){ //main effect loop
		var clickedIndex = $('a.pagelink' ).index( this );
		$( '.page' ).removeClass( 'yellow' ).eq( clickedIndex ).addClass( 'yellow' );
	});
	
});
</script>
<?php include '../../includes/footer.php'; ?>  