<h1>logout</h1>
<?php 
sssion_destroy();
header("location: index.php");
?>