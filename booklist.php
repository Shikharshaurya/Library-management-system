<?
include("include/header.php");
 include("function_page.php");
 $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit =30;
    	$startpoint = ($page * $limit) - $limit;
        
        //to make pagination
        $statement = "`bookself` where `active` = 1";
?>
	<link href="pagination.css" rel="stylesheet" type="text/css" />
	<link href="A_green.css" rel="stylesheet" type="text/css" />
<?
if(isset($_SESSION['id'])){
	if( $_GET['action'] =='delete')
			{
		
				mysql_query( "Delete from bookself where id = '$_GET[book_id]'");
        
				?>
			<script>
						alert("Book deleted successfully");
				</script>
    <?   
			redirect("booklist.php");	 	
	}


?>
<br><br>




<div id="headfont"><font>Library bookself</font></div><br><hr><hr><hr><hr><hr><br>
<?

        if(!$_POST['search'])
			{	$sql= mysql_query("SELECT * FROM {$statement}  order by book_name LIMIT {$startpoint} , {$limit}");}
		if($_POST['search'])
		       { 

		         if(empty($_POST['dept'])) 
		           {$sql=mysql_query("select * from bookself where book_name like '%$_POST[keyword]%' or author_name like '%$_POST[keyword]%' order by id asc");}
		         else if(empty($_POST['keyword']))
		           {$sql=mysql_query("select * from bookself where dept='$_POST[dept]' order by id asc");}
		         else if(!empty($_POST['dept']) && !empty($_POST['keyword']))
		           {$sql=mysql_query("select * from bookself where dept='$_POST[dept]' and (book_name like '%$_POST[keyword]%' or author_name like '%$_POST[keyword]%')"); }



		       	 if(mysql_num_rows($sql)==0)
		       	   {
		       	   	echo "<h2><font color='red'>No result found</font></h2>";
		       	   } 
		       	 if(mysql_num_rows($sql)>0)
		       	 {
		       	 	 echo "<h2>Search Result for <font color='blue'>Dept. ".$_POST['dept'] ." & ".$_POST['keyword']. "</font> </h2>";
		       	 }  	

		       }
		       	//echo $_POST['dept'];
				//$sql="select * from bookself $search order by id asc";
				//$result=mysql_query($sql);


?>
		<form action="booklist.php" method="POST">
			<table align="right">
					<tr>
							<td><b><font color="blue">Search book :</font></b></td>
							<td>
										<select class="searchbox1" name="dept">
					                                                 <option value="">--select department--</option>
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
							</td>
							
							<td><input type="text" class="searchbox" name="keyword" value="<?=$_POST['keyword']?>"></td>
							<td><input type="submit" name="search" value="Search"></td>
					</tr>
					<tr>		
							<td></td>
							<td></td>
							<td><h6><font color="red">(e.g: search by book name or author name)</font></h6></td>
							<td></td>
					</tr>
			</table>
			
		</form>
<br><br><br>


<table  width="100%" id="table" border="1" cellpadding="3px">
						<tr bgcolor="#bbbbbb" >
						    <td id="tabletitle" width="100px"><b>Department</b></td>
						    <td id="tabletitle" width="200px"><b>Book name</b></td>
						    <td id="tabletitle" width="200px"><b>Author name</b></td>
						    <td id="tabletitle" width="100px"><b>Quantity</b></td>
						    <td id="tabletitle" width="250px"><b>Action</b></td>
						 </tr>   
						<? 
						 while($array=mysql_fetch_array($sql))
								{
									?>
						<tr>
						    <td id="tabletitle"><?=$array['dept']?></td>
						    <td id="tabletitle"><?=$array['book_name']?></td>
						    <td id="tabletitle"><?=$array['author_name']?></td>
						    <td id="tabletitle"><?=$array['quantity']?></td>
						    <td id="tabletitle"><a href="#" onClick="MyWindow=window.open('edit_book_info.php?book_id=<?=$array['id']?>','MyWindow','toolbar=no,location=no,directories=no,status=no, menubar=no,scrollbars=no,resizable=no,width=800,height=500');return false;"><input type='submit' class="edit" value='Edit'></a>&nbsp;
													<?	echo "<a href='booklist.php?action=delete&book_id=$array[id]' onclick=\"return confirm('Are you sure to delete this Book?');\"><input type='submit' class='del' value='Delete'></a>";?>
													&nbsp;<a href="#" onClick="MyWindow=window.open('issue_book.php?book_id=<?=$array['id']?>quantity=<?=$array['quantity']?> ','MyWindow','toolbar=no,location=no,directories=no,status=no, menubar=no,scrollbars=no,resizable=no,width=800,height=500');return false;"><input type='submit' class="issue" value='Issue book'></a>
							</td>
						 </tr>   
								
									
								<?	
							    }	

							    ?>
							    </table>
                               <br>	
                     <?           
					 }
	           if(!$_POST['search']){
	                      echo pagination($statement,$limit,$page);
	                                }
	                    
						 ?>
<?
include("include/footer.php");
?>
