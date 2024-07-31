<?
include("include/header.php");
 include("function_page.php");
 $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit = 10;
    	$startpoint = ($page * $limit) - $limit;
        
        //to make pagination
        $statement = "`studentinfo` where `active` = 1";
?>
	<link href="pagination.css" rel="stylesheet" type="text/css" />
	<link href="C_green.css" rel="stylesheet" type="text/css" />

<?
// to delete a student record
if(isset($_SESSION['id'])){
 if( $_GET['action'] =='delete')
	{
		
		mysql_query( "Delete from studentinfo where id = '$_GET[std_id]'");
        
        ?>
         <script>
				 alert("Student record deleted successfully");
		 </script>
    <?   
          redirect("studentlist.php");	 	
	 }


?>





<div id="headfont"><font>All group details</font></div><br><hr><hr><hr><hr><hr><br>
<?
   // Show the search result or all student list
   
		if($_POST['search'])
		       {  echo "<h2>Search Result for <font color='blue'>'". $_POST['keyword']. "'</font> </h2>";
		         
		         $sql=mysql_query("select * from studentinfo where group_id like '%$_POST[keyword]%' or dept like '%$_POST[keyword]%'");
		         
}
	if(!$_POST['search'])
			{	$sql= mysql_query("SELECT * FROM {$statement}  order by group_id LIMIT {$startpoint} , {$limit}");}
			//	$result=mysql_query($sql);
				 //show records
          //  $query =

?>

		<table align="left"><tr><td><form><input type="button"  value="Print" onclick="window.print()"></form></td></tr></table>
		<form action="studentlist.php" method="POST">
		
			<table align="right">
					<tr> 
							
							<td><b><font color="blue">Search Group  :</font></b></td>
							<td><input size="27px" class="searchbox" type="text" name="keyword" value="<?=$_POST['keyword']?>"></td>
							<td><input type="submit" name="search" value="Search"></td>
					</tr>
					<tr>		
							<td></td>
							<td><h6><font color="red">(e.g: search by group_id,dept.)</font></h6></td>
							<td></td>
					</tr>
			</table>
			
		</form>
<br><br><br>


<table  width="100%"  border="1" cellpadding="3px" id="table">
						<tr bgcolor="#bbbbbb">
						    <td id="tabletitle" width="200px"><b>Group Id</b></td>
						    <td id="tabletitle" width="150px"><b>Session</b></td>
						    <td id="tabletitle" width="100px"><b>Department</b></td>
						    <td id="tabletitle" width="200px"><b>Action</b></td>
						 </tr>   
						<? 
						 while($array=mysql_fetch_array($sql))
								{
									?>
						<tr>
						    <td id="tabletitle"><?=$array['group_id']?></td>
						    <td id="tabletitle"><?=$array['session']?></td>
						    <td id="tabletitle"><?=$array['dept']?></td>
						    <td id="tabletitle"><a href="#" onClick="MyWindow=window.open('edit_std_info.php?std_id=<?=$array['id']?>','MyWindow','toolbar=no,location=no,directories=no,status=no, menubar=no,scrollbars=no,resizable=no,width=800,height=500');return false;"><input type='submit' class="edit" value='Edit'></a>&nbsp;
													<?	echo "<a href='studentlist.php?action=delete&std_id=$array[id]' onclick=\"return confirm('Are you sure to delete this Group Id?');\"><input type='submit' class='del' value='Delete'></a>";?>
							</td>
						 </tr>   
									
									
								<?	
							    }	
						 
						 
						 ?>
						 
						 
						 
						 
						 
</table><br>
<? } 
if(!$_POST['search']){
	echo pagination($statement,$limit,$page);
	}
?>

<?
include("include/footer.php");
?>
