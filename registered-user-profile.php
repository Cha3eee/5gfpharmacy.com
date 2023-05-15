<?php 
  include ('Functions/customer_profile.php');
  include ('Functions/customer_scrud.php');
  include ('Functions/customer_clicktoedit.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="shortcut icon" type="image/x-icon" href="\public\playground_assets\image-oy1m-200h.png" />
    <title>Profile</title>
    <link rel="icon" href="\5GF Pharmacy\Pharmacy Assistant\public\playground_assets\5gf pharmacy logo1-200h.png" type="image/png" /> 
    <meta
      property="og:title"
      content="Registered-User-Profile - Wonderful Jolly Hummingbird"
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

          label{
      display: inline-block;
      background-color: #145DA0;
      color: white;
      padding: 0.5rem 1rem;
      font-family: sans-serif;
      border-radius: 0.3rem;
      cursor: pointer;
      margin-top: 1rem;

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
      .registered-user-profile-container24{
        width: 50px;
        position: relative;
      }
      .registered-user-profile-container24 input[type="password"],
      .registered-user-profile-container24 input[type="text"]{
        width: 50%;
        padding: 8px 24px 8px 8px;
        box-sizing: border-box;
        height: 6px;
      }
      .fa-eye{
        position: absolute;
        top: 30%;
        right: 10%;
        cursor: pointer;
        color: lightgray;
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
      <link href="./registered-user-profile.css" rel="stylesheet" />

      <div class="registered-user-profile-container">
        <div class="registered-user-profile-container01">
          <svg viewBox="0 0 1024 1024" class="registered-user-profile-icon">
            <path
              d="M512 0c-176.732 0-320 143.268-320 320 0 320 320 704 320 704s320-384 320-704c0-176.732-143.27-320-320-320zM512 512c-106.040 0-192-85.96-192-192s85.96-192 192-192 192 85.96 192 192-85.96 192-192 192z"
            ></path>
          </svg>
          <span class="registered-user-profile-text">
            G/F Gocheco Bldg., Sta. Cruz, Manila
          </span>
          <a onclick="confirmLogout()" class="registered-user-profile-navlink button">
            <svg viewBox="0 0 1024 1024" class="registered-user-profile-icon02">
              <path
                d="M768 640v-128h-320v-128h320v-128l192 192zM704 576v256h-320v192l-384-192v-832h704v320h-64v-256h-512l256 128v576h256v-192z"
              ></path>
            </svg>
            <span class="registered-user-profile-text01">
              <span>Logout</span>
              <br />
            </span>
          </a>
          <a
            href="registered-user-profile.php"
            class="registered-user-profile-navlink1 button"
          >
            <svg
              viewBox="0 0 731.4285714285713 1024"
              class="registered-user-profile-icon04"
            >
              <path
                d="M731.429 799.429c0 83.429-54.857 151.429-121.714 151.429h-488c-66.857 0-121.714-68-121.714-151.429 0-150.286 37.143-324 186.857-324 46.286 45.143 109.143 73.143 178.857 73.143s132.571-28 178.857-73.143c149.714 0 186.857 173.714 186.857 324zM585.143 292.571c0 121.143-98.286 219.429-219.429 219.429s-219.429-98.286-219.429-219.429 98.286-219.429 219.429-219.429 219.429 98.286 219.429 219.429z"
              ></path>
            </svg>
            <span class="registered-user-profile-text04">
              <span>View Profile</span>
              <br />
            </span>
          </a>
          <button class="registered-user-profile-button button">
            <svg viewBox="0 0 1024 1024" class="registered-user-profile-icon06">
              <path
                d="M1004 804.571l20 178.857c1.143 10.286-2.286 20.571-9.143 28.571-6.857 7.429-17.143 12-27.429 12h-950.857c-10.286 0-20.571-4.571-27.429-12-6.857-8-10.286-18.286-9.143-28.571l20-178.857h984zM950.857 325.143l49.143 442.857h-976l49.143-442.857c2.286-18.286 17.714-32.571 36.571-32.571h146.286v73.143c0 40.571 32.571 73.143 73.143 73.143s73.143-32.571 73.143-73.143v-73.143h219.429v73.143c0 40.571 32.571 73.143 73.143 73.143s73.143-32.571 73.143-73.143v-73.143h146.286c18.857 0 34.286 14.286 36.571 32.571zM731.429 219.429v146.286c0 20-16.571 36.571-36.571 36.571s-36.571-16.571-36.571-36.571v-146.286c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286v146.286c0 20-16.571 36.571-36.571 36.571s-36.571-16.571-36.571-36.571v-146.286c0-121.143 98.286-219.429 219.429-219.429s219.429 98.286 219.429 219.429z"
              ></path>
            </svg>
            <span class="registered-user-profile-text07">
              <a href="checkout-page.php"><span>Checkout</span></a>
              <br />
            </span>
          </button>
          <a
            href=""
            class="registered-user-profile-navlink2 button"
          >
            <span class="registered-user-profile-text10">
              <span>Hello, <?php echo $custUNE ?>!</span>
              <br />
            </span>
          </a>
        </div>
        <div class="registered-user-profile-main-b-container">
          <form class="registered-user-profile-main-form" enctype=multipart/form-data method="POST">
            <div class="registered-user-profile-container02">
              <a
                href="reg-user-homepage.php"
                class="registered-user-profile-navlink3"
              >
                <img
                  alt="image"
                  src="public/playground_assets/image-oy1m-200h.png"
                  class="registered-user-profile-image"
                />
              </a>
              <a
                href="reg-user-homepage.php"
                class="registered-user-profile-navlink4"
              >
                <div class="registered-user-profile-logo-text-container">
                  <span class="registered-user-profile-text13">PHARMACY</span>
                  <div class="registered-user-profile-separator"></div>
                  <span class="registered-user-profile-text14">
                    ONLINE PHARMACY STORE
                  </span>
                </div>
              </a>
              <input
                type="text"
                placeholder="Search for Branded or Generic Medicine...."
                class="registered-user-profile-textinput input"
              />
              <button class="registered-user-profile-button1 button">
                <svg
                  viewBox="0 0 950.8571428571428 1024"
                  class="registered-user-profile-icon08"
                >
                  <path
                    d="M658.286 475.429c0-141.143-114.857-256-256-256s-256 114.857-256 256 114.857 256 256 256 256-114.857 256-256zM950.857 950.857c0 40-33.143 73.143-73.143 73.143-19.429 0-38.286-8-51.429-21.714l-196-195.429c-66.857 46.286-146.857 70.857-228 70.857-222.286 0-402.286-180-402.286-402.286s180-402.286 402.286-402.286 402.286 180 402.286 402.286c0 81.143-24.571 161.143-70.857 228l196 196c13.143 13.143 21.143 32 21.143 51.429z"
                  ></path>
                </svg>
              </button>
              <a
                href="cart-page.php"
                class="registered-user-profile-navlink5 button"
              >
                <svg
                  viewBox="0 0 1024 1024"
                  class="registered-user-profile-icon10"
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
                <span class="registered-user-profile-text15" id="cart-item"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item
              </a>
            </div>
            <div class="registered-user-profile-container03">
              <a
                href="reg-user-homepage.php"
                class="registered-user-profile-navlink6"
              >
                HOME
              </a>
              <a href="reg-user-search-all-products.php" class="registered-user-profile-text16">ALL PRODUCTS</a>
              <span class="registered-user-profile-text17">OTC MEDICINES</span>
              <span class="registered-user-profile-text18">PRESCRIPTION</span>
              <span class="registered-user-profile-text19">HOME REMEDIES</span>
              <a href="reg-user-faq.php" class="registered-user-profile-text20">FAQ</a>
              <a href="reg-user-contact-us.php" class="registered-user-profile-text21">CONTACT US</a>
              <a href="reg-user-call-and-pickup.php" class="registered-user-profile-text22">CALL AND PICKUP</a>
            </div>
            <!-- <form action="" class="form-submit" enctype=multipart/form-data> -->
            <div class="registered-user-profile-resizable-container">
              <div class="registered-user-profile-container04">
                <div class="registered-user-profile-container05">
                  <span class="registered-user-profile-text23">
                    Home&nbsp; &nbsp;&gt;
                  </span>
                  <span class="registered-user-profile-text24">Profile</span>
                </div>
                <div class="registered-user-profile-separator1"></div>
              </div>
              <div class="registered-user-profile-container06">
                <a
                  href="reg-user-homepage.php"
                  class="registered-user-profile-navlink7 button"
                >
                  <span class="registered-user-profile-text25">
                    <span>BACK</span>
                    <br />
                  </span>
                </a>
              </div>
              <div class="registered-user-profile-whole-profile-container">
                <div class="registered-user-profile-container07">
                  <?php echo '<img src="data:image;base64,'.base64_encode( $custDP ).'"class="registered-user-profile-image1" id="profileDisplay"
                         />';?>


                  <span class="registered-user-profile-text28">
                    <?php echo $custFN, ' ', $custLN ?>
                  </span>
                  <span class="registered-user-profile-text29">
                    <?php echo $custUNE ?>
                  </span>
                  <span class="registered-user-profile-text30">
                    <?php echo $custEmail ?>
                  </span>
                  <div class="registered-user-profile-separator2"></div>
                  <div class="registered-user-profile-div">

                     <input type="file" name="custDP" onChange="displayImage(this)" id="custDP" onClick="triggerClick()"  hidden accept="image/gif, image/jpeg, image/png" value="<?php echo $image_base64; ?>" />
                      <label for="custDP" class="btn" >Choose File</label>

                      <input type="hidden" name="custDP" onChange="displayImage(this)" id="custDP" onClick="triggerClick()"  hidden accept="image/gif, image/jpeg, image/png" value="<?php echo base64_encode( $row['custDP'] )?>"/>


                  </div>
                  <div class="registered-user-profile-separator3"></div>
                  <div class="registered-user-profile-container08">
                    <div class="registered-user-profile-container09">
                      <svg
                        viewBox="0 0 1024 1024"
                        class="registered-user-profile-icon14"
                      >
                        <path
                          d="M597.333 42.667h-341.333c-35.328 0-67.413 14.379-90.496 37.504s-37.504 55.168-37.504 90.496v682.667c0 35.328 14.379 67.413 37.504 90.496s55.168 37.504 90.496 37.504h512c35.328 0 67.413-14.379 90.496-37.504s37.504-55.168 37.504-90.496v-512c0-11.776-4.779-22.443-12.501-30.165l-256-256c-4.096-4.096-8.789-7.168-13.824-9.259-5.205-2.176-10.795-3.243-16.341-3.243zM750.336 298.667h-110.336v-110.336zM554.667 128v213.333c0 23.552 19.115 42.667 42.667 42.667h213.333v469.333c0 11.776-4.736 22.4-12.501 30.165s-18.389 12.501-30.165 12.501h-512c-11.776 0-22.4-4.736-30.165-12.501s-12.501-18.389-12.501-30.165v-682.667c0-11.776 4.736-22.4 12.501-30.165s18.389-12.501 30.165-12.501zM682.667 512h-341.333c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667h341.333c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667zM682.667 682.667h-341.333c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667h341.333c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667zM426.667 341.333h-85.333c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667h85.333c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667z"
                        ></path>
                      </svg>
                    </div>
                    <a
                      href="order-history.php"
                      class="registered-user-profile-navlink8"
                    >
                      View Order History
                    </a>
                  </div>
                </div>
                <div class="registered-user-profile-container10">
                  <div class="registered-user-profile-container11">
                    <span class="registered-user-profile-text31">About</span>
                  </div>
                  <div class="registered-user-profile-container12">
                    <span class="registered-user-profile-text32">
                      Personal Information
                    </span>
                  </div>
                  <div class="registered-user-profile-container13">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="registered-user-profile-icon16"
                    >
                      <path
                        d="M853.333 853.333h-682.667c-70.571 0-128-57.429-128-128v-426.667c0-70.571 57.429-128 128-128h682.667c70.571 0 128 57.429 128 128v426.667c0 70.571-57.429 128-128 128zM170.667 256c-23.509 0-42.667 19.157-42.667 42.667v426.667c0 23.509 19.157 42.667 42.667 42.667h682.667c23.509 0 42.667-19.157 42.667-42.667v-426.667c0-23.509-19.157-42.667-42.667-42.667h-682.667z"
                      ></path>
                      <path
                        d="M426.667 640h-170.667c-23.595 0-42.667-19.115-42.667-42.667s19.072-42.667 42.667-42.667h170.667c23.595 0 42.667 19.115 42.667 42.667s-19.072 42.667-42.667 42.667z"
                      ></path>
                      <path
                        d="M426.667 469.333h-170.667c-23.595 0-42.667-19.115-42.667-42.667s19.072-42.667 42.667-42.667h170.667c23.595 0 42.667 19.115 42.667 42.667s-19.072 42.667-42.667 42.667z"
                      ></path>
                      <path
                        d="M768 448c0 47.128-38.205 85.333-85.333 85.333s-85.333-38.205-85.333-85.333c0-47.128 38.205-85.333 85.333-85.333 47.128 0 85.333 38.205 85.333 85.333z"
                      ></path>
                      <path
                        d="M682.667 569.856c-66.645 0-106.667 30.507-106.667 60.971 0 15.232 40.021 30.507 106.667 30.507 62.549 0 106.667-15.232 106.667-30.507 0-30.464-41.813-60.971-106.667-60.971z"
                      ></path>
                    </svg>
                    <div class="registered-user-profile-container14">
                      <span class="registered-user-profile-text33">
                        Customer ID
                      </span>
                      <input
                        type="text"
                        name="custID" value="<?php echo $custID?>" style="outline: none; border: 0px;" readonly
                        placeholder="Cust-1234"
                        class="registered-user-profile-cust-i-name input"
                      />
                    </div>
                  </div>
                  <div class="registered-user-profile-container15">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="registered-user-profile-icon22"
                    >
                      <path
                        d="M896 896v-85.333c0-58.88-23.936-112.299-62.464-150.869s-91.989-62.464-150.869-62.464h-341.333c-58.88 0-112.299 23.936-150.869 62.464s-62.464 91.989-62.464 150.869v85.333c0 23.552 19.115 42.667 42.667 42.667s42.667-19.115 42.667-42.667v-85.333c0-35.371 14.293-67.285 37.504-90.496s55.125-37.504 90.496-37.504h341.333c35.371 0 67.285 14.293 90.496 37.504s37.504 55.125 37.504 90.496v85.333c0 23.552 19.115 42.667 42.667 42.667s42.667-19.115 42.667-42.667zM725.333 298.667c0-58.88-23.936-112.299-62.464-150.869s-91.989-62.464-150.869-62.464-112.299 23.936-150.869 62.464-62.464 91.989-62.464 150.869 23.936 112.299 62.464 150.869 91.989 62.464 150.869 62.464 112.299-23.936 150.869-62.464 62.464-91.989 62.464-150.869zM640 298.667c0 35.371-14.293 67.285-37.504 90.496s-55.125 37.504-90.496 37.504-67.285-14.293-90.496-37.504-37.504-55.125-37.504-90.496 14.293-67.285 37.504-90.496 55.125-37.504 90.496-37.504 67.285 14.293 90.496 37.504 37.504 55.125 37.504 90.496z"
                      ></path>
                    </svg>
                    <div class="registered-user-profile-container16">
                      <span class="registered-user-profile-text34">
                        First Name
                      </span>
                      <input
                        type="text"
                        name="custFN" value="<?php echo $custFN?>"
                        placeholder="First name here" id="editFN" ondblclick="UDFN();"
                        class="registered-user-profile-cust-i-name1 input" readonly
                      />
                    </div>
                  </div>
                  <div class="registered-user-profile-container17">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="registered-user-profile-icon24"
                    >
                      <path
                        d="M896 896v-85.333c0-58.88-23.936-112.299-62.464-150.869s-91.989-62.464-150.869-62.464h-341.333c-58.88 0-112.299 23.936-150.869 62.464s-62.464 91.989-62.464 150.869v85.333c0 23.552 19.115 42.667 42.667 42.667s42.667-19.115 42.667-42.667v-85.333c0-35.371 14.293-67.285 37.504-90.496s55.125-37.504 90.496-37.504h341.333c35.371 0 67.285 14.293 90.496 37.504s37.504 55.125 37.504 90.496v85.333c0 23.552 19.115 42.667 42.667 42.667s42.667-19.115 42.667-42.667zM725.333 298.667c0-58.88-23.936-112.299-62.464-150.869s-91.989-62.464-150.869-62.464-112.299 23.936-150.869 62.464-62.464 91.989-62.464 150.869 23.936 112.299 62.464 150.869 91.989 62.464 150.869 62.464 112.299-23.936 150.869-62.464 62.464-91.989 62.464-150.869zM640 298.667c0 35.371-14.293 67.285-37.504 90.496s-55.125 37.504-90.496 37.504-67.285-14.293-90.496-37.504-37.504-55.125-37.504-90.496 14.293-67.285 37.504-90.496 55.125-37.504 90.496-37.504 67.285 14.293 90.496 37.504 37.504 55.125 37.504 90.496z"
                      ></path>
                    </svg>
                    <div class="registered-user-profile-container18">
                      <span class="registered-user-profile-text35">
                        Last Name
                      </span>
                      <input
                        type="text" 
                        name="custLN" value="<?php echo $custLN?>"
                        placeholder="Lastname" id="editLN" ondblclick="UDLN();"
                        class="registered-user-profile-cust-i-name2 input" readonly
                      />
                    </div>
                  </div>
                  <div class="registered-user-profile-container19">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="registered-user-profile-icon26"
                    >
                      <path
                        d="M512 640q52 0 90-38t38-90-38-90-90-38-90 38-38 90 38 90 90 38zM512 86q176 0 301 125t125 301v62q0 64-43 108t-105 44q-78 0-126-64-64 64-152 64t-151-63-63-151 63-151 151-63 151 63 63 151v62q0 26 19 46t45 20 45-20 19-46v-62q0-140-101-241t-241-101-241 101-101 241 101 241 241 101h214v84h-214q-176 0-301-125t-125-301 125-301 301-125z"
                      ></path>
                    </svg>
                    <div class="registered-user-profile-container20">
                      <span class="registered-user-profile-text36">
                        Email Address
                      </span>
                      <input
                        type="email"
                        name="custEmail" value="<?php echo $custEmail?>"
                        placeholder="emailhere@gmail.com" id="editEM" ondblclick="UDEM();"
                        class="registered-user-profile-cust-i-name3 input" readonly
                      />
                    </div>
                  </div>
                  <div class="registered-user-profile-container21">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="registered-user-profile-icon28"
                    >
                      <path
                        d="M470 854l170-172h256v172h-426zM264 768l370-370-52-52-368 370v52h50zM786 248q26 26 26 60t-26 60l-486 486h-172v-174q480-478 486-484 26-26 60-26t60 26z"
                      ></path>
                    </svg>
                    <div class="registered-user-profile-container22">
                      <span class="registered-user-profile-text37">
                        Username
                      </span>
                      <input
                        type="text"
                        name="custUN" value="<?php echo $custUNE?>"
                        placeholder="@user_namehere" id="editUN" ondblclick="UDUN();"
                        class="registered-user-profile-cust-i-name4 input" readonly
                      />
                    </div>
                  </div>
                  <div class="registered-user-profile-container23">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="registered-user-profile-icon30"
                    >
                      <path
                        d="M298 598q34 0 60-26t26-60-26-60-60-26-59 26-25 60 25 60 59 26zM540 426h442v172h-86v170h-170v-170h-186q-26 70-97 120t-145 50q-106 0-181-75t-75-181 75-181 181-75q74 0 145 50t97 120z"
                      ></path>
                    </svg>
                    <div class="registered-user-profile-container24">
                      <span class="registered-user-profile-text38">
                        Password
                      </span>
                      <input
                        type="password" id="password" ondblclick="UDPS();"
                        name="custPS" value="<?php echo $custPS?>"
                        class="registered-user-profile-cust-i-name5 input" readonly
                      />
                      <i class="fa-solid fa-eye" id="eye"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="registered-user-profile-container25">
                <!-- <button class="registered-user-profile-button2 button">
                  <span class="registered-user-profile-text39">
                    <span>SAVE</span>
                    <br />
                  </span>
                </button> -->
                <input type="submit" name="btnUpdateProfile" class="registered-user-profile-button2 button registered-user-profile-text39" value="SAVE">
              </div>
            </div>
          <!-- </form> -->
            <footer class="registered-user-profile-footer">
              <div class="registered-user-profile-container26">
                <div class="registered-user-profile-links-container">
                  <div class="registered-user-profile-container27">
                    <div class="registered-user-profile-product-container">
                      <span class="registered-user-profile-text42">
                        ABOUT US
                      </span>
                      <div class="registered-user-profile-container28">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="registered-user-profile-icon32"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="registered-user-profile-text43">
                          About 5GF Pharmacy
                        </span>
                      </div>
                      <div class="registered-user-profile-container29">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="registered-user-profile-icon34"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="registered-user-profile-text44">
                          Careers
                        </span>
                      </div>
                      <div class="registered-user-profile-container30">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="registered-user-profile-icon36"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="registered-user-profile-text45">
                          News &amp; Blogs
                        </span>
                      </div>
                      <div class="registered-user-profile-container31">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="registered-user-profile-icon38"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="registered-user-profile-text46">FAQs</span>
                      </div>
                      <div class="registered-user-profile-container32">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="registered-user-profile-icon40"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="registered-user-profile-text47">
                          Contact Us
                        </span>
                      </div>
                    </div>
                    <div class="registered-user-profile-product-container1">
                      <span class="registered-user-profile-text48">SHOP</span>
                      <div class="registered-user-profile-container33">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="registered-user-profile-icon42"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="registered-user-profile-text49">
                          OTC Medicines
                        </span>
                      </div>
                      <div class="registered-user-profile-container34">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="registered-user-profile-icon44"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="registered-user-profile-text50">
                          Prescription Medicines
                        </span>
                      </div>
                      <div class="registered-user-profile-container35">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="registered-user-profile-icon46"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="registered-user-profile-text51">
                          Home Remedies
                        </span>
                      </div>
                    </div>
                    <div class="registered-user-profile-product-container2">
                      <span class="registered-user-profile-text52">
                        SERVICES
                      </span>
                      <div class="registered-user-profile-container36">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="registered-user-profile-icon48"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="registered-user-profile-text53">
                          Help Center
                        </span>
                      </div>
                      <div class="registered-user-profile-container37">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="registered-user-profile-icon50"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="registered-user-profile-text54">
                          Call &amp; Pickup
                        </span>
                      </div>
                      <div class="registered-user-profile-container38">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="registered-user-profile-icon52"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="registered-user-profile-text55">
                          Subscriptions
                        </span>
                      </div>
                      <div class="registered-user-profile-container39">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="registered-user-profile-icon54"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="registered-user-profile-text56">
                          Shipping &amp; Delivery
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="registered-user-profile-container40">
                  <div class="registered-user-profile-container41">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="registered-user-profile-icon56"
                    >
                      <path
                        d="M512 490q44 0 75-31t31-75-31-75-75-31-75 31-31 75 31 75 75 31zM512 86q124 0 211 87t87 211q0 62-31 142t-75 150-87 131-73 97l-32 34q-12-14-32-37t-72-92-91-134-71-147-32-144q0-124 87-211t211-87z"
                      ></path>
                    </svg>
                    <span class="registered-user-profile-text57">
                      G/F Gocheco Bldg., Sta. Cruz, Manila
                    </span>
                  </div>
                  <div class="registered-user-profile-container42">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="registered-user-profile-icon58"
                    >
                      <path
                        d="M704 640c-64 64-64 128-128 128s-128-64-192-128-128-128-128-192 64-64 128-128-128-256-192-256-192 192-192 192c0 128 131.5 387.5 256 512s384 256 512 256c0 0 192-128 192-192s-192-256-256-192z"
                      ></path>
                    </svg>
                    <span class="registered-user-profile-text58">
                      Telephone: +(63) 895 945 5962
                    </span>
                  </div>
                  <div class="registered-user-profile-container43">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="registered-user-profile-icon60"
                    >
                      <path
                        d="M704 640c-64 64-64 128-128 128s-128-64-192-128-128-128-128-192 64-64 128-128-128-256-192-256-192 192-192 192c0 128 131.5 387.5 256 512s384 256 512 256c0 0 192-128 192-192s-192-256-256-192z"
                      ></path>
                    </svg>
                    <span class="registered-user-profile-text59">
                      Telephone: +(63) 906 326 3564
                    </span>
                  </div>
                  <div class="registered-user-profile-container44">
                    <svg
                      viewBox="0 0 1024 1024"
                      class="registered-user-profile-icon62"
                    >
                      <path
                        d="M854 342v-86l-342 214-342-214v86l342 212zM854 170q34 0 59 26t25 60v512q0 34-25 60t-59 26h-684q-34 0-59-26t-25-60v-512q0-34 25-60t59-26h684z"
                      ></path>
                    </svg>
                    <span class="registered-user-profile-text60">
                      Email: 5gfpharmacy@gmail.com
                    </span>
                  </div>
                </div>
              </div>
            </footer>
            <footer class="registered-user-profile-footer1">
              <img
                alt="logo"
                src="public/playground_assets/logo-rb7l-200h.png"
                class="registered-user-profile-image2"
              />
              <div class="registered-user-profile-logo-text-container1">
                <span class="registered-user-profile-text61">PHARMACY</span>
                <div class="registered-user-profile-separator4"></div>
                <span class="registered-user-profile-text62">
                  ONLINE PHARMACY STORE
                </span>
              </div>
              <span class="registered-user-profile-text63">
                © 2023 5GF Pharmacy, All Rights Reserved.
              </span>
              <div class="registered-user-profile-icon-group">
                <svg
                  viewBox="0 0 950.8571428571428 1024"
                  class="registered-user-profile-icon64"
                >
                  <path
                    d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
                  ></path></svg><svg
                  viewBox="0 0 877.7142857142857 1024"
                  class="registered-user-profile-icon66"
                >
                  <path
                    d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
                  ></path></svg><svg
                  viewBox="0 0 602.2582857142856 1024"
                  class="registered-user-profile-icon68"
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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<script type="text/javascript">
  const passwordInput = document.querySelector("#password")
  const eye = document.querySelector("#eye")

  eye.addEventListener("click", function(){
    this.classList.toggle("fa-eye-slash")
    const type = passwordInput.getAttribute("type") === "password" ? "text" : "password"
    passwordInput.setAttribute("type", type)
  })
</script>


<script type="text/javascript">
  function triggerClick(e) {
  document.querySelector('#custDP').click();
}
function displayImage(e) {
  if (e.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e){
      document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
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