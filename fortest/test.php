<?php
	$a = shell_exec("cat apple | wc -l");
	echo $a;
	for($i=1;$i<=$a;$i++)
	{
		echo shell_exec("cat apple | sed -n '$i'p ");
	}
?>
