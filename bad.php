<?php
	$num = shell_exec("cat recommand/data/bad_ver2 | wc -l");
	for( $temp_i = 1 ; $temp_i <= $num ; $temp_i++ )
	{
		$img = shell_exec("cat recommand/data/bad_ver2 | head -$temp_i | tail -1 | cut -d_ -f1");
        echo "<pre>$img</pre>";
        echo "<img src=\"picture/tops/$img.jpg\" width =\"300\" >";
        $img = shell_exec("cat recommand/data/bad_ver2 | head -$temp_i | tail -1 | cut -d_ -f2");
        echo "<pre>$img</pre>";
        echo "<img src=\"picture/bottoms/$img.jpg\" width = \"250\" >";
    }
		
?>
