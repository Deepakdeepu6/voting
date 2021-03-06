<?php
 $conn=mysqli_connect("localhost","root","","voting");
if($conn)
	echo "";
else
	echo"unable to connect to server".mysqli_error($conn);
?>