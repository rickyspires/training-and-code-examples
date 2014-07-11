<?php
$parentNav="ajax-home";
$pageName="ajax-home";
?>
<?php include '../../includes/header.php'; ?>
<section id="rightCol1">
<!-- PAGE CODE STARTS HERE-->

<h1>AJAX - Modifying the dom with javascript</h1>

<script src="script.js"></script>


<!-- PAGE CODE ENDS HERE-->
<blockquote>
<hr>
<p>
GET ELEMENT BY ID

	- we want to get and change the #update
	- in the js file change this:
 
		request.onreadystatechange = function(){
		if((request.readyState===4) && (request.status===200)){
		console.log(request);
		document.writeln(request.responseText);
		
		- to this:
	
		request.onreadystatechange = function(){
		if((request.readyState===4) && (request.status===200)){
		
		var modify = document.getElementById('update');
		modify.innerHTML = request.responseText;
		}
	}


</p>
</blockquote>
</section><!-- END RIGHTCOL1 -->
<?php include '../../includes/footer.php'; ?>  