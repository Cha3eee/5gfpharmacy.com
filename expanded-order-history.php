<?php 
  /*include ('action.php');*/
  include ('Functions/customer_profile.php');
  include ('Functions/customer_scrud.php');

  session_start();
  $OrderID= $_SESSION['custOID'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="shortcut icon" type="image/x-icon" href="\public\playground_assets\image-oy1m-200h.png" />
    <title>Your Orders</title>
    <link rel="icon" href="\5GF Pharmacy\Pharmacy Assistant\public\playground_assets\5gf pharmacy logo1-200h.png" type="image/png" /> 
    <meta
      property="og:title"
      content="Expanded-Order-History - Wonderful Jolly Hummingbird"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }
      textarea{
        resize: none;
        color: rgb(39, 39, 39);
      }

    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div>
      <link href="./expanded-order-history.css" rel="stylesheet" />

      <div class="expanded-order-history-container">
        <div class="expanded-order-history-main-b-container">
          <form class="expanded-order-history-main-form">
            <div class="expanded-order-history-container01">
              <svg viewBox="0 0 1024 1024" class="expanded-order-history-icon">
                <path
                  d="M512 0c-176.732 0-320 143.268-320 320 0 320 320 704 320 704s320-384 320-704c0-176.732-143.27-320-320-320zM512 512c-106.040 0-192-85.96-192-192s85.96-192 192-192 192 85.96 192 192-85.96 192-192 192z"
                ></path>
              </svg>
              <span class="expanded-order-history-text">
                G/F Gocheco Bldg., Sta. Cruz, Manila
              </span>
               <a onclick="confirmLogout()"
                class="expanded-order-history-navlink button"
              >
                <svg
                  viewBox="0 0 1024 1024"
                  class="expanded-order-history-icon02"
                >
                  <path
                    d="M768 640v-128h-320v-128h320v-128l192 192zM704 576v256h-320v192l-384-192v-832h704v320h-64v-256h-512l256 128v576h256v-192z"
                  ></path>
                </svg>
                <span class="expanded-order-history-text01">
                  <span>Logout</span>
                  <br />
                </span>
              </a>
              <a
                href="registered-user-profile.php"
                class="expanded-order-history-navlink01 button"
              >
                <svg
                  viewBox="0 0 731.4285714285713 1024"
                  class="expanded-order-history-icon04"
                >
                  <path
                    d="M731.429 799.429c0 83.429-54.857 151.429-121.714 151.429h-488c-66.857 0-121.714-68-121.714-151.429 0-150.286 37.143-324 186.857-324 46.286 45.143 109.143 73.143 178.857 73.143s132.571-28 178.857-73.143c149.714 0 186.857 173.714 186.857 324zM585.143 292.571c0 121.143-98.286 219.429-219.429 219.429s-219.429-98.286-219.429-219.429 98.286-219.429 219.429-219.429 219.429 98.286 219.429 219.429z"
                  ></path>
                </svg>
                <span class="expanded-order-history-text04">
                  <span>View Profile</span>
                  <br />
                </span>
              </a>
              <a
                href="checkout-page.php"
                class="expanded-order-history-navlink02 button"
              >
                <svg
                  viewBox="0 0 1024 1024"
                  class="expanded-order-history-icon06"
                >
                  <path
                    d="M1004 804.571l20 178.857c1.143 10.286-2.286 20.571-9.143 28.571-6.857 7.429-17.143 12-27.429 12h-950.857c-10.286 0-20.571-4.571-27.429-12-6.857-8-10.286-18.286-9.143-28.571l20-178.857h984zM950.857 325.143l49.143 442.857h-976l49.143-442.857c2.286-18.286 17.714-32.571 36.571-32.571h146.286v73.143c0 40.571 32.571 73.143 73.143 73.143s73.143-32.571 73.143-73.143v-73.143h219.429v73.143c0 40.571 32.571 73.143 73.143 73.143s73.143-32.571 73.143-73.143v-73.143h146.286c18.857 0 34.286 14.286 36.571 32.571zM731.429 219.429v146.286c0 20-16.571 36.571-36.571 36.571s-36.571-16.571-36.571-36.571v-146.286c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286v146.286c0 20-16.571 36.571-36.571 36.571s-36.571-16.571-36.571-36.571v-146.286c0-121.143 98.286-219.429 219.429-219.429s219.429 98.286 219.429 219.429z"
                  ></path>
                </svg>
                <span class="expanded-order-history-text07">
                  <span>Checkout</span>
                  <br />
                </span>
              </a>
              <a
                href="registration.php"
                class="expanded-order-history-navlink03 button"
              >
                <span class="expanded-order-history-text10">
                  <span>Hello, <?php echo $custUNE ?>!</span>
                  <br />
                </span>
              </a>
            </div>
            <div class="expanded-order-history-container02">
              <a
                href="reg-user-homepage.php"
                class="expanded-order-history-navlink04"
              >
                <img
                  alt="image"
                  src="public/playground_assets/image-oy1m-200h.png"
                  class="expanded-order-history-image"
                />
              </a>
              <a
                href="reg-user-homepage.php"
                class="expanded-order-history-navlink05"
              >
                <div class="expanded-order-history-logo-text-container">
                  <span class="expanded-order-history-text13">PHARMACY</span>
                  <div class="expanded-order-history-separator"></div>
                  <span class="expanded-order-history-text14">
                    ONLINE PHARMACY STORE
                  </span>
                </div>
              </a>
              <input
                type="text"
                placeholder="Search for Branded or Generic Medicine...."
                class="expanded-order-history-textinput input"
              />
              <button class="expanded-order-history-button button">
                <svg
                  viewBox="0 0 950.8571428571428 1024"
                  class="expanded-order-history-icon08"
                >
                  <path
                    d="M658.286 475.429c0-141.143-114.857-256-256-256s-256 114.857-256 256 114.857 256 256 256 256-114.857 256-256zM950.857 950.857c0 40-33.143 73.143-73.143 73.143-19.429 0-38.286-8-51.429-21.714l-196-195.429c-66.857 46.286-146.857 70.857-228 70.857-222.286 0-402.286-180-402.286-402.286s180-402.286 402.286-402.286 402.286 180 402.286 402.286c0 81.143-24.571 161.143-70.857 228l196 196c13.143 13.143 21.143 32 21.143 51.429z"
                  ></path>
                </svg>
              </button>
              <a
                href="cart-page.php"
                class="expanded-order-history-navlink06 button"
              >
                <svg
                  viewBox="0 0 1024 1024"
                  class="expanded-order-history-icon10"
                >
                  <path
                    d="M885.589 228.053c-8.149-9.344-19.883-14.72-32.256-14.72h-589.611l-8.32-49.664c-3.413-20.565-21.205-35.669-42.069-35.669h-96c-23.595 0-42.667 19.072-42.667 42.667s19.072 42.667 42.667 42.667h59.861l79.36 476.331c0.341 1.92 1.323 3.499 1.92 5.291 0.683 2.261 1.237 4.395 2.304 6.443 1.365 2.816 3.2 5.205 5.12 7.637 1.323 1.664 2.517 3.328 4.053 4.779 2.475 2.304 5.333 3.925 8.235 5.547 1.621 0.896 3.029 2.091 4.779 2.773 4.949 2.005 10.155 3.2 15.659 3.2 0.043 0 469.376 0 469.376 0 23.595 0 42.667-19.072 42.667-42.667s-19.072-42.667-42.667-42.667h-433.195l-7.083-42.667h482.944c21.248 0 39.253-15.616 42.24-36.608l42.667-298.667c1.749-12.288-1.92-24.704-9.984-34.005zM804.139 298.667l-12.16 85.333h-151.979v-85.333h164.139zM597.333 298.667v85.333h-128v-85.333h128zM597.333 426.667v85.333h-128v-85.333h128zM426.667 298.667v85.333h-128c-2.261 0-4.309 0.64-6.315 1.28l-14.421-86.613h148.736zM299.264 426.667h127.403v85.333h-113.195l-14.208-85.333zM640 512v-85.333h145.835l-12.16 85.333h-133.675z"
                  ></path>
                  <path
                    d="M426.667 832c0 35.346-28.654 64-64 64s-64-28.654-64-64c0-35.346 28.654-64 64-64 35.346 0 64 28.654 64 64z"
                  ></path>
                  <path
                    d="M810.667 832c0 35.346-28.654 64-64 64s-64-28.654-64-64c0-35.346 28.654-64 64-64 35.346 0 64 28.654 64 64z"
                  ></path>
                </svg>
                <span class="expanded-order-history-text15">0 item</span>
              </a>
            </div>
            <div class="expanded-order-history-container03">
              <a
                href="reg-user-homepage.php"
                class="expanded-order-history-navlink07"
              >
                HOME
              </a>
              <a href="reg-user-search-all-products.php" class="expanded-order-history-text16">ALL PRODUCTS</a>
              <span class="expanded-order-history-text17">OTC MEDICINES</span>
              <span class="expanded-order-history-text18">PRESCRIPTION</span>
              <span class="expanded-order-history-text19">HOME REMEDIES</span>
              <a href="reg-user-faq.php" class="expanded-order-history-text20">FAQ</a>
              <a href="reg-user-contact-us.php" class="expanded-order-history-text21">CONTACT US</a>
              <a href="reg-user-call-and-pickup.php" class="expanded-order-history-text22">CALL AND PICKUP</a>
            </div>
            <div class="expanded-order-history-resizable-container">
              <div class="expanded-order-history-container04">
                <div class="expanded-order-history-container05">
                  <span class="expanded-order-history-text23">
                    Home&nbsp; &nbsp;&gt;
                  </span>
                  <span class="expanded-order-history-text24">
                    Order Summary
                  </span>
                </div>
                <div class="expanded-order-history-separator1"></div>
              </div>

              <div class="expanded-order-history-whole-container">
                <div class="expanded-order-history-container06">
                  <?php 
                    require 'Functions/5GFdb.php';

                    // $Get_OID = mysqli_query($dbcon,"SELECT OrderID FROM cust_orders") or die ("Error in connecting to 5GF Pharmacy Database");
                    // while ($row = mysqli_fetch_array($Get_OID)) 
                    //     {
                    //         $OrderID = $row['OrderID']; 
                    //     }
                    // echo $OrderID;
                    $sql = "SELECT * FROM cust_orders WHERE OrderID='$OrderID'";
                    $result = mysqli_query($dbcon, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        // Fetch sentence from result and split into two arrays
                        $row = mysqli_fetch_assoc($result);
                        $sentence = $row['product_brandname'];
                        $brand_names = array();
                        $brand_types = array();
                        $pairs = explode(",", $sentence);
                        foreach ($pairs as $pair) {
                            $parts = explode("=", $pair);
                            if (count($parts) == 2) {
                                $brand_names[] = $parts[0];
                                $brand_types[] = $parts[1];
                            }
                        }
                      }


                        // Combine the two arrays into a new associative array
                    $brands = array_combine($brand_names, $brand_types);
                    $stmt = $dbcon->prepare("SELECT * FROM cust_orders WHERE OrderID='$OrderID'");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while ($row = $result->fetch_assoc()):
                      $image_data = $row['product_prescimg'];                    
                  ?>
                  <div class="expanded-order-history-total-oi-container">
                    <div class="expanded-order-history-container07">
                      <span class="expanded-order-history-text25">
                        Ordered Items
                      </span>
                      <span class="expanded-order-history-text26"><?= $row['order_total'] ?></span>
                    </div>
                    <div class="expanded-order-history-container08">
                      <span class="expanded-order-history-text27">
                        <?= $row['OrderID'] ?>
                      </span>
                      <span class="expanded-order-history-text28">
                        <?= $row['OrderDate'] ?>
                      </span>
                      <span class="expanded-order-history-text29">
                        <?= $row['order_status'] ?>
                      </span>
                    </div>
                  </div>
                  <div class="expanded-order-history-image-details-container">
                   <!-- <div class="expanded-order-history-container09"> -->

                        <?php /* echo '<img src="data:image;base64,'.base64_encode( $image_data ).'"class="expanded-order-history-image1"'; */ ?> 
                      <?php /* echo '<img src="data:image;base64,'.base64_encode( $image_data ).'"class="user-profile-doctor-image5" 
                        id="profileDisplay" /><br />'; */ ?> 

<!--                       <img
                        alt="image"
                        src="public/playground_assets/testimage-300w.png"
                        class="expanded-order-history-image1"
                      />
                    </div> -->
                    <div style="border-width: 0;" class="expanded-order-history-container10">
                      <!-- <span class="expanded-order-history-text30">
                        <?= $row['product_brandname'] ?>
                      </span> -->

                      <!-- <span class="expanded-order-history-text31">
                        Brand Type: Generic
                      </span> -->
                      <span class="expanded-order-history-text32">
                        <span class="expanded-order-history-text33">
                            <?php 
                      foreach ($brands as $brand_name => $brand_type) 
                      {

                        echo "<br>","<b>Brand Name: </b>" . $brand_name . "<br>","<b>Quantity: </b>" . $brand_type . "x","<br>";
                        // echo "<br>","<b>Brand Name: </b>" . $brand_name . "<br>","<b>Quantity: </b>" . $brand_type . "<br>";
                      }

                      ?>
                        </span>
            
                      </span>
                      <span class="expanded-order-history-text35">
                        <span class="expanded-order-history-text36">
                          
                        </span>
                        <span></span>
                      </span>
                      <span style="margin-top: -30px" class="expanded-order-history-text38">
                        <span  class="expanded-order-history-text39">
                          Subtotal:
                        </span>
                        <span><?= $row['order_total'] ?></span>
                      </span>
                    </div>
                  </div>

                  

                  <div style="margin-top: -30px" class="expanded-order-history-total-oi-container1">
                    <a
                      href="reg-user-homepage.php"
                      class="expanded-order-history-navlink08 button"
                    >
                      <span class="expanded-order-history-text52">
                        <span>Back to page</span>
                        <br />
                      </span>
                      <svg
                        viewBox="0 0 1024 1024"
                        class="expanded-order-history-icon14"
                      >
                        <path
                          d="M896 470v84h-604l152 154-60 60-256-256 256-256 60 60-152 154h604z"
                        ></path>
                      </svg>
                    </a>
                    <a
                      href="checkout-page.php"
                      class="expanded-order-history-navlink09 button"
                    >
                      <svg
                        viewBox="0 0 877.7142857142857 1024"
                        class="expanded-order-history-icon16"
                      >
                        <path
                          d="M877.714 512c0 241.714-197.143 438.857-438.857 438.857-130.857 0-254.286-57.714-337.714-158.286-5.714-7.429-5.143-18.286 1.143-24.571l78.286-78.857c4-3.429 9.143-5.143 14.286-5.143 5.143 0.571 10.286 2.857 13.143 6.857 56 72.571 140 113.714 230.857 113.714 161.143 0 292.571-131.429 292.571-292.571s-131.429-292.571-292.571-292.571c-74.857 0-145.714 28.571-198.857 78.286l78.286 78.857c10.857 10.286 13.714 26.286 8 39.429-5.714 13.714-18.857 22.857-33.714 22.857h-256c-20 0-36.571-16.571-36.571-36.571v-256c0-14.857 9.143-28 22.857-33.714 13.143-5.714 29.143-2.857 39.429 8l74.286 73.714c80.571-76 189.714-121.143 302.286-121.143 241.714 0 438.857 197.143 438.857 438.857zM512 347.429v256c0 10.286-8 18.286-18.286 18.286h-182.857c-10.286 0-18.286-8-18.286-18.286v-36.571c0-10.286 8-18.286 18.286-18.286h128v-201.143c0-10.286 8-18.286 18.286-18.286h36.571c10.286 0 18.286 8 18.286 18.286z"
                        ></path>
                      </svg>
                      <span class="expanded-order-history-text55">
                        <span>Buy Again</span>
                        <br />
                      </span>
                    </a>
                  </div>
                  <?php endwhile; ?>
                </div>
              </div>
            </div>
            <footer class="expanded-order-history-footer">
              <div class="expanded-order-history-container13">
                <div class="expanded-order-history-links-container">
                  <div class="expanded-order-history-container14">
                    <div class="expanded-order-history-product-container">
                      <span class="expanded-order-history-text58">
                        ABOUT US
                      </span>
                      <div class="expanded-order-history-container15">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="expanded-order-history-icon18"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="expanded-order-history-text59">
                          About 5GF Pharmacy
                        </span>
                      </div>
                      <div class="expanded-order-history-container16">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="expanded-order-history-icon20"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="expanded-order-history-text60">
                          Careers
                        </span>
                      </div>
                      <div class="expanded-order-history-container17">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="expanded-order-history-icon22"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="expanded-order-history-text61">
                          News &amp; Blogs
                        </span>
                      </div>
                      <div class="expanded-order-history-container18">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="expanded-order-history-icon24"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="expanded-order-history-text62">FAQs</span>
                      </div>
                      <div class="expanded-order-history-container19">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="expanded-order-history-icon26"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="expanded-order-history-text63">
                          Contact Us
                        </span>
                      </div>
                    </div>
                    <div class="expanded-order-history-product-container1">
                      <span class="expanded-order-history-text64">SHOP</span>
                      <div class="expanded-order-history-container20">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="expanded-order-history-icon28"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="expanded-order-history-text65">
                          OTC Medicines
                        </span>
                      </div>
                      <div class="expanded-order-history-container21">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="expanded-order-history-icon30"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="expanded-order-history-text66">
                          Prescription Medicines
                        </span>
                      </div>
                      <div class="expanded-order-history-container22">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="expanded-order-history-icon32"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="expanded-order-history-text67">
                          Home Remedies
                        </span>
                      </div>
                    </div>
                    <div class="expanded-order-history-product-container2">
                      <span class="expanded-order-history-text68">
                        SERVICES
                      </span>
                      <div class="expanded-order-history-container23">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="expanded-order-history-icon34"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="expanded-order-history-text69">
                          Help Center
                        </span>
                      </div>
                      <div class="expanded-order-history-container24">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="expanded-order-history-icon36"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="expanded-order-history-text70">
                          Call &amp; Pickup
                        </span>
                      </div>
                      <div class="expanded-order-history-container25">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="expanded-order-history-icon38"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="expanded-order-history-text71">
                          Subscriptions
                        </span>
                      </div>
                      <div class="expanded-order-history-container26">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="expanded-order-history-icon40"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="expanded-order-history-text72">
                          Shipping &amp; Delivery
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="expanded-order-history-container27">
                  <div class="expanded-order-history-container28">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="expanded-order-history-icon42"
                    >
                      <path
                        d="M512 490q44 0 75-31t31-75-31-75-75-31-75 31-31 75 31 75 75 31zM512 86q124 0 211 87t87 211q0 62-31 142t-75 150-87 131-73 97l-32 34q-12-14-32-37t-72-92-91-134-71-147-32-144q0-124 87-211t211-87z"
                      ></path>
                    </svg>
                    <span class="expanded-order-history-text73">
                      G/F Gocheco Bldg., Sta. Cruz, Manila
                    </span>
                  </div>
                  <div class="expanded-order-history-container29">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="expanded-order-history-icon44"
                    >
                      <path
                        d="M704 640c-64 64-64 128-128 128s-128-64-192-128-128-128-128-192 64-64 128-128-128-256-192-256-192 192-192 192c0 128 131.5 387.5 256 512s384 256 512 256c0 0 192-128 192-192s-192-256-256-192z"
                      ></path>
                    </svg>
                    <span class="expanded-order-history-text74">
                      Telephone: +(63) 895 945 5962
                    </span>
                  </div>
                  <div class="expanded-order-history-container30">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="expanded-order-history-icon46"
                    >
                      <path
                        d="M704 640c-64 64-64 128-128 128s-128-64-192-128-128-128-128-192 64-64 128-128-128-256-192-256-192 192-192 192c0 128 131.5 387.5 256 512s384 256 512 256c0 0 192-128 192-192s-192-256-256-192z"
                      ></path>
                    </svg>
                    <span class="expanded-order-history-text75">
                      Telephone: +(63) 906 326 3564
                    </span>
                  </div>
                  <div class="expanded-order-history-container31">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="expanded-order-history-icon48"
                    >
                      <path
                        d="M854 342v-86l-342 214-342-214v86l342 212zM854 170q34 0 59 26t25 60v512q0 34-25 60t-59 26h-684q-34 0-59-26t-25-60v-512q0-34 25-60t59-26h684z"
                      ></path>
                    </svg>
                    <span class="expanded-order-history-text76">
                      Email: 5gfpharmacy@gmail.com
                    </span>
                  </div>
                </div>
              </div>
            </footer>
            <footer class="expanded-order-history-footer1">
              <img
                alt="logo"
                src="public/playground_assets/logo-rb7l-200h.png"
                class="expanded-order-history-image3"
              />
              <div class="expanded-order-history-logo-text-container1">
                <span class="expanded-order-history-text77">PHARMACY</span>
                <div class="expanded-order-history-separator2"></div>
                <span class="expanded-order-history-text78">
                  ONLINE PHARMACY STORE
                </span>
              </div>
              <span class="expanded-order-history-text79">
                © 2023 5GF Pharmacy, All Rights Reserved.
              </span>
              <div class="expanded-order-history-icon-group">
                <svg
                  viewBox="0 0 950.8571428571428 1024"
                  class="expanded-order-history-icon50"
                >
                  <path
                    d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
                  ></path></svg
                ><svg
                  viewBox="0 0 877.7142857142857 1024"
                  class="expanded-order-history-icon52"
                >
                  <path
                    d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
                  ></path></svg
                ><svg
                  viewBox="0 0 602.2582857142856 1024"
                  class="expanded-order-history-icon54"
                >
                  <path
                    d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z"
                  ></path>
                </svg>
              </div>
            </footer>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script>
function confirmLogout() {
  swal({
    title: "Are you sure?",
    text: "You will be logged out of your account.",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    confirmButtonText: "Yes, log out!",
    cancelButtonText: "Cancel",
    closeOnConfirm: false
  },
  function(){
    // Proceed with logout
    window.location.href = "index.php";
  });
}
</script>