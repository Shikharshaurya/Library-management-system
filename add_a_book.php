<?
include("include/header.php");
?>
<?
if(isset($_POST['submit']))
				{   
					if($_POST['dept']=='not')
			           $error ="Please enter department name <br>";
					if(!$_POST['name'])
					  $error .="Please enter a book name <br>";
					if(!$_POST['author'])
					   $error .="Please enter the author name <br>";  
					if(!$_POST['quantity'])
						$error .="Please enter book quantity";
					if(!$error)
						{
							$sql="insert into bookself (dept,book_name,author_name,quantity,active) values ('$_POST[dept]','$_POST[name]','$_POST[author]','$_POST[quantity]','1')";
							$result=mysql_query($sql);
							?>
								 <script>
											alert("Book added successfully");
								</script>
							<?
							redirect("add_a_book.php");
						}
				
				}	


if(isset($_SESSION['id'])){
	?>

<div id="headfont"><font>Add a Book</font></div><br><hr><hr><hr><hr><hr><br>
		<? if(isset($error)){  ?>
		<div class="error"><?=isset($error) ? $error : ""?></div>  <?}?>
					<form action="add_a_book.php" method="POST">
						<table align="center" width="50%" cellpadding="2px">
						<tr>
							<td>Select a dept. :</td>
								<td>
										<select class="inputs" name="dept">
											<option value="not">--select department--</option>
                                            <? 
											$sql2="select name from departments order by name";
											$result=mysql_query("$sql2"); 
											while($array=mysql_fetch_array($result))
											{
											 ?>
										   <option value=<?=$array['name'];?> ><?echo  $array['name']; ?></option>
											 <? 
											} 
											?>
										</select>
								</td>
						</tr>
						<tr><td>Book name :</td><td><input class="inputs" type="text" name="name"  value='<?=$_POST['name']?>'></td></tr>		
						<tr><td>Author name :</td><td><input class="inputs" type="text" name="author"  value='<?=$_POST['author']?>'></td></tr>
						<tr><td>Quantity :</td><td><input class="inputs" type="text" name="quantity"  value='<?=$_POST['quantity']?>'></td></tr>
						<tr><td></td><td><input type="submit" name="submit" class="button" value="Add this book" ></td></tr>
						</table>
				</form>
		





<?
}
include("include/footer.php");
?>
