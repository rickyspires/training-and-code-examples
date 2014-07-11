<?php
$parentNav="jquery-home";
$pageName="jquery-flipbook-4";
$category="jquery";
?>
<?php include '../../includes/header.php'; ?>
<style>
  .content { padding: 5px; display: block }
  .group { border: 1px solid green; }
</style>

<script src="../../assets/js/vendor/jquery-1.9.1.min.js"></script>
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<section id="rightCol1">
<h1>Grouping Divs and skip the first div</h1>
<div id='container'>
      <div class='content'>content 1</div>
      <div class='content'>content 2</div>
      <div class='content'>content 3</div>
      <div class='content'>content 4</div>
      <div class='content'>content 5</div>
      <div class='content'>content 6</div>
</div>

</section>
<script>
$(document).ready(function(){
	$('#container ').find('.content:not(:first-child):even').each(function(){ 
	$(this)
				.add( $(this).next('.content') )
				.wrapAll('<div class="group"></div>'); 
	});
});
</script>
<?php include '../../includes/footer.php'; ?>  