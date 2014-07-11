<?php
$parentNav="php-home";
$pageName="php-basics-2";
$category="php-basics";
?>
<?php include '../../includes/header.php'; ?>
<style type="text/css"></style>
<script></script>
<section id="rightCol1">
<h1>PHP - Functions</h1>

<?php
$words = "hello world";
$result = str_word_count($words);
echo $result; //2

// send email

$did_send = mail('rickyspires@hotmail.com','Form Response', $result);

if($did_send){
	echo "Email sent: " . $did_send;   // returns 1
}



// strip tags

$results_tags = strip_tags("<p>the p tags <php> <?> <i>");
echo $results_tags;  // returns: the p tags 


// strip os checks if a letter exists
$strip_os = stripos("rickyspires@hotmail.com","@");
echo $strip_os;  // returns: 1

if it does , send an email.

if($strip_os){
	echo "it does have a @";
	mail("","","");
}




?>
<blockquote>
Built in php functions

name();

// count the words
str_word_count("hello world");

$words = "hello world";
$result = str_word_count($words);
echo $result; //2



// send email

$did_send = mail('rickyspires@hotmail.com','Form Response', $result);

if($did_send){
	echo "Email sent: " . $did_send;   // returns 1
}



//

</blockquote>

</section><!-- END RIGHTCOL1 -->

<script src="../../assets/js/vendor/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

});
</script>
<?php include '../../includes/footer.php'; ?>  