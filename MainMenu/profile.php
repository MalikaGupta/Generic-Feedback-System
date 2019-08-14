<?php
session_start();
include'dbcon.php';
if(isset($_SESSION['user_id']))
{
    $sql="SELECT sem,username,name,branch FROM student WHERE username='".$_SESSION['user_id']."'";
    $result = mysqli_query($con,$sql);
    // output data of each row
if($row = mysqli_fetch_assoc($result)){
    $sem = "$row[sem]";
    $username = "$row[username]";
    $name = "$row[name]";
}   $branch ="$row[branch]";
?>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <title>Student Feedback</title>
    </head>

    <body>
    
        <nav>
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo" style="font-size: 1.5rem;" >Student Feedback</a>
                <style>
                    @media only screen and (min-width: 992px) {
                        .brand-logo{
                            margin-left: 31%;
                        }
                    }
                </style>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Aboutus.php">About Us</a></li>
                    <li><a href="Contactus.php">Contact Us</a></li>
                    <li><a href="login.php">Log Out</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Aboutus.php">About Us</a></li>
                    <li><a href="Contactus.php">Contact Us</a></li>
                    <li><a href="login.php">Log Out</a></li>
                </ul>
            </div>
        </nav>

        <div class="parallax-container">
            <div class="parallax"><img src="images/college.jpg"></div>
        </div>
        <div class="section white">
            <div class="row container">
                <div class="row">
                <h2 class="header purple-text">Student Details</h2>
                <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
                    <div class="col s12 m6 l3">
                        <style>
                            .section{
                                padding: 0;
                            }
                        </style>
                        <div class="section">
                            <h5>Name :</h5>
                            <p><?php echo $name; ?></p>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="section">
                            <h5>Roll No. :</h5>
                            <p><?php echo $username; ?></p>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="section">
                            <h5>Branch :</h5>
                            <p><?php echo $branch; ?></p>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="section">
                            <h5>Semester :</h5>
                            <p><?php echo $sem; ?></p>
                        </div>
                    </div>
                </div>

   <a href="feedbackform/feedback2.php" class="button button>Proceed for Feedback<i class="material-icons right">Proceed to Feedback</i></a>
            </div>
        </div>
       
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

        <script>
            $(document).ready(function(){
                $(".button-collapse").sideNav();
                $('.parallax').parallax();
                $('.carousel.carousel-slider').carousel({fullWidth: true});
            });
        </script>
   
    </body>
</html>
<?php
}
else
{
    echo"<script type='text/javascript'>
    window.location.href='index.php';
    </script>";
}
?>