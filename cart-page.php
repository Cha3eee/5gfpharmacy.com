<?php 
  /*include ('action.php');*/
  include ('Functions/customer_profile.php');
  include ('Functions/customer_scrud.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="shortcut icon" type="image/x-icon" href="\public\playground_assets\image-oy1m-200h.png" />
    <title>Cart</title>
    <link rel="icon" href="\5GF Pharmacy\Pharmacy Assistant\public\playground_assets\5gf pharmacy logo1-200h.png" type="image/png" /> 
    <meta
      property="og:title"
      content="Cart-Page - Wonderful Jolly Hummingbird"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />
    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
    <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js'></script> -->
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
/*        background-color: #222222;*/

      }

      * {
        padding: 0;
        margin: 0;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
      }

      .skin-7 .num-in {
        float: left;
        width: 110;
        border: 1px solid #ECECEC;
      }

      .skin-7 input.in-num {
        font-family: 'Source Sans Pro', sans-serif;
        font-size: 14px;
        float: left;
        height: 32px;
        width: 83px;
        border-left: 1px solid black;
        border-right: 1px solid black;
        background-color: #fff;
        text-align: center;
      }

      .skin-7 .num-in span  {
        font-size: 24px;
        text-align: center;
        display: block;
        width: 32px;
        float: left;
        height: 32px;
        background-color: lightgray;
        cursor: pointer;
        -webkit-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s;
      }

      .skin-7 .num-in span:hover {
        background-color: #145DA0;
      }

      .skin-7 .num-in input {
        border: none;
        float: left;
        width: 44px;
        line-height: 34px;
        text-align: center;
        font-family: 'Source Sans Pro', sans-serif;
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
        width: 514px;
        background: white;
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
      canvas {
        height: 175px;
        border-style: solid;
        border-width: 1px;
        border-color: black;
      }

      .btnUploadPresc {
        color: var(--dl-color-gray-white);
        width: 100px;
        cursor: pointer;
        height: 36px;
        font-size: 14px;
        align-self: flex-start;
        font-style: normal;
        margin-top: var(--dl-space-space-oneandhalfunits);
        text-align: center;
        font-weight: 700;
        margin-left: var(--dl-space-space-oneandhalfunits);
        border-color: var(--dl-color-gray-white);
        border-width: 0px;
        margin-bottom: 0px;
        text-decoration: none;
        background-color: #145DA0 ;
        border-radius: 4px;
      }
      .btnUploadPresc-text {
        font-size: 13px;
        font-style: normal;
        font-family: Exo 2;
        font-weight: 600;
      }
      .expanded-order-history-image1 {
      width: 217px;
      height: 214px;
      object-fit: cover;
      margin-left: var(--dl-space-space-twounits);
      border-color: #ECECEC;
      border-width: 1px;
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
      <script
        type="text/javascript"
        src="https://unpkg.com/dangerous-html@0.1.12/dist/default/lib.umd.js"
      ></script>
      <script src="https://www.dukelearntoprogram.com/course1/common/js/image/SimpleImage.js">
</script>
      <link href="./cart-page.css" rel="stylesheet" />

      <div class="cart-page-container">
        <div class="cart-page-container01">
          <svg viewBox="0 0 1024 1024" class="cart-page-icon">
            <path
              d="M512 0c-176.732 0-320 143.268-320 320 0 320 320 704 320 704s320-384 320-704c0-176.732-143.27-320-320-320zM512 512c-106.040 0-192-85.96-192-192s85.96-192 192-192 192 85.96 192 192-85.96 192-192 192z"
            ></path>
          </svg>
          <span class="cart-page-text">
            G/F Gocheco Bldg., Sta. Cruz, Manila
          </span>
          <button onclick="confirmLogout()" class="cart-page-navlink button">
            <svg viewBox="0 0 1024 1024" class="cart-page-icon02">
              <path
                d="M768 640v-128h-320v-128h320v-128l192 192zM704 576v256h-320v192l-384-192v-832h704v320h-64v-256h-512l256 128v576h256v-192z"
              ></path>
            </svg>
            <span class="admin-pharmacist-assistant-dashboard-text12 logout">
              <span>Logout</span>
              <br />
            </span>
          </button>
          <a href="registered-user-profile.php" class="cart-page-navlink1 button">
            <svg viewBox="0 0 731.4285714285713 1024" class="cart-page-icon04">
              <path
                d="M731.429 799.429c0 83.429-54.857 151.429-121.714 151.429h-488c-66.857 0-121.714-68-121.714-151.429 0-150.286 37.143-324 186.857-324 46.286 45.143 109.143 73.143 178.857 73.143s132.571-28 178.857-73.143c149.714 0 186.857 173.714 186.857 324zM585.143 292.571c0 121.143-98.286 219.429-219.429 219.429s-219.429-98.286-219.429-219.429 98.286-219.429 219.429-219.429 219.429 98.286 219.429 219.429z"
              ></path>
            </svg>
            <span class="cart-page-text04">
              <span>View Profile</span>
              <br />
            </span>
          </a>
          <a href="checkout-page.php" class="cart-page-button button">
            <svg viewBox="0 0 1024 1024" class="cart-page-icon06">
              <path
                d="M1004 804.571l20 178.857c1.143 10.286-2.286 20.571-9.143 28.571-6.857 7.429-17.143 12-27.429 12h-950.857c-10.286 0-20.571-4.571-27.429-12-6.857-8-10.286-18.286-9.143-28.571l20-178.857h984zM950.857 325.143l49.143 442.857h-976l49.143-442.857c2.286-18.286 17.714-32.571 36.571-32.571h146.286v73.143c0 40.571 32.571 73.143 73.143 73.143s73.143-32.571 73.143-73.143v-73.143h219.429v73.143c0 40.571 32.571 73.143 73.143 73.143s73.143-32.571 73.143-73.143v-73.143h146.286c18.857 0 34.286 14.286 36.571 32.571zM731.429 219.429v146.286c0 20-16.571 36.571-36.571 36.571s-36.571-16.571-36.571-36.571v-146.286c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286v146.286c0 20-16.571 36.571-36.571 36.571s-36.571-16.571-36.571-36.571v-146.286c0-121.143 98.286-219.429 219.429-219.429s219.429 98.286 219.429 219.429z"
              ></path>
            </svg>
            <span class="cart-page-text07">
              <span>Checkout</span>
              <br />
            </span>
          </a>
          <a href="registration.php" class="cart-page-navlink2 button">
            <span class="cart-page-text10">
              <span>Hello, <?php echo $custUNE ?>!</span>
              <!-- <input type="hidden" name="custID" value="<?php echo $custID ?>"> -->
              <br />
            </span>
          </a>
        </div>
        <div class="cart-page-main-b-container">
          <form class="cart-page-main-form" action="" method="POST" enctype="multipart/form-data">
            <div class="cart-page-container02">
              <a href="reg-user-homepage.php" class="cart-page-navlink3">
                <img
                  alt="image"
                  src="public/playground_assets/image-oy1m-200h.png"
                  class="cart-page-image"
                />
              </a>
              <a href="reg-user-homepage.php" class="cart-page-navlink4">
                <div class="cart-page-logo-text-container">
                  <span class="cart-page-text13">PHARMACY</span>
                  <div class="cart-page-separator"></div>
                  <span class="cart-page-text14">ONLINE PHARMACY STORE</span>
                </div>
              </a>
              <input
                type="text"
                placeholder="Search for Branded or Generic Medicine...."
                class="cart-page-textinput input"
              />
              <button class="cart-page-button1 button">
                <svg
                  viewBox="0 0 950.8571428571428 1024"
                  class="cart-page-icon08"
                >
                  <path
                    d="M658.286 475.429c0-141.143-114.857-256-256-256s-256 114.857-256 256 114.857 256 256 256 256-114.857 256-256zM950.857 950.857c0 40-33.143 73.143-73.143 73.143-19.429 0-38.286-8-51.429-21.714l-196-195.429c-66.857 46.286-146.857 70.857-228 70.857-222.286 0-402.286-180-402.286-402.286s180-402.286 402.286-402.286 402.286 180 402.286 402.286c0 81.143-24.571 161.143-70.857 228l196 196c13.143 13.143 21.143 32 21.143 51.429z"
                  ></path>
                </svg>
              </button>
              <a href="cart-page.php" class="cart-page-navlink5 button">
                <svg viewBox="0 0 1024 1024" class="cart-page-icon10">
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
                <span class="cart-page-text15" id="cart-item"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item
              </a>
            </div>
            <div class="cart-page-container03">
              <a href="reg-user-homepage.php" class="cart-page-navlink6">
                HOME
              </a>
              <a href="reg-user-search-all-products.php" class="cart-page-text16">ALL PRODUCTS</a>
              <!-- <span class="cart-page-text17">OTC MEDICINES</span>
              <span class="cart-page-text18">PRESCRIPTION</span>
              <span class="cart-page-text19">HOME REMEDIES</span> -->
              <input type="submit" name="btnOTC" class="cart-page-text17" value="OTC MEDICINES" style="background: transparent;">
              <input type="submit" name="btnPM" class="cart-page-text18" value="PRESCRIPTION" style="background: transparent;">
              <input type="submit" name="btnHM" class="cart-page-text19" value="HOME REMEDIES" style="background: transparent;">
              <a href="reg-user-faq.php" class="cart-page-text20">FAQ</a>
              <a href="reg-user-contact-us.php" class="cart-page-text21">CONTACT US</a>
              <a href="reg-user-call-and-pickup.php" class="cart-page-text22">CALL AND PICKUP</a>
            </div>
            <div class="cart-page-resizable-container">
              <div class="cart-page-container04">
                <div class="cart-page-container05">
                  <span class="cart-page-text23">Home&nbsp; &nbsp;&gt;</span>
                  <span class="cart-page-text24">Shopping Cart</span>
                </div>
                <div class="cart-page-separator1"></div>
              </div>
              <div class="cart-page-products-container">
                <div class="cart-page-first-container">
                  <span class="cart-page-text25">Shopping Cart</span>
                  <div class="cart-page-cart-header-container">
                    <div class="cart-page-product-container">
                      <span class="cart-page-text26">Product</span>
                    </div>
                    <div class="cart-page-price-container">
                      <span class="cart-page-text27">Dosage</span>
                    </div>
                    <div class="cart-page-price-container">
                      <span class="cart-page-text27">Price</span>
                    </div>
                    <div class="cart-page-qty-container">
                      <span class="cart-page-text28">Quantity</span>
                    </div>
                    <div class="cart-page-subtotal-container">
                      <span class="cart-page-text29">Subtotal</span>
                    </div>
                  </div>
            
                  <div class="cart-page-row-prod-container">
                    <?php
                      require 'Functions/5GFdb.php';
                      $stmt = $dbcon->prepare("SELECT * FROM temp_cart WHERE custID = '$custID'");
                      $stmt->execute();
                      $result = $stmt->get_result();
                      $subtotal = 0;
                      $total = 0;
                      while ($row = $result->fetch_assoc()):

                      $image_data = $row['product_image'];
                    ?>
            <form action="" class="form-submit" enctype=multipart/form-data>
                    <input type="hidden" name="prodID" value="<?= $row['productID'] ?>">
                    <input type="hidden" name="custID" value="<?= $row['custID'] ?>">
                    <div class="cart-page-delete-container">
                      <div>
                        <a href="action.php?remove=<?= $row['productID'] ?>" onclick="return confirm('Are you sure want to remove this item?');">

                        <svg version='1.1' fill='#E03F3E' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' width='16' height='16px' viewBox='0 0 121.31 122.876' enable-background='new 0 0 121.31 122.876' xml:space='preserve'>
                          <g><path fill-rule='evenodd' clip-rule='evenodd' d='M90.914,5.296c6.927-7.034,18.188-7.065,25.154-0.068 c6.961,6.995,6.991,18.369,0.068,25.397L85.743,61.452l30.425,30.855c6.866,6.978,6.773,18.28-0.208,25.247 c-6.983,6.964-18.21,6.946-25.074-0.031L60.669,86.881L30.395,117.58c-6.927,7.034-18.188,7.065-25.154,0.068 c-6.961-6.995-6.992-18.369-0.068-25.397l30.393-30.827L5.142,30.568c-6.867-6.978-6.773-18.28,0.208-25.247 c6.983-6.963,18.21-6.946,25.074,0.031l30.217,30.643L90.914,5.296L90.914,5.296z'></path></g>
                        </svg>
                      </a>

                      </div>
                    </div>
                    <div class="cart-page-image-container">
                      <a href="view-products.php?prodID=<?= $row['productID'] ?>">
                        <?php echo '<img src="data:image/png;base64,' . $image_data . '" alt="My Image" class="cart-page-image1">';?>
                      </a>
                    </div>
                    <div class="cart-page-product-name-container prodBN" style="width: 350px;">
                      <span class="cart-page-text30">
                        <?= $row['product_brandname'] ?>
                      </span>
                    </div>
                    <div class="cart-page-qty-container1">
                      <span class="cart-page-text31" style="text-align: left;"><?= $row['product_dsgstrength'] ?>
                        <input type="hidden" name="prodDSTR" value="<?= $row['product_dsgstrength'] ?>">
                      </span>
                    </div>
                    <div class="cart-page-qty-container1">
                      <span class="cart-page-text31">₱<?= number_format($row['product_pricing'],2); ?>
                        <input type="hidden" name="prodPR" value="<?=$row['product_pricing'] ?>">
                      </span>
                    </div>
                    <input type="hidden" name="prodDC" class="prodDC" value="<?= $row['product_drugclass'] ?>">
                    <div class="cart-page-subtotal-container1">
                      <div class="cart-page-div1 prodData" >
    

<!--     <script>
    /////////////////// product +/-
$(document).ready(function() {
  $('.num-in span').click(function () {
      var $input = $(this).parents('.num-block').find('input.in-num');
    if($(this).hasClass('minus')) {
      var count = parseFloat($input.val()) - 1;
      count = count < 1 ? 1 : count;
      if (count < 2) {
        $(this).addClass('dis');
      }
      else {
        $(this).removeClass('dis');
      }
      $input.val(count);
    }
    else {
      var count = parseFloat($input.val()) + 1
      $input.val(count);
      if (count > 1) {
        $(this).parents('.num-block').find(('.minus')).removeClass('dis');
      }
    }
    
    $input.change();
    return false;
  });
  
});
// product +/-
    </script>


<div class='num-block skin-7'>

  <div class='num-in'>
  
    <span style='color: white; font-weight: bold' class='minus dis'>-</span>
    <input type='text' class='in-num itemQTY' name="prodQTY" value="<?= $row['product_quantity'] ?>">
    
    <span style='font-size: 20px; color: white; font-weight: bold; line-height: 1.6' class='plus'>+</span>
    
  </div>
</div> -->
                   
                    <input type="number" class="form-control cart-page-text32" value="<?= $row['product_quantity'] ?>" style="width:75px;" min="0" oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" name="prodQTY">
                    <input type="hidden" name="pQTY" value="<?= $row['product_quantity'] ?>">
                    <input type="hidden" name="pID" value="<?= $row['productID'] ?>">


                        <input type="submit" name="btnUpdateQTY" class=" button" value="Update" style="cursor: pointer; width: 65px; height: 25px; font-size: 10px; background: #145DA0; color: white; outline: none; border: 0px; font-weight: 600;">
                      </div>
                    </div>
                    
                    <div class="cart-page-price-container1">
                      <input type="hidden" class="form-control cart-page-text32" value="₱<?= number_format($row['product_subtotal'],2); ?>" id="price" name="price" readonly>

                      <input type="text" class="form-control cart-page-text32" value="₱<?= number_format($row['product_quantity']*$row['product_pricing'],2); ?>" id="price" name="price" readonly>
                    </div>
                    
                  </div>

                  <div class="cart-page-cart-back-container">
                    <?php $total += $row['product_subtotal']; ?>
                  <!-- </form> -->
                    <?php endwhile; ?>
                    <a
                      href="reg-user-search-all-products.php"
                      class="cart-page-navlink7 button"
                    >
                      <span class="cart-page-text33">
                        <span>ADD MORE ITEMS</span>
                        <br />
                      </span>
                    </a>
                  </div>
                </div>
 
                  <div style="margin-left: -640px;" class="cart-page-container08">
                    <span class="cart-page-text41">Cart Totals</span>
                    <div class="cart-page-separator2"></div>
                    <div class="cart-page-cart-totals-subtotal-container">
                      <div class="cart-page-container09">
                        <span class="cart-page-text42">Subtotal</span>
                      </div>
                      <div class="cart-page-container10">
                        <span class="cart-page-text43">₱<?= number_format($total,2); ?></span>
                      </div>
                    </div>
                    <div class="cart-page-cart-totals-total-container">
                      <div class="cart-page-container11">
                        <span class="cart-page-text44">Total</span>
                      </div>
                      <div class="cart-page-container12">
                        <span class="cart-page-text45">₱<?= number_format($total,2); ?></span>
                      </div>
                    </div>

                        <input type="submit" name="btnCheckout" class="cart-page-navlink8 button cart-page-text46" value="PROCEEED TO CHECKOUT">

                        <!-- <br /> -->
                  </div>
                </div>
              </div>
            </div>
      </form>
            <footer class="cart-page-footer">
              <div class="cart-page-container13">
                <div class="cart-page-links-container">
                  <div class="cart-page-container14">
                    <div  class="cart-page-product-container1">
                      <span class="cart-page-text49">ABOUT US</span>
                      <div class="cart-page-container15">
                        <svg viewBox="0 0 1024 1024" class="cart-page-icon14">
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="cart-page-text50">About 5GF Pharmacy</span>
                      </div>
                      <div class="cart-page-container16">
                        <svg viewBox="0 0 1024 1024" class="cart-page-icon16">
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="cart-page-text51">Careers</span>
                      </div>
                      <div class="cart-page-container17">
                        <svg viewBox="0 0 1024 1024" class="cart-page-icon18">
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="cart-page-text52">News &amp; Blogs</span>
                      </div>
                      <div class="cart-page-container18">
                        <svg viewBox="0 0 1024 1024" class="cart-page-icon20">
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="cart-page-text53">FAQs</span>
                      </div>
                      <div class="cart-page-container19">
                        <svg viewBox="0 0 1024 1024" class="cart-page-icon22">
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="cart-page-text54">Contact Us</span>
                      </div>
                    </div>
                    <div class="cart-page-product-container2">
                      <span class="cart-page-text55">SHOP</span>
                      <div class="cart-page-container20">
                        <svg viewBox="0 0 1024 1024" class="cart-page-icon24">
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="cart-page-text56">OTC Medicines</span>
                      </div>
                      <div class="cart-page-container21">
                        <svg viewBox="0 0 1024 1024" class="cart-page-icon26">
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="cart-page-text57">
                          Prescription Medicines
                        </span>
                      </div>
                      <div class="cart-page-container22">
                        <svg viewBox="0 0 1024 1024" class="cart-page-icon28">
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="cart-page-text58">Home Remedies</span>
                      </div>
                    </div>
                    <div class="cart-page-product-container3">
                      <span class="cart-page-text59">SERVICES</span>
                      <div class="cart-page-container23">
                        <svg viewBox="0 0 1024 1024" class="cart-page-icon30">
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="cart-page-text60">Help Center</span>
                      </div>
                      <div class="cart-page-container24">
                        <svg viewBox="0 0 1024 1024" class="cart-page-icon32">
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="cart-page-text61">Call &amp; Pickup</span>
                      </div>
                      <div class="cart-page-container25">
                        <svg viewBox="0 0 1024 1024" class="cart-page-icon34">
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="cart-page-text62">Subscriptions</span>
                      </div>
                      <div class="cart-page-container26">
                        <svg viewBox="0 0 1024 1024" class="cart-page-icon36">
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="cart-page-text63">
                          Shipping &amp; Delivery
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cart-page-container27">
                  <div class="cart-page-container28">
                    <svg viewBox="0 0 1024 1024" class="cart-page-icon38">
                      <path
                        d="M512 490q44 0 75-31t31-75-31-75-75-31-75 31-31 75 31 75 75 31zM512 86q124 0 211 87t87 211q0 62-31 142t-75 150-87 131-73 97l-32 34q-12-14-32-37t-72-92-91-134-71-147-32-144q0-124 87-211t211-87z"
                      ></path>
                    </svg>
                    <span class="cart-page-text64">
                      G/F Gocheco Bldg., Sta. Cruz, Manila
                    </span>
                  </div>
                  <div class="cart-page-container29">
                    <svg viewBox="0 0 1024 1024" class="cart-page-icon40">
                      <path
                        d="M704 640c-64 64-64 128-128 128s-128-64-192-128-128-128-128-192 64-64 128-128-128-256-192-256-192 192-192 192c0 128 131.5 387.5 256 512s384 256 512 256c0 0 192-128 192-192s-192-256-256-192z"
                      ></path>
                    </svg>
                    <span class="cart-page-text65">
                      Telephone: +(63) 895 945 5962
                    </span>
                  </div>
                  <div class="cart-page-container30">
                    <svg viewBox="0 0 1024 1024" class="cart-page-icon42">
                      <path
                        d="M704 640c-64 64-64 128-128 128s-128-64-192-128-128-128-128-192 64-64 128-128-128-256-192-256-192 192-192 192c0 128 131.5 387.5 256 512s384 256 512 256c0 0 192-128 192-192s-192-256-256-192z"
                      ></path>
                    </svg>
                    <span class="cart-page-text66">
                      Telephone: +(63) 906 326 3564
                    </span>
                  </div>
                  <div class="cart-page-container31">
                    <svg viewBox="0 0 1024 1024" class="cart-page-icon44">
                      <path
                        d="M854 342v-86l-342 214-342-214v86l342 212zM854 170q34 0 59 26t25 60v512q0 34-25 60t-59 26h-684q-34 0-59-26t-25-60v-512q0-34 25-60t59-26h684z"
                      ></path>
                    </svg>
                    <span class="cart-page-text67">
                      Email: 5gfpharmacy@gmail.com
                    </span>
                  </div>
                </div>
              </div>
            </footer>
            <footer style="width: 1430px;" class="cart-page-footer1">
              <img style="margin-left: 62px" 
                alt="logo"
                src="public/playground_assets/logo-rb7l-200h.png"
                class="cart-page-image2"
              />
              <div class="cart-page-logo-text-container1">
                <span class="cart-page-text68">PHARMACY</span>
                <div class="cart-page-separator3"></div>
                <span class="cart-page-text69">ONLINE PHARMACY STORE</span>
              </div>
              <span class="cart-page-text70">
                © 2023 5GF Pharmacy, All Rights Reserved.
              </span>
              <div style="margin-right: 75px;" class="cart-page-icon-group">
                <svg
                  viewBox="0 0 950.8571428571428 1024"
                  class="cart-page-icon46"
                >
                  <path
                    d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
                  ></path></svg>
                  <svg
                  viewBox="0 0 877.7142857142857 1024"
                  class="cart-page-icon48"
                >
                  <path
                    d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
                  ></path></svg>
                  <svg
                  viewBox="0 0 602.2582857142856 1024"
                  class="cart-page-icon50"
                >
                  <path
                    d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z"
                  ></path>
                  </svg>
                </svg>
              </div>
            </footer>
          </form>
        </div>
      </div>
    </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script> -->

  <script type="text/javascript">
  $(document).ready(function() {

    // Change the item quantity
    $(".itemQTY").on('change', function() {
      var $el = $(this).closest('tr');

      var prodID = $el.find(".prodID").val();
      var prodPR = $el.find(".prodPR").val();
      var prodQTY = $el.find(".itemQTY").val();
      location.reload(true);
      
      $.ajax({
        url: 'action.php',
        method: 'post',
        cache: false,
        data: {
          prodQTY: prodQTY,
          prodID: prodID,
          prodPR: prodPR
          /*prodST: prodST*/
        },
        success: function(response) {
          console.log(response);
        }
      });
    });

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

<!--   <script type="text/javascript">
    function upload(){
    var imgcanvas = document.getElementById("displayPic");
    var fileinput = document.getElementById("uploadPresc");
    var image = new SimpleImage(fileinput);
    image.drawTo(imgcanvas);
  }

  </script> -->

 

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