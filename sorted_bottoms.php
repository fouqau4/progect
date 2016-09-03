<?php
	$num = shell_exec("cat sorted_bottoms | wc -l");
	for( $temp_i = 1 ; $temp_i <= $num ; $temp_i++ )
	{
		$current = shell_exec("cat sorted_bottoms | head -$temp_i | tail -1");
		echo "$current";
		echo "<img src=\"picture/bottoms/$current.jpg\" width=\"250\">";
	}
?>
