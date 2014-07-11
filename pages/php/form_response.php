<?php

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



$first_name = $_POST['name_first'];
$email = $_POST['email'];

$fav_color = $_REQUEST['color'];
$fav_website = $_REQUEST['favourite_website'];
$comments = $_REQUEST['comments'];

$email_message = "First name: {$first_name} with an email of: {$email}";

mail('rickyspires@hotmail.com','Form Response', $email_message);


?>
<!--
you can send data to the url via a link using
<a href="yourSite.com?name=ricky">some link</a>
-->