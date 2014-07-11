<?php
$parentNav="javascript-home";
$pageName="javascript-home";
$category="javascript";
?>
<?php include '../../includes/header.php'; ?>
<section id="rightCol1">
<h1>NUMBERS</h1>    

<script language="javascript" type="text/javascript">


</script>





<blockquote>
<p>

var x = 200

numbers are all 64bit floating point numbers

x = 200.5


-----------------------------

var foo = 5;
var bar = 5;

console.log(foo + bar); // 10

-----------------------------

var foo = "5";
var bar = "5";

console.log(foo + bar); // 55

-----------------------------

var foo = 5;
var bar = "5";

console.log(foo + bar); // 55

-----------------------------

var foo = 5;
var bar = "b";

console.log(foo * bar); // NaN  (not a number)

-----------------------------

// MAKE SURE ITS A NUMBER
// Number is built into javascript


var foo = "55";  // could be "abc"
var myNumber = Number(foo);     // return true
 

var foo = "abc";  // could be "abc"
var myNumber = Number(foo);     // return NaN 



if (isNaN(myNumber) ) {  //is not a number
	console.log("It's not a number");
}

or

if (!isNaN(myNumber) ) {  //is not not a number
	console.log("It is a number");
}



-----------------------------
//MATH OBJECT


// ROUND A NUMBER

var x = 200.6;
vay y = Math.round(x);  // return 201



// MAX

var a = 200;
var b = 10000;
var c = 4;

vay y = Math.max(a, b, c);  // returns biggest number = 10000



// MIN

var a = 200;
var b = 10000;
var c = 4;

vay y = Math.min(a, b, c);  // returns smallest number = 4


// PI 
// RANDOM()
// SQRT()   = square route
// LOG()



</p>
</blockquote>


</section><!-- END RIGHTCOL1 -->
<?php include '../../includes/footer.php'; ?>  