<?php
  include ('Functions/customer_scrud.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="shortcut icon" type="image/x-icon" href="\public\playground_assets\image-oy1m-200h.png" />
    <title>All-Products</title>
    <link rel="icon" href="\5GF Pharmacy\Pharmacy Assistant\public\playground_assets\5gf pharmacy logo1-200h.png" type="image/png" /> 
    <meta
      property="og:title"
      content="Guest-Search-All-Products - Wonderful Jolly Hummingbird"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/css/ion.rangeSlider.min.css'><link rel='stylesheet' href='./style.css'>
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

      .irs--round .irs-bar {
        background-color: #145DA0;
        }
        .irs--round .irs-handle {
        background-color: #145DA0;
        border-color: #145DA0;
        box-shadow: 0px 0px 0px 5px rgba(43, 45, 141, 0.2);
        cursor: e-resize;
        }
        .irs--round .irs-handle.state_hover,
        .irs--round .irs-handle:hover {
        background-color: #145DA0;
        }
        .irs--round .irs-handle {
        width: 16px;
        height: 16px;
        top: 29px;
        }
        .irs--round .irs-from,
        .irs--round .irs-to,
        .irs--round .irs-single {
        background-color: transparent;
        color: #666;
        }
        .irs--round .irs-from:before,
        .irs--round .irs-to:before,
        .irs--round .irs-single:before,
        .irs--round .irs-min,
        .irs--round .irs-max {
        display: none;
        }

        .guest-search-all-products-container14 {
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;
        }

        .guest-search-all-products-container15 {
          width: 25%;
          margin-bottom: 10px;
          margin-right: 5px;
          margin-left: 20px;
        }
        
        .guest-search-all-products-container15:nth-child(4n+1) {
          clear: left;
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
      <link href="./guest-search-all-products.css" rel="stylesheet" />

      <div class="guest-search-all-products-container">
        <div class="guest-search-all-products-main-b-container">
          <form class="guest-search-all-products-main-form" action="<?php $_PHP_SELF ?>" method="POST">
            <div class="guest-search-all-products-container01">
              <svg
                viewBox="0 0 1024 1024"
                class="guest-search-all-products-icon"
              >
                <path
                  d="M512 0c-176.732 0-320 143.268-320 320 0 320 320 704 320 704s320-384 320-704c0-176.732-143.27-320-320-320zM512 512c-106.040 0-192-85.96-192-192s85.96-192 192-192 192 85.96 192 192-85.96 192-192 192z"
                ></path>
              </svg>
              <span class="guest-search-all-products-text">
                G/F Gocheco Bldg., Sta. Cruz, Manila
              </span>
              <button class="guest-search-all-products-button button">
                <svg
                  viewBox="0 0 1024 1024"
                  class="guest-search-all-products-icon02"
                >
                  <path
                    d="M854 342v-86l-342 214-342-214v86l342 212zM854 170q34 0 59 26t25 60v512q0 34-25 60t-59 26h-684q-34 0-59-26t-25-60v-512q0-34 25-60t59-26h684z"
                  ></path>
                </svg>
                <span class="guest-search-all-products-text001">
                  5gfpharmacy@gmail.com
                </span>
              </button>
              <a
                href="index.php"
                class="guest-search-all-products-navlink button"
              >
                <svg
                  viewBox="0 0 658.2857142857142 1024"
                  class="guest-search-all-products-icon04"
                >
                  <path
                    d="M182.857 438.857h292.571v-109.714c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286v109.714zM658.286 493.714v329.143c0 30.286-24.571 54.857-54.857 54.857h-548.571c-30.286 0-54.857-24.571-54.857-54.857v-329.143c0-30.286 24.571-54.857 54.857-54.857h18.286v-109.714c0-140.571 115.429-256 256-256s256 115.429 256 256v109.714h18.286c30.286 0 54.857 24.571 54.857 54.857z"
                  ></path>
                </svg>
                <span class="guest-search-all-products-text002">Sign In</span>
              </a>
              <a
                href="registration.php"
                class="guest-search-all-products-navlink1 button"
              >
                <svg
                  viewBox="0 0 731.4285714285713 1024"
                  class="guest-search-all-products-icon06"
                >
                  <path
                    d="M731.429 799.429c0 83.429-54.857 151.429-121.714 151.429h-488c-66.857 0-121.714-68-121.714-151.429 0-150.286 37.143-324 186.857-324 46.286 45.143 109.143 73.143 178.857 73.143s132.571-28 178.857-73.143c149.714 0 186.857 173.714 186.857 324zM585.143 292.571c0 121.143-98.286 219.429-219.429 219.429s-219.429-98.286-219.429-219.429 98.286-219.429 219.429-219.429 219.429 98.286 219.429 219.429z"
                  ></path>
                </svg>
                <span class="guest-search-all-products-text003">
                  <span>Create account</span>
                  <br />
                </span>
              </a>
              <a href="index.php" class="guest-search-all-products-button01 button">
                <svg
                  viewBox="0 0 1024 1024"
                  class="guest-search-all-products-icon08"
                >
                  <path
                    d="M1004 804.571l20 178.857c1.143 10.286-2.286 20.571-9.143 28.571-6.857 7.429-17.143 12-27.429 12h-950.857c-10.286 0-20.571-4.571-27.429-12-6.857-8-10.286-18.286-9.143-28.571l20-178.857h984zM950.857 325.143l49.143 442.857h-976l49.143-442.857c2.286-18.286 17.714-32.571 36.571-32.571h146.286v73.143c0 40.571 32.571 73.143 73.143 73.143s73.143-32.571 73.143-73.143v-73.143h219.429v73.143c0 40.571 32.571 73.143 73.143 73.143s73.143-32.571 73.143-73.143v-73.143h146.286c18.857 0 34.286 14.286 36.571 32.571zM731.429 219.429v146.286c0 20-16.571 36.571-36.571 36.571s-36.571-16.571-36.571-36.571v-146.286c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286v146.286c0 20-16.571 36.571-36.571 36.571s-36.571-16.571-36.571-36.571v-146.286c0-121.143 98.286-219.429 219.429-219.429s219.429 98.286 219.429 219.429z"
                  ></path>
                </svg>
                <span class="guest-search-all-products-text006">
                  <span>Checkout</span>
                  <br />
                </span>
              </a>
            </div>
            <div class="guest-search-all-products-container02">
              <a
                href="guest-homepage.php"
                class="guest-search-all-products-navlink2"
              >
                <img
                  alt="image"
                  src="public/playground_assets/image-oy1m-200h.png"
                  class="guest-search-all-products-image"
                />
              </a>
              <a
                href="guest-homepage.php"
                class="guest-search-all-products-navlink3"
              >
                <div class="guest-search-all-products-logo-text-container">
                  <span class="guest-search-all-products-text009">
                    PHARMACY
                  </span>
                  <div class="guest-search-all-products-separator"></div>
                  <span class="guest-search-all-products-text010">
                    ONLINE PHARMACY STORE
                  </span>
                </div>
              </a>
              <input
                type="text" name="valueToSearch"
                placeholder="Search for Branded or Generic Medicine...."
                class="guest-search-all-products-textinput input"
              />
              <button class="guest-search-all-products-button02 button" name="btnSearch">
                <svg
                  viewBox="0 0 950.8571428571428 1024"
                  class="guest-search-all-products-icon10"
                >
                  <path
                    d="M658.286 475.429c0-141.143-114.857-256-256-256s-256 114.857-256 256 114.857 256 256 256 256-114.857 256-256zM950.857 950.857c0 40-33.143 73.143-73.143 73.143-19.429 0-38.286-8-51.429-21.714l-196-195.429c-66.857 46.286-146.857 70.857-228 70.857-222.286 0-402.286-180-402.286-402.286s180-402.286 402.286-402.286 402.286 180 402.286 402.286c0 81.143-24.571 161.143-70.857 228l196 196c13.143 13.143 21.143 32 21.143 51.429z"
                  ></path>
                </svg>
              </button>
              <a
                href="index.php"
                class="guest-search-all-products-navlink4 button"
              >
                <svg
                  viewBox="0 0 1024 1024"
                  class="guest-search-all-products-icon12"
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
                <span class="guest-search-all-products-text011">0 item</span>
              </a>
            </div>
            <div class="guest-search-all-products-container03">
              <a
                href="guest-homepage.php"
                class="guest-search-all-products-navlink5"
              >
                HOME
              </a>
              <a href="guest-search-all-products.php" class="guest-search-all-products-text012">
                ALL PRODUCTS
              </a>
              <input type="submit" name="btnOTC" class="guest-search-all-products-text013" value="OTC MEDICINES" style="background: transparent;">
              <input type="submit" name="btnPM" class="guest-search-all-products-text014" value="PRESCRIPTION" style="background: transparent;">
              <input type="submit" name="btnHM" class="guest-search-all-products-text015" value="HOME REMEDIES" style="background: transparent;">
              <a href="faq.html" class="guest-search-all-products-text016">FAQ</a>
              <a href="contact-us.html" class="guest-search-all-products-text017">CONTACT US</a>
              <a href="call-and-pickup.html" class="guest-search-all-products-text018">CALL AND PICKUP</a>
            </div>
            <div class="guest-search-all-products-resizable-container">
              <div class="guest-search-all-products-container04">
                <div class="guest-search-all-products-container05">
                  <span class="guest-search-all-products-text019">
                    Home&nbsp; &nbsp;&gt;
                  </span>
                  <span class="guest-search-all-products-text020">
                    All Products
                  </span>
                </div>
                <div class="guest-search-all-products-separator1"></div>
              </div>
              <div class="guest-search-all-products-products-container">
                <div class="guest-search-all-products-container06">
                  <span class="guest-search-all-products-text021">
                    All Products
                  </span>
                  <div class="guest-search-all-products-container07">
                    <span class="guest-search-all-products-text022">
                      CATEGORIES
                    </span>
                    <div class="guest-search-all-products-container08">
                      <!-- <span class="guest-search-all-products-text023"> -->
                        <input type="submit" name="" value="Over-The-Counter (OTC) Medicines" class="guest-search-all-products-text023" style="background: transparent;"> 
                      <!-- </span> -->
                    </div>
                    <div class="guest-search-all-products-container09">
                      <!-- <span class="guest-search-all-products-text024">
                        Prescription Medicines (79)
                      </span> -->
                      <input type="submit" name="btnPM" class="guest-search-all-products-text024" value="Prescription Medicines" style="background: transparent;">
                    </div>
                    <div class="guest-search-all-products-container10">
                      <!-- <span class="guest-search-all-products-text025">
                        Home Remedies (34)
                      </span> -->
                      <input type="submit" name="btnHM" class="guest-search-all-products-text025" value="Home Remedies" style="background: transparent;">
                    </div>
                  </div>
                  <div class="guest-search-all-products-container11">
                    <span class="guest-search-all-products-text026">
                      SEARCH
                    </span>
                    <input
                      type="text"
                      placeholder="Search for brand name..."
                      class="guest-search-all-products-textinput1 input"
                      name = "valueToSearchBN"
                    />
                    <!-- <button class="guest-search-all-products-button03 button">
                      <span class="guest-search-all-products-text027">
                        <span>Search</span>
                        <br />
                      </span>
                    </button> -->
                    <input type="submit" name="btnSearchBN" class="guest-search-all-products-button03 button guest-search-all-products-text027" value="Search">

                        <br />
                  </div>
                  <div class="guest-search-all-products-container12">
                    <span class="guest-search-all-products-text030">
                      FILTER BY PRICE
                    </span>
                    <div class="guest-search-all-products-div">
                      

<!-- partial:index.partial.html -->
<div style="margin-left: 30px; margin-right: 30px;">
<input type='text' class='js-range-slider' name='my_range' value=''
        data-skin='round'
        data-type='double'
        data-min='0'
        data-max='1000'
        data-grid='false'
    />
</div>

<div style="margin-left: 30px; margin-right: 30px;">
    <input type='number' maxlength='4' value='0' class='from'/ style="border-radius: 4px; border: 1px solid #D9D9D9; padding: 0.5rem 1rem; width: 34%; font-family: Source Sans Pro; font-size: 14px;">
    <input type='number' maxlength='4' value='1000' class='to'/ style="border-radius: 4px; border: 1px solid #D9D9D9; padding: 0.5rem 1rem; width: 34%; font-family: Source Sans Pro; font-size: 14px;">
    <input type="button" value="Filter" onclick="" style="cursor: pointer; background-color: #145DA0; padding: 0.5rem 1rem; color: white; font-size: 14px; border-radius: 4px;">
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js'></script><script  src='./script.js'></script>

</body>
</html>

<script type='text/javascript'>
    var $range = $('.js-range-slider'),
    $from = $('.from'),
    $to = $('.to'),
    range,
    min = $range.data('min'),
    max = $range.data('max'),
    from,
    to;

var updateValues = function () {
    $from.prop('value', from);
    $to.prop('value', to);
};

$range.ionRangeSlider({
    onChange: function (data) {
      from = data.from;
      to = data.to;
      updateValues();
    }
});

range = $range.data('ionRangeSlider');
var updateRange = function () {
    range.update({
        from: from,
        to: to
    });
};

$from.on('input', function () {
    from = +$(this).prop('value');
    if (from < min) {
        from = min;
    }
    if (from > to) {
        from = to;
    }
    updateValues();    
    updateRange();
});

$to.on('input', function () {
    to = +$(this).prop('value');
    if (to > max) {
        to = max;
    }
    if (to < from) {
        to = from;
    }
    updateValues();    
    updateRange();
});
</script>
                    </div>
                  </div>
                </div>
                <div class="guest-search-all-products-container13">
                  <div class="guest-search-all-products-container14">
                    <?php 

                      while($row = mysqli_fetch_array($search_result)):

                    ?>
                    <a
                      href="index.php"
                      class="guest-search-all-products-navlink6"
                    >
                      <div class="guest-search-all-products-container15">
                        <?php echo '<img style="width: 150px; height: 150px;" src="data:image;base64,'.base64_encode( $row['product_image'] ).'"class="cart-page-image1"';?>
                        <img
                          alt="image"
                          src="public/playground_assets/medimage-200w.png"
                          class="guest-search-all-products-image01"
                        />
                        <span class="guest-search-all-products-text031">
                          <?php echo $row['product_brandname'];?>
                        </span>
                        <span class="guest-search-all-products-text032">
                          ₱<?= number_format($row['product_pricing'],2); ?>
                        </span>
                        <button class="guest-search-all-products-button04 button">
                          <span class="guest-search-all-products-text033">
                            <span>ADD TO CART</span>
                            <br />
                          </span>
                        </button>
                      </div>
                      <?php endwhile;?>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <footer class="guest-search-all-products-footer">
              <div class="guest-search-all-products-container29">
                <div class="guest-search-all-products-links-container">
                  <div class="guest-search-all-products-container30">
                    <div class="guest-search-all-products-product-container">
                      <span class="guest-search-all-products-text091">
                        ABOUT US
                      </span>
                      <div class="guest-search-all-products-container31">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="guest-search-all-products-icon16"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="guest-search-all-products-text092">
                          About 5GF Pharmacy
                        </span>
                      </div>
                      <div class="guest-search-all-products-container32">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="guest-search-all-products-icon18"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="guest-search-all-products-text093">
                          Careers
                        </span>
                      </div>
                      <div class="guest-search-all-products-container33">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="guest-search-all-products-icon20"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="guest-search-all-products-text094">
                          News &amp; Blogs
                        </span>
                      </div>
                      <div class="guest-search-all-products-container34">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="guest-search-all-products-icon22"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="guest-search-all-products-text095">
                          FAQs
                        </span>
                      </div>
                      <div class="guest-search-all-products-container35">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="guest-search-all-products-icon24"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="guest-search-all-products-text096">
                          Contact Us
                        </span>
                      </div>
                    </div>
                    <div class="guest-search-all-products-product-container1">
                      <span class="guest-search-all-products-text097">
                        SHOP
                      </span>
                      <div class="guest-search-all-products-container36">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="guest-search-all-products-icon26"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="guest-search-all-products-text098">
                          OTC Medicines
                        </span>
                      </div>
                      <div class="guest-search-all-products-container37">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="guest-search-all-products-icon28"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="guest-search-all-products-text099">
                          Prescription Medicines
                        </span>
                      </div>
                      <div class="guest-search-all-products-container38">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="guest-search-all-products-icon30"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="guest-search-all-products-text100">
                          Home Remedies
                        </span>
                      </div>
                    </div>
                    <div class="guest-search-all-products-product-container2">
                      <span class="guest-search-all-products-text101">
                        SERVICES
                      </span>
                      <div class="guest-search-all-products-container39">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="guest-search-all-products-icon32"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="guest-search-all-products-text102">
                          Help Center
                        </span>
                      </div>
                      <div class="guest-search-all-products-container40">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="guest-search-all-products-icon34"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="guest-search-all-products-text103">
                          Call &amp; Pickup
                        </span>
                      </div>
                      <div class="guest-search-all-products-container41">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="guest-search-all-products-icon36"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="guest-search-all-products-text104">
                          Subscriptions
                        </span>
                      </div>
                      <div class="guest-search-all-products-container42">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="guest-search-all-products-icon38"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="guest-search-all-products-text105">
                          Shipping &amp; Delivery
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="guest-search-all-products-container43">
                  <div class="guest-search-all-products-container44">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="guest-search-all-products-icon40"
                    >
                      <path
                        d="M512 490q44 0 75-31t31-75-31-75-75-31-75 31-31 75 31 75 75 31zM512 86q124 0 211 87t87 211q0 62-31 142t-75 150-87 131-73 97l-32 34q-12-14-32-37t-72-92-91-134-71-147-32-144q0-124 87-211t211-87z"
                      ></path>
                    </svg>
                    <span class="guest-search-all-products-text106">
                      G/F Gocheco Bldg., Sta. Cruz, Manila
                    </span>
                  </div>
                  <div class="guest-search-all-products-container45">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="guest-search-all-products-icon42"
                    >
                      <path
                        d="M704 640c-64 64-64 128-128 128s-128-64-192-128-128-128-128-192 64-64 128-128-128-256-192-256-192 192-192 192c0 128 131.5 387.5 256 512s384 256 512 256c0 0 192-128 192-192s-192-256-256-192z"
                      ></path>
                    </svg>
                    <span class="guest-search-all-products-text107">
                      Telephone: +(63) 895 945 5962
                    </span>
                  </div>
                  <div class="guest-search-all-products-container46">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="guest-search-all-products-icon44"
                    >
                      <path
                        d="M704 640c-64 64-64 128-128 128s-128-64-192-128-128-128-128-192 64-64 128-128-128-256-192-256-192 192-192 192c0 128 131.5 387.5 256 512s384 256 512 256c0 0 192-128 192-192s-192-256-256-192z"
                      ></path>
                    </svg>
                    <span class="guest-search-all-products-text108">
                      Telephone: +(63) 906 326 3564
                    </span>
                  </div>
                  <div class="guest-search-all-products-container47">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="guest-search-all-products-icon46"
                    >
                      <path
                        d="M854 342v-86l-342 214-342-214v86l342 212zM854 170q34 0 59 26t25 60v512q0 34-25 60t-59 26h-684q-34 0-59-26t-25-60v-512q0-34 25-60t59-26h684z"
                      ></path>
                    </svg>
                    <span class="guest-search-all-products-text109">
                      Email: 5gfpharmacy@gmail.com
                    </span>
                  </div>
                </div>
              </div>
            </footer>
            <footer class="guest-search-all-products-footer1">
              <img
                alt="logo"
                src="public/playground_assets/logo-rb7l-200h.png"
                class="guest-search-all-products-image13"
              />
              <div class="guest-search-all-products-logo-text-container1">
                <span class="guest-search-all-products-text110">PHARMACY</span>
                <div class="guest-search-all-products-separator2"></div>
                <span class="guest-search-all-products-text111">
                  ONLINE PHARMACY STORE
                </span>
              </div>
              <span class="guest-search-all-products-text112">
                © 2023 5GF Pharmacy, All Rights Reserved.
              </span>
              <div class="guest-search-all-products-icon-group">
                <svg
                  viewBox="0 0 950.8571428571428 1024"
                  class="guest-search-all-products-icon48"
                >
                  <path
                    d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
                  ></path></svg><svg
                  viewBox="0 0 877.7142857142857 1024"
                  class="guest-search-all-products-icon50"
                >
                  <path
                    d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
                  ></path></svg><svg
                  viewBox="0 0 602.2582857142856 1024"
                  class="guest-search-all-products-icon52"
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
