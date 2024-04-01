<?php 
$title ='contact';
$description = 'contact';
include_once './common/header.php' 
?>



        <!-- breadcrumb begin  -->
        <div class="breadcrumb-pok">
            <img class="br-shape-left" src="assets/img/breadcrumb/left-bg.png" alt="">
            <img class="br-shape-right" src="assets/img/breadcrumb/right-bg.png" alt="">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-6">
                        <div class="breadcrumb-content">
                            <span class="subtitle">contact us</span>
                            <h2 class="title">Get in touch by simply dropping a message</h2>
                            <div class="page-links">
                                <ul>
                                    <li>
                                        <a href='index.html'>Home</a>
                                    </li>
                                    <li>
                                        <span class="current-page">Contact Us</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb end  -->

        <!-- contact begin -->
        <div class="contact-us">
            <img src="assets/img/bg-shape/wp-shape-2.png" alt="" class="wp-bg-shape-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8">
                        <div class="part-contact poklotto-form">
                            <h3 class="title">Get in touch with us</h3>
                            <div class="part-form">
                                <form>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <label for="first_name" class="form-label">First name</label>
                                            <input type="text" id="first_name" placeholder="Ex: john">
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <label for="last_name" class="form-label">Last name</label>
                                            <input type="text" id="last_name" placeholder="Ex: doe">
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <label for="mail_address" class="form-label">Mail address</label>
                                            <input type="email" id="mail_address" placeholder="Ex: yourmail@address">
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <label for="phone_number" class="form-label">phone number</label>
                                            <input type="text" id="phone_number" placeholder="Ex: +96 xxx xxx xxx x">
                                        </div>
                                        <div class="col-xl-12 col-lg-12">
                                            <label for="write_message" class="form-label">write a Message</label>
                                            <textarea id="write_message" placeholder="Ex: Hello, admin...."></textarea>
                                        </div>
                                    </div>
                                    <button class="btn-pok">
                                        submit to us <i class="fa-solid fa-angle-right"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-9 col-sm-9 d-xl-flex d-lg-flex d-block align-items-end">
                        <div class="part-img">
                            <img src="assets/img/contact/contact-img.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="part-address">
                <div class="container">
                    <div class="address-elements">
                        <div class="single-element">
                            <h4 class="title">Phone</h4>
                            <ul>
                                <li>+96 847-930-0570</li>
                                <li>+96 603-221-6491</li>
                            </ul>
                        </div>
                        <div class="single-element">
                            <h4 class="title">email</h4>
                            <ul>
                                <li>JameMorgan@armyspy.com</li>
                                <li>WalterBBarry@rhyta.com</li>
                            </ul>
                        </div>
                        <div class="single-element">
                            <h4 class="title">Head office</h4>
                            <ul>
                                <li>1051 Agriculture Lane</li>
                                <li>Miami, Florida(FL), 33179</li>
                                <li>305-249-1601</li>
                            </ul>
                        </div>
                        <div class="single-element">
                            <h4 class="title">branch 1</h4>
                            <ul>
                                <li>3880 Eagle Drive</li>
                                <li>Detroit, Michigan(MI), 48219</li>
                                <li>734-771-2836</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact end -->

        <!-- newsletter begin -->
        <div class="newsletter">
            <div class="bg-shape-1">
                <img src="assets/img/bg-shape/bg-shape-1.png" alt="">
            </div>
            <img src="assets/img/bg-shape/bg-shape-3.png" alt="" class="bg-shape-3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-8">
                        <div class="part-img">
                            <img src="assets/img/newsletter/newsletter-img.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-9 col-sm-10 d-xl-flex d-lg-flex d-block align-items-center">
                        <div class="part-newsletter">
                            <div class="section-title">
                                <h3 class="sub-title">get our newsletter</h3>
                                <h2 class="title">Stay tuned with us</h2>
                            </div>
                            <p>Subscribe to <span class="p-bold">poklottos</span>‘s newsletter and never miss
                                our latest business newses.  <br/>
                                Our newsletter is sent once a week, every monday.</p>
                            <form>
                                <input type="text" placeholder="Ex: yourmail@address">
                                <button class="btn-pok submit-btn">Subscribe <i class="fa-solid fa-rocket"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- newsletter end -->

<?php include_once './common/footer.php' ?>