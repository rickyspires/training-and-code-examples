<?php
$parentNav="javascript-home";
$pageName="javascript-home";
$category="javascript";
?>
<?php include '../../includes/header.php'; ?>
<section id="rightCol1">
<h1>STRINGS</h1>    

<script language="javascript" type="text/javascript">


</script>





<blockquote>
<p>
VISIT : https://developer.mozilla.org/en/JavaScript/Reference


var = "";
var = '';
var = " ' ' ";

var = " \" \" ";

var = ' \' \' ';

---------------------------------

// FIND LENGTH

var phrase = "This is a simple phrase"
console.log(phrase.length); //24

---------------------------------

// METHODS

var phrase = "phrase"
console.log(phrase.toUpperCase); //PHRASE


---------------------------------

// SPLIT - creates an array

var phrase = "This is a simple phrase."
var words = phrase.split(" "); //split at the space. 

//returns

[0]This 
[1]is 
[2]a 
[3]simple 
[4]phrase.


---------------------------------


// INDEXOF - find position

var phrase = "This is a simple phrase."
var position = phrase.indexOf("simple");   // the word "simple" begins at position 10


---------------------------------


// INDEXOF - if position is not found

var phrase = "This is a phrase."

if( phrase.indexOf("simple") == -1 ){
	console.log("That word does not occur")
}


---------------------------------

// indexOf finds the first occurrence of
// lastIndexOf finds the last occurrence of

---------------------------------


// SLICE
// It will count from 6 till 11
// this will return "other"


var phrase = "Yet another phrase.";
              
var segment = phrase.slice(6,11);

---------------------------------

// you can also use:
.substring(start, end)
.substr(start, lenght)


---------------------------------

//COMPARISON - upper / lower


var str1 = "Hello";
var str2 = "hello";

// str1 != str2

//to make sure they are the same you can use toLowercase or uppercase


if ( str1.toLowercase() == str2.toLowercase(){
	console.log("Yes, equal");
}

---------------------------------


//COMPARISON - less < greater


var str1 = "aardvark";
var str2 = "beluga";

if ( str1 < str2 ){
	console.log("Yes");  //a is less than b
}

---------------

var str1 = "aardvark";
var str2 = "Beluga";

if ( str1 < str2 ){
	console.log("No");  //a is not less than B because its a capital
}









</p>
</blockquote>


</section><!-- END RIGHTCOL1 -->
<?php include '../../includes/footer.php'; ?>  