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
<h1>PHP - Advanced PHP - MVC - autoloading with namespaces</h1>

<?php

define('APPLICATION_PATH', realpath('../../pages/'));

$path = array(
	APPLICATION_PATH,
	APPLICATION_PATH . '/mvc',
	get_include_path()
);
set_include_path(implode(PATH_SEPARATOR, $path));

function __autoload($className)
{
	$filename = str_replace('\\', '/', $className) . '.php';
	require_once $filename;
}

use \mvc\killerphp as pth;

$user = new pth\model\User();
// insted uf this: $user = new \mvc\killerphp\model\User();
echo $user->getName();


echo "<br/>";
$user = new pth\controllers\Test();
//new \mvc\killerphp\controllers\Test();


?>
<blockquote>

//models/user.php

namespace mvc\killerphp\model;
class User
{
	public function getName()
	{
	return "john smith";
	}
}

-------------------------------------
//tr_php8.php

define('APPLICATION_PATH', realpath('../../'));

$path = array(
	APPLICATION_PATH,
	APPLICATION_PATH . '/mvc',
	get_include_path()
);
set_include_path(implode(PATH_SEPARATOR, $path));

function __autoload($className)
{
	$filename = str_replace('\\', '/', $className) . '.php';
	require_once $filename;
}

$user = new \mvc\killerphp\model\User();
echo $user->getName();


-------------------------------------
//models/test.php

namespace mvc\killerphp\controllers;
class Test
{
	public function __constructor()     //this is the same as public function Test . using __constructor() saves writing it twice :)
	{
	echo "im a test class in controllers";
	}
}

add to the bottom of tr_php8.php

echo"< br/>";
new \mvc\killerphp\controllers\Test();



-------------------------------------

// you can change (reuse) the path by using "use"


use \mvc\killerphp\model as mdl;
$user = new mdl\User();

// insted uf this: $user = new \mvc\killerphp\model\User();
echo $user->getName();


use \mvc\killerphp\controllers as cont;
$user = new cont\Test();

//new \mvc\killerphp\controllers\Test();


	or you could do.....



use \mvc\killerphp as pth;

$user = new pth\model\User();
// insted uf this: $user = new \mvc\killerphp\model\User();
echo $user->getName();


echo "<br/>";
$user = new pth\controllers\Test();
//new \mvc\killerphp\controllers\Test();









?>


</blockquote>

</section><!-- END RIGHTCOL1 -->

<script src="../../assets/js/vendor/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

});
</script>
<?php include '../../includes/footer.php'; ?>  