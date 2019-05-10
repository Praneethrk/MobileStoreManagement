<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="student";
$conn=mysqli_connect($servername,$password,$dbname)or die(Mysql_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($connection));
if(isset($_POST['Submit']))
{
$usn=$_POST['usn'];
$name=$_POST['name'];
$sem=$_POST['sem'];
$age=$_POST['age'];
$addr=$_POST['addr'];
$dob=$_POST['dob'];
$q="SELECT usn FROM student WHERE usn='$usn'";
$cq=mysqli_query($conn,$q)or die(mysqli_error($conn));
$ret=mysqli_num_rows($cq);
if($ret==true)
{
echo"<center><h2 style='color:red'>USN already exists</h2></center>";
}
else
{
$query="INSERT INTO student VALUES('$usn',$'name','$sem','$age','$addr','$dob')";
mysqli_query($conn,$query)or die(mysqli_error($conn));
echo"<center><h2 style='color:green'>Details Saved!</h2?</center>";
}
}
Mysqli_close($conn);
?>