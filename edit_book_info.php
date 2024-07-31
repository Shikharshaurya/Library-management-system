<?
include("include/header.php");
?>

<?
if(isset($_POST['submit']))
		{
			if(!$_POST['bookname'])
			      $error ="Please enter Book name";
			  if(!$_POST['authorname'])
			      $error .="<br>Please enter Book's author name";      
			 // if(!$_POST['email'])
				 // $error .= "<br>Please enter a email address";       
			  if(!$_POST['quantity'])
			      $error .="<br>Please enter Book quantity";  	    
			  if(!$error)
			  {
				  $sql="update bookself set
										book_name='$_REQUEST[bookname]',
										author_name='$_REQUEST[authorname]',
									    quantity='$_REQUEST[quantity]'
    									where id='$_REQUEST[book_id]'";
				  $result=mysql_query($sql);
				 //echo $_REQUEST[book_id];
				 ?>
				 <script>
				 alert("Edited successfully");
				 </script>
			<? 
			redirect("booklist.php");
			 }
			
		}

if(isset($_SESSION['id'])){
?>



<div id="headfont"><font>Edit book information</font></div><br><hr><hr><hr><hr><hr><br>
    
<table width="50%" cellpadding="2px">
		<? if(isset($error)){  ?>
		<div class="error"><?=isset($error) ? $error : ""?></div>  <?}?>
		<form action="edit_book_info.php?book_id=<?=$_REQUEST[book_id]?>" method="POST">
		<?
				$sql="select * from bookself where id='$_REQUEST[book_id]'";
				$result=mysql_query($sql);
				$book= mysql_fetch_array($result);
		?>
		         <tr><td width=40px class="fontcolor">Book name :</td><td ><input class="inputs" type="text" name="bookname" value='<?=$book['book_name']?>'></td></tr>
				 <tr><td class="fontcolor">Author name :</td><td><input class="inputs" type="text" name="authorname" value='<?=$book['author_name']?>'></td></tr> 
				 <tr><td class="fontcolor">Quantity :</td><td><input class="inputs" type="text" name="quantity" value='<?=$book['quantity']?>'></td></tr>
				 <tr><td></td><td><input type="submit" name="submit" class="button" value="Edit Book information" ></td></tr>
				
		
		</form>
		
</table>


<?
}
include("include/footer.php");
?>