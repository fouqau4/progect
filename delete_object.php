<?php
	$username = $_POST['username'];
	$deleteList = $_POST['numbers'];
	shell_exec("./deleteObject $username $deleteList");
?>
