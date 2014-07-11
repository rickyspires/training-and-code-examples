<?php session_start(); ?>
<?php
$parentNav="php-home";
$pageName="php-basics-2";
$category="php-basics";
?>
<?php include '../../includes/header.php'; ?>
<style type="text/css"></style>
<script></script>
<section id="rightCol1">
<h1>PHP - Advanced PHP - MVC - HTACCESS for CONTROLLERS</h1>

<?php

define('APPLICATION_PATH', realpath('../../pages/'));

$path = array(
	APPLICATION_PATH,
	get_include_path()
);

set_include_path(implode(PATH_SEPARATOR, $path));

function __autoload($className)
{
	$filename = str_replace('\\', '/', $className) . '.php';
	require_once $filename;
}

use \mvc\tutorial2\model as Models;

// SET IT
$ricky = new Models\User("ricky","spires","9 writtle walk");
$kivilcim = new Models\User("kivilcim","bakan","istanbul");

$adminGroup = new Models\Group();
$adminGroup->setName("administrators");
$adminGroup->setAccessLevel(0); 
$adminGroup->setUsers(array("ricky","kivilcim")); 


echo $ricky;
echo "<br>";
echo $kivilcim;
?>
<blockquote>

- CREATE THE HTACCESS FILE

	- if it cant find a file it will redirect to index.php		
			
	- To create the .htaccess file in windows
	- you need to use terminal
	- go to your home public folder
		$cd
		$ cd /Sites/PROJECTS/test-site/pages
		$ vi .htaccess
		press i
		type:
		
			RewriteEngine On
			RewriteCond %{REQUEST_FILENAME} -s [OR] 
			RewriteCond %{REQUEST_FILENAME} -l [OR] 
			RewriteCond %{REQUEST_FILENAME} -d 
			
			RewriteRule ^.*$ - [NC,L]
			RewriteRule ^.*$ index.php [NC,L]
			
			
		press escape 
		then :
		then w	
		
		you will see ".htaccess" [New] 7L, 193C written
		
		then do :
		then do q
		
	- 
		
</blockquote>

</section><!-- END RIGHTCOL1 -->

<script src="../../assets/js/vendor/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

});
</script>
<?php include '../../includes/footer.php'; ?>  