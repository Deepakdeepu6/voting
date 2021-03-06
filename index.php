<?php 
session_start();
include("process.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<meta name="viewport" content="width=device-width">
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<meta charset="utf-8">
<title>Login Page</title>
</head>
<style>
.page-header{
	background-color:#D7BDE2;
	
	text-align:center;
	font-size:30px;
	font-style:verdana;
	font-weight:bold;
	color:white;
	text-transform:uppercase;
	letter-spacing:5px;
  
}
img
{  
    height:120px;
    width:120px;
}
form
{
  background-color:#48C9B0 ;
 padding:0px 30px;
 background-size:100% 100%;
border:3px solid black;
border-radius:10px;
}
.form-control
{
    margin:20px auto;
}
.para{
    font-size:30px;
    text-transform:uppercase;
    color:white;
    font-family:verdana;
    letter-spacing:5px;
    font-weight:bold;
}
small
{
    font-size:16px;
    font-style:italic;
}

</style>
<body>
    <div class="page-header">
       ONLINE <span style="color:lime;">VOTING</span> SYSTEM<i class="fas fa-vote-yea" style="font-size:40px;color:green;"></i>
    </div>
          <div class="container-fluid">
             <div class="row">
             <div class="col-sm   first">
             <form action="login.php" method="post">
                <h2 class="text-center para" >Login Form</h2>
                    <hr>
                    <input type="email"  class="form-control" placeholder="Email id" name="email" id="email" value="<?php if(isset($_COOKIE['myusername']))echo $_COOKIE['myusername'];?>" required>
                    <input type="password"  class="form-control" placeholder="Password" maxlength="8" name="password" value="<?php if(isset($_COOKIE['mypassword']))echo $_COOKIE['mypassword'];?>" id="pass" required>
                    <select name="select" class="form-control">
                    <option value="" selected>Select your option</option>
                    <option value="voter">Voter</option>
                    <option value="group">Group</option>
                    </select>
                    <input type="checkbox"   id="check" name="check"><label for="check"><b>Remember me</b></label></br>
                       <small><i><b>Not Registered?</b></i></small><a href="registration.php">Register Here</a>
                        <center> <button class="bt btn-success btn-lg" name="submit">LOGIN</button></center>
                    </form>
                 </div>
                 <div class="col-sm second">
                   <h2>Contestants</h2>
                   <hr>
                   <?php
                         $sl="select * from groups";
                         $res=mysqli_query($conn,$sl);
                         while($row=mysqli_fetch_array($res))
                         { ?>
                            <div class="card">
                                <div class="card-header text-center text-uppercase">
                                 <b><u><?php echo $row['username'];?></u></b>
                                  </div>
                                <div class="card-body">
                                   <?php  echo "<img src='images/".$row['image']."'>";
                                          echo "<b>Email:</b>".$row['email'];
                                         ?> <blockquote><b>OUR AIM:</b><?php echo $row['address'];?> </blockquote><?php
                                   ?>
                                </div>
                               </div>
                            <?php
                         }
                          




                     ?>
                 </div>
                
                </div>
            </div>

</body>
</html>