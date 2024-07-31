<?php
include("config.php");
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="images/bar4.png">
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="jquery-1.10.2.min.js"></script>
 
<script type="text/javascript">
 
$(document).ready(function() {
   
 $('.scrollTop').click(function(){
    
 $('body').animate({scrollTop: '0px',easing: "easein"}, 500);
    
 });
    
});
</script>
<style type="text/css">
a{
    text-decoration: none;
    color:black;
}

</style>
<title>Library management system</title>
</head>

<body>

<div id="container">
<?
if(isset($_SESSION['id'] ))
		{?>
<ul  class="menu1">
        
        <li><a>গ্রুপ মেনু</a>
                    <ul>
                        <li><a href="add_student.php">নতুন গ্রুপ যুক্ত করুন</a></li>
                        <li><a href="studentlist.php">সকল গ্রুপের তথ্যাবলি</a></li>
                    </ul>
        </li>
        <li><a >লাইব্রেরি মেনু</a>
            <ul>
                
                <li><a href="add_a_book.php">নতুন বই যুক্ত করুন</a></li>
                <li><a href="booklist.php">সকল বইয়ের তালিকা</a></li>
                <li><a href="issuedbook.php">ইস্যুকৃত বইয়ের তালিকা</a></li>
            </ul>
        </li>
        <li><a>এডিটর মেনু</a>
                <ul>
                <li><a href="account_setting.php">অ্যাকাউন্ট আপডেট</a></li>
                <li><a href="addredit.php">সফটওয়্যার আপডেট</a></li>
                <li><a href="logout.php">লগ আউট</a></li>

                </ul>
                
        </li>
        
 
        
    </ul>
    <br><br>

    <table align="left" cellpadding="2px" cellspacing="2px">
        <tr>
            <td><a href="index.php"><img src="images/home_48.png"></a></td><td></td><td></td><td></td><td><a href="cron.php"><img src="images/database_48.png"></a></td>
        </tr>
        <tr>
           
            <td>
               <a href="index.php"> <font face="Allura" size="5px"><b>Home</b></font></a>
            </td><td></td><td></td><td></td>
            <td>
              <a href="cron.php"><font face="Allura" size="5px"><b>Backup</b></font></a>
            </td>
            
        </tr>
    </table>


<br><br><br>
<table align="right"><tr><td width="100px"><input class="inputclock" size="100" type="text" id="clock" readonly></td><td><img src="images/flag_bangladesh.png"></td></tr></table>
<script>
var int=self.setInterval(function(){clock()},1000);
function clock()
{
var d=new Date();
var t=d.toLocaleTimeString();
document.getElementById("clock").value=t;
}
</script>

	<?
		}	
	 ?>

<fieldset style=width:980px>
