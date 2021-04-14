<!DOCTYPE HTML>
<html lang="en" ontouchmove>
    
<!-- Mirrored from outdoor.kwst.net/site/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Apr 2021 11:33:09 GMT -->
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Outdoor  - Responsive  Photography Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="css/reset.css">
        <link type="text/css" rel="stylesheet" href="css/plugins.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/yourstyle.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/favicon.ico">
    </head>
    <body>
        <!--Loader  -->
        <div class="loader"><i class="fa fa-refresh fa-spin"></i></div>
        <!--LOader end  -->
        <!--================= main start ================-->
        <div id="main">
            <!--=============== header ===============-->
            <?php include './includes/header.php';?>
    
            <!--header end -->
            <!--=============== wrapper ===============-->
            <div id="wrapper">
                <!--=============== Conten holder  ===============-->
                <div class="content-holder elem scale-bg2 transition3" >
                    <!--  Page title    -->
                    <div class="fixed-title"><span>Contacts</span></div>
                    <!--  Page title end   -->
                    <!--  Page navigation   -->
                    <div class="scroll-page-nav">
                        <ul>
                            <li><a  href="#sec1"></a></li>
                            <li><a  href="#sec2"></a></li>
                            <li><a  href="#sec3"></a></li>
                        </ul>
                    </div>
                    <!--  Page navigation  end -->
                    <div class="content full-height">
                        <!--  Page title section   -->
                        <section class="parallax-section">
                            <div class="overlay"></div>
                            <div class="bg" style="background-image:url(images/bg/59.jpg)" data-top-bottom="transform: translateY(200px);" data-bottom-top="transform: translateY(-200px);"></div>
                            <div class="container">
                                <h2>Contacts</h2>
                                <div class="separator"></div>
                                <h3 class="subtitle">Nunc convallis ante at mi scelerisque quis cursus risus auctor. </h3>
                            </div>
                            <a class="custom-scroll-link sect-scroll" href="#sec1"><i class="fa fa-angle-double-down"></i></a>
                        </section>
                        <!--  Page title section end  -->
                        <!--  Section contact info   -->
                        <section class="section-columns" id="sec1">
                            <div class="section-columns-img">
                                <div class="bg" style="background-image:url(images/bg/22.jpg)" ></div>
                            </div>
                            <div class="section-columns-text">
                                <div class="custom-inner">
                                    <div class="container">
                                        <h2>Get in Touch</h2>
                                        <div class="separator"></div>
                                        <div class="clearfix"></div>
                                        <h3 class="subtitle">Look even slightly believable. If you are going to use a passage.</h3>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                        <ul class="contact-list no-dec">
                                            <li><span>Adress : </span><a href="#">27th Brooklyn New York, NY 10065</a></li>
                                            <li><span>Phone : </span><a href="#">+7(111)123456789</a></li>
                                            <li><span>E-mail : </span><a href="#">yourmail@domain.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--  Section contact info end   -->
                        <!--  Section social   -->
                        <section class="no-padding">
                            <div class="content">
                                <div class="inline-facts-holder">
                                    <div class="inline-facts">
                                        <h6><a href="#">Facebook</a></h6>
                                    </div>
                                    <div class="inline-facts">
                                        <h6><a href="#">Twitter</a></h6>
                                    </div>
                                    <div class="inline-facts">
                                        <h6><a href="#">Instagram</a></h6>
                                    </div>
                                    <div class="inline-facts">
                                        <h6><a href="#">Pinterest</a></h6>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- social end  -->
                        <!--  Section map   -->
                        <section class="no-padding" id="sec2">
                            <div class="map-box">
                                <div class="map-holder" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);">
                                    <div  id="map-canvas"></div>
                                </div>
                            </div>
                        </section>
                        <!--  Section map end  -->
                        <!--  Section contact form  -->
                        <section class="flat-form" id="sec3">
                            <div class="container">
                                <h2>Write us</h2>
                                <div class="separator-image"><img src="images/separator2.png" alt=""></div>
                                <div id="contact-form">
                                    <div id="message"></div>
                                    <form method="post" action="http://outdoor.kwst.net/site/php/contact.php" name="contactform" id="contactform">
                                        <input name="name" type="text" id="name"  class="inputForm2" onClick="this.select()" value="Name" >
                                        <input name="email" type="text" id="email" onClick="this.select()" value="E-mail" >
                                        <textarea name="comments"  id="comments" onClick="this.select()" >Message</textarea>
                                        <input type="submit" class="send_message transition" id="submit" value="Send Message" />
                                    </form>
                                </div>
                            </div>
                        </section>
                        <!--  Section contact form end  -->
                    </div>
                    <!-- Content end  -->
                    <!-- Share container  -->
                    <div class="share-container  isShare"  data-share="['facebook','pinterest','googleplus','twitter','linkedin']"></div>
                </div>
                <!-- content holder end -->
            </div>
            <!-- wrapper end -->
            <div class="left-decor"></div>
            <div class="right-decor"></div>
            <!--=============== Footer ===============-->
            <?php include './includes/footer.php';?>
            <!-- footer end -->
        </div>
        <!-- Main end -->
        <!--=============== google map ===============-->
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
        <script type="text/javascript" src="js/map.js"></script>
    </body>

<!-- Mirrored from outdoor.kwst.net/site/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Apr 2021 11:33:12 GMT -->
</html>