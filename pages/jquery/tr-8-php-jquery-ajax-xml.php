<?php
$parentNav="jquery-home";
$pageName="jquery";
$category="jquery";
?>
<?php include '../../includes/header2.php'; ?>
 <style rel="stylesheet" type="text/css" />
	.loading { background: url(loading.gif) 0 0 no-repeat; height: 11px; width: 16px; }
</style>
<section id="rightCol1">
<!-- PAGE CODE STARTS HERE-->

<h1>Recent Forum Topics</h1>

<div id="recentTopics">
	<noscript><a href="tr-8a-get-forum.php">view if js is disabled</a></noscript>
</div>

<blockquote>
<p>
// WE WILL USE .LOAD
// use noscript to show content if js is disabled
// add a style for loading gif will load then disapear
// go to ajaxload.info to create an ajax loader

< div id="recentTopics">
	< noscript>< a href="tr-8a-get-forum.php">view if js is disabled < /a>< /noscript>
< /div>

$('#recentTopics').addClass(loading);
	$('#recentTopics').load("tr-8a-get-forum.php", function(){
		$('#recentTopics').removeClass(loading);
});
	
</p>
</blockquote>


<!-- PAGE CODE ENDS HERE-->
</section><!-- END RIGHTCOL1 -->
<script src="../../assets/js/vendor/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	
	$('#recentTopics').addClass(loading);
	$('#recentTopics').load("tr-8a-get-forum.php", function(){
		$('#recentTopics').removeClass(loading);
	});
	
	
});
</script>
<?php include '../../includes/footer.php'; ?>  