<?php
$parentNav="php-home";
$pageName="php-basics-2";
$category="php-basics";
?>
<?php include '../../includes/header.php'; ?>
<style type="text/css"></style>
<script></script>
<section id="rightCol1">
<h1>PHP - Forms</h1>

<form method="post" action="form_response.php">

	<div class="form_element_div">
		First name: <br> <input name="name_first" type="text" size="50" maxlength="200">
	</div>
	<div class="form_element_div">
		Email: <br> <input name="email" type="text" size="50" maxlength="200">
	</div>
	
	<div class="form_element_div">
		Favourite color:
		<input name="color" type="radio" value="red">red
		<input name="color" CHECKED type="radio" value="yellow">yellow
		<input name="color" type="radio" value="blue">blue
	</div>

</form>
<br />
<p>Hello world</p>


<blockquote>
	action tells the browser where to submit the form to:
	form action = form_response.php

//$_POST['name_first'];
// print "First name = {$_POST['name_first']}";
// $first_name = $_POST['name_first'];

//$first_name = $_POST['name_first'];
//$email = $_POST['email'];
// print "First name = {$first_name} with an email of: {$email}";

// _GET puts the results in the url. you must use _GET
//$first_name = $_GET['name_first'];
//$email = $_GET['email'];

// _REQUEST puts the results in the url and you can use _POST
//$first_name = $_POST['name_first'];
//$email = $_POST['email'];];


you can send data to the url via a link using
< a href=" yourSite.com?name=ricky ">some link< /a>


// SENDING AN EMAIL

$first_name = $_POST['name_first'];
$email = $_POST['email'];

$fav_color = $_REQUEST['color'];
$fav_website = $_REQUEST['favourite_website'];
$comments = $_REQUEST['comments'];

$email_message = "First name: {$first_name} with an email of: {$email}";

// WHERE, SUBJECT, MESSAGE
mail('rickyspires@hotmail.com','Form Response', $email_message);



</blockquote>

</section><!-- END RIGHTCOL1 -->

<script src="../../assets/js/vendor/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

});
</script>
<?php include '../../includes/footer.php'; ?>  