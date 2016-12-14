<?php
	$number = $_POST['number'];//represent which number
	$totalnum = `cat uploads/sequence`;
	//$number = 1;
	$presentnum = $totalnum - $number + 1;
	
	$change_love = $_POST['change'];//change the number of love
	$love_num = `cat love | head -$presentnum | tail -1 | tr -d '\n' `;
	//$love_num = 25;
	//$change_love = +5;
	
	$new_num = $love_num + $change_love;
	//echo $love_num;
	//echo $new_num;
	//echo $presentnum;
	
	echo `sed '$presentnum s/$love_num/$new_num/' love > love2`;
	echo `cat love2 | tr ' ' '\n'  > love`;
	//shell_exec("echo $change_love > love3");
	//shell_exec("cat love | head -$number | tail -1 | tr '\n' ' ' ");
	



?>
