<?php
//	chdir('recommand');
	system('./recommand/recommand > recommand/data/out');
	$output = shell_exec('cat recommand/data/out;');
	echo "<pre>$output</pre>";
//	$result = shell_exec('cat temp_file; rm temp_file');
	$result = shell_exec('cat temp_file;');
	echo "<pre>$result</pre>";
	for( $temp_i = 1 ; $temp_i <= 5 ; $temp_i++ )
	{
		$img = shell_exec("cat temp_file | head -$temp_i | tail -1 | cut -d_ -f1 | grep -o '[0-9]*'");
		echo "<pre>$img</pre>";
		echo "<img src=\"picture/tops/$img.jpg\" width =\"300\" >";
		$img = shell_exec("cat temp_file | head -$temp_i | tail -1 | cut -d_ -f2 | grep -o '[0-9]*'");
		echo "<pre>$img</pre>";
		echo "<img src=\"picture/bottoms/$img.jpg\" width = \"250\" >";
	}
//	<img src="picture/bottoms/$img.jpg" >i;
//	chdir('..');
?>
