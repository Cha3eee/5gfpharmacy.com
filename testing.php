<?php

include ('Functions/5GFdb.php');
$Get_Data = $dbcon->prepare('SELECT * FROM temp_cart');
        $Get_Data->execute();
        $Data_Results = $Get_Data->get_result();
        while ($row = $Data_Results->fetch_assoc())
        {
        		$image_data = $row['product_image'];
        }
// Retrieve the base64-encoded string from the database


// Generate the HTML code to display the image
echo '<img src="data:image/png;base64,' . $image_data . '" alt="My Image">';
?>