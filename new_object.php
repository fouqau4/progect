<?php
	$user = $_POST['username'];
	$newObjectNum =  $_POST['num'];
	shell_exec("echo $newObjectNum >> /var/www/html/project/users/$user/wardrobe");
    
	$con = mysqli_connect('localhost','root','12345','dressing',80);
    if ( mysqli_connect_error($con))
    {
        echo "Failed to connect to MySQL : " . mysqli_connect_error() ."<br/>" ;
    }
    else
    {
        $sql = "select * from objects where id = $newObjectNum";
   		if( $result = mysqli_query($con,$sql) )
	    {
    	    $row = mysqli_fetch_assoc($result);
       		if( $row['id'] == "" )
       		{
	        	echo "no exist";
        	}
        	else
        	{
            	if($row['type'] == "")
            	{
	            	echo "forget to key the type";
            	}
            	else
            	{
    	        	if( $row['type'] == 1) //tops
        	    	{
            	    	shell_exec("echo $newObjectNum >> /var/www/html/project/users/$user/mytops");
						echo "tops";
           			}
	            	if( $row['type'] == 4) //buttom
					{
						shell_exec("echo $newObjectNum >> /var/www/html/project/users/$user/mybottoms");
						echo "bottoms";
					}
				}
			}
		}
	}
?>
