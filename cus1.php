<?php
session_start();
$servrename="localhost";
$username="root";
$password="";
$dbname="sample";
$tbl_name="users";
$conn=mysqli_connect($servrename,$username,$password,$dbname)or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT *FROM $tbl_name";

$result=mysqli_query($conn,$sql)or die(mysqli_error($connection));
if(isset($_POST['SUBMIT']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
    $password=$_POST['password'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$q="SELECT * FROM users WHERE email='$email'";
$cq=mysqli_query($conn,$q)or die(mysqli_error($conn));
$ret=mysqli_num_rows($cq);
if($ret==true)
{
echo"<center><h2 style='color:red'>m_id already exits</h2></center>";
}
else
{
$query="INSERT INTO users VALUES ('$fname','$lname','$email','$password','$phone','$address')";
mysqli_query($conn,$query)or die(mysqli_error($conn));
    header("location:cuslogin.php");
}
}
Mysqli_close($conn);
?>