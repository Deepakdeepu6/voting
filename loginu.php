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
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<meta name="viewport" content="width=device-width,initial-scale=1">
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
   user-select:pointer;
}
.page-header{
	background-color:#D7BDE2;
	width:100%;
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
.left
{
    border:1px solid black;
  max-width:700px;
    font-weight:bold;
    font-family:verdana;
    letter-spacing:5px;
    color:#2E86C1;
	width:100%;
	margin:auto;
	color:#2499E8;

}
.container
{
    border:1px solid black;
    margin:30px auto;
}
.carhe
{
font-size:25px;
font-family:verdana;
font-style:verdana;


}
.main-right
{
    max-width:600px;
    margin:0px auto;
}
.side
{

    position: sticky;
  
  top: 0;
  
 
  font-size: 50px;
  width:100%;
 text-align:center;
 margin:auto 150px;

}
.side a 
{color:red;
    text-decoration:none;
}
.get
{
	color:red;
	 font-size:20px;
	 font-style:verdana;
	 font-weight:bold;
}
a{
	color:white;
}

</style>

<body>
<div class="page-header" id="top">
       ONLINE <span style="color:lime;">VOTING</span> SYSTEM<i class="fas fa-vote-yea" style="font-size:40px;color:green;"></i></br>
      WELCOME <?php echo $_SESSION['username']?>
      
    </div><hr>
    <div class="get text-center">
	<b><?php echo @$_GET['success'];?></b>
	</div>

    <div class="container">
      <div class="row">
        <div class="col-sm left">
         <?php
          $username=$_SESSION['username'];
          $email=$_SESSION['email'];
           $sl="select * from user where email='$email'";
           $res=mysqli_query($conn,$sl)
           or die(mysqli_error($conn));
           while($row=mysqli_fetch_array($res))
           { 
                ?>
                   <div class="inside">
                      <center> <?php echo "<img src='images/".$row['image']."'>";?></center>
                       <hr>
                       <div class="container-fluid">
                         <div class="row"> 
                            <div class="col-sm">
                               NAME:
                            
                            </div>
                             <div class="col-sm">
                             <?php echo $row['username']?>
                             </div>
                          
                         </div>
                         </br>
                         <div class="row"> 
                            <div class="col-sm-4"> </br>
                              Email:
                            
                            </div>
                           
                            
                             <div class="col-sm-8"></br>
                             <?php echo $row['email']?>
                             
                             </div>
                             </div>
                           
                         </div><div class="row"> 
                            <div class="col-sm"> </br>
                               DOB:
                            
                            </div>
                             <div class="col-sm"></br>
                             <?php echo $row['date']?> 
                             </div>
                            
                         </div><div class="row"> 
                            <div class="col-sm"></br>
                               Branch:
                            
                            </div>
                             <div class="col-sm"></br>
                             <?php echo $row['branch']?> 
                             </div>
                            
                         </div><div class="row"> 
                            <div class="col-sm"></br>
                               STATUS(vote):
                            
                            </div>
                             <div class="col-sm"></br>
                             <?php  if($row['vote']==0)
                                     echo "<p> <font color=red>".$row['vote']."</font> </p>";
                                  else
                                  echo "<p> <font color=green>".$row['vote']."</font> </p>";
                             ?>
                             </div>
                             </div>
                             <div class="row">
                                <div class="col-sm">
                                <center> <a href="logout.php"><button class="bt btn-success bt-lg ">LOGOUT</button></a></center>
                                </div>
                             </div>
                             
                             
                          
                       
                       </div>
                   </div>
                   
 

                 <?php
           } 
       ?>
        
        </div>
      
        <div class="col-sm main-right">
             <div class="container t"> 
                
               <div class="card right">
                 <div class="card-header text-center carhe">
                    PARTICIPANTS
                 </div>
                  <div class="car-body">
                  <div class="side">
                      <a href="#top">&uarr;</a>
                </div>
               
                  <?php
                        
                          $sl="select * from groups";
                          $res=mysqli_query($conn,$sl)
                          or die(mysqli_error($conn));
                          $id=1;
                          while($row=mysqli_fetch_array($res))
                          {   
                           ?>
                            
                                <div class="card-header text-center">
                              <b><?php echo $row['username'];?></b>
                                </div>

                                 <div class="card-body">
								  <form action="" method="post">
                                 <center><?php echo "<img src='images/".$row['image']."'>";
                                 
                                 echo "<h4>OUR AIM:".$row['address']."</h4>";
                                
                                 ?> 
								
								 <button class="btn btn-success btn-lg" name="submit"> <a href="vote.php?value=<?php echo $row['id']?>" onclick="return send(<?php echo $row['id']?>)" style="text-decoration:none;">vote</a></button>
                              

                                  </form>
                                </div>
                            

 

                           <?php
                               
                                
                            
                          }







                   ?>
                  
                   </div>
                  </div>
               
               </div>
              </div>
        
        
        </div>
       </div>
    </div>

                                         <script language="javascript">
                                    function send($value)
                                   {
                                   
                                       return (confirm("Are You Sure"));
									   

                                 
                                                  }
  </script>
</body>
</html>