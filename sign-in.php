<?php 
$title ='sign in';
$description = 'sing in';
include_once './common/header.php' 
?>

<!-- breadcrumb begin  -->
<div class="breadcrumb-pok">
            <img class="br-shape-left" src="assets/img/breadcrumb/left-bg.png" alt="">
            <img class="br-shape-right" src="assets/img/breadcrumb/right-bg.png" alt="">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="breadcrumb-content">
                            <span class="subtitle">Sign In</span>
                            <h2 class="title">Sign In to enter, if you've an account</h2>
                            <div class="page-links">
                                <ul>
                                    <li>
                                        <a href='index.html'>Home</a>
                                    </li>
                                    <li>
                                        <span class="current-page">Sign In</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb end  -->

        <!-- sign-in begin -->
        <div class="sign-in">
            <div class="container">
                <div class="row justify-content-lg-between justify-content-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="poklotto-form">
                            <h3 class="title">Fill the form as well</h3>
                            <div class="part-form">
                                <form>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <label for="first_name" class="form-label">First name</label>
                                            <input type="text" id="first_name" placeholder="Ex: john">
                                        </div>
                                        <div class="col-xl-12">
                                            <label for="mail_address" class="form-label">Mail address</label>
                                            <input type="email" id="mail_address" placeholder="Ex: yourmail@address">
                                        </div>
                                        <div class="col-xl-12">
                                            <label for="last_name" class="form-label">Password</label>
                                            <input type="password" id="last_name" placeholder="Password here...">
                                        </div>
                                    </div>
                                    <div class="part-submit">
                                        <button class="btn-pok">
                                            sign In <i class="fa-solid fa-angle-right"></i>
                                        </button>
                                        <p>No account yet in Poklotto?
                                            <a class='reg-link' href='register.html'>Register</a> here to signup.</p>
                                    </div>
                                </form>
                                <div class="part-connect-social-info">
                                    <div class="title-overlap">
                                        <h4 class="title">or sign in with</h4>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="#" class="single-social s-pinterest"><i class="fa-brands fa-pinterest-p"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="single-social s-facebook"><i class="fa-brands fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="single-social s-twitter"><i class="fa-brands fa-twitter"></i></a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5 col-md-8 col-sm-10 d-xl-flex d-lg-flex d-block align-items-center">
                        <div class="part-right">
                            <div class="part-img">
                                <img src="assets/img/sign-in/sign-in-img.png" alt="">
                            </div>
                            <div class="part-text">
                                <div class="section-title">
                                    <h3 class="sub-title">Welcome to Poklotto</h3>
                                    <h2 class="title">Sign in and pick lucky number with just one click.</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- sign-in end -->
<?php include_once './common/footer.php' ?>