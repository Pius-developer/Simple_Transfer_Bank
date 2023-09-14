
<?php

   $server = "Localhost";
   $database = "transbank";
   $databaseuser = "root";
   $password = "";
   $conn = mysqli_connect( $server, $databaseuser, $password, $database);

   if (!$conn) {
   	
   	mysqli_error();
   }
?>
