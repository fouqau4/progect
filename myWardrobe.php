<?php
	$username = $_POST['username'];
	$wardrobe = shell_exec("cat /var/www/html/project/users/$username/wardrobe");
	echo $wardrobe;
?>
