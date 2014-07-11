<?php
$parentNav="javascript-home";
$pageName="javascript-home";
$category="javascript";
?>
<?php include '../../includes/header.php'; ?>
<section id="rightCol1">
<h1>DATES</h1>    

<script language="javascript" type="text/javascript">


</script>





<blockquote>
<p>

// TODAY DATE / TIME
var today = new Date();  //current date and time


// SET A DATE
var y2k = new Date(2000, 0, 1);  // set a date (note that month starts at 0)


// INCLUDE SECONDS
var y2k = new Date(2000, 0, 1, 0, 0, 0);  // year, month, day, hours, mins, seconds


-------------------------


// GET METHODS OF THE DATE OBJECT

var today = new Date();

today.getMonth();  // returns 0-11

today.getFullYear();  // YYYY   (DON'T USE .getYear)

today.getDate();  // 1-31 day of month

today.getDay();  // 0-6 day of the week (sunday is 0)



-------------------------

//GET DAY

var myDate = new Date(1906,11,9);  // 1906 Dec 9
console.log( "Grace Hopper was born on: ", myDate.getDay() );

// returns 0
// grace hopper was born on sunday


-------------------------

today.getHours(); //0-23
today.getTime();  //milliseconds since 1/1/1970

-------------------------


// SET METHODS OF THE DATE OBJECT

var today = new Date();

today.setMonth(5);
today.setFullYear(2012);

etc...


-------------------------


// COMPARING DATES


var date1 = new Date(2000, 0, 1);
var date2 = new Date(2000, 0, 1);


if ( date1 == date2 ) {...  // THIS WOULD BE FALSE

// because they are not the same object
// you need to do:

if ( date1.getTime() == date2.getTime() ) {...    // TRUE



 
</p>
</blockquote>


</section><!-- END RIGHTCOL1 -->
<?php include '../../includes/footer.php'; ?>  