<?php 
  /*include ('action.php');*/
  include ('Functions/customer_profile.php');
  include ('Functions/customer_scrud.php');

  error_reporting(0);
  session_start();
  $_SESSION['custOID'] = $_POST['custOID'];


  function ORDN($l=5)
  {
    return substr(str_shuffle("0123456789"), 0, $l);
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="shortcut icon" type="image/x-icon" href="\public\playground_assets\image-oy1m-200h.png" />
    <title>Checkout</title>
    <link rel="icon" href="\5GF Pharmacy\Pharmacy Assistant\public\playground_assets\5gf pharmacy logo1-200h.png" type="image/png" /> 
    <meta
      property="og:title"
      content="Checkout-Page - Wonderful Jolly Hummingbird"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      overflow-y: hidden; 
       
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
        background-color: #222222;

      }
      .expanded-order-history-image1 {
      width: 217px;
      height: 214px;
      object-fit: cover;
      margin-left: var(--dl-space-space-twounits);
      border-color: #ECECEC;
      border-width: 1px;

    }

    .input{
      font-family: 'Source Sans Pro', sans-serif;
    }

    span{
      font-family: 'Source Sans Pro', sans-serif;
    }

    a{
      font-family: 'Source Sans Pro', sans-serif;
    }

    .cart-page-image-table-container {
  width: 100%;
  height: 535px;
  display: flex;
  align-items: flex-start;
  flex-direction: row;
  justify-content: flex-start;
}

.cart-page-container06 {
  width: 709px;
  height: 100%;
  display: flex;
  align-items: flex-start;
  margin-left: var(--dl-space-space-oneandhalfunits);
  flex-direction: column;
}

.cart-page-text36 {
  color: rgb(12, 12, 12);
  width: 50%;
  font-size: 24px;
  align-self: flex-start;
  font-style: normal;
  margin-top: var(--dl-space-space-oneandhalfunits);
  font-family: Source Sans Pro;
  font-weight: 600;
  margin-left: var(--dl-space-space-fourunits);
}

.cart-page-container07 {
  width: 514px;
  height: 65px;
  display: flex;
  align-self: center;
  margin-top: var(--dl-space-space-oneandhalfunits);
  align-items: flex-start;
  border-radius: var(--dl-radius-radius-radius4);
  flex-direction: column;
  background-color: #E2F0D9;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}
.cart-page-text37 {
  color: #6d8c5a;
  width: 75%;
  font-size: 18px;
  align-self: flex-start;
  font-style: normal;
  margin-top: var(--dl-space-space-oneandhalfunits);
  font-family: Source Sans Pro;
  font-weight: 600;
  margin-left: var(--dl-space-space-oneandhalfunits);
}
.cart-page-div2 {
  width: 100%;
  align-self: flex-start;
}

      .formbold-mb-5 {
        margin-bottom: 20px;
      }
    
      .formbold-main-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0px;
      }

      .formbold-form-wrapper {
        margin: 0 auto;
        width: 2000px;
        background: white;
        height: 400px;
      }
      .formbold-form-label {
        display: block;
        font-weight: 500;
        font-size: 16px;
        color: #07074d;
        margin-bottom: 12px;
      }

      .formbold-form-input {
        width: 100%;
        padding: 12px 24px;
        border-radius: 6px;
        border: 1px solid #e0e0e0;
        background: white;
        font-weight: 500;
        font-size: 16px;
        color: #6b7280;
        outline: none;
        resize: none;

      }

      .formbold-file-input input {
        opacity: 0;
        position: absolute;
        width: 0%;
        ;
      }

      .formbold-file-input label {
        position: relative;
        border: 1px dashed #e0e0e0;
        border-radius: 6px;
        min-height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 8px;
        text-align: center;
        border-radius: 0px 0px 4px 4px;
        border-top: none;
      }
      .formbold-drop-file {
        display: block;
        font-weight: 600;
        color: #5A5A5A;
        font-size: 20px;
        margin-bottom: 8px;
      }

      .formbold-or {
        font-weight: 500;
        font-size: 16px;
        color: #6b7280;
        display: block;
        margin-bottom: 8px;
      }
      .formbold-browse {
        font-weight: 500;
        font-size: 16px;
        color: #5A5A5A;
        display: inline-block;
        padding: 8px 28px;
        border: 1px solid #e0e0e0;
        border-radius: 4px;
      }

.cart-page-text38 {
  color: var(--dl-color-gray-500);
  font-size: 14px;
  font-style: normal;
  margin-top: var(--dl-space-space-twounits);
  font-family: Source Sans Pro;
  font-weight: 400;
  line-height: 1.5;
  margin-left: var(--dl-space-space-threeunits);
  margin-right: var(--dl-space-space-threeunits);
}
.cart-page-text39 {
  font-weight: 700;
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
      <link href="./checkout-page.css" rel="stylesheet" />

      <div class="checkout-page-container" >
        <div class="checkout-page-container01">
          <svg viewBox="0 0 1024 1024" class="checkout-page-icon">
            <path
              d="M512 0c-176.732 0-320 143.268-320 320 0 320 320 704 320 704s320-384 320-704c0-176.732-143.27-320-320-320zM512 512c-106.040 0-192-85.96-192-192s85.96-192 192-192 192 85.96 192 192-85.96 192-192 192z"
            ></path>
          </svg>
          <span class="checkout-page-text">
            G/F Gocheco Bldg., Sta. Cruz, Manila
          </span>
           <button onclick="confirmLogout()" class="checkout-page-navlink button">
            <svg viewBox="0 0 1024 1024" class="checkout-page-icon02">
              <path
                d="M768 640v-128h-320v-128h320v-128l192 192zM704 576v256h-320v192l-384-192v-832h704v320h-64v-256h-512l256 128v576h256v-192z"
              ></path>
            </svg>
            <span class="checkout-page-text01">
              <span>Logout</span>
              <br />
            </span>
          </button>
          <a
            href="registered-user-profile.php"
            class="checkout-page-navlink1 button"
          >
            <svg
              viewBox="0 0 731.4285714285713 1024"
              class="checkout-page-icon04"
            >
              <path
                d="M731.429 799.429c0 83.429-54.857 151.429-121.714 151.429h-488c-66.857 0-121.714-68-121.714-151.429 0-150.286 37.143-324 186.857-324 46.286 45.143 109.143 73.143 178.857 73.143s132.571-28 178.857-73.143c149.714 0 186.857 173.714 186.857 324zM585.143 292.571c0 121.143-98.286 219.429-219.429 219.429s-219.429-98.286-219.429-219.429 98.286-219.429 219.429-219.429 219.429 98.286 219.429 219.429z"
              ></path>
            </svg>
            <span class="checkout-page-text04">
              <span>View Profile</span>
              <br />
            </span>
          </a>
          <a href="checkout-page.php" class="checkout-page-navlink2 button">
            <svg viewBox="0 0 1024 1024" class="checkout-page-icon06">
              <path
                d="M1004 804.571l20 178.857c1.143 10.286-2.286 20.571-9.143 28.571-6.857 7.429-17.143 12-27.429 12h-950.857c-10.286 0-20.571-4.571-27.429-12-6.857-8-10.286-18.286-9.143-28.571l20-178.857h984zM950.857 325.143l49.143 442.857h-976l49.143-442.857c2.286-18.286 17.714-32.571 36.571-32.571h146.286v73.143c0 40.571 32.571 73.143 73.143 73.143s73.143-32.571 73.143-73.143v-73.143h219.429v73.143c0 40.571 32.571 73.143 73.143 73.143s73.143-32.571 73.143-73.143v-73.143h146.286c18.857 0 34.286 14.286 36.571 32.571zM731.429 219.429v146.286c0 20-16.571 36.571-36.571 36.571s-36.571-16.571-36.571-36.571v-146.286c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286v146.286c0 20-16.571 36.571-36.571 36.571s-36.571-16.571-36.571-36.571v-146.286c0-121.143 98.286-219.429 219.429-219.429s219.429 98.286 219.429 219.429z"
              ></path>
            </svg>
            <span class="checkout-page-text07">
              <span>Checkout</span>
              <br />
            </span>
          </a>
          <a href="registration.php" class="checkout-page-navlink3 button">
            <span class="checkout-page-text10">
              <span>Hello, <?php echo $custUNE ?>!</span>
              <br />
            </span>
          </a>
        </div>
        <div  class="checkout-page-main-b-container">
          <form style="background-color: white;" class="checkout-page-main-form" method="POST" action = "<?php $_PHP_SELF ?>" enctype="multipart/form-data" >
            <div class="checkout-page-container02">
              <a href="reg-user-homepage.php" class="checkout-page-navlink4">
                <img
                  alt="image"
                  src="public/playground_assets/image-oy1m-200h.png"
                  class="checkout-page-image"
                />
              </a>
              <a href="reg-user-homepage.php" class="checkout-page-navlink5">
                <div class="checkout-page-logo-text-container">
                  <span class="checkout-page-text13">PHARMACY</span>
                  <div class="checkout-page-separator"></div>
                  <span class="checkout-page-text14">
                    ONLINE PHARMACY STORE
                  </span>
                </div>
              </a>
              <input
                type="text"
                placeholder="Search for Branded or Generic Medicine...."
                class="checkout-page-textinput input"
              />
              <button class="checkout-page-button button">
                <svg
                  viewBox="0 0 950.8571428571428 1024"
                  class="checkout-page-icon08"
                >
                  <path
                    d="M658.286 475.429c0-141.143-114.857-256-256-256s-256 114.857-256 256 114.857 256 256 256 256-114.857 256-256zM950.857 950.857c0 40-33.143 73.143-73.143 73.143-19.429 0-38.286-8-51.429-21.714l-196-195.429c-66.857 46.286-146.857 70.857-228 70.857-222.286 0-402.286-180-402.286-402.286s180-402.286 402.286-402.286 402.286 180 402.286 402.286c0 81.143-24.571 161.143-70.857 228l196 196c13.143 13.143 21.143 32 21.143 51.429z"
                  ></path>
                </svg>
              </button>
              <a href="cart-page.php" class="checkout-page-navlink6 button">
                <svg viewBox="0 0 1024 1024" class="checkout-page-icon10">
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
                <span class="checkout-page-text15" id="cart-item"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item
              </a>
            </div>
            <div class="checkout-page-container03">
              <a href="reg-user-homepage.php" class="checkout-page-navlink7">
                HOME
              </a>
              <a href="reg-user-search-all-products.php" class="checkout-page-text16">ALL PRODUCTS</a>
              <span class="checkout-page-text17">OTC MEDICINES</span>
              <span class="checkout-page-text18">PRESCRIPTION</span>
              <span class="checkout-page-text19">HOME REMEDIES</span>
              <a href="reg-user-faq.php" class="checkout-page-text20">FAQ</a>
              <a href="reg-user-contact-us.php" class="checkout-page-text21">CONTACT US</a>
              <a href="reg-user-call-and-pickup.php" class="checkout-page-text22">CALL AND PICKUP</a>
            </div>
            <div class="checkout-page-resizable-container">
              <div class="checkout-page-container04">
                <div class="checkout-page-container05">
                  <span class="checkout-page-text23">
                    Home&nbsp; &nbsp;&gt;
                  </span>
                  <span class="checkout-page-text24">Checkout</span>
                </div>
                <div class="checkout-page-separator1"></div>
              </div>
              <div class="checkout-page-products-container">
                <div class="checkout-page-first-container">
                  <div class="checkout-page-cart-back-container">
                    <div class="checkout-page-container06"></div>
                    <span class="checkout-page-text25">
                      Please re-check your items before checking out.
                    </span>
                  </div>
                  <div class="checkout-page-second-container">
                    <div class="checkout-page-container07">
                      <span class="checkout-page-text26">Billing Details</span>
                      <div class="checkout-page-separator2"></div>
                      <div class="checkout-page-container08">
                        <span class="checkout-page-text27">Customer ID</span>
                        <span class="checkout-page-text28">Order ID</span>
                      </div>
                      <div class="checkout-page-container09">
                        <input
                          type="text" name="custID"
                          class="checkout-page-textinput1 input" value="<?php echo $custID ?>" style="outline: none; border: 0px;" readonly
                        />
                        <input
                          type="text" name="custOID"
                          class="checkout-page-textinput2 input" value="OID-<?php echo ORDN(); ?>" style="outline: none; border: 0px;" readonly
                        />
                      </div>
                      <div class="checkout-page-container10">
                        <span class="checkout-page-text29">First Name</span>
                        <span class="checkout-page-text30">Last Name</span>
                      </div>
                      <div class="checkout-page-container11">
                        <input
                          type="text" name="custFN"
                          class="checkout-page-textinput3 input" value="<?php echo $custFN ?>" style="outline: none; border: 0px;" readonly
                        />
                        <input
                          type="text" name="custLN"
                          class="checkout-page-textinput4 input" value="<?php echo $custLN ?>" style="outline: none; border: 0px;" readonly
                        />
                      </div>
                      <span class="checkout-page-text31">Email Address</span>
                      <input
                        type="email" name="custEmail"
                        class="checkout-page-textinput5 input" value="<?php echo $custEmail ?>" style="outline: none; border: 0px;" readonly
                      />
                      <span class="checkout-page-text32">Phone Number</span>
                      <input
                        type="tel" name="custPN"
                        class="checkout-page-textinput6 input"
                      />
                    </div>
                    <div class="checkout-page-container12">
                      <span class="checkout-page-text33">Your Orders</span>
                      <div class="checkout-page-separator3"></div>
                      <div class="checkout-page-checkout-total-container">
                        <div class="checkout-page-container13">
                          <span class="checkout-page-text34">Products</span>
                        </div>
                        <div class="checkout-page-container14">
                          <span class="checkout-page-text35">Subtotal</span>
                        </div>
                      </div>
                      <?php
                        require 'Functions/5GFdb.php';

                        $stmt = $dbcon->prepare("SELECT * FROM temp_cart WHERE custID = '$custID'");
                        $stmt->execute();
                        $result = $stmt->get_result();
                        $subtotal = 0;
                        $total = 0;
                        while ($row = $result->fetch_assoc()):
                      ?>
                      <div
                        class="checkout-page-products-checkout-total-container"
                      >
                        <div class="checkout-page-container15">
                          <span class="checkout-page-text36" style="margin-top: 3px;">
                            <input type="text" name="prodBN" class="checkout-page-text37" value="<?= $row['product_brandname'] ?>" style="background: transparent; width: 200px; outline: none;" multiple="true" readonly> <br>

                            <input type="text" name="prodDSTR" class="checkout-page-text37" value="<?= $row['product_dsgstrength'] ?>" style="background: transparent; width: 200px; outline: none;" multiple="true" readonly>

                            <input type="text" name="prodqty" class="checkout-page-text38" value="x<?= $row['product_quantity'] ?>" style="background: transparent; outline: none;" multiple="true" readonly>
                            <input type="hidden" name="prodQTY" value="<?= $row['product_quantity'] ?>">

                          </span>
                        </div>
                        <div class="checkout-page-container16">
                          <span class="checkout-page-text39">₱<?= number_format($row['product_subtotal'],2) ?></span>
                        </div>
                      </div>

                      <input type="hidden" name="prodPR" value="<?= $row['product_pricing'] ?>">
                      <input type="hidden" name="prodDC" class="prodDC" value="<?= $row['product_drugclass'] ?>">

                      <input type="hidden" name="prodIMG" class="prodImage" value="<?php echo $image_base64; ?>">
                      <input type="hidden" name="prodIMG" class="prodImage" value="<?php echo base64_encode( $row['product_image'] )?>">
                      
                      <input type="hidden" name="orderedProds" value="<?= $allOrderedItems ?>">

                      <?php $total += $row['product_subtotal']; ?>
                      <?php endwhile; ?>
                      <div
                        class="checkout-page-products-checkout-total-container1"
                      >
                        <div class="checkout-page-container17">
                          <span class="checkout-page-text40">
                            <span>Subtotal</span>
                            <br />
                            <br />
                          </span>
                        </div>
                        <div class="checkout-page-container18">
                          <span class="checkout-page-text44">₱<?= number_format($total,2); ?></span>
                        </div>
                      </div>
                      <div
                        class="checkout-page-products-checkout-total-container2"
                      >
                        <div class="checkout-page-container19">
                          <span class="checkout-page-text45">
                            <span>Total</span>
                            <br />
                          </span>
                        </div>
                        <div class="checkout-page-container20">
                          <input type="text" name="orderTotal" class="checkout-page-text48" value="₱<?= number_format($total,2); ?>" style="background: transparent; outline: none;" readonly>
                        </div>
                      </div>
                      <!-- Place Order binago ng pwesto gagana kaya i2 -->
                      <input type="submit" name="btnPlaceOrder" class="checkout-page-button1 button checkout-page-text49" value="PLACE ORDER" style="font-family: 'Source Sans Pro', sans-serif;">
                      
                    </div>
                  
                  </div>
                </div>

                <div>

                  <div style="margin-top: -120px;" class="cart-page-image-table-container">
                  <div style="margin-left: -610px;" class="cart-page-container06">
                    <span class="cart-page-text36">Upload Prescription</span>
                    <div style="margin-left: -70px;" class="cart-page-container07">
                      <span class="cart-page-text37">
                        Prescrption Uploaded <span  id="countDisplay">(0)</span>
   
                      </span>
                    </div>
                    <div class="cart-page-div2">
                    <div class='formbold-main-wrapper'>
                    <div class='formbold-form-wrapper'>


                      <div class='mb-6 pt-4'>
                      <!-- <form action="" class="form-submit" enctype=multipart/form-data> -->
                        <div class='formbold-mb-5' align="Center"><br>
                          <img style="margin-left: -100px;"
                            alt="logo"
                             src="public/playground_assets/upload (1).png"
                             class="expanded-order-history-image1"
                             id = "prescriptionDisplay"
                              />
                          <!-- <?php echo '<id="prescriptionDisplay" class="expanded-order-history-image1"/><br />';?> -->
                          <br>
                          <label for='Prescription'>
                            <div>
                              <span style="margin-left: -100px;" class='formbold-browse'> Browse </span>
                            </div>
                          </label>

                        </div>
                        
                        <input type="file" name="Prescription" onChange="displayImage(this)" id="Prescription" onClick="triggerClick()"  hidden/>
                  </div>
                </div>
                </div>
                </div>
              </div>

              </div>
            </div>
            <div></div>
          </div>
        </div>

            <footer style="margin-top: 300px" class="checkout-page-footer">
              <div class="checkout-page-container21">
                <div class="checkout-page-links-container">
                  <div class="checkout-page-container22">
                    <div style="height: 210px;" class="checkout-page-product-container">
                      <span class="checkout-page-text52">ABOUT US</span>
                      <div class="checkout-page-container23">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="checkout-page-icon14"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="checkout-page-text53">
                          About 5GF Pharmacy
                        </span>
                      </div>
                      <div class="checkout-page-container24">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="checkout-page-icon16"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="checkout-page-text54">Careers</span>
                      </div>
                      <div class="checkout-page-container25">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="checkout-page-icon18"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="checkout-page-text55">
                          News &amp; Blogs
                        </span>
                      </div>
                      <div class="checkout-page-container26">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="checkout-page-icon20"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="checkout-page-text56">FAQs</span>
                      </div>
                      <div class="checkout-page-container27">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="checkout-page-icon22"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="checkout-page-text57">Contact Us</span>
                      </div>
                    </div>
                    <div class="checkout-page-product-container1">
                      <span class="checkout-page-text58">SHOP</span>
                      <div class="checkout-page-container28">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="checkout-page-icon24"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="checkout-page-text59">OTC Medicines</span>
                      </div>
                      <div class="checkout-page-container29">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="checkout-page-icon26"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="checkout-page-text60">
                          Prescription Medicines
                        </span>
                      </div>
                      <div class="checkout-page-container30">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="checkout-page-icon28"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="checkout-page-text61">Home Remedies</span>
                      </div>
                    </div>
                    <div class="checkout-page-product-container2">
                      <span class="checkout-page-text62">SERVICES</span>
                      <div class="checkout-page-container31">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="checkout-page-icon30"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="checkout-page-text63">Help Center</span>
                      </div>
                      <div class="checkout-page-container32">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="checkout-page-icon32"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="checkout-page-text64">
                          Call &amp; Pickup
                        </span>
                      </div>
                      <div class="checkout-page-container33">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="checkout-page-icon34"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="checkout-page-text65">Subscriptions</span>
                      </div>
                      <div class="checkout-page-container34">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="checkout-page-icon36"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="checkout-page-text66">
                          Shipping &amp; Delivery
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="checkout-page-container35">
                  <div class="checkout-page-container36">
                    <svg viewBox="0 0 1024 1024" class="checkout-page-icon38">
                      <path
                        d="M512 490q44 0 75-31t31-75-31-75-75-31-75 31-31 75 31 75 75 31zM512 86q124 0 211 87t87 211q0 62-31 142t-75 150-87 131-73 97l-32 34q-12-14-32-37t-72-92-91-134-71-147-32-144q0-124 87-211t211-87z"
                      ></path>
                    </svg>
                    <span class="checkout-page-text67">
                      G/F Gocheco Bldg., Sta. Cruz, Manila
                    </span>
                  </div>
                  <div class="checkout-page-container37">
                    <svg viewBox="0 0 1024 1024" class="checkout-page-icon40">
                      <path
                        d="M704 640c-64 64-64 128-128 128s-128-64-192-128-128-128-128-192 64-64 128-128-128-256-192-256-192 192-192 192c0 128 131.5 387.5 256 512s384 256 512 256c0 0 192-128 192-192s-192-256-256-192z"
                      ></path>
                    </svg>
                    <span class="checkout-page-text68">
                      Telephone: +(63) 895 945 5962
                    </span>
                  </div>
                  <div class="checkout-page-container38">
                    <svg viewBox="0 0 1024 1024" class="checkout-page-icon42">
                      <path
                        d="M704 640c-64 64-64 128-128 128s-128-64-192-128-128-128-128-192 64-64 128-128-128-256-192-256-192 192-192 192c0 128 131.5 387.5 256 512s384 256 512 256c0 0 192-128 192-192s-192-256-256-192z"
                      ></path>
                    </svg>
                    <span class="checkout-page-text69">
                      Telephone: +(63) 906 326 3564
                    </span>
                  </div>
                  <div class="checkout-page-container39">
                    <svg viewBox="0 0 1024 1024" class="checkout-page-icon44">
                      <path
                        d="M854 342v-86l-342 214-342-214v86l342 212zM854 170q34 0 59 26t25 60v512q0 34-25 60t-59 26h-684q-34 0-59-26t-25-60v-512q0-34 25-60t59-26h684z"
                      ></path>
                    </svg>
                    <span class="checkout-page-text70">
                      Email: 5gfpharmacy@gmail.com
                    </span>
                  </div>
                </div>
              </div>
            </footer>
          </form>
        </div>
            </footer>
            <footer style="margin-top: -15px;" class="checkout-page-footer1">
              <img 
                alt="logo"
                src="public/playground_assets/logo-rb7l-200h.png"
                class="checkout-page-image1"
              />
              <div class="checkout-page-logo-text-container1">
                <span class="checkout-page-text71">PHARMACY</span>
                <div class="checkout-page-separator4"></div>
                <span class="checkout-page-text72">ONLINE PHARMACY STORE</span>
              </div>
              <span class="checkout-page-text73">
                © 2023 5GF Pharmacy, All Rights Reserved.
              </span>
              <div class="checkout-page-icon-group">
                <svg
                  viewBox="0 0 950.8571428571428 1024"
                  class="checkout-page-icon46"
                >
                  <path
                    d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
                  ></path></svg
                ><svg
                  viewBox="0 0 877.7142857142857 1024"
                  class="checkout-page-icon48"
                >
                  <path
                    d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
                  ></path></svg
                ><svg
                  viewBox="0 0 602.2582857142856 1024"
                  class="checkout-page-icon50"
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
 <script type="text/javascript">
  function triggerClick(e) 
  {
    document.querySelector('#Prescription').click();
  }
  function displayImage(e)
  {
    let displayedCount = 0;
    if(e.files[0])
    {
      var reader = new FileReader();
      reader.onload = function(e)
      {
        document.querySelector('#prescriptionDisplay').setAttribute('src', e.target.result);
        displayedCount++;
        document.getElementById('countDisplay').innerHTML = displayedCount;
      }
      reader.readAsDataURL(e.files[0]);
    }
  }
</script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {
    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>

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
  