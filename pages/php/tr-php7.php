<?php session_start(); ?>
<?php
$parentNav="php-home";
$pageName="php-basics-2";
$category="php-basics";
?>
<?php include '../../includes/header.php'; ?>
<style type="text/css"></style>
<script></script>
<section id="rightCol1">
<h1>PHP - Sessions</h1>

<?php

$_SESSION['time'] = date(DATE_RFC822);
echo $_SESSION['time'];

echo "</br>";

// GET THE BROWSER THAT THE USER IS USING
$_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];


echo "</br>";

// use print_r to view all sessions
echo print_r($_SESSION);

/*
Array ( 
[time] => Wed, 31 Jul 13 08:05:33 +0100 
[browser] => Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:22.0) Gecko/20100101 Firefox/22.0 ) 1
*/

// you can overright, set and unset sessions
// sessions only last 24mins


echo "Session ID:" .session_id();
//ID:4973f31625566f926a90ef62349e4316
// this is stored in a cookie in the browser


?>
<blockquote>
you need to add < ?php session_start(); ? > at the start of the page

// Set the date in a session
$_SESSION['time'] = date(DATE_RFC822);
echo $_SESSION['time'];



// to call it on another page you need to do this
//http://training.com/pages/php/session.php
// note: the time will not change on the next page until you go back to that page you set it on

< ?php session_start(); ? >
< ?php echo $_SESSION['time']; ? >

--------------

// GET THE BROWSER THAT THE USER IS USING
$_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];

- returns Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:22.0) Gecko/20100101 Firefox/22.0


</blockquote>

</section><!-- END RIGHTCOL1 -->

<script src="../../assets/js/vendor/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

});
</script>
<?php include '../../includes/footer.php'; ?>  