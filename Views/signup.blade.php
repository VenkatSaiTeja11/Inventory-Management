<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap css cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Google fonts  -->
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&family=Vollkorn&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet'>
    <title>Document</title>
    <style>
        body {
            font-family: "Vollkorn", sans-serif;
            background: #f7edd5;
        }

        .container {
        max-width: 900px;
        }

        a {
        display: inline-block;
        text-decoration: none;
        }

        input {
        outline: none !important;
        }

        h1 {
        text-align: center;
        text-transform: uppercase;
        margin-bottom: 40px;
        font-weight: 700;
        }

        section#formHolder {
        padding: 50px 0;
        }

        .brand {
        padding: 20px;
        background: url('https://goo.gl/A0ynht');
        background-size: cover;
        background-position: center center;
        color: #fff;
        min-height: 540px;
        position: relative;
        box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.3);
        transition: all 0.6s cubic-bezier(1, -0.375, 0.285, 0.995);
        z-index: 9999;
        }
        .brand.active {
        width: 100%;
        }
        .brand::before {
        content: "";
        display: block;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.85);
        z-index: -1;
        }
        .brand a.logo {
        color: #f95959;
        font-size: 20px;
        font-weight: 700;
        text-decoration: none;
        line-height: 1em;
        }
        .brand a.logo span {
        font-size: 30px;
        color: #fff;
        transform: translateX(-5px);
        display: inline-block;
        }
        .brand .heading {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        transition: all 0.6s;
        }
        .brand .heading.active {
        top: 100px;
        left: 100px;
        transform: translate(0);
        }
        .brand .heading h2 {
        font-size: 70px;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 0;
        }
        .brand .heading p {
        font-size: 15px;
        font-weight: 300;
        text-transform: uppercase;
        letter-spacing: 2px;
        white-space: 4px;
        font-family: "Raleway", sans-serif;
        }

        .form {
        position: relative;
        }
        .form .form-peice {
        background: #fff;
        min-height: 480px;
        margin-top: 30px;
        box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
        color: #bbbbbb;
        padding: 30px 0 60px;
        transition: all 0.9s cubic-bezier(1, -0.375, 0.285, 0.995);
        position: absolute;
        top: 0;
        left: -30%;
        width: 130%;
        overflow: hidden;
        }
        .form .form-peice.switched {
        transform: translateX(-100%);
        width: 100%;
        left: 0;
        }
        .form form {
        padding: 0 40px;
        margin: 0;
        width: 70%;
        position: absolute;
        top: 50%;
        left: 60%;
        transform: translate(-50%, -50%);
        }
        .form form .form-group {
        margin-bottom: 5px;
        position: relative;
        }
        .form form .form-group.hasError input {
        border-color: #f95959 !important;
        }
        .form form .form-group.hasError label {
        color: #f95959 !important;
        }
        .form form label {
        font-size: 12px;
        font-weight: 400;
        text-transform: uppercase;
        font-family: "Montserrat", sans-serif;
        transform: translateY(40px);
        transition: all 0.4s;
        cursor: text;
        z-index: -1;
        }
        .form form label.active {
        transform: translateY(10px);
        font-size: 10px;
        }
        .form form label.fontSwitch {
        font-family: "Raleway", sans-serif !important;
        font-weight: 600;
        }
        .form form input:not([type=submit]) {
        background: none;
        outline: none;
        border: none;
        display: block;
        padding: 10px 0;
        width: 100%;
        border-bottom: 1px solid #eee;
        color: #444;
        font-size: 15px;
        font-family: "Montserrat", sans-serif;
        z-index: 1;
        }
        .form form input:not([type=submit]).hasError {
        border-color: #f95959;
        }
        .form form span.error {
        color: #f95959;
        font-family: "Montserrat", sans-serif;
        font-size: 12px;
        position: absolute;
        bottom: -20px;
        right: 0;
        display: none;
        }
        /* reference */
        #seller-email,#manufacturer-email{
            color: #f95959;
            font-family: "Montserrat", sans-serif;
            font-size: 12px;
            position: absolute;
            bottom: -20px;
            right: 0;
            display: none;
        }
        #manufacturer-password{
            color: #f95959;
            font-family: "Montserrat", sans-serif;
            font-size: 12px;
            position: absolute;
            bottom: -20px;
            right: 0;
            display: none;
        }
        .form form input[type=password] {
        color: #f95959;
        }
        .form form .CTA {
        margin-top: 30px;
        }
        .form form .CTA input {
        font-size: 12px;
        text-transform: uppercase;
        padding: 5px 30px;
        background: #f95959;
        color: #fff;
        border-radius: 30px;
        margin-right: 20px;
        border: none;
        font-family: "Montserrat", sans-serif;
        }
        .form form .CTA a.switch {
        font-size: 13px;
        font-weight: 400;
        font-family: "Montserrat", sans-serif;
        color: #bbbbbb;
        text-decoration: underline;
        transition: all 0.3s;
        }
        .form form .CTA a.switch:hover {
        color: #f95959;
        }

        /* pre-loader */
        #loading{
              position: fixed;
              width: 100%;
              height: 100vh;
              background:#dee1e2 url('https://static.dribbble.com/users/46390/screenshots/1191953/loading.gif') no-repeat center center;
              background-size:400px 300px;	
              z-index: 99999;
        }
        .email-error-manufacturers,.password-error-manufacturers,.email-error-sellers,.password-error-sellers{
            color: #f95959;
            font-family: "Montserrat", sans-serif;
            font-size: 0.6em;
            display: none;
        }
        #login-email-error,#login-email-error1{
            color: #f95959;
            font-family: "Montserrat", sans-serif;
            font-size: 0.6em;
            display: none;
        }

        @media (max-width: 768px) {
        .container {
            overflow: hidden;
        }

        section#formHolder {
            padding: 0;
        }
        section#formHolder div.brand {
            min-height: 200px !important;
        }
        section#formHolder div.brand.active {
            min-height: 100vh !important;
        }
        section#formHolder div.brand .heading.active {
            top: 200px;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        section#formHolder div.brand .success-msg p {
            font-size: 16px;
        }
        section#formHolder div.brand .success-msg a {
            padding: 5px 30px;
            font-size: 10px;
        }
        section#formHolder .form {
            width: 80vw;
            min-height: 500px;
            margin-left: 10vw;
        }
        section#formHolder .form .form-peice {
            margin: 0;
            top: 0;
            left: 0;
            width: 100% !important;
            transition: all 0.5s ease-in-out;
        }
        section#formHolder .form .form-peice.switched {
            transform: translateY(-100%);
            width: 100%;
            left: 0;
        }
        section#formHolder .form .form-peice > form {
            width: 100% !important;
            padding: 60px;
            left: 50%;
        }
        }
        @media (max-width: 480px) {
        section#formHolder .form {
            width: 100vw;
            margin-left: 0;
        }

        h2 {
            font-size: 50px !important;
        }

        #login-text{
            font-size: 1.5em;
        }
        #login-btn{
            font-size: 1.5em;
            text-decoration: none;
            color: #fff;
        }
        }
        @media only screen and (min-width: 768px){
        #login-text{
            font-size: 3em;
        }
        #login-btn{
            font-size: 3em;
            text-decoration: none;
            color: #fff;
        }
        }

        
    </style>
</head>
<body>
<!-- pre-loader -->
<div id="loading" class="text-center"></div>
@if(session('message'))
<div class="alert alert-info alert-dismissible fade show text-center" role="alert">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
      The email id already exists! Please signup with a different email
</div>
@endif
@if(session('login_error'))
<div class="alert alert-info alert-dismissible fade show text-center" role="alert">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
      The email or password you entered did not match our records. Please recheck your credentials and try again.
</div>
@endif
<div class="container">
    <section id="formHolder">
 
       <div class="row">
 
          <!-- Brand Box -->
          <div class="col-sm-6 brand">
             <div class="text-center d-none d-md-block">
                <img class="img-fluid rounded" src="https://mini-project-c1.github.io/Inventory-Mgmt-Front-End/logo/logo.jpg" alt="logo" height="75px" width="150px">
             </div>
 
             <div class="heading">
                <div id="login-text">Already have an account ?</div>
                <button class="btn btn-warning"><a href="/user/login" data-toggle="modal" data-target="#login" id="login-btn">Log in</a></button>
             </div>
          </div>
 
 
          <!-- Form Box -->
          <div class="col-sm-6 form">
 
             <!-- Signup Form for sellers -->
             <div class="login form-peice switched">
                <form class="login-form" action="signup_seller" method="POST" onsubmit="return ValidateEmail()">
                @csrf
                   <h3 style="color:#808080">Sign up as a seller</h3>
                   <div class="form-group">
                      <label for="seller-name">Full Name</label>
                      <input type="text" name="seller_username" id="seller-name" class="name" required>
                      <span class="error"></span>
                   </div>
 
                   <div class="form-group">
                    <label for="seller-emailAddress">Email Address</label>
                    <input type="email" name="seller_emailAddress" id="seller-emailAddress" class="email" required>
                    <span class="error"></span>
                    <span id="seller-email">Invalid Email !</span>
                 </div>

                 <div class="form-group">
                    <label for="seller-password">Password</label>
                    <input type="password" name="seller_password" id="seller-password" class="pass" required>
                    <span class="error"></span>
                 </div>

                 <div class="form-group">
                    <label for="seller-passwordCon">Confirm Password</label>
                    <input type="password" name="seller-passwordCon" id="seller-passwordCon" class="passConfirm" required>
                    <span class="error"></span>
                 </div>
 
                   <div class="CTA">
                      <input type="submit" value="SIGNUP NOW">
                      <a href="#" class="switch">Sign up as a manufacturer ?</a>
                   </div>
                </form>
             </div><!-- End Signup Form -->
 

             <!-- Signup Form for manufacturers -->
             <div class="signup form-peice">
                
                <form class="signup-form" action="signup_manufacturer" method="POST" onsubmit="return ValidateEmail1() && ValidatePassword1()">
                @csrf
                    <h3 style="color:#808080">Sign up as a manufacturer</h3>
                   <div class="form-group">
                      <label for="name">Full Name</label>
                      <input type="text" name="username" id="name" class="name" required>
                      <span class="error"></span>
                   </div>
 
                   <div class="form-group">
                      <label for="email">Email Address</label>
                      <input type="email" name="emailAddress" id="email" class="email" required>
                      <span class="error"></span>
                      <span id="manufacturer-email">Invalid Email !</span>
                   </div>
 
                   <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" name="password" id="password" class="pass" required>
                      <span class="error"></span>
                   </div>
 
                   <div class="form-group">
                      <label for="passwordCon">Confirm Password</label>
                      <input type="password" name="passwordCon" id="passwordCon" class="passConfirm" required>
                      <span class="error"></span>
                      <span id="manufacturer-password">Passwords don't match</span>
                   </div>
 
                   <div class="CTA">
                      <input type="submit" value="Signup Now" id="submit">
                      <a href="#" class="switch">Sign up as a seller ?</a>
                   </div>
                </form>
             </div>
             <!-- End Signup Form -->
          </div>
       </div>
    </section>

    <section>
    <!-- Modal for login-->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:9999;">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#manufacturer" role="tab" aria-controls="manufacturer" aria-selected="true">Manufacturer</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#seller" role="tab" aria-controls="seller" aria-selected="false">Seller</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="manufacturer" role="tabpanel" aria-labelledby="manufacturer-tab">
                        <h4 class="text-center mt-4">Login as a manufacturer</h4>
                        <form action="login_manufacturer" method="POST" onsubmit="return ValidateEmail2()">
                        @csrf
                            <div class="form-group mt-2">
                              <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><img src="https://www.flaticon.com/svg/static/icons/svg/2919/2919600.svg" alt="Username" width="20px" height="20px"></div>
                                </div>
                                <input type="email" class="form-control" id="login-email" name="login_email_manufacturers" placeholder="Enter Email" required>
                              </div>
                              <span id="login-email-error">Invalid Email !</span>
                              <span class="email-error-manufacturers"></span>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text"><img src="https://www.flaticon.com/svg/static/icons/svg/3014/3014229.svg" alt="Password" width="20px" height="20px"></div>
                                    </div>
                                    <input type="password" class="form-control" id="login-password" name="login_password_manufacturers" placeholder="Enter Password" required>
                                  </div>
                                  <span class="password-error-manufacturers"></span>
                            </div>
                            <button type="submit" class="btn w-100 text-center sample-button" style="background: #ffcb05">Log in</button>
                            <div class="text-muted text-center mt-2" style="font-size: 0.8em">Don't have an account? <a href="signup"> Sign Up </a></div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="seller" role="tabpanel" aria-labelledby="seller-tab">
                        <h4 class="text-center mt-4">Login as a seller</h4>
                        <form class="login-sellers" action="login_seller" method="POST" onsubmit="return ValidateEmail3()">
                        @csrf
                            <div class="form-group mt-2">
                                <div class="input-group mb-2">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><img src="https://www.flaticon.com/svg/static/icons/svg/2919/2919600.svg" alt="Username" width="20px" height="20px"></div>
                                  </div>
                                  <input type="email" class="form-control" id="email-1" name="login_email_sellers" placeholder="Enter Email" required>
                                </div>
                                <span id="login-email-error1">Invalid Email !</span>
                                <span class="email-error-sellers"></span>
                              </div>
                              <div class="form-group">
                                  <div class="input-group mb-2">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><img src="https://www.flaticon.com/svg/static/icons/svg/3014/3014229.svg" alt="Password" width="20px" height="20px"></div>
                                      </div>
                                      <input type="password" class="form-control" id="password-1" name="login_password_sellers" placeholder="Enter Password" required>
                                    </div>
                                    <span class="password-error-sellers"></span>
                              </div>
                            <button type="submit" class="btn w-100 text-center" style="background: #ffcb05">Log in</button>
                            <div class="text-muted text-center mt-2" style="font-size: 0.8em">Don't have an account? <a href="signup"> Sign Up </a> </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- End of Modal -->
    </section>
 
 </div>
 

 <!-- Bootstrap cdn's for JavaScript and jQuery-->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 
 <!-- jQuery cdn -->
 <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
 <script>

     //jQuery
        //pre-loader
        $(window).on("load",function(){
            $("#loading").fadeOut();
        });
     /*global $, document, window, setTimeout, navigator, console, location*/
    $(document).ready(function () {

    'use strict';

    var usernameError = true,
        emailError    = true,
        passwordError = true,
        passConfirm   = false;


    // Detect browser for css purpose
    if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
        $('.form form label').addClass('fontSwitch');
    }

    // Label effect
    $('input').focus(function () {

        $(this).siblings('label').addClass('active');
    });

    // Form validation
    $('input').blur(function () {

        // User Name
        if ($(this).hasClass('name')) {
            if ($(this).val().trim().length === 0) {
                $(this).siblings('span.error').text('Please type your full name').fadeIn().parent('.form-group').addClass('hasError');
                usernameError = true;
            } else if ($(this).val().trim().length > 1 && $(this).val().length <= 6) {
                $(this).siblings('span.error').text('Please type at least 6 characters').fadeIn().parent('.form-group').addClass('hasError');
                usernameError = true;
            } else {
                $(this).siblings('.error').text('').fadeOut().parent('.form-group').removeClass('hasError');
                usernameError = false;
            }
        }
        // Email
        if ($(this).hasClass('email')) {
            if ($(this).val().trim().length == '') {
                $(this).siblings('span.error').text('Please type your email address').fadeIn().parent('.form-group').addClass('hasError');
                emailError = true;
            } else {
                $(this).siblings('.error').text('').fadeOut().parent('.form-group').removeClass('hasError');
                emailError = false;
            }
        }

        // PassWord
        if ($(this).hasClass('pass')) {
            if ($(this).val().trim().length < 8) {
                $(this).siblings('span.error').text('Please type at least 8 charcters').fadeIn().parent('.form-group').addClass('hasError');
                passwordError = true;
            } else {
                $(this).siblings('.error').text('').fadeOut().parent('.form-group').removeClass('hasError');
                passwordError = false;
            }
        }

        // PassWord confirmation
        if ($('.pass').val().trim() !== $('.passConfirm').val().trim()) {
            $('.passConfirm').siblings('.error').text('Passwords don\'t match').fadeIn().parent('.form-group').addClass('hasError');
            passConfirm = false;
        } else {
            $('.passConfirm').siblings('.error').text('').fadeOut().parent('.form-group').removeClass('hasError');
            passConfirm = true;
        }

        // label effect
        if ($(this).val().trim().length > 0) {
            $(this).siblings('label').addClass('active');
        } else {
            $(this).siblings('label').removeClass('active');
        }
    });

    // form switch
    $('a.switch').click(function (e) {
        $(this).toggleClass('active');
        e.preventDefault();

        if ($('a.switch').hasClass('active')) {
            $(this).parents('.form-peice').addClass('switched').siblings('.form-peice').removeClass('switched');
        } else {
            $(this).parents('.form-peice').removeClass('switched').siblings('.form-peice').addClass('switched');
        }
    });

    $(".signup-form").submit(function(e){
        if(usernameError==true || emailError==true || passwordError==true || passConfirm==false){
            $('.name, .email, .pass, .passConfirm').blur();
            e.preventDefault();
        }
    });

    $(".login-form").submit(function(e){
        if(usernameError==true || emailError==true || passwordError==true || passConfirm==false){
            $('.name, .email, .pass, .passConfirm').blur();
            e.preventDefault();
        }
    });

    });




            // login on focus validation for manufacturers
            var email_error_manufacturers=true;
            var password_error_manufacturers=true;
            $("#login-email").blur(function(){
                if($("#login-email").val().trim()==""){
                    $(this).css("border","2px solid red");
                    $("#login-email-error").css("display","none");
                    $(".email-error-manufacturers").text("Please enter your email").fadeIn();
                    email_error_manufacturers=true;
                }
                else{
                    $(this).css("border","none");
                    $(".email-error-manufacturers").text("").fadeOut();
                    email_error_manufacturers=false;
                }
            });
            $("#login-password").blur(function(){
                if($("#login-password").val().trim()==""){
                    $(this).css("border","2px solid red");
                    $(".password-error-manufacturers").text("Please enter your password").fadeIn();
                    password_error_manufacturers=true;
                }
                else if($("#login-password").val().trim().length < 8){
                    $(this).css("border","2px solid red");
                    $(".password-error-manufacturers").text("Please type atleast 8 characters").fadeIn();
                    password_error_manufacturers=true;
                }
                else{
                    $(this).css("border","none");
                    $(".password-error-manufacturers").text("").fadeOut();
                    password_error_manufacturers=false;
                }
            });
            $(".login-manufacturers").submit(function(e){
                if(email_error_manufacturers==true||password_error_manufacturers==true){
                    $('#login-email #password').blur();
                    e.preventDefault();
                }
            });
            //end of validation







            // login on focus validation for sellers
            var email_error_sellers=true;
            var password_error_sellers=true;
            $("#email-1").blur(function(){
                if($("#email-1").val().trim()==""){
                    $(this).css("border","2px solid red");
                    $("#login-email-error1").css("display","none");
                    $(".email-error-sellers").text("Please enter your email").fadeIn();
                    email_error_sellers=true;
                }
                else{
                    $(this).css("border","none");
                    $(".email-error-sellers").text("").fadeOut();
                    email_error_sellers=false;
                }
            });
            $("#password-1").blur(function(){
                if($("#password-1").val().trim()==""){
                    $(this).css("border","2px solid red");
                    $(".password-error-sellers").text("Please enter your password").fadeIn();
                    password_error_sellers=true;
                }
                else if($("#password-1").val().trim().length < 8){
                    $(this).css("border","2px solid red");
                    $(".password-error-sellers").text("Please type atleast 8 characters").fadeIn();
                    password_error_sellers=true;
                }
                else{
                    $(this).css("border","none");
                    $(".password-error-sellers").text("").fadeOut();
                    password_error_sellers=false;
                }
            });
            $(".login-sellers").submit(function(e){
                if(email_error_sellers==true||password_error_sellers==true){
                    $('#email-1 #password').blur();
                    e.preventDefault();
                }
            });
            //end of validation





            //login form validation for manufacturers
            function ValidateEmail2(){
                var email = document.getElementById("login-email").value.trim();
                var regex = /^([A-Za-z0-9_\-\.])+@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                if( email!="" && regex.test(email) ){
                    document.getElementById("login-email-error").style.display = "none";
                    document.getElementById("login-email").style.border = "none";
                    return true;
                }
                else{
                    document.getElementById("login-email-error").style.display = "block";
                    document.getElementById("login-email").style.border = "2px solid red";
                    return false;
                }
            }
            //login form validation for sellers
            function ValidateEmail3(){
                var email = document.getElementById("email-1").value.trim();
                var regex = /^([A-Za-z0-9_\-\.])+@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                if( email!="" && regex.test(email) ){
                    document.getElementById("login-email-error1").style.display = "none";
                    return true;
                }
                else{
                    document.getElementById("login-email-error1").style.display = "block";
                    return false;
                }
            }




    // Javascript email validation for seller form
    function ValidateEmail(){
        var email = document.getElementById("seller-emailAddress").value.trim();
        var regex = /^([A-Za-z0-9_\-\.])+@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        if( email!="" && regex.test(email) ){
            document.getElementById("seller-email").style.display = "none";
            return true;
        }
        else{
            document.getElementById("seller-email").style.display = "block";
            return false;
        }
    }

    // Javascript email validation for manufacturer form
    function ValidateEmail1(){
        var email = document.getElementById("email").value.trim();
        var regex = /^([A-Za-z0-9_\-\.])+@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if( email!="" && regex.test(email)){
            document.getElementById("manufacturer-email").style.display = "none";
            return true;
        }
        else{
            document.getElementById("manufacturer-email").style.display = "block";
            return false;
        }
    }

    // Javascript password validation for manufacturer form
    function ValidatePassword1(){
        var password = document.getElementById("password").value.trim();
        var passwordConfirm = document.getElementById("passwordCon").value.trim();
        if(password!=passwordConfirm){
            document.getElementById("manufacturer-password").style.display = "block";
            return false;
        }
        else{
            document.getElementById("manufacturer-password").style.display = "none";
            return true;
        }
    }

 </script>

    
</body>
</html>