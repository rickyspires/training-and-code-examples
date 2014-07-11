<?php
$parentNav="javascript-home";
$pageName="javascript-home";
$category="javascript";
?>
<?php include '../../includes/header.php'; ?>
<section id="rightCol1">
<h1>OBJECTS</h1>    

<script language="javascript" type="text/javascript">


//1. CREATE OBJECTS

var player1 = { name:"Fred", score:1000, rank:1 };
var player2 = { name:"Sam", score:500, rank:2 };


//2. CREATE AN OUTPUT FUNCTION

function playerDetails(){
	
	// display information about each player
	console.log(this.name + " has a rank of: " +
	this.rank + " and a score of " + this.score);

}


// 3. GIVE PLAYERS A METHOD

player1.logDetails = playerDetails;
player2.logDetails = playerDetails;


//4. call the function

player1.logDetails();
player2.logDetails();





</script>

<blockquote>
<p>

// ARRAYS ARE OBJECTS
// DATES ARE OBJECTS

---------------------------------

// CREATE AN OBJECT

// these:

var playerName = "Fred";
var playerScore = 1000;
var playerRank = 1;

// becomes:

var player = new Object();

player.name = "Fred";
player.score = 1000;
player.rank = 1;
 
 
--------------------------------- 
 
// SHORT HAND

var player1 = { name:"Fred", score:1000, rank:1};

var player2 = { name:"Sam", score:500, rank:2};

console.log(player1.name);  // Fred


--------------------------------- 
 
 
//FUNCTIONS FOR OBJECTS

function playerDetails(){
	// display information about each player
	colsole.log(this.name + "has a rank of: " +
	this.rank + " and a score of " + this.score);
}


// give player1 & 2 a method

player1.logDetails = playerDetails;
player2.logDetails = playerDetails;


//call the function

player1.logDetails();
player2.logDetails();



--------------------------------- 


 
</p>
</blockquote>


</section><!-- END RIGHTCOL1 -->
<?php include '../../includes/footer.php'; ?>  