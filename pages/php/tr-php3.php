<?php
$parentNav="php-home";
$pageName="php-basics-2";
$category="php-basics";
?>
<?php include '../../includes/header.php'; ?>
<style type="text/css"></style>
<script></script>
<section id="rightCol1">
<h1>PHP - Conditional statements</h1>

<?php
if(1<3){
	echo "yes";
}else{
	echo "no";
}

$name = "stef";
$name2 = "paul";

if($name == $name2){
	echo "yes";
}else{
	echo "no";
}

if($name == $name2){
	echo "yes";
}elseif($name == $name)
{
	echo "no";
}




?>
<blockquote>


if(1<3){
	echo "yes";
}else{
	echo "no";
}

$name = "stef";
$name2 = "paul";

if($name == $name2){
	echo "yes";
}else{
	echo "no";
}

if($name == $name2){
	echo "yes";
}elseif($name == $name)
{
	echo "no";
}



</blockquote>

</section><!-- END RIGHTCOL1 -->

<script src="../../assets/js/vendor/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

});
</script>
<?php include '../../includes/footer.php'; ?>  