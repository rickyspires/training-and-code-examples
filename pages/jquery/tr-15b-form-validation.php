<?php
$parentNav="javascript-home";
$pageName="javascript-home";
$category="javascript";
?>
<?php include '../../includes/header.php'; ?>
<section id="rightCol1">
<h1>DOM - Forms Object</h1>    

<script language="javascript" type="text/javascript">

var the_form = document.forms;
//alert(the_form); // gives you "Object HTML collection"

function form_type(){
	var form_type = document.forms.sendmail;
	alert(form_type); //"Object HTML form element"
}

function check_form_method(){
	// var the_form = document.forms.sendmail.method;
	var the_form = document.sendmail.method;
	alert(the_form);
}


function check_input_first(){
	var textbox = document.sendmail.first.value;
	alert(textbox);
}


function change_input_last(){
	var textbox = document.sendmail.last.value;
	alert(textbox);
	
	textbox = "spangle";
	alert(textbox);
}

function checkform(){

	var first_name = document.formcheck.first_name.value;
	var last_name = document.formcheck.last_name.value;
	var email_address = document.formcheck.email_address.value;
	
	alert("hello check form");
	
	if(email_address.indexOf("@") == "-1" || first_name == "" || last_name == "" ||  email_address == ""){
		alert("there was a problem");
		return false;
	}
	else
	{
		alert("You filled in the form... lets go!");
		return true;
	}
	
}



</script>

<form action="" method="post" name="sendmail" target="_self">
	First:<input name="first" type="text" value="ricky"/>
	Last:<input name="last" type="text" value="spires"/>
	<input name="submit" type="submit" value="submit"/>
</form> 

<br/>
<br/><br/>


<form action="http://testsite.com/pages/javascript/tr-15-forms2.php" method="post" name="formcheck" target="_self" onsubmit="return checkform()">
	First:<input name="first_name" type="text" value=""/>
	Last:<input name="last_name" type="text" value=""/>
	Email:<input name="email_address" type="text" value=""/>
	
	<input type="reset"/>
	<input name="" type="submit"/>
</form> 


<p onclick="form_type()" >Form Type</p>
<p onclick="check_form_method()" >Check Form Method</p>
<p onclick="check_input_first()" >Check First Name</p>
<p onclick="change_input_last()" >Change spires to spangle</p>

<p onclick="checkform()" style="width:100px; background-color:#960; padding: 5px; color: #FFF; cursor: pointer">Form</p>


<blockquote>
<p>
DOM - Forms & Validations

----------------------------


var the_form = document.forms;
//alert(the_form); // gives you "Object HTML collection"

function form_type(){
	var form_type = document.forms.sendmail;
	alert(form_type); //"Object HTML form element"
}

function check_form_method(){
	// var the_form = document.forms.sendmail.method;
	var the_form = document.sendmail.method;
	alert(the_form);
}


function check_input_first(){
	var textbox = document.sendmail.first.value;
	alert(textbox);
}


function change_input_last(){
	var textbox = document.sendmail.last.value;
	alert(textbox);
	
	textbox = "spangle";
	alert(textbox);
}

function checkform(){

	var first_name = document.formcheck.first_name.value;
	var last_name = document.formcheck.last_name.value;
	var email_address = document.formcheck.email_address.value;
	
	alert("hello check form");
	
	if(email_address.indexOf("@") == "-1" || first_name == "" || last_name == "" ||  email_address == ""){
		alert("there was a problem");
		return false;
	}
	else
	{
		alert("You filled in the form... lets go!");
		return true;
	}
	
}



form action="" method="post" name="sendmail" target="_self">
	First:input name="first" type="text" value="ricky"/>
	Last:input name="last" type="text" value="spires"/>
	input name="submit" type="submit" value="submit"/>
/form> 



form action="http://testsite.com/pages/javascript/tr-15-forms2.php" method="post" name="formcheck" target="_self" onsubmit="return checkform()">
	First:input name="first_name" type="text" value=""/>
	Last:input name="last_name" type="text" value=""/>
	Email:input name="email_address" type="text" value=""/>
	
	input type="reset"/>
	input name="" type="submit"/>
/form> 


p onclick="form_type()" >Form Type
p onclick="check_form_method()" >Check Form Method
p onclick="check_input_first()" >Check First Name
p onclick="change_input_last()" >Change spires to spangle

p onclick="checkform()" style="width:100px; background-color:#960; padding: 5px; color: #FFF; cursor: pointer">Form



</blockquote>


</section><!-- END RIGHTCOL1 -->
<?php include '../../includes/footer.php'; ?>  