<?php
$parentNav="javascript-home";
$pageName="javascript-home";
$category="javascript";
?>
<?php include '../../includes/header.php'; ?>
<section id="rightCol1">
<h1>IF Statments</h1>    

<blockquote>
<p>
if(){
}else{
}

-------------------------------


if(3<4){
	alert("3 is less than 4");
}else{
	alert("3 is not less than 4");
}

-------------------------------

var str = "hello";

if(str.indexOf("e")){
	alert("hello contains the letter e");
}


-------------------------------


var str = "hello";
str = str.toUpperCase();

if(-1 == str.indexOf("e")){
	alert("hello does not contain the letter e. it contains a E");
}

//NOTE: THIS WILL ALSO FAIL BECAUSE BECAUSE ITS LOOKING FOR A CAPITAL E


-------------------------------


var str = "hello";

if(-1 != str.indexOf("hello")){
	alert("true");
}

//NOTE: THIS WILL ALSO FAIL BECAUSE BECAUSE ITS LOOKING FOR A CAPITAL E


-------------------------------


var str = "hello";
alert(-1 == str.indexOf("hello"));  //returns FALSE




</p>
</blockquote>

<script language="javascript" type="text/javascript">


/*
if(3<4){
	alert("3 is less than 4");
}else{
	alert("3 is not less than 4");
}


var str = "hello";

if(str.indexOf("e")){
	alert("hello contains the letter e");
}


var str = "hello";

if(-1 == str.indexOf("a")){
	alert("hello does not contain the letter a");
}


var str = "hello";
alert(-1 == str.indexOf("hello"));  //returns FALSE

*/



</script>

</section><!-- END RIGHTCOL1 -->
<?php include '../../includes/footer.php'; ?>  