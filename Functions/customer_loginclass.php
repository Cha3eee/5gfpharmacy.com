<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">           
            
<?php
session_start();
ob_start();


//Login for Customer

/**
 * 
 */
class CustomerLogin
{
    
    public function CustLogin($custUN, $custPS)
    {
        include ('5GFdb.php');
        $custUNE=$_POST['custUNE'];
        $custPS=$_POST['custPS'];
        $custPS = md5($custPS);

        $CheckCustRec  = "SELECT * FROM cust_profile WHERE custUN='$custUNE' AND custPS='$custPS'";
        $CustRes = mysqli_query($dbcon, $CheckCustRec);

        if ((mysqli_num_rows($CustRes))>0)
        {
            echo "<script type='text/javascript'>
            $(document).ready(function() {
               swal({
                    title: 'Welcome $custUNE!',
                    text: 'You have succesfully logged in to your account',
                    timer: 3000
                  }, function(){
                        window.location.href = '../Customer Side/reg-user-homepage.php';
                  });
                });
            </script>";
        }

        if (mysqli_num_rows($CustRes) == 0) 
        {
            $custUNE = $_POST['custUNE'];
            $custPS = $_POST['custPS'];
            $custPS = md5($custPS);

            $Check_CustUN = "SELECT custUN FROM cust_profile WHERE custUN='$custUNE'";
            $Check_CustPS = "SELECT custPS FROM cust_profile WHERE custPS='$custPS'";

            $Username_Result = mysqli_query($dbcon,$Check_CustUN);
            $Password_Result = mysqli_query($dbcon,$Check_CustPS);

            if ((mysqli_num_rows($Username_Result)) > 0 && (mysqli_num_rows($Password_Result)) == 0) 
            {

                echo '<script type="text/javascript">
                        $(document).ready(function() {
                           swal({
                                title: "Oopps..!",
                                text: "Wrong Password",
                                timer: 3000
                              }, function(){
                                    window.location.href = "../Customer Side/index.php";
                              });
                            });
                        </script>';
            }
            elseif((mysqli_num_rows($Password_Result)) > 0 && (mysqli_num_rows($Username_Result)) == 0)
            {
                echo '<script type="text/javascript">
                        $(document).ready(function() {
                           swal({
                                title: "Oopps..!",
                                text: "Username does not exist!",
                                timer: 3000
                              }, function(){
                                    window.location.href = "../Customer Side/index.php";
                              });
                            });
                        </script>';
            }
            else
            {
                echo '<script type="text/javascript">
                        $(document).ready(function() {
                           swal({
                                title: "Oopps..!",
                                text: "Username and Password are incorrect.",
                                timer: 3000
                              }, function(){
                                    window.location.href = "../Customer Side/index.php";
                              });
                            });
                        </script>';
                        }


        }

    }
}


$CustomerLogin =  new CustomerLogin();

if (isset($_POST['btnLogin'])) 
    {
        $CustLogin = $CustomerLogin ->CustLogin($_POST['custUNE'], $_POST['custPS']);

        // Cookies in Admin Login
        $custUN = $_POST['custUNE'];
        setcookie("CustomerUsername", "$custUN", time()+ 3600, "/", "", 0);
    }
?>