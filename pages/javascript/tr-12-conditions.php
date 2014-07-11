<?php
$parentNav="javascript-home";
$pageName="javascript-home";
$category="javascript";
?>
<?php include '../../includes/header.php'; ?>
<section id="rightCol1">
<!-- PAGE CODE STARTS HERE-->

<h1>Javascript if Conditions</h1>    

<!-- PAGE CODE ENDS HERE-->

<blockquote>
<p>

IF
if ( condition ){
}

if ( a > 20 ) {
}

if ( b == 99 ) {
}

if ( c === 99 ) {
}

if ( c != 99 ) {
}

var amount = 500;
if ( amount < 1000 ){
	alert("It's less than 1000");
}

var amount = 500;
if ( amount < 1000 ){
	alert("It's less than 1000");
}else{
	alert("It's more than 1000");
}



</p>
</blockquote>

<script>
	var amount = 500;
	if ( amount < 1000 ){
		alert("It's less than 1000");
	}else{
		alert("It's more than 1000");
	}
</script>

</section><!-- END RIGHTCOL1 -->
<?php include '../../includes/footer.php'; ?>  