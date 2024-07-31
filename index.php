<?
include("include/header.php");
?>
<?
if(isset($_POST['submit']))
		{
			if(!$_POST['username'])
					$error ="Admin please enter your username<br/>";
			if(!$_POST['password'])	
					$error .="Admin please enter your password<br/>";
			else
			    {
				  	$sql="select * from admininfo where user_name='$_POST[username]' and password='$_POST[password]'";
					$rs = mysql_query($sql);
			        $count = mysql_num_rows($rs);
			        
					if(!$count)
						 $error = "Invalid username/password, try again.";
				    
				    else
						{
						$row = mysql_fetch_array($rs);
						login($row['id'], $row['user_name']);
						
						}	
							 		 
				}	
				
		}			

 if(isset($_SESSION['id']))
	 {   
		 echo "<br><br><font color='blue'>Hi,</font><font color='red'> " . $_SESSION['user_name']."</font>";
		 echo "<br><h2>Welcome to library management</h2>";
		 ?>
		
<html >
<head>


<link rel="stylesheet" href='zoom.css' type="text/css" media="screen, projection" />

</head>
<body>

<br><br><br>


	<?	
		}




if(!isset($_SESSION['id'] ))
		{
		?>
		<div class="heading">Sec<br>Library management &nbsp;&nbsp;system</div>
		<br><hr><hr><hr><hr><hr>
		<div id="login"><br>
		<div id="headfont1"><b>Admin login panel</b></div><br><hr><hr><hr><hr><hr><br>
		<table width="100%">
		<? if(isset($error)){  ?>
		<div class="loginerror"><?=isset($error) ? $error : ""?></div>  <?}?>
		<form action="index.php" method="POST">
		<tr><td width="90px"></td><td width="20px"><img src="images/user.png" height="50px"></td><td><input id="input" type="text" name="username" placeholder="Username"></td></tr>
		<tr><td></td><td><img src="images/pass.png" height="50px"></td><td><input id="input"  type="password" name="password" placeholder="Password"></td></tr>
		<tr><td></td><td></td><td><br><input id="inputbutton" class="button" type="submit" name="submit" value="Login"></td></tr>
		</form>
		</table>
		</div>
		</body>
</html>
		
	<?	
		}
include("include/footer.php");
?>
