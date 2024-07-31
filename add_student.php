<?
include("include/header.php");
?>
<?
if(isset($_POST['submit']))
		{
			if(!$_POST['name1'] || !$_POST['reg1'])
			      $error ="Please enter 1st student complete information <br>"; 
			  if($_POST['ses']=='not')
			      $error .="Please enter student session <br>";      
			  if($_POST['dept']=='not')
			      $error .="Please enter department name <br>";    
			  if(!check_email($_POST['email']))
				  $error .= "Please select a valid email address <br>";   
			 // if(!$_POST['email'])
				 // $error .= "<br>Please enter a email address";       
			  if(!$_POST['mob'])
			     { $error .="Please enter student mobile no.<br>";  }	


				  $dep=$_POST['dept'];
			  	  $sessub=substr($_POST['ses'],2,2);
			  	  $mem1=substr($_POST['reg1'],8,2);
			  	  $mem2=substr($_POST['reg2'],8,2);
			  	  $mem3=substr($_POST['reg3'],8,2);
			  	  $mem4=substr($_POST['reg4'],8,2);
			  	  $unique_group_id=$dep.$sessub.$mem1.$mem2.$mem3.$mem4;


			  if($_POST['name1'] && $_POST['reg1'])   
			   {
 				  
			  	  //$check_group_id=$dep.$sessub;
			   	if(!empty($_POST['name1']) && !empty($_POST['reg1']))
			   	{
			  	  $sql5="select * from studentinfo where 
			  	   		(regno1='$_POST[reg1]' or	regno2='$_POST[reg1]' or regno3='$_POST[reg1]' or regno4='$_POST[reg1]')";	
			  	  $result5=mysql_query($sql5);
			  	  if(mysql_num_rows($result5)>0)
			  	  	 $error .="1st member is already exists.<br>";
			  	 }
			   	if(!empty($_POST['name2']) && !empty($_POST['reg2']))
			   	{
			  	  $sql6="select * from studentinfo where 
			  	   		(regno1='$_POST[reg2]' or	regno2='$_POST[reg2]' or regno3='$_POST[reg2]' or regno4='$_POST[reg2]')";	
			  	  $result6=mysql_query($sql6);
			  	  if(mysql_num_rows($result6)>0)
			  	  	 $error .="2nd member is already exists.<br>";
			  	 }
			   	if(!empty($_POST['name3']) && !empty($_POST['reg3']))
			   	{
			  	  $sql7="select * from studentinfo where 
			  	   		(regno1='$_POST[reg3]' or	regno2='$_POST[reg3]' or regno3='$_POST[reg3]' or regno4='$_POST[reg3]')";	
			  	  $result7=mysql_query($sql7);
			  	  if(mysql_num_rows($result7)>0)
			  	  	 $error .="3rd member is already exists.<br>";
			  	 }	
			   	if(!empty($_POST['name4']) && !empty($_POST['reg4']))
			   	{
			  	  $sql8="select * from studentinfo where 
			  	   		(regno1='$_POST[reg4]' or	regno2='$_POST[reg4]' or regno3='$_POST[reg4]' or regno4='$_POST[reg4]')";	
			  	  $result8=mysql_query($sql8);
			  	  if(mysql_num_rows($result8)>0)
			  	  	 $error .="4th member is already exists.";
			  	 }			  	 		  	 			  	 
			  	 

			   }  




			  if(!$error)
			  {
				$sql="insert into studentinfo (name1,group_id,regno1,name2,regno2,name3,regno3,name4,regno4,session,dept,email,mobile,active) 
				  		values ('$_POST[name1]','$unique_group_id','$_POST[reg1]','$_POST[name2]','$_POST[reg2]','$_POST[name3]','$_POST[reg3]','$_POST[name4]','$_POST[reg4]','$_POST[ses]','$_POST[dept]','$_POST[email]','$_POST[mob]','1')";
				$result=mysql_query($sql);
				 
				 
				echo "<script type='text/javascript'>alert('Your group id :    {$unique_group_id}');</script>";
				redirect("add_student.php");
			  }
			
		}
if(isset($_SESSION['id'])){
?>

 <? //echo date("Y");?>
<div id="headfont"><font>Add a group information</font></div><br><hr><hr><hr><hr><hr><br>
    

        <table width="50%" cellpadding="2px">
		<? if(isset($error)){  ?>
		<div class="error"><?=isset($error) ? $error : ""?></div>  <?}?>        	
		<form action="add_student.php" method="POST">
			
				<tr><td width=40px class="fontcolor">Student's name :<font color="red"><br><h6>* (At least fill with a student in 1st row)</h6></font></td><td class="fontcolor">Reg. no :</td></tr>
				<tr><td>1. <input class="inputs" type="text" name="name1" value='<?=$_POST['name1']?>'></td><td><input class="inputs" type="text" name="reg1" value='<?=$_POST['reg1']?>'></td></tr>
				<tr><td>2. <input class="inputs" type="text" name="name2" value='<?=$_POST['name2']?>'></td><td><input class="inputs" type="text" name="reg2" value='<?=$_POST['reg2']?>'></td></tr>
				<tr><td>3. <input class="inputs" type="text" name="name3" value='<?=$_POST['name3']?>'></td><td><input class="inputs" type="text" name="reg3" value='<?=$_POST['reg3']?>'></td></tr>
				<tr><td>4. <input class="inputs" type="text" name="name4" value='<?=$_POST['name4']?>'></td><td><input class="inputs" type="text" name="reg4" value='<?=$_POST['reg4']?>'></td></tr>
			

			
				<tr><td><font color="red"><br><h6>* (All informations are required)</h6></font></td><td></td></tr>
				<tr><td class="fontcolor">Session :</td><td>
                       <select class="inputs" name="ses">
                       	    <option value="not">--select session--</option>
                       	    <?
                       	    $date=date("Y"); 
                       	    for($date=date("Y");$date>=2010 ;$date--) {?>
							<option value='<?=($date-1)."-".$date?>' > <? echo ($date-1)."-".$date; ?> </option>
							<? }?>
						</select>

				</td></tr>

				

				<tr><td class="fontcolor">Dept. name :</td><td><select class="inputs" name="dept">
					                                                 <option value="not">--select department--</option>
																	 <? 
																	 $sql2="select name from departments order by name";
																	 $result=mysql_query("$sql2"); 
																	 while($array=mysql_fetch_array($result)){
																	 ?>
																	 <option value=<?=$array['name'];?> ><?echo  $array['name']; ?></option>
																	 <? 
																	  } 
																	 ?>
																	</select>
													</td></tr>
				<tr><td class="fontcolor">Email :</td><td><input class="inputs" type="text" name="email"  value='<?=$_POST['email']?>'></td></tr>
				<tr><td class="fontcolor">Mobile no. :</td><td><input class="inputs" type="text" name="mob"  value='<?=$_POST['mob']?>'></td></tr>
				<tr><td></td><td><input type="submit" name="submit" class="button" value="Add this student" ></td></tr>
				
		    </table>
		</form>
		



<?
}
include("include/footer.php");
?>
