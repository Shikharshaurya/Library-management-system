<?
include("include/header.php");
?>
<?
if(isset($_POST['submit']))
		{
			if(!$_POST['group'])
			      $error ="Please enter group id <br>";
			  if(!$_POST['ses'])
			      $error .="Please enter student session <br>";      
			  if(!check_email($_POST['email']))
				  $error .= "Please select a valid email address <br>";   
			 // if(!$_POST['email'])
				 // $error .= "<br>Please enter a email address";       
			  if(!$_POST['mob'])
			      $error .="Please enter student mobile no.";  	    
			  if(!$error)
			  {
				  $sql="update studentinfo set
										name1='$_REQUEST[name1]',
										regno1='$_REQUEST[reg1]',
									    name2='$_REQUEST[name2]',
										regno2='$_REQUEST[reg2]',
										name3='$_REQUEST[name3]',
										regno3='$_REQUEST[reg3]',
										name4='$_REQUEST[name4]',
										regno4='$_REQUEST[reg4]',
										group_id='$_REQUEST[group]',
										session='$_REQUEST[ses]',
										email='$_REQUEST[email]',
										mobile='$_REQUEST[mob]'
										where id='$_REQUEST[std_id]'";
				  $result=mysql_query($sql);
				 ?>
				 <script>
				 alert("Edited successfully");
				 </script>
			<? 
			redirect("studentlist.php");
			 }
			
		}

if(isset($_SESSION['id'])){
?>



<div id="headfont"><font face="flames" size="20">Edit group information</font></div><br><hr><hr><hr><hr><hr><br>
    
<table width="50%" cellpadding="2px">
  
		<? if(isset($error)){  ?>
		<div class="error"><?=isset($error) ? $error : ""?></div>  <?}?>
		<form action="edit_std_info.php?std_id=<?=$_REQUEST[std_id]?>" method="POST">
		<?
				$sql="select * from studentinfo where id='$_REQUEST[std_id]'";
				$result=mysql_query($sql);
				$std= mysql_fetch_array($result);
		?>
		         <tr><td width=40px class="fontcolor">Student's name :</td><td class="fontcolor">Reg. no :</td></tr>
				<tr><td>1. <input class="inputs" type="text" name="name1" value='<?=$std['name1']?>'></td><td><input class="inputs" type="text" name="reg1" value='<?=$std['regno1']?>'></td></tr>
				<tr><td>2. <input class="inputs" type="text" name="name2" value='<?=$std['name2']?>'></td><td><input class="inputs" type="text" name="reg2" value='<?=$std['regno2']?>'></td></tr>
				<tr><td>3. <input class="inputs" type="text" name="name3" value='<?=$std['name3']?>'></td><td><input class="inputs" type="text" name="reg3" value='<?=$std['regno3']?>'></td></tr>
				<tr><td>4. <input class="inputs" type="text" name="name4" value='<?=$std['name4']?>'></td><td><input class="inputs" type="text" name="reg4" value='<?=$std['regno4']?>'></td></tr>
				<tr><td width=40px>Group id :</td><td><input class="inputs" type="text" name="group" value='<?=$std['group_id']?>'></td></tr>
				<tr><td>Session :</td><td>
                       <select class="inputs" name="ses">
                       	<option value='<?=$std['session']?>' > <? echo $std['session']; ?> </option>
                       	    <?
                       	    $date=date("Y"); 
                       	    for($date=date("Y");$date>=2010 ;$date--) {?>
							<?if(!(($date-1)."-".$date == $std['session']))
							{
							?>		
							<option value='<?=($date-1)."-".$date?>' > <? echo ($date-1)."-".$date; ?> </option>
							<?} }?>
						</select>					
					
				</td></tr>
				<tr><td>Email :</td><td><input class="inputs" type="text" name="email"  value='<?=$std['email']?>'></td></tr>
				<tr><td>Mobile no. :</td><td><input class="inputs" type="text" name="mob"  value='<?=$std['mobile']?>'></td></tr>
				<tr><td></td><td><input type="submit" name="submit" class="button" value="Edit student information" ></td></tr>
				
		
		</form>
		
</table>


<?
}
include("include/footer.php");
?>
