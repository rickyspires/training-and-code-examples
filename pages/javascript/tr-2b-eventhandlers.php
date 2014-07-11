<?php
$parentNav="javascript-home";
$pageName="javascript-home";
$category="javascript";
?>
<?php include '../../includes/header.php'; ?>
<section id="rightCol1">
<!-- PAGE CODE STARTS HERE-->

<h1>Event Handlers</h1>    

<p onclick="alert('you clicked me');">onclick alert ... </p>
<br/>
<p style="width:200px; border: thin dashed #930;" onmouseover="alert('you clicked me');">onMouseover alert ... </p> 


 <form id="frmSupport" name="frmSupport" method="post" action="support_process.htm">
        <fieldset id="quickSupport">
          <legend><strong>Quick Support</strong></legend>
          <p> If your request isn't urgent, drop us a quick line and we'll get back to you within 24 hours </p>
          <p>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" tabindex="10" />
          </p>
          <p>
            <label for="email">Email:</label>
            <input type="text" value="your email" name="email" id="email" tabindex="20" />
          </p>
          <p>
            <label for="tourID">Tour Name: </label>
            <input type="text" name="tourID" id="tourID" tabindex="30" />
          </p>
          <p>Tour Status:<br />
            <label class="inline">
              <input type="radio" name="tourStatus" value="booked" id="tourStatus_0" tabindex="40" />
              I have booked a tour</label>
            <label class="inline"><br />
              <input type="radio" name="tourStatus" value="current" id="tourStatus_1" tabindex="50" />
              I am on a tour</label>
          </p>
          <p>
            <label for="comments">Comments </label>
            <br />
            <textarea name="comments" id="comments" cols="45" rows="5" tabindex="60"></textarea>
          </p>
          <p>
            <input type="submit" name="submit" id="submit" value="Send" tabindex="70" />
          </p>
        </fieldset>
      </form>
      
      
<!-- PAGE CODE ENDS HERE-->

<blockquote>
<p>

Examples: onClick, onMouseover, onLoad, onBlur, onFocus

---------------------------------------------------------------------

//EXAMPLE 1  - not the best way

button onclick="alert('Hello, world');">
	//some other code
/button>


---------------------------------------------------------------------

//EXAMPLE 2

element.event = 

	window.onload =
	nameField.onblur = 
	myElement.onclick = 
	

myElement.onclick = function(){
	
	// your event handler code

}; // you need to put the ; at the end because its a statement.


---------------------------------------------------------------------

//EXAMPLE 3  /*** DOES NOT WORK BEFORE IE 9 ***/

document.addEventListener('click', myFunction, false );  // dont us ON . i.e onclick

document.addEventListener('click', anotherFunction, false );

document.removeEventListener('click', anotherFunction, false );


---------------------------------------------------------------------

//EXAMPLE 4  /*** WORKS BEFORE IE 9 ***/

document.attachEvent('onclick', myFunction);


---------------------------------------------------------------------

// CROSS BROWSER METHOD - or use jquery :)

function addCrossBrowserListener (elementname, eventName, functionName){

	// does the addEventListener function exist? 
	if (elementName.addEventListener){
		//yes - use it
		elementName.addEventListener(eventName, functionName, false);
		return true;
	} else {
		//no - use attachEvent
		elementName.attachEvent("on" + eventName, functionName);
		return true;
	}

}



---------------------------------------------------------------------
---------------------------------------------------------------------
---------------------------------------------------------------------


// DOCUMENT.ONCLICK 

document.onclick = function(){
	alert("You clicked something")
}


--------------------------------------------------

var myImage = document.getElementById("mainImage");
myImage.onclick = function(){
	alert("You clicked the image");
}



---------------------------------------------------------------------
// NOTE: SOMETIME YOU SHOULD PU THE JS FILE AT THE TOP
---------------------------------------------------------------------

//USING WINDOW.ONLOAD

//window is the top level
//it can tell you when everything is loaded
//if you js file is at the top you can do this:
// write this once per page

function prepareEventHandlers(){

	var myImage = document.getElementById("mainImage");
	myImage.onclick = function(){
		alert("You clicked the image");
	}
}

window.onload = function(){
	prepare anything we need to load
}





---------------------------------------------------------------------
---------------------------------------------------------------------
---------------------------------------------------------------------

// DOCUMENT.ONFOCUS
// DOCUMENT.ONBLUR

var emailField = document.getElementById("email");

//onfocus is when you click it
emailField.onfocus = function(){
	if( emailField.value == "your email"){
		emailField.value = "";
	}
};

emailField.onblur = function(){
	if( emailField.value == ""){
		emailField.value = "your email";
	}
};


</p>
</blockquote>

<script language="javascript">
var emailField = document.getElementById("email");

//onfocus is when you click it
emailField.onfocus = function(){
	if( emailField.value == "your email"){
		emailField.value = "";
	}
};

emailField.onblur = function(){
	if( emailField.value == ""){
		emailField.value = "your email";
	}
};
</script>

</section><!-- END RIGHTCOL1 -->
<?php include '../../includes/footer.php'; ?>  