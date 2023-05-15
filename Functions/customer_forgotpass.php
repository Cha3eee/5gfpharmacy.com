<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

<?php
	include ('5GFdb.php');

	if (isset($_POST['btnGetEmailCode'])) {
		$custFPEmail=$_POST['FPEmail'];
		$emailto = $custFPEmail;
		$OTP = rand(100000,999999);

		$query_updateotp="UPDATE `cust_profile` SET custOTP='$OTP' WHERE custEmail='$custFPEmail'";

		if (mysqli_query($dbcon,$query_updateotp)) {
			
			$subject = "Forgot Password " . $custFPEmail;
	        $body = '
	                Hi, '.$custFPEmail.'!

	                We have received your request to reset your password. Here is your OTP: '.$OTP.'

	                5GF Pharmacy - Online Pharmacy Store';

	        $headers = "MIME-Version: 1.0" . "\r\n"; 
	        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	        $emailfrom = "From:5gfpharma@gmail.com";
	        $result = mail($emailto,$subject,$body,$emailfrom);

		        if($result == true){
	                    echo "<script type='text/javascript'>
	                        $(document).ready(function() {
	                           swal({
	                                title: 'OTP sent!',
	                                text: 'Your OTP was sent to your email.',
	                                timer: 3000
	                              }, function(){
	                                    
	                              });
	                            });
	                        </script>";
	                } else {
	                    echo '<script type="text/javascript">
	                        $(document).ready(function() {
	                           swal({
	                                title: "Oopps..!",
	                                text: "Failed to send your OTP",
	                                timer: 3000
	                              }, function(){
	                                    
	                              });
	                            });
	                        </script>';
	                }

		}
	}

	if (isset($_POST['btnSubmitFPS'])) {
		
		$custFPEmail=$_POST['FPEmail'];
		$custFPCode=$_POST['FPCode'];

		$query_checkOTP="SELECT * FROM `cust_profile` WHERE custEmail='$custFPEmail' AND custOTP='$custFPCode'";
		$result=mysqli_query($dbcon,$query_checkOTP);

		if ((mysqli_num_rows($result))>0) {

			setcookie('FPEmail', $custFPEmail, time() + (86400 * 30), "/");
			echo "<script type='text/javascript'>
                    $(document).ready(function() {
                        swal({
                            title: 'Success!',
                            text: 'You can now reset your password.',
                            timer: 3000
                        }, function(){
                            window.location.href = '../Customer Side/reset-password.php';
                        });
                    });
                </script>";
		}else{
			echo "<script type='text/javascript'>
                    $(document).ready(function() {
                        swal({
                            title: 'Oppsss..!',
                            text: 'Failed to reset password.',
                            timer: 3000
                        }, function(){
                            window.location.href = '../Customer Side/forgot-pass-wo-boxes.php';
                        });
                    });
                </script>";
		}
	}

	if (isset($_POST['btnResetPass'])) {

		$NPass =$_POST['NewPass'];
        $PasswordHash = md5($NPass); 
		$CPass =$_POST['ConfirmPass'];
		$FPEmail = $_COOKIE['FPEmail'];

		$uppercase = preg_match('@[A-Z]@', $NPass);
        $lowercase = preg_match('@[a-z]@', $NPass);
        $number    = preg_match('@[0-9]@', $NPass);
        $specialchars = preg_match('@[^\w]@', $NPass);

		if ($NPass != $CPass) {
			echo "<script type='text/javascript'>
                    $(document).ready(function() {
                        swal({
                            title: 'Oppsss..!',
                            text: 'Password do not match.',
                            timer: 3000
                        }, function(){
                            window.location.href = '../Customer Side/reset-password.php';
                        });
                    });
                </script>";
		}elseif (!$uppercase) {
			echo "<script type='text/javascript'>
            $(document).ready(function() {
               swal({
                    title: 'Oopps..!',
                    text: 'Password must include at least one upper case.',
                    timer: 3000
                  }, function(){
                        window.location.href = '../Customer Side/reset-password.php';
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
                        window.location.href = '../Customer Side/reset-password.php';
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
                        window.location.href = '../Customer Side/reset-password.php';
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
                        window.location.href = '../Customer Side/reset-password.php';
                  });
                });
            </script>";
        }elseif (strlen($NPass) < 8) {
          echo "<script type='text/javascript'>
            $(document).ready(function() {
               swal({
                    title: 'Oopps..!',
                    text: 'Password must include at least 8 characters length.',
                    timer: 3000
                  }, function(){
                        window.location.href = '../Customer Side/reset-password.php';
                  });
                });
            </script>";
        }else{
        	$str="UPDATE `cust_profile` SET custPS='$PasswordHash' WHERE custEmail='$FPEmail'";
            $result=mysqli_query($dbcon,$str);

            if($result) {
                echo "<script type='text/javascript'>
                    $(document).ready(function() {
                        swal({
                            title: 'Success!',
                            text: 'Password successfully updated.',
                            timer: 3000
                        }, function(){
                            window.location.href = '../Customer Side/successful-pass-reset.php';
                        });
                    });
                </script>";
            }
		}
	}

?>