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
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/258f31346d.js" crossorigin="anonymous"></script>
    <title>Dashboard</title>
    <link rel = "icon" href =  
        "https://mini-project-c1.github.io/Inventory-Mgmt-Front-End/logo/logo.jpg"
        type="image/x-icon">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        #logo{
            position:relative;
            left:20px;
            width:100px;
            height: auto;
        }
        .nav-addBackground{
            padding: 5px 10px;
            background:#008ecc;
            transition: all 1s;
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
        /* move up arrow icon */
        .scroll-top{
            position: fixed;
            bottom: 10px;
            right: 10px;
            z-index: 999;
            display: block;
            height: 68px;
            width: 68px;
        }
        .scroll-top:hover{
            cursor: pointer;
        }
        .move-up{
            display: none;
        }
        /* rounded borders for SignUp */
        li{
            border-radius: 0.5em;
        }
        @media only screen and (min-width: 768px){
            nav ul li a{
                --c: #ffcb05;
                position: relative;
                margin-right: 10px;
                overflow: hidden;
                z-index: 1;
                transition: 0.5s;
                border-radius: 0.5em;
            }
            nav ul li a span {
                position: absolute;
                width: 30%;
                height: 100%;
                background-color: var(--c);
                transform: translateY(150%);
                border-radius: 50%;
                left: calc((var(--n) - 1) * 25%);
                transition: 0.5s;
                transition-delay: calc((var(--n) - 1) * 0.1s);
                z-index: -1;
            }
            nav ul li a:hover {
                color: black;
            }

            nav ul li a:hover span {
                transform: translateY(0) scale(2);
            }

            nav ul li a span:nth-child(1) {
                --n: 1;
            }

            nav ul li a span:nth-child(2) {
                --n: 2;
            }

            nav ul li a span:nth-child(3) {
                --n: 3;
            }

            nav ul li a span:nth-child(4) {
                --n: 4;
            }
            .signup:hover{
                transform: scale(1.1,1.1);
            }
        }


        @charset "UTF-8";
            .pricingTable > .pricingTable-title {
            text-align: center;
            color: #6e768d;
            font-size: 3em;
            font-size: 300%;
            margin-bottom: 20px;
            letter-spacing: 0.04em;
            }
            .pricingTable > .pricingTable-subtitle {
            text-align: center;
            color: #b4bdc6;
            font-size: 1.8em;
            letter-spacing: 0.04em;
            margin-bottom: 60px;
            }
            @media screen and (max-width: 480px) {
            .pricingTable > .pricingTable-subtitle {
                margin-bottom: 30px;
            }
            }
            .pricingTable-firstTable {
            list-style: none;
            padding-left: 2em;
            padding-right: 2em;
            text-align: center;
            }
            .pricingTable-firstTable_table {
            vertical-align: middle;
            width: 31%;
            background-color: #ffffff;
            display: inline-block;
            padding: 0px 30px 40px;
            text-align: center;
            max-width: 320px;
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
            border-radius: 5px;
            }
            @media screen and (max-width: 767px) {
            .pricingTable-firstTable_table {
                display: block;
                width: 90%;
                margin: 0 auto;
                max-width: 90%;
                margin-bottom: 20px;
                padding: 10px;
                padding-left: 20px;
            }
            }
            @media screen and (max-width: 767px) {
            .pricingTable-firstTable_table > * {
                display: inline-block;
                vertical-align: middle;
            }
            }
            @media screen and (max-width: 480px) {
            .pricingTable-firstTable_table > * {
                display: block;
                float: none;
            }
            }
            @media screen and (max-width: 767px) {
            .pricingTable-firstTable_table:after {
                display: table;
                content: '';
                clear: both;
            }
            }
            .pricingTable-firstTable_table:hover {
            -webkit-transform: scale(1.08);
                    transform: scale(1.08);
            }
            @media screen and (max-width: 767px) {
            .pricingTable-firstTable_table:hover {
                -webkit-transform: none;
                        transform: none;
            }
            }
            .pricingTable-firstTable_table:not(:last-of-type) {
            margin-right: 3.5%;
            }
            @media screen and (max-width: 767px) {
            .pricingTable-firstTable_table:not(:last-of-type) {
                margin-right: auto;
            }
            }
            .pricingTable-firstTable_table:nth-of-type(2) {
            position: relative;
            }
            @media screen and (max-width: 767px) {
            .pricingTable-firstTable_table:nth-of-type(2) h1 {
                padding-top: 8%;
            }
            }
            @media screen and (max-width: 988px) {
            .pricingTable-firstTable_table:nth-of-type(2):before {
                font-size: 0.6em;
            }
            }
            @media screen and (max-width: 767px) {
            .pricingTable-firstTable_table:nth-of-type(2):before {
                left: 10px;
                width: 45px;
                height: 45px;
                top: -10px;
                padding-top: 13px;
            }
            }
            @media screen and (max-width: 480px) {
            .pricingTable-firstTable_table:nth-of-type(2):before {
                font-size: 0.8em;
            }
            }
            .pricingTable-firstTable_table:nth-of-type(2):hover:before {
            -webkit-transform: rotate(360deg);
                    transform: rotate(360deg);
            }
            .pricingTable-firstTable_table__header {
            font-size: 1.6em;
            padding: 40px 0px;
            border-bottom: 2px solid #ebedec;
            letter-spacing: 0.03em;
            }
            @media screen and (max-width: 1068px) {
            .pricingTable-firstTable_table__header {
                font-size: 1.45em;
            }
            }
            @media screen and (max-width: 767px) {
            .pricingTable-firstTable_table__header {
                padding: 0px;
                border-bottom: none;
                float: left;
                width: 33%;
                padding-top: 3%;
                padding-bottom: 2%;
            }
            }
            @media screen and (max-width: 610px) {
            .pricingTable-firstTable_table__header {
                font-size: 1.3em;
            }
            }
            @media screen and (max-width: 480px) {
            .pricingTable-firstTable_table__header {
                float: none;
                width: 100%;
                font-size: 1.8em;
                margin-bottom: 5px;
            }
            }
            .pricingTable-firstTable_table__pricing {
            font-size: 3em;
            padding: 30px 0px;
            border-bottom: 2px solid #ebedec;
            line-height: 0.7;
            }
            @media screen and (max-width: 1068px) {
            .pricingTable-firstTable_table__pricing {
                font-size: 2.8em;
            }
            }
            @media screen and (max-width: 767px) {
            .pricingTable-firstTable_table__pricing {
                border-bottom: none;
                padding: 0;
                float: left;
                clear: left;
                width: 33%;
            }
            }
            @media screen and (max-width: 610px) {
            .pricingTable-firstTable_table__pricing {
                font-size: 2.4em;
            }
            }
            @media screen and (max-width: 480px) {
            .pricingTable-firstTable_table__pricing {
                float: none;
                width: 100%;
                font-size: 3em;
                margin-bottom: 10px;
            }
            }
            .pricingTable-firstTable_table__pricing span:first-of-type {
            font-size: 0.35em;
            vertical-align: top;
            letter-spacing: 0.15em;
            }
            @media screen and (max-width: 1068px) {
            .pricingTable-firstTable_table__pricing span:first-of-type {
                font-size: 0.3em;
            }
            }
            .pricingTable-firstTable_table__pricing span:last-of-type {
            vertical-align: bottom;
            font-size: 0.30em;
            letter-spacing: 0.04em;
            padding-left: 0.2em;
            }
            @media screen and (max-width: 1068px) {
            .pricingTable-firstTable_table__pricing span:last-of-type {
                font-size: 0.25em;
            }
            }
            .pricingTable-firstTable_table__options {
            list-style: none;
            padding: 15px;
            font-size: 0.9em;
            border-bottom: 2px solid #ebedec;
            }
            @media screen and (max-width: 1068px) {
            .pricingTable-firstTable_table__options {
                font-size: 0.85em;
            }
            }
            @media screen and (max-width: 767px) {
            .pricingTable-firstTable_table__options {
                border-bottom: none;
                padding: 0;
                margin-right: 10%;
            }
            }
            @media screen and (max-width: 610px) {
            .pricingTable-firstTable_table__options {
                font-size: 0.7em;
                margin-right: 8%;
            }
            }
            @media screen and (max-width: 480px) {
            .pricingTable-firstTable_table__options {
                font-size: 1.3em;
                margin-right: none;
                margin-bottom: 10px;
            }
            }
            .pricingTable-firstTable_table__options > li {
            padding: 8px 0px;
            }
            @media screen and (max-width: 767px) {
            .pricingTable-firstTable_table__options > li {
                text-align: left;
            }
            }
            @media screen and (max-width: 610px) {
            .pricingTable-firstTable_table__options > li {
                padding: 5px 0;
            }
            }
            @media screen and (max-width: 480px) {
            .pricingTable-firstTable_table__options > li {
                text-align: center;
            }
            }
            .pricingTable-firstTable_table__options > li:before {
            content: '✓';
            display: inline-block;
            margin-right: 15px;
            color: white;
            background-color: #74ce6a;
            border-radius: 50%;
            width: 15px;
            height: 15px;
            font-size: 0.8em;
            padding: 2px;
            text-align: center;
            }
            @media screen and (max-width: 1068px) {
            .pricingTable-firstTable_table__options > li:before {
                width: 14px;
                height: 14px;
                padding: 1.5px;
            }
            }
            @media screen and (max-width: 767px) {
            .pricingTable-firstTable_table__options > li:before {
                width: 12px;
                height: 12px;
            }
            }
            .pricingTable-firstTable_table__getstart {
            color: white;
            background-color: #71ce73;
            margin-top: 30px;
            border-radius: 5px;
            cursor: pointer;
            padding: 15px;
            box-shadow: 0px 3px 0px 0px #66ac64;
            letter-spacing: 0.07em;
            -webkit-transition: all 0.4s ease;
            transition: all 0.4s ease;
            }
            @media screen and (max-width: 1068px) {
            .pricingTable-firstTable_table__getstart {
                font-size: 0.95em;
            }
            }
            @media screen and (max-width: 767px) {
            .pricingTable-firstTable_table__getstart {
                margin-top: 0;
            }
            }
            @media screen and (max-width: 610px) {
            .pricingTable-firstTable_table__getstart {
                font-size: 0.9em;
                padding: 10px;
            }
            }
            @media screen and (max-width: 480px) {
            .pricingTable-firstTable_table__getstart {
                font-size: 1em;
                width: 50%;
                margin: 10px auto;
            }
            }
            .pricingTable-firstTable_table__getstart:hover {
            -webkit-transform: translateY(-10px);
                    transform: translateY(-10px);
            box-shadow: 0px 40px 29px -19px rgba(102, 172, 100, 0.9);
            }
            @media screen and (max-width: 767px) {
            .pricingTable-firstTable_table__getstart:hover {
                -webkit-transform: none;
                        transform: none;
                box-shadow: none;
            }
            }
            .pricingTable-firstTable_table__getstart:active {
            box-shadow: inset 0 0 10px 1px #66a564, 0px 40px 29px -19px rgba(102, 172, 100, 0.95);
            -webkit-transform: scale(0.95) translateY(-9px);
                    transform: scale(0.95) translateY(-9px);
            }
            @media screen and (max-width: 767px) {
            .pricingTable-firstTable_table__getstart:active {
                -webkit-transform: scale(0.95) translateY(0);
                        transform: scale(0.95) translateY(0);
                box-shadow: none;
            }
            }

            body {
                font-family: 'Vollkorn', serif;
                font-size: 100%;
                background-color: #f0f4f7;
                color: #717787;
            }
            @media screen and (max-width: 960px) {
            body {
                font-size: 80%;
            }
            }
            @media screen and (max-width: 776px) {
            body {
                font-size: 70%;
            }
            }
            @media screen and (max-width: 496px) {
            body {
                font-size: 50%;
            }
            }
            @media screen and (max-width: 320px) {
            body {
                font-size: 40%;
            }
            }
            @media screen and (min-width: 300px){
                nav{
                font-size: 1.3em;
                }
            }
            @media screen and (max-width: 768px){
                .nav_items{
                    background: #008ecc;
                }
            }
            @media screen and (min-width: 100px){
                .nav_items{
                    font-size: 21px;
                }
            }
            .animated-icon2{
            width: 30px;
            height: 20px;
            position: relative;
            margin: 0px;
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
            -webkit-transition: .5s ease-in-out;
            -moz-transition: .5s ease-in-out;
            -o-transition: .5s ease-in-out;
            transition: .5s ease-in-out;
            cursor: pointer;
            }
            .animated-icon2 span{
            display: block;
            position: absolute;
            height: 3px;
            width: 100%;
            border-radius: 9px;
            opacity: 1;
            left: 0;
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
            -webkit-transition: .25s ease-in-out;
            -moz-transition: .25s ease-in-out;
            -o-transition: .25s ease-in-out;
            transition: .25s ease-in-out;
            }
            .animated-icon2 span{
                background: #000000;
            }
            .animated-icon2 span:nth-child(1) {
            top: 0px;
            }

            .animated-icon2 span:nth-child(2), .animated-icon2 span:nth-child(3) {
            top: 10px;
            }

            .animated-icon2 span:nth-child(4) {
            top: 20px;
            }

            .animated-icon2.open span:nth-child(1) {
            top: 11px;
            width: 0%;
            left: 50%;
            }

            .animated-icon2.open span:nth-child(2) {
            -webkit-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            transform: rotate(45deg);
            }

            .animated-icon2.open span:nth-child(3) {
            -webkit-transform: rotate(-45deg);
            -moz-transform: rotate(-45deg);
            -o-transform: rotate(-45deg);
            transform: rotate(-45deg);
            }

            .animated-icon2.open span:nth-child(4) {
            top: 11px;
            width: 0%;
            left: 50%;
            }
            .navbar-toggler,
            .navbar-toggler:focus,
            .navbar-toggler:active,
            .navbar-toggler-icon:focus {
                outline: none;
                border: 0px;
                box-shadow: none;
            }
            .alert{
            padding: 20px 40px;
            min-width: 350px;
            position: fixed;
            right: 0px;
            top: 100px;
            border-radius: 4px;
            border-left: 8px solid #ffa502;
            overflow: hidden;
            opacity: 0;
            pointer-events: none;
            }
            .alert.showAlert{
            opacity: 1;
            pointer-events: auto;
            }
            .alert.show{
            animation: show_slide 1s ease forwards;
            }
            @keyframes show_slide {
            0%{
                transform: translateX(100%);
            }
            40%{
                transform: translateX(-10%);
            }
            80%{
                transform: translateX(0%);
            }
            100%{
                transform: translateX(-10px);
            }
            }
            .alert.hide{
            animation: hide_slide 1s ease forwards;
            }
            @keyframes hide_slide {
            0%{
                transform: translateX(-10px);
            }
            40%{
                transform: translateX(0%);
            }
            80%{
                transform: translateX(-10%);
            }
            100%{
                transform: translateX(100%);
            }
            }
            .alert .fa-check{
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 30px;
            }
            .alert .msg{
            padding: 0 20px;
            font-size: 18px;
            color: #000000;
            }
            .alert .close-btn{
            position: absolute;
            right: 0px;
            top: 50%;
            transform: translateY(-50%);
            padding: 20px 18px;
            cursor: pointer;
            }
            .alert .close-btn .fas{
            font-size: 22px;
            line-height: 40px;
            }

    </style>
</head>
<body>
        <!-- pre-loader -->
    <div id="loading" class="text-center"></div>

    <img class="scroll-top move-up scrolltop img-fluid" src="https://daks2k3a4ib2z.cloudfront.net/591b0c3a951d120c3f468711/593a0036cd8a6e16f1869dca_icon.svg" /> 
    
    
    <!-- <img class="scroll-top move-up" src="https://img.icons8.com/cute-clipart/64/000000/up-squared.png"/> -->
    <!-- Nav-Bar -->
    <header>
        <nav class="navbar navbar-expand-md navbar-light fixed-top" id="navbar">
          <!-- Brand logo-->
         <a class="navbar-brand text-dark" href="home"><img class="img-fluid rounded" id="logo" src="https://mini-project-c1.github.io/Inventory-Mgmt-Front-End/logo/logo.jpg" alt="logo" /></a>
        
          <!-- Collapse button -->
        <button class="navbar-toggler second-button" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"
            aria-controls="navbarSupportedContent23" aria-expanded="false" aria-label="Toggle navigation">
            <div class="animated-icon2"><span></span><span></span><span></span><span></span></div>
        </button>
        
          <!-- Navbar links -->
          <div class="collapse navbar-collapse nav_items" id="collapsibleNavbar">
            <ul class="navbar-nav text-center ml-auto">
              <li class="nav-item">
                <a class="nav-link Link" href="home">Home<span></span><span></span><span></span><span></span></a>
              </li>
              <li class="nav-item bg-dark signup">
                <a class="nav-link text-white" href="logout">Log Out</a>
              </li>
            </ul>
          </div>
        </nav>
    </header>
    <!-- End of Nav-Bar -->  
    
    <div class="pricingTable">
        <br><br><br><br><span class="d-block d-md-none"><br><br><br></span>
        <h2 class="pricingTable-title">Welcome {{session('data')}}</h2>
        <h3 class="pricingTable-subtitle">Dashboard</h3>
        
        <ul class="pricingTable-firstTable">
          <li class="pricingTable-firstTable_table">
            <h1 class="pricingTable-firstTable_table__header">Sales Analysis</h1>
            <p class="pricingTable-firstTable_table__pricing"><img src="https://www.marketing91.com/wp-content/uploads/2018/10/Sales-Analysis-3.jpg" class="img-fluid" alt="sales analysis"></p>
            <ul class="pricingTable-firstTable_table__options">
              <li>Sales in a given date range</li>
              <li>Graphical Analysis</li>
              <li>Know your profit/loss</li>
            </ul>
            <div class="pricingTable-firstTable_table__getstart">Get Started Now</div>
          </li><li class="pricingTable-firstTable_table">
            <h1 class="pricingTable-firstTable_table__header">Manage your Inventory</h1>
            <p class="pricingTable-firstTable_table__pricing"><img src="https://dormitory.ktu.edu/wp-content/uploads/sites/244/2017/10/purchase-guy.png" class="img-fluid" alt="manage your inventory"></p>
            <ul class="pricingTable-firstTable_table__options">
              <li>Add/Remove items</li>
              <li>View/Manage your items</li>
              <li>Request for stock if necessary</li>
            </ul>
            <a href="inventory" style="text-decoration: none; color:#fff;"><div class="pricingTable-firstTable_table__getstart"> Get Started Now </div></a>    
          </li><li class="pricingTable-firstTable_table">
            <h1 class="pricingTable-firstTable_table__header">Generate an Invoice</h1>
            <p class="pricingTable-firstTable_table__pricing"><img src="https://f-billing.com/assets/img/features/feature1.jpg" class="img-fluid" alt="invoice"></p>
            <ul class="pricingTable-firstTable_table__options">
                <li></li>
            </ul>
            <div class="pricingTable-firstTable_table__getstart" onclick="notifyMe()">Get Started Now</div>
          </li>
        </ul>
      </div>
      
    @if(session('message'))
      <div class="alert alert-success">
        <span class="fas fa-check"></span>
        <span class="msg">Registered Successfully!</span>
        <div class="close-btn">
          <span class="fas fa-times"></span>
        </div>
      </div>
    @endif
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
        //jQuery
        $(document).ready(function(){
            $('.Link').css("color","#000000");
            $(window).scroll(function(){
                // Nav-Bar change on scroll
                if($(this).scrollTop()>50){
                    $('nav').addClass('nav-addBackground');
                    $('.Link').css("color","#fff");
                    $('.animated-icon2').children().css("background","#fff");
                }
                else{
                    $("nav").removeClass('nav-addBackground');
                    $('.Link').css("color","#000000");
                    $('.animated-icon2').children().css("background","#000000");
                }
            });
            // nav-bar hamburger icon change
            $('.second-button').on('click', function () {

            $('.animated-icon2').toggleClass('open');
            });

            $('.alert').addClass("show");
            $('.alert').removeClass("hide");
            $('.alert').addClass("showAlert");

            setTimeout(function(){
                $('.alert').removeClass("show");
                $('.alert').addClass("hide");
                $('.alert').fadeToggle();
            },5000);

            $('.close-btn').click(function(){
                $('.alert').removeClass("show");
                $('.alert').addClass("hide");
                $('.alert').fadeToggle();
            });
        }); 
        
    </script>
</body>
</html>