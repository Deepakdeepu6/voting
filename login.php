<?php
session_start();
include("process.php");
if(isset($_POST['submit']))
{

  $email=$_POST['email'];
  $password=$_POST['password'];
  $option=$_POST['select'];
  
  if($option=='voter')
 {  $res=mysqli_query($conn,"select * from user where email='$email' and password='$password'")
    or die(mysqli_error($conn));
    $row=mysqli_fetch_array($res);
    if($row['email']==$email && $row['password']==$password)
    { $_SESSION['email']=$email;
      $_SESSION['username']=$row['username'];
header("location:loginu.php");
if(isset($_POST['check']))
{  $email=$_POST['email'];
  $password=$_POST['password'];
    setcookie("myusername",$email,time()+(10*365*24*60*60));
    setcookie("mypassword",$password,time()+(10*365*24*60*60));


}

    }
    else
    echo "<script>alert('Not a valid credentials')</script>";

 }
  
  else
  {
    $res=mysqli_query($conn,"select * from groups where email='$email' and password='$password'")
    or die(mysqli_error($conn));
    $row=mysqli_fetch_array($res);
    if($row['email']==$email && $row['password']==$password)
    {
      $_SESSION['username']=$row['username'];
      $_SESSION['email']=$row['email'];
        header("location:loging.php");
        if(isset($_POST['check']))
        {  $email=$_POST['email'];
          $password=$_POST['password'];
            setcookie("myusername",$email,time()+(10*365*24*60*60));
            setcookie("mypassword",$password,time()+(10*365*24*60*60));
        
        
        }
        
      
    }
    else
    echo "<script>alert('Not a valid credentials')</script>";




  }


  

}



?>