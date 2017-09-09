<?php
	require "connect.php";
	
	$id = $_GET['id'];
	$qr = 'select * from casi order by rand()';
	if($id == 0){
		$qr = 'select * from casi where id = 25';
	}
	else if($id == 1){
		$qr = 'select * from casi where id = 2';
	}
	else if($id == 2){
		$qr = 'select * from casi where id = 10';
	}
	$ds = mysqli_query($con,$qr);
	$ar = array();
	while($row = mysqli_fetch_array($ds)){
		array_push($ar, new CaSi($row['id'], $row['Name'], $row['Hinh'], $row['MoTa'], $row['video']));
	}
	sleep(5);
	echo json_encode($ar);
?>
