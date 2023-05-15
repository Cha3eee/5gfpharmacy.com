<?php
	include ('5GFdb.php');

	$Display_Products = $dbcon->prepare('SELECT * FROM asst_prod');
	$Display_Products->execute();
	$result = $Display_Products->get_result();

?>