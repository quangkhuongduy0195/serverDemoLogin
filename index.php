<?php
	require "connect.php";
	$qr = 'select * from casi order by rand()';
	$ds = mysqli_query($con,$qr);
	$ar = array();
	while($row = mysqli_fetch_array($ds)){
		array_push($ar, new CaSi($row['id'], $row['Name'], $row['Hinh'], $row['MoTa'], $row['video']));
	}
	echo json_encode($ar);
?>