<?php
session_start();

require_once("connection.php");
$db = new MySQLDatabase();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Chrome, Firefox, OS & Opera -->
    <meta name="theme-color" content="#253A71">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#253A71">
    <!-- Safari/iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="apple-touch-icon" type="image/png" href="images/favicon.ico" />
    <meta name="keywords" content="Khushiyon Ka Angan" />
    <meta name="description" content="Khushiyon Ka Angan - Enabling Girl Child Education, Grihum Housing Finance" />
    <meta name="author" content="" />
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="https://grihumhousing.com/khushiyon-ka-angan.php" />
    <!-- Title  -->
    <title>Khushiyon Ka Angan Program for Home loans | Grihum Housing Finance</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <!-- Plugins -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/plugins/bootstrap.min.css" />
    <!-- Core Style Css -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link media="all" rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />

</head>
<style>
    .error {
        color: red;
        font-size: 12px;
        line-height: 15px;
    }

    .connect h3 {
        font-size: 20px;
        color: #000000;
        padding: 15px 0;
    }

    .connect h4 {
        font-size: 16px;
        font-weight: 600;
        padding: 15px 0;
    }

    .connect ul.list li {
        font-size: 13px;
        padding-bottom: 2px;
        color: #000000;
    }

    .connect ul.list li:before {
        border: 0;
        width: 6px;
        height: 6px;
        background-color: #000;
        border-radius: 50%;
        top: 10px;
    }

    .formddiv {
        padding: 15px 30px;
        border: 1px solid #223a72;
        border-radius: 20px;
        line-height: 26px;
        font-weight: 600;
    }

    .formtext {
        line-height: 28px;
        font-size: 16px;
        text-align: center;
        font-weight: 700;
    }

    .arrow {
        width: 22px;
        padding-left: 8px;
    }

    .ml5px {
        margin-left: 5px;
    }

    .ml15px {
        margin-left: 15px;
    }

    .formdiv input,
    .formdiv select {
        background-color: transparent !important;
        border: none !important;
        border-radius: 5px !important;
        border: solid 1px #e0e0e0 !important;
        display: inline-block;
        padding: 5px 20px 5px 20px;
        font-size: 13px;
        height: 32px !important;
        color: #989898;
    }

    .formdiv label {
        font-size: 11px;
        margin-bottom: 0;
        font-weight: 500;
    }

    .astrikcss {
        color: red;
    }

    .formdiv input::placeholder {
        color: #989898;
        font-weight: 500;
    }

    .formdiv input,
    .formdiv select {
        font-size: 12px;
        color: #989898;
        font-weight: 600;
    }

    .formdiv select {
        width: 100%;
        background: url(images/ddarrow.png) no-repeat top 11px right 10px transparent;
        border: none;
        border-radius: 0 !important;
        display: inline-block;
        -webkit-appearance: none;
        padding: 5px 20px 5px 20px;
        font-size: 12px;
        color: #989898;
    }

    .form-control:focus {
        color: #223a72;
        box-shadow: none;
    }

    .formdiv input:focus {
        border: 1px solid #223a72 !important;
    }

    .desclaimer {
        font-size: 11px;
    }

    .input_container .radios-box .select_option label {
        font-size: 11px;
        line-height: 50px;
    }

    .lhgt {
        line-height: 21px;
    }

    .lhgt p {
        font-size: 11px;
    }

    .connectorimg {
        width: 130px;
        margin-bottom: 20px;
    }

    .formdiv input#chktnc {
        height: 17px !important;
    }

    .formdiv input#btn0 {
        background-color: #0061af !important;
        border-radius: 10px !important;
        color: #fff;
        height: 34px !important;
        width: 90px;
        border: 1px solid #0061af;
    }

    .heading {
        color: #0061af !important;
        font-weight: 700;
    }

    .inner_banner .inner_text {
        top: 42%;
    }

    .inner_banner .inner_text h1 {
        font-size: 28px;
    }

    .inner_banner .inner_text h1,
    .inner_banner .inner_text h2 {
        font-weight: 700;
    }

    .aadhar_card {
        padding: 5px 0 35px 5px !important;
    }

    .inner_banner .inner_text p {
        font-size: 16px;
    }

    input[type="date"]::-webkit-calendar-picker-indicator {
        background: transparent;
        bottom: 0;
        color: transparent;
        cursor: pointer;
        height: auto;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        width: auto;
    }

    .ui-datepicker select.ui-datepicker-month,
    .ui-datepicker select.ui-datepicker-year {
        appearance: auto;
        height: 25px;
    }

    div#ui-datepicker-div {
        z-index: 10 !important;
    }

    .ui-datepicker select.ui-datepicker-month,
    .ui-datepicker select.ui-datepicker-year {
        padding-left: 10px;
    }

    /*upload Addhar Div CSS start*/
    .file-input-container {
        width: 100%;
        position: relative;
        display: inline-block;
        overflow: hidden;
        margin-top: 0px;
    }

    .file-input {
        position: absolute;
        font-size: 100px;
        opacity: 0;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
    }

    #file-attachment-icon {
        position: absolute;
        top: 50%;
        right: 15px;
        transform: translateY(-50%) rotate(90deg);
        ;
        color: #989898;
        font-size: 18px;
    }

    #file-input-text {
        height: 32px !important;
        display: inline-block;
        padding: 3px 40px 5px 22px;
        color: #989898;
        border: solid 1px #e0e0e0 !important;
        border-radius: 5px;
        cursor: pointer;
        font-size: 12px;
        font-weight: 600;
        width: 100%;
    }

    .file-atch {
        position: relative;
        margin-top: 0px;
    }

    /*upload Addhar Div CSS end*/


    @media screen and (max-width: 991px) {
        .ml5px {
            margin-left: -15px;
        }

        .mblmb0 {
            margin-bottom: 0 !important;
        }

        .formdiv .col-lg-6 .row,
        .row60ht,
        .formdiv .col-lg-4 .row {
            height: 70px;
        }

        .mblp-0 {
            padding: 0;
        }

        .input_container {
            margin: 0 0 30px 0;
        }

        .formddiv {
            padding: 15px;
            margin: 15px 10px 0;
        }

        .formtext {
            font-size: 13px;
        }

        .connect h3 {
            padding: 0 0 15px;
        }
    }

    @media screen and (max-width: 768px) {
        .connectorimg {
            position: absolute;
            top: 120px;
            margin-bottom: 0;
        }

        .arrow {
            width: 23px;
        }

        .inner_banner .inner_text {
            top: 36%;
        }
    }
</style>

<body>
    <?php
        if (isset($_SESSION['mail_success'])) {
            print_r($_SESSION['mail_success']);
            // die;
        }
?>
    <!-- header -->
    <style>
        .sticky,
        header,
        header .dropdown-menu {
            background: #fff
        }

        header .navbar-brand {
            padding: 10px 0
        }

        .sticky .btns:hover,
        header .navbar .btns:hover {
            background-size: 0 100%
        }

        .sticky .yellow-btn:hover,
        header .navbar .yellow-btn:hover {
            color: #253a71
        }

        .sticky .yellow-btn.btns:hover::after,
        header .navbar .yellow-btn.btns:hover::after {
            background-color: #fff
        }

        header .dropdown-toggle::after {
            color: #233972
        }

        .loan_menu .dropdown-menu li a {
            color: #1a3d90;
            border-bottom: 1px solid #f2f7fb
        }

        .loan_menu .dropdown-menu .col-md-8 {
            background: #f2f7fb
        }

        .loan_menu .dropdown-menu .col-md-8 p,
        .loan_menu .dropdown-menu li a:focus,
        .loan_menu .dropdown-menu li a:hover,
        header .dropdown-item,
        header .dropdown-item:focus,
        header .dropdown-item:hover {
            color: #1a3d90
        }

        .loan_menu .dropdown-menu li a.active,
        .loan_menu .dropdown-menu li a:hover {
            background: #f2f7fb
        }

        @media only screen and (max-width:1024px) {
            header .top-nav .navbar-nav .nav-link {
                padding: 5px 7px;
                font-size: 12px;
            }
        }

        @media only screen and (max-width:991px) {

            .hamburger span,
            .hamburger span:after,
            .hamburger span:before {
                background: #253a71
            }

            header .navbar .navbar-collapse {
                background: #fff
            }

            header .navbar-expand-lg .navbar-nav .nav-link {
                color: #1a3d90;
                border-bottom-color: #1a3d90
            }

            header .dropdown-menu {
                background: #f2f7fb
            }

            .social-links-mobile {
                display: block !important;
                position: fixed;
                right: 0;
                margin-top: 10px;
                background: #fff;
                padding: 5px 5px 5px 10px;
                border-radius: 5px 0 0 5px
            }

            .social-links-desc {
                display: none
            }

            .social-links-mobile ul li img {
                width: 24px;
                height: 24px
            }

            .social-link {
                padding: 5px 0
            }
        }

        .social-links-desc img {
            margin-left: 6px;
            margin-top: 5px;
            width: 24px;
            height: 24px
        }

        .social-links-mobile {
            display: none
        }

        /*header .navbar-expand-lg .navbar-nav .nav-link{padding-top:0;}*/
        header .top-nav .navbar-nav .nav-link {
            padding: 5px 6px;
        }

        header .navbar-expand-lg .navbar-nav .nav-link {
            font-size: 11.5px;
            font-weight: 450;
        }

        header .navbar-expand-lg .navbar-nav .nav-link:hover,
        header .top-nav .navbar-nav .nav-link:hover {
            font-weight: 700;
        }

        /*header .top-nav {margin-top: 8px;}*/
        header .second-nav {
            margin-top: 8px;
        }

        .language {
            background-color: #253a71;
            border-radius: 50px;
            color: #fff;
            height: 28px;
            margin-top: 4px;
        }

        .language .language-tog {
            line-height: 18px;
        }

        .language .language-tog:hover {
            color: #fff;
        }

        .language .dropdown-toggle::after {
            color: #fff !important;
        }

        .language img {
            margin-right: 3px;
        }

        .language-dd {
            left: 50%;
            transform: translateX(-50%);
            width: 80px !important;
            min-width: 80px;
            border: 1px solid #253a71 !important;
            text-align: center;
            margin-top: -1px !important;
            border-radius: 0px 0px 10px 10px !important
        }

        .language-dd .dropdown-item {
            padding: 0px;
            font-size: 12px;
            line-height: 20px;
        }

        .missed-call-sec {
            background: #f2f7fb;
            padding-left: 24px;
        }

        .missed-call-sec p {
            font-size: 13px;
            line-height: 17px;
            font-weight: 500;
            padding: 5px 0;
            text-align: left;
            color: #1a3d90;
            margin-bottom: 0;
        }

        .missed-call-sec img {
            margin-right: 5px;
            margin-top: -2px;
        }

        /*.missed-call-sec p a{font-weight:500;}*/
        .missed-call-sec p a:hover {
            color: #1a3d90;
            text-decoration: none;
        }

        @media (max-width: 1280px) {
            header .top-nav .navbar-nav .nav-link {
                font-size: 11px;
            }
        }

        @media (max-width: 1100px) {
            .language {
                height: 26px;
            }
        }

        @media (max-width: 1025px) {
            header .top-nav .navbar-nav .nav-link {
                font-size: 10px;
            }

            header .navbar-expand-lg .navbar-nav .nav-link {
                font-size: 10px;
            }
        }

        @media (max-width: 992px) {
            header .top-nav .navbar-nav .nav-link {
                font-size: 9px !important;
            }

            .language {
                height: 26px;
            }
        }

        @media (max-width: 991px) {
            .language {
                display: none !important;
            }
        }

        @media only screen and (max-width: 1024px) {
            header .top-nav .navbar-nav .nav-link {
                padding: 5px 7px;
                font-size: 12px;
                font-weight: 500;
            }
        }

        @media only screen and (max-width: 767px) {
            .missed-call-sec {
                padding-left: 0;
            }

            .missed-call-sec p {
                font-size: 10px;
            }
        }

        @media (max-width: 480px) {
            .srch-bar-1 {
                width: 125px;
            }

            .mobile-form {
                top: 14px;
            }
        }

        @media (max-width: 360px) {
            .srch-bar-1 {
                width: 125px;
            }

            .mobile-form {
                top: 14px;
            }
        }

        @media (max-width: 320px) {

            .srch-bar-1,
            .srch-form-1 {
                width: 70px;
            }
        }
    </style>
    <!-- Header css -->

    <div class="missed-call-sec">
        <div class="container">
            <p>
                Give a Missed Call for Home Loan <img src="images/contact/call.png" alt="misscalllogo" width="13" height="13"><a href="tel:9977860860" class="wsnw">9977860860</a>
            </p>
        </div>
    </div>
    <header>
        <div class="container">
            <nav class="row navbar navbar-expand-lg p-0">
                <div class="col-sm-3 col-6">
                    <!-- Brand -->
                    <a class="navbar-brand" href="/">
                        <img src="images/logo.png" alt="Grihum Housing Finance Home Loan" width="253" height="85" />
                    </a>
                </div>

                <div class="mobile-form">
                    <form action="/search.php" method="get" class="srch-form-1">
                        <div>
                            <input type="hidden" name="zoom_sort" value="0">
                            <input type="text" placeholder="I'm looking for" name="zoom_query" id='zoom_searchbox' class="srch-bar-1 zoom_searchbox">
                            <button type="submit" class="srch-bar-1-btn" aria-label="search"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar">
                        <div class="hamburger">
                            <span></span>
                        </div>
                    </span>
                </button>
                <div class="col-sm-9 mobile-nav">
                    <div class="collapse navbar-collapse navbar-pd top-nav" id="navbarSupportedContent">
                        <!-- Links -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Dropdown -->
                            <li class="nav-item hiddenDesktop dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                    Housing Loans
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/home-loan.php">Home Loan</a>
                                    <a class="dropdown-item" href="/home-improvement-loan.php">Home Improvement Loan</a>
                                    <a class="dropdown-item" href="/home-extension-loan.php">Home Extension Loan</a>
                                    <a class="dropdown-item" href="/home-construction-loan.php">Home Construction Loan</a>
                                    <a class="dropdown-item" href="/home-loan-balance-transfer.php">Home Loan Balance Transfer</a>
                                </div>
                            </li>
                            <li class="nav-item hiddenDesktop">
                                <a class="nav-link" href="/loan-against-property.php">Loan Against Property</a>
                            </li>
                            <!-- Dropdown -->
                            <li class="nav-item hiddenDesktop dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                    Quick Pay
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="https://ipg.grihumhousing.com/en">Pay EMI</a>
                                    <a class="dropdown-item" href="https://ipg.grihumhousing.com/en/mandate-cancellation">Mandate Cancellation</a>
                                    <a class="dropdown-item" href="/neft-rtgs.php">NEFT/RTGS Details</a>
                                </div>
                            </li>
                            <li class="nav-item hiddenDesktop dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                    Auctions
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/auction-list.php">Auction Properties</a>
                                    <a class="dropdown-item" href="/auction-notice.php">Auction Notice</a>
                                    <a class="dropdown-item" href="/pdf/E-auction-Terms-and-conditions.pdf" target="_blank">Terms & Conditions</a>
                                </div>
                            </li>
                            <!-- <li class="nav-item">  
                            <a class="nav-link" href="/" title="Home">Home</a>
                        </li> -->
                            <!--  <li class="nav-item dropdown language mr-2 px-1">
                            <a class="nav-link dropdown-toggle language-tog" href="javascript:;" id="navbardrop" data-toggle="dropdown" title="English aa">
                                <img src="images/translation.png" alt="translation" width="15px" height="auto" />
                                English
                            </a>
                            <div class="dropdown-menu language-dd">
                                <a class="dropdown-item" href="/hindi/">हिन्दी </a>
                            </div>
                          
                        </li> -->

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:;" data-toggle="dropdown" title="About Us aa">
                                    About Us
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/about-us.php" title="Who we are">Who we are</a>
                                    <a class="dropdown-item" href="/about-us-board-of-directors.php" title="Board of Directors">Board of Directors</a>
                                    <a class="dropdown-item" href="/management-team.php" title="Management Team">Management Team</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:;" data-toggle="dropdown" title="Investors aa">
                                    Investors
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/investors.php" title="Overview">Overview</a>
                                    <a class="dropdown-item" href="/investor-financial-reports.php" title="Financials">Financials</a>
                                    <a class="dropdown-item" href="/investor-governance.php" title="Governance">Governance</a>
                                    <a class="dropdown-item" href="/investor-credit-rating.php" title="Credit Rating">Credit Rating</a>
                                    <a class="dropdown-item" href="/investor-information.php" title="Investor Information">Investor Information</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:;" data-toggle="dropdown" title="News Update aa">
                                    News Update
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/media-center.php">Media Center</a>
                                    <a class="dropdown-item" href="/blogs.php">Blogs</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/careers.php" title="Career">Career</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="javascript:;" title="CSR">CSR</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/csr.php">CSR Philosophy</a>
                                    <a class="dropdown-item" href="/khushiyon-ka-angan.php">Khushiyon Ka Angan</a>

                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/Partner-Connector" title="Partner">Partner</a>
                            </li>
                            <!--<li class="nav-item">
                            <a class="nav-link" href="blogs.php" title="Blogs">Blogs</a>
                        </li>-->
                            <li class="nav-item">
                                <a class="nav-link" href="/branch-locator.php" title="Branch Locator">Branch Locator</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact-us.php" title="Contact Us">Contact Us</a>
                            </li>
                            <li class="nav-item"><a class="social-links-desc" target="_blank" href="https://twitter.com/GrihumHousing" aria-label="Twitter Desk hd"><img src="images/twitter-icon.png" alt="" width="30" height="30"></a></li>
                            <li class="nav-item"><a class="social-links-desc" target="_blank" href="https://www.linkedin.com/company/grihum-housing/" aria-label="Linkedin Desk hd"><img src="images/linkedin-icon.png" alt="" width="30" height="30"></a></li>
                            <li class="nav-item"><a class="social-links-desc" target="_blank" href="https://www.facebook.com/GrihumHousingFinancelimited/" aria-label="Facebook Desk hd"><img src="images/fb-icon.png" alt="" width="30" height="30"></a></li>
                            <li class="nav-item"><a class="social-links-desc" target="_blank" href="https://www.instagram.com/grihumhousingfinance/" aria-label="Instagram Desk hd"><img src="images/instagram-icon.png" alt="" width="30" height="30"></a></li>
                            <li class="nav-item"><a class="social-links-desc" target="_blank" href="https://www.youtube.com/channel/UCfPjlVSlW_R2-9Q2d32-mJA" aria-label="Youtube Desk hd"><img src="images/youtube-icon.png" alt="" width="30" height="30"></a></li>
                        </ul>
                    </div>

                    <div class="social-links-mobile">
                        <ul>
                            <li class="nav-item"><a class="social-link" target="_blank" href="https://twitter.com/GrihumHousing" aria-label="Twitter Mob hd"><img src="images/twitter-icon.png" alt="" width="30" height="30"></a></li>
                            <li class="nav-item"><a class="social-link" target="_blank" href="https://www.linkedin.com/company/grihum-housing/" aria-label="Linkedin Mob hd"><img src="images/linkedin-icon.png" alt="" width="30" height="30"></a></li>
                            <li class="nav-item"><a class="social-link" target="_blank" href="https://www.facebook.com/GrihumHousingFinancelimited/" aria-label="Facebook Mob hd"><img src="images/fb-icon.png" alt="" width="30" height="30"></a></li>
                            <li class="nav-item"><a class="social-link" target="_blank" href="https://www.instagram.com/grihumhousingfinance/" aria-label="Instagram Mob hd"><img src="images/instagram-icon.png" alt="" width="30" height="30"></a></li>
                            <li class="nav-item"><a class="social-link" target="_blank" href="https://www.youtube.com/channel/UCfPjlVSlW_R2-9Q2d32-mJA" aria-label="Youtube Mob hd"><img src="images/youtube-icon.png" alt="" width="30" height="30"></a></li>
                        </ul>
                    </div>

                    <div class="collapse navbar-collapse navbar-pd">
                        <!-- Links -->
                        <ul class="navbar-nav ml-auto align-items-center">
                            <li class="nav-item dropdown loan_menu"> <a class="nav-link dropdown-toggle" href="#" id="pl" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Housing Loans aa"> Housing Loans</a>
                                <div class="dropdown-menu" aria-labelledby="pl">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4 p-0">
                                                <ul class="nav tab-menu nav-pills flex-column" id="myTab" role="tablist">
                                                    <li> <a href="#home" data-toggle="tab" onclick="location.href='/home-loan.php'" class="active show">Home Loan <i class="fa fa-angle-right"></i></a> </li>
                                                    <li> <a href="#improvement" data-toggle="tab" onclick="location.href='/home-improvement-loan.php'" class=""> Home Improvement Loan <i class="fa fa-angle-right"></i></a> </li>
                                                    <li> <a href="#extension" data-toggle="tab" onclick="location.href='/home-extension-loan.php'" class=""> Home Extension Loan <i class="fa fa-angle-right"></i></a> </li>
                                                    <li> <a href="#construction" data-toggle="tab" onclick="location.href='/home-construction-loan.php'" class=""> Home Construction Loan <i class="fa fa-angle-right"></i></a> </li>
                                                    <li> <a href="#balancetransfer" data-toggle="tab" onclick="location.href='/home-loan-balance-transfer.php'" class=""> Home Loan Balance Transfer <i class="fa fa-angle-right"></i></a> </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-8 p-0">
                                                <div class="tab-content p-0" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="home">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <ul class="submenu">
                                                                    <li><a href="/home-loan.php">Overview</a></li>
                                                                    <li><a href="/home-loan-benefits.php">Features &amp; Benefits</a></li>
                                                                    <li><a href="/home-loan-eligibility.php">Eligibility &amp; Documents</a></li>
                                                                    <li><a href="/home-loan-interest-rates.php">Interest Rate &amp; Charges </a></li>
                                                                    <li><a href="/home-loan-emi-calculator.php">EMI Calculator</a></li>
                                                                    <li><a href="/home-loan-faq.php">FAQs</a></li>
                                                                </ul>
                                                                <div class="mb-3"> <a href="https://apply-home-loan.grihumhousing.com/" class="btns yellow-btn" style="background-color:#0061af;color:#fff;"> <span class="txt">Apply Now</span> </a> </div>
                                                            </div>
                                                            <div class="col-6 pr-5">
                                                                <p>Take a step towards owning your dream home with our affordable home loan.</p>
                                                                <img data-src="images/home-loan-pl.jpg" class="img-fluid mb-2 lazy" alt="Home Loan" width="185" height="189">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade show" id="improvement">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <ul class="submenu">
                                                                    <li><a href="/home-improvement-loan.php">Overview</a></li>
                                                                    <li><a href="/home-improvement-loan-benefits.php">Features &amp; Benefits</a></li>
                                                                    <li><a href="/home-improvement-loan-eligibility.php">Eligibility &amp; Documents</a></li>
                                                                    <li><a href="/home-improvement-loan-interest-rates.php">Interest Rate &amp; Charges </a></li>
                                                                    <li><a href="/home-improvement-loan-emi-calculator.php">EMI Calculator</a></li>
                                                                    <li><a href="/home-improvement-loan-faq.php">FAQs</a></li>
                                                                </ul>
                                                                <div class="mb-3"> <a href="https://apply-home-loan.grihumhousing.com/" class="btns yellow-btn" style="background-color:#0061af;color:#fff;"> <span class="txt">Apply Now</span> </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 pr-5">
                                                                <p>Renovate your dream home the way you want with a quick home improvement loan.</p>
                                                                <img data-src="images/home-improvement-loan-pl.jpg" class="img-fluid mb-2 lazy" alt="Home Improvement Loan" width="185" height="189">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade show" id="extension">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <ul class="submenu">
                                                                    <li><a href="/home-extension-loan.php">Overview</a></li>
                                                                    <li><a href="/home-extension-loan-benefits.php">Features &amp; Benefits</a></li>
                                                                    <li><a href="/home-extension-loan-eligibility.php">Eligibility &amp; Documents</a></li>
                                                                    <li><a href="/home-extension-loan-interest-rates.php">Interest Rate &amp; Charges </a></li>
                                                                    <li><a href="/home-extension-loan-emi-calculator.php">EMI Calculator</a></li>
                                                                    <li><a href="/home-extension-loan-faq.php">FAQs</a></li>
                                                                </ul>
                                                                <div class="mb-3"> <a href="https://apply-home-loan.grihumhousing.com/" class="btns yellow-btn" style="background-color:#0061af;color:#fff;"> <span class="txt">Apply Now</span> </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 pr-5">
                                                                <p>Make room for your growing needs in your existing home with our home extension loan.</p>
                                                                <img data-src="images/home-extension-loan-pl.jpg" class="img-fluid mb-2 lazy" alt="Home Extension Loan" width="185" height="189">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade show" id="construction">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <ul class="submenu">
                                                                    <li><a href="/home-construction-loan.php">Overview</a></li>
                                                                    <li><a href="/home-construction-loan-benefits.php">Features &amp; Benefits</a></li>
                                                                    <li><a href="/home-construction-loan-eligibility.php">Eligibility &amp; Documents</a></li>
                                                                    <li><a href="/home-construction-loan-interest-rates.php">Interest Rate &amp; Charges </a></li>
                                                                    <li><a href="/home-construction-loan-emi-calculator.php">EMI Calculator</a></li>
                                                                    <li><a href="/home-construction-loan-faq.php">FAQs</a></li>
                                                                </ul>
                                                                <div class="mb-3"> <a href="https://apply-home-loan.grihumhousing.com/" class="btns yellow-btn" style="background-color:#0061af;color:#fff;"> <span class="txt">Apply Now</span> </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 pr-5">
                                                                <p>Building your dream home made affordable with our home construction loan.</p>
                                                                <img data-src="images/home-construction-loan-pl.jpg" class="img-fluid mb-2 lazy" alt="Home Construction Loan" width="185" height="189">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade show" id="balancetransfer">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <ul class="submenu">
                                                                    <li><a href="/home-loan-balance-transfer.php">Overview</a></li>
                                                                    <li><a href="/home-loan-balance-transfer-benefits.php">Features &amp; Benefits</a></li>
                                                                    <li><a href="/home-loan-balance-transfer-eligibility.php">Eligibility &amp; Documents</a></li>
                                                                    <li><a href="/home-loan-balance-transfer-interest-rates.php">Interest Rate &amp; Charges </a></li>
                                                                    <li><a href="/home-loan-balance-transfer-emi-calculator.php">EMI Calculator</a></li>
                                                                    <li><a href="/home-loan-balance-transfer-faq.php">FAQs</a></li>
                                                                </ul>
                                                                <div class="mb-3"> <a href="https://apply-home-loan.grihumhousing.com/" class="btns yellow-btn" style="background-color:#0061af;color:#fff;"> <span class="txt">Apply Now</span> </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 pr-5">
                                                                <p>Transfer your balance home loan and enjoy affordable lower EMIs.</p>
                                                                <img data-src="images/home-loan-balance-transfer-pl.jpg" class="img-fluid mb-2 lazy" alt="Home Loan Balance Transfer" width="185" height="189">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- /.col-md-8 -->
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/loan-against-property.php" title="Loan Against Property">Loan Against Property</a>
                            </li>
                            <!-- Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:;" data-toggle="dropdown" title="Quick Pay aa">
                                    Quick Pay
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="https://ipg.grihumhousing.com/en">Pay EMI</a>
                                    <a class="dropdown-item" href="https://ipg.grihumhousing.com/en/mandate-cancellation">Mandate Cancellation</a>
                                    <a class="dropdown-item" href="/neft-rtgs.php">NEFT/RTGS Details</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:;" data-toggle="dropdown" title="Auctions aaa">
                                    Auctions
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/auction-list.php">Auction Properties</a>
                                    <a class="dropdown-item" href="/auction-notice.php">Auction Notice</a>
                                    <a class="dropdown-item" href="/pdf/E-auction-Terms-and-conditions.pdf" target="_blank">Terms & Conditions</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="https://apply-home-loan.grihumhousing.com/" class="btns yellow-btn" style="background-color: #0061af;">
                                    <span class="txt">Apply Now</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <form action="/search.php" method="get" class="srch-form-1">
                                    <div>
                                        <input type="hidden" name="zoom_sort" value="0">
                                        <input type="hidden" id="secure_token_search" name="secure_token" value="c32f57#fa83e3f5f2f8160269$b4fb5d539c47419$4362c076b24a5858#fdb94c450">
                                        <input type="text" placeholder="I'm looking for" name="zoom_query" id='zoom_searchbox2' class="srch-bar-1 zoom_searchbox">
                                        <button type="submit" class="srch-bar-1-btn" aria-label="search"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>


                </div>

            </nav>
        </div>
    </header>
    <!-- inner banner -->
    <section class="inner_banner">
        <figure class="mb-0">
            <picture>
                <source media="(max-width: 767px)" srcset="images/inner-banner/Website-Banner-mobile-2023.jpg" width="" height="" alt="Khushiyon ka Angan" />
                <source media="(max-width: 1920px)" srcset="images/inner-banner/contact_us_banner.png" alt="Khushiyon ka Angan">
                <img src="images/inner-banner/contact_us_banner.png" alt="Khushiyon ka Angan" width="100%" height="" />
            </picture>
        </figure>
        <div class="container">
            <div class="inner_text">
                <h1>Khushiyon Ka Angan - Enabling Girl Child Education!</h1>
                <p>Empowering Dreams, Nurturing Futures</p>
            </div>
        </div>
        <div class="breadcrumbdiv">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="https://grihumhousing.com/">Home</a></li>
                    <li class="breadcrumb-item active"><a href="khushiyon-ka-angan.php">Khushiyon Ka Angan</a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="section-padding connect">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="heading pt-0"> Dear Valued Customer, Greetings from Grihum Housing Finance Limited (formerly, Poonawalla Housing Finance Limited)</h3>
                    <p>"Khushiyon Ka Angan" stands as a compassionate endeavor with the purpose of supporting underprivileged young girls by aiding their education fees for the academic year.
                    </p>
                    <p>
                        In light of the circular on “Framework for compensation to customers for delayed updation/
                        rectification of credit information” issued by the Reserve Bank of India, in case your compliant for
                        updation/rectification of credit information is not resolved within a period of 30 calendar days from
                        the date of the initial filing of the complaint, you shall be entitled to compensation in accordance with
                        the RBI Circular. In case you are eligible for compensation, the compensation amount will be credited to
                        your bank account within five (5) working days of the resolution of the complaint or receipt of the
                        updated bank account details by the Company.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="formddiv">
                        <div>
                            <div class="container">
                                <div class="formdiv">
                                    <form name="connector" id="connector" action="khushiyon_ka_angan_controller.php" method="post" enctype="multipart/form-data">
                                        <div class="form">
                                            <div class="row align-items-center m-0 justify-content-center mb-3">
                                                <h2 class="formtext">Application Form for Girl Child Education Program</h2>
                                            </div>

                                            <div class="row mr5px form-group mblmb0 mblmb0">
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <label>Name<span class="astrikcss">*</span></label>
                                                        <input type="text" name="full_name" id="full_name" class="form-control LettersOnlyDot autoCapitalized" placeholder="Enter Full Name">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 mobile_div">
                                                    <div class="row ml5px">
                                                        <label>Registered Email ID<span class="astrikcss">*</span></label>
                                                        <input type="text" name="email" id="email" class="form-control effect-1 " placeholder="Enter Email" />
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row mr5px form-group mblmt0 mblmb0">

                                                <div class="col-lg-6 mobile_div_contact">
                                                    <div class="row">
                                                        <label>Registered Mobile Number<span class="astrikcss">*</span></label>
                                                        <input type="hidden" name="otp_verified_contact" id="otp_verified_contact" />
                                                        <span class="w-100"><input type="number" name="phoneno" id="Mobile_Number" class="form-control effect-1 NumberOnly" placeholder="Enter Mobile Number" maxlength="10" oninput="validDigits(this,10);" /></span>
                                                        <span class="error" id="lblError_mobile"></span>
                                                        <span class="lblrght mt-1a labelotpsent"></span>
                                                        <span class="error_msg" id="lblError_mobile_contact"></span>
                                                        <span class="error_msg" id="lbl_mobile_contact" style="color:green"></span>
                                                    </div>
                                                </div>
                                                

                                                 <div class="col-lg-6 otp_mobile_div_contact" style="display: none">
                                                    <div class="row ml5px">
                                                        <label>OTP<span class="astrikcss">*</span></label>
                                                        <span class="w-100"><input type="number" oninput="validDigits(this,4);" name="otp" id="OTP" class="form-control effect-1 NumberOnly" placeholder="Enter OTP" readonly /></span>
                                                        <span class="error_msg error" id="otp_error_contatus" style="display: none;"></span>
                                                        <span class="error_msg" id="otp_success" style="color:green"></span>
                                                  </div>
                                                </div> 

                                            </div>

                                            <div class="row mr5px form-group mblmb0 mblmb0">

                                                <div class="col-lg-6 ">
                                                    <div class="row">
                                                        <label>Loan Account Number<span class="astrikcss">*</span></label>
                                                        <input type="number" name="loan_no" id="loan_no" class="form-control effect-1 NumberOnly" placeholder="Enter Loan Account Number" />

                                                    </div>
                                                </div>


                                                <div class="col-lg-6 ">
                                                    <div class="row ml5px">
                                                        <label>Grievance Number<span class="astrikcss">*</span></label>
                                                        <input type="text" name="grievance_no" id="grievance_no" class="form-control effect-1 NumberOnly" placeholder="Enter Grievance Number" />

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row mr5px form-group mblmt0 mblmb0">
                                                <h6><u>Banking details – Preferred mode of payment</u></h6>

                                            </div>

                                            <div class="row mr5px form-group mblmb0 mt2">
                                                <div class="col-lg-6 aadhar-upload">
                                                    <div class="row">
                                                        <label>scanned copy of cancelled cheque mandatory&gt;<span class="error">*</span></label>
                                                        <div class="file-input-container">
                                                            <div class="file-atch">
                                                                <span id="file-input-text">Attach File</span>
                                                                <span id="file-attachment-icon" class="fa fa-paperclip"></span>
                                                            </div>
                                                            <input type="file" name="cancelled_cheque" id="cancelled_cheque" class="file-input" onchange="updateFileInputText(this)">

                                                        </div>
                                                        <div class="error" id="cheque_error" display="none"></div>
                                                    </div>

                                                </div>
                                                <div class="col-lg-6 ">
                                                    <div class="row ml5px">
                                                        <label>Unified Payment Interface (UPI) ID</label>
                                                        <input type="text" name="upi_id" id="upi_id" class="form-control effect-1 " placeholder="Enter UPI ID" />

                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row mr5px form-group mblmt0 mblmb0">

                                                <label class="error" style="display:none" id="declaration-error">Please accept the declaration</label>
                                                <div class="row row60hta pb-3">
                                                    <div class="col-lg-12">
                                                        <div class="pt-2 d-flex col-12 pl-0 plc">
                                                            <label class="position-relative mb-0"><input type="checkbox" name="consent" class="mt-0" id="chktnc"><span class="checkmark"></span> </label>
                                                            <h6 class="desclaimer ml-2 mb-0">I affirm that the details provided by me in this application form are truthful and complete. I accept that the Eligibility of any girl child for this Girl Child Education Program shall be determined solely by Grihum Housing Finance Limited (formerly, Poonawalla Housing Finance Limited) and decision of Grihum in this connection shall be final and binding on all the concerned parties; and that Grihum may at its sole discretion withdraw or amend any terms and conditions of this Program at its sole discretion, without intimation to any party.</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="hl-form-submit-btn" class="text-center" style="display: none">
                                                    <input class="ybtn yellow-btn-bg mb-1 mt-1 txt" name="submit" type="submit" id="btn0" value="Submit">
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <style>
        input::-webkit-inner-spin-button,
        input::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0
        }

        input[type=number] {
            -moz-appearance: textfield
        }

        .applyhiddenDesktop {
            display: none;
        }

        .form_col,
        .inputbox {
            float: left;
            width: 100%
        }

        .t-c-text p a:hover {
            color: #fff;
            text-decoration: underline
        }

        .subc_form h4 {
            font-weight: 700
        }

        .subc_sec .subc_form h4 {
            margin-top: 30px
        }

        .form_col {
            margin-bottom: 14px
        }

        .ft_subc label,
        .inputbox,
        .subc_form label {
            margin-bottom: 0
        }

        .inputbox {
            position: relative;
            padding: 5px 10px;
            font-size: 15px;
            line-height: 20px;
            font-weight: 500;
            background-color: #fff;
            color: #223a72;
            border: 0;
            border-bottom: 1px solid #e6b120;
            outline: 0
        }

        .close_popup,
        .feedback_form_area .btns .txt {
            color: #0061af
        }

        .subc_btn {
            clear: both
        }

        .ft_subc .inputbox {
            font-size: 13px
        }

        .ft_subc .error,
        .subc_form .error {
            top: 0 !important;
            font-size: 14px
        }

        .ft_subc .error {
            color: #fff
        }

        .ft_subc .blue-btn {
            padding: 5px 15px
        }

        .popup_overlay {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, .8);
            z-index: 990;
            display: none
        }

        .popup {
            position: fixed;
            left: 50%;
            width: 600px;
            transform: translate(-50%, -50%);
            z-index: 999;
            top: -100%;
            transition: .5s ease-in-out
        }

        .popup_inner,
        footer .footer-link h3 {
            position: relative
        }

        .popup_inner {
            background-color: #fff;
            padding: 30px;
            text-align: center
        }

        .popup_inner h4 {
            font-weight: 700;
            margin-bottom: 8px
        }

        .popup_inner p {
            font-size: 14px;
            line-height: 19px;
            margin-bottom: 20px;
            color: #223a72
        }

        .popup.active {
            top: 50%
        }

        .close_popup {
            position: absolute;
            right: 5px;
            top: 5px;
            width: 30px;
            height: 30px;
            line-height: 28px;
            text-align: center;
            font-size: 24px;
            font-weight: 700
        }

        .sub_ok a,
        .sub_ok span {
            display: initial
        }

        .sub_ok {
            padding: 7px 16px;
            font-size: 14px
        }

        .ft_subc .inputbox {
            border-bottom: none;
            color: #223a72
        }

        .ft_subc .btn-ftsub {
            background: linear-gradient(to right, #fff, #fff);
            background-repeat: no-repeat;
            background-size: 0 100%;
            color: #fff;
            background-color: #fff !important
        }

        .ft_subc .btns:hover::after {
            background-color: #253a71
        }

        .ft_subc .blue-btn:hover {
            color: #253a71;
            background-size: 100% 100%
        }

        .ft_subc input:-webkit-autofill,
        .ft_subc input:-webkit-autofill:focus input:-webkit-autofill,
        .ft_subc input:-webkit-autofill:hover,
        .subc_form input:-webkit-autofill,
        .subc_form input:-webkit-autofill:focus input:-webkit-autofill,
        .subc_form input:-webkit-autofill:hover {
            -webkit-text-fill-color: #223a72;
            -webkit-box-shadow: 0 0 0 1000px #fff inset
        }

        .btns:after,
        .feedback_form_area .white-btn {
            background-color: #fff !important
        }

        .feedback_form_area .btns:after,
        .ft_subc .btns:after {
            background-color: #0061af !important
        }

        .feedback_form_area .input_container select.floatlabel {
            filter: none
        }

        .df {
            display: flex
        }

        @media only screen and (min-device-width:1600px) and (max-device-width:2560px) {
            .popup_inner .btns {
                font-size: 14px;
                line-height: 19px;
                padding: 7px 16px
            }

            .subc_sec .subc_form h4 {
                margin-top: 50px
            }
        }

        @media only screen and (max-width:1280px) {
            .subc_sec .subc_form h4 {
                margin-top: 15px
            }
        }

        @media only screen and (max-width:1100px) {
            .subc_sec .subc_form h4 {
                margin-top: 0
            }
        }

        @media only screen and (max-width:991px) {
            .subc_form h4 {
                font-size: 18px
            }

            .subc_sec .p-4 {
                padding: 1rem !important
            }

            .my-4,
            .subc_sec .mb-4 {
                margin-top: .5rem !important;
                margin-bottom: 1rem !important
            }

            .subc_sec .subc_form .inputbox {
                font-size: 13px;
                line-height: 18px
            }

            .ft_subc .error,
            .subc_form .error {
                font-size: 12px;
                line-height: 17px
            }
        }

        @media only screen and (max-width:767px) {
            .applyhiddenDesktop {
                display: block;
            }

            .name_mobile {
                width: 50%
            }

            .popup {
                width: 450px
            }

            .popup_inner h4 {
                font-size: 20px
            }
        }

        @media only screen and (max-width:599px) {
            .popup {
                width: 100%;
                padding: 0 30px
            }

            .popup_inner h4 {
                font-size: 18px
            }
        }

        @media only screen and (max-width:575px) {
            .df {
                display: block
            }
        }

        @media only screen and (max-width:480px) {
            .popup {
                padding: 0 15px
            }

            .popup_inner p {
                font-size: 11px
            }
        }

        @media only screen and (max-width:320px) {
            .popup_inner p {
                font-size: 10px
            }
        }
    </style>
    <style>
        .input_container {
            margin: 0 0 16px 0;
        }

        .feedback_form_area_inner p {
            font-weight: 600;
            font-size: 14px;
        }

        .feedback_form_area_inner .input_container textarea.floatlabel {
            height: 50px;
        }

        @media (max-width: 768px) {
            .input_container {
                margin: 0 0 20px 0;
            }

            .feedback_form_area_inner .input_container textarea.floatlabel {
                height: 60px;
            }
        }
    </style>
    <style>
        .feedback-form {
            top: 24%;
            min-height: 360px;
        }

        .feedback-form-btn {
            top: 160px;
        }

        .feedback_form_area_inner {
            min-height: 360px;
        }

        .feedback_form_area_inner .input_container label {
            color: #fff;
        }

        .feedback_form_area_inner p {
            font-size: 15px;
            color: #efefef;
            font-weight: normal;
        }

        .footer-bg {
            background: url(images/footer_bg.jpg);
            background-size: 100% 100%;
        }

        .whiteline {
            margin-top: 1.3rem;
            margin-bottom: 0;
            border: 0;
            border-top: 1px solid #fff;
            width: 100%;
        }

        @media only screen and (max-width: 767px) {
            .feedback-form {
                min-height: auto;
                top: unset;
            }

            .feedback-form-btn {
                top: auto;
            }

            .feedback_form_area_inner {
                width: 100%;
                padding: 75px 30px 10px 30px;
                min-height: 470px;
            }

            .feedback_form_area_inner .input_container label {
                top: 0;
            }

            .feedback_form_area_inner p {
                font-size: 18px;
            }

            .feedback_form_area_inner .input_container label {
                font-size: 15px;
            }

            .feedback_form_area_inner .error {
                font-size: 13px;
            }

            .feedback_form_area_inner .input_container .floatlabel.filled+label,
            .feedback_form_area_inner .input_container .floatlabel:focus+label {
                font-size: 13px;
                top: -14px;
                ;
            }

            .feedback_form_area_inner .input_container .floatlabel {
                font-size: 15px;
            }

            .feedback_form_area .input_container {
                margin: 0 0 30px 0;
            }

            .footer-bg {
                background-size: auto;
            }
        }
    </style>
    <input type="hidden" id="session_show_form" value="<?php echo isset($_SESSION['show_form']) ?  $_SESSION['show_form'] :  ''; ?>" />
    <input type="hidden" id="session_lsq_status" value="<?php echo isset($_SESSION['lsq_status']) ?  $_SESSION['lsq_status'] :  ''; ?>" />
    <footer class="section-padding bg-blue footer-bg pb-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="footer-link">
                        <h3 class="open-link">Housing Loans</h3>
                        <ul>
                            <li><a href="/home-loan.php">Home Loan</a></li>
                            <li><a href="/home-improvement-loan.php">Home Improvement Loan</a></li>
                            <li><a href="/home-extension-loan.php">Home Extension Loan</a></li>
                            <li><a href="/home-construction-loan.php">Home Construction Loan</a></li>
                            <li><a href="/home-loan-balance-transfer.php">Home Loan Balance Transfer</a></li>
                            <li><a href="/loan-against-property.php">Loan Against Property</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 footer-two">
                    <div class="footer-link">
                        <h3 class="open-link">Calculators</h3>
                        <ul>
                            <li><a href="/home-loan-emi-calculator.php">Home Loan EMI Calculator</a></li>
                            <li><a href="/home-loan-eligibility-calculator.php">Home Loan Eligibility Calculator</a></li>
                            <li><a href="/home-loan-balance-transfer-calculator.php">Home Loan Balance Transfer Calculator</a></li>
                            <li><a href="/home-loan-tax-benefit-calculator.php">Home Loan Tax Benefit Calculator</a></li>
                            <li><a href="/lap-emi-calculator.php">Loan Against Property EMI Calculator</a></li>
                        </ul>
                    </div>
                    <div class="footer-link">
                        <h3 class="open-link">Quick Pay</h3>
                        <ul>
                            <li><a href="https://ipg.grihumhousing.com/en">Pay EMI</a></li>
                            <li><a href="https://ipg.grihumhousing.com/en/mandate-cancellation">Mandate Cancellations</a></li>
                            <li><a href="/neft-rtgs.php">NEFT/RTGS Details</a></li>
                        </ul>
                    </div>
                    <div class="footer-link">
                        <h3 class="mb-3"><a href="/pdf/Customer-Education-GHFL.pdf" target="_blank">Customer Education</a></h3>
                    </div>
                </div>
                <div class="col-sm-3 footer-one">
                    <div class="footer-link">
                        <h3 class="open-link">About Us</h3>
                        <ul>
                            <li><a href="/about-us.php">Who we are</a></li>
                            <li><a href="/about-us-board-of-directors.php">Board of Directors</a></li>
                            <li><a href="/management-team.php">Management Team</a></li>
                        </ul>
                    </div>
                    <div class="footer-link">
                        <h3 class="open-link">Auctions</h3>
                        <ul>
                            <li><a href="/auction-list.php">Auction Properties</a></li>
                            <li><a href="/auction-notice.php">Auction Notice</a></li>
                            <li><a href="/pdf/E-auction-Terms-and-conditions.pdf" target="_blank">Terms and Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="footer-link">
                        <h3 class="mb-3"><a href="/Partner-Connector">Partner</a></h3>
                    </div>
                    <div class="footer-link">
                        <h3 class="mb-3"><a href="/branch-locator.php">Branch Locator</a></h3>
                    </div>
                    <div class="footer-link">
                        <h3 class="mb-3"><a href="/investors.php">Investors</a></h3>
                    </div>
                    <div class="footer-link">
                        <h3 class="mb-3"><a href="/media-center.php">Media Centre</a></h3>
                    </div>
                    <div class="footer-link">
                        <h3 class="mb-3"><a href="/careers.php">Careers</a></h3>
                    </div>
                    <div class="footer-link">
                        <h3 class="mb-3"><a href="/blogs.php">Blogs</a></h3>
                    </div>
                    <div class="footer-link">
                        <h3 class="mb-3"><a href="/contact-us.php">Contact Us</a></h3>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="footer-link">
                        <h3 class="open-link">Regulatory Disclosure</h3>
                        <ul>
                            <li><a href="/fair-practice-code.php" translate="_blank">Fair Practice Code</a></li>
                            <li><a href="/mitc.php" target="_blank">MITC</a></li>
                            <li><a href="/interest-rate-structure.php">Rate of Interest & Schedule of Charges</a></li>
                            <li><a href="/query-resolution.php">Query Resolution TAT</a></li>
                            <li><a href="/kyc.php">FAQs on KYC Requirements</a></li>
                            <li><a href="/sanction-letter.php">Sanction Letter</a></li>
                            <li><a href="/range-of-rate-of-interest.php">Range of Rate of Interest</a></li>
                            <li><a href="/secretarial-disclosures.php">Secretarial Disclosures</a></li>
                            <li><a href="/pdf/investor-governance/Grievance-Redressal-Mechanism-for-Customers.pdf" target="_blank">Grievance Redressal Mechanism</a></li>
                            <li><a href="/investors/pdf/1-MFL_Policy-on-Resolution-Framework-2_Final.pdf" target="_blank">Resolution Framework 1.0</a></li>
                            <li><a href="/investors/pdf/MHF_Policy-for-Loan-Moratorium-under-Covide-19-Regulatory-Package-2.0_Upload.pdf" target="_blank">Resolution Framework 2.0</a></li>
                            <li><a href="/investors/pdf/FAQ_Resolution-Framework-2.0_Housing.pdf" target="_blank">FAQs</a></li>
                            <li><a href="/pdf/Procedure-to-be-followed-in-case-of-handover-of-the-document-to-legal-heirs.pdf" target="_blank">Procedure for return of original property documents to legal heirs</a></li>
                            <li><a href="/information-under-sarfaesi-act-2002.php" target="_blank">Information under SARFAESI Act, 2002</a></li>
                        </ul>
                    </div>
                    <div class="footer-link">
                        <h3>Follow us on:</h3>
                        <div class="social">
                            <a href="https://twitter.com/GrihumHousing" aria-label="Twitter ft"><i class="fa fa-twitter" target="_blank"></i></a>
                            <a href="https://www.linkedin.com/company/grihum-housing/" aria-label="Linkedin ft"><i class="fa fa-linkedin" target="_blank"></i></a>
                            <a href="https://www.facebook.com/GrihumHousingFinancelimited/" aria-label="Facebook ft"><i class="fa fa-facebook" target="_blank"></i></a>
                            <a href="https://www.instagram.com/grihumhousingfinance/" aria-label="Instagram ft"><i class="fa fa-instagram" target="_blank"></i></a>
                            <a href="https://www.youtube.com/channel/UCfPjlVSlW_R2-9Q2d32-mJA" target="_blank" aria-label="Youtube ft"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="whiteline">
        <div class="copyright">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-7">
                        <p class="mb-0">Copyright © 2023 Grihum Housing Finance Limited. All rights reserved <br /><a href="/legal-disclaimer.php" target="_blank">Legal Disclaimer</a> | <a href="/terms-and-conditions.php" target="_blank">Terms and Conditions</a> | <a href="/privacy-policy.php" target="_blank">Privacy Policy</a> | <a href="/sitemap.php">Sitemap</a></p>
                    </div>
                    <div class="col-sm-5 text-right">
                        <p class="mb-0">Formerly, Poonawalla Housing Finance Limited</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a href="javascript:" class="back-to-top" id="back-to-top" aria-label="Back-to-Top"><i class="fa fa-arrow-up"></i> </a>
    <section class="pop_up_wrap clearfix">
        <div class="popup_overlay"></div>
        <div class="popup">
            <div class="popup_inner">
                <img class="lazy" data-src="images/subscribe-thank-you.png" alt="Newsletter Subscription" width="163" height="145" />
                <h4 class="mt-3">Thank You for Subscribing!</h4>
                <p>You will now receive updates on the new insightful blog, company announcement, product offering, & more.</p>
                <div>
                    <a href="javascript:void(0)" class="sub_ok btns blue-btn" style="background-color: #e6b120;">
                        <span class="txt">Ok</span>
                    </a>
                </div>
                <a href="javascript:void(0)" class="close_popup">x</a>
            </div>
        </div>
    </section>

    <div id="feedback-form" class="feedback-form">
        <a href="javascript:;" class="feedback-form-btn" id="OpenForm"><img src="images/icon_getacallback.png" alt="Calling logo" width="20" height="20" /> Get a Call Back</a>
        <a href="https://apply-home-loan.grihumhousing.com/" class="feedback-form-btn applyhiddenDesktop" id=" "><img src="images/icon_applynow.png" alt="Apply Now logo" width="20" height="20"> Apply Now</a>
        <div class="feedback_form_area">
            <div class="feedback_form_area_inner">
                <form name="callbackform" id="callbackform" method="post" action="">
                    <input type="hidden" id="secure_token_callback" name="secure_token" value="">
                    <div class="row">
                        <div class="col-sm-12 mb-4">
                            <p>Get a Call Back for Home Loan</p>
                        </div>
                        <div class="col-sm-12">
                            <div class="input_container">
                                <input type="text" id="fname" class="floatlabel LettersOnlyDot autoCapitalized" oninput="validDigits(this,49);" name="fname">
                                <label for="fname">Enter Name</label>
                            </div>
                        </div>
                        <div class="col-sm-12 mobile_div">
                            <div class="input_container">
                                <input type="number" id="mobilee" class="floatlabel" oninput="validDigits(this,10);" maxlength="10" name="mobilee">
                                <label for="mobilee">Mobile Number</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input_container select_container">
                                <select id="select-loan" name="select-loan" oninput="" class="floatlabel">
                                    <option selected=""> </option>
                                    <option value="Home Loan">Home Loan</option>
                                    <option value="Loan Against Property">Loan Against Property</option>
                                </select>
                                <label for="referred_time">Select Home Loan</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="checkbox">
                                <div class="checkbox-group">
                                    <input type="checkbox" name="chkTerm[]" value="authorise" id="chkTerm">
                                    <label for="chkTerm">
                                        By proceeding I agree to <a href="javascript:;" class="opentc">Terms & Conditions</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btns white-btn get_call_back_btn" style="background-color: #e6b222;">
                                <span class="txt">Submit</span>
                            </button>
                        </div>
                    </div>
                </form>
                <div class="row hide tncdiv">
                    <div class="col-sm-12">
                        <div class="t-c-text">
                            <button type="button" class="close closetnc">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <p><span>Terms & Conditions</span> By proceeding, I agree to the <a href="/terms-and-conditions.php" target="_blank"><u>Terms and conditions</u></a> and hereby authorize Grihum Housing Finance to Call / SMS /
                                Email. This consent will override any registration by me for DNC/NDNC.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script defer src="js/jquery.validate.js"></script>
    <script defer src="js/additional-methods.js"></script>
    <script defer src="js/common.js"></script>

    <!--LeadSquared Tracking Code Start-->
    <script type="text/javascript" src=https://web-in21.mxradon.com/t/Tracker.js></script>
    <script type="text/javascript">
        pidTracker('61624');
    </script>
    <!--LeadSquared Tracking Code End-->
    <!-- jQuery -->


    <script src="js/jquery-3.0.0.min.js"></script>

    <!--<script src="js/jquery-3.7.0.min.js"></script>-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script defer type="text/javascript">
        var cb = function() {
            var l = document.createElement('link');
            l.rel = 'stylesheet';
            l.href = 'fonts/fonts.css';
            var h = document.getElementsByTagName('head')[0];
            h.parentNode.insertBefore(l, h);
        };
        var raf = requestAnimationFrame || mozRequestAnimationFrame ||
            webkitRequestAnimationFrame || msRequestAnimationFrame;
        if (raf) raf(cb);
        else window.addEventListener('load', cb);
    </script>
    <script>
        $(document).ready(function() {
            $("#connectorstate").find('option').not(':first').remove();
            $("#city").find('option').not(':first').remove();
            console.log("ready");
            // add_state_auction_notice();
            add_connectorstate();
        });
    </script>
    <noscript>
        <link rel="stylesheet" href="fonts/fonts.css" type="text/css" media="screen">
    </noscript>

    <script>
        // Check uploaded files are correct or not
        $("#cancelled_cheque").change(function() {
            var ext = $('#cancelled_cheque').val().split(".").pop().toLowerCase();
            var file_size = $('#cancelled_cheque')[0].files[0].size;
            if ($.inArray(ext, ["jpg", "jpeg", "png", "pdf"]) == -1) {
                $('#cheque_error').html('Please upload file with extension jpg,jpeg,png,pdf only !');
                $('#cancelled_cheque').val('');
                return false;
            } else if (file_size > 5242880) {
                $('#cheque_error').html('The file size more than 5MB');
                $('#cancelled_cheque').val('');
                return false;
            } else {
                $('#cheque_error').html('');
                return true;
            }
        });
        $(document).ready(function() {
            //var otp_verified = false;
            $('#connector').validate({ // initialize the plugin
                rules: {
                    full_name: {
                        required: true,
                        lettersonly: true,
                    },
                    email: {
                        required: !0,
                        mailCustom: !0,
                    },
                    phoneno: {
                        required: true,
                        digits: true,
                        minlength: 10,
                        maxlength: 10
                    },
                    loan_no: {
                        required: true,
                        digits: true,
                    },
                    grievance_no: {
                        required: true,
                    },
                    cancelled_cheque: {
                        required: true,

                    },
                    consent: {
                        required: true
                    }


                },
                messages: {
                    full_name: {
                        required: "Please enter name",
                        lettersonly: "Name should contain only alphabets"
                    },
                    phoneno: {
                        required: "Please enter mobile number",
                        digits: "Mobile number should contain only digits",
                        minlength: "Mobile number should contain 10 digits",
                        maxlength: "Mobile number should contain 10 digits"
                    },

                    email: {
                        required: "Enter a valid email ID",
                        mailCustom: "Enter a valid email ID",
                    },
                    loan_no: {
                        required: "Please enter loan no",
                    },
                    child_name: {
                        required: "Please enter child name",
                        lettersonly: "Name should contain only alphabets"
                    },
                    grievance_no: {
                        required: "Please enter gravience no",
                    },
                    cancelled_cheque: {
                        required: "Please choose cheque file"

                    },

                    consent: {
                        required: "Please accept the declaration"
                    }
                }
            });


            /* $('#connector').submit(function(e){
               e.preventDefault();
                  var formdata= $("#connector").serialize();
                 console.log(formdata);
                  $('#declaration-error').hide();
                  if (!$("[name=consent]").is(":checked")) {
                      $('#declaration-error').show();
                      return false;
                  }
                  if($("#connector").valid()){
                      $("#btn0").attr("disabled",true);
                      $.ajax({
                          type:"POST",
                          url:"submit.php",
                          data: formdata,
                          success:function(result){
                              $("#btn0").removeAttr("disabled");
                              if(result == 'success'){
                                  window.location.href = "thankyou.php";
                              }
                          }
                      });
                  }
              });
              */

        });
    </script>

    <script>
        $("#dob").datepicker({
            dateFormat: 'yy-mm-dd', //check change
            changeMonth: true,
            changeYear: true,
            yearRange: "-100:+0",
            minDate: '-21Y',
            maxDate: '-5Y',
        })
    </script>
    <script>
        $('.ui-datepicker').addClass('notranslate');
    </script>
    <script>
        function updateFileInputText(input) {
            var fileInputText = document.getElementById('file-input-text');
            var fileName = input.value.split('\\').pop();
            var validExtensions = ['.jpg', '.jpeg', '.png', '.pdf'];

            if (validExtensions.some(ext => fileName.toLowerCase().endsWith(ext))) {
                if (fileName.length > 23) {
                    fileName = fileName.substring(0, 23) + '...';
                }
                fileInputText.innerHTML = fileName;
                document.getElementById('cheque_error').innerHTML = '';
            } else {

                input.value = '';
                fileInputText.innerHTML = 'Attach File';
                document.getElementById('cheque_error').innerHTML = 'Please upload file with extension jpg, jpeg, png, pdf only!';
            }
        }
    </script>
    <!--Lazyload image script start-->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var lazyloadImages;

            if ("IntersectionObserver" in window) {
                lazyloadImages = document.querySelectorAll(".lazy");
                var imageObserver = new IntersectionObserver(function(entries, observer) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            var image = entry.target;
                            image.src = image.dataset.src;
                            image.classList.remove("lazy");
                            imageObserver.unobserve(image);
                        }
                    });
                });

                lazyloadImages.forEach(function(image) {
                    imageObserver.observe(image);
                });
            } else {
                var lazyloadThrottleTimeout;
                lazyloadImages = document.querySelectorAll(".lazy");

                function lazyload() {
                    if (lazyloadThrottleTimeout) {
                        clearTimeout(lazyloadThrottleTimeout);
                    }

                    lazyloadThrottleTimeout = setTimeout(function() {
                        var scrollTop = window.pageYOffset;
                        lazyloadImages.forEach(function(img) {
                            if (img.offsetTop < (window.innerHeight + scrollTop)) {
                                img.src = img.dataset.src;
                                img.classList.remove('lazy');
                            }
                        });
                        if (lazyloadImages.length == 0) {
                            document.removeEventListener("scroll", lazyload);
                            window.removeEventListener("resize", lazyload);
                            window.removeEventListener("orientationChange", lazyload);
                        }
                    }, 20);
                }

                document.addEventListener("scroll", lazyload);
                window.addEventListener("resize", lazyload);
                window.addEventListener("orientationChange", lazyload);
            }
        })
    </script>
</body>

</html>
<?php
if (isset($_SESSION['mail_success'])) {
    print_r($_SESSION['mail_success']);
    // die;
}
// session_destroy();
?>