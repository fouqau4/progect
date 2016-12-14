<?php
	
		
	$username = $_POST['username'];
	$score1 =  $_POST['score1'];
	$score2 =  $_POST['score2'];
	$score3 =  $_POST['score3'];
	$score4 =  $_POST['score4'];
	$score5 =  $_POST['score5'];
	$score6 =  $_POST['score6'];
	$score7 =  $_POST['score7'];
	
	$username1=$username."1.txt";
	$username2=$username."2.txt";
	$username3=$username."3.txt";
	$username4=$username."4.txt";
	$username5=$username."5.txt";
	$username6=$username."6.txt";
	$username7=$username."7.txt";
	$username8=$username."8.txt";
	
	shell_exec(" cd users ; echo $score1 > $username1");
	shell_exec(" cd users ; echo $score2 >> $username1");
	shell_exec(" cd users ; echo $score3 >> $username1");
	shell_exec(" cd users ; echo $score4 >> $username1");
	shell_exec(" cd users ; echo $score5 >> $username1");
	shell_exec(" cd users ; echo $score6 >> $username1");
	shell_exec(" cd users ; echo $score7 >> $username1");
	
	shell_exec(" cd users ; echo  > $username2");
	shell_exec(" cd users ; echo  > $username3");
	shell_exec(" cd users ; echo  > $username4");
	shell_exec(" cd users ; echo  > $username5");
	shell_exec(" cd users ; echo  > $username6");
	shell_exec(" cd users ; echo  > $username7");
	shell_exec(" cd users ; echo  > $username8");
	
	
	
?>
