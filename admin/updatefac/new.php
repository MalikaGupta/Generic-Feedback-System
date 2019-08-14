<?php

/*

NEW.PHP

Allows user to create a new entry in the database

*/



// creates the new record form

// since this form is used multiple times in this file, I have made it a function that is easily reusable

function renderForm($id,$username,$pass,$name,$sem,$email,$phone,$aadhar,$dob,$aictid,$branch,$error)

{

?>

<!DOCTYPE HTML PUBLIC >

<html>

<head>

<title>New Record</title>

</head>

<body>

<?php

// if there are any errors, display them

if ($error != '')

{

echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';

}

?>



<form action="" method="post">

<div>

<strong>id: *</strong> <input type="text" name="id" value="<?php echo $id; ?>" /><br/>

<strong>username: *</strong> <input type="text" name="username" value="<?php echo $username; ?>" /><br/>

<strong>pass : *</strong> <input type="text" name="pass" value="<?php echo $pass; ?>" /><br/>

<strong>name : *</strong> <input type="text" name="name" value="<?php echo $pass; ?>" /><br/>


<strong>sem: *</strong> <input type="text" name="sem" value="<?php echo $sem; ?>" /><br/>

<strong>email: *</strong> <input type="text" name="email" value="<?php echo $email; ?>" /><br/>

<strong>phone: *</strong> <input type="text" name="phone" value="<?php echo $phone; ?>" /><br/>

<strong>aadhar: *</strong> <input type="text" name="aadhar" value="<?php echo $aadhar; ?>" /><br/>

<strong>dob: *</strong> <input type="text" name="dob" value="<?php echo $dob; ?>" /><br/>

<strong>aictid: *</strong> <input type="text" name="aictid" value="<?php echo $aictid; ?>" /><br/>

<strong>branch: *</strong> <input type="text" name="branch" value="<?php echo $branch; ?>" /><br/>


<p>* required</p>

<input type="submit" name="submit" value="Submit">

</div>

</form>

</body>

</html>

<?php

}









// connect to the database

include('dbcon.php');



// check if the form has been submitted. If it has, start to process the form and save it to the database

if (isset($_POST['submit']))

{

// get form data, making sure it is valid

$id = mysqli_real_escape_string($con,$_POST['id']);

$username = mysqli_real_escape_string($con,$_POST['username']);

$pass = mysqli_real_escape_string($con,$_POST['pass']);

$name = mysqli_real_escape_string($con,$_POST['name']);

$sem = mysqli_real_escape_string($con,$_POST['sem']);

$email = mysqli_real_escape_string($con,$_POST['email']);

$phone = mysqli_real_escape_string($con,$_POST['phone']);

$aadhar = mysqli_real_escape_string($con,$_POST['aadhar']);

$dob = mysqli_real_escape_string($con,$_POST['dob']);

$aictid = mysqli_real_escape_string($con,$_POST['aictid']);

$branch = mysqli_real_escape_string($con,$_POST['branch']);






// check to make sure both fields are entered

if ($id == '' || $username == '' || $pass == ''|| $name == ''|| $sem == ''|| $email == ''|| $phone == ''|| $aadhar == ''|| $dob == ''|| $branch ==''|| $aictid == '')

{

// generate error message

$error = 'ERROR: Please fill in all required fields!';



// if either field is blank, display the form again

renderForm($id,$username, $pass, $name,$sem,$email,$phone,$aadhar,$dob,$aictid,$branch,'');

}

else

{

// save the data to the database

mysqli_query($con,"INSERT student SET id=$id ,username='$username', pass='$pass' , name='$name', sem='$sem', email='$email', phone='$phone', aadhar='$aadhar', dob='$dob', aictid='$aictid', branch='$branch'")

or die(mysqli_error($con));



// once saved, redirect back to the view page

header("Location: view.php");

}

}

else

// if the form hasn't been submitted, display the form

{

renderForm('','','','','','','','','','','','');

}

?>