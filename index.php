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

  //hoss 
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

  </div>
  <script src="./js/bootstrap.bundle.min.js"></script>
  <script src="./js/index.js"></script>
</body>

</html>