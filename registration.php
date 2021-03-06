<?php
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
<title>Registration page</title>

</head>
<style>
*{
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
.inside{
	
	
	border:3px solid black;
	width:100%;
	margin:30px auto;
	box-shadow:4px 2px 3px 3px;
	border-radius:10px;
	
}
.title{
	font-size:20px;
	font-family:verdana;
	color:#45B39D ;
}
.form-control{
	max-width:500px;
	font-size:20px;
	color:black;
}
.regist{
	padding:20px;
	box-size:border-box;
}
.ph{
	color:red;
	text-transform:uppercse;
	font-size:30px;
	text-align:center;
}

</style>
<body>
<div class="page-header ">
<a href="index.php"><span style="left:0%;top:12px;position:absolute;font-size:50px;">&larr;</span> </a>   online <span style="color:green;">voting</span> system<i class="fas fa-vote-yea" style="font-size:50px;color:#229954 ;"></i>
		
		</div>
 <div class="container-fluid">
     
           
		     <div class="container inside">
			      
			       <div class="row">
			           <div class="col regist">
			               
			                <div class="title text-center">   
                                     <h2>Register here by providing your details</h2>
							  </div>	 <hr>
							<form method="post" action="" enctype="multipart/form-data"> 
			                     <div class="content">    
								    <div class="row">
								      <div class="col-md">
							             <input type="text" name="username" id="name" class="form-control" placeholder="Name" required">
							           </div>
									   </br>
									   <div class="col-md">
							             <input type="number" name="number" id="name" class="form-control" placeholder="Phone number" required>
							           </div>
							
							  
							
							         </div>
							            </br>
							        <div class="row">
								        <div class="col-md">
							             <input type="email" name="email" id="name" class="form-control" placeholder="Email" required>
							             </div></br>
									    <div class="col-md">
							             <input type="text" name="branch" id="name" class="form-control" placeholder="Branch" required>
							            </div>
							
							  
							
							        </div>
							             </br>
							        <div class="row">
								        <div class="col-md">
							             <input type="password" name="password" id="name" class="form-control" placeholder="Password" required>
							             </div></br>
									    <div class="col-md">
							             <input type="password" name="cpassword" id="name" class="form-control" placeholder="Confirm Password" required>
							            </div>
							
							  
							
							        </div>
							
							                 </br>
							        <div class="row">
								        <div class="col-md">
										<input type="text" name="birth" class="form-control" placeholder="Date of Birth" onfocus="(this.type='date')">
							             </div></br>
									    <div class="col-md">
							             <input type="text" name="address" id="name" class="form-control" placeholder="Your Aim" required>
							            </div>
							
							  
							
							        </div>
							
							                    </br>
							        <div class="row">
								        <div class="col-md-4">
							             <select class="form-control" name="select" required>
										 <option value="0" selected>Select your option</option>
										   <option value="voter">Voter</option>
										   <option value="group">Group</option>
										 
										 </select>
										 
										 </div></br>
										 <div class="col-md">
										 <div class="col-md">
											
										 <input type="file" class="custom-input-file" name="image" id="custom-input-files">
							            <label class="custom-file-label" for="custom-input-files">Images/Group images</label>
                                             
							
							           
							           </div>
							           </div>
							        </div>
			 
			                                                  </br>
							         <div class="row">
								        <div class="col-md ">
							             <button class="btn btn-success btn-lg btn-block" name="submit">Register here</button>
							            </div>
							           
							
							         </div>
			                       
			                 </div>
			 
                            </form>
                         </div>
                    </div>
              </div>
	   </div>
	<?php
	if(isset($_POST['submit']))
{
	   $username=$_POST['username'];
	   $password=$_POST['password'];
	   $confirm=$_POST['cpassword'];
	   $email=$_POST['email'];
	   $number=$_POST['number'];
	   $branch=$_POST['branch'];
	   $address=$_POST['address'];
	   $birth=$_POST['birth'];
	   $select=$_POST['select'];
	   $image=$_FILES['image']['name'];
	   $target="images/".basename($_FILES['image']['name']);
	   $username=mysqli_real_escape_string($conn,$username);
	   $password=mysqli_real_escape_string($conn,$password);
	   $confirm=mysqli_real_escape_string($conn, $confirm);
	   $email=mysqli_real_escape_string($conn,$email);
	   $number=mysqli_real_escape_string($conn,$number);
	   $branch=mysqli_real_escape_string($conn,$branch);
	   $address=mysqli_real_escape_string($conn,$address);
	   $birth=mysqli_real_escape_string($conn,$birth);
	   $select=mysqli_real_escape_string($conn,$select);
	   
		
	   if(empty($select) || empty($image))
		 echo"<script>alert('Enter all the fields');</script>";
	
   if($select=='voter')
	 
		 { $sl="select email from user";
  $result=mysqli_query($conn,$sl) or die(mysqli_error($conn));
  $row=mysqli_fetch_array($result);
		  if($row['email']!=$email)
		   {  if($password==$confirm)
               {
					$sl="select * from user";
					$res=mysqli_query($conn,$sl);
					$row=mysqli_fetch_array($res);
					if($row['email']==$email)
					
						echo "<script> alert('email id already exists');</script>";
					elseif(strlen($number)<10 || strlen($number)>(10))
					    echo "<script>alert('your number is incorrect')</script>";
				   
                    else{
						move_uploaded_file($_FILES['image']['tmp_name'],$target);
                      $sq="insert into user (username,password,email,number,address,date,branch,image) values('$username',' $password','$email','$number',' $address','$birth','$branch','$image')";
				     
					  if(mysqli_query($conn,$sq))
					  
						echo "<div class=\"ph\">Successfully Registered </div>";
					               
					   else
					   
						   echo "sorry not inserted".mysqli_error($conn);
					   
					}
			          
				}
				else 
				
				   echo "<script>alert('Password not matching');</script>";
				        
                

				 

			}
		    else
	      echo "<script>Your email id already Exists</script>"; }  

		  else if($select=='group')
			 {  
				     $sl="select groups.email from user,groups";
                $result=mysqli_query($conn,$sl) or die(mysqli_error($conn));
                  $row=mysqli_fetch_array($result);
				  if($row['email']!=$email)
	 
		 {
				if($password==$confirm)
				{
					 $sl="select * from groups";
					 $res=mysqli_query($conn,$sl);
					 $row=mysqli_fetch_array($res);
					 if($row['email']==$email)
					 
						 echo "<script> alert('email id already exists');</script>";
					 elseif(strlen($number)<10 || strlen($number)>(10))
						 echo "<script>alert('your number is incorrect')</script>";
					
					 else{
						 move_uploaded_file($_FILES['image']['tmp_name'],$target);
					      $sq="insert into groups (username,password,email,number,address,date,branch,image) values('$username',' $password','$email','$number',' $address','$birth','$branch','$image')";
					     
					      if(mysqli_query($conn,$sq))
					   
						 echo "<div class=\"ph\">Successfully Registered </div>";
									
						 else
						
							echo "sorry not inserted".mysqli_error($conn);
						
					     }
					   
				 }
				 else 
				 
					echo "<script>alert('Password not matching');</script>";
			 
				
			 }
			 }
			 else 
                   echo "<script>alert('Your email id already Exists')</script>";
         
  

}
      ?>
	  <script>
        funtion hello()
		{
			alert ("hello its working");
		}

	  </script>
</body>
</html>