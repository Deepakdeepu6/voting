<?php
session_start();
include("process.php");
if(!isset($_SESSION['email']))
{
	header("location:index.php");
}
else if(!isset($_SERVER['HTTP_REFERER'])){
   
    header('location:second.php');
    exit;
}
$value= $_GET['value'];
$email=$_SESSION['email'];
$sw="select * from user where email='$email'";
$r=mysqli_query($conn,$sw);
$row=mysqli_fetch_array($r);
if($row['vote']=='0')
{
$sl="update user set vote=1 where email='$email'";
$res=mysqli_query($conn,$sl)
   or die(mysqli_error($conn));
   $sq="update groups set votes=votes+1 where id='$value'";
$re=mysqli_query($conn,$sq)
   or die(mysqli_error($conn));
   header("location:loginu.php");
}
else if($row['vote']=='1')
{
	header("location:loginu.php?success=Oops!You Have Already Voted");
}
 
?>