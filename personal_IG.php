<?php

	
	$num = $_POST['number'];
	$name = $_POST['name'];
	//echo $num ;
	//echo $name;
	//$num = 6;
	//$name = "alex";
	$name1 = $name."1";
	$name2 = $name."2";
        shell_exec("ls uploads/[0-9]*_$name.* > $name1");
	shell_exec(" cat  $name1 | sed 's/uploads\///g | sort -n > $name2");
	$total = `cat $name1 | wc -l`;
	$num = $total - $num + 1;
	$backnum = shell_exec("sed -n '$num p' $name2");
	echo "http://140.117.169.42/project/uploads/".$backnum;
?>
