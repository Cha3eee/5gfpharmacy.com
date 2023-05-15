<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

<?php 

    ob_start();
    session_start();
    /*session_destroy();*/

    if (isset($_POST['btnCreateAcc'])) 
    {
        include '5GFdb.php';

        $custID = $_POST['custID'];
        $custFN = $_POST['custFN'];
        $custLN = $_POST['custLN'];
        $custEmail = $_POST['custEmail'];
        $custUN = $_POST['custUN'];
        $custPS = $_POST['custPS'];
        $PasswordHash = md5($custPS); 
        /*$PasswordHash= password_hash($custPS, PASSWORD_DEFAULT);*/
        $custCPS = $_POST['custCPS'];
        $OTP=$_SESSION['OTP'];
        $custOTP = $_POST['custOTP'];
        $file_path = 'public/playground_assets/icons8-test-account-90.png'; 
        $file_data = addslashes(file_get_contents($file_path));

        $uppercase = preg_match('@[A-Z]@', $custPS);
        $lowercase = preg_match('@[a-z]@', $custPS);
        $number    = preg_match('@[0-9]@', $custPS);
        $specialchars = preg_match('@[^\w]@', $custPS);
        
        if ($OTP != $custOTP) {
            echo "<script type='text/javascript'>
            $(document).ready(function() {
               swal({
                    title: 'Oopps..!',
                    text: 'Enter correct OTP Code.',
                    timer: 3000
                  }, function(){
                        
                  });
                });
            </script>";
        }

        elseif (!$uppercase) {
          echo "<script type='text/javascript'>
            $(document).ready(function() {
               swal({
                    title: 'Oopps..!',
                    text: 'Password must include at least one upper case.',
                    timer: 3000
                  }, function(){
                        
                  });
                });
            </script>";
        }

        elseif (!$lowercase) {
          echo "<script type='text/javascript'>
            $(document).ready(function() {
               swal({
                    title: 'Oopps..!',
                    text: 'Password must include at least one lower case.',
                    timer: 3000
                  }, function(){
                        
                  });
                });
            </script>";
        }

        elseif (!$number) {
          echo "<script type='text/javascript'>
            $(document).ready(function() {
               swal({
                    title: 'Oopps..!',
                    text: 'Password must include at least one number.',
                    timer: 3000
                  }, function(){
                        
                  });
                });
            </script>";
        }

        elseif (!$specialchars) {
          echo "<script type='text/javascript'>
            $(document).ready(function() {
               swal({
                    title: 'Oopps..!',
                    text: 'Password must include at least one special character.',
                    timer: 3000
                  }, function(){
                        
                  });
                });
            </script>";
        }

        elseif (strlen($custPS) < 8) {
          echo "<script type='text/javascript'>
            $(document).ready(function() {
               swal({
                    title: 'Oopps..!',
                    text: 'Password must include at least 8 characters length.',
                    timer: 3000
                  }, function(){
                        
                  });
                });
            </script>";
        }

        elseif ($custPS != $custCPS) {
            echo "<script type='text/javascript'>
            $(document).ready(function() {
               swal({
                    title: 'Oopps..!',
                    text: 'Password do not match.',
                    timer: 3000
                  }, function(){
                        
                  });
                });
            </script>";
        }

        else{
            
            $str="SELECT custUN from cust_profile WHERE custUN='$custUN'";
            $result=mysqli_query($dbcon,$str);

            if((mysqli_num_rows($result))>0) {
                echo "<script type='text/javascript'>
                    $(document).ready(function() {
                       swal({
                            title: 'Oopps..!',
                            text: 'This username is already registered.',
                            timer: 3000
                          }, function(){
                                window.location.href = '../Customer Side/registration.php';
                          });
                        });
                    </script>";
            }
            else {

                $str="INSERT INTO `cust_profile`(`custID`, `custFN`, `custLN`, `custEmail`, `custUN`, `custPS`,`custOTP`,`custDP`) VALUES ('$custID','$custFN','$custLN','$custEmail','$custUN','$PasswordHash','$custOTP','$file_data')";        
                
                if((mysqli_query($dbcon,$str))) {

                    echo "<script type='text/javascript'>
                    $(document).ready(function() {
                       swal({
                            title: 'Success!',
                            text: 'You have succesfully registered your account',
                            timer: 3000
                          }, function(){
                                window.location.href = '../Customer Side/index.php';
                          });
                        });
                    </script>";

                }else{
                    echo "<script type='text/javascript'>
                    $(document).ready(function() {
                       swal({
                            title: 'Oopps..!',
                            text: 'You failed the registration.',
                            timer: 3000
                          }, function(){
                                window.location.href = '../Customer Side/registration.php';
                          });
                        });
                    </script>";
                }

            }
        }
    }

    include '5GFdb.php';

    if (isset($_POST['btnOTPVerify'])) {
        
        $custFN = $_POST['custFN'];
        $custLN = $_POST['custLN'];
        $custEmail = $_POST['custEmail'];

        $emailto = $custEmail;
        $OTP = rand(100000,999999);
        $_SESSION['OTP'] = $OTP;

        $query_CheckTbl="SELECT * FROM `cust_profile` WHERE custEmail='$custEmail'";
        $rslt=mysqli_query($dbcon,$query_CheckTbl);

        if((mysqli_num_rows($rslt))>0) {
            echo "<script type='text/javascript'>
                    $(document).ready(function() {
                       swal({
                            title: 'Oopps..!',
                            text: 'This email is already registered.',
                            timer: 3000
                          }, function(){
                                window.location.href = '../Customer Side/registration.php';
                          });
                        });
                    </script>";
        }else{

            $query_insertOTP="UPDATE `cust_profile` SET custOTP='$OTP' WHERE custEmail='$custEmail'";

            if (mysqli_query($dbcon,$query_insertOTP)) {
                $subject = "OTP Verification Code for " . $custFN . " " . $custLN;
                $body = '
                    <html> 
                    <head> 
                    </head> 
                    <body style="text-align: center; border: solid; border-color:#145DA0;"><br> 
                    <h1>Your OTP Verification Code</h1> 
                        <p>Hi, <b>'.$custFN . " " . $custLN.'</b>! <br><br>

                        Here is the confirmation code for your registration form: <br><br>

                        Your Verification Code is: <br><b style="font-size: 32px;">'.$OTP.'</b> <br><br>

                        All you have to do is copy the confirmation code and <br>paste it to the form to complete the email verification process.

                        <br><br>
                        5GF Pharmacy - Online Pharmacy Store
                        </p>
                    </body> 
                    </html>';

                    $headers = "MIME-Version: 1.0" . "\r\n"; 
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                    $headers .= "From:5gfpharma@gmail.com";
                    $result = mail($emailto,$subject,$body,$headers);

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
        
    }
?>