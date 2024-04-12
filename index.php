<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="x-icon" href="./Images/icon.png">
  <link rel="stylesheet" href="./css/all.min.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/main.css">
  <title>HS</title>
</head>

<body>
  <?php
  require_once('pdo.php');

// asdasd
  ?>
  <!-- Start login page -->
  <div class="login-page position-relative" id="log-in">
    <div class="container-fluid">
      <div class="row content">
        <div class="image p-5 d-flex justify-content-center align-items-center col-xl-5">
          <img class="img-fluid" src="./Images/login.png" alt="">
        </div>
        <div class="login-form position-relative p-0 col-xl-7 d-flex flex-column justify-content-center align-items-center">
          <div class="head-text text-center mb-5">
            <h2>Hello Again</h2>
            <span>Login To Discover Newest Products</span>
          </div>
          <form method="post" action="login.php">
            <p class="fs-6 text-danger not-valid d-none">Please enter a valid email</p>
            <p class="fs-6 text-danger should-sign d-none">You Should sign up first</p>
            <p class="fs-6 text-danger empty d-none">Please enter a non empty email</p>
            <p class="fs-6 text-danger not-exist d-none">email does not exist</p>
            <p class="fs-6 text-danger Pss-less6 d-none">Password Must be more than 6 chars</p>
            <p class="fs-6 text-danger Pss-empty d-none">Please enter a non empty password</p>
            <p class="fs-6 text-danger all-empty d-none">Please enter a non empty values</p>
            <div class="input-container position-relative d-flex justify-content-center">
              <input class="position-relative overflow-hidden d-block mb-3" name="email" type="text" placeholder="Email" required />
              <label class="position-absolute" for="email-login">Email</label>
              <span class="text-white fw-bold d-flex justify-content-center align-items-center">@</span>
            </div>
            <div class="input-container position-relative d-flex justify-content-center">
              <input class="position-relative overflow-hidden d-block" name="password" type="password" placeholder="Password" required />
              <label class="position-absolute" for="password">Password</label>
              <span class="text-white fw-bold d-flex justify-content-center align-items-center"><i class="fa-solid fa-lock"></i></span>
            </div>
            <div class="input-reset d-flex justify-content-between mt-5">
              <div class="checkbox"><input type="checkbox" id="remeber-me"> <label for="remeber-me">Remember me</label>
              </div>
              <a href="" id="forget-btn">Forgot password? </a>
            </div>
            <div class="d-grid gap-3 mt-5">
              <input class="btn text-white" type="submit" value="Login" id="log-btn" />
              <button class="btn" id="sign-up"><i class="fa-brands fa-google"></i> Sign in With Google</button>
            </div>
          </form>
          <div class="Sign-up gap-4 d-flex justify-content-between position-absolute">
            <span>Don't have an account yet?</span>
            <a href="" id="sign-btn">Sign Up</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- End login page -->
  <!-- Start forget -->
  <div class="login-page position-relative" id="forget-page" style="display:none;">
    <div class="container-fluid">
      <div class="row content">
        <div class="image p-5 d-flex justify-content-center align-items-center col-xl-5">
          <img class="img-fluid" src="./Images/ForgotPassword.png" alt="">
        </div>
        <div class="login-form position-relative p-0 col-xl-7 d-flex flex-column justify-content-center align-items-center">
          <div class="back-button position-absolute overflow-hidden rounded-circle" id="back-button">
            <button class="btn"><i class="fa-solid fa-arrow-left"></i></button>
          </div>
          <div class="forget-text text-center mb-5">
            <h2>Forget Your Password?</h2>
            <span>Let's see how can we recover it</span>
          </div>
          <form class="forget">
            <div class="input-container position-relative d-flex justify-content-center">
              <input class="position-relative overflow-hidden d-block mb-3" id="email" type="text" placeholder="Email" required />
              <label class="position-absolute" for="email">Enter Your Email</label>
              <span style="cursor: pointer;" class="text-white fw-bold d-flex justify-content-center align-items-center"><i class="fa-solid fa-arrow-right"></i></span>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- end forget -->
  <!-- Start sign-Up page -->
  <div class="login-page position-relative sign-Page" id="sign-Page" style="display: none;">
    <div class="container-fluid">
      <div class="row content">
        <div class="image p-5 d-flex justify-content-center align-items-center col-xl-5">
          <img class="img-fluid" src="./Images/Signup.png" alt="">
        </div>
        <div class="login-form position-relative p-0 col-xl-7 d-flex flex-column justify-content-center align-items-center">
          <div class="back-button position-absolute overflow-hidden rounded-circle" id="return-btn">
            <button class="btn"><i class="fa-solid fa-arrow-left"></i></button>
          </div>
          <div class="sign-up-text text-center mb-5">
            <h2>Sign Up</h2>
            <span>Discover all of our products now</span>
          </div>
          <form class="sign-up d-grid flex-row gap-2" method="post" action="inscription.php" enctype="multipart/form-data">
            <p class="fs-6 text-success Saved-succesfuly text-center d-none">Saved Succesfuly</p>
            <p class="fs-6 text-danger Pss-less d-none">Password Must be more than 6 chars</p>
            <p class="fs-6 text-danger pass-check d-none">Passwords do not match</p>
            <p class="fs-6 text-danger empty-name d-none">Please enter a non empty name</p>
            <p class="fs-6 text-danger e-not-valid d-none">Please enter a valid email</p>
            <div class="row">
              <div class="input-only position-relative d-flex justify-content-center col">
                <input class="position-relative overflow-hidden d-block mb-3" name="nom" type="text" placeholder="Email" required />
                <label class="position-absolute" for="email" style="left:25px">First Name</label>
              </div>
              <div class="input-only position-relative d-flex justify-content-center col">
                <input class="position-relative overflow-hidden d-block mb-3" name="prenom" type="text" placeholder="Email" required />
                <label class="position-absolute" for="email" style="left:25px">Last Name</label>
              </div>
            </div>
            <div class="input-only position-relative d-flex justify-content-center col">
              <input class="position-relative overflow-hidden d-block mb-3" name="email" type="text" placeholder="Email" required />
              <label class="position-absolute" for="email">Email</label>
            </div>
            <div class="input-container position-relative d-flex justify-content-center col">
              <input class="position-relative overflow-hidden d-block mb-3" name="password" type="password" placeholder="Enter Password" required />
              <label class="position-absolute" for="new-pass">Enter Password</label>
              <span style="cursor: pointer;" class="text-white fw-bold d-flex justify-content-center align-items-center"><i class="fa-solid fa-eye eyes"></i> <i class="fa-solid fa-eye-slash d-none"></i></span>
            </div>
            <div class="input-container position-relative d-flex justify-content-center col">
              <input class="position-relative overflow-hidden d-block mb-3" id="ree-enter" type="password" placeholder="Re-Enter Password" required />
              <label class="position-absolute" for="ree-enter">Re-Enter Password</label>
              <span style="cursor: pointer;" class="text-white fw-bold d-flex justify-content-center align-items-center"><i class="fa-solid fa-eye eyes"></i> <i class="fa-solid fa-eye-slash d-none"></i></span>
            </div>
            <button class="btn text-white col" type="submit">Sign Up Now</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- End sign-Up page -->
  <!-- Start products -->
  <div class="product-Page" style="display:none;" id="products-page">
    <!-- Start navbar -->
    <nav class=" navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#"><img class="logo-img" src="./Images/icon.png" alt=""><span class="logo-text text-uppercase">HOVERSTORE</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""><i class="fa-solid fa-list"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
            <li class="nav-item me-5">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item me-5">
              <a class="nav-link active" aria-current="page" href="#">Shop</a>
            </li>
            <li class="nav-item me-5">
              <a class="nav-link active" aria-current="page" href="#">Men</a>
            </li>
            <li class="nav-item me-5">
              <a class="nav-link active" aria-current="page" href="#">Accessoires</a>
            </li>
          </ul>
          <div class="right-side"><i class="fa-solid fa-cart-shopping"></i><span class="fs-4 fw-normal ms-1 me-1">|</span><i class="fa-solid fa-user"></i><span class="user-name ms-2 me-2">Zeyad</span><i class="fa-solid fa-caret-down"></i></div>
        </div>
      </div>
    </nav>
    <!-- end navbar -->
    <!-- Start porducts -->
    <div class="porducts m-3">
      <div class="container-lg">
        <div class="row justify-content-center">
          <div class="mobile col-lg-3 col-md-5 overflow-hidden d-flex flex-column">
            <div class="text">
              <span class="sp-orange title rounded-2">Mobile</span>
              <h3 class="mt-3 mb-0">Iphone 14 Pro Max</h3>
              <p class="text-secondary mb-4">Don't Miss This Opportunity</p>
              <p class="grap-it">Now Grap it At</p>
              <div class="price d-flex">
                <span class="new-price me-3">$999.99</span><span class="old price text-secondary"><s>$1099.99</s></span>
              </div>
            </div>
            <div class="iphone d-flex justify-content-center mt-3">
              <img class="img-fluid" src="./Images/iphone.png" alt="">
            </div>
          </div>
          <div class="camera col-lg-5 col-md-5 p-3 d-flex">
            <div class="content d-flex align-self-center">
              <div class="text">
                <p class="text-uppercase">summer sale upto 70%</p>
                <h3 class="collection mt-3 mb-2">The <b>Largest</b><br>Camera Collection online</h3>
                <button class="shop-now">Shop Now <span class="ms-2"><i class="fa-solid fa-arrow-right-long"></i></span></button>
              </div>
              <div class="cam-img overflow-hidden d-flex align-self-center"><img class="img-fluid" src="./Images/camera.png" alt=""></div>
            </div>
          </div>
          <div class="last-2products col-lg-3 col-md-12 p-0 d-flex flex-column overflow-hidden">
            <div class="headphone p-3 d-flex m-0">
              <div class="content d-flex align-self-center">
                <div class="text">
                  <h3 class="collection mt-3 mb-2">JBL <b>Music</b><br>Speaker</h3>
                  <p class="text-secondary mb-1">Weekend DisCount</p>
                  <div class="price d-flex">
                    <span class="new-price me-3">$270</span><span class="old price text-secondary"><s>$350</s></span>
                  </div>
                </div>
                <div class="cam-img overflow-hidden"><img class="img-fluid" src="./Images/jbl.png" alt=""></div>
              </div>
            </div>
            <div class="airbods p-3 d-flex">
              <div class="content d-flex align-self-center">
                <div class="text">
                  <h3 class="collection mt-3 mb-2 fw-bold ">Apple Airpods Pro</h3>
                  <p class="text-secondary mb-1">Weekend DisCount</p>
                  <div class="price d-flex">
                    <span class="new-price me-3">$249</span><span class="old price text-secondary"><s>$260</s></span>
                  </div>
                </div>
                <div class="cam-img overflow-hidden"><img class="img-fluid" src="./Images/airpods.png" alt=""></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end porducts -->
    <!-- start Advantages -->
    <div class="advantages mt-5">
      <div class="container">
        <div class="row">
          <div class="advantage col-md-4 col-sm-6 col-lg-3 d-flex">
            <span class="icon rounded-circle d-flex justify-content-center align-items-center"><i class="fa-solid fa-truck-fast"></i></span>
            <div class="text ms-4">
              <h5>Free Shipping</h5>
              <p class="text-secondary mb-4">Free Shipping on all orders</p>
              <span></span>
            </div>
          </div>
          <div class="advantage col-md-4 col-sm-6 col-lg-3 d-flex">
            <span class="icon rounded-circle d-flex justify-content-center align-items-center"><i class="fa-solid fa-headset"></i></span>
            <div class="text ms-4">
              <h5>online Support 24/7</h5>
              <p class="text-secondary mb-4">Support online 24 hours a day</p>
              <span></span>
            </div>
          </div>
          <div class="advantage col-md-4 col-sm-6 col-lg-3 d-flex">
            <span class="icon rounded-circle d-flex justify-content-center align-items-center"><i class="fa-solid fa-wallet"></i></span>
            <div class="text ms-4">
              <h5>Money Return</h5>
              <p class="text-secondary mb-4">Back guarantee under 7 days</p>
              <span></span>
            </div>
          </div>
          <div class="advantage col-md-4 col-sm-6 col-lg-3 d-flex">
            <span class="icon rounded-circle d-flex justify-content-center align-items-center"><i class="fa-solid fa-tags"></i></span>
            <div class="text ms-4">
              <h5>Member Discount</h5>
              <p class="text-secondary mb-4">On every order over $120.00</p>
              <span></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end Advantages -->
    <!-- Start Sec2 -->
    <div class="section mb-3">
      <div class="container">
        <div class="row">
          <div class="col-12 col-xl-8">
            <div class="xbox p-3 overflow-hidden">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="x-box-img p-3">
                    <div class="cirlce ms-auto rounded-circle d-flex justify-content-center align-items-center flex-column">
                      <span>Save</span>
                      <p class="m-0">30%</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="x-box-content">
                    <span class="sp-orange rounded-2">Deals Of The Day</span>
                    <h3 class="mt-4 mb-4">Xbox Elite Wireless<br> Controller Series 2</h3>
                    <div class="price d-flex align-items-center">
                      <span class="new-price me-3 fw-bold">$139.99</span><span class="old price text-secondary"><s>$179.99</s></span>
                    </div>
                    <p class="text-secondary mt-3 mb-2">The Xbox Elite Wireless Controller Series 2 features over 30
                      ways to play like a pro,including adjustable-tension thumbsticks</p>
                    <div class="status mt-3">
                      <div class="stat-text d-flex justify-content-between">
                        <span>Sold:15</span>
                        <span>available:85</span>
                      </div>
                      <div class="progress mt-2 overflow-hidden">
                        <span class="progress-st"></span>
                      </div>
                      <div class="offers mt-4">
                        <h6>Offers ends in</h5>
                          <div class="time fs-3 pt-4 mb-3">
                            <span class="bg-white p-3">10</span>
                            :
                            <span class="bg-white p-3">28</span>
                            :
                            <span class="bg-white p-3">54</span>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-xl-4">
            <div class="mi-products overflow-hidden">
              <div class="row gap-3 flex-column">
                <div class="col-12">
                  <div class="smart-compact p-3">
                    <h3 class="mb-2">Mi Smart Compact Projector</h3>
                    <p class="text-secondary m-0">Weekend Discount</p>
                    <div class="price d-flex align-items-center">
                      <span class="new-price me-3 fw-bold">$499.99</span>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="air-purifie p-3">
                    <h3 class="mb-2">Mi Air Purifier 3H</h3>
                    <p class="text-secondary m-0">Flash Sale</p>
                    <div class="price d-flex align-items-center">
                      <span class="new-price me-3 fw-bold">$269.99</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end Sec2 -->
    <!-- end products -->
  </div>
  <script src="./js/bootstrap.bundle.min.js"></script>
  <script src="./js/index.js"></script>
</body>

</html>