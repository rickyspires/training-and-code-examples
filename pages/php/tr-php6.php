<?php
$parentNav="php-home";
$pageName="php-basics-2";
$category="php-basics";
?>
<?php include '../../includes/header.php'; ?>
<style type="text/css"></style>
<script></script>
<section id="rightCol1">
<h1>PHP - Custom Functions</h1>

<?php
//basic
function footer1(){
	echo "Hello footer";
}
footer1();


echo "</br>";

//return
function footer2(){
	return "Hello footer";
}
echo footer2();


echo "</br>";


//arguments
function footer3($name, $email){
	echo $name; //will work
	return "Hello - " . $name . " - " .$email;
	echo $name; //will not work because its after the return
}
echo footer3("ricky", "rickyspires@hotmail.com");


echo "</br>";


//setting default arguments
function footer4($name, $email = "rickyspires@hotmail.com"){
	echo $name; //will work
	return "Hello - " . $name . " - " .$email;
	echo $name; //will not work because its after the return
}
echo footer4("ricky");



echo "</br>";


//setting conditions
function footer5($name, $email = "rickyspires@hotmail.com"){

	$testEmail = "rickyspires--@hotmail.com";
	if($email == $testEmail){
		return "correct email: " .$email;
	}else{
		return "i don't know the email: " .$testEmail;
	}
	
}
echo footer5("ricky");


echo "</br>";


//scope

// outside  only effect things outside the function (global scope)
// inside = only effect things inside the function

$email = "paul@test.com";
echo "outside scope: " .$email;

echo "</br>";

function footer6($email = "rickyspires@hotmail.com"){

	return "inside scope: " .$email;
}
echo footer6();

echo "</br>";

$email = "paul@test.com";
echo "outside scope: " .$email;

echo "</br>";





//overriding from inside the function
//this will over ride the default

function footer7($email = "rickyspires@hotmail.com"){

	$email = "test@test.com";
	return "new email: " .$email; 
}
echo footer7();

echo "</br>";



?>
<blockquote>

//basic

function footer1(){
	echo "Hello footer";
}
footer1();




//return

function footer2(){
	return "Hello footer";
}
echo footer2();



//arguments

function footer3($name, $email){

	echo $name; //will work

	return "Hello - " . $name . " - " .$email;
	
	echo $name; //will not work because its after the return

}
echo footer3("ricky", "rickyspires@hotmail.com");



//setting default arguments

function footer4($name, $email = "rickyspires@hotmail.com"){
	echo $name; //will work
	return "Hello - " . $name . " - " .$email;
	echo $name; //will not work because its after the return
}
echo footer4("ricky");




//setting conditions

function footer5($name, $email = "rickyspires@hotmail.com"){

	$testEmail = "rickyspires--@hotmail.com";
	if($email == $testEmail){
		return "correct email: " .$email;
	}else{
		return "i don't know the email: " .$testEmail;
	}
	
	
	

//scope

// outside  only effect things outside the function (global scope)
// inside = only effect things inside the function

$email = "paul@test.com";
echo "outside scope: " .$email;  // echos paul@test.com


function footer6($email = "rickyspires@hotmail.com"){
	return "inside scope: " .$email;  // echos rickyspires@hotmail.com
}
echo footer6();


$email = "paul@test.com";
echo "outside scope: " .$email;  // echos paul@test.com




//overriding from inside the function
//this will over ride the default

function footer7($email = "rickyspires@hotmail.com"){

	$email = "test@test.com";
	return "new email: " .$email; 
}
echo footer7();




</blockquote>

</section><!-- END RIGHTCOL1 -->

<script src="../../assets/js/vendor/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

});
</script>
<?php include '../../includes/footer.php'; ?>  