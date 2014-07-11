<?php
$parentNav="javascript-home";
$pageName="javascript-home";
$category="javascript";
?>
<?php include '../../includes/header.php'; ?>
<section id="rightCol1">
<!-- PAGE CODE STARTS HERE-->

<h1>Timers</h1>    

<!-- PAGE CODE ENDS HERE-->

<blockquote>
<p>
// Set timeouts etc..


// SET TIMEOUT IN MILLISECONDS
setTimeout(simpleMessage, 1000);


var myImage = document.getElementById("mainImage");


var imageArray = ["_images/overlook.jpg","_images/winery_sign.jpg","_images/lunch.jpg",
"_images/bigSur.jpg", "_images/flag_photo.jpg", "_images/mission_look.jpg"]


var imageIndex = 0;


function changeImage(){
	myImage.setAttribute("src", imageArray[imageIndex]);
	imageIndex++;
	if (imageIndex >= imageArray.length){
		imageIndex = 0;
	}
}


</p>
</blockquote>

<script language="javascript">

function simpleMessage(){
	alert("this is a message");
}

// SET TIMEOUT IN MILLISECONDS
/*
setTimeout(simpleMessage, 1000);
*/



/*
var myImage = document.getElementById("mainImage");

var imageArray = ["_images/overlook.jpg","_images/winery_sign.jpg","_images/lunch.jpg",
"_images/bigSur.jpg", "_images/flag_photo.jpg", "_images/mission_look.jpg"]

var imageIndex = 0;

function changeImage(){
	myImage.setAttribute("src", imageArray[imageIndex]);
	imageIndex++;
	if (imageIndex >= imageArray.length){
		imageIndex = 0;
	}
}
*/
</script>

</section><!-- END RIGHTCOL1 -->
<?php include '../../includes/footer.php'; ?>  