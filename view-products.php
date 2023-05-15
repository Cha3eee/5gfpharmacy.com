<?php 
  include ('Functions/customer_profile.php');
  include ('Functions/customer_scrud.php');
  include ('action.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="shortcut icon" href="\public\playground_assets\image-oy1m-200h.png" />
    <title>View Product</title>
    <link rel="icon" href="\5GF Pharmacy\Pharmacy Assistant\public\playground_assets\5gf pharmacy logo1-200h.png" type="image/png" /> 
    <meta
      property="og:title"
      content="View-Products - Wonderful Jolly Hummingbird"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js'></script>
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

          p {
      line-height: 2.4;
    }
    .tab {
      overflow: hidden;
      border: 0px solid #ccc;
      background-color: none;
    }

    /* Style the buttons inside the tab */
    .tab button {
      background-color: inherit;
      float: left;
      border: 1px solid lightgray;
      outline: none;
      cursor: pointer;
      padding: 14px 16px;
      transition: 0.3s;
      font-size: 17px;
      border-bottom: none;
      color: #595959;
      font-family: 'Source Sans Pro', sans-serif;
      font-size: 16px;
      font-weight: 600;

    }


    /* Change background color of buttons on hover */
    .tab button:hover {
      background-color: #70AD47;
      color: white;
    }


    /* Create an active/current tablink class */
    .tab button.active {
      background-color: #70AD47;
      color: white;
      font-weight: 600;
      
    }

    /* Style the tab content */
    .tabcontent {
      display: none;
      padding: 30px 24px;
      border: 1px solid #ccc;
      font-family: 'Source Sans Pro', sans-serif;
      font-size: 13px;
      color: #595959;


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
      <link href="./view-products.css" rel="stylesheet" />

      <div class="view-products-container">
        <div class="view-products-container01">
          <svg viewBox="0 0 1024 1024" class="view-products-icon">
            <path
              d="M512 0c-176.732 0-320 143.268-320 320 0 320 320 704 320 704s320-384 320-704c0-176.732-143.27-320-320-320zM512 512c-106.040 0-192-85.96-192-192s85.96-192 192-192 192 85.96 192 192-85.96 192-192 192z"
            ></path>
          </svg>
          <span class="view-products-text">
            G/F Gocheco Bldg., Sta. Cruz, Manila
          </span>
          <a onclick="confirmLogout()" class="view-products-navlink button">
            <svg viewBox="0 0 1024 1024" class="view-products-icon02">
              <path
                d="M768 640v-128h-320v-128h320v-128l192 192zM704 576v256h-320v192l-384-192v-832h704v320h-64v-256h-512l256 128v576h256v-192z"
              ></path>
            </svg>
            <span class="view-products-text01">
              <span>Logout</span>
              <br />
            </span>
          </a>
          <a
            href="registered-user-profile.php"
            class="view-products-navlink1 button"
          >
            <svg
              viewBox="0 0 731.4285714285713 1024"
              class="view-products-icon04"
            >
              <path
                d="M731.429 799.429c0 83.429-54.857 151.429-121.714 151.429h-488c-66.857 0-121.714-68-121.714-151.429 0-150.286 37.143-324 186.857-324 46.286 45.143 109.143 73.143 178.857 73.143s132.571-28 178.857-73.143c149.714 0 186.857 173.714 186.857 324zM585.143 292.571c0 121.143-98.286 219.429-219.429 219.429s-219.429-98.286-219.429-219.429 98.286-219.429 219.429-219.429 219.429 98.286 219.429 219.429z"
              ></path>
            </svg>
            <span class="view-products-text04">
              <span>View Profile</span>
              <br />
            </span>
          </a>
          <a href="checkout-page.php" class="view-products-navlink2 button">
            <svg viewBox="0 0 1024 1024" class="view-products-icon06">
              <path
                d="M1004 804.571l20 178.857c1.143 10.286-2.286 20.571-9.143 28.571-6.857 7.429-17.143 12-27.429 12h-950.857c-10.286 0-20.571-4.571-27.429-12-6.857-8-10.286-18.286-9.143-28.571l20-178.857h984zM950.857 325.143l49.143 442.857h-976l49.143-442.857c2.286-18.286 17.714-32.571 36.571-32.571h146.286v73.143c0 40.571 32.571 73.143 73.143 73.143s73.143-32.571 73.143-73.143v-73.143h219.429v73.143c0 40.571 32.571 73.143 73.143 73.143s73.143-32.571 73.143-73.143v-73.143h146.286c18.857 0 34.286 14.286 36.571 32.571zM731.429 219.429v146.286c0 20-16.571 36.571-36.571 36.571s-36.571-16.571-36.571-36.571v-146.286c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286v146.286c0 20-16.571 36.571-36.571 36.571s-36.571-16.571-36.571-36.571v-146.286c0-121.143 98.286-219.429 219.429-219.429s219.429 98.286 219.429 219.429z"
              ></path>
            </svg>
            <span class="view-products-text07">
              <span>Checkout</span>
              <br />
            </span>
          </a>
          <a href="registration.php" class="view-products-navlink3 button">
            <span class="view-products-text10">
              <span>Hello, <?php echo $custUNE ?>!</span>
              <br />
            </span>
          </a>
        </div>
        <div class="view-products-main-b-container">
          <form class="view-products-main-form" action="<?php $_PHP_SELF ?>" method="POST">
            <div class="view-products-container02">
              <a href="reg-user-homepage.php" class="view-products-navlink4">
                <img
                  alt="image"
                  src="public/playground_assets/image-oy1m-200h.png"
                  class="view-products-image"
                />
              </a>
              <a href="reg-user-homepage.php" class="view-products-navlink5">
                <div class="view-products-logo-text-container">
                  <span class="view-products-text13">PHARMACY</span>
                  <div class="view-products-separator"></div>
                  <span class="view-products-text14">
                    ONLINE PHARMACY STORE
                  </span>
                </div>
              </a>
              <input
                type="text"
                placeholder="Search for Branded or Generic Medicine...."
                class="view-products-textinput input"
              />
              <button class="view-products-button button">
                <svg
                  viewBox="0 0 950.8571428571428 1024"
                  class="view-products-icon08"
                >
                  <path
                    d="M658.286 475.429c0-141.143-114.857-256-256-256s-256 114.857-256 256 114.857 256 256 256 256-114.857 256-256zM950.857 950.857c0 40-33.143 73.143-73.143 73.143-19.429 0-38.286-8-51.429-21.714l-196-195.429c-66.857 46.286-146.857 70.857-228 70.857-222.286 0-402.286-180-402.286-402.286s180-402.286 402.286-402.286 402.286 180 402.286 402.286c0 81.143-24.571 161.143-70.857 228l196 196c13.143 13.143 21.143 32 21.143 51.429z"
                  ></path>
                </svg>
              </button>
              <a href="cart-page.php" class="view-products-navlink6 button">
                <svg viewBox="0 0 1024 1024" class="view-products-icon10">
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
                <span class="view-products-text15" id="cart-item"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item
              </a>
            </div>
            <div class="view-products-container03">
              <a href="reg-user-homepage.php" class="view-products-navlink7">
                HOME
              </a>
              <a href="reg-user-search-all-products.php" class="view-products-text16">ALL PRODUCTS</a>
              <span class="view-products-text17">OTC MEDICINES</span>
              <span class="view-products-text18">PRESCRIPTION</span>
              <span class="view-products-text19">HOME REMEDIES</span>
              <a href="reg-user-faq.php" class="view-products-text20">FAQ</a>
              <a href="reg-user-contact-us.php" class="view-products-text21">CONTACT US</a>
              <a href="reg-user-call-and-pickup.php" class="view-products-text22">CALL AND PICKUP</a>
            </div>
            <div class="view-products-resizable-container">
              <div class="view-products-container04">
                <?php
                    include ('Functions/5GFdb.php');
                    if (isset($_GET['prodID'])) {
                      $product_id = $_GET['prodID'];
                     
                      $DisplayData = "SELECT * FROM asst_prod WHERE productID='$product_id'";
                      $DataRsults = mysqli_query($dbcon, $DisplayData);
                      while($row = mysqli_fetch_assoc($DataRsults)) {
                  ?>
                <div class="view-products-container05">
                  <span class="view-products-text23">
                    Home&nbsp; &nbsp;&gt;
                  </span>
                  <span class="view-products-text24">
                    <?= $row['product_drugclass'] ?>&nbsp; &nbsp;&gt;
                  </span>
                  <span class="view-products-text25">
                    <?= $row['product_brandname'] ?>
                  </span>
                </div>
                <div class="view-products-separator1"></div>
              </div>
              <div class="view-products-products-container">
                <div class="view-products-container06">
                  <div class="view-products-container07">
                    <div class="view-products-container08">
                      <?php echo '<img style="width: 500px; height: 500px;" src="data:image;base64,'.base64_encode( $row['product_image'] ).'"class="reg-user-homepage-image02"';?>
                      <img
                        alt="image"
                        src="public/playground_assets/testimage-500w.png"
                        class="view-products-image1" 
                      />
                    </div>
                    <div class="view-products-container09">
                      <?php echo '<img style="width: 150px; height: 150px;" src="data:image;base64,'.base64_encode( $row['product_image'] ).'"class="reg-user-homepage-image02"';?>
                      <img
                        alt="image"
                        src="public/playground_assets/testimage-500w.png"
                        class="view-products-image2"
                      />
                    </div>
                  </div>
                  <div class="view-products-container10">
                    <span class="view-products-text26">
                      <?= $row['product_brandname'] ?>
                    </span>
                    <span class="view-products-text27">QUICK OVERVIEW</span>
                    <span class="view-products-text28">
                      <?= $row['product_brandname'] ?>&nbsp;<?= $row['product_dsgstrength'] ?>&nbsp;<?= $row['product_drugpackaging'] ?>
                    </span>
                    <span class="view-products-text29">
                      5GF Pharmacy: Your Online Service Pharmacy in the
                      Philippines – Buy your medicines, vitamins &amp;
                      supplements without leaving your home.
                    </span>
                    <span class="view-products-text30">₱<?= number_format($row['product_pricing'],2); ?></span>

                    <span class="view-products-text31">In stock (<?= $row['product_quantity'] ?>)</span>
                    <div class="view-products-separator2"></div>
                    <div class="view-products-container11">
                      <form action="" class="form-submit">
                        <input
                          type="number" name="prodQTY" value="1" min="1"
                          class="view-products-textinput1 input"
                        />
                        <!-- <button class="view-products-button1 button">
                          <span class="view-products-text32">
                            <span>ADD TO CART</span>
                            <br />
                          </span>
                        </button> -->
                        <input type="hidden" name="custID" class="custID" value="<?php echo $custID ?>">
                        <input type="hidden" name="prodID" class="prodID"  value="<?=$row['productID'] ?>">
                        <input type="hidden" name="prodBN" class="prodBN" value="<?=$row['product_brandname'] ?>">
                        <input type="hidden" name="prodPR" class="prodPR" value="<?=$row['product_pricing'] ?>">
                        <!-- <input type="hidden" name="prodQTY" class="prodQTY" value="<?=$qty ?>"> -->
                        <input type="hidden" name="prodDC" class="prodDC" value="<?= $row['product_drugclass'] ?>">
                        <input type="hidden" name="prodDSTR" class="prodDSTR" value="<?= $row['product_dsgstrength'] ?>">
                        <input type="hidden" name="prodImage" class="prodImage" value="<?php echo $image_base64; ?>">
                        <input type="hidden" name="prodImage" class="prodImage" value="<?php echo base64_encode( $row['product_image'] )?>">
                        <input type="submit" name="btnAddtoCart" class="view-products-button1 button view-products-text32" value="ADD TO CART">
                      </form>
                    </div>
                    <span class="view-products-text35">
                      <span class="view-products-text36">Categories:</span>
                      <span class="view-products-text37">
                        Health Care, Immunity Boosters, Over the Counter,
                        Vitamin, Vitamin C, Vitamins &amp; Supplements
                      </span>
                    </span>
                  </div>
                </div>
                <div class="view-products-container12">
                  <div class="view-products-div">
                    
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">PRODUCT DESCRIPTION</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">PRODUCT INFORMATION</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">REVIEWS (0)</button>
</div>


<div id="London" class="tabcontent">
	<p>Description</p>
  <p><?= $row['product_brandname'] ?>&nbsp;<?= $row['product_dsgstrength'] ?>&nbsp;<?= $row['product_drugpackaging'] ?></p>
  <br>
</div>

<div id="Paris" class="tabcontent">
	<p> Additional Information</p>
    <hr style='border: 1px solid #E5E4E2; border-bottom: none;'>
 <p><font style='font-weight: 600'>Drug Packaging:</font> <?= $row['product_drugpackaging'] ?>
&nbsp;<p><font style='font-weight: 600'>Dosage Strength:</font> <?= $row['product_dsgstrength'] ?>
&nbsp;<p><font style='font-weight: 600'>Drug Classification:</font> <?= $row['product_drugclass'] ?></p>
 <hr style='border: 1px solid #A9A9A9; border-bottom: none; '>
 <br>
</div>

<?php } } ?>
<div id="Tokyo" class="tabcontent">
<p> Reviews</p>
  <p>There are no reviews yet.</p><br>
</div>

<script>
  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
    event.preventDefault();
  }
  
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();

  </script>
  
                  </div>
                </div>
              </div>
            </div>
            <footer class="view-products-footer">
              <div class="view-products-container13">
                <div class="view-products-links-container">
                  <div class="view-products-container14">
                    <div class="view-products-product-container">
                      <span class="view-products-text38">ABOUT US</span>
                      <div class="view-products-container15">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="view-products-icon14"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="view-products-text39">
                          About 5GF Pharmacy
                        </span>
                      </div>
                      <div class="view-products-container16">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="view-products-icon16"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="view-products-text40">Careers</span>
                      </div>
                      <div class="view-products-container17">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="view-products-icon18"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="view-products-text41">
                          News &amp; Blogs
                        </span>
                      </div>
                      <div class="view-products-container18">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="view-products-icon20"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="view-products-text42">FAQs</span>
                      </div>
                      <div class="view-products-container19">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="view-products-icon22"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="view-products-text43">Contact Us</span>
                      </div>
                    </div>
                    <div class="view-products-product-container1">
                      <span class="view-products-text44">SHOP</span>
                      <div class="view-products-container20">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="view-products-icon24"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="view-products-text45">OTC Medicines</span>
                      </div>
                      <div class="view-products-container21">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="view-products-icon26"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="view-products-text46">
                          Prescription Medicines
                        </span>
                      </div>
                      <div class="view-products-container22">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="view-products-icon28"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="view-products-text47">Home Remedies</span>
                      </div>
                    </div>
                    <div class="view-products-product-container2">
                      <span class="view-products-text48">SERVICES</span>
                      <div class="view-products-container23">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="view-products-icon30"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="view-products-text49">Help Center</span>
                      </div>
                      <div class="view-products-container24">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="view-products-icon32"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="view-products-text50">
                          Call &amp; Pickup
                        </span>
                      </div>
                      <div class="view-products-container25">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="view-products-icon34"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="view-products-text51">Subscriptions</span>
                      </div>
                      <div class="view-products-container26">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="view-products-icon36"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="view-products-text52">
                          Shipping &amp; Delivery
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="view-products-container27">
                  <div class="view-products-container28">
                    <svg viewBox="0 0 1024 1024" class="view-products-icon38">
                      <path
                        d="M512 490q44 0 75-31t31-75-31-75-75-31-75 31-31 75 31 75 75 31zM512 86q124 0 211 87t87 211q0 62-31 142t-75 150-87 131-73 97l-32 34q-12-14-32-37t-72-92-91-134-71-147-32-144q0-124 87-211t211-87z"
                      ></path>
                    </svg>
                    <span class="view-products-text53">
                      G/F Gocheco Bldg., Sta. Cruz, Manila
                    </span>
                  </div>
                  <div class="view-products-container29">
                    <svg viewBox="0 0 1024 1024" class="view-products-icon40">
                      <path
                        d="M704 640c-64 64-64 128-128 128s-128-64-192-128-128-128-128-192 64-64 128-128-128-256-192-256-192 192-192 192c0 128 131.5 387.5 256 512s384 256 512 256c0 0 192-128 192-192s-192-256-256-192z"
                      ></path>
                    </svg>
                    <span class="view-products-text54">
                      Telephone: +(63) 895 945 5962
                    </span>
                  </div>
                  <div class="view-products-container30">
                    <svg viewBox="0 0 1024 1024" class="view-products-icon42">
                      <path
                        d="M704 640c-64 64-64 128-128 128s-128-64-192-128-128-128-128-192 64-64 128-128-128-256-192-256-192 192-192 192c0 128 131.5 387.5 256 512s384 256 512 256c0 0 192-128 192-192s-192-256-256-192z"
                      ></path>
                    </svg>
                    <span class="view-products-text55">
                      Telephone: +(63) 906 326 3564
                    </span>
                  </div>
                  <div class="view-products-container31">
                    <svg viewBox="0 0 1024 1024" class="view-products-icon44">
                      <path
                        d="M854 342v-86l-342 214-342-214v86l342 212zM854 170q34 0 59 26t25 60v512q0 34-25 60t-59 26h-684q-34 0-59-26t-25-60v-512q0-34 25-60t59-26h684z"
                      ></path>
                    </svg>
                    <span class="view-products-text56">
                      Email: 5gfpharmacy@gmail.com
                    </span>
                  </div>
                </div>
              </div>
            </footer>
            <footer class="view-products-footer1">
              <img
                alt="logo"
                src="public/playground_assets/logo-rb7l-200h.png"
                class="view-products-image3"
              />
              <div class="view-products-logo-text-container1">
                <span class="view-products-text57">PHARMACY</span>
                <div class="view-products-separator3"></div>
                <span class="view-products-text58">ONLINE PHARMACY STORE</span>
              </div>
              <span class="view-products-text59">
                © 2023 5GF Pharmacy, All Rights Reserved.
              </span>
              <div class="view-products-icon-group">
                <svg
                  viewBox="0 0 950.8571428571428 1024"
                  class="view-products-icon46"
                >
                  <path
                    d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
                  ></path></svg><svg
                  viewBox="0 0 877.7142857142857 1024"
                  class="view-products-icon48"
                >
                  <path
                    d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
                  ></path></svg><svg
                  viewBox="0 0 602.2582857142856 1024"
                  class="view-products-icon50"
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

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
       e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var custID = $form.find(".custID").val();
      var prodID = $form.find(".prodID").val();
      var prodBN = $form.find(".prodBN").val();
      var prodPR = $form.find(".prodPR").val();
      var prodQTY = $form.find(".prodQTY").val();
      var prodDC = $form.find(".prodDC").val();
      var prodDSTR = $form.find(".prodDSTR").val();
      var prodImage = $form.find(".prodImage").val();

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          custID: custID,
          prodID: prodID,
          prodBN: prodBN,
          prodPR: prodPR,
          prodQTY: prodQTY,
          prodDC: prodDC,
          prodDSTR: prodDSTR,
          prodImage: prodImage

        },
        success: function(response) {
          $("#message").html(response);
          load_cart_item_number();
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
