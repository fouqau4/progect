<?php
//	chdir('recommand');
	system('./recommand/recommand > recommand/data/out');
	$output = shell_exec('cat recommand/data/out;');
	echo "<pre>$output</pre>";
	$result = shell_exec('cat temp_file; rm temp_file');
	echo "<pre>$result</pre>"
//	chdir('..');
?>
