<?php
  $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'sample';
$tbl_name="insertadmin";  
   
   $conn = mysqli_connect("$dbhost","$dbuser","$dbpass","$dbname");
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
    $id = $_GET['id'];

   
    $sql = "DELETE FROM insertadmin where mobileid = '$id'";
   mysqli_select_db($conn,$dbname);
   $retval = mysqli_query($conn, $sql );
   
if($retval) {
         header("location: delete.php");
      }else {
        echo "Deletion failed!";
      }
   mysqli_close($conn);
?>
