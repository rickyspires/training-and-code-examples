<?php 
		$error_open = "<label class='error'>">;
		$error_close = "</label>">;
		$valid_form = "TRUE	">;
		$redirect = "success.php";

// SET YOUR VALIEBLES

//form elements
$form_elements = array('name','phone','fax','email','comments');


//required for validation
$required = array('name','phone','email');



//set error variables as blank
//loop through the required array

foreach($required as $require)
{
	$error[$require] = '';
}


//check if form is submitted

if (isset($_POST['submit']))
{
	//process form
	foreach($form_elements as $element)
	{
		$form[$element] = htmlspecialchars($_POST[$element]);
	}
	
	//check form elements
	
	
	//check form is still valid
	if($valid_form)
	{
		//redirect
		header("Location:" . $redirect);
		// add email here
	}
	else
	{
		include('tr-15b-form-validation.php');
	}

} 
else 
{
	//elements are blank
	foreach($form_elements as $element)
	{
		$form[$element] = '';
	}

	// display form
	include('tr-15b-form-validation.php');
}
?>