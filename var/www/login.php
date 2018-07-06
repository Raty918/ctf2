<?php
   include("config.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
	   
	    // username and password sent from form 
	     $myusername = mysqli_real_escape_string($db,$_POST['username']);
	     $mypassword = md5(mysqli_real_escape_string($db,$_POST['password']));
	     $sql = "SELECT * FROM user WHERE user = '$myusername' and password = '$mypassword'";
	     $result = mysqli_query($db,$sql);                                                       
	     $count = mysqli_num_rows($result);


	      /* free result set */
	         mysqli_free_result($result);

	         /* close connection */
	         mysqli_close($link);


	    // If result matched $myusername and $mypassword, table row must be 1 row
	     if($count == 1) {
		     $_SESSION['login_user'] = $myusername;
		     header("location: index.php");	     
	     }else {
		     $_SESSION['login_fail']=false;
		     header("location: test.php#contact");
	     }
   }
?>
