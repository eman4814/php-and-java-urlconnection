<?php 
	require 'koneksi.php';

	$sql="select * from user";
	$result=$con -> query($sql);

	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			$data[] = $row;
		}
		print json_encode($data);
	}else{
		echo '[{"id":"0","username":"0","password":"0"}]';
	}

 ?>