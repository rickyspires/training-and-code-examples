<?php
$parentNav="css-home";
$pageName="css-flipbook-1";
$category="css-animation";
?>
<?php include '../../includes/header.php'; ?>
 <style rel="stylesheet" type="text/css" />

.outer {margin:0 auto; position:absolute; left:0; bottom:0; width:600px; height:400px;}
.inner {width:600px; 
height:400px; 
position:absolute; 
left:0; 
top:0; 
background:url(peter/pages.gif); 
background-color: #FFF;}

.p1 {width:0px; 
height:400px; 
position:absolute; 
left:600px; 
top:0px; overflow:hidden; 
border-right:1px solid #600; 
background:url(peter/pagel.gif) 
right top;
background-color: #eee;
-webkit-transition: 1.5s ease-in-out;
-moz-transition: 1.5s ease-in-out;
-ms-transition: 1.5s ease-in-out;
-o-transition: 1.5s ease-in-out;
transition: 1.5s ease-in-out;
}
.p1 div {width:300px; height:400px; position:absolute; left:0; top:0; 
background:url(peter/edge.gif) repeat-y left top;}

.p2 {width:0px; height:400px; position:absolute; 
left:600px; top:0; overflow:hidden; 
background:url(peter/pager.gif) right top;
-webkit-transition: 1.5s ease-in-out;
-moz-transition: 1.5s ease-in-out;
-ms-transition: 1.5s ease-in-out;
-o-transition: 1.5s ease-in-out;
transition: 1.5s ease-in-out;
}
.p2 div {width:300px; height:400px; position:absolute; left:-300px; top:0;
-webkit-transition: 1.5s ease-in-out;
-moz-transition: 1.5s ease-in-out;
-ms-transition: 1.5s ease-in-out;
-o-transition: 1.5s ease-in-out;
transition: 1.5s ease-in-out;
}

.click a:hover .outer .p1 {width:300px; left:0; top:0px;}
.click a:hover .outer .p2 {width:300px; left:300px; top:0;}
.click a:hover .outer .p2 div {left:0; top:0;}

.frame {position:relative; width:600px; height:400px; margin:0 auto; border:10px solid #600; overflow:hidden;}

.frame a {display:block; outline:0; position: absolute; left:0; top:0; width: 600px; height: 400px; color:#000; font-size:15px; text-decoration:none;}

.click a:active, .click a:focus {z-index: 20;}
.click a:active + a, .click a:focus + a {z-index: 30;}
.click a#a1 {z-index: 20;}
.click a#a11:active, .click a#a11:focus {z-index:10;}

.hover a:hover {z-index: 20;}
.hover a:hover + a {z-index: 30;}
.hover a#a1 {z-index: 20;}
.hover a#a11:hover {z-index:10;}

.frame img {margin:0 auto;}
.frame p {width:260px; height:360px; padding:20px; display:table-cell; font: 14px/25px georgia, serif; color:#600; text-align:justify; vertical-align:middle;}
.frame p.ctr {text-align:center;}
</style>

<section id="rightCol1">
<h1>CSS3 Page Flip Book 1</h1>
<h2>Firefox 4, Safari, Chrome and Opera</h3>

<br />

<div class="frame click">
<a id='a1' href='#x' tabindex="1">
<div class="outer">
<div class="inner">
<p class="ctr">
The Tale of Peter Rabbit<br />
by<br />
Beatrix Potter<br /><br />
<img src="peter/pr.png" alt="" />
</p>
<p>
Once upon a time there were four little Rabbits, and their names were-- Flopsy, Mopsy, Cotton-tail, and Peter.<br/>
They lived with their Mother in a sand-bank, underneath the root of a very big fir-tree.
</p>
</div>
<div class="p1"><div>
<p>
"Now, my dears," said old Mrs. Rabbit one morning, "you may go into the fields or down the lane, but don't go into Mr. McGregor's garden: your Father had an accident there; he was put in a pie by Mrs. McGregor."
</p>
</div></div>
<div class="p2"><div>
<p>
"Now run along, and don't get into mischief. I am going out."<br />
Then old Mrs. Rabbit took a basket and her umbrella, and went through the wood to the baker's.<br />
She bought a loaf of brown bread and five currant buns.
</p>
</div></div>
</div>
</a>


<a id='a2' href='#x' tabindex="2">
<div class="outer">
<div class="inner">
<p>
"Now, my dears," said old Mrs. Rabbit one morning, "you may go into the fields or down the lane, but don't go into Mr. McGregor's garden: your Father had an accident there; he was put in a pie by Mrs. McGregor."
</p>
<p>
"Now run along, and don't get into mischief. I am going out."<br />
Then old Mrs. Rabbit took a basket and her umbrella, and went through the wood to the baker's.<br />
She bought a loaf of brown bread and five currant buns.
</p>
</div>
<div class="p1"><div>
<p>
Flopsy, Mopsy, and Cotton-tail, who were good little bunnies, went down the lane to gather blackberries;<br />
But Peter, who was very naughty, ran straight away to Mr. McGregor's garden, and squeezed under the gate!
</p>
</div></div>
<div class="p2"><div>
<p>
First he ate some lettuces and some French beans; and then he ate some radishes;<br />
And then, feeling rather sick, he went to look for some parsley.
</p>
</div></div>
</div>
</a>


<a id='a3' href='#x' tabindex="3">
<div class="outer">
<div class="inner">
<p>
Flopsy, Mopsy, and Cotton-tail, who were good little bunnies, went down the lane to gather blackberries;<br />
But Peter, who was very naughty, ran straight away to Mr. McGregor's garden, and squeezed under the gate!
</p>
<p>
First he ate some lettuces and some French beans; and then he ate some radishes;<br />
And then, feeling rather sick, he went to look for some parsley.
</p>
</div>
<div class="p1"><div>
<p>
But round the end of a cucumber frame, whom should he meet but Mr. McGregor!<br />
Mr. McGregor was on his hands and knees planting out young cabbages, but he jumped up and ran after Peter, waving a rake and calling out, "Stop thief."
</p>
</div></div>
<div class="p2"><div>
<p>
Peter was most dreadfully frightened; he rushed all over the garden, for he had forgotten the way back to the gate.<br />
He lost one of his shoes among the cabbages, and the other shoe amongst the potatoes.
</p>
</div></div>
</div>
</a>


<a id='a4' href='#x' tabindex="4">
<div class="outer">
<div class="inner">
<p>
But round the end of a cucumber frame, whom should he meet but Mr. McGregor!<br />
Mr. McGregor was on his hands and knees planting out young cabbages, but he jumped up and ran after Peter, waving a rake and calling out, "Stop thief."
</p>
<p>
Peter was most dreadfully frightened; he rushed all over the garden, for he had forgotten the way back to the gate.<br />
He lost one of his shoes among the cabbages, and the other shoe amongst the potatoes.
</p>
</div>
<div class="p1"><div>
<p>
After losing them, he ran on four legs and went faster, so that I think he might have got away altogether if he had not unfortunately run into a gooseberry net, and got caught by the large buttons on his jacket.<br />
It was a blue jacket with brass buttons, quite new.
</p>
</div></div>
<div class="p2"><div>
<p>
Peter gave himself up for lost, and shed big tears; but his sobs were overheard by some friendly sparrows, who flew to him in great excitement, and implored him to exert himself.
</p>
</div></div>
</div>
</a>

</div>

<blockquote>
.outer {margin:0 auto; position:absolute; left:0; bottom:0; width:600px; height:400px;}
.inner {width:600px; height:400px; position:absolute; left:0; top:0; background:url(peter/pages.gif); background-color: #FFF;}

.p1 {width:0px; height:400px; position:absolute; left:600px; top:0px; overflow:hidden; border-right:1px solid #600; background:url(peter/pagel.gif) right top;
background-color: #eee;
-webkit-transition: 1.5s ease-in-out;
-moz-transition: 1.5s ease-in-out;
-ms-transition: 1.5s ease-in-out;
-o-transition: 1.5s ease-in-out;
transition: 1.5s ease-in-out;
}
.p1 div {width:300px; height:400px; position:absolute; left:0; top:0; background:url(peter/edge.gif) repeat-y left top;}

.p2 {width:0px; height:400px; position:absolute; left:600px; top:0; overflow:hidden; background:url(peter/pager.gif) right top;
-webkit-transition: 1.5s ease-in-out;
-moz-transition: 1.5s ease-in-out;
-ms-transition: 1.5s ease-in-out;
-o-transition: 1.5s ease-in-out;
transition: 1.5s ease-in-out;
}
.p2 div {width:300px; height:400px; position:absolute; left:-300px; top:0;
-webkit-transition: 1.5s ease-in-out;
-moz-transition: 1.5s ease-in-out;
-ms-transition: 1.5s ease-in-out;
-o-transition: 1.5s ease-in-out;
transition: 1.5s ease-in-out;
}

.click a:hover .outer .p1 {width:300px; left:0; top:0px;}
.click a:hover .outer .p2 {width:300px; left:300px; top:0;}
.click a:hover .outer .p2 div {left:0; top:0;}

.frame {position:relative; width:600px; height:400px; margin:0 auto; border:10px solid #600; overflow:hidden;}

.frame a {display:block; outline:0; position: absolute; left:0; top:0; width: 600px; height: 400px; color:#000; font-size:15px; text-decoration:none;}

.click a:active, .click a:focus {z-index: 20;}
.click a:active + a, .click a:focus + a {z-index: 30;}
.click a#a1 {z-index: 20;}
.click a#a11:active, .click a#a11:focus {z-index:10;}

.hover a:hover {z-index: 20;}
.hover a:hover + a {z-index: 30;}
.hover a#a1 {z-index: 20;}
.hover a#a11:hover {z-index:10;}

.frame img {margin:0 auto;}
.frame p {width:260px; height:360px; padding:20px; display:table-cell; font: 14px/25px georgia, serif; color:#600; text-align:justify; vertical-align:middle;}
.frame p.ctr {text-align:center;}
</blockquote>
<!-- PAGE CODE ENDS HERE-->
</section><!-- END RIGHTCOL1 -->
<script src="../../assets/js/vendor/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

});
</script>
<?php include '../../includes/footer.php'; ?>  