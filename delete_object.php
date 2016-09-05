<?php
	$username = $_POST['username'];
	$deleteList = $_POST['numbers'];
	shell_exec("./delectObject $username $deleteList");
?>
