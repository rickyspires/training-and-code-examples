<?php
$parentNav="jquery-home";
$pageName="jquery";
$category="jquery";
?>
<?php include '../../includes/header2.php'; ?>
<section id="rightCol1">
<!-- PAGE CODE STARTS HERE-->

<?php
ini_set("display_errors", 0);

$limit = 5;
$file = "http://killerwebsites.com/forums/feed/rss/";

if($xml = simplexml_load_file($file)){

	/*
	//TEST
	echo "<pre>";
	print_r($xml);
	echo "</pre>";
	*/
	
	echo "<ul>";
	foreach($xml->channel->item as $item){
		echo"<li><a href="$item->link">$item</a></li>";
		$limit--;
		if($limit == 0){ break; }
	}
	echo "/<ul>";
}
else
{
	echo"<strong>ooops! The most recent topics can not be displayed</strong>";
}
?>


<blockquote>
<p>

// WE ARE USING SIMPLEXML_LOAD_FILE
// http://us3.php.net/manual/manual/en/function.simplexml_load_file  .....
// php5 only
// use phpinfo(); to test php version


// STEP 1
// go to killersites.com/forums and click the rss link in the footer

// STEP 2
// Add this code to get-forum.php

 $file = "http://killerwebsites.com/forums/feed/rss/";
 $xml = simplexml_load_file($file);


// STEP 3
// Check what the var contains
 
 echo "< pre>";
	print_r($xml);
 echo "< /pre>";


// STEP 4
// We want to grab the title and the link
// the xml file looks like this

< ?xml version="1.0" encoding="utf-8" ? >
< rss version="2.0" >
	< channel>
		< title>< /title>
		< link>< /link>
		< description>< /description>
		< lastBuildDate>< /lastBuildDate>
		< generator>PunBB< /generator>
			< item>
				< title>< /title>
				< link>< /link>
				< description>< /description>
				< author>< /author>
				< pubDate>< /pubDate>
				< guid>< /guid>
			< /item>


// use a foreach loop

	echo "< ul>";
	foreach($xml->channel->item as $item){
		echo"< li>< a href="$item->link">$item< /a>< /li>";
	}
	echo "/< ul>";



// STEP 5
// Limit the results
 
 $limit = 5;

	echo "< ul>";
	foreach($xml->channel->item as $item){
		echo"< li>< a href="$item->link">$item< /a>< /li>";
		$limit--;
		if($limit == 0){ break; }
	}
	echo "/< ul>";




// STEP 6
// Set display errors to 0

ini_set("display_errors",0 );


if($xml = simplexml_load_file($file)){

	echo "< ul>";
	foreach($xml->channel->item as $item){
		echo"< li>< a href="$item->link">$item< /a>< /li>";
		$limit--;
		if($limit == 0){ break; }
	}
	echo "/< ul>";
}
else
{
	echo"< strong>ooops! The most recent topics can not be displayed< /strong>";
}



</p>
</blockquote>


<!-- PAGE CODE ENDS HERE-->
</section><!-- END RIGHTCOL1 -->
<script src="../../assets/js/vendor/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

});
</script>
<?php include '../../includes/footer.php'; ?>  