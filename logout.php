<?php
include("include/header.php");

?>

<?php
	session_destroy();
	redirect("index.php");
?>	

<?php
include("include/footer.php");
?>
