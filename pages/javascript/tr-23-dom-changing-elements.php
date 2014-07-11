<?php
$parentNav="javascript-home";
$pageName="javascript-home";
$category="javascript";
?>
<?php include '../../includes/header.php'; ?>
<section id="rightCol1">
<h1>Changing DOM elements</h1>    

<h1 id="mainH1"><a id="mainContent">Welcome</a></h1>

<script language="javascript" type="text/javascript">

	var mainContent = document.getElementById("mainContent");
	mainContent.setAttribute("align","right");  

	console.log(mainH1.innerHTML); //all content
	console.log(mainContent.innerHTML); //Welcome
	
</script>

<blockquote>
<p>

// GET THE ELEMENT
// CHANGE IT

----------------------------

// CHANGING EXISTING ELEMENTS

myElement.getAttribute("align");  // align is the attribute

myElement.getAttribute("align","left");  // left is the value

----------------------------


// SET ATTRIBUTE

div id="mainContent">/div>

var mainContent = document.getElementById("mainContent");
mainContent.setAttribute("align","right");  


----------------------------

// INNER HTML

div id="mainTitle"> WELCOME /div>

var mainTitle = document.getElementById("mainTitle");
console.log(mainTitle.innerHTML);

// that will give back "WELCOME"
// IF ITS AN ELEMENT WITH OTHER ELEMENTS IT DOESNT WORK







</p>
</blockquote>


</section><!-- END RIGHTCOL1 -->
<?php include '../../includes/footer.php'; ?>  