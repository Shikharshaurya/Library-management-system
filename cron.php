<?
include("include/header.php");
?><html>
<head>
<!-- <meta http-equiv="refresh" content="60" > -->
</head>
<body>
 <?php
   
       
       // if (isset($_POST['save_backup'])) {
            $host = 'localhost';
            $user = 'root';
            $pass = '';
            $name = 'librarymanagement';
            $tables = '*';
 function save_backup_info($time) {
		$con = mysql_connect("localhost","root","");
		if (!$con)
			{
			 die('Could not connect: ' . mysql_error());

			}	
		mysql_select_db("librarymanagement", $con);

	
			$file_name = 'librarymanagement_' . $time;
			$sql="insert backup_info set sql_file_name='$file_name',date_taken='$time'";	
			if (!mysql_query($sql,$con))
			{
				die('Error: ' . mysql_error());
			}		


			}

             
            $time = time();
            save_backup_info($time);

            $link = mysql_connect($host, $user, $pass);
            mysql_select_db($name, $link);
            if ($tables == '*') {
                $tables = array();
                $result = mysql_query('SHOW TABLES');
                while ($row = mysql_fetch_row($result)) {
                    $tables[] = $row[0];
                }
            } else {
                $tables = is_array($tables) ? $tables : explode(',', $tables);
            }
            $return = '';
            foreach ($tables as $table) {
                $result = mysql_query('SELECT * FROM ' . $table);
                $num_fields = mysql_num_fields($result);

                $return.= 'DROP TABLE IF EXISTS ' . $table . ';';
                $row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE ' . $table));
                $return.= "\n\n" . $row2[1] . ";\n\n";

                for ($i = 0; $i < $num_fields; $i++) {
                    while ($row = mysql_fetch_row($result)) {
                        $return.= 'INSERT INTO ' . $table . ' VALUES(';
                        for ($j = 0; $j < $num_fields; $j++) {
                            $row[$j] = addslashes($row[$j]);
                            if (isset($row[$j])) {
                                $return.= '"' . $row[$j] . '"';
                            } else {
                                $return.= '""';
                            }
                            if ($j < ($num_fields - 1)) {
                                $return.= ',';
                            }
                        }
                        $return.= ");\n";
                    }
                }
                $return.="\n\n\n";
            }
            $handle = fopen('database_backup/librarymanagement_' . $time . '.sql', 'w+');
            fwrite($handle, $return);
            fclose($handle);
			
			
           
        //}
		
  ?>
    <?php
include("class.phpmailer.php");
include("class.smtp.php"); 
$sqlmax=mysql_query("select max(id),max(sql_file_name) as backup from backup_info");
$arraymax=mysql_fetch_array($sqlmax);
$mail= new PHPMailer();

$body = 'This is Database backup file for SEC Librarymanagement System';
$body .='';
//$mail->SMTPSecure = "ssl";  
$mail->Host='smtpcorp.com';  
$mail->Port='587';   
$mail->Username   = 'Your user name for smtp corn'; 
$mail->Password   = 'Password';  
$mail->SMTPKeepAlive = true;  
$mail->Mailer = "smtp"; 
$mail->IsSMTP(); 
$mail->SMTPAuth   = true;               
$mail->CharSet = 'utf-8';  
$mail->SMTPDebug  = 0;         

$mail->From       = "aashraful_sec@yahoo.com";
$mail->FromName   = "SEC Library";
$mail->Subject    = "This is the subject";
$mail->AltBody    = "This is the body when user views in plain text format"; //Text Body
$mail->WordWrap   = 50; 
$mail->AddAttachment("database_backup/$arraymax[backup].sql"); 
$mail->MsgHTML($body);
$mail->AddAddress("ashraful.sec01@gmail.com","First Last");

$mail->IsHTML(true); 

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Database backup sent successfully";
}

?>

			</body>
			</html>
<?
include("include/footer.php");
?>