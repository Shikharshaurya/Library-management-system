<?
include("include/header.php");
?>
<?
   if(isset($_POST['submit']))
   {

    $sql = "insert into departments (name)
           values('$_POST[dept]')";

    mysql_query("$sql");  
    echo "Added";     
   }


   ?>
<div id="headfont"><font>Update all information</font></div><br><hr><hr><hr><hr><hr><br>

<form action="addredit.php" method="POST">
	<label>Add a new department : </label><input class="inputs" type="text" name="dept"><br>
	<input type="submit" name="submit" class="button" value="Add this department">
</form>
<br>
<br><br>
<br><br>
<br>

<?
include("include/footer.php");
?>