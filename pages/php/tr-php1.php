<?php
$parentNav="php-home";
$pageName="php-basics-1";
$category="php-basicss";
?>
<?php include '../../includes/header.php'; ?>
<style type="text/css"></style>
<script></script>
<section id="rightCol1">
<h1>PHP Basics 1</h1>

<br />
<p>Hello world</p>
<?php	
	print "<p>Hello world</p>";
	echo  "<p>Hello world</p>";
?>
<hr>
<p><u><b>Variables</u></b></p>
<?php	
	$name;
	$name = "ricky";
	echo $name;
?>
<hr>
<p><u><b>Variables 2</u></b></p> 
<?php		
	$first_name = "ricky";
	$last_name = "last";
	$age = 36;

	echo $first_name ." ". $last_name;
	echo "</br>";
	echo "$first_name is $last_name age $age";
	echo "</br>";
	echo '$first_name is $last_name age $age';
?>
<hr>
<p><u><b>Includes</u></b></p>
<?php		
@include("external1.php");	
echo $secret_password;
?>


<hr>
<p><u><b>Arrays</u></b></p>
<?php		
	//INDEXED ARRAY
	$my_array = array("ricky", "jeff", "terry", 7);
	
	echo "the value in position 3 is: ";
	echo $my_array[2]; // will return terry

	echo "</BR>";
		
	//ASOCIATIVE ARRAY
	$prices_array = array("tv" => "25.00", "dvd" => "50.00", "vcr" => "2.00",);
	echo "the price of a tv is: "; 
	echo $prices_array['tv']; // will return 25.00
?>

<blockquote>

Basics:

	print "Hello world";
	echo  "Hello world";
	
	
--------------------------------------------------------------
Variables:

	$name;
	$name = "ricky";
	echo $name;
	
	
	//Case sensitive.
	$name1 = "terry spires";
	$Name1 = "jeff spires";
	echo $name1 //terry spires
	
	
	//concatination
	$first_name = "ricky";
	$last_name = "last";
	$age = 36;
	
	echo $first_name ." ". $last_name ." - ". ;
	
	echo "$first_name is $last_name age $age";
	
	echo '$first_name is $last_name age $age';
	
	
--------------------------------------------------------------
Includes:
	
	external1.php =
	
	< ?php
	
		$secret_password = "fish";
		echo $secret_password;
	? >
	
	@include("external1.php");
	
	// you need to include the @ to stop error warnings.


--------------------------------------------------------------
Includes2:

	
	external1.php =
	
	< ?php
		$secret_password = "fish";
	? >
	
	< ?php
	@include("external1.php");
	echo $secret_password;
	? >

	// you can only call it under the include


--------------------------------------------------------------
Includes3:

	if you look in the phpinfo() file you can see php's default include path
	
	mine is:
	
	include_path	.:/Applications/MAMP/bin/php/php5.4.4/lib/php
	
	you can put files in there and call them using the same code / path



--------------------------------------------------------------
Arrays:

	//INDEXED ARRAY
	
	arrays start from 0
	
	$my_array = array("ricky", "jeff", "terry", 7);
	
	echo "the value in position 3 is: ";
	echo $my_array[2];
	
	// will return terry
	
	
-----------------	
	
	//ASSOCIATIVE ARRAY
	
	arrays start from 0
	
	$prices_array = array("tv" => "25.00", "dvd" => "50.00", "vcr" => "2.00",);
	
	echo $prices_array['tv'];
	
	// will return 25.00
	
	
	
	
	
	
	



	
</blockquote>

</section><!-- END RIGHTCOL1 -->

<script src="../../assets/js/vendor/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

});
</script>
<?php include '../../includes/footer.php'; ?>  