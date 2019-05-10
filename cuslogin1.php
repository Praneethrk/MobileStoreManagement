<?php
$host="localhost";
$username="";
$password="";
$db_name="sample";
$tbl_name="users";
$con=mysqli_connect("$host","$username","$password","$db_name")or die("cannot connect");
$select_db=mysqli_select_db($con,$db_name)or die("cannot select DB");
if(isset($_POST['username'])&&isset($_POST['password']))
{
$usrnm=$_POST['username'];
$pswd=$_POST['password'];
$ab="SELECT * FROM users WHERE username='$usrnm' and password='$pswd'";
$result=mysqli_query($con,$ab)or die(mysqli_error($con));
$cnt=mysqli_num_rows($result);
if($cnt==1)
{
session_start();
   echo"HIIII";
}
else
{
//echo"<center><h2 style='color:red'>ACCESS DENIED</h2></center><a href='index.php'>Back</a>";
    echo"AccessDenied";
}
}
mysqli_close($con);
?>