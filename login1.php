<?php
session_start();
$host="localhost";
$username="root";
$password="";
$db_name="sample";
$tbl_name="logins";
$con=mysqli_connect("$host","$username","$password","$db_name")or die("cannot connect");
$select_db=mysqli_select_db($con,$db_name)or die("cannot select DB");
if(isset($_POST['myusername'])&& isset($_POST['mypassword']))
{
$usrnm=$_POST['myusername'];
$pswd=$_POST['mypassword'];
$ab="SELECT*FROM logins WHERE username='$usrnm' and password='$pswd'";
$result=mysqli_query($con,$ab) or die(mysqli_error($con));
$cnt=mysqli_num_rows($result);
if($cnt==true)
{
header("location:opt.php");
}
else
{
echo "<center><h2 style='color:red'>ACCESS DENIED</h2></center>";
}
}
ob_end_flush();
?>