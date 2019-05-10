<?php
session_start();
$servrename="localhost";
$username="root";
$password="";
$dbname="sample";
$tbl_name="insertadmin";
$conn=mysqli_connect($servrename,$username,$password,$dbname)or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT *FROM $tbl_name";

$result=mysqli_query($conn,$sql)or die(mysqli_error($connection));
if(isset($_POST['SUBMIT']))
{
$mobileid=$_POST['mobileid'];
$mobcompany=$_POST['mobcompany'];
$mobos=$_POST['mobos'];
    $formfactor=$_POST['formfactor'];
$name=$_POST['name'];
$price=$_POST['price'];
$q="SELECT * FROM insertadmin WHERE mobileid='$mobileid'";
$cq=mysqli_query($conn,$q)or die(mysqli_error($conn));
$ret=mysqli_num_rows($cq);
if($ret==true)
{
echo"<center><h2 style='color:red'>m_id already exits</h2></center>";
}
else
{
$query="INSERT INTO insertadmin VALUES ('$mobileid','$mobcompany','$mobos','$formfactor','$name','$price')";
mysqli_query($conn,$query)or die(mysqli_error($conn));
    header("location:insert.php");
}
}
Mysqli_close($conn);
?>