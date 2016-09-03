<?php
    $con = mysqli_connect('localhost','root','12345','dressing',80);
    if ( mysqli_connect_error($con))
    {
	    echo "Failed to connect to MySQL : " . mysqli_connect_error() ."<br/>" ; 
    }
    else
    {
	$match = FALSE;
        $clothid = $_POST['clothid'];
        $sql = "select * from objects where id = $clothid";
	if($result = mysqli_query($con,$sql))
	{
	    $row=mysqli_fetch_assoc($result);
	    if($row['id'] == "")
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
				
				echo "http://140.117.169.42/project/picture/tops/".$clothid.".jpg";
			
				
			}
		        if( $row['type'] == 2) //jackets
			{
				
				echo "http://140.117.169.42/project/picture/jackets/".$clothid.".jpg";
				
		
			}
			if( $row['type'] == 4) //buttom
			{
				echo "http://140.117.169.42/project/picture/bottoms/".$clothid.".jpg";
			}
				
		    }
	    }

	}
	else
	{
	    echo "Error : " . $sql . "<br/>" . $con->error;
	}
    }

    
?>

