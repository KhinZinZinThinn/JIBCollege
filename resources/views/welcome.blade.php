<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Japan IT and Business College</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicons -->
        <link href="img/jiblogo.png" rel="icon">
        <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="css/style.css" rel="stylesheet">

        <!-- =======================================================
          Theme Name: NewBiz
          Theme URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
          Author: BootstrapMade.com
          License: https://bootstrapmade.com/license/
        ======================================================= -->
    </head>

    <body>

    <!--==========================
    Header
    ============================-->
    <header id="header" class="fixed-top">
        <div class="container">

            <div class="logo float-left">
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
                <a href="#intro" class="scrollto"><img src="img/jiblogo.png" alt="" class="img-fluid"></a>
            </div>

            <nav class="main-nav float-right d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#intro">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#services">Services</a></li>
                    <!--li class="drop-down"><a href="">Drop Down</a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="drop-down"><a href="#">Drop Down 2</a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                            <li><a href="#">Drop Down 5</a></li>
                        </ul>
                    </li-->
                    <li><a href="#contact">Contact Us</a></li>
                    @if (Route::has('login'))
                            @auth
                               <li><a href="{{ url('/home') }}">Home</a></li>
                        @else
                                <li><a href="{{ route('login') }}">Login</a></li>

                                @if (Route::has('register'))
                                  <li><a href="{{ route('register') }}">Register</a></li>
                            @endif
                            @endauth
                    @endif
                </ul>
            </nav><!-- .main-nav -->

        </div>
    </header><!-- #header -->

    <!--==========================
      Intro Section
    ============================-->
    <section id="intro" class="clearfix">
        <div class="container">

            <div class="intro-info">
                <h2 class="text-dark">For Your Better Future</h2>
                <div>
                    <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    <a href="#services" class="btn-services scrollto">Our Services</a>
                </div>
            </div>

        </div>
    </section><!-- #intro -->

    <main id="main" style="background: #d3d3d2;">

        <!--==========================
          About Us Section
        ============================-->
        <section id="about" style="background: #d3d3d2;">
            <div class="container" style="background: #d3d3d2;">
                <header class="section-header">
                    <h3>JIB College</h3>
                    <p>Immediately join JIB College for the people who want to be IT Engineers for the abiding future.</p>
                </header>

                <div class="row about-container" style="background: #d3d3d2;">

                    <div class="col-lg-6 content order-lg-1 order-2" style="background: #d3d3d2;">
                        <div class="icon-box wow fadeInUp mt-3" style="background: #d3d3d2;">
                            <div class="icon"><img src="img/jiblogo.png"> </div>
                            <p class="description">နိုင်ငံတကာ အဆင့်မီ သင်ရိုးညွှန်းတမ်းများကို ပြည်တွင်းပြည်ပမှ
                                ၀ါရင့် ဆရာ/ဆရာမ များကိုယ်တိုင် သင်ကြားပေးမည့်
                                JIBC (Japan IT & Business College)</p>
                        </div>

                        <div class="icon-box wow fadeInUp" style="background: #d3d3d2;">
                            <div class="icon"><img src="img/jiblogo.png"> </div>
                            <p class="description">စတင်တည်ထောင်ချိန်မှစ၍ နိုင်ငံတကာစံချိန်၊ စံညွှန်း
                                အရည်အသွေး သတ်မှတ်ချက်များနှင့် ပြည့်မီစေရန် ဂျပန်နိုင်ငံမှ နာမည်ကြီး IT College နှင့် မိတ်ဖက် College အဖြစ် ဂုဏ်ယူစွာ လျှောက်လှမ်းမည် ဖြစ်သော JIBC </p>
                        </div>

                        <div class="icon-box wow fadeInUp" data-wow-delay="0.2s" style="background: #d3d3d2;">
                            <div class="icon"><img src="img/jiblogo.png"></div>
                            <p class="description">ခိုင်မာသော အနာဂတ်ဘဝကို IT Software Engineer များအဖြစ် ခိုင်မာစွာ ရပ်တည်လိုသူများအတွက် ဂျပန်နိုင်ငံတွင် ကုန်ကျမည့် သင်တန်းကြေးထက် အလွန်သက်သာပြီး မြန်မာနိုင်ငံတွင်းတွင်သာ တက်ရောက်နိုင်ပြီဖြစ်သော JIBC</p>
                        </div>

                        <div class="icon-box wow fadeInUp" data-wow-delay="0.4s" style="background: #d3d3d2;">
                            <div class="icon"><img src="img/jiblogo.png"></div>
                            <p class="description">ဂျပန်နိုင်ငံ၏ သတ်မှတ်စံနှုန်းများ ပြည့်မီပြီး စာသင်ကြားမှု အရည်အသွေး၊အလုပ်အကိုင်ရရှိမှု၊ နိုင်ငံတကာအဆင့်မီ Facilities များနှင့် အရည်အသွေးပြည့်ဝသော သင်ကြားပေးမှု စနစ်တို့ဖြင့် ထူးချွန်သော IT ပညာရှင်များကို မွေးထုတ်ပေးမည့် JIBC</p>
                        </div>

                    </div>

                    <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp" style="background: #d3d3d2;">
                        <img src="img/jibcpic.png" class="img-fluid" alt="">
                    </div>
                </div>

                </div>

            </div>
        </section><!-- #about -->

        <!-- Test with card-->

        <div class="row ml-2 mr-2">
            @foreach($jnews as $jnew)
                <div class="col-sm-12 col-md-4 mt-2">
                    <div class="card shadow" style="background: #fdfd96">
                        <div class="card-body">
                            <img src="{{route('view.image',['img_name'=>$jnew->image])}}" class="card-img-top img-thumbnail" >
                            <p class="card-text text-center" style="font-size: 20px"></p>
                            <div class="row">
                                <div class="col-md-6">
                                    <p> {{$jnew->title}}
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-outline-warning text-dark" data-toggle="modal" data-target="#aa{{$jnew->id}}">
                                        View Detail
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Modal -->
                <div class="modal fade" id="aa{{$jnew->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">{{$jnew->title}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {{$jnew->content}}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>

        <!--==========================
          Services Section
        ============================-->
        <section id="services" class="section-bg">
            <div class="container">

                <header class="section-header">
                    <h3>Questions for You</h3>
                </header>

                <div class="row">

                    <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">

                            <h4 class="title"><a href="">What will you gain from JIB College?</a></h4>
                            <p class="description"><ol>
                                <li>Remarkable IP and FE Engineer Certificates</li>
                                <li>Japanese Language Certificates(Min N-2 Level)</li>
                                <li>Diploma from JIB College</li>
                                <li>English Language Skill</li>
                                <li>Management Skill</li>
                                <li>Job Opportunities</li>
                            </ol></p>
                        </div>

                        <div class="box">
                            <h4 class="title"><a>Go With JIB College For Your Future Education <br><br>
                                    Please, Come and Consult with JIB College</a></h4>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <h4 class="title"><a href="">What can you do after school?</a></h4>
                            <p class="description"><ul><li>Can join Local and oversea jobs</li>
                            <li>Can study in Universities from Japan</li></ul></p>
                        </div>
                        <div class="box">
                            <h4 class="title"><a href="">How you will Learn?</a></h4>
                            <p class="description"><ul><li>High Standard Classrooms</li>
                            <li>Skillful Oversea and Local Lecturers</li>
                            <li>Supports for Laptops and lockers</li>
                            <li>Industry visit and Excursions</li>
                            <li>Group Discussion, Assignment and Presentation systems</li>
                            <li>Library room</li>
                            <li>Canteen</li></ul></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- #services -->

        <!--==========================
          Why Us Section
        ============================-->
        <!--section id="why-us" class="wow fadeIn">
            <div class="container">
                <header class="section-header">
                    <h3>Why choose us?</h3>
                    <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
                </header>

                <div class="row row-eq-height justify-content-center">

                    <div class="col-lg-4 mb-4">
                        <div class="card wow bounceInUp">
                            <i class="fa fa-diamond"></i>
                            <div class="card-body">
                                <h5 class="card-title">Corporis dolorem</h5>
                                <p class="card-text">Deleniti optio et nisi dolorem debitis. Aliquam nobis est temporibus sunt ab inventore officiis aut voluptatibus.</p>
                                <a href="#" class="readmore">Read more </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="card wow bounceInUp">
                            <i class="fa fa-language"></i>
                            <div class="card-body">
                                <h5 class="card-title">Voluptates dolores</h5>
                                <p class="card-text">Voluptates nihil et quis omnis et eaque omnis sint aut. Ducimus dolorum aspernatur.</p>
                                <a href="#" class="readmore">Read more </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="card wow bounceInUp">
                            <i class="fa fa-object-group"></i>
                            <div class="card-body">
                                <h5 class="card-title">Eum ut aspernatur</h5>
                                <p class="card-text">Autem quod nesciunt eos ea aut amet laboriosam ab. Eos quis porro in non nemo ex. </p>
                                <a href="#" class="readmore">Read more </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row counters">

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">274</span>
                        <p>Clients</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">421</span>
                        <p>Projects</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">1,364</span>
                        <p>Hours Of Support</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">18</span>
                        <p>Hard Workers</p>
                    </div>

                </div>

            </div>
        </section-->


        <!--==========================
          Contact Section
        ============================-->
        <section id="contact">
            <div class="container-fluid">

                <div class="section-header">
                    <h3>Contact Us</h3>
                </div>

                <div class="row wow fadeInUp">

                    <div class="col-lg-6">
                        <div class="map mb-4 mb-lg-0">
                            <div class="mapouter"><div class="gmap_canvas"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.350842225945!2d96.13802714981324!3d16.808942323598338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ebcb361e664d%3A0xac65378f54bec0e7!2sJapan%20IT%20%26%20Business%20College%20(JIB%20College)!5e0!3m2!1sen!2smm!4v1574578193713!5m2!1sen!2smm" width="600" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-5 info">
                                <i class="ion-ios-location-outline"></i>
                                <p>No.290(D), U Wizara Road, Kamayut Tsp, Yangon</p>
                            </div>
                            <div class="col-md-4 info">
                                <i class="ion-ios-email-outline"></i>
                                <p>jib.college@jibc.edu.mm</p>
                            </div>
                            <div class="col-md-3 info">
                                <i class="ion-ios-telephone-outline"></i>
                                <p>09-957799993<br>09-957799994</p>
                            </div>
                        </div>

                        <div class="form">
                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                            <div id="errormessage"></div>
                            <form action="" method="post" role="form" class="contactForm">
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                        <div class="validemailation"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validation"></div>
                                </div>
                                <div class="text-center"><button type="submit" class="btn btn-outline-warning" title="Send Message" >Send Message</button></div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- #contact -->

    </main>

    <!--==========================
      Footer
    ============================-->
    <footer id="footer">
        <!--div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 footer-info">
                        <img src="{{"img/jiblogo.png"}}" width="300px" height="300px">
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Terms of service</a></li>
                            <li><a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            No.290(D), U Wizara Road<br>
                            Kamayut Tsp, Yangon<br>
                            Myanmar <br>
                            <strong>Phone:</strong> 09-957799993, 09957799994<br>
                            <strong>Email:</strong> jib.college@jibc.edu.mm
                        </p>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>

                    </div>


                </div>
            </div>
        </div-->

        <div class="container">
            <div class="copyright">
                Copyright<strong> &copy;2019 JIB College</strong> All Rights Reserved
            </div>
            <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
                -->

            </div>
        </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/mobile-nav/mobile-nav.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>

    </body>
</html>
