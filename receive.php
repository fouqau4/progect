<?php
  
   $file_path = "/home/cube/Desktop/uploads/";
     
   $file_path = $file_path . basename( $_FILES['uploaded_file']['name']);
   if($_FILES['uploads_file']['error'])
   {

	echo $_FILES['uploads_file']['error'];
   }
   if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $file_path)) 
   {
       echo "realsuccess";
   } else{
       echo __FILE__;;
   }
?>
