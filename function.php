
<?

function login($id, $username)
{
	$_SESSION['id'] = $id;
	$_SESSION['user_name'] = $username;
	
	
	if($_SESSION['RETURN'])
		redirect($_SESSION['RETURN']);
	else
		redirect("index.php");
}

function redirect($link)
{
        echo "<script language=Javascript>document.location.href='$link';</script>";
}

function check_email($email)
{    
        $email_regexp = "^([-!#\$%&'*+./0-9=?A-Z^_`a-z{|}~])+@([-!#\$%&'*+/0-9=?A-Z^_`a-z{|}~]+\\.)+[a-zA-Z]{2,4}\$";
        return eregi($email_regexp, $email);
}


?>
