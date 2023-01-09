

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"/>

    <link rel="dns-prefetch" href="http://fonts.gstatic.com/"/>
            <link rel="dns-prefetch" href="http://www.googletagmanager.com/"/>
            <link rel="dns-prefetch" href="http://www.google-analytics.com/"/>
            <link rel="dns-prefetch" href="http://pagead2.googlesyndication.com/"/>
                <link rel="preconnect" href="http://fonts.gstatic.com/"/>
            <link rel="preconnect" href="http://www.googletagmanager.com/"/>
            <link rel="preconnect" href="http://www.google-analytics.com/"/>
            <link rel="preconnect" href="http://pagead2.googlesyndication.com/"/>
    <meta name="apple-mobile-web-app-title" content="Senior Services | Senior Place Finder | VABF | ISF | ELF | EIFLF | ESPMF"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-touch-fullscreen" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="default"/>
<meta name="google" content="notranslate"/>
    <meta property="fb:app_id" content="442299370000163"/>
<link rel="shortcut icon" href="spf/img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="spf/img/apple-touch-icon-60x60">
<link rel="apple-touch-icon" sizes="76x76" href="spf/img/apple-touch-icon-76x76">
<link rel="apple-touch-icon" sizes="120x120" href="spf/img/apple-touch-icon-120x120">
<link rel="apple-touch-icon" sizes="152x152" href="spf/img/apple-touch-icon-152x152">
            <title>Senior Services | Senior Place Finder | VABF | ISF | ELF | EIFLF | ESPMF</title>
    <meta name="keywords" content="Senior Place Finder, VABF, ISF, ELF, EIFLF, ESPMF"/>
    <meta name="description" content="Find specialist for any service related to the seniors.">
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Senior Services | Senior Place Finder | VABF | ISF | ELF | EIFLF | ESPMF"/>
    <meta property="og:description" content="Find specialist for any service related to the seniors."/>
    <meta property="og:url" content="https://theseniorteam.net/"/>
    <meta property="og:site_name" content="Senior Team"/>
    <meta property="og:image" content="img/icon/ssp.png"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="Senior Services | Senior Place Finder | VABF | ISF | ELF | EIFLF | ESPMF"/>
    <meta name="twitter:description" content="Find specialist for any service related to the seniors."/>
    <meta name="twitter:site" content="@seniorteam"/>
    <meta name="twitter:image" content="img/icon/ssp.png"/>
    
        <meta name="csrf-token" content="dgqJnlX1u9TY9MEkfnEcAOPCkhA13RV7pHlBGUUg"/>
    <link media="all" type="text/css" rel="stylesheet" href="spf/css/app.css">
<link media="all" type="text/css" rel="stylesheet" href="css/icons.css">
<link media="all" type="text/css" rel="stylesheet" href="css/notify.css">
<link media="all" type="text/css" rel="stylesheet" href="css/floater.css">
    <link media="all" type="text/css" rel="stylesheet" href="css/intlTelInput.css">
<link media="all" type="text/css" rel="stylesheet" href="spf/css/theme.css">

    <script src="js/app.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id="></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', '');
    </script>
<script src="js/fingerprint2.js"></script>
<script src="js/ua-parser.js"></script>
<script>
    let fpCookie = getCookie("FP_UUID");
    let getFingerPrint = function () {
        let d1 = new Date();
        let options = {/*
            excludes: {
                enumerateDevices: true,
                pixelRatio: true,
                doNotTrack: true,
                fontsFlash: true/!*,
                plugins: true*!/
            },
            extraComponents: [
                {
                    key: 'domain',
                    getData: function (done, options) {
                        done(window.location.hostname);
                    }
                }/!*,
                {
                    key: 'domain',
                    getData: function (done, options) {
                        done(window.location.hostname);
                    }
                }*!/
            ],*/
            preprocessor: function (key, value) {
                if (key === "userAgent") {
                    let parser = new UAParser(value);
                    let userAgentMinusVersion = parser.getOS().name + ' ' + parser.getBrowser().name;
                    return userAgentMinusVersion;
                }
                return value;
            }
        };
        Fingerprint2.get(options, function (components) {
            let fp = Fingerprint2.x64hash128(components.map(function (pair) {
                return pair.value
            }).join(), 31);
            setCookie("FP_UUID", fp, 30);
            fpCookie = getCookie("FP_UUID");
            console.log("FP_UUID: ", fpCookie);
            let d2 = new Date();
            let tt = d2 - d1;
            let details = "";
            console.log("Time Taken : ", tt);
            console.log("Finger Print : ", fp);
            for (let index in components) {
                let obj = components[index];
                let line = obj.key + " = " + String(obj.value).substr(0, 100);
                details += line + "\n";
            }
            console.log(details);
        });
    };

    if (fpCookie === null) {
        let cancelId;
        let cancelFunction;
        if (window.requestIdleCallback) {
            cancelId = requestIdleCallback(getFingerPrint);
            cancelFunction = cancelIdleCallback;
        } else {
            cancelId = setTimeout(getFingerPrint, 500);
            cancelFunction = clearTimeout;
        }
    }
</script>
            <script type="application/ld+json">
    {"@context":"http:\/\/schema.org","@type":"WebPage","name":"Senior Services","url":"https:\/\/theseniorteam.net","logo":"https:\/\/assets.elite.dev\/img\/portal\/rect\/ssp.svg","sameAs":["https:\/\/theseniorteam.net"]}
</script>
</head>
<body>
<div class="loading">
    <div class="loader"></div>
</div>
<div id="divVueContainer">
    <div id="page">
        <header class=" header_in is_sticky  menu_fixed">
            <div class="container">
                        <div id="logo">
                <a href="home.php"
                   title="Senior Place Finder - A bridge between seniors and senior living gateway.">
                                        <img alt="" class="logo_sticky" src="spf/img/logo_sticky.png" width="" height="75"/>
                </a>
            </div>
            <ul id="top_menu">
                    <li>
                        <a class="btn_add" href=""
                           title="Sign In">
                            Sign In
                        </a>
                    </li>
                    <li>
                        <a class="btn_add" href="">
                            Register
                        </a>
                    </li>
                        <!--<li><a href="{{ url('/searches" class="wishlist_bt_top" title="Your searches">Your searches</a></li>-->
            </ul>
            <a class="btn_mobile" href="#menu">
                <div class="hamburger hamburger--spin" id="hamburger">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </a>
            <nav class="main-menu" id="menu">
                <ul>
                    <li>
                    <span>
                        <a href="home.php"
                           class="">
                            Home
                        </a>
                    </span>
                    <li>
                    <li>
                    <span>
                        <a href="aboutus.php"
                           class="">
                            About us
                        </a>
                    </span>
                    <li>
                    
                    <li>
                    <span>
                        <a href="howitworks.php"
                         class="">
                           How it works
                        </a>
                    </span>
                    <li>
                    <li>
                          <a href=""class="" style="color:#000000;">Find More</a>
                <ul>
                    <li>
                    <a href="">Your Senior Team</a>
                    </li>
                    <li>
                    <a href="">SRES Finder</a>
                    </li>
                    <li>
                    <a href="">VA Benefits Finder</a>
                    </li>
                    <li>
                    <a href="">Senior Investment & Finance</a>
                    </li>
                    <li>
                    <a href="">Insure Seniors Finder</a>
                    </li>
                    <li>
                    <a href="">ESPM Finder</a>
                    </li>
                    <li>
                    <a href="">Senior Elder Finder</a>
                    </li>                
                </ul>
                    <li>
                    <span>
                        <a href="contactus.php"
                           class="active">
                            Contact us
                        </a>
                    </span>
                    <li>
                </ul>
            </nav>
                    </div>
    </header>
    <!--------------------header ends------------------>
<div class="sub_header_in sticky_header">
    <div class="container">
        <h1>Contact us</h1>
    </div>
</div>
<main>

<div class="container margin_60_35">
    <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 pr-xl-5">
            <div class="main_title_3">
                <span></span>
                <h2>Send us a message</h2>
                <p>
                    Write us your queries and complaints if any to improve our service.
                </p>
            </div>
            <div id="message-contact"></div>
            <form action="#" autocomplete="off" id="frmContact" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>First Name</label>
                            <input class="form-control" id="txtFirstName" name="first_name" type="text"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input class="form-control" id="txtLastName" name="last_name" type="text"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" id="txtEmail" name="email"
                                   type="email"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Telephone</label>
                            <input type="tel" class="form-control" id="txtPhone"
                                   name="phone" placeholder="Phone Number"
                                   data-type="intl"
                                   data-error="Please enter a phone number."/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" id="txtMessage" name="message" rows="4"></textarea>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                                                                <div class="g-recaptcha"
                                     data-sitekey="6Le6KHEbAAAAAB57k80vErufc-TOSYT5Oph8NJoT">
                                </div>
                                                        </div>
                    </div>
                </div>
                <p class="add_top_30">
                    <input class="btn_1" id="submit-contact" type="submit" value="Submit">
                </p>
            </form>
        </div>
        <div class="col-xl-5 col-lg-6 pl-xl-5">
            <div class="box_contacts">
                <img alt="phone" src="svg/phone.png" width="40" height="40">
                <h2>Need Help?</h2>
                <a href="#">(+1) 833-487-7786</a>
               <br>
                <a href="mailto:info@yourseniorteam.com">
                    info@yourseniorteam.com</a>
            </div>
            
            <div class="box_contacts">
               <img alt="home-address" src="svg/home-address.png" width="40" height="40">
                <h2>Address</h2>
                <a href="#">
                    23638 Newhall Ave <br>Ste 6 PMB 1007 <br>Newhall, CA 91321
                </a>
            </div>
        </div>
    </div>
</div>

<div style="background: #DBF9FC;" class="row justify-content-center">
    <h2 class="mt-3"> Map View </h2>
    <br>
    <div class="offset-1">
        <p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3293.063451377966!2d-118.53878138413985!3d34.374306408135055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c28688f05d91e1%3A0x3fc7fdd81620c292!2s23235%208th%20St%2C%20Santa%20Clarita%2C%20CA%2091321%2C%20USA!5e0!3m2!1sen!2sin!4v1639403344632!5m2!1sen!2sin" width="1300" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </p>
    </div>
</div>
    </main>
    <div id = "myModalContainer">
        <div class="modal fade" id="myModal" style="max-height: 500px !important; margin-top: 70px;">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
              <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Terms and Conditions</h4>
                  <button type="button" class="close" data-dismiss="modal">&#x274C;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <h5>Access & Services</h5>
                    <p>Your access to data, services, resources, and benefits is free. We offer you information filtered by your requests, needs, and circumstances as provided.</p>
                    <h5>Consumer Benefit</h5>
                    <p>With your free access to search, the senior market by your profile gets you first-hand knowledge, qualified professionals, and executives with authority to advise and act on your behalf.</p>
                    <p>Keep Your Senior Team Lists, free initial consultations, Cash Vouchers, Gift Cards, and a private secured Dashboard to manage it all.</p>
                    <h5>Terms & Conditions</h5>
                    <p>Users are required to respect the data and to act in good faith when searching for services and products. Also to provide status updates, and maintain your progress from emails sent and notifications in Dashboard.</p>
                    <h5>Fees & Payment</h5>
                    <p>There is no fees for your use and access to tools and data to form Your Senior Team to support your needs as a senior. </p>
                    <h5>Club & System Rules</h5>
                    <p>Trust and honesty can be expected from the Members of Your Senior Team and all activity is expected to abide by the rules and ethics of business and consumer rights.</p>
                    <p>We believe that everyone should treat seniors as if they were your mother or father.</p>
                    <h5>Privacy & Security</h5>
                    <p>Your information, activity, interactions, and communications are viewed only by you, the relevant party to any transaction you initiate, and to whom it is intended.</p>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

              </div>
            </div>
          </div>
          <div class="modal fade" id="myModal1" style="max-height: 500px !important; margin-top: 70px;">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
              <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Privacy Policy</h4>
                  <button type="button" class="close" data-dismiss="modal">&#x274C;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <h5>Access & Services</h5>
                    <p>Your access to data, services, resources, and benefits is free. We offer you information filtered by your requests, needs, and circumstances as provided.</p>
                    <h5>Consumer Benefit</h5>
                    <p>With your free access to search, the senior market by your profile gets you first-hand knowledge, qualified professionals, and executives with authority to advise and act on your behalf.</p>
                    <p>Keep Your Senior Team Lists, free initial consultations, Cash Vouchers, Gift Cards, and a private secured Dashboard to manage it all.</p>
                    <h5>Terms & Conditions</h5>
                    <p>Users are required to respect the data and to act in good faith when searching for services and products. Also to provide status updates, and maintain your progress from emails sent and notifications in Dashboard.</p>
                    <h5>Fees & Payment</h5>
                    <p>There is no fees for your use and access to tools and data to form Your Senior Team to support your needs as a senior. </p>
                    <h5>Club & System Rules</h5>
                    <p>Trust and honesty can be expected from the Members of Your Senior Team and all activity is expected to abide by the rules and ethics of business and consumer rights.</p>
                    <p>We believe that everyone should treat seniors as if they were your mother or father.</p>
                    <h5>Privacy & Security</h5>
                    <p>Your information, activity, interactions, and communications are viewed only by you, the relevant party to any transaction you initiate, and to whom it is intended.</p>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

              </div>
            </div>
          </div>
          <div class="modal fade" id="myModal2" style="max-height: 500px !important; margin-top: 70px;">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
              <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Cookie Policy</h4>
                  <button type="button" class="close" data-dismiss="modal">&#x274C;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <h5>Access & Services</h5>
                    <p>Your access to data, services, resources, and benefits is free. We offer you information filtered by your requests, needs, and circumstances as provided.</p>
                    <h5>Consumer Benefit</h5>
                    <p>With your free access to search, the senior market by your profile gets you first-hand knowledge, qualified professionals, and executives with authority to advise and act on your behalf.</p>
                    <p>Keep Your Senior Team Lists, free initial consultations, Cash Vouchers, Gift Cards, and a private secured Dashboard to manage it all.</p>
                    <h5>Terms & Conditions</h5>
                    <p>Users are required to respect the data and to act in good faith when searching for services and products. Also to provide status updates, and maintain your progress from emails sent and notifications in Dashboard.</p>
                    <h5>Fees & Payment</h5>
                    <p>There is no fees for your use and access to tools and data to form Your Senior Team to support your needs as a senior. </p>
                    <h5>Club & System Rules</h5>
                    <p>Trust and honesty can be expected from the Members of Your Senior Team and all activity is expected to abide by the rules and ethics of business and consumer rights.</p>
                    <p>We believe that everyone should treat seniors as if they were your mother or father.</p>
                    <h5>Privacy & Security</h5>
                    <p>Your information, activity, interactions, and communications are viewed only by you, the relevant party to any transaction you initiate, and to whom it is intended.</p>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

              </div>
            </div>
          </div>
    </div>


    <!--------------------footer starts------------------>
    <footer>
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div>
                    <h5 class="mt-2">About Us</h5>
                        <img src="spf/img/logo.png" width="200"/>
                        <p class="mt-1 mb-0 text-left">
                           Using your requests to find the
                            right place, we wanted to provide
                            a servie that empowers your ability
                            to shop with dignity and confidence.
                            This is Your Senior Team for senior
                            living and care.
                        </p>
                    </div>
                   
                </div>
                <br>
                <br>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a aria-controls="divQuickContacts" aria-expanded="false" class="collapse_bt_mobile"
                       data-target="#divQuickContacts" data-toggle="collapse">
                        <h3>Contact us</h3>
                        <div class="circle-plus closed">
                            <div class="horizontal"></div>
                            <div class="vertical"></div>
                        </div>
                    </a>
                    <div class="collapse show" id="divQuickContacts">
                        <p class="mb-2 text-left">
                            We are always looking to improve and offer a better service. If you have any ideas or questions
                            call.
                        </p>
                        <ul class="contacts mt-3">
                            <li>
                            <img alt="phone" src="svg/phone.png" width="20" height="20">
                            (+1) 833-487-7786
                        </li>
                        <li>
                                <img alt="mail" src="svg/mail.png" width="20" height="20">
                            <a href="mailto:info@yourseniorteam.com">info@yourseniorteam.com</a>
                        </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a aria-controls="divQuickSubscribe" aria-expanded="false" class="collapse_bt_mobile"
                       data-target="#divQuickSubscribe" data-toggle="collapse">
                        <div class="circle-plus closed">
                            <div class="horizontal"></div>
                            <div class="vertical"></div>
                        </div>
                       
                    </a>
                    
                    <div class="follow_us">
                        <h5 class="mt-2">Follow Us</h5>
                        <ul>
                        <li class="facebook">
                            <a href="https://www.facebook.com/Senior-Place-Finder-1602955246662850/" target="_blank">
                                <img alt="facebook" src="svg/facebook.png" width="20" height="20">
                            </a>
                        </li>
                        <li class="twitter">
                            <a href="https://twitter.com/TheSeniorTeam2" target="_blank">
                                <img alt="twitter" src="svg/twitter.png" width="20" height="20">
                            </a>
                        </li>
                        <li class="youtube">
                            <a href="https://www.youtube.com/watch?v=nyNd17hZlqA" target="_blank">
                                <img alt="youtube" src="svg/youtube.png" width="20" height="20">
                            </a>
                        </li>
                        <li class="pinterest">
                            <a href="https://www.pinterest.co.uk/pin/707557791432144028/" target="_blank">
                                <img alt="pinterest" src="svg/pinterest.png" width="20" height="20">
                            </a>
                        </li>
                        <li class="instagram">
                             <a href="https://www.instagram.com/yourseniorteam1/" target="_blank">
                              <img alt="instagram" src="svg/instagram.png" width="20" height="20">
                            </a>
                        </li>
                        <li class="linkedin">
                        <a href="https://www.linkedin.com/in/steve-fecske-7721291a" target="_blank">
                            <img alt="linkedin" src="svg/linkedin.png" width="20" height="20">
                        </a>
                        </li>
                    </ul>
                         <a href="https://yourseniorteam.com/" target="_blank">
                    <br>
                    <img src="img/icon/YSTlogoFix2.png" width="150" />
                    </a>
                    </div>
                </div>
            </div>
            <br>
            <br>

             <span>
                            Copyright &copy; 2022
                           <a href="">
                                The Senior Team Inc.
                                
                            </a>, All rights reserved.
                        </span>
            <hr>
            <div class="row">
               
                <div class="col-lg-12">
                    <ul class="text-center copyright">
                        <li class="float-left">
                            <p>
                        Developed by The Senior Team Inc.
                    </p>
                        </li>
                        <ul class="float-right" id="additional_links">
                            <li>
                                <a id="myBtn">Terms & Conditions</a>
                            </li>
                            <li>
                                <a id="myBtn1">Privacy Policy</a>
                            </li>
                            <li>
                                <a id="myBtn2">Cookie Policy</a>
                            </li>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--------------------footer ends------------------>
</div>
</div>
<!--------------------floating widget starts------------------>
<div class="floating-widget">
    <a class="float-item all-service d-xl-none d-lg-none d-md-none d-sm-block">
        <img src="{{ url('frontend1/img/icon/ssp.png" class="icon"/>
    </a>
   <ul>
   
                    <li>
                <a href="https://srepfinder.com/" target="_blank" class="float-item" title="Find Senior Real Estate Professionals specializing in the real estate of seniors"
                   data-toggle="tooltip" data-placement="right" data-delay="500">
                    <img class="rounded-circle icon" src="img/icon/srep.png"/>
                    <img class="full-logo" src="img/finder/text/srep.png"/>
                </a>
            </li>
                    <li>
                <a href="https://espmfinder.com/" target="_blank" class="float-item" title="Find Professionals Serving Seniors with their Estate Sales, Packing and Moving"
                   data-toggle="tooltip" data-placement="right" data-delay="500">
                    <img class="rounded-circle icon" src="img/icon/espm.png"/>
                    <img class="full-logo" src="img/finder/text/espm.png"/>
                </a>
            </li>
                    <li>
                <a href="https://elderlawlawyerfinder.com/" target="_blank" class="float-item" title="Find Attorneys specializing in the legal needs of seniors"
                   data-toggle="tooltip" data-placement="right" data-delay="500">
                    <img class="rounded-circle icon" src="img/icon/el.png"/>
                    <img class="full-logo" src="img/finder/text/el.png"/>
                </a>
            </li>
                    <li>
                <a href="https://eiflfinder.com/" target="_blank" class="float-item" title="Find Professionals specializing in Investment, Finance and Loans for Seniors"
                   data-toggle="tooltip" data-placement="right" data-delay="500">
                    <img class="rounded-circle icon" src="img/icon/eifl.png"/>
                    <img class="full-logo" src="img/finder/text/eifl.png"/>
                </a>
            </li>
                    <li>
                <a href="https://vabenefitsfinder.com/" target="_blank" class="float-item" title="Find Specialists who guarantee Seniors the Veteran’s Benefits they deserve"
                   data-toggle="tooltip" data-placement="right" data-delay="500">
                    <img class="rounded-circle icon" src="img/icon/vab.png"/>
                    <img class="full-logo" src="img/finder/text/vab.png"/>
                </a>
            </li>
                    <li>
                <a href="https://insureseniorsfinder.com/" target="_blank" class="float-item" title="Find Professionals who Insure Seniors for life, health, property and peace of mind"
                   data-toggle="tooltip" data-placement="right" data-delay="500">
                    <img class="rounded-circle icon" src="img/icon/is.png"/>
                    <img class="full-logo" src="img/finder/text/is.png"/>
                </a>
            </li>
            </ul>
</div>
<!--------------------floating widget ends------------------>
<script type="text/javascript">

    $("#myBtn").click(function(){
        $("#myModal").modal();
        $(".modal-backdrop").addClass("modal fade show");
    });
    $("#myBtn1").click(function(){
        $("#myModal1").modal();
        $(".modal-backdrop").addClass("modal fade show");
    });
    $("#myBtn2").click(function(){
        $("#myModal2").modal();
        $(".modal-backdrop").addClass("modal fade show");
    });
    var isMobile = /iPhone|Android/i.test(navigator.userAgent);
    $(document).ready(function () {
        // jQuery reverse
        $.fn.reverse = [].reverse;
        $(".floating-widget ul li").hover(function () {
            $(this).toggleClass("active");
        });
        if (isMobile) {
            // Toggle-on-click behaviour.
            $(document).on('click.floatingWidget', '.floating-widget > a', function (e) {
                var $this = $(this);
                var $menu = $this.parent();
                if ($menu.hasClass('open')) {
                    closeFABMenu($menu);
                } else {
                    openFABMenu($menu);
                }
            });
        } else {
            var $menu = $(".floating-widget");
            openFABMenu($menu);
        }
    });

    $("#terms").click(function(){
        alert("The paragraph was clicked.");
      });

    $.fn.extend({
        openFAB: function () {
            openFABMenu($(this));
        },
        closeFAB: function () {
            closeFABMenu($(this));
        }
    });

    var openFABMenu = function (btn) {
        $this = btn;
        if ($this.hasClass('open') === false) {

            // Get direction option
            var horizontal = $this.hasClass('horizontal');
            var offsetY, offsetX;

            if (horizontal === true) {
                offsetX = 40;
            } else {
                offsetY = 40;
            }

            $this.addClass('open');
            $this.find('ul .float-item').velocity(
                {scaleY: ".4", scaleX: ".4", translateY: offsetY + 'px', translateX: offsetX + 'px'},
                {duration: 0});

            var time = 0;
            $this.find('ul .float-item').reverse().each(function () {
                $(this).velocity(
                    {opacity: "1", scaleX: "1", scaleY: "1", translateY: "0", translateX: '0'},
                    {duration: 80, delay: time});
                time += 40;
            });
        }
    };

    var closeFABMenu = function (btn) {
        $this = btn;
        // Get direction option
        var horizontal = $this.hasClass('horizontal');
        var offsetY, offsetX;

        if (horizontal === true) {
            offsetX = 40;
        } else {
            offsetY = 40;
        }

        $this.removeClass('open');
        var time = 0;
        $this.find('ul .float-item').velocity("stop", true);
        $this.find('ul .float-item').velocity(
            {opacity: "0", scaleX: ".4", scaleY: ".4", translateY: offsetY + 'px', translateX: offsetX + 'px'},
            {duration: 80}
        );
    };
</script>
<div id="divLoader" class="loading-widget" align="center">
    <br/>
    <p class="text-default">
        Loading, Please Wait for a while...
    </p>
    <br/>
</div>
<div id="divOverlay" class="loading-overlay"></div>
<script type="text/javascript">
    window.loading = function (show, message) {
        let overlay = $(".loading-overlay");
        let loading = $(".loading-widget");
        $("p", loading).html(message);
        if (show) {
            let top = Math.max($(window).height() / 2 - loading[0].offsetHeight / 2 - 50, 0);
            overlay.fadeIn();
            loading.fadeIn();
            loading.css({
                top: top
            });
        } else {
            overlay.fadeOut();
            loading.fadeOut();
        }
    }
</script>
<style type="text/css">
    .loading-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #FFFFFF;
        z-index: 10060;
        opacity: 0.8;
        filter: alpha(opacity=80);
        -moz-opacity: 0.8;
        min-height: 100%;
        width: 100%;
    }
    .loading-widget {
        font-family: Arial;
        font-size: 10pt;
        width: 350px;
        height: 130px;
        display: none;
        position: fixed;
        background: transparent url("{{ url('frontend1/img/loader.gif") 50% 50% no-repeat;
        z-index: 10080;
        left: 50%;
        margin-left: -175px;
    }
    .loading-widget p {
        margin-top: 130px;
        font-weight: bolder;
        color: #035b67;
        font-size: 18px;
    }
</style>
<!--<div id="toTop"></div>-->
<script type="text/javascript">
    $(document).ready(function () {
        /*if (document.referrer !== "" &&
            (new URL(document.referrer)).origin !== window.location.origin &&
            lscache.get("last_visited")) {
            var lastVisited = lscache.get("last_visited");
            lscache.remove("last_visited");
            window.location.href = lastVisited;
        } else {
            //lscache.set("last_visited", window.location.href);
        }*/
        /*window.onbeforeunload = function() {
            lscache.set("last_visited", window.location.href);
            return;
        }*/
        fnUpdateWishFlag();
        $(document.body).on("click", ".btn-wishlist", function (e) {
            e.preventDefault();
            var that = this;
            let href = $(that).data("href");
            let rid = $(that).data("id");
            if (href) {
                $.ajax({
                    type: "get",
                    url: href,
                    beforeSend: function () {
                        $(that).addClass("block-loader");
                    },
                    success: function (response) {
                        $(that).removeClass("block-loader");
                        $(that).toggleClass("liked");
                        $("span", that).text($(that).hasClass("liked") ? "In Your List" : "Add To My List");
                        $(that).attr("data-original-title", $(that).hasClass("liked") ? "Remove From Your List" : "Add To My List").tooltip('show');
                    }
                });
            } else {
                let wishList = lscache.get("wishlist") || [];
                if (wishList.includes(rid)) {
                    wishList = _.without(wishList, rid);
                } else {
                    wishList.push(rid);
                }
                lscache.set("wishlist", wishList);
                $(this).toggleClass("liked");
                $("span", this).text($(this).hasClass("liked") ? "In Your List" : "Add To My List");
                $(this).attr("data-original-title", $(this).hasClass("liked") ? "Remove From Your List" : "Add To My List").tooltip('show');
            }
        });
            });
    window.fnUpdateWishFlag = function () {
        let wishList = lscache.get("wishlist") || [];
        wishList.forEach(function (item) {
            $(".btn-wishlist[data-id='" + item + "']").addClass("liked");
            $(".btn-wishlist[data-id='" + item + "'].liked span").text("In Your List");
            $(".btn-wishlist[data-id='" + item + "'].liked").attr("title", "Remove From Your List");
        });
    };
    </script>
    <script src="spf/js/theme.js"></script>
    <script src="js/lscache.js"></script>
    <script src="js/notify.js"></script>
    <script src="js/common.js"></script>
        <script src="js/intlTelInput.js"></script>
        <script src="js/utils.js"></script>
    <script src="js/velocity.js"></script>
    <script src="spf/js/init.js"></script>
    <script src="www.google.com/recaptcha/api.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            window.intlTelInput(document.querySelector("#txtPhone"), {
                placeholderNumberType: 'FIXED_LINE',
                hiddenInput: "phone_full",
                utilsScript: "js/utils.js"
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
                });
        function onStorageEvent(e) {
            if (e.key === "session-expired") {
                swal.fire({
                    title: "You Session seems Expired!!",
                    text: "You have logged out from your other active session.",
                    icon: "info",
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Ok, Got it!!",
                    showLoaderOnConfirm: true,
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.value) {
                        Swal.fire({
                            title: 'Please wait!!',
                            showLoaderOnConfirm: true,
                            showConfirmButton: false,
                            allowOutsideClick: false,
                            onBeforeOpen: () => {
                                Swal.showLoading();
                            }
                        });
                        window.location.reload();
                    }
                });
            }
        }
        window.addEventListener('storage', onStorageEvent);
        /*$(document).ready(function () {
            const timeout = 20000;  // 900000 ms = 15 minutes
            var idleTimer = null;
            $('*').bind('mousemove click mouseup mousedown keydown keypress keyup submit change mouseenter scroll resize dblclick', function () {
                clearTimeout(idleTimer);

                idleTimer = setTimeout(function () {
                    /!*document.getElementById('logout-form').submit();*!/
                    alert("You are idle for more than 60 seconds")
                }, timeout);
            });
            $("body").trigger("mousemove");
        });*/
    </script>
    </body>


