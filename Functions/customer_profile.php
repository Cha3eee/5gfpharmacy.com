<?php
include ('5GFdb.php');

$custUNE = $_COOKIE['CustomerUsername'];
/*$custEM = $_COOKIE['CustomerEmail'];*/

$Get_Customer_Info = mysqli_query($dbcon,"SELECT * FROM cust_profile WHERE custUN='$custUNE' OR custEmail='$custUNE'") or die ("Error in connecting to 5GF Pharmacy Database");

if (mysqli_num_rows($Get_Customer_Info)>0) 
{
	while ($row = mysqli_fetch_array($Get_Customer_Info)) 
	{
		$custID = $row['custID'];
		$custFN = $row['custFN'];
		$custLN = $row['custLN'];
		$custEmail = $row['custEmail'];
		$custUNE = $row['custUN'];
		$custPS = $row['custPS'];
		$custDP = $row['custDP'];
		/*$custOTP = $row['custOTP'];*/
	}
}


?>