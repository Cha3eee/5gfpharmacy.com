<?php
// connect to the database
include 'Functions/5GFdb.php';

// start a transaction
mysqli_begin_transaction($dbcon);

// perform the update query
if (isset($_POST['approve'])) 
{
    // get the order details
    $order_id = $_POST['order_id'];
    $query = "SELECT * FROM testing WHERE size = $order_id";
    $result = mysqli_query($dbcon, $query);
    $order = mysqli_fetch_assoc($result);

    // update the inventory
    $product_id = $order['size'];
    $quantity = $order['name'];
    $query = "UPDATE testing SET name = name - $quantity WHERE size = $product_id";
    $query_run = mysqli_query($dbcon, $query);

    // store the subtracted quantity
    $query = "UPDATE testing SET quantity_subtracted = $quantity WHERE size = $order_id";
    $query_run = mysqli_query($dbcon, $query);
    
    // commit or rollback the transaction
    if ($query_run) 
    {
        mysqli_commit($dbcon);
        echo "Order approved!";
    } else 
    {
        mysqli_rollback($dbcon);
        echo "Error: " . mysqli_error($dbcon);
    }
}

if (isset($_POST['reject'])) 
{
    // get the order details
    $order_id = $_POST['order_id'];
    $query = "SELECT * FROM testing WHERE size = $order_id";
    $result = mysqli_query($dbcon, $query);
    $order = mysqli_fetch_assoc($result);

    // add the subtracted quantity back to the inventory
    $product_id = $order['size'];
    $quantity_subtracted = $order['quantity_subtracted'];
    $query = "UPDATE testing SET name = name + $quantity_subtracted WHERE size = $product_id";
    $query_run = mysqli_query($dbcon, $query);

    // clear the subtracted quantity
    $query = "UPDATE testing SET quantity_subtracted = NULL WHERE size = $order_id";
    $query_run = mysqli_query($dbcon, $query);
    
    // commit or rollback the transaction
    if ($query_run) 
    {
        mysqli_commit($dbcon);
        echo "Order rejected!";
    } else 
    {
        mysqli_rollback($dbcon);
        echo "Error: " . mysqli_error($dbcon);
    }
}
?>

<form method="POST" action="">
    <input type="hidden" name="order_id" value="1">
    <input type="number" name="quantity_subtracted">
    <input type="submit" value="Approve" name="approve">
    <input type="submit" value="Reject" name="reject">    
</form>
