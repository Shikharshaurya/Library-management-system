<?
include("include/header.php");
 include("function_page.php");
 $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit = 5;
    	$startpoint = ($page * $limit) - $limit;
        
        //to make pagination
        $statement = "`book_issue` where `active` = 1";
?>
	<link href="pagination.css" rel="stylesheet" type="text/css" />
	<link href="A_green.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="jquery-ui.css">
<script src="jquery-1.9.1.js"></script>
<script src="jquery-ui.js"></script>

<script>
$(function() {
<?php
$js_array = "[";
$result3 = mysql_query("select group_id from studentinfo");
while( $row3=mysql_fetch_array($result3) ) {
    $js_array .= "\"";
    $js_array .= $row3[0]; // assuming you just want the first field 
    $js_array .= "\"";  
    $js_array .= ",";                    // of each row in the array
    
}
$js_array{ strlen($js_array)-1 } = ']';

echo "var db_array = $js_array ;";
?>  
$( "#tags" ).autocomplete({
source: db_array
});
});
</script>
<?
if(isset($_SESSION['id']))
{
  if($_GET['action'] =='receive')
			{
echo $GET['book_id'];
		        mysql_query("update bookself set quantity=quantity+1 where id='$_GET[book_id]'");
				mysql_query("Delete from book_issue where (book_id='$_GET[book_id]' and group_id='$_GET[group_id]')");
        
				?>
			    <script>
						alert("Book Received successfully");
				</script>
    <?   
			redirect("issuedbook.php");	 	
	}


?>
<br><br>




<div id="headfont"><font>Issued book list</font></div><br><hr><hr><hr><hr><hr><br>
<?

        if(!$_POST['search'])
			{	$sql= mysql_query("SELECT * FROM {$statement}  order by issue_date desc LIMIT {$startpoint} , {$limit}");}
		if($_POST['search'])
		       { 
		        if(empty($_POST['keyword']))
		           {$sql=mysql_query("select * from book_issue order by issue_date asc");}
		         else if(!empty($_POST['keyword']))
		           {$sql=mysql_query("select * from book_issue where group_id='$_POST[keyword]'"); }



		       	 if(mysql_num_rows($sql)==0)
		       	   {
		       	   	echo "<h2><font color='red'>No result found</font></h2>";
		       	   } 
		       	 if(mysql_num_rows($sql)>0)
		       	 {
		       	 	 echo "<h2>Search Result for <font color='blue'>"." ".$_POST['keyword']. "</font> </h2>";
		       	 }  	

		       }
		       	//echo $_POST['dept'];
				//$sql="select * from bookself $search order by id asc";
				//$result=mysql_query($sql);


?>
		<form action="issuedbook.php" method="POST">
			<table align="right">
					<tr>
							<td><b><font color="blue">Search Group Id :</font></b></td>
							
							<td><input type="text" id="tags" class="searchbox" name="keyword" value="<?=$_POST['keyword']?>"></td>
							<td><input type="submit" name="search" value="Search"></td>
					</tr>
					<tr>		
							<td></td>
							<td><h6><font color="red">(e.g: search by Group id)</font></h6></td>
							<td></td>
					</tr>
			</table>
			
		</form>
<br><br><br>


<table id="table"  width="100%" border="1" cellpadding="3px">
						<tr bgcolor="#bbbbbb" >
						    <td id="tabletitle" width="100px"><b>Group id</b></td>
						    <td id="tabletitle" width="200px"><b>Book name</b></td>
						    <td id="tabletitle" width="200px"><b>Duration</b></td>
						    <td id="tabletitle" width="250px"><b>Action</b></td>
						 </tr>   
						<? 
						 while($array=mysql_fetch_array($sql))
								{
						

$date1 = date("Y-m-d");
$date2 = $array['issue_date'];

$diff = abs(strtotime($date2) - strtotime($date1));

$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));


?>
						<tr>
						    <td id="tabletitle"><?=$array['group_id']?></td>
						    <td id="tabletitle"><?=$array['book_name']?></td>
						    <td id="tabletitle"><?printf("%d years, %d months, %d days", $years, $months, $days)?></td>
						    <td id="tabletitle">
						    	            <?	echo "<a href='issuedbook.php?action=receive&book_id=$array[book_id]&group_id=$array[group_id]' onclick=\"return confirm('Are you sure to Cancel book request?');\"><input type='submit' class='cr' value='Cancel request'></a>";?>&nbsp;
													
											<?	echo "<a href='issuedbook.php?action=receive&book_id=$array[book_id]&group_id=$array[group_id]' onclick=\"return confirm('Are you sure to receive this Book?');\"><input type='submit' class='rb' value='Receive book'></a>";?>
													
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
