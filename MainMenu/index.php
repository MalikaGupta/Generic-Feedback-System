<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <title>University Feedback</title>
    </head>

    <body>
        <div class="grey-text" style="text-align:right;">
            <?php include('date.php');?>
        </div>
        <nav>
            <div class="nav-wrapper">
                <a href="http://mhrd.gov.in">
                <img class="circle" src="images/Capture2.jpg" id="mhrd" style="max-width: 85px;">
                  </a>
                <style>
                    @media only screen and (max-width: 992px) {
                        #mhrd{
                            display: none;
                        }
                    }
                </style>
                <A class="brand-logo" style="font-size: 2rem;font-weight:bold">UNIVERSITY FEEDBACK</a>
                <style>
                    @media only screen and (min-width: 992px) {
                        .brand-logo{
                            margin-left: 36%;
                        }
                    }
                </style>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="admin/index1.php">Admin</a></li>
                    <li><a href="faculty/facultylogin.php">Faculty</a></li>
                    <li><a href="login.php">Student</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="admin/index1.php">Admin</a></li>
                    <li><a href="faculty/facultylogin.php">Faculty</a></li>
                    <li><a href="login.php">Student</a></li>
                </ul>
            </div>
        </nav>
        
        <div class="row">
            <div class="col s12 m3">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title" style= "font-weight:bold">FEEDBACK BENEFITS</span>
                        <p> <ul> Feedback is there all the time</ul><uL>Feedback is just another word for effective listening</uL><ul>Feedback is an opportunity to motivate</ul><ul> Feedback is essential to develop performance</ul><ul> Feedback is a way to keep learning</ul></p>
                    </div>
                    
                </div>
            </div>
            
            <div class="col s12 m6">
                <div class="card">
                    <div class="card-image">
                        <img src="images/Capture3.png">
                        <span class="card-title">Card Title</span>
                    </div>
                      <div>
    <h5 class="center-align BLACK-text bold" style="font-weight:bold;">WELCOME</h5>
  </div>
                    <div class="card-content BLACK-text">
                        <p>We designed this UNIVERSITY FEEDBACK SYSTEM to improve performance. Feedback is often mistaken for criticism. In fact, what is viewed as negative criticism is actually constructive criticism and is the best find of feedback that can help to formulate better decisions to improve and increase performance.</p>
                    </div>
                   
                </div>
            </div>
            
            <div class="col s12 m3">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title " style="font-weight:bold;">NEWS & UPDATES</span>
                        <p><uL>Our Feedback system is opened form <i> 16 MAY, 2018 &nbsp</i>  to <i>17 MAY, 2018</i></ul><ul>Please give your valuable feedback</ul></p>
                    </div>
                   
                </div>
            </div>
            
        </div>
        
        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Subscribe Us</h5>
                        <p class="grey-text text-lighten-4">Subscribe to us to stay updated.</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="contactus.php">Contact Us</a></li>
                            <li><a class="grey-text text-lighten-3" href="Aboutus.php">About Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2018 Copyright Content
                    <a class="grey-text text-lighten-4 right" href="https://innovate.mygov.in/sih2018/
">SIH 2018</a>
                </div>
            </div>
        </footer>
        
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

        <script>
            $(document).ready(function(){
                $(".button-collapse").sideNav();
            });
        </script>
    </body>
</html>