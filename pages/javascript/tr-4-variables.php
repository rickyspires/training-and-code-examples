<?php
$parentNav="javascript-home";
$pageName="javascript-home";
$category="javascript";
?>
<?php include '../../includes/header.php'; ?>
<section id="rightCol1">
<!-- PAGE CODE STARTS HERE-->

<h1>Variables</h1>    



<!-- PAGE CODE ENDS HERE-->

<blockquote>
<p>
var first_name = "Ricky";
var lastname = "Spires";
var fullname = first_name + " " + lastname;

var number1 = 5;
var number2 = 30;
var age = number1 + number2;

//alert(first_name + " " + lastname + " - age: " + age);

alert(fullname + " - age: " + age);


NOTES: 
you need to use + between variables
to add a space you need to add an empty string


</p>
</blockquote>

<script language="javascript">

var first_name = "Ricky";
var lastname = "Spires";
var fullname = first_name + " " + lastname;

var number1 = 5;
var number2 = 30;
var age = number1 + number2;

//alert(first_name + " " + lastname + " - age: " + age);
alert(fullname + " - age: " + age);


</script>

</section><!-- END RIGHTCOL1 -->
<?php include '../../includes/footer.php'; ?>  