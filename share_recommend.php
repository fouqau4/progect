<?php
	$username = $_POST['username'];
	$top = $_POST['top'];
	$bottom = $_POST['bottom'];
	
	$file_path = "uploads/";
	$num = shell_exec("cat uploads/lastnum");//last pic is which one
	$num_total = shell_exec("cat uploads/sequence");//total pic count
	$num = $num+1;
	$num_total = $num_total+1;
	$cloth_exist = "1 ";
	
	shell_exec("convert -append ./picture/tops/$top.jpg ./picture/bottoms/$bottom.jpg ./uploads/$num'_'$username.jpg");
	shell_exec("echo $num > uploads/lastnum");
	shell_exec("echo $num_total > uploads/sequence");
	shell_exec("echo  $cloth_exist >> uploads/clothlist");
	shell_exec("echo 0 >> love");//the is for the number of love
	
	/*$file_path = "./uploads/".$num."_".$username."jpg";
	$quality = 30;
	switch (exif_imagetype($file_path)) {
	 
	    case IMAGETYPE_PNG :
		$img = imagecreatefrompng($file_path);
		break;
	    case IMAGETYPE_JPEG :
		$img = imagecreatefromjpeg($file_path);
		break;
	    default:
		throw new InvalidArgumentException("錯誤發生");
		exit();
		break;
	}
	 
	@imagejpeg($img, $file_path, $quality);
	 
	//印在畫面上
	//header('Content-Type: image/jpeg');
	//@imagejpeg($img, NULL, $quality);
	 
	//釋放記憶體
	@imagedestroy($img);*/
?>
