<?php 
	require "koneksi.php";

	$idUser="";
	foreach ($_POST as $key => $value) {
		switch ($key) {
			case 'idUser':
				$idUser=$value;
				break;
			
			default:
				# code...
				break;
		}
	}

	$sql="DELETE FROM user where id='$idUser'";

    if($con->query($sql) === TRUE){
    	echo "1 Delete user dengan id='$idUser' successfully";
    }else {
    	echo "0 Error: " . $sql . "<br>" . $con->error;
	}

	$con->close();

 ?>