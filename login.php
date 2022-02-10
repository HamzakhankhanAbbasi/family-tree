<?php include 'inc/header-links.php'; ?>
<div class="login-wrap">
    <section class="login-pannel">
        <div class="login-image">
            <div class="family-logo">
               <img src="assets/images/logo.png" class="img-fluid">
            </div>
            <div class="">
                <!-- first-div-start -->
                <div class="form-section-input">
                  <div class="form-text">
                     <p class="text-head">Welcome to Joseph L. Baker & Kimberly Ann Lucas Family Tree</p>
                     <p class="account-text">Login to your account</p>
                  </div>
                  <div class="login-input">
                     <div class="form-group email mb-1">
                        <span class="form-icon icon-hov"><i class="fas fa-envelope"></i></span>
                        <input type="email" class="form-inp"  aria-describedby="emailHelp" placeholder="Email">
                     </div>
                     <div class="form-group pass-word">
                        <span class="form-icon4 icon-hov"><i class="fas fa-unlock-alt"></i></span>
                        <input type="password" class="form-inp"  placeholder="Password">
                        <span class="form-icon6"><i class="fas fa-eye"></i></span>
                     </div>
                  </div>
                  <div class="forget-pass">
                      <a href="#!"  data-toggle="modal" data-target="#loginModal">
                       <p>Forgot Password? </p>
                     </a>
                  </div>
                  <div class="login-button">
                     <a href="javascript:void(0)" class="login-btn">Login</a>
                  </div>
               </div>
                <!-- first-div-end -->
                <div class="Dont-account-section">
                  <div class="Dont-account">
                     <div class="log-wrap">
                        <P class="log-text">Or Login With</P>
                     </div>
                     <ul class="p-0">
                        <li><a href="#" class="fac-wrap"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"  class="google-wrap"><i class="fab fa-google"></i></a></li>
                        <!--<li><a href="#"  class="apple-wrap"><i class="fab fa-apple"></i></a></li>-->
                     </ul>
                     <a href="signup.php" class="dont-text">Don't have an account? <span class="sign-text">Sign up</span></a>
                  </div>
               </div>
                <!-- parentdiv-input-close -->
            </div>
        </div>
</section>
    
</div>
<?php include 'inc/footer.php'; ?>