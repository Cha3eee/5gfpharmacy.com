<?php
  include ('Functions/customer_registration.php');

  function CID($l=5)
  {
    return substr(str_shuffle("0123456789"), 0, $l);
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Registration - Wonderful Jolly Hummingbird</title>
    <link rel="icon" href="\5GF Pharmacy\Pharmacy Assistant\public\playground_assets\5gf pharmacy logo1-200h.png" type="image/png" /> 
    <meta
      property="og:title"
      content="Registration - Wonderful Jolly Hummingbird"
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
      <link href="./registration.css" rel="stylesheet" />

      <div class="registration-container">
        <div class="registration-main-b-container">
          <form class="registration-main-form" action="" method="POST">
            <div class="registration-container01">
              <svg viewBox="0 0 1024 1024" class="registration-icon">
                <path
                  d="M512 0c-176.732 0-320 143.268-320 320 0 320 320 704 320 704s320-384 320-704c0-176.732-143.27-320-320-320zM512 512c-106.040 0-192-85.96-192-192s85.96-192 192-192 192 85.96 192 192-85.96 192-192 192z"
                ></path>
              </svg>
              <span class="registration-text">
                G/F Gocheco Bldg., Sta. Cruz, Manila
              </span>
              <button class="registration-button button">
                <svg viewBox="0 0 1024 1024" class="registration-icon02">
                  <path
                    d="M854 342v-86l-342 214-342-214v86l342 212zM854 170q34 0 59 26t25 60v512q0 34-25 60t-59 26h-684q-34 0-59-26t-25-60v-512q0-34 25-60t59-26h684z"
                  ></path>
                </svg>
                <span class="registration-text01"><a href="mailto:5gfpharmacy@gmail.com">5gfpharmacy@gmail.com</span>
              </button>
              <a href="index.php" class="registration-navlink button">
                <svg
                  viewBox="0 0 658.2857142857142 1024"
                  class="registration-icon04"
                >
                  <path
                    d="M182.857 438.857h292.571v-109.714c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286v109.714zM658.286 493.714v329.143c0 30.286-24.571 54.857-54.857 54.857h-548.571c-30.286 0-54.857-24.571-54.857-54.857v-329.143c0-30.286 24.571-54.857 54.857-54.857h18.286v-109.714c0-140.571 115.429-256 256-256s256 115.429 256 256v109.714h18.286c30.286 0 54.857 24.571 54.857 54.857z"
                  ></path>
                </svg>
                <span class="registration-text02">Sign In</span>
              </a>
              <a href="registration.php" class="registration-navlink1 button">
                <svg
                  viewBox="0 0 731.4285714285713 1024"
                  class="registration-icon06"
                >
                  <path
                    d="M731.429 799.429c0 83.429-54.857 151.429-121.714 151.429h-488c-66.857 0-121.714-68-121.714-151.429 0-150.286 37.143-324 186.857-324 46.286 45.143 109.143 73.143 178.857 73.143s132.571-28 178.857-73.143c149.714 0 186.857 173.714 186.857 324zM585.143 292.571c0 121.143-98.286 219.429-219.429 219.429s-219.429-98.286-219.429-219.429 98.286-219.429 219.429-219.429 219.429 98.286 219.429 219.429z"
                  ></path>
                </svg>
                <span class="registration-text03">
                  <span>Create account</span>
                  <br />
                </span>
              </a>
              <button class="registration-button1 button">
                <svg viewBox="0 0 1024 1024" class="registration-icon08">
                  <path
                    d="M1004 804.571l20 178.857c1.143 10.286-2.286 20.571-9.143 28.571-6.857 7.429-17.143 12-27.429 12h-950.857c-10.286 0-20.571-4.571-27.429-12-6.857-8-10.286-18.286-9.143-28.571l20-178.857h984zM950.857 325.143l49.143 442.857h-976l49.143-442.857c2.286-18.286 17.714-32.571 36.571-32.571h146.286v73.143c0 40.571 32.571 73.143 73.143 73.143s73.143-32.571 73.143-73.143v-73.143h219.429v73.143c0 40.571 32.571 73.143 73.143 73.143s73.143-32.571 73.143-73.143v-73.143h146.286c18.857 0 34.286 14.286 36.571 32.571zM731.429 219.429v146.286c0 20-16.571 36.571-36.571 36.571s-36.571-16.571-36.571-36.571v-146.286c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286v146.286c0 20-16.571 36.571-36.571 36.571s-36.571-16.571-36.571-36.571v-146.286c0-121.143 98.286-219.429 219.429-219.429s219.429 98.286 219.429 219.429z"
                  ></path>
                </svg>
                <span class="registration-text06">
                  <span>Checkout</span>
                  <br />
                </span>
              </button>
            </div>
            <div class="registration-container02">
              <a href="guest-homepage.php" class="registration-navlink2">
                <img
                  alt="image"
                  src="public/playground_assets/image-oy1m-200h.png"
                  class="registration-image"
                />
              </a>
              <a href="guest-homepage.php" class="registration-navlink3">
                <div class="registration-logo-text-container">
                  <span class="registration-text09">PHARMACY</span>
                  <div class="registration-separator"></div>
                  <span class="registration-text10">ONLINE PHARMACY STORE</span>
                </div>
              </a>
              <input
                type="text"
                placeholder="Search for Branded or Generic Medicine...."
                class="registration-textinput input"
              />
              <button class="registration-button2 button">
                <svg
                  viewBox="0 0 950.8571428571428 1024"
                  class="registration-icon10"
                >
                  <path
                    d="M658.286 475.429c0-141.143-114.857-256-256-256s-256 114.857-256 256 114.857 256 256 256 256-114.857 256-256zM950.857 950.857c0 40-33.143 73.143-73.143 73.143-19.429 0-38.286-8-51.429-21.714l-196-195.429c-66.857 46.286-146.857 70.857-228 70.857-222.286 0-402.286-180-402.286-402.286s180-402.286 402.286-402.286 402.286 180 402.286 402.286c0 81.143-24.571 161.143-70.857 228l196 196c13.143 13.143 21.143 32 21.143 51.429z"
                  ></path>
                </svg>
              </button>
              <a href="index.php" class="registration-navlink4 button">
                <svg viewBox="0 0 1024 1024" class="registration-icon12">
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
                <span class="registration-text11">0 item</span>
              </a>
            </div>
            <div class="registration-container03">
              <a href="reg-user-homepage.php" class="registration-navlink5">
                HOME
              </a>
              <span class="registration-text12">ALL PRODUCTS</span>
              <span class="registration-text13">OTC MEDICINES</span>
              <span class="registration-text14">PRESCRIPTION</span>
              <span class="registration-text15">HOME REMEDIES</span>
              <a href="faq.html" class="registration-text16">FAQ</a>
              <a href="contact-us.html" class="registration-text17">CONTACT US</a>
              <a href="call-and-pickup.html" class="registration-text18">CALL AND PICKUP</a>
            </div>
            <div class="registration-container04">
              <div class="registration-container05">
                <span class="registration-text19">Home&nbsp; &nbsp;&gt;</span>
                <span class="registration-text20">Create New Account</span>
              </div>
              <div class="registration-separator1"></div>
            </div>
            <div class="registration-container06">
              <div class="registration-white-container">
                <div class="registration-container07">
                  <span class="registration-text21">Create an Account</span>
                  <div class="registration-separator2"></div>
                  <span class="registration-text22">New Customers</span>
                  <span class="registration-text23">
                    <span>
                      By creating an account with our store, you will be able to
                      move through the checkout process faster, store multiple
                      shipping addresses, view and track your orders in your
                    </span>
                    <br />
                    <span>
                      account and more. It also&nbsp;lets you track your order
                      history and store addresses for fast and easy checkouts.
                    </span>
                  </span>
              <form class="form-submit" action="">
                  <div class="registration-container08">
                    <span class="registration-text27">Customer ID</span>
                    <input type="text" class="registration-textinput1 input" name="custID" value="CUST-<?php echo CID(); ?>" />
                    <div class="registration-container09">
                      <span class="registration-text28">First Name</span>
                      <span class="registration-text29">Last Name</span>
                    </div>
                    <div class="registration-container10">
                      <input
                        type="text" name="custFN" 
                        value="<?php if (isset($_POST['custFN'])) { echo $_POST['custFN']; }?>"
                        class="registration-textinput2 input"
                      />
                      <input
                        type="text" name="custLN"
                        value="<?php if (isset($_POST['custLN'])) { echo $_POST['custLN']; }?>"
                        class="registration-textinput3 input"
                      />
                    </div>
                    <span class="registration-text30">Email Address</span>
                    <div class="registration-container11">
                      <input
                        type="text" name="custEmail"
                        value="<?php if (isset($_POST['custEmail'])) { echo $_POST['custEmail']; }?>" 
                        class="registration-textinput4 input"
                      />
                      <!-- <button class="registration-button3 button">
                        <span class="registration-text31">
                          <span>Verify</span>
                          <br />
                        </span>
                      </button> -->
                      <input type="submit" name="btnOTPVerify" class="registration-button3 button registration-text31" value="Verify">
                    </div>
                    <span class="registration-text34">Enter OTP</span>
                    <div class="registration-container12">
                      <input
                        type="text" name="custOTP"
                        class="registration-textinput5 input" value="<?php if (isset($_POST['custOTP'])) { echo $_POST['custOTP']; }?>" 
                      />
                      <span class="registration-text35">
                        A One Time Password will be sent to your e-mail. Please
                        check your e-mail and enter the code here to complete
                        your registration.
                      </span>
                    </div>
                    <span class="registration-text36">Username</span>
                    <input type="text" class="registration-textinput6 input" name="custUN" 
                      value="<?php if (isset($_POST['custUN'])) { echo $_POST['custUN']; }?>"/>

                    <span class="registration-text37">Password</span>
                    <input type="text" class="registration-textinput7 input" name="custPS" id="pass" 
                      value="<?php if (isset($_POST['custPS'])) { echo $_POST['custPS']; }?>"/>
                      
                    <span class="registration-text38">Confirm Password</span>
                    <input type="text" class="registration-textinput8 input" name="custCPS" id="pass" 
                      value="<?php if (isset($_POST['custCPS'])) { echo $_POST['custCPS']; }?>"/>

                    <p class="p" style="color: red;"></p>
                  </div>
                
                  <span class="registration-text39">
                    Your personal data will be used to support your experience
                    throughout this website, to manage access to your account,
                    and for other purposes described in our privacy policy.
                  </span>
                  <div class="registration-container13">
                    <input type="submit" class="registration-button4 button" name="btnCreateAcc" value="Create Account">
                    </input>
                    <button class="registration-button5 button">
                      <span class="registration-text43">
                        <span>Cancel</span>
                        <br />
                      </span>
                    </button>
                  </div>
                </form>
              </div>
              </div>
            </div>
            <footer class="registration-footer">
              <div class="registration-container14">
                <div class="registration-links-container">
                  <div class="registration-container15">
                    <div class="registration-product-container">
                      <span class="registration-text46">ABOUT US</span>
                      <div class="registration-container16">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="registration-icon16"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="registration-text47">
                          About 5GF Pharmacy
                        </span>
                      </div>
                      <div class="registration-container17">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="registration-icon18"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="registration-text48">Careers</span>
                      </div>
                      <div class="registration-container18">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="registration-icon20"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="registration-text49">
                          News &amp; Blogs
                        </span>
                      </div>
                      <div class="registration-container19">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="registration-icon22"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="registration-text50">FAQs</span>
                      </div>
                      <div class="registration-container20">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="registration-icon24"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="registration-text51">Contact Us</span>
                      </div>
                    </div>
                    <div class="registration-product-container1">
                      <span class="registration-text52">SHOP</span>
                      <div class="registration-container21">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="registration-icon26"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="registration-text53">OTC Medicines</span>
                      </div>
                      <div class="registration-container22">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="registration-icon28"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="registration-text54">
                          Prescription Medicines
                        </span>
                      </div>
                      <div class="registration-container23">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="registration-icon30"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="registration-text55">Home Remedies</span>
                      </div>
                    </div>
                    <div class="registration-product-container2">
                      <span class="registration-text56">SERVICES</span>
                      <div class="registration-container24">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="registration-icon32"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="registration-text57">Help Center</span>
                      </div>
                      <div class="registration-container25">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="registration-icon34"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="registration-text58">
                          Call &amp; Pickup
                        </span>
                      </div>
                      <div class="registration-container26">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="registration-icon36"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="registration-text59">Subscriptions</span>
                      </div>
                      <div class="registration-container27">
                        <svg
                          viewBox="0 0 1024 1024"
                          class="registration-icon38"
                        >
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="registration-text60">
                          Shipping &amp; Delivery
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="registration-container28">
                  <div class="registration-container29">
                    <svg viewBox="0 0 1024 1024" class="registration-icon40">
                      <path
                        d="M512 490q44 0 75-31t31-75-31-75-75-31-75 31-31 75 31 75 75 31zM512 86q124 0 211 87t87 211q0 62-31 142t-75 150-87 131-73 97l-32 34q-12-14-32-37t-72-92-91-134-71-147-32-144q0-124 87-211t211-87z"
                      ></path>
                    </svg>
                    <span class="registration-text61">
                      G/F Gocheco Bldg., Sta. Cruz, Manila
                    </span>
                  </div>
                  <div class="registration-container30">
                    <svg viewBox="0 0 1024 1024" class="registration-icon42">
                      <path
                        d="M704 640c-64 64-64 128-128 128s-128-64-192-128-128-128-128-192 64-64 128-128-128-256-192-256-192 192-192 192c0 128 131.5 387.5 256 512s384 256 512 256c0 0 192-128 192-192s-192-256-256-192z"
                      ></path>
                    </svg>
                    <span class="registration-text62">
                      Telephone: +(63) 895 945 5962
                    </span>
                  </div>
                  <div class="registration-container31">
                    <svg viewBox="0 0 1024 1024" class="registration-icon44">
                      <path
                        d="M704 640c-64 64-64 128-128 128s-128-64-192-128-128-128-128-192 64-64 128-128-128-256-192-256-192 192-192 192c0 128 131.5 387.5 256 512s384 256 512 256c0 0 192-128 192-192s-192-256-256-192z"
                      ></path>
                    </svg>
                    <span class="registration-text63">
                      Telephone: +(63) 906 326 3564
                    </span>
                  </div>
                  <div class="registration-container32">
                    <svg viewBox="0 0 1024 1024" class="registration-icon46">
                      <path
                        d="M854 342v-86l-342 214-342-214v86l342 212zM854 170q34 0 59 26t25 60v512q0 34-25 60t-59 26h-684q-34 0-59-26t-25-60v-512q0-34 25-60t59-26h684z"
                      ></path>
                    </svg>
                    <span class="registration-text64">
                      Email: 5gfpharmacy@gmail.com
                    </span>
                  </div>
                </div>
              </div>
            </footer>
            <footer class="registration-footer1">
              <img
                alt="logo"
                src="public/playground_assets/logo-rb7l-200h.png"
                class="registration-image1"
              />
              <div class="registration-logo-text-container1">
                <span class="registration-text65">PHARMACY</span>
                <div class="registration-separator3"></div>
                <span class="registration-text66">ONLINE PHARMACY STORE</span>
              </div>
              <span class="registration-text67">
                © 2023 5GF Pharmacy, All Rights Reserved.
              </span>
              <div class="registration-icon-group">
                <svg
                  viewBox="0 0 950.8571428571428 1024"
                  class="registration-icon48"
                >
                  <path
                    d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
                  ></path></svg
                ><svg
                  viewBox="0 0 877.7142857142857 1024"
                  class="registration-icon50"
                >
                  <path
                    d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
                  ></path></svg
                ><svg
                  viewBox="0 0 602.2582857142856 1024"
                  class="registration-icon52"
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

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">
  $(function () {
      "use strict";
      $("#pass").last().on("blur", function () {
          if ($(this).val() === $("#pass").first().val()) {
              $(".p").text("strong password");
          } else {
              $(".p").text("the passwords doesn't match");
          }
      });
  });
</script> -->