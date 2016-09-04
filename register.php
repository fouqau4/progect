<?php
$con=mysqli_connect('localhost','root','12345','dressing');
if ( mysqli_connect_error($con))
{
    echo "Failed to connect to MySQL : " . mysqli_connect_error();
}
else
{
    $noDup = TRUE;
    $username = $_POST['username'];
    $password = $_POST['password'];
  
    $sql = 'select * from users';
    $result = $con->query($sql);
 
    while($row = mysqli_fetch_assoc($result) )
    {
        if( $row['account'] == $username )
        {
            $noDup = FALSE;
            break;
	}
    }
    if( $noDup )
    {
        $sql = "INSERT INTO users (account, password) values('{$username}','{$password}')";
        if ($con->query($sql) === TRUE )
        {
            echo "yes";
			shell_exec("mkdir -m777 /var/www/html/project/users/$username");
        }
        else
        {
            echo "Error : " . $sql . "<br>" . $con->error;
        }
    }
    else
	echo "duplicate";
}

?>
