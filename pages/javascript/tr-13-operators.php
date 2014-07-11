<?php
$parentNav="javascript-home";
$pageName="javascript-home";
$category="javascript";
?>
<?php include '../../includes/header.php'; ?>
<section id="rightCol1">
<!-- PAGE CODE STARTS HERE-->

<h1>Javascript Operators</h1>    

<!-- PAGE CODE ENDS HERE-->

<blockquote>
<p>



+=
-=
*=
/=

score = score + 10;  
is the same as  
score += 10;


* is more important than +
so 
result = 5+5*10;
is 50 + 5 = 55

result = (5+5)*10;
is 10 * 10 = 100







= 	setting a value

var a = 5;
var b = 10;

if (a = b){
	//this will be false
}


== 		variables are equal to each other
=== 	strict equality
!= 		not equals
!== 	not strictly equals
>		greater
<		less than
>=		greater and equal to
<=		less than and equal to




var a = 5;
var b = "5";

if (a == b){
	alert("yes they are equal");
} else {
	alert("no they NOT equal");
}

THIS WILL POP UP YES


if (a === b){
	alert("yes they are equal");
} else {
	alert("no they NOT equal");
}

THIS WILL POP UP NO because they are not the same type









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