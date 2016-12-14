<?php
	$usernmae = $_POST['usernmae'];
	$number = $_POST['number'];
	//$picture = $_POST['picture'];
	//system(rm uploads/$picture.jpg);
		
	$totalnum = `cat uploads/sequence`;
	$presentnum = $totalnum - $number + 1;

	echo "http://140.117.169.42/project/uploads/".`ls uploads/ | grep -o "$presentnum\_.*\.jpg"`;

?>
