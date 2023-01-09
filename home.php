


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
    <link rel="apple-touch-icon" href="spf/img/apple-touch-icon-60x60.html">
    <link rel="apple-touch-icon" sizes="76x76" href="spf/img/apple-touch-icon-76x76.html">
    <link rel="apple-touch-icon" sizes="120x120" href="spf/img/apple-touch-icon-120x120.html">
    <link rel="apple-touch-icon" sizes="152x152" href="spf/img/apple-touch-icon-152x152.html">
    <title>Senior Services | Senior Place Finder | VABF | ISF | ELF | EIFLF | ESPMF</title>
    <meta name="keywords" content="Senior Place Finder, VABF, ISF, ELF, EIFLF, ESPMF"/>
    <meta name="description" content="Find specialist for any service related to the seniors.">
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Senior Services | Senior Place Finder | VABF | ISF | ELF | EIFLF | ESPMF"/>
    <meta property="og:description" content="Find specialist for any service related to the seniors."/>
    <meta property="og:url" content="https://theseniorteam.net/"/>
    <meta property="og:site_name" content="Senior Team"/>
    <meta property="og:image" content="c"/>
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
    <link media="all" type="text/css" rel="stylesheet" href="css/selectize.css">
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
</script>    </head>
<body>
<div class="loading">
    <div class="loader"></div>
</div>
<div id="divVueContainer">
    <div id="page">

        <!--------------------header starts------------------>
        <header class=" header  menu_fixed">
            <div id="logo">
                <a href="home.php"
                   title="Senior Place Finder - A bridge between seniors and senior living gateway.">
                        <img alt="" class="logo_normal" src="spf/img/logo.png" width="" height="75"/>
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
                               class="active" style="color:gray;">
                                Home
                            </a>
                        </span>
                    </li>
                    <li>
                        <span>
                            <a href="aboutus.php"
                               class="" style="color:gray;">
                                About us
                            </a>
                        </span>
                    </li>
                    
                    <li>
                        <span>
                            <a href="howitworks.php"
                               class="" style="color:gray;">
                                How it works
                            </a>
                        </span>
                    </li>
                    <li>
                          <a href=""class="" style="color:gray;">Find More</a>
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
                               class="" style="color:gray;">
                                Contact us
                            </a>
                        </span>
                    </li>
                </ul>
            </nav>
            </header>
            <!--------------------header ends------------------>
        <main>
<!--------------------senior place finder starts------------------>
    <section class="hero_single version_2">
        <div class="wrapper">
            <div class="container">
                <h3>
                    Senior Place Finder
                </h3>
                <p>
                    Using your requests for Living and Care
                </p>
                <form action="#" method="post">
                    <div class="row no-gutters custom-search-input-2">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input class="form-control" placeholder="City or Zip code to search..."
                                       type="text" id="txtLocation"/>
                                <!--<img alt="pin" src="svg/pin.png" width="10" height="10">-->
                                <input type="hidden" id="txtZipCode"/>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <select class="form-control" id="ddlResidenceType"
                                        multiple="multiple">
                                    <option value="100000">
                                        Independent 55+
                                    </option>
                                    <option value="100001">
                                        Assisted Living
                                    </option>
                                    <option value="100002">
                                        Memory Care
                                    </option>
                                    <option value="100003">
                                        Board &amp; Care
                                    </option>
                                    <option value="100004">
                                        CCRC
                                    </option>
                                    <option value="100005">
                                        Respite
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <select class="form-control" id="ddlPriceRange">
                                    <option value="">Price Range</option>
                                        <option value="500-1499">
                                            $500 to $1,499
                                        </option>
                                        <option value="1500-2499">
                                            $1,500 to $2,499
                                        </option>
                                        <option value="2500-3499">
                                            $2,500 to $3,499
                                        </option>
                                        <option value="3500-4499">
                                            $3,500 to $4,499
                                        </option>
                                        <option value="4500-5499">
                                            $4,500 to $5,499
                                        </option>
                                        <option value="5500-6499">
                                            $5,500 to $6,499
                                        </option>
                                        <option value="6500-7499">
                                            $6,500 to $7,499
                                        </option>
                                        <option value="7500-8499">
                                            $7,500 to $8,499
                                        </option>
                                        <option value="8500-9499">
                                            $8,500 to $9,499
                                        </option>
                                        <option value="9500-10499">
                                            $9,500 to $10,499
                                        </option>
                                        <option value="10500-11499">
                                            $10,500 to $11,499
                                        </option>
                                        <option value="11500-12499">
                                            $11,500 to $12,499
                                        </option>
                                        <option value="12500-13499">
                                            $12,500 to $13,499
                                        </option>
                                        <option value="13500-14499">
                                            $13,500 to $14,499
                                        </option>
                                        <option value="14500-15000">
                                            $14,500 to $15,000
                                        </option>
                                        </select>
                             <!--   <img alt="pin" src="svg/pin.png" width="20" height="10">-->
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <button type="button" class="submit" id="btnSearchResidence">Search</button>
                        </div>
                    </div>
                    <div class="row no-gutters mt-1">
                        <div class="col-lg-12 text-left" id="divLocations" style="min-height: 32px;">
                        </div>
                    </div>
                </form>
                <ul class="counter">
                    <li>
                        <strong class="odometer" data-value="167"></strong>
                        Residences
                    </li>
                    <li>
                        <strong class="odometer" data-value="452"></strong>
                        Active users
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <div class="main_categories">
        <div class="container">
            <ul class="clearfix">
                                    <li data-toggle="popover" data-trigger="hover" data-placement="top"
                        data-content="Communities for active living, social and lifestyle options, and may include dining, laundry and housekeeping services.">
                        <a href="independent-55-plus.php">
                            <img src="spf/img/services/icon/independent-55-plus.png"
                                 class="img-fluid mb-2" width="80" height="80"/>
                            <h3>
                                Independent 55+
                            </h3>
                        </a>
                    </li>
                                    <li data-toggle="popover" data-trigger="hover" data-placement="top"
                        data-content="Communities for independent living, licensed for activities of daily care services, offering transportation, laundry, housekeeping, social, lifestyle and dining services.">
                        <a href="assisted-living.php">
                            <img src="spf/img/services/icon/assisted-living.png"
                                 class="img-fluid mb-2" width="80" height="80"/>
                            <h3>
                                Assisted Living
                            </h3>
                        </a>
                    </li>
                                    <li data-toggle="popover" data-trigger="hover" data-placement="top"
                        data-content="Communities and residences licensed for providing assisted living, dementia and Alzheimer&#039;s care.">
                        <a href="memory-care.php">
                            <img src="spf/img/services/icon/memory-care.png"
                                 class="img-fluid mb-2" width="80" height="80"/>
                            <h3>
                                Memory Care
                            </h3>
                        </a>
                    </li>
                                    <li data-toggle="popover" data-trigger="hover" data-placement="top"
                        data-content="Single Family Residences modified and licensed for assisted living and memory care, limited to 6 residents per household.">
                        <a href="residential-board.php">
                            <img src="spf/img/services/icon/residential-board.png"
                                 class="img-fluid mb-2" width="80" height="80"/>
                            <h3>
                                Board &amp; Care
                            </h3>
                        </a>
                    </li>
                                    <li data-toggle="popover" data-trigger="hover" data-placement="top"
                        data-content="Continuing Care Retirement Communities include active Independent Living, assisted living, memory care sometimes skilled nursing and rehab facilities, all in the community and available to its residents.">
                        <a href="ccrc.php">
                            <img src="spf/img/services/icon/ccrc.png"
                                 class="img-fluid mb-2" width="80" height="80"/>
                            <h3>
                                CCRC
                            </h3>
                        </a>
                    </li>
                                    <li data-toggle="popover" data-trigger="hover" data-placement="top"
                        data-content="Two to four week stay at an Assisted Living for hospitality, social, lifestyle, and activities of daily living care services.">
                        <a href="respite.php}">
                            <img src="spf/img/services/icon/respite.png"
                                 class="img-fluid mb-2" width="80" height="80"/>
                            <h3>
                                Respite
                            </h3>
                        </a>
                    </li>
                            </ul>
        </div>
    </div>


    <div class="container margin_60_35">
        <div class="main_title_3">
            <span></span>
            <h2>Recent Selections</h2>
            <p>Click for the community, residence & contact information.</p>
            <a href="residences.php">See all</a>
        </div>
        <div class="row add_bottom_30">
                            <div class="col-lg-3 col-sm-6">
                    <a class="grid_item small"
                       href="">
                        <figure>
                            <img alt=""
                                 src="residence/banner/5e56194f02932.webp"/>
                            <div class="info">
                                <h3>Sunrise of Seal Beach</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                            <div class="col-lg-3 col-sm-6">
                    <a class="grid_item small"
                       href="">
                        <figure>
                            <img alt=""
                                 src="residence/banner/5e56177140d7e.webp"/>
                            <div class="info">
                                <h3>Sunrise at Wood Ranch</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                            <div class="col-lg-3 col-sm-6">
                    <a class="grid_item small"
                       href="">
                        <figure>
                            <img alt=""
                                 src="residence/banner/5e5617a142968.webp"/>
                            <div class="info">
                                <h3>Sunrise of Beverly Hills</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                            <div class="col-lg-3 col-sm-6">
                    <a class="grid_item small"
                       href="">
                        <figure>
                            <img alt=""
                                 src="img/holder/default.svg"/>
                            <div class="info">
                                <h3>Shalev 5881</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                    </div>
        <div class="main_title_3">
            <span></span>
            <h2>Newest Additions</h2>
            <p>Communities & Residences a click away.</p>
            <a href="residences.php">See all</a>
        </div>
        <div class="row add_bottom_30">
                            <div class="col-lg-3 col-sm-6">
                    <a class="grid_item small"
                       href="">
                        <figure>
                            <img alt="" title="Elite Elder Living"
                                 src="residence/banner/6150bd8b49295.webp"/>
                            <div class="info">
                                <h3>Elite Elder Living</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                            <div class="col-lg-3 col-sm-6">
                    <a class="grid_item small"
                       href="">
                        <figure>
                            <img alt="Elite Elder Living Gateway" title="Elite Elder Living Gateway"
                                 src="img/holder/default.svg"/>
                            <div class="info">
                                <h3>Elite Elder Living Gateway</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                            <div class="col-lg-3 col-sm-6">
                    <a class="grid_item small"
                       href="">
                        <figure>
                            <img alt="Elite Residence" title="Elite Residence"
                                 src="img/holder/default.svg"/>
                            <div class="info">
                                <h3>Elite Residence</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                            <div class="col-lg-3 col-sm-6">
                    <a class="grid_item small"
                       href="">
                        <figure>
                            <img alt="Willowview Manor, Inc" title="Willowview Manor, Inc"
                                 src="residence/banner/5e561acdca14e.webp"/>
                            <div class="info">
                                <h3>Willowview Manor, Inc</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                    </div>
    </div>
    <div class="bg_color">
        <div class="container margin_80_55">
            <div class="main_title_2">
                <span><em></em></span>
                <h2>Categories</h2>
                <p>Communities, Residences & Care for Seniors</p>
            </div>
            <div class="row justify-content-center">
                                    <div class="col-lg-4 col-sm-6">
                        <a class="grid_item"
                           href="assisted-living.php">
                            <figure>
                                <img alt="" src="img/slg/assisted-living.png"/>
                                <div class="info">
                                    <small>113 Residences</small>
                                    <h3>Assisted Living</h3>
                                </div>
                            </figure>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-sm-6">
                        <a class="grid_item"
                           href="residential-board.php">
                            <figure>
                                <img alt="" src="img/slg/residential-board.png"/>
                                <div class="info">
                                    <small>34 Residences</small>
                                    <h3>Board &amp; Care</h3>
                                </div>
                            </figure>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-sm-6">
                        <a class="grid_item"
                           href="memory-care.php">
                            <figure>
                                <img alt="" src="img/slg/memory-care.png"/>
                                <div class="info">
                                    <small>15 Residences</small>
                                    <h3>Memory Care</h3>
                                </div>
                            </figure>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-sm-6">
                        <a class="grid_item"
                           href="ccrc.php">
                            <figure>
                                <img alt="" src="img/slg/ccrc.png"/>
                                <div class="info">
                                    <small>5 Residences</small>
                                    <h3>CCRC</h3>
                                </div>
                            </figure>
                        </a>
                    </div>
                                    <div class="col-lg-4 col-sm-6">
                        <a class="grid_item"
                           href="independent-55-plus.php">
                            <figure>
                                <img alt="" src="img/slg/independent-55-plus.png"/>
                                <div class="info">
                                    <small>4 Residences</small>
                                    <h3>Independent 55+</h3>
                                </div>
                            </figure>
                        </a>
                    </div>
                            </div>
        </div>
    </div>
<!--------------------senior placefinder ends------------------>

<!--------------------voucher starts------------------>
    <div class="container margin_80_55">
        <div class="main_title_2">
            <span><em></em></span>
            <h2>Senior Living Cash Voucher</h2>
            <p>Register here to grab yours </p>
        </div>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-4">
                <img src="spf/img/slv-logo.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-8">
                <h5 class="font-weight-normal mb-3" style="line-height: 35px;">
                    Use Your Requests to Find a Place. When You Decide to Move-in, Redeem Your Voucher Here for <b>$200.00</b> Cash
                </h5>
                <a class="btn btn-lg btn-outline-success rounded-pill" href="voucher.php">
                    Get Your $200 Voucher
                </a>
                <a class="btn btn-lg btn-outline-primary rounded-pill ml-3" href="voucher.php">
                    Redeem Your Voucher
                </a>
            </div>
        </div>
    </div>
    <!--------------------voucher ends------------------>

    <!--------------------how it works starts------------------>
    <div class="call_section">
        <div class="wrapper">
            <div class="container margin_80_55">
                <div class="main_title_2">
                    <span><em></em></span>
                    <h2>How it Works</h2>
                    <p>3 easy steps to qualify & save your places to a list.</p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="box_how">
                           <img alt="dollar" src="svg/pin.png" width="60" height="60">
                           <br><br><br>
                            <h3>Search Locations</h3>
                            <p style="text-align:left;">
                                Enter city or zip code, type of place and a budget range to receive a list that can be
                                refined, narrowed and saved.
                            </p>
                            <span></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box_how">
                            <img alt="street-view-doll" src="svg/street-view-doll.png" width="60" height="60">
                            <br><br><br>
                            <h3>View Location Info</h3>
                            <p style="text-align:left;">
                                Includes photos, features, description, accommodations, care levels, diet, lifestyle
                                with contact's name and phone number.
                            </p>
                            <span></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box_how">
                             <img alt="edit" src="svg/edit.png" width="60" height="60">
                            <br><br><br>
                            <h3>Save & Modify</h3>
                            <p style="text-align:left;">
                                Compile a list of places by clicking save & save the list by name for future access and
                                to make comparison with other lists.
                            </p>
                        </div>
                    </div>
                </div>
                <p class="text-center add_top_30 wow bounceIn" data-wow-delay="0.5s">
                    <a class="btn_1 rounded" href="residences.php">Get Started</a>
                </p>
            </div>
            <canvas height="1080" id="canvas" width="1920"></canvas>
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




<!-------------------how it works ends------------------>
<!--------------------footer starts------------------>
<footer>
    <div class="container margin_60_35 bg-gray">
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
                    <p class="mb-2 text-justify">
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
                           <a >
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

<!--------------------floating widgets starts------------------>
<div class="floating-widget">
    <a class="float-item all-service d-xl-none d-lg-none d-md-none d-sm-block">
        <img src="img/icon/ssp.png" class="icon"/>
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

<script type="text/javascript">
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
<!--------------------floatign widgets ends------------------>
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
        background: transparent url("img/loader.gif") 50% 50% no-repeat;
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
<!--------------------remove from wishlist------------------>
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
    <!--------------------remove from wishlist ends ------------------>

<script src="spf/js/theme.js"></script>
<script src="js/lscache.js"></script>
<script src="js/notify.js"></script>
<script src="js/common.js"></script>
    <script src="spf/js/animated_canvas.js"></script>
    <script src="js/selectize.js"></script>
    <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjN2knZ92ZcETe2mNF2t5l_j21ZTvTnIY&amp;libraries=places&amp;callback=initAutocomplete"
            async defer></script>
<script src="js/velocity.js"></script>
<script src="spf/js/init.js"></script>

<!--------------------filter validation starts------------------>
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
        var placeSearch, autoComplete;
        $(document).ready(function () {
            $('.odometer').each(function () {
                $(this).html($(this).attr("data-value"));
            });
            $("#ddlResidenceType").selectize({
                plugins: ['remove_button'],
                delimiter: ',',
                placeholder: 'Residence Types',
                render: {
                    item: function (item, escape) {
                        return '<div class="item" title="' + item.text.trim() + '">' +
                            item.text.trim()/*.ellipsis(5)*/ +
                            '</div>';
                    }
                }
            });
            $("#ddlPriceRange").selectize({
                placeholder: 'Price Range'
            });
            $(document.body).on("click", ".remove-item", function (e) {
                e.preventDefault();
                var item = $(this).parents("button");
                if (item.attr("title") === "Your Location") {
                    swal.fire({
                        title: 'Are you sure?',
                        text: "You are removing your location that was detected by the system. If you choose to remove, you will not be shown with your location automatically, until you clear this preference manually.",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#0CC27E',
                        cancelButtonColor: '#FF586B',
                        confirmButtonText: 'Yes, Remove',
                        cancelButtonText: 'Let it be',
                        showLoaderOnConfirm: true,
                        reverseButtons: true
                    }).then((result) => {
                        if (result.value) {
                            lscache.set("auto_location_off", 1, (7 * 24 * 60));
                            item.remove();
                            noty("success", "Your preference has been updated!!",
                                "You will not be shown with your location for the next 7 days.", 5000, "top-right");
                            /*Swal.fire({
                                title: "Your preference has been updated!!",
                                text: "You will not be shown with your location for the next 7 days.",
                                icon: "success",
                                confirmButtonText: "Ok, Got it!!"
                            });*/
                        }
                    });
                } else {
                    item.remove();
                }
            });
            $(document.body).on("click", "#btnSearchResidence", function (e) {
                e.preventDefault();
                $(this).attr("disabled", "disabled");
                var filter = [];
                price_range = $("#ddlPriceRange").val().split("-");
                filter["min"] = price_range[0] || "0";
                filter["max"] = price_range[1] || "15000";
                filter["location"] = [...new Set($("#divLocations button").map(function () {
                    return $(this).data("location");
                }).get())];
                filter["residences"] = $("#ddlResidenceType").val();
                let params = {
                    "filter": btoa(fnStringifyObject(filter))
                };
                fnRedirect("{{ url('/residences", fnObjectToQuery(params));
            });
        });

        function initAutocomplete() {
            geoLocate();
            autocomplete = new google.maps.places.Autocomplete(
                document.getElementById('txtLocation'),
                {
                    types: ['geocode'],
                    componentRestrictions: {
                        country: "us"
                    }
                });
            autocomplete.setFields(['address_component']);
            autocomplete.addListener('place_changed', fnPlaceChanged);
            google.maps.event.addDomListener(document.getElementById('txtLocation'), 'keydown', function (e) {
                if (e.keyCode === 13) {
                    e.preventDefault();
                }
            });
        }

        function fnPlaceChanged() {
            var place = autocomplete.getPlace();
            var locationData = fnGetLocationData(place);
            if (locationData !== "") {
                fnAddLocationItem(locationData);
            } else {
                swal.fire({
                    title: "Invalid input!!",
                    text: "Please enter a city or zip code.",
                    icon: "warning",
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Ok, Got it!!",
                    allowOutsideClick: false
                });
            }
            $("#txtLocation").val("");
        }

        function fnGetLocationData(place) {
            var location = {}, locationData = "";
            for (var i = 0; i < place.address_components.length; i++) {
                var addressType = place.address_components[i].types[0];
                if (addressType === "postal_code") {
                    location["zip_code"] = place.address_components[i]["short_name"];
                }
                if (addressType === "locality") {
                    location["city_alt"] = place.address_components[i]["long_name"];
                }
                if (addressType === "neighborhood") {
                    location["city"] = place.address_components[i]["long_name"];
                }
                if (addressType === "administrative_area_level_1") {
                    location["state"] = place.address_components[i]["short_name"];
                }
            }
            if (location.hasOwnProperty("zip_code")) {
                locationData = "zip_code~" + location["zip_code"];
            } else if (location.hasOwnProperty("city")) {
                locationData = "city~" + location["city"];
            } else if (location.hasOwnProperty("city_alt")) {
                locationData = "city~" + location["city_alt"];
            }/* else if (location.hasOwnProperty("state")) {
                locationData = "state~" + location["state"];
            }*/
            return locationData;
        }

        function fnAddLocationItem(data, theme = 'light', title = "Added Location") {
            let locData = data.split('~');
            var existing = $("#divLocations button:contains(" + locData[1] + ")");
            if (existing.length > 0) {
                $(existing).attr("title", title);
                $(existing).removeClass("btn-light");
                $(existing).addClass("btn-" + theme);
            } else {
                var template = $('<button type="button" class="btn btn-' + theme + ' btn-sm mr-1 mb-1 wow fadeInDown"><span class="badge remove-item ml-1">&times;</span></button>');
                template.prepend(_.upperFirst(_.camelCase(locData[0])) + ": " + locData[1]);
                $(template).data("location", data);
                $(template).attr("title", title);
                $("#divLocations").append(template);
            }
        }

        function geoLocate() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    var geolocation = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    var circle = new google.maps.Circle(
                        {center: geolocation, radius: position.coords.accuracy});
                    autocomplete.setBounds(circle.getBounds());
                    if (!lscache.get("auto_location_off")) {
                        var point = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                        new google.maps.Geocoder().geocode({'latLng': point}, function (res, status) {
                            if (status === google.maps.GeocoderStatus.OK && typeof res[0] !== 'undefined') {
                                var locationData = fnGetLocationData(res[0]);
                                if (locationData !== "") {
                                    fnAddLocationItem(locationData, 'success', 'Your Location');
                                } else {
                                    fail('Unable to get zip code');
                                }
                            } else {
                                fail('Unable to look-up geolocation');
                            }
                        });
                    }
                });
            } else {
                console.log("Geolocation not supported");
            }
        }

        function fnObjectToQuery(obj) {
            obj = fnRefineObject(obj);
            return Object.keys(obj).map(function (prop) {
                return prop + "=" + obj[prop];
            }).join("&");
        }

        function fnStringifyObject(obj) {
            obj = fnRefineObject(obj);
            let newArray = [];
            Object.keys(obj).forEach((prop) => {
                newArray.push(prop + ":" + ((obj[prop].constructor === Array) ? obj[prop].join(",") : obj[prop]));
            });
            return newArray.join("|");
        }

        function fnRefineObject(obj) {
            let newObj = {};
            Object.keys(obj).forEach((prop) => {
                if (obj[prop] && !(Object.keys(obj[prop]).length === 0 && obj[prop].constructor === Object) &&
                    !(obj[prop].constructor === Array && obj[prop].length === 0)) {
                    newObj[prop] = obj[prop];
                }
            });
            return newObj;
        }

        function fnRedirect(url, query) {
            window.location.href = url + (query ? "?" + query : "");
        }
    </script>
<!--------------------filter validation ends------------------>
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

   

