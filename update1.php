<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'sample';
   
   $conn = mysqli_connect("$dbhost","$dbuser","$dbpass","$dbname");
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
    $id = $_POST['mobileid'];
$mobcompany=$_POST['mobcompany'];
$mobos=$_POST['mobos'];
$formfactor=$_POST['formfactor'];
$name=$_POST['name'];
$price=$_POST['price']; 

    $sql = "UPDATE insertadmin SET mobcompany='$mobcompany',mobos='$mobos',formfactor='$formfactor',name='$name',price='$price' WHERE mobileid='$id'";
   mysqli_select_db($conn,$dbname);
   $retval = mysqli_query($conn, $sql );

   
if($retval) {
         header("location: delete.php");
      }else {
        echo "Update failed!";
        die(' ' . mysqli_error());
      }
   mysqli_close($conn);
?>
