<?php 
  include ('Functions/customer_profile.php');
  include ('Functions/customer_scrud.php');
  session_start();

  $_SESSION['custID'] = $custID;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact-Us - Wonderful Jolly Hummingbird</title>
    <meta
      property="og:title"
      content="Contact-Us - Wonderful Jolly Hummingbird"
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
      <script
        type="text/javascript"
        src="https://unpkg.com/dangerous-html@0.1.12/dist/default/lib.umd.js"
      ></script>
      <link href="./contact-us.css" rel="stylesheet" />
      <link href="./reg-user-homepage.css" rel="stylesheet" />

      <div class="contact-us-container">
        <div class="contact-us-main-b-container">
          <form class="contact-us-main-form">
            <div class="contact-us-container01">
              <svg viewBox="0 0 1024 1024" class="contact-us-icon">
                <path
                  d="M512 0c-176.732 0-320 143.268-320 320 0 320 320 704 320 704s320-384 320-704c0-176.732-143.27-320-320-320zM512 512c-106.040 0-192-85.96-192-192s85.96-192 192-192 192 85.96 192 192-85.96 192-192 192z"
                ></path>
              </svg>
              <span class="contact-us-text">
                G/F Gocheco Bldg., Sta. Cruz, Manila
              </span>
              <button class="contact-us-button button">
                <!-- <svg viewBox="0 0 1024 1024" class="contact-us-icon02">
                  <path
                    d="M854 342v-86l-342 214-342-214v86l342 212zM854 170q34 0 59 26t25 60v512q0 34-25 60t-59 26h-684q-34 0-59-26t-25-60v-512q0-34 25-60t59-26h684z"
                  ></path>
                </svg> -->
              </button>
              <a onclick="confirmLogout()" class="contact-us-navlink button">
                <svg viewBox="0 0 1024 1024" class="contact-us-icon04">
                  <path
                    d="M768 640v-128h-320v-128h320v-128l192 192zM704 576v256h-320v192l-384-192v-832h704v320h-64v-256h-512l256 128v576h256v-192z"
                  ></path>
                </svg>
                <span class="contact-us-text02">
                  <span>Logout</span>
                  <br />
                </span>
              </a>
              <a href="registered-user-profile.php" class="contact-us-navlink1 button">
                <!-- <svg
                  viewBox="0 0 731.4285714285713 1024"
                  class="contact-us-icon06"
                >
                  <path
                    d="M731.429 799.429c0 83.429-54.857 151.429-121.714 151.429h-488c-66.857 0-121.714-68-121.714-151.429 0-150.286 37.143-324 186.857-324 46.286 45.143 109.143 73.143 178.857 73.143s132.571-28 178.857-73.143c149.714 0 186.857 173.714 186.857 324zM585.143 292.571c0 121.143-98.286 219.429-219.429 219.429s-219.429-98.286-219.429-219.429 98.286-219.429 219.429-219.429 219.429 98.286 219.429 219.429z"
                  ></path>
                </svg> -->
                <svg
                  viewBox="0 0 731.4285714285713 1024"
                  class="reg-user-homepage-icon04"
                >
                  <path
                    d="M731.429 799.429c0 83.429-54.857 151.429-121.714 151.429h-488c-66.857 0-121.714-68-121.714-151.429 0-150.286 37.143-324 186.857-324 46.286 45.143 109.143 73.143 178.857 73.143s132.571-28 178.857-73.143c149.714 0 186.857 173.714 186.857 324zM585.143 292.571c0 121.143-98.286 219.429-219.429 219.429s-219.429-98.286-219.429-219.429 98.286-219.429 219.429-219.429 219.429 98.286 219.429 219.429z"
                  ></path>
                </svg>
                <span class="contact-us-text03">
                  <span>View Profile</span>
                  <br />
                </span>
              </a>
              <button class="contact-us-button1 button">
                <svg
                  viewBox="0 0 731.4285714285713 1024"
                  class="contact-us-icon08"
                >
                  <path
                    d="M731.429 799.429c0 83.429-54.857 151.429-121.714 151.429h-488c-66.857 0-121.714-68-121.714-151.429 0-150.286 37.143-324 186.857-324 46.286 45.143 109.143 73.143 178.857 73.143s132.571-28 178.857-73.143c149.714 0 186.857 173.714 186.857 324zM585.143 292.571c0 121.143-98.286 219.429-219.429 219.429s-219.429-98.286-219.429-219.429 98.286-219.429 219.429-219.429 219.429 98.286 219.429 219.429z"
                  ></path>
                </svg>
                <span class="contact-us-text06">
                  <span>Checkout</span>
                  <br />
                </span>
              </button>
              <a href="" class="reg-user-homepage-navlink3 button">
                <span class="reg-user-homepage-text010">
                  <span>Hello, <?php echo $custUNE ?>!</span>
                  <br />
                </span>
              </a>
            </div>
            <div class="contact-us-container02">
              <a href="reg-user-homepage.php" class="contact-us-navlink2">
                <img
                  alt="image"
                  src="public/playground_assets/image-oy1m-200h.png"
                  class="contact-us-image"
                />
              </a>
              <a href="reg-user-homepage.php" class="contact-us-navlink3">
                <div class="contact-us-logo-text-container">
                  <span class="contact-us-text09">PHARMACY</span>
                  <div class="contact-us-separator"></div>
                  <span class="contact-us-text10">ONLINE PHARMACY STORE</span>
                </div>
              </a>
              <input
                type="text"
                placeholder="Search for Branded or Generic Medicine...."
                class="contact-us-textinput input"
              />
              <button class="contact-us-button2 button">
                <svg
                  viewBox="0 0 950.8571428571428 1024"
                  class="contact-us-icon10"
                >
                  <path
                    d="M658.286 475.429c0-141.143-114.857-256-256-256s-256 114.857-256 256 114.857 256 256 256 256-114.857 256-256zM950.857 950.857c0 40-33.143 73.143-73.143 73.143-19.429 0-38.286-8-51.429-21.714l-196-195.429c-66.857 46.286-146.857 70.857-228 70.857-222.286 0-402.286-180-402.286-402.286s180-402.286 402.286-402.286 402.286 180 402.286 402.286c0 81.143-24.571 161.143-70.857 228l196 196c13.143 13.143 21.143 32 21.143 51.429z"
                  ></path>
                </svg>
              </button>
              <a href="cart-page.php" class="contact-us-button3 button">
                <svg viewBox="0 0 1024 1024" class="contact-us-icon12">
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
                <span class="contact-us-text11" id="cart-item"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item
              </a>
            </div>
            <div class="contact-us-container03">
              <a href="reg-user-homepage.php" class="contact-us-navlink4">HOME</a>
              <span class="contact-us-text12">ALL PRODUCTS</span>
              <span class="contact-us-text13">OTC MEDICINES</span>
              <span class="contact-us-text14">PRESCRIPTION</span>
              <span class="contact-us-text15">HOME REMEDIES</span>
              <a href="reg-user-faq.php" class="contact-us-text16">FAQ</a>
              <a href="reg-user-contact-us.php" class="contact-us-text17">CONTACT US</a>
              <a href="reg-user-call-and-pickup.php" class="contact-us-text18">CALL AND PICKUP</a>
            </div>
            <div class="contact-us-container04">
              <div class="contact-us-container05">
                <span class="contact-us-text19">Home&nbsp; &nbsp;&gt;</span>
                <span class="contact-us-text20">Contact Us</span>
              </div>
              <div class="contact-us-separator1"></div>
            </div>
            <div class="contact-us-container06">
              <div class="contact-us-white-container">
                <div class="contact-us-container07">
                  <span class="contact-us-text21">Contact Us</span>
                  <div class="contact-us-container08">
                    <span class="contact-us-text22">
                      <span>
                        If you are experiencing issues or have questions not
                        found in our
                      </span>
                      <a href="reg-user-faq.php" class="contact-us-navlink5">
                        Frequently Asked Questions
                      </a>
                      <a href="reg-user-faq.php" class="contact-us-navlink6">,</a>
                      <span>let us know by filling out the form below.</span>
                    </span>
                  </div>
                </div>
                <div class="contact-us-container09">
                  <div class="contact-us-container10">
                    <div class="contact-us-container11">
                      <span class="contact-us-text25">
                        Tell us what you think about our web site, our products,
                        or anything else that comes to mind. We welcome all of
                        your comments and suggestions.
                      </span>
                      <input
                        type="text"
                        placeholder="Name *"
                        class="contact-us-textinput1 input"
                      />
                      <input
                        type="text"
                        placeholder="Contact No. *"
                        class="contact-us-textinput2 input"
                      />
                      <input
                        type="text"
                        placeholder="Email *"
                        class="contact-us-textinput3 input"
                      />
                      <input
                        type="text"
                        placeholder="Your Message *"
                        class="contact-us-textinput4 input"
                      />
                      <button class="contact-us-button4 button">
                        <span class="contact-us-text26">
                          <span>Send</span>
                          <br />
                        </span>
                      </button>
                    </div>
                  </div>
                  <div class="contact-us-container12">
                    <div class="contact-us-div">
                     <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123489.27842959014!2d120.9473307839264!3d14.710332841512255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b1b519841b5f%3A0x5e770e225042d1a!2sCaloocan%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1681458053859!5m2!1sen!2sph' width='510' height='640' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="contact-us-container13">
              <div class="contact-us-container14">
                <span class="contact-us-text29">Head Office:</span>
                <span class="contact-us-text30">
                  #24 Soriano Ave., cor. C. P. Garcia Ave., Bagumbayan, Quezon
                  City, 1110 Metro Manila, Philippines
                </span>
                <div class="contact-us-container15">
                  <div class="contact-us-container16">
                    <svg
                      viewBox="0 0 877.7142857142857 1024"
                      class="contact-us-icon16"
                    >
                      <path
                        d="M731.429 681.714c0-2.857 0-6.286-1.143-9.143-3.429-10.286-86.857-52.571-102.857-61.714-10.857-6.286-24-18.857-37.143-18.857-25.143 0-62.286 74.857-84.571 74.857-11.429 0-25.714-10.286-36-16-75.429-42.286-127.429-94.286-169.714-169.714-5.714-10.286-16-24.571-16-36 0-22.286 74.857-59.429 74.857-84.571 0-13.143-12.571-26.286-18.857-37.143-9.143-16-51.429-99.429-61.714-102.857-2.857-1.143-6.286-1.143-9.143-1.143-14.857 0-44 6.857-57.714 12.571-37.714 17.143-65.143 89.143-65.143 128.571 0 38.286 15.429 73.143 28.571 108.571 45.714 125.143 181.714 261.143 306.857 306.857 35.429 13.143 70.286 28.571 108.571 28.571 39.429 0 111.429-27.429 128.571-65.143 5.714-13.714 12.571-42.857 12.571-57.714zM877.714 237.714v548.571c0 90.857-73.714 164.571-164.571 164.571h-548.571c-90.857 0-164.571-73.714-164.571-164.571v-548.571c0-90.857 73.714-164.571 164.571-164.571h548.571c90.857 0 164.571 73.714 164.571 164.571z"
                      ></path>
                    </svg>
                    <span class="contact-us-text31">+(63) 895 945 5962</span>
                  </div>
                  <div class="contact-us-container17">
                    <svg viewBox="0 0 1024 1024" class="contact-us-icon18">
                      <path
                        d="M480 64c-265.096 0-480 214.904-480 480 0 265.098 214.904 480 480 480 265.098 0 480-214.902 480-480 0-265.096-214.902-480-480-480zM751.59 704c8.58-40.454 13.996-83.392 15.758-128h127.446c-3.336 44.196-13.624 87.114-30.68 128h-112.524zM208.41 384c-8.58 40.454-13.996 83.392-15.758 128h-127.444c3.336-44.194 13.622-87.114 30.678-128h112.524zM686.036 384c9.614 40.962 15.398 83.854 17.28 128h-191.316v-128h174.036zM512 320v-187.338c14.59 4.246 29.044 11.37 43.228 21.37 26.582 18.74 52.012 47.608 73.54 83.486 14.882 24.802 27.752 52.416 38.496 82.484h-155.264zM331.232 237.516c21.528-35.878 46.956-64.748 73.54-83.486 14.182-10 28.638-17.124 43.228-21.37v187.34h-155.264c10.746-30.066 23.616-57.68 38.496-82.484zM448 384v128h-191.314c1.88-44.146 7.666-87.038 17.278-128h174.036zM95.888 704c-17.056-40.886-27.342-83.804-30.678-128h127.444c1.762 44.608 7.178 87.546 15.758 128h-112.524zM256.686 576h191.314v128h-174.036c-9.612-40.96-15.398-83.854-17.278-128zM448 768v187.34c-14.588-4.246-29.044-11.372-43.228-21.37-26.584-18.74-52.014-47.61-73.54-83.486-14.882-24.804-27.75-52.418-38.498-82.484h155.266zM628.768 850.484c-21.528 35.876-46.958 64.746-73.54 83.486-14.184 9.998-28.638 17.124-43.228 21.37v-187.34h155.266c-10.746 30.066-23.616 57.68-38.498 82.484zM512 704v-128h191.314c-1.88 44.146-7.666 87.040-17.28 128h-174.034zM767.348 512c-1.762-44.608-7.178-87.546-15.758-128h112.524c17.056 40.886 27.344 83.806 30.68 128h-127.446zM830.658 320h-95.9c-18.638-58.762-44.376-110.294-75.316-151.428 42.536 20.34 81.058 47.616 114.714 81.272 21.48 21.478 40.362 44.938 56.502 70.156zM185.844 249.844c33.658-33.658 72.18-60.932 114.714-81.272-30.942 41.134-56.676 92.666-75.316 151.428h-95.898c16.138-25.218 35.022-48.678 56.5-70.156zM129.344 768h95.898c18.64 58.762 44.376 110.294 75.318 151.43-42.536-20.34-81.058-47.616-114.714-81.274-21.48-21.478-40.364-44.938-56.502-70.156zM774.156 838.156c-33.656 33.658-72.18 60.934-114.714 81.274 30.942-41.134 56.678-92.668 75.316-151.43h95.9c-16.14 25.218-35.022 48.678-56.502 70.156z"
                      ></path>
                    </svg>
                    <span class="contact-us-text32">www.5GFpharmacy.com</span>
                  </div>
                </div>
                <div class="contact-us-container18">
                  <div class="contact-us-container19">
                    <svg viewBox="0 0 1024 1024" class="contact-us-icon20">
                      <path
                        d="M853.31 0h-682.62c-93.88 0-170.69 76.784-170.69 170.658v682.656c0 93.876 76.81 170.686 170.69 170.686h682.622c93.938 0 170.688-76.81 170.688-170.686v-682.656c0-93.874-76.75-170.658-170.69-170.658zM256 256h512c9.138 0 18.004 1.962 26.144 5.662l-282.144 329.168-282.144-329.17c8.14-3.696 17.006-5.66 26.144-5.66zM192 704v-384c0-1.34 0.056-2.672 0.14-4l187.664 218.94-185.598 185.6c-1.444-5.338-2.206-10.886-2.206-16.54zM768 768h-512c-5.654 0-11.202-0.762-16.54-2.206l182.118-182.118 90.422 105.496 90.424-105.494 182.116 182.118c-5.34 1.442-10.886 2.204-16.54 2.204zM832 704c0 5.654-0.762 11.2-2.206 16.54l-185.598-185.598 187.664-218.942c0.084 1.328 0.14 2.66 0.14 4v384z"
                      ></path>
                    </svg>
                    <span class="contact-us-text33">5gfpharmacy@gmail.com</span>
                  </div>
                  <div class="contact-us-container20">
                    <svg
                      viewBox="0 0 877.7142857142857 1024"
                      class="contact-us-icon22"
                    >
                      <path
                        d="M713.143 73.143c90.857 0 164.571 73.714 164.571 164.571v548.571c0 90.857-73.714 164.571-164.571 164.571h-107.429v-340h113.714l17.143-132.571h-130.857v-84.571c0-38.286 10.286-64 65.714-64l69.714-0.571v-118.286c-12-1.714-53.714-5.143-101.714-5.143-101.143 0-170.857 61.714-170.857 174.857v97.714h-114.286v132.571h114.286v340h-304c-90.857 0-164.571-73.714-164.571-164.571v-548.571c0-90.857 73.714-164.571 164.571-164.571h548.571z"
                      ></path></svg
                    ><svg
                      viewBox="0 0 877.7142857142857 1024"
                      class="contact-us-icon24"
                    >
                      <path
                        d="M731.429 348.571c-21.714 9.714-44.571 16-69.143 19.429 25.143-14.857 44-38.857 53.143-66.857-23.429 13.714-49.143 24-76.571 29.143-21.714-23.429-53.143-37.714-87.429-37.714-66.286 0-120 53.714-120 120 0 9.143 0.571 18.857 2.857 27.429-100-5.143-188.571-52.571-248-125.714-10.286 17.714-16.571 38.857-16.571 60.571 0 41.714 19.429 78.286 52 100-20-0.571-38.857-6.286-57.143-14.857v1.143c0 58.286 44 106.857 98.857 117.714-10.286 2.857-18.286 4.571-29.143 4.571-7.429 0-14.857-1.143-22.286-2.286 15.429 47.429 59.429 82.286 112 83.429-41.143 32-92.571 51.429-149.143 51.429-9.714 0-19.429-0.571-28.571-1.714 53.143 33.714 116 53.714 184 53.714 220.571 0 341.714-182.857 341.714-341.714 0-5.143 0-10.286-0.571-15.429 23.429-16.571 44-37.714 60-62.286zM877.714 237.714v548.571c0 90.857-73.714 164.571-164.571 164.571h-548.571c-90.857 0-164.571-73.714-164.571-164.571v-548.571c0-90.857 73.714-164.571 164.571-164.571h548.571c90.857 0 164.571 73.714 164.571 164.571z"
                      ></path></svg
                    ><svg
                      viewBox="0 0 877.7142857142857 1024"
                      class="contact-us-icon26"
                    >
                      <path
                        d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
                      ></path>
                    </svg>
                    <span class="contact-us-text34">5GF Pharmacy</span>
                  </div>
                </div>
                <div class="contact-us-container21">
                  <svg viewBox="0 0 1024 1024" class="contact-us-icon28">
                    <path
                      d="M938 726v-300h-170v300h170zM982 342q18 0 30 12t12 30v426q0 18-12 31t-30 13h-256q-18 0-31-13t-13-31v-426q0-18 13-30t31-12h256zM170 256v470h428v128h-598v-128h86v-470q0-34 25-60t59-26h768v86h-768z"
                    ></path>
                  </svg>
                  <span class="contact-us-text35">+(63) 906 326 3564</span>
                </div>
                <span class="contact-us-text36">You may also reach us at:</span>
                <span class="contact-us-text37">
                  <span class="contact-us-text38">wecare@5gfpharmacy.com</span>
                  <span class="contact-us-text39"></span>
                  <span>for customer feedback, customer experience and at</span>
                  <span class="contact-us-text41">
                    here4you@5gfpharmacy.com
                  </span>
                  <span>
                    for customer service, pharmacy counseling needs, product
                    availability, promo offers, prices, suki points queries.
                  </span>
                </span>
              </div>
            </div>
            <footer class="contact-us-footer">
              <div class="contact-us-container22">
                <div class="contact-us-links-container">
                  <div class="contact-us-container23">
                    <div class="contact-us-product-container">
                      <span class="contact-us-text43">ABOUT US</span>
                      <div class="contact-us-container24">
                        <svg viewBox="0 0 1024 1024" class="contact-us-icon30">
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="contact-us-text44">
                          About 5GF Pharmacy
                        </span>
                      </div>
                      <div class="contact-us-container25">
                        <svg viewBox="0 0 1024 1024" class="contact-us-icon32">
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="contact-us-text45">Careers</span>
                      </div>
                      <div class="contact-us-container26">
                        <svg viewBox="0 0 1024 1024" class="contact-us-icon34">
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="contact-us-text46">News &amp; Blogs</span>
                      </div>
                      <div class="contact-us-container27">
                        <svg viewBox="0 0 1024 1024" class="contact-us-icon36">
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="contact-us-text47">FAQs</span>
                      </div>
                      <div class="contact-us-container28">
                        <svg viewBox="0 0 1024 1024" class="contact-us-icon38">
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="contact-us-text48">Contact Us</span>
                      </div>
                    </div>
                    <div class="contact-us-product-container1">
                      <span class="contact-us-text49">SHOP</span>
                      <div class="contact-us-container29">
                        <svg viewBox="0 0 1024 1024" class="contact-us-icon40">
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="contact-us-text50">OTC Medicines</span>
                      </div>
                      <div class="contact-us-container30">
                        <svg viewBox="0 0 1024 1024" class="contact-us-icon42">
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="contact-us-text51">
                          Prescription Medicines
                        </span>
                      </div>
                      <div class="contact-us-container31">
                        <svg viewBox="0 0 1024 1024" class="contact-us-icon44">
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="contact-us-text52">Home Remedies</span>
                      </div>
                    </div>
                    <div class="contact-us-product-container2">
                      <span class="contact-us-text53">SERVICES</span>
                      <div class="contact-us-container32">
                        <svg viewBox="0 0 1024 1024" class="contact-us-icon46">
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="contact-us-text54">Help Center</span>
                      </div>
                      <div class="contact-us-container33">
                        <svg viewBox="0 0 1024 1024" class="contact-us-icon48">
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="contact-us-text55">Call &amp; Pickup</span>
                      </div>
                      <div class="contact-us-container34">
                        <svg viewBox="0 0 1024 1024" class="contact-us-icon50">
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="contact-us-text56">Subscriptions</span>
                      </div>
                      <div class="contact-us-container35">
                        <svg viewBox="0 0 1024 1024" class="contact-us-icon52">
                          <path d="M342 214l468 298-468 298v-596z"></path>
                        </svg>
                        <span class="contact-us-text57">
                          Shipping &amp; Delivery
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="contact-us-container36">
                  <div class="contact-us-container37">
                    <svg viewBox="0 0 1024 1024" class="contact-us-icon54">
                      <path
                        d="M512 490q44 0 75-31t31-75-31-75-75-31-75 31-31 75 31 75 75 31zM512 86q124 0 211 87t87 211q0 62-31 142t-75 150-87 131-73 97l-32 34q-12-14-32-37t-72-92-91-134-71-147-32-144q0-124 87-211t211-87z"
                      ></path>
                    </svg>
                    <span class="contact-us-text58">
                      G/F Gocheco Bldg., Sta. Cruz, Manila
                    </span>
                  </div>
                  <div class="contact-us-container38">
                    <svg viewBox="0 0 1024 1024" class="contact-us-icon56">
                      <path
                        d="M704 640c-64 64-64 128-128 128s-128-64-192-128-128-128-128-192 64-64 128-128-128-256-192-256-192 192-192 192c0 128 131.5 387.5 256 512s384 256 512 256c0 0 192-128 192-192s-192-256-256-192z"
                      ></path>
                    </svg>
                    <span class="contact-us-text59">
                      Telephone: +(63) 895 945 5962
                    </span>
                  </div>
                  <div class="contact-us-container39">
                    <svg viewBox="0 0 1024 1024" class="contact-us-icon58">
                      <path
                        d="M704 640c-64 64-64 128-128 128s-128-64-192-128-128-128-128-192 64-64 128-128-128-256-192-256-192 192-192 192c0 128 131.5 387.5 256 512s384 256 512 256c0 0 192-128 192-192s-192-256-256-192z"
                      ></path>
                    </svg>
                    <span class="contact-us-text60">
                      Telephone: +(63) 906 326 3564
                    </span>
                  </div>
                  <div class="contact-us-container40">
                    <svg viewBox="0 0 1024 1024" class="contact-us-icon60">
                      <path
                        d="M854 342v-86l-342 214-342-214v86l342 212zM854 170q34 0 59 26t25 60v512q0 34-25 60t-59 26h-684q-34 0-59-26t-25-60v-512q0-34 25-60t59-26h684z"
                      ></path>
                    </svg>
                    <span class="contact-us-text61">
                      Email: 5gfpharmacy@gmail.com
                    </span>
                  </div>
                </div>
              </div>
            </footer>
            <footer class="contact-us-footer1">
              <img
                alt="logo"
                src="public/playground_assets/logo-rb7l-200h.png"
                class="contact-us-image1"
              />
              <div class="contact-us-logo-text-container1">
                <span class="contact-us-text62">PHARMACY</span>
                <div class="contact-us-separator2"></div>
                <span class="contact-us-text63">ONLINE PHARMACY STORE</span>
              </div>
              <span class="contact-us-text64">
                © 2023 5GF Pharmacy, All Rights Reserved.
              </span>
              <div class="contact-us-icon-group">
                <svg
                  viewBox="0 0 950.8571428571428 1024"
                  class="contact-us-icon62"
                >
                  <path
                    d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
                  ></path></svg
                ><svg
                  viewBox="0 0 877.7142857142857 1024"
                  class="contact-us-icon64"
                >
                  <path
                    d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
                  ></path></svg
                ><svg
                  viewBox="0 0 602.2582857142856 1024"
                  class="contact-us-icon66"
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