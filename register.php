<?php 
$title ='register';
$description = 'register';
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
                            <span class="subtitle">Sign Up</span>
                            <h2 class="title">Sign-up to create an account</h2>
                            <div class="page-links">
                                <ul>
                                    <li>
                                        <a href='index.html'>Home</a>
                                    </li>
                                    <li>
                                        <span class="current-page">Sign Up</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb end  -->

        <!-- sign-up begin -->
        <div class="sign-up">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9 col-md-10">
                        <div class="processing-steps">
                            <div class="single-steps first-step current-step">
                                <div class="part-icon">
                                    <img src="assets/img/register/step-1.png" alt="">
                                </div>
                                <div class="part-text">
                                    <span class="step-line-title">Getting Started</span>
                                </div>
                            </div>
                            <div class="arrow-img">
                                <img src="assets/img/register/arrow-1.png" alt="" class="arrow-icon">
                            </div>
                            <div class="single-steps second-step">
                                <div class="part-icon">
                                    <img src="assets/img/register/step-2.png" alt="">
                                </div>
                                <div class="part-text">
                                    <span class="step-line-title">Contact Details</span>
                                </div>
                            </div>
                            <div class="arrow-img second">
                                <img src="assets/img/register/arrow-2.png" alt="" class="arrow-icon">
                            </div>
                            <div class="single-steps third-step">
                                <div class="part-icon">
                                    <img src="assets/img/register/step-3.png" alt="">
                                </div>
                                <div class="part-text">
                                    <span class="step-line-title">Security Details</span>
                                </div>
                            </div>
                            <div class="arrow-img">
                                <img src="assets/img/register/arrow-1.png" alt="" class="arrow-icon">
                            </div>
                            <div class="single-steps last-step">
                                <div class="part-icon">
                                    <img src="assets/img/register/step-4.png" alt="">
                                </div>
                                <div class="part-text">
                                    <span class="step-line-title">Almost Done</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-10">
                        <div class="poklotto-form" id="poklotto_register_form">
                            <h3 class="steps-heading-title title">Getting started</h3>
                            <div class="part-form">
                                <form>
                                    <div class="form-all-step">
                                        <div class="first-step-form per-step animate__animated blanked">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                    <label for="first_name" class="form-label">First name</label>
                                                    <input type="text" id="first_name" placeholder="Ex: John">
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                    <label for="last_name" class="form-label">Last name</label>
                                                    <input type="text" id="last_name" placeholder="Ex: Doe">
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <label for="mail_address" class="form-label">Mail address</label>
                                                    <input type="email" id="mail_address" placeholder="Ex: yourmail@address">
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <label for="birth-date" class="form-label">Date of birth</label>
                                                    <div class="birth-date-element">
                                                        <input readonly type="text" id="birth-date" placeholder="Ex: 19/05/98">
                                                        <span class="caln-icon">
                                                            <i class="fa-solid fa-calendar-days"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <label class="form-label">Gender</label>
                                                    <div class="dropdown select-list gender-select">
                                                        <button class="dropdown-toggle" type="button" id="gender-select" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Male <i class="fa-solid fa-mars"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="gender-select">
                                                            <li><a class="dropdown-item active" href="#">Male <i class="fa-solid fa-mars"></i></a></li>
                                                            <li><a class="dropdown-item" href="#">Female <i class="fa-solid fa-venus"></i></a></li>
                                                            <li><a class="dropdown-item" href="#">Custom <i class="fa-solid fa-neuter"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <label for="profession_name" class="form-label">profession name</label>
                                                    <input type="text" id="profession_name" placeholder="Ex: student, employee or teacher etc.">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="second-step-form per-step animate__animated">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <label class="form-label">Country Name</label>
                                                    <div class="dropdown select-list country-select">
                                                        <button class="dropdown-toggle" type="button" id="country-select" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <img src="assets/img/flags/brazil.png" alt="" class="flag"> Brazil 
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="country-select">
                                                            <li><a class="dropdown-item active" href="#"><img src="assets/img/flags/brazil.png" alt="" class="flag">Brazil</a></li>
                                                            <li><a class="dropdown-item" href="#"><img src="assets/img/flags/nigeria.png" alt="" class="flag">Nigeria</a></li>
                                                            <li><a class="dropdown-item" href="#"><img src="assets/img/flags/switzerland.png" alt="" class="flag">Switzerland</a></li>
                                                            <li><a class="dropdown-item" href="#"><img src="assets/img/flags/united-kingdom.png" alt="" class="flag">United Kingdom</a></li>
                                                            <li><a class="dropdown-item" href="#"><img src="assets/img/flags/united-states.png" alt="" class="flag">USA</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <label for="city_name" class="form-label">City Name</label>
                                                    <input type="text" id="city_name" placeholder="Ex: New York, wahsington etc.">
                                                </div>
                                                <div class="col-xl-12">
                                                    <label for="address_one" class="form-label">Address line 1</label>
                                                    <input type="text" id="address_one" placeholder="There will be your first address line.">
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <label for="address_two" class="form-label">Address line 2</label>
                                                    <input type="text" id="address_two" placeholder="There will be your second address line.">
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <label for="mobile_number" class="form-label">Mobile Number</label>
                                                    <input type="text" id="mobile_number" placeholder="Ex: +1 000 00 0000">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="third-step-form per-step animate__animated">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <label for="user_name" class="form-label">Username</label>
                                                    <input type="text" id="user_name" placeholder="Ex: @jalebi_baby">
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <label for="alt-mail" class="form-label">Alternative email address</label>
                                                    <input type="email" id="alt-mail" placeholder="Ex: your_alternative_mail@address">
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                    <label for="password" class="form-label">password</label>
                                                    <input type="password" id="password" placeholder="Your password here">
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                    <label for="re-password" class="form-label">Re-enter passord</label>
                                                    <input type="password" id="re-password" placeholder="Re-enter your same password">
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <label class="form-label">Password reminder question</label>
                                                    <div class="dropup select-list question-select">
                                                        <button class="dropdown-toggle" type="button" id="question-select" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Select a question.
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="question-select">
                                                            <li><a class="dropdown-item active" href="#">In what city were you born?</a></li>
                                                            <li><a class="dropdown-item" href="#">What high school did you attend?</a></li>
                                                            <li><a class="dropdown-item" href="#">What is your mother's maiden name?</a></li>
                                                            <li><a class="dropdown-item" href="#">What was the make of your first car?</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <label for="answer" class="form-label">Answer</label>
                                                    <input type="text" id="answer" placeholder="Remember the answer that you put here">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fourth-step-form per-step animate__animated">
                                            <div class="agreement-article">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1">These website standard terms and conditions written on this webpage shall manage your use of our website, envesta accessible at envesta.template.</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" checked type="checkbox" id="inlineCheckbox2" value="option2">
                                                    <label class="form-check-label" for="inlineCheckbox2">These terms will be applied fully and affect to your use of this website. by using this Website, you agreed to accept all terms and conditions written in here. you must not use this website if you disagree with any of these website standard terms and conditions. these terms and conditions have been generated with the help of the terms and conditiions sample generator.</label>
                                                </div>
                                                
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                                    <label class="form-check-label" for="inlineCheckbox3">Minors or people below 18 years old are not allowed to use this Website.</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-controller">
                                        <button class="btn-pok prv-stp-btn disabled" id="prv-stp-btn">
                                            <i class="fa-solid fa-angles-left"></i>
                                        </button>
                                        <button class="btn-pok" id="nxt-stp-btn">
                                            Next Step <i class="fa-solid fa-angles-right"></i>
                                        </button>
                                    </div>
                                    <button id="big-screen" class="btn-pok"><i class="fa-solid fa-expand"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- sign-up end -->

<?php include_once './footer/header.php' ?> 
