<?php
$con=mysqli_connect('localhost','root','12345','mysql',80);
if ( mysqli_connect_error($con))
{
    echo "Failed to connect to MySQL : " . mysqli_connect_error();
}
else
{
    $noDup = TRUE;
    $username = $_POST['username'];
    $password = $_POST['password'];
  
    $sql = 'select * from accountAndPassword';
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
        $sql = "INSERT INTO accountAndPassword (account, password) values('{$username}','{$password}')";
        if ($con->query($sql) === TRUE )
        {
            echo "yes";
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
