<?php
	$num = shell_exec("ls picture/suits | wc -l");
	for( $temp_i = 1 ; $temp_i <= $num ; $temp_i++ )
	{
		$img = shell_exec("cat picture/suits/all | head -$temp_i | tail -1");
		echo $img;
		echo "<img src=\"picture/suits/$img\" width=\"450\" >";
	}
?>
