<?php
	$PATH = "/var/www/html/project";
	$username = $_POST['username'];
	system("$PATH/recommand/recommand $username");
/*
	for( $temp_i = $num ; $temp_i <= $num + 3 ; $temp_i++ )
	{
		$img = shell_exec("cat temp_file | head -$temp_i | tail -1 | cut -d_ -f1 | grep -o '[0-9]*'");
		echo "<pre>$img</pre>";
		echo "<img src=\"picture/tops/$img.jpg\" width =\"300\" >";
		$img = shell_exec("cat temp_file | head -$temp_i | tail -1 | cut -d_ -f2 | grep -o '[0-9]*'");
		echo "<pre>$img</pre>";
		echo "<img src=\"picture/bottoms/$img.jpg\" width = \"250\" >";
	}
*/
?>
