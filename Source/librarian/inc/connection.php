<?php 
	 $link= mysqli_connect("localhost","root","password");
     mysqli_select_db($link, "project");
     if(! $link ){
        die('Could not connect: ' . mysqli_error());
     }
 ?>


