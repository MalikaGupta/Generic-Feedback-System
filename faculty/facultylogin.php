<?php session_start(); ?>
<?php include('dbcon.php'); ?>
<html>
		<head>
				<!--Import Google Icon Font-->
				<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
				<!--Import materialize.css-->
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

				<!--Let browser know website is optimized for mobile-->
				<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
				
				<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
				
				<title>Login</title>
		</head>

		<body class="valign-wrapper red lighten-2" style="height: 100vh;">
				<div class="container z-depth-4"  style="max-width: 350px;">
						<div class="center-align">
								<div class="col s6">
										<div class="card" style="margin: 0px;">
												<div class="card-image">
														<img src="images/Capture4.png">
												</div>
												<div class="card-content">
														<span class="card-title blue-text text-darken-2">Faculty Login Panel</span>
														<p>Please provide following details</p>
														<div class="row">
																<form class="col s12" method="post" action="#">
																		<div class="row">
																				<div class="input-field col s2">
																						<i class="small material-icons">account_box</i>
																				</div>
																				<div class="input-field col s10">
																						<input type="text" class="validate" name="user" placeholder="College Id">
																				</div>
																		</div>
																		<div class="row">
																				<div class="input-field col s2">
																						<i class="small material-icons">lock</i>
																				</div>
																				<div class="input-field col s10">
																						<input type="password" class="validate" placeholder="PASSWORD" name="pass">
																				</div>
																		</div>
																		<div class="row">
																				<div class="input-field col s2">
																						<i class="small material-icons">lock</i>
																				</div>
																				<div class="input-field col s10">
																						<input type="text" class="validate" placeholder="AICTID" name="aictid">
																				</div>
																		</div>
																		<div class="row">
																				<div class="col s12">
																						<input type="submit" class="waves-effect waves-light btn" name="login" value="LOGIN" style="width: 100%;"></input>
																				</div>
																		</div>
																		<div class="row">
																				<div class="col s6">
																						<!-- Modal Trigger -->
																						<a class="blue-text text-darken-2 modal-trigger" href="#modal1"><p class="left-align">Register Here!</p></a>
																						
																								<!-- Modal Structure -->
																								<div id="modal1" class="modal">
																										<div class="modal-content">
																												<h4>Registration Portal</h4>
																												<p>Register to enter.</p> 
																										<div class="row">
																												<div class="col s12">
																														<div class="row">
																																<div class="input-field col s6">
																																		<input id="first_name" type="text" class="validate" name="first_name">
																																		<label>First Name</label>
																																</div>
																																<div class="input-field col s6">
																																		<input id="last_name" type="text" class="validate" name="last_name">
																																		<label>Last Name</label>
																																</div>
																														</div>
																														<div class="row">
																																<div class="input-field col s6">
																																		<input id="branch" type="text" class="validate" name="branch">
																																		<label>Branch</label>
																																</div>
																																<div class="input-field col s6">
																																		<input id="semester" type="text" class="validate" name="semester">
																																		<label>Semester</label>
																																</div>
																														</div>
																														<div class="row">
																																<div class="input-field col s12">
																																		<input id="colid" type="text" class="validate" name="colid">
																																		<label>CollID</label>
																																</div>
																														</div>
																														<div class="row">
																																<div class="input-field col s12">
																																		<input id="email" type="email" class="validate" name="email">
																																		<label>Email</label>
																																</div>

																																<div class="input-field col s12">
																																		<input id="aictid" type="text" class="validate" name="aictid">
																																		<label>AICTID</label>
																																</div>
																														</div>
																														<div class="row">
																																<div class="input-field col s12">
																																		<input id="password" type="password" class="validate" name="password">
																																		<label>Password</label>
																																</div>
																														</div>
																														<div class="row">
																																<div class="input-field col s6">
																																		<input id="phone" type="text" name="phone">
																																		<label>Phone</label>
																																</div>
																																<div class="input-field col s6">
																																		<input id="Aadhaar" type="text" name="aadhaar">
																																		<label>Aadhaar</label>
																																</div>
																														</div>
																														<div class="row">
																																<div class="input-field col s4">
																																<select name="date">
																																<option value="" disabled selected>Choose date</option>
																																<option value="01">1</option>
																																<option value="02">2</option>
																																<option value="03">3</option>
																																<option value="04">4</option>
																																<option value="05">5</option>
																																<option value="06">6</option>
																																<option value="07">7</option>
																																<option value="08">8</option>
																																<option value="09">9</option>
																																<option value="10">10</option>
																																<option value="11">11</option>
																																<option value="12">12</option>
																																<option value="13">13</option>
																																<option value="14">14</option>
																																<option value="15">15</option>
																																<option value="16">16</option>
																																<option value="17">17</option>
																																<option value="18">18</option>
																																<option value="19">19</option>
																																<option value="20">20</option>
																																<option value="21">21</option>
																																<option value="22">22</option>
																																<option value="23">23</option>
																																<option value="24">24</option>
																																<option value="25">25</option>
																																<option value="26">26</option>
																																<option value="27">27</option>
																																<option value="28">28</option>
																																<option value="29">29</option>
																																<option value="30">30</option>
																																<option value="31">31</option>
																																</select>
																																<label>Day Of Birth</label>
																																</div>
																																<div class="input-field col s4">
																																<select name="month">
																																<option value="" disabled selected>Choose month</option>
																																<option value="01">1</option>
																																<option value="02">2</option>
																																<option value="03">3</option>
																																<option value="04">4</option>
																																<option value="05">5</option>
																																<option value="06"></option>
																																<option value="07">7</option>
																																<option value="08">8</option>
																																<option value="09">9</option>
																																<option value="10">10</option>
																																<option value="11">11</option>
																																<option value="12">12</option>
																																</select>
																																<label>Month Of Birth</label>
																																</div>
																																<div class="input-field col s4">
																																<select name="year">
																																<option value="" disabled selected>Choose year</option>
																																<option value="1985">1985</option>
																																<option value="1986">1986</option>
																																<option value="1987">1987</option>
																																<option value="1988">1988</option>
																																<option value="1989">1989</option>
																																<option value="1990">1990</option>
																																<option value="1991">1991</option>
																																<option value="1992">1992</option>
																																<option value="1993">1993</option>
																																<option value="1994">1994</option>
																																<option value="1995">1995</option>
																																<option value="1996">1996</option>
																																<option value="1997">1997</option>
																																<option value="1998">1998</option>
																																<option value="1999">1999</option>
																																<option value="2000">2000</option>
																																<option value="2001">2001</option>
																																<option value="2002">2002</option>
																																<option value="2003">2003</option>
																																<option value="2004">2004</option>
																																<option value="2005">2005</option>
																																</select>
																																<label>Year Of Birth</label>
																																</div>
																														</div>
																												</div>
																										</div>

																										</div>
																										<div class="modal-footer">
																												<button class="modal-action modal-close btn waves-effect waves-light" type="submit" name="register">Submit
																														<i class="material-icons right">send</i>
																												</button>
																										</div>
																								</div>  
																						
																				</div>
																				<div class="col s6">
																						<a class="blue-text text-darken-2" href="#"><p class="right-align">Forgot Password?</p></a>
																				</div>
																		</div>
																</form>
														</div>
														<?php
																if (isset($_POST['login']))
																		{
																		$username = mysqli_real_escape_string($con, $_POST['user']);
																		$password = mysqli_real_escape_string($con, $_POST['pass']);
						
																		$query      = mysqli_query($con, "SELECT * FROM faculty WHERE  pass='$password' and username='$username'");
																		$row        = mysqli_fetch_array($query);
																		$num_row    = mysqli_num_rows($query);
						
																		if ($num_row > 0) 
																				{           
																				$_SESSION['user_id']=$row['username'];
																				// header('location:feedback.php');
																				echo "<script>
																				window.location = 'facultyprofile.php';
																				</script>";
																				}
																		else
																				{
																				echo 'Invalid Username and Password Combination';
																				}
																		}
																		if (isset($_POST['register']))
																		{
																			$firstname = mysqli_real_escape_string($con, $_POST['first_name']);
																			$lastname = mysqli_real_escape_string($con, $_POST['last_name']);
																			$branch = mysqli_real_escape_string($con, $_POST['branch']);
																			$semester = mysqli_real_escape_string($con, $_POST['semester']);
																			$colid = mysqli_real_escape_string($con, $_POST['colid']);
																			$email = mysqli_real_escape_string($con, $_POST['email']);
																			$password = mysqli_real_escape_string($con, $_POST['password']);
																			$phone = mysqli_real_escape_string($con, $_POST['phone']);
																			$aadhar = mysqli_real_escape_string($con, $_POST['aadhaar']);
																			$date = mysqli_real_escape_string($con, $_POST['date']);
																			$month = mysqli_real_escape_string($con, $_POST['month']);
																			$year = mysqli_real_escape_string($con, $_POST['year']);
																			$aictid = mysqli_real_escape_string($con, $_POST['aictid']);

																			$query = "INSERT INTO student (username, pass, name, sem, email, phone, aadhar, dob, aictid, branch) VALUES ('".$colid."','". $password."','". $firstname." ".$lastname."','". $semester."','". $email."','". $phone."','". $aadhar."','". $year."-".$month."-". $date."','".$aictid."','".$branch."')";															
                            $retval = mysqli_query( $con, $query );
         
                            if(! $retval ) {
                            die('Could not enter data: ' . mysql_error());
                            }
         
                             echo "Entered data successfully\n";

																		}
																?>
														<i class="small material-icons">home</i>               <a href="../index.php"><p class="purple-text">Home</p></a>
												</div>
										</div>
								</div>
						</div>
				</div>
				
				<!--Import jQuery before materialize.js-->
				<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
				
				<script>
						$(document).ready(function(){
								$('.modal').modal();
								$('select').material_select();
						});
				</script>
				
		</body>
</html>