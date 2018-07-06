<?php
   include("config.php");
   session_start();
      if($_SERVER["REQUEST_METHOD"] == "POST") {
	      
	 // heroname sent from form 
	     
	 $heroname = $_POST['heroname'];                      
	 $query = "INSERT INTO blacklist (heroname) VALUES('$heroname');";
	 $query .= "SELECT * FROM blacklist WHERE heroname= '$heroname';";
   	 //echo $query;	
	 if(mysqli_multi_query($db, $query)) {
		 if (mysqli_next_result($db)) {
			 $result = mysqli_store_result($db);
			 $row = mysqli_fetch_row($result);
		 }
	 }
    /* free result set */
    mysqli_free_result($result);

    /* close connection */
    mysqli_close($link);
      }
?>
