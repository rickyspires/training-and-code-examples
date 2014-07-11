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
<h1>PHP - Advanced PHP - MVC - Magic methods, Getters and Setters</h1>

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

use \mvc\tutorial1\model as Models;

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

</blockquote>

</section><!-- END RIGHTCOL1 -->

<script src="../../assets/js/vendor/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

});
</script>
<?php include '../../includes/footer.php'; ?>  