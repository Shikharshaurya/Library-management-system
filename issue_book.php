<?
include("include/header.php");
?>
<head>
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
</head>
<?
if(isset($_POST['submit']))
		{   if($_POST['quantity']>0)
	       {
			if(!$_POST['group_id'])
			      $error ="Please enter a Group id";
   
			 if($_POST['group_id'])
			  { 

			  	$sql10="select * from studentinfo where group_id='$_POST[group_id]'";
			  	$result10=mysql_query($sql10);
			  	$groupexist=mysql_fetch_array($result10);
			  	if($_POST['group_id']!=$groupexist['group_id'])
			  		{$error ="Group id is no exist";}

 				if($_POST['group_id']==$groupexist['group_id']){
				$sql1="select * from book_issue where (group_id='$_REQUEST[group_id]' and book_name='$_REQUEST[bookname]' and author_name='$_REQUEST[authorname]')";
				$result1=mysql_query($sql1);
				$existgroup= mysql_fetch_array($result1);
				if(!empty($existgroup))
				  {
				  	$error ="This group already taken this book";	
				  }	
			    
				else
				{  
			  	$date=date("Y-m-d");
				$sql="insert into book_issue set
				                        book_id='$_REQUEST[book_id]',
				                        group_id='$_REQUEST[group_id]',
										book_name='$_REQUEST[bookname]',
										author_name='$_REQUEST[authorname]',
									    issue_date='$date',
									    active='1'";
				  $result=mysql_query($sql);
				 //echo $_REQUEST[book_id];
				  mysql_query("update bookself set quantity=quantity-1 where (book_name='$_REQUEST[bookname]' and author_name='$_REQUEST[authorname]')");
				 ?>
				 <script>
				 alert("Book issued successfully");
				 </script>
			<? redirect("booklist.php");
		      }}}}
			if($_POST['quantity']<=0)
				{$error ="No book available"; }
			 
			
	    }

if(isset($_SESSION['id'])){
?>



<div id="headfont"><font>Book Issue</font></div><br><hr><hr><hr><hr><hr><br>
    
<table width="50%" id="table" cellpadding="2px">
  
		<? if(isset($error)){  ?>
		<div class="error"><?=isset($error) ? $error : ""?></div>  <?}?>
		<form action="issue_book.php?book_id=<?=$_REQUEST[book_id]?>" method="POST">
		<?
				$sql="select * from bookself where id='$_REQUEST[book_id]'";
				$result=mysql_query($sql);
				$book= mysql_fetch_array($result);
		?>
		         <tr><td width=40px class="fontcolor">Book name :</td><td ><input class="inputs" type="text" name="bookname" value='<?=$book['book_name']?>' readonly></td></tr>
				 <tr><td class="fontcolor">Author name :</td><td><input class="inputs" type="text" name="authorname" value='<?=$book['author_name']?>' readonly></td></tr> 
				 <tr><td class="fontcolor">Quantity :</td><td><input class="inputs" type="text" name="quantity" value='<?=$book['quantity']?>' readonly></td></tr>
				 <tr><td class="fontcolor">Group Id :</td><td><input id="tags" class="inputs" type="text" name="group_id"></td></tr>
				 <tr><td></td><td><input type="submit" name="submit" class="button" value="Issue this book" ></td></tr>
				
		
		</form>
		
</table>


<?
}
include("include/footer.php");
?>