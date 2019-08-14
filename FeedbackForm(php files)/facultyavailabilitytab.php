<?php
    include_once 'dbcon.php';
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
        <body background="im59020159.jpg">
        <div class="carousel carousel-slider center" data-indicators="true" style="max-height: 120px;">
            <div class="carousel-item purple white-text" href="#one!">
                <h2>Feedback Panel</h2>
                <p class="white-text">Please provide the feedback</p>
            </div>
        </div>  
        <h2 style="text-align:center;">Faculty</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">           
            <div class="carousel carousel-slider center" data-indicators="true" style="height: 610px;">
                <div class="carousel-fixed-item center">
                    <button class="btn waves-effect waves-effect grey white-text darken-text-4" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </div>
                <div class="carousel-item  white-text" href="#one!">
                
                    
                    <table>
                        
                        <thead>
                            <tr>
                                <th>Question</th>
                                <h5 style="color:black;text-align:left"><u> Under Availability</u></h5>
                                <th>Bad</th>
                                <th>Average</th>
                                <th>Good</th>
                                <th>Excellent</th>
                            </tr>
                        </thead>


                        <tbody>
                            <tr>

                                <td>Rate the doubt classes conducted by the teacher.</td>
                                <td><input name="group1" type="radio" id="test1" value="5" /><label for="test1"></label></td>
                                <td><input name="group1" type="radio" id="test2" value="10" /><label for="test2"></label></td>
                                <td><input name="group1" type="radio" id="test3" value="15" /><label for="test3"></label></td>
                                <th><input name="group1" type="radio" id="test4"  value="20"/><label for="test4"></label></th>
                            </tr>
                            <tr>
                                <td>How frequently are your doubts and queries about studies resolved under required amount of time?</td>
                                <td><input name="group2" type="radio" id="test5" value="5" /><label for="test5"></label></td>
                                <td><input name="group2" type="radio" id="test6" value="10" /><label for="test6"></label></td>
                                <td><input name="group2" type="radio" id="test7" value="15" /><label for="test7"></label></td>
                                <th><input name="group2" type="radio" id="test8" value="20" /><label for="test8"></label></th>
                            </tr>
                            <tr>
                                <td>Rate how the teacher react to students complaint other problems than studies. </td>
                                <td><input name="group3" type="radio" id="test9" value="5" /><label for="test9"></label></td>
                                <td><input name="group3" type="radio" id="test10" value="10" /><label for="test10"></label></td>
                                <td><input name="group3" type="radio" id="test11" value="15" /><label for="test11"></label></td>
                                <th><input name="group3" type="radio" id="test12" value="20" /><label for="test12"></label></th>
                            </tr>
                            <tr>
                                <td>How available are your teachers when you approach them during college working hours?</td>
                                <td><input name="group4" type="radio" id="test13" value="5" /><label for="test13"></label></td>
                                <td><input name="group4" type="radio" id="test14" value="10" /><label for="test14"></label></td>
                                <td><input name="group4" type="radio" id="test15" value="15"value="20" /><label for="test15"></label></td>
                                <th><input name="group4" type="radio" id="test16" value="20" /><label for="test16"></label></th>
                            </tr>
                            <tr>
                                <td>How sufficient are the number of lectures as per the syllabus?</td>
                                <td><input name="group5" type="radio" id="test17" value="5" /><label for="test17"></label></td>
                                <td><input name="group5" type="radio" id="test18" value="10" /><label for="test18"></label></td>
                                <td><input name="group5" type="radio" id="test19"  value="15"/><label for="test19"></label></td>
                                <th><input name="group5" type="radio" id="test20" value="20" /><label for="test20"></label></th>
                            </tr>
                            
                        </tbody>
                    </table>
                     <br><br><br><br> <input class="btn waves-effect waves-effect grey white-text darken-text-4" type="submit" name="submit" value="Submit feedback">
                    <a input  href="feedbackinsti.php" class="btn waves-effect waves-effect grey white-text darken-text-4" type="submit" name="action" >Back
                        <i class="material-icons right">send</i>
                               <meta name="viewport" content="width=device-width, initial-scale=1">
                     <style>
                     ::placeholder {
    color: black;
    opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
   color: red;
}

::-ms-input-placeholder { /* Microsoft Edge */
   color: red;
}
                    </style>
                    <input type="text" placeholder="comments...">
                    
                </div>
                
            </div>
        </form>
        <?php 
    echo $_SERVER['PHP_SELF']."<br>";
    echo $_SERVER['SERVER_NAME'];
    
    if(isset($_POST['submit'])){
        $selecval = $_POST['g1']+$_POST['g2']+$_POST['g3']+$_POST['g4']+$_POST['g5'];  // Storing Selected Value In Variable
        $num=5;
        $selecval= $selecval/$num;
        echo "You have selected :" .$selecval;
        
        
         
    
        $query="INSERT INTO facav (avg) VALUES('".$selecval."')";
        $retval = mysqli_query($con,$query);
        if(!$retval){die('no data:'.mysqli_error($con));}
    }
    ?>
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