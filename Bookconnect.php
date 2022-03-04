<?php
 $mysql_host='localhost';
 $mysql_user='root';
 $mysql_password='';
 $conn=mysqli_connect($mysql_host,$mysql_user,$mysql_password);
 if(mysqli_select_db($conn,'db_books'))
 {echo 'connection successful';
 }
 else{
 echo 'connection failed';
 }
 ?>