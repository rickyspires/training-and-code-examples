<?php
$parentNav="ajax-home";
$pageName="ajax-home";
?>
<?php include '../../includes/header.php'; ?>
<section id="rightCol1">
<!-- PAGE CODE STARTS HERE-->

<h1>AJAX</h1>

<script src="script.js"></script>


<!-- PAGE CODE ENDS HERE-->
<blockquote>
<p>
ASYNCHRONOUS JAVASCRIPT and XML

X = its used the XHR api to request data.

ajax does not ask the server for the whole site. just the peaces you need.


--------------------------------------------------------------------------
--------------------------------------------------------------------------

XHR api
MAKING SYNCHRONOUS XHS REQUESTS


- create a new file called script.js and call them from your pages body

	< script src="script.js">< /script>


- create another file called data.txt

	- add the text "hello world".
	
	
- open script.js and add:

		var request = new XMLHttpRequest(); 
	
	// using false makes it asincrinous (make the browser wait
	// you can only call files from your own website
		
		request.open('GET','data.txt', false);    
	
		request.send();
		console.log(request);


- to view the result open firebug and look in the console

if the 	status is 200 then it was a success


- to check for that you need to add the following if statement to the script.js

	if(request.status===200){
		console.log(request);
		document.writeln(request.responseText);
	}
	
	
----------------------------------------	
	
	var request = new XMLHttpRequest();
	request.open('GET','data.txt', false);     // using false makes it asincrinous
	request.send();
	
	if(request.status===200){
		console.log(request);
		document.writeln(request.responseText);
	}
	
	console.log(request);	
	
	
----------------------------------------	
		

MAKING ASYNCHRONOUS XHS REQUESTS

//lets it run in the background without affecting other operations

- in the console XMLHttpRequest you will see "ON READY STATE CHANGE : null"
- READY STATE - shows how far a lot the state has progressed - starting at 0 and ending at 4


- you need to check for when it reaches 4
- first remove 'false' from the request.open  

	request.open('GET','data.txt');  


- on .onreadystatechange check if the state is 200 and ready state is 4


	request.onreadystatechange = function(){
		if((request.readySstate===4) && (request.status===200)){
		console.log(request);
		document.writeln(request.responseText);
		}
	}







</p>
</blockquote>
</section><!-- END RIGHTCOL1 -->
<?php include '../../includes/footer.php'; ?>  