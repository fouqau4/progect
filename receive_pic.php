<?php
  
   $file_path = "uploads/";
   $num = shell_exec("cat uploads/sequence");
   $num = $num+1;
   shell_exec("echo $num > uploads/sequence");
   //$file_num =
   $file_path = $file_path . $num.".jpg";
   if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $file_path)) 
   {
       echo $num;
   } else{
       echo "fail";
   }
?>
