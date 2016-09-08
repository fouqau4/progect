<?php

	$number = $_POST['number'];//represent which number
	$totalnum = shell_exec(cat uploads/sequence);
	$presentnum = $totalnum - $number +1;
	echo "http://140.117.169.42/project/uploads/".$presentnum.".jpg";

?>
