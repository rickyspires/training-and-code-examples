<?php
$parentNav="javascript-home";
$pageName="javascript-home";
$category="javascript";
?>
<?php include '../../includes/header.php'; ?>
<section id="rightCol1">
<h1>LOOPS</h1>    

<script language="javascript" type="text/javascript">



var a = 0;

//WHILE LOOP
/*
while(a<=10)
{
	document.write(a + " - ");
	console.log(a);
	a++;
}
*/

//FOR LOOP
for(var i =1; i<=10; i++)
{
	document.write(i + "<br> ");
}

</script>





<blockquote>
<p>

WHILE LOOP
-------------------------------------

var a = 0;

while(a<=10)
{
	document.write(a + " - ");
	console.log(a);
	a++;
}



FOR LOOP
-------------------------------------

for(var i =1; i<=10; i++)
{
	document.write(i + "<br> ");
}




BREAK
-------------------------------------

break jumps you out of the loop


for(var i =1; i<=5000; i++)
{
	if(i == 100){
	break;
	}		
}



CONTINUE
-------------------------------------

break jumps you out of the loop


for(var i =1; i<=5000; i++)
{
	if(i % 5 == 0){
	continue;   //means jump back to the top and continue
	}		
}




</p>
</blockquote>


</section><!-- END RIGHTCOL1 -->
<?php include '../../includes/footer.php'; ?>  