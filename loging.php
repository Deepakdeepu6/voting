<?php session_start();
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

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src='https://kit.fontawesome.com/a076d05399.js'></script>
<meta charset="utf-8">
<title>LOGGED IN</title>

</head>
<style>
*
{
    margin:0px;
    padding:0px;
}
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
.table
{  max-width:550px;
    margin:40px auto;
    color:brown;
    
     font-family:verdana;
}
img 
{
    height:120px;
    width:100px;
}
 .ph{color:green;
		   text-transform:uppercase;
		    text-align:center;
            font-size:30px;}
}
</style>
<body>
  <div class="page-header">
  ONLINE <span style="color:lime;">VOTING</span> SYSTEM<i class="fas fa-vote-yea" style="font-size:40px;color:green;"></i></br>
      WELCOME <?php echo $_SESSION['username']?>
  <a href="logout.php"><button class="btn btn-danger btn-sm" name="submit1">LOGOUT</button></a>
  </div>
   <div class="container ">
       <?php echo "<div class=\"ph\">".@$_GET['success']."</div>"?>
       <?php
       $email=$_SESSION['email'];
         $sl="select * from groups where email='$email'";
         $res=mysqli_query($conn,$sl)
            or die(mysqli_error($conn));
            while($row=mysqli_fetch_array($res))
            {
                 ?>   <form action="" method="post" enctype="multipart/form-data">
                     <table class="table table-xs table-light table-striped table-bordered">
                      <tr><th colspan="2">YOU CAN EDIT YOUR DETAILS</th></tr>
                      <tr><th  colspan="2"><?php echo "<img src='images/".$row['image']."'>";?></th></tr> 
                      <tr><td>NAME:</td><td><input type="text" class="form-control" name="username" value="<?php echo $row['username']?>"></td></tr>
                      <tr><td>EMAIL:</td><td><input type="email" class="form-control" name="email" value="<?php echo $row['email']?>"></td></tr>
                      <tr><td>DOB:</td><td><input type="date" class="form-control" name="date" value="<?php echo $row['date']?>"></td></tr>
                      <tr><td>BRANCH:</td><td><input type="text" name="branch" class="form-control" value="<?php echo $row['branch']?>"></td></tr>
                      <tr><td>AIM:</td><td><input type="text" name="aim" class="form-control" value="<?php echo $row['address']?>"></td></tr>
                     
                      <tr><td>IMAGE:</td><td><input type="file" name="image" class="form-control" ></td></tr>
                      <tr><td><button class="btn btn-success btn-sm" name="submit">UPDATE</button></td><td></td></tr>
                     
  
  


                      </table>
                      </form>
                      
            <?php
            }
        ?>
      
 </div>

    <?php
     if(isset($_POST['submit']))
     {  $sessemail=$_SESSION['email'];
         $username=$_POST['username'];
         $email=$_POST['email'];
         $date=$_POST['date'];
         $branch=$_POST['branch'];
         $image=$_FILES['image']['name'];
         $address=$_POST['aim'];
       
         $tar="images/".basename($_FILES['image']['name']);
         if(!empty($image))
         {
         $sl="update groups set image='$image',username='$username',email='$email',branch='$branch',address='$address',date='$date' where email='$sessemail'";
         move_uploaded_file($_FILES['image']['tmp_name'],$tar);
         if(mysqli_query($conn,$sl))
         {
             
             echo "successfully updated";
             header("location:loging.php");
         }
    else
     echo mysqli_error($conn);



     }
     else{

        $sl="update groups set username='$username',email='$email',branch='$branch',address='$address',date='$date' where email='$sessemail'";
        move_uploaded_file($_FILES['image']['tmp_name'],$tar);
        if(mysqli_query($conn,$sl))
        {
            
           
            header("location:loging.php?success=UPDATED");
        }
   else
    echo mysqli_error($conn);


     }
    }
    ?>

</body>
</htlm>