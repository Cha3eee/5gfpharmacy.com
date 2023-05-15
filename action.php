<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<?php
	session_start();
	require 'Functions/5GFdb.php';

	// Add products into the temp_cart table (reg-user-homepage.php)
if (isset($_POST['prodID'])) {
    $custID=$_POST['custID'];
    $prodID = $_POST['prodID'];
    $prodBN = $_POST['prodBN'];
    $prodPR = $_POST['prodPR'];
    $prodQTY = $_POST['prodQTY'];
    $prodDC = $_POST['prodDC'];
    $prodDSTR = $_POST['prodDSTR'];
    $prodImage = $_POST['prodImage'];
    $prodSubtotal = $prodQTY * $prodPR;

    // Check if the item already exists in the user's cart
    $stmt = $dbcon->prepare("SELECT * FROM temp_cart WHERE custID = ? AND productID = ?");
    $stmt->bind_param("ss", $custID, $prodID);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 0) {
        // Item does not exist in the user's cart, so insert it
        $query = $dbcon->prepare('INSERT INTO `temp_cart`(`custID`, `productID`, `product_brandname`, `product_pricing`, `product_drugclass`, `product_dsgstrength`, `product_quantity`, `product_subtotal`, `product_image`) VALUES (?,?,?,?,?,?,?,?,?)');
        $query->bind_param('sssssssss',$custID,$prodID,$prodBN,$prodPR,$prodDC,$prodDSTR,$prodQTY,$prodSubtotal,$prodImage);
        $query->execute();

        echo "<script type='text/javascript'>
            $(document).ready(function() {
                swal({
                    title: 'Success!',
                    text: 'You have succesfully added the item into your cart.',
                    timer: 3000
                }, function(){
                    window.location.href = '../Customer Side/reg-user-homepage.php';
                });
            });
        </script>";
    } else {
        // Item already exists in the user's cart, so display an error message
        echo "<script type='text/javascript'>
            $(document).ready(function() {
                swal({
                    title: 'Ooppss..!',
                    text: 'Item is already in your cart',
                    timer: 3000
                }, function(){
                    window.location.href = '../Customer Side/reg-user-homepage.php';
                });
            });
        </script>";
    }

    exit();
}

	
	/*Get no.of items available in the temp_cart table*/

	if (isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item') {
  // Get the custID from session
  $custID = $_SESSION['custID'];

  // Prepare the SQL query to select the cart items for the user
  $stmt = $dbcon->prepare("SELECT COUNT(*) as num_items FROM temp_cart WHERE custID = '$custID'");
  $stmt->execute();
  $stmt->bind_result($numItems);
  $stmt->fetch();

  echo $numItems;
}


if (isset($_GET['remove'])) {
    $productID = $_GET['remove'];
    $Delete_Profile = "DELETE FROM temp_cart WHERE productID='$productID'";
    
    $retval = mysqli_query($dbcon,$Delete_Profile);   
    
    if ($retval) {
    	echo "<script type='text/javascript'>
				$(document).ready(function() {
				  swal({
				    title: 'Item Deleted',
				    text: 'Selected Item was Deleted Successfully',
				    type: 'success',
				    showConfirmButton: true
				}, function(){
				    window.location.href = '../Customer Side/cart-page.php';
					});
				});
			</script>";

  	}
}
	
?>