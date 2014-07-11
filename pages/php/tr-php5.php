<?php
$parentNav="php-home";
$pageName="php-basics-2";
$category="php-basics";
?>
<?php include '../../includes/header.php'; ?>
<style type="text/css"></style>
<script></script>
<section id="rightCol1">
<h1>PHP - Loops</h1>

<?php
echo "WHILE LOOP</br>";
	
$count = 1;
while ($count <= 10){
	echo "hello while equal or less than 10 - " . $count . "</br>";
	++$count;
}


echo "</br>";


echo "FOR LOOP</br>";

for($count=1; $count <=10; ++$count){
	echo "hello for equal or less than 10 - " . $count . "</br>";
}


echo "</br>";


echo "FOREACH LOOP</br>";

$shopping_cart = array('fish','dog','car');

foreach($shopping_cart as $item){
	echo "Item - " . $item . "</br>";
}

?>
<blockquote>
// WHILE LOOP
	
$count = 1;
while ($count <= 10){
	echo "hello equal or less than 10 - " . $count . "</br>";
	++$count;
}


// FOR LOOP
echo "FOR LOOP</br>";

for($count=1; $count <=10; ++$count){
	echo "hello for equal or less than 10 - " . $count . "</br>";
}



//returns
hello equal or less than 10 - 1
hello equal or less than 10 - 2
hello equal or less than 10 - 3
hello equal or less than 10 - 4
hello equal or less than 10 - 5
hello equal or less than 10 - 6
hello equal or less than 10 - 7
hello equal or less than 10 - 8
hello equal or less than 10 - 9
hello equal or less than 10 - 10


--------------------------------------

echo "FOREACH LOOP</br>";

$shopping_cart = array('fish','dog','car');

foreach($shopping_cart as $item){
	echo "Item - " . $item . "</br>";
}

Item - fish
Item - dog
Item - car


</blockquote>

</section><!-- END RIGHTCOL1 -->

<script src="../../assets/js/vendor/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

});
</script>
<?php include '../../includes/footer.php'; ?>  