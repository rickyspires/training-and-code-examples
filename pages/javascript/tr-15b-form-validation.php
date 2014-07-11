<?php
$parentNav="javascript-home";
$pageName="javascript-home";
$category="javascript";
?>
<?php include '../../includes/header.php'; ?>

	<script type="text/javascript" src="../../assets/js/vendor/jquery.js"></script>  
		<script type="text/javascript" src="../../assets/js/plugins/validate.js"></script>  
		
		<script type="text/javascript">
			$(document).ready(function(){
			
			//USA TELEPHONE VALIDATION - this block of code was copied from the js website
				jQuery.validator.addMethod("phoneUS", function(phone_number, element) {
			    phone_number = phone_number.replace(/\s+/g, ""); 
				return this.optional(element) || phone_number.length > 9 &&
					phone_number.match(/^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/); //USA NUMBER
			}, "Please specify a valid phone number");
			
			
				$("#form").validate();
			});
		</script>

		<style type="text/css">
			body { font-family: Arial; font-size: 12px; }
			fieldset { border:0; }
			label { display: block; width: 180px; float:left; clear:both; margin-top: 10px; }
			label em { display: block; float:right; padding-right:8px; color:red; }
			textarea, input { float:left; width: 220px; padding: 2px; }
			textarea { height: 180px; }
			#submit { margin-left:180px; clear:both; width:100px; }
			
			label.error { float: left; color: red; clear:none; width:200px; padding-left: 10px; font-size: 11px; }
			.required_msg { padding-left: 180px; clear:both; float:left; color:red; }
		</style>
	</head>
	<body>
		<br/>
		<form action="" method="post" id="form">
			<fieldset>
			
				<label for="name">Name: <em>*</em></label>
				<input type="text" name="name" id="name" class="required" value="<?php echo $form['name']; ?>"> <?php echo $error['name'] ?>
				
				<label for="phone">Phone (000-000-0000): <em>*</em></label>
				<input type="text" name="phone" id="phone" class="required phoneUS" value="<?php echo $form['phone']; ?>"> <?php echo $error['phone'] ?>
				
				<label for="fax">Fax (000-000-0000):</label>
				<input type="text" name="fax" id="fax" value="<?php echo $form['fax']; ?>">				
				<label for="email">Email: <em>*</em></label>
				<input type="text" name="email" id="email" class="required email" value="<?php echo $form['email']; ?>"> <?php echo $error['email'] ?>
				
				<label for="comments">Comments:</label>
				<textarea name="comments" id="comments"><?php echo $form['comments']; ?></textarea>
				
				<p class="required_msg">* required fields</p>
				
				<input type="submit" name="submit" id="submit">
			
			</fieldset>
		</form>
		
		
<blockquote>

<p>
JAVASCRIPT - client slide, instant results but can be easily bypassed by disabling javascript
PHP, ASP, NET etc... - SERVER SIDE, processed by the server. safer

We will use both together.

For Javascript we will use a plugin called validate.js
// you need to install the file
// http://docs.jquery.com/Plugins/Validation
// or http://bassistance.de/jquery-plugins/jquery-plugin-validation

We also need a success.php file

----------------------------------
JAVASCRIPT

To activate the validate.js file you need to add class="required" to the element

For email you need to add an extra class of class="email"

In Javascript you need to add $("#form").validate();

Go to the pluging for more options (http://docs.jquery.com/Plugins/Validation)


----------------------------------
PHP

First add a value to each input with some added php to save the value entered.
	
	value="?php echo $form['name']; ? >"
	value="?php echo $form['phone']; ? >"
	value="?php echo $form['fax']; ? >"
	value="?php echo $form['email']; ? >"
	value="?php echo $form['comments']; ? >"
	
	or
	
	value="?php if(isset($form['name']){ echo $form['name']; }?>"
	
	or
	
	create a new file called contact.php (or what ever) and add in all the php logic
	
	?php 
		$error_open = "< label class='error'>">;
		$error_close = "< /label>">;
		$valid_form = "TRUE	">;
		$redirect = "success.php";
	>
	
	
	

After the inputs we need to echo out the error messages (only on required fiends)

	< ?php echo $error['name']; ? >
	< ?php echo $error['phone']; ? >
	< ?php echo $error['email']; ? >
	
	
</p>

</blockquote>

</section><!-- END RIGHTCOL1 -->
<?php include '../../includes/footer.php'; ?>  