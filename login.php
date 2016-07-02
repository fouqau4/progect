<?php
    $con = mysqli_connect('localhost','root','nsysucse','login_file',8080);
    if( mysqli_connect_error($con))
    {
	echo "Fail to connect to MySQL : " . mysqli_connect_error() . "<br/>";
    }
    else
    {
	$match = FALSE;
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "select * from accountAndPassword where account = $username";

	if($result = mysqli_query($con,$sql))
	{
	    $row=mysqli_fetch_assoc($result);
	    if($row['account'] == "")
	    {
		echo "no exist";
	    }
	    else
	    {
		if( $row['password'] == $password )
		{
		    echo "login";
		}
		else
		{
		    echo "wrong_password";
		}
	    }
	}
	else
	{
	    echo "Error : " . $sql . "<br/>" . $con->error;
	}
	
    } 
?>
