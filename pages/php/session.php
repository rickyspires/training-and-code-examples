<?php session_start(); ?>
<?php 
echo $_SESSION['time']; 
echo "<br>";
echo $_SESSION['browser'];

echo "Session ID:" .session_id();
//ID:4973f31625566f926a90ef62349e4316
?>