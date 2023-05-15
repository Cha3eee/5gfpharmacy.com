<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

<?php
    include ('5GFdb.php');

    $allOrderedItems='';
    $itemQTY=[];

    $sql = "SELECT CONCAT(product_brandname, ' (',product_dsgstrength, ')', ' - ', product_drugclass, '=',product_quantity) AS prodQTY FROM temp_cart";
    $stmt = $dbcon->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
      $itemQTY[] = $row['prodQTY'];
    }
  

    $allOrderedItems = implode(', ', $itemQTY);
    

    if (isset($_POST['btnCheckout'])) {
        header("Location: checkout-page.php");
                /*echo "<script type='text/javascript'>
                    $(document).ready(function() {
                       swal({
                            title: 'Success!',
                            text: 'You have succesfully uploaded your prescription.',
                            timer: 3000
                          }, function(){
                                window.location.href = '../Customer Side/checkout-page.php';
                          });
                        });
                    </script>";
            */
    }

if (isset($_POST['btnPlaceOrder'])) {
    $custID = $_POST['custID'];
    $CheckProdData = "SELECT * FROM temp_cart WHERE custID='$custID'";
    $ProdDataResult = mysqli_query($dbcon, $CheckProdData);

    $hasPrescription = false;
    while ($ProdData = mysqli_fetch_assoc($ProdDataResult)) {
        if ($ProdData['product_drugclass'] === 'Prescription Medicine') {
            if (empty($_FILES['Prescription']['name'])) {
                /*echo "Error: Prescription file is required for this order.";*/
                echo "<script type='text/javascript'>
                    $(document).ready(function() {
                        swal({
                            title: 'Oppss..!',
                            text: 'Prescription file is required for this order.',
                            timer: 3000
                        }, function(){
                            window.location.href = '../Customer Side/checkout-page.php';
                        });
                    });
                </script>";
                return;
            }
            $hasPrescription = true;
        }
    }

    $custOID = $_POST['custOID'];
    $custID = $_POST['custID'];
    $custFN = $_POST['custFN'];
    $custLN = $_POST['custLN'];
    $custEmail = $_POST['custEmail'];
    $custPN = $_POST['custPN'];
    $prodBN = $_POST['orderedProds'];
    $orderTotal = $_POST['orderTotal'];
    $orderStatus = "Pending";
    $file_data = addslashes(file_get_contents('https://i0.wp.com/tacm.com/wp-content/uploads/2018/01/no-image-available.jpeg'));

    // If there is a prescription, upload the file
    if ($hasPrescription) {
        $file_path = $_FILES['Prescription']['tmp_name'];
        $file_data = addslashes(file_get_contents($file_path));
    }

       $sql = "INSERT INTO cust_orders (OrderID, CustID, CustFN, CustLN, CustEmail, product_brandname, product_prescimg, order_total, order_status) 
        SELECT '$custOID', '$custID', '$custFN', '$custLN', '$custEmail', GROUP_CONCAT(CONCAT(product_brandname, ' (' , product_dsgstrength, ')' ,' - ', product_drugclass, '=' ,product_quantity)) AS prodQTY, '$file_data', '$orderTotal', '$orderStatus' 
        FROM temp_cart 
        WHERE custID = '$custID'";
$dbcon->query($sql);

    
    // Delete cart items for this customer
    $query_del = "DELETE FROM temp_cart WHERE custID = '$custID'";
    $dbcon->query($query_del);




    if (mysqli_query($dbcon,$query_del)) 
    { 
        $pBN=$_POST['prodBN'];
        $prodQTY=$_POST['prodQTY'];
        $query_updateqty = "UPDATE `asst_prod` SET product_quantity = product_quantity - '$prodQTY' WHERE product_brandname = '$pBN'";
        if (mysqli_query($dbcon,$query_updateqty)) 
        { 

            $custOID = $_POST['custOID'];
            $custFN = $_POST['custFN'];
            $custLN = $_POST['custLN'];
            $custEmail = $_POST['custEmail'];
            date_default_timezone_set('Asia/Manila');
            $date = date("F j, Y, g:i a",time());

            $from = $custEmail;  
            $fromName = $custEmail; 
            
            $subject = "Order Confirmation";
            $body = '
                    <html> 
                    <head> 
                    </head> 
                    <body style="border: 10px solid; border-color:#145DA0; padding: 50px;"><br>
                    <h1 style="text-align:center;">Thanks for shopping with us!</h1> 
                        <p>Hi, <b>'.$custFN . " " . $custLN.'</b>! <br><br>

                        We received your <b>'.$custOID.'</b> on <b>'.$date.'</b> . We are getting your order validated and will let you know once it is approved. We wish you enjoy shopping with us and hope to see you again real soon!

                        <br><br>
                        5GF Pharmacy - Online Pharmacy Store
                        </p>
                    </body> 
                    </html>';

            $pharmacist_email = "jncclinicoffice@gmail.com";
            $pharmacist_emaillink ="<a href='http://localhost/5GF Pharmacy/Pharmacist/admin-pharmacist-login.php'>Pharmacist admin</a>";
            $pharmacist_emailsubject='A customer has placed an order';
            $pharmacist_emailbody='  
                Please be advised that order <b>'.$custOID.'</b> on <b>'.$date.'</b> has been requested and is now available for verification. To check the details of the order. kindly log in to the '.$pharmacist_emaillink.'.';

            // Set content-type header for sending HTML email 
            $headers = "MIME-Version: 1.0" . "\r\n"; 
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
            $headers2 = "MIME-Version: 1.0" . "\r\n"; 
            $headers2 .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
             
            // Additional headers 
            $headers .= 'From: '.$fromName.'<'.$fromName.'>' . "\r\n"; 
            $headers2 .= 'From: '.$pharmacist_email.'<'.$fromName.'>' . "\r\n"; 
            
            mail($pharmacist_email, $pharmacist_emailsubject, $pharmacist_emailbody, $headers);
            $result = mail($from,$subject,$body,$headers2);

                echo "<script type='text/javascript'>
                    $(document).ready(function() {
                        swal({
                            title: 'Done!',
                            text: 'Order has been placed successfully!',
                            timer: 3000
                        }, function(){
                            window.location.href = '../Customer Side/expanded-order-history.php';
                        });
                    });
                </script>";

                
    }
    else 
    {
        echo "<script type='text/javascript'>
            $(document).ready(function() {
                swal({
                    title: 'Not Success!',
                    text: 'An error occurred while placing the order.',
                    timer: 3000
                }, function(){
                    window.location.href = '../Customer Side/checkout-page.php';
                });
            });
        </script>";
    }
}

}

/*Update Customer Profile*/

if (isset($_POST['btnUpdateProfile'])) {
    $custID=$_POST['custID'];
    $custFN=$_POST['custFN'];
    $custLN=$_POST['custLN'];
    $custEmail=$_POST['custEmail'];
    $custUN=$_POST['custUN'];
    $custPS=$_POST['custPS'];
    $PasswordHash=md5($custPS);
    $custImage= $_FILES['custDP']['name'];
    $Image_Type = $_FILES['custDP']['type'];
    /*$custDP= addslashes(file_get_contents($_FILES['custDP']['tmp_name'])); */ 

    $uppercase = preg_match('@[A-Z]@', $custPS);
    $lowercase = preg_match('@[a-z]@', $custPS);
    $number    = preg_match('@[0-9]@', $custPS);
    $specialchars = preg_match('@[^\w]@', $custPS);

    
    if (!$uppercase) {
            echo "<script type='text/javascript'>
            $(document).ready(function() {
               swal({
                    title: 'Oopps..!',
                    text: 'Password must include at least one upper case.',
                    timer: 3000
                  }, function(){
                        window.location.href = '../Customer Side/registered-user-profile.php';
                  });
                });
            </script>";
    }elseif (!$lowercase) {
          echo "<script type='text/javascript'>
            $(document).ready(function() {
               swal({
                    title: 'Oopps..!',
                    text: 'Password must include at least one lower case.',
                    timer: 3000
                  }, function(){
                        window.location.href = '../Customer Side/registered-user-profile.php';
                  });
                });
            </script>";
    }elseif (!$number) {
          echo "<script type='text/javascript'>
            $(document).ready(function() {
               swal({
                    title: 'Oopps..!',
                    text: 'Password must include at least one number.',
                    timer: 3000
                  }, function(){
                        window.location.href = '../Customer Side/registered-user-profile.php';
                  });
                });
            </script>";
    }elseif (!$specialchars) {
          echo "<script type='text/javascript'>
            $(document).ready(function() {
               swal({
                    title: 'Oopps..!',
                    text: 'Password must include at least one special character.',
                    timer: 3000
                  }, function(){
                        window.location.href = '../Customer Side/registered-user-profile.php';
                  });
                });
            </script>";
    }elseif (strlen($custPS) < 8) {
          echo "<script type='text/javascript'>
            $(document).ready(function() {
               swal({
                    title: 'Oopps..!',
                    text: 'Password must include at least 8 characters length.',
                    timer: 3000
                  }, function(){
                        window.location.href = '../Customer Side/registered-user-profile.php';
                  });
                });
            </script>";
    }

    elseif (($_FILES['custDP']['name'] == "")) {
            $update_profile="UPDATE `cust_profile` SET custFN='$custFN', custLN='$custLN', custEmail='$custEmail', custUN='$custUN', custPS='$PasswordHash' WHERE custID='$custID'";

            if (mysqli_query($dbcon,$update_profile)) {
                echo "<script type='text/javascript'>
                        $(document).ready(function() {
                            swal({
                                title: 'Updated!',
                                text: 'You successfully update your profile!',
                                timer: 3000
                            }, function(){
                                window.location.href = '../Customer Side/registered-user-profile.php';
                            });
                        });
                    </script>";
            }else{
                echo "<script type='text/javascript'>
                    $(document).ready(function() {
                        swal({
                            title: 'Failed!',
                            text: 'You failed to update your profile',
                            timer: 3000
                        }, function(){
                            window.location.href = '../Customer Side/registered-user-profile.php';
                        });
                    });
                </script>";
            }
    }
    else{

        $custDP = addslashes(file_get_contents($_FILES['custDP']['tmp_name']));

        $update_profile="UPDATE `cust_profile` SET custFN='$custFN', custLN='$custLN', custEmail='$custEmail', custUN='$custUN', custPS='$PasswordHash', custDP='$custDP' WHERE custID='$custID'";

            if (mysqli_query($dbcon,$update_profile)) {
                echo "<script type='text/javascript'>
                        $(document).ready(function() {
                            swal({
                                title: 'Updated!',
                                text: 'You successfully update your profile!',
                                timer: 3000
                            }, function(){
                                window.location.href = '../Customer Side/registered-user-profile.php';
                            });
                        });
                    </script>";
            }else{
                echo "<script type='text/javascript'>
                    $(document).ready(function() {
                        swal({
                            title: 'Failed!',
                            text: 'You failed to update your profile',
                            timer: 3000
                        }, function(){
                            window.location.href = '../Customer Side/registered-user-profile.php';
                        });
                    });
                </script>";
            }
        }
}

/*Search function*/

if(isset($_POST['btnSearch'])) 
{
    
    $valueToSearch = $_POST['valueToSearch'];
    if(empty($valueToSearch)) {
        $query = "SELECT * FROM `asst_prod` WHERE product_quantity > 0";
        $search_result = filterTable($query);
    } else {
        $query = "SELECT * FROM `asst_prod` WHERE `product_brandtype` LIKE '%".$valueToSearch."%' AND product_quantity > 0";
        $search_result = filterTable($query); 
    } 

    if(mysqli_num_rows($search_result) == 0) 
    {

         echo "<script type='text/javascript'>
        $(document).ready(function() {
           swal({
                title:'No matching results found!',
                text: 'Please search by brand type (Generic, Branded, No Brand) or double check your spelling',
                type: 'error',
                timer: 10000
              }, function(){
                    window.location.href = 'reg-user-search-all-products.php';
              });
            });
        </script>";
    }
}
else if(isset($_POST['btnSearchBN'])) 
{
    
    $valueToSearch = $_POST['valueToSearchBN'];
    if(empty($valueToSearch)) {
        $query = "SELECT * FROM `asst_prod` WHERE product_quantity > 0";
        $search_result = filterTable($query);
    } else {
        $query = "SELECT * FROM `asst_prod` WHERE `product_brandname` LIKE '%".$valueToSearch."%' AND product_quantity > 0";
        $search_result = filterTable($query); 
    } 

    if(mysqli_num_rows($search_result) == 0) 
    {

         echo "<script type='text/javascript'>
        $(document).ready(function() {
           swal({
                title:'No matching results found!',
                text: 'Please search by brand name or double check your spelling',
                type: 'error',
                timer: 10000
              }, function(){
                    window.location.href = 'reg-user-search-all-products.php';
              });
            });
        </script>";
    }
}
else 
{
        $query = "SELECT * FROM `asst_prod` WHERE product_quantity > 0";
        $search_result = filterTable($query);
}

    // function to connect and execute the query
    function filterTable($query){
        $connect = mysqli_connect("localhost", "root", "", "5gfpharma");
        $filter_Result = mysqli_query($connect, $query);
        return $filter_Result;
    }

    if (isset($_POST['btnUpdateQTY'])) {
        $prodID=$_POST['pID'];
        $prodQTY=$_POST['prodQTY'];
        $prodPR=$_POST['prodPR'];
        $prodSBT= $prodPR*$prodQTY;
        $custID = $_POST['custID'];

        $query_updateQTY="UPDATE `temp_cart` SET product_quantity='$prodQTY' WHERE productID='$prodID' AND custID='$custID'";

        if (mysqli_query($dbcon,$query_updateQTY)) {
            $prodID=$_POST['pID'];
            $prodQTY=$_POST['prodQTY'];
            $prodPR=$_POST['prodPR'];
            $prodSBT= $prodPR*$prodQTY;

            $query_updateSBT="UPDATE `temp_cart` SET product_subtotal='$prodSBT' WHERE productID='$prodID' AND custID='$custID'";

            if (mysqli_query($dbcon,$query_updateSBT)) {
                header("refresh:0;url=cart-page.php");
            }
        }else{
            echo "<script type='text/javascript'>
                    $(document).ready(function() {
                        swal({
                            title: 'Oppss..!',
                            text: 'You failed to update the number of items',
                            timer: 3000
                        }, function(){
                            window.location.href = '../Customer Side/cart-page.php';
                        });
                    });
                </script>";
        }

        /*echo "hello $prodID <br>";
        echo "hello $prodQTY";*/
    }

    if (isset($_POST['btnOTC'])) {
        $displayQuery=('SELECT * FROM `asst_prod` WHERE `productID` LIKE "OTC%"');
        $search_result = filterTable($displayQuery);
    }

    if (isset($_POST['btnPM'])) {
        $displayQuery=('SELECT * FROM `asst_prod` WHERE `productID` LIKE "PMD%"');
        $search_result = filterTable($displayQuery);
    }

    if (isset($_POST['btnHM'])) {
        $displayQuery=('SELECT * FROM `asst_prod` WHERE `productID` LIKE "H%"');
        $search_result = filterTable($displayQuery);
    }

    if (isset($_POST['priceFilter'])) {
        $minPrice=$_POST['minPrice'];
        $maxPrice=$_POST['maxPrice'];
        
        $displayQuery="SELECT * FROM `asst_prod` WHERE `product_pricing` BETWEEN '$minPrice' AND '$maxPrice'";
        $search_result = filterTable($displayQuery);
    }

?>