<?
include("include/header.php");
?><?

if(isset($_SESSION['id'])){ 
	
	?>
<?		
 if(isset($_POST['submit']))
 {
	if(!$_POST['email'])
	   $error="Please enter your email";
	if(!$_POST['username'])   
		$error .="Please enter your username";
	 if(!$_POST['password'])   
		$error .="Please enter your password";	
   	 if(!$error)	
		 {
			 $updatesql="update admininfo set email='$_POST[email]',user_name='$_POST[username]',password='$_POST[password]' where id='$_SESSION[id]'";
			 $result=mysql_query($updatesql);
	
?>
			<script>
			    alert("Account information updated successfully");
			</script>
<?
  redirect("account_setting.php");
 }	
		 }	
	
?>	
	
	

		<?
		//echo $_SESSION['id'];
		$sql="select * from admininfo where id='$_SESSION[id]'";
		$result=mysql_query($sql);
		$array=mysql_fetch_array($result);
		?>


<div id="headfont"><font>Edit account information</font></div><br><hr><hr><hr><hr><hr><br>
<table align="center">
				<? if(isset($error)){  ?>
		            <div class="error"><?=isset($error) ? $error : ""?></div>  <?}?>
				<form action="account_setting.php" method="POST">
				   <tr><td>Email :</td><td><input class="inputs" type="text" name="email"  value='<?=$array['email']?>'></td></tr>
				   <tr><td>Username :</td><td><input class="inputs" type="text" name="username"  value='<?=$array['user_name']?>'></td></tr>
				   <tr><td>Password :</td><td><input class="inputs" type="text" name="password"  value='<?=$array['password']?>'></td></tr>
				   <tr><td></td><td><input type="submit" name="submit" class="button" value="Update your information"></td></tr>
				</form>

</table>


<?
}
include("include/footer.php");
?>
