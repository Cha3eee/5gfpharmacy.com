<?php 

include ('Functions/customer_loginclass.php');

$CustomerLogin =  new CustomerLogin();

	if (isset($_POST['btnLogin'])){
	    $CustLogin = $CustomerLogin ->CustLogin($_POST['custUNE'],$_POST['custPS']);

	    // Cookies in Customer Login
	    $custUNE = $_POST['custUNE'];
	    setcookie("CustomerUsername", "$custUNE", time()+ 3600, "/", "", 0);

	    /*if (($CustLogin) && password_verify($custPW,$PasswordHash)) {
	    	// code...
	    }
*/
	}
?>