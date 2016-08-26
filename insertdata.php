<?php 

	include "koneksi.php";

	$username="";
	$password="";

	foreach ($_POST as $key => $value) {
    	switch ($key) {
        case 'username':
            $username = $value;
            break;
        case 'pass':
            $password = $value;
            break;
        default:
            break;
    	}
    }

    $sql="INSERT INTO user(username,password) values('$username','$password')";

    if($con->query($sql) === TRUE){
    	echo "New record created successfully";
    }else {
    	echo "Error: " . $sql . "<br>" . $con->error;
	}

	$con->close();

 ?>