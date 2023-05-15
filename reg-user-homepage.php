<?php 
  include ('Functions/customer_profile.php');
  session_start();

  $_SESSION['custID'] = $custID;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="shortcut icon" type="image/x-icon" href="\public\playground_assets\image-oy1m-200h.png" />
    <title>Home | 5GF Pharmacy</title>
    <link rel="icon" href="\5GF Pharmacy\Pharmacy Assistant\public\playground_assets\5gf pharmacy logo1-200h.png" type="image/png" /> 
    <meta
      property="og:title"
      content="RegUser-Homepage - Wonderful Jolly Hummingbird"
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
      <link href="./reg-user-homepage.css" rel="stylesheet" />

      <div class="reg-user-homepage-container">
        <div class="reg-user-homepage-container01">
          <svg viewBox="0 0 1024 1024" class="reg-user-homepage-icon">
            <path
              d="M512 0c-176.732 0-320 143.268-320 320 0 320 320 704 320 704s320-384 320-704c0-176.732-143.27-320-320-320zM512 512c-106.040 0-192-85.96-192-192s85.96-192 192-192 192 85.96 192 192-85.96 192-192 192z"
            ></path>
          </svg>
          <span class="reg-user-homepage-text">
            G/F Gocheco Bldg., Sta. Cruz, Manila
          </span>
           <a onclick="confirmLogout()" class="reg-user-homepage-navlink button">
            <svg viewBox="0 0 1024 1024" class="reg-user-homepage-icon02">
              <path
                d="M768 640v-128h-320v-128h320v-128l192 192zM704 576v256h-320v192l-384-192v-832h704v320h-64v-256h-512l256 128v576h256v-192z"
              ></path>
            </svg>
            <span class="reg-user-homepage-text001">
              <span>Logout</span>
              <br />
            </span>
          </a>
          <a
            href="registered-user-profile.php"
            class="reg-user-homepage-navlink1 button"
          >
            <svg
              viewBox="0 0 731.4285714285713 1024"
              class="reg-user-homepage-icon04"
            >
              <path
                d="M731.429 799.429c0 83.429-54.857 151.429-121.714 151.429h-488c-66.857 0-121.714-68-121.714-151.429 0-150.286 37.143-324 186.857-324 46.286 45.143 109.143 73.143 178.857 73.143s132.571-28 178.857-73.143c149.714 0 186.857 173.714 186.857 324zM585.143 292.571c0 121.143-98.286 219.429-219.429 219.429s-219.429-98.286-219.429-219.429 98.286-219.429 219.429-219.429 219.429 98.286 219.429 219.429z"
              ></path>
            </svg>
            <span class="reg-user-homepage-text004">
              <span>View Profile</span>
              <br />
            </span>
          </a>
          <a
            href="checkout-page.php"
            class="reg-user-homepage-navlink2 button"
          >
            <svg viewBox="0 0 1024 1024" class="reg-user-homepage-icon06" >
              <path
                d="M1004 804.571l20 178.857c1.143 10.286-2.286 20.571-9.143 28.571-6.857 7.429-17.143 12-27.429 12h-950.857c-10.286 0-20.571-4.571-27.429-12-6.857-8-10.286-18.286-9.143-28.571l20-178.857h984zM950.857 325.143l49.143 442.857h-976l49.143-442.857c2.286-18.286 17.714-32.571 36.571-32.571h146.286v73.143c0 40.571 32.571 73.143 73.143 73.143s73.143-32.571 73.143-73.143v-73.143h219.429v73.143c0 40.571 32.571 73.143 73.143 73.143s73.143-32.571 73.143-73.143v-73.143h146.286c18.857 0 34.286 14.286 36.571 32.571zM731.429 219.429v146.286c0 20-16.571 36.571-36.571 36.571s-36.571-16.571-36.571-36.571v-146.286c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286v146.286c0 20-16.571 36.571-36.571 36.571s-36.571-16.571-36.571-36.571v-146.286c0-121.143 98.286-219.429 219.429-219.429s219.429 98.286 219.429 219.429z"
              ></path>
            </svg>
            <span class="reg-user-homepage-text007">
              <span>Checkout</span>
              <br />
            </span>
          </a>
          <a href="" class="reg-user-homepage-navlink3 button">
            <span class="reg-user-homepage-text010">
              <span>Hello, <?php echo $custUNE ?>!</span>
              <br />
            </span>
          </a>
        </div>
        <div class="reg-user-homepage-main-b-container">
          <form class="reg-user-homepage-main-form" action="<?php $_PHP_SELF ?>" method="POST"> 
            <div class="reg-user-homepage-container02">
              <a
                href="reg-user-homepage.php"
                class="reg-user-homepage-navlink4"
              >
                <img
                  alt="image"
                  src="public/playground_assets/image-oy1m-200h.png"
                  class="reg-user-homepage-image"
                />
              </a>
              <a
                href="reg-user-homepage.php"
                class="reg-user-homepage-navlink5"
              >
                <div class="reg-user-homepage-logo-text-container">
                  <span class="reg-user-homepage-text013">PHARMACY</span>
                  <div class="reg-user-homepage-separator"></div>
                  <span class="reg-user-homepage-text014">
                    ONLINE PHARMACY STORE
                  </span>
                </div>
              </a>
              <input
                type="text" name="valueToSearchReg"
                placeholder="Search for Branded or Generic Medicine...."
                class="reg-user-homepage-textinput input"
              />
              <button type="submit" name="btnSearchReg" class="reg-user-homepage-button button btnSearch">
                <svg
                  viewBox="0 0 950.8571428571428 1024"
                  class="reg-user-homepage-icon08"
                >
                  <path
                    d="M658.286 475.429c0-141.143-114.857-256-256-256s-256 114.857-256 256 114.857 256 256 256 256-114.857 256-256zM950.857 950.857c0 40-33.143 73.143-73.143 73.143-19.429 0-38.286-8-51.429-21.714l-196-195.429c-66.857 46.286-146.857 70.857-228 70.857-222.286 0-402.286-180-402.286-402.286s180-402.286 402.286-402.286 402.286 180 402.286 402.286c0 81.143-24.571 161.143-70.857 228l196 196c13.143 13.143 21.143 32 21.143 51.429z"
                  ></path>
                </svg>
              </button>
              <a
                href="cart-page.php"
                class="reg-user-homepage-navlink6 button"
              >
                <svg viewBox="0 0 1024 1024" class="reg-user-homepage-icon10" >
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
                <span class="reg-user-homepage-text015" id="cart-item"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item
              </a>
            </div>
            <div class="reg-user-homepage-container03">
              <a
                href="reg-user-homepage.php"
                class="reg-user-homepage-navlink7"
              >
                HOME
              </a>
              <a href="reg-user-search-all-products.php" class="reg-user-homepage-text016">ALL PRODUCTS</a>
              <span class="reg-user-homepage-text017">OTC MEDICINES</span>
              <span class="reg-user-homepage-text018">PRESCRIPTION</span>
              <span class="reg-user-homepage-text019">HOME REMEDIES</span>
              <a href="reg-user-faq.php" class="reg-user-homepage-text020">FAQ</a>
              <a href="reg-user-contact-us.php" class="reg-user-homepage-text021">CONTACT US</a>
              <a href="reg-user-call-and-pickup.php" class="reg-user-homepage-text022">CALL AND PICKUP</a>
            </div>
            <div class="reg-user-homepage-resizable-container">
              <div class="reg-user-homepage-container04">
                <span class="reg-user-homepage-text023">
                  <span>Your Local&nbsp;</span>
                  <br />
                  <span>Online</span>
                  <span class="reg-user-homepage-text027">Pharmacy</span>
                  <br />
                </span>
                <span class="reg-user-homepage-text029">
                  <span>
                    Our pharmacy is your trusted source of pharmaceutical
                    services and
                  </span>
                  <br />
                  <span>products. We</span>
                  <span>have what you are looking for.</span>
                  <br />
                </span>
              </div>
              <div class="reg-user-homepage-large-texts-container">
                <div class="reg-user-homepage-container05">
                  <span class="reg-user-homepage-text035">
                    METRO CEBU SAME-DAY PICKUP
                  </span>
                  <span class="reg-user-homepage-text036">
                    <span>CUT OFF TIME IS</span>
                    <span class="reg-user-homepage-text038">
                      3:30 PM |&nbsp;
                    </span>
                    <span>OUTSIDE METRO CEBU DELIVERY LEAD TIME:</span>
                    <span class="reg-user-homepage-text040">7 TO 14 DAYS</span>
                  </span>
                </div>
                <div class="reg-user-homepage-container06">
                  <span class="reg-user-homepage-text041">
                    <span class="reg-user-homepage-text042"></span>
                    <span class="reg-user-homepage-text043">
                      Also order through phone:
                    </span>
                    <span class="reg-user-homepage-text044"></span>
                    <span class="reg-user-homepage-text045">SMART</span>
                    <span class="reg-user-homepage-text046"></span>
                    <span class="reg-user-homepage-text047">
                      0976 039 8063&nbsp;
                    </span>
                    <span class="reg-user-homepage-text048">
                      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    </span>
                    <span class="reg-user-homepage-text049">GLOBE</span>
                    <span class="reg-user-homepage-text050"></span>
                    <span class="reg-user-homepage-text051">0916 633 6435</span>
                  </span>
                </div>
                <div class="reg-user-homepage-container07">
                  <span class="reg-user-homepage-text052">
                    FOR METRO MANILA AND LUZON ORDERS, YOU MAY ORDER THROUGH CHU
                    CHU
                  </span>
                </div>
              </div>
              <div class="reg-user-homepage-categories-pic-container">
                <div class="reg-user-homepage-container08">
                  <div class="reg-user-homepage-container09">
                    <span class="reg-user-homepage-text053">
                      <span>ALLERGY?</span>
                      <span>ASK FOR YOUR&nbsp;</span>
                      <br />
                      <span class="reg-user-homepage-text057">5GF PHARMAC</span>
                      <span class="reg-user-homepage-text058">Y</span>
                      <span class="reg-user-homepage-text059">GENERICS</span>
                      <br />
                    </span>
                    <span class="reg-user-homepage-text061">Cetirizine</span>
                    <span class="reg-user-homepage-text062">OTC MEDICINES</span>
                  </div>
                </div>
                <div class="reg-user-homepage-container10">
                  <div class="reg-user-homepage-container11">
                    <span class="reg-user-homepage-text063">
                      <span class="reg-user-homepage-text064">DIARRHEA?</span>
                      <span class="reg-user-homepage-text065"></span>
                      <span class="reg-user-homepage-text066">
                        ASK FOR YOUR&nbsp;
                      </span>
                      <br />
                      <span class="reg-user-homepage-text068">
                        5GF PHARMACY
                      </span>
                      <span class="reg-user-homepage-text069"></span>
                      <span class="reg-user-homepage-text070">GENERICS</span>
                      <br />
                    </span>
                    <span class="reg-user-homepage-text072">
                      <span>Loperamide</span>
                      <br />
                      <span>HCI</span>
                      <br />
                    </span>
                    <span class="reg-user-homepage-text077">
                      PRESCRIPTION MEDICINES
                    </span>
                  </div>
                </div>
                <div class="reg-user-homepage-container12">
                  <div class="reg-user-homepage-container13">
                    <span class="reg-user-homepage-text078">
                      <span>FEVER &amp; HEADACHE? ASK FOR YOUR&nbsp;</span>
                      <br />
                      <span class="reg-user-homepage-text081">
                        5GF PHARMACY
                      </span>
                      <span></span>
                      <span class="reg-user-homepage-text083">GENERICS</span>
                      <br />
                    </span>
                    <span class="reg-user-homepage-text085">Paracetamol</span>
                    <span class="reg-user-homepage-text086">HOME REMEDIES</span>
                  </div>
                </div>
              </div>

              <div class="reg-user-homepage-container14">
                <div class="reg-user-homepage-container15">
                  <img
                    alt="image"
                    src="public/playground_assets/prize-badge-with-star-and-ribbon-200h.png"
                    class="reg-user-homepage-image01"
                  />
                  <span class="reg-user-homepage-text087">HOT DEALS</span>
                </div>
                <a href="reg-user-search-all-products.php"><span class="reg-user-homepage-text088">VIEW ALL</span></a>
              </div>
              <div id="message"></div>
              <div class="reg-user-homepage-container16">
                <?php
                  include 'Functions/5GFdb.php';
                  $qty = 1;
                  /*$stmt = $dbcon->prepare('SELECT * FROM asst_prod WHERE product_quantity > 0 AND product_quantity <= 20');*/
                  $stmt = $dbcon->prepare('SELECT * FROM asst_prod WHERE product_quantity > 0 LIMIT 5');
                  $stmt->execute();
                  $result = $stmt->get_result();
                  while ($row = $result->fetch_assoc()):
                ?>
                &ensp;
                <div class="reg-user-homepage-container17">
                  <a href="view-products.php?prodID=<?= $row['productID'] ?>">
                    <?php echo '<img src="data:image;base64,'.base64_encode( $row['product_image'] ).'"class="reg-user-homepage-image02"';?>
                    <img
                      alt="image"
                      src="public/playground_assets/medimage-300h.png"
                      class="reg-user-homepage-image02"
                    />
                  </a>
                  <span class="reg-user-homepage-text089">
                    <?= $row['product_brandname'] ?>
                  </span>
                  <span class="reg-user-homepage-text090">₱<?= number_format($row['product_pricing'],2); ?></span>

                  <form action="" class="form-submit">
                    <input type="hidden" name="custID" class="custID" value="<?php echo $custID ?>">
                    <input type="hidden" name="prodID" class="prodID"  value="<?=$row['productID'] ?>">
                    <input type="hidden" name="prodBN" class="prodBN" value="<?=$row['product_brandname'] ?>">
                    <input type="hidden" name="prodDSTR" class="prodDSTR" value="<?= $row['product_dsgstrength'] ?>">
                    <input type="hidden" name="prodPR" class="prodPR" value="<?=$row['product_pricing'] ?>">
                    <input type="hidden" name="prodDC" class="prodDC" value="<?= $row['product_drugclass'] ?>">
                    <input type="hidden" name="prodQTY" class="prodQTY" value="<?=$qty ?>">
                    
                    <input type="hidden" name="prodIMG" class="prodImage" value="<?php echo $image_base64; ?>">
                    <input type="hidden" name="prodIMG" class="prodImage" value="<?php echo base64_encode( $row['product_image'] )?>">
                     
                    <button class="reg-user-homepage-button01 button addItemBtn reg-user-homepage-text091"> <span>ADD TO CART</
                        <br />
                      </span>
                    </button> 
                  </form>
                  
                </div>
                <?php endwhile; ?>
              </div>

              <div class="reg-user-homepage-container22">
                <div class="reg-user-homepage-container23">
                    <img
                      alt="image"
                      src="public/playground_assets/prize-badge-with-star-and-ribbon-200h.png"
                      class="reg-user-homepage-image07"
                    />
                    <span class="reg-user-homepage-text114">
                      IMMUNITY BOOSTERS
                    </span>
                </div>
                <a href="reg-user-search-all-products.php"><span class="reg-user-homepage-text115">VIEW ALL</span></a>
              </div>

              <div class="reg-user-homepage-container24">
                <?php 
                  include ('Functions/customer_scrud.php');
                  $qty = 1;
                  $stmt = $dbcon->prepare('SELECT * FROM asst_prod WHERE `productID` LIKE "OTC%"');
                  $stmt->execute();
                  $result1 = $stmt->get_result();
                  while ($row = $result1->fetch_assoc()): 
                ?>
                &ensp;
                <div class="reg-user-homepage-container25">
                  <a href="view-products.php?prodID=<?= $row['productID'] ?>">
                    <?php echo '<img src="data:image;base64,'.base64_encode( $row['product_image'] ).'"admin-pharmacist-assistant-profile-image01"';?>
                    <img
                      alt="image"
                      src="public/playground_assets/medimage2-300h.png"
                      class="reg-user-homepage-image08"
                    />
                  </a>
                  <span class="reg-user-homepage-text116">
                    <?= $row['product_brandname'] ?>
                  </span>
                  <span class="reg-user-homepage-text117"><?= "₱" , $row['product_pricing'] , ".00" ?></span>
                  <form action="" class="form-submit">
                    <input type="hidden" name="prodID" class="prodID"  value="<?=$row['productID'] ?>">
                    <input type="hidden" name="prodBN" class="prodBN" value="<?=$row['product_brandname'] ?>">
                    <input type="hidden" name="prodPR" class="prodPR" value="<?=$row['product_pricing'] ?>">
                    <input type="hidden" name="prodDC" class="prodDC" value="<?= $row['product_drugclass'] ?>">
                    <input type="hidden" name="prodQTY" class="prodQTY" value="<?=$qty ?>">
                    <input type="hidden" name="prodDSTR" class="prodDSTR" value="<?= $row['product_dsgstrength'] ?>">
                    <input type="hidden" name="prodIMG" class="prodImage" value="<?php echo $image_base64; ?>">
                    <input type="hidden" name="prodIMG" class="prodImage" value="<?php echo base64_encode( $row['product_image'] )?>">

                     <!-- <button class="btn btn-info btn-block addItemBtn title"style="background-color: #AF1D27; color: white; border: 0px solid; border-radius: 0px; font-weight: 500; font-size: 14.5px"><i class="fa fa-plus"></i>&ensp;Add to Basket</button> -->
                    <button class="reg-user-homepage-button01 button addItemBtn reg-user-homepage-text091"> <span>ADD TO CART</
                        <br />
                      </span>
                    </button> 
                  </form>
                </div>
                <?php endwhile; ?>
              </div>

            </div>

            <footer class="reg-user-homepage-footer">
              <div class="reg-user-homepage-container30">
                <div class="reg-user-homepage-links-container">
                  <div class="reg-user-homepage-container31">
                    <div class="reg-user-homepage-product-container">
                      <span class="reg-user-homepage-text141">ABOUT US</span>
                      <div class="reg-user-homepage-container32">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="reg-user-homepage-icon14"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="reg-user-homepage-text142">
                          About 5GF Pharmacy
                        </span>
                      </div>
                      <div class="reg-user-homepage-container33">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="reg-user-homepage-icon16"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="reg-user-homepage-text143">Careers</span>
                      </div>
                      <div class="reg-user-homepage-container34">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="reg-user-homepage-icon18"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="reg-user-homepage-text144">
                          News &amp; Blogs
                        </span>
                      </div>
                      <div class="reg-user-homepage-container35">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="reg-user-homepage-icon20"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="reg-user-homepage-text145">FAQs</span>
                      </div>
                      <div class="reg-user-homepage-container36">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="reg-user-homepage-icon22"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="reg-user-homepage-text146">
                          Contact Us
                        </span>
                      </div>
                    </div>
                    <div class="reg-user-homepage-product-container1">
                      <span class="reg-user-homepage-text147">SHOP</span>
                      <div class="reg-user-homepage-container37">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="reg-user-homepage-icon24"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="reg-user-homepage-text148">
                          OTC Medicines
                        </span>
                      </div>
                      <div class="reg-user-homepage-container38">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="reg-user-homepage-icon26"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="reg-user-homepage-text149">
                          Prescription Medicines
                        </span>
                      </div>
                      <div class="reg-user-homepage-container39">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="reg-user-homepage-icon28"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="reg-user-homepage-text150">
                          Home Remedies
                        </span>
                      </div>
                    </div>
                    <div class="reg-user-homepage-product-container2">
                      <span class="reg-user-homepage-text151">SERVICES</span>
                      <div class="reg-user-homepage-container40">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="reg-user-homepage-icon30"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="reg-user-homepage-text152">
                          Help Center
                        </span>
                      </div>
                      <div class="reg-user-homepage-container41">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="reg-user-homepage-icon32"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="reg-user-homepage-text153">
                          Call &amp; Pickup
                        </span>
                      </div>
                      <div class="reg-user-homepage-container42">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="reg-user-homepage-icon34"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="reg-user-homepage-text154">
                          Subscriptions
                        </span>
                      </div>
                      <div class="reg-user-homepage-container43">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="reg-user-homepage-icon36"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="reg-user-homepage-text155">
                          Shipping &amp; Delivery
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="reg-user-homepage-container44">
                  <div class="reg-user-homepage-container45">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="reg-user-homepage-icon38"
                    >
                      <path
                        d="M512 490q44 0 75-31t31-75-31-75-75-31-75 31-31 75 31 75 75 31zM512 86q124 0 211 87t87 211q0 62-31 142t-75 150-87 131-73 97l-32 34q-12-14-32-37t-72-92-91-134-71-147-32-144q0-124 87-211t211-87z"
                      ></path>
                    </svg>
                    <span class="reg-user-homepage-text156">
                      G/F Gocheco Bldg., Sta. Cruz, Manila
                    </span>
                  </div>
                  <div class="reg-user-homepage-container46">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="reg-user-homepage-icon40"
                    >
                      <path
                        d="M704 640c-64 64-64 128-128 128s-128-64-192-128-128-128-128-192 64-64 128-128-128-256-192-256-192 192-192 192c0 128 131.5 387.5 256 512s384 256 512 256c0 0 192-128 192-192s-192-256-256-192z"
                      ></path>
                    </svg>
                    <span class="reg-user-homepage-text157">
                      Telephone: +(63) 895 945 5962
                    </span>
                  </div>
                  <div class="reg-user-homepage-container47">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="reg-user-homepage-icon42"
                    >
                      <path
                        d="M704 640c-64 64-64 128-128 128s-128-64-192-128-128-128-128-192 64-64 128-128-128-256-192-256-192 192-192 192c0 128 131.5 387.5 256 512s384 256 512 256c0 0 192-128 192-192s-192-256-256-192z"
                      ></path>
                    </svg>
                    <span class="reg-user-homepage-text158">
                      Telephone: +(63) 906 326 3564
                    </span>
                  </div>
                  <div class="reg-user-homepage-container48">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="reg-user-homepage-icon44"
                    >
                      <path
                        d="M854 342v-86l-342 214-342-214v86l342 212zM854 170q34 0 59 26t25 60v512q0 34-25 60t-59 26h-684q-34 0-59-26t-25-60v-512q0-34 25-60t59-26h684z"
                      ></path>
                    </svg>
                    <span class="reg-user-homepage-text159">
                      Email: 5gfpharmacy@gmail.com
                    </span>
                  </div>
                </div>
              </div>

            </footer>
            <footer class="reg-user-homepage-footer1">
              <img
                alt="logo"
                src="public/playground_assets/logo-rb7l-200h.png"
                class="reg-user-homepage-image13"
              />
              <div class="reg-user-homepage-logo-text-container1">
                <span class="reg-user-homepage-text160">PHARMACY</span>
                <div class="reg-user-homepage-separator1"></div>
                <span class="reg-user-homepage-text161">
                  ONLINE PHARMACY STORE
                </span>
              </div>
              <span class="reg-user-homepage-text162">
                © 2023 5GF Pharmacy, All Rights Reserved.
              </span>
              <div class="reg-user-homepage-icon-group">
                <svg
                  viewBox="0 0 950.8571428571428 1024"
                  class="reg-user-homepage-icon46"
                >
                  <path
                    d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
                  ></path></svg
                ><svg
                  viewBox="0 0 877.7142857142857 1024"
                  class="reg-user-homepage-icon48"
                >
                  <path
                    d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
                  ></path></svg
                ><svg
                  viewBox="0 0 602.2582857142856 1024"
                  class="reg-user-homepage-icon50"
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