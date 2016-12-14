<?php
	$username = $_POST['username'];
	$num = $_POST['num'];
	$totalnum = `cat uploads/sequence`;
	$presentnum = $totalnum - $num + 1;
	echo `(cat ./users/$username/social_love | grep "^$presentnum " | tail -1 | grep -o "[0-9]*$") || echo 0`
?>
