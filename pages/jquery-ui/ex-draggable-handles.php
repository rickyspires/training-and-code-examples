<?php
$parentNav="jquery-ui-home";
$pageName="jquery-ui";
$category="jquery-ui";
?>
<?php include '../../includes/header.php'; ?>

<link rel="stylesheet" href="../../assets/css/ui-lightness/jquery-ui-1.10.2.custom.min.css" />
 <style>
#draggable, #draggable2 { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 0 10px 10px 0; }
#draggable p { cursor: move; }
</style>

<section id="rightCol1">
<!-- PAGE CODE STARTS HERE-->

<h1>JQUERY DRAGGABLE</h1>

<div id="draggable" class="ui-widget-content">
<p class="ui-widget-header">I can be dragged only by this handle</p>
</div>
<div id="draggable2" class="ui-widget-content">
<p>You can drag me around…</p>
<p class="ui-widget-header">…but you can't drag me by this handle.</p>
</div>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<blockquote>
 $(function() {
$( "#draggable" ).draggable({ handle: "p" });
$( "#draggable2" ).draggable({ cancel: "p.ui-widget-header" });
$( "div, p" ).disableSelection();
});
</blockquote>

</section><!-- END RIGHTCOL1 -->

<script src="../../assets/js/vendor/jquery-1.9.1.min.js"></script>
<script src="../../assets/js/vendor/jquery-ui-1.10.2.custom.min.js"></script>
<script>
$(function() {
$( "#draggable" ).draggable({ handle: "p" });
$( "#draggable2" ).draggable({ cancel: "p.ui-widget-header" });
$( "div, p" ).disableSelection();
});
</script>

<?php include '../includes/footer.php'; ?>  