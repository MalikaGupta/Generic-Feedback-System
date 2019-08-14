<?php

/*

NEW.PHP

Allows user to create a new entry in the database

*/



// creates the new record form

// since this form is used multiple times in this file, I have made it a function that is easily reusable

function renderForm($id,$username,$pass,$name,$sem,$email,$phone,$aadhar,$dob,$branch,$aictid,$error)

{

?>

<!DOCTYPE HTML PUBLIC >

<html>

<head>

<title>Edit Record</title>

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
<input type="hidden" name="id" value="<?php echo $id; ?>"/>

<div>


<p><strong>ID:</strong> <?php echo $id; ?></p>


<strong>username: *</strong> <input type="text" name="username" value="<?php echo $username; ?>" /><br/>

<strong>pass : *</strong> <input type="text" name="pass" value="<?php echo $pass; ?>" /><br/>

<strong>name : *</strong> <input type="text" name="name" value="<?php echo $name; ?>" /><br/>

<strong>sem: *</strong> <input type="text" name="sem" value="<?php echo $sem; ?>" /><br/>

<strong>email: *</strong> <input type="text" name="email" value="<?php echo $email; ?>" /><br/>

<strong>phone: *</strong> <input type="text" name="phone" value="<?php echo $phone; ?>" /><br/>

<strong>aadhar: *</strong> <input type="text" name="aadhar" value="<?php echo $aadhar; ?>" /><br/>

<strong>dob: *</strong> <input type="text" name="dob" value="<?php echo $dob; ?>" /><br/>



<strong>branch: *</strong> <input type="text" name="branch" value="<?php echo $branch; ?>" /><br/>

<p><strong>AICTID:</strong> <?php echo $aictid; ?></p>





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
	// confirm that the 'id' value is a valid integer before getting the form data

if (is_numeric($_POST['id']))

{

// get form data, making sure it is valid

$id = $_POST['id'];

$username = mysqli_real_escape_string($con, $_POST['username']);

$pass = mysqli_real_escape_string($con,$_POST['pass']);

$name = mysqli_real_escape_string($con,$_POST['name']);

$sem = mysqli_real_escape_string($con,$_POST['sem']);

$email = mysqli_real_escape_string($con,$_POST['email']);

$phone = mysqli_real_escape_string($con,$_POST['phone']);

$aadhar = mysqli_real_escape_string($con,$_POST['aadhar']);

$dob = mysqli_real_escape_string($con,$_POST['dob']);

$branch = mysqli_real_escape_string($con,$_POST['branch']);

$aictid = mysqli_real_escape_string($con,$_POST['aictid']);




// check to make sure both fields are entered

if ($username == '' || $pass == ''|| $name == ''|| $sem == ''|| $email == ''|| $phone == ''|| $aadhar == ''|| $dob == ''|| $branch ==''|| $aictid == '')

{

// generate error message

$error = 'ERROR: Please fill in all required fields!';



// if either field is blank, display the form again

renderForm($id,$username, $pass, $name,$sem,$email,$phone,$aadhar,$dob,$branch,$aictid);

}

else

{

// save the data to the database

mysqli_query($con,"UPDATE faculty SET  username='$username', pass='$pass' , name='$name', sem='$sem', email='$email', phone='$phone', aadhar='$aadhar', dob='$dob',  branch='$branch',aictid='$aictid' WHERE id=(SELECT $id )")

or die(mysqli_error($con));



// once saved, redirect back to the view page

header("Location: view.php");

}

}

else

{

// if the 'id' isn't valid, display an error

echo 'Error!';

}


}

else

// if the form hasn't been submitted, get the data from the db and display the form

{



// get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)

if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)

{

// query db

$id = $_GET['id'];

$result = mysqli_query($con,"SELECT * FROM faculty WHERE id=$id")

or die(mysqli_error($con));

$row = mysqli_fetch_array($result);



// check that the 'id' matches up with a row in the databse

if($row)

{



// get data from db


$username = $row['username'];

$pass = $row['pass'];

$name = $row['name'];

$sem = $row['sem'];

$email = $row['email'];

$phone = $row['phone'];

$aadhar = $row['aadhar'];

$dob = $row['dob'];

$branch = $row['branch'];

$aictid = $row['aictid'];



// show form

renderForm($id,$username,$pass,$name,$sem,$email,$phone,$aadhar,$dob,$branch,$aictid,'');

}

else

// if no match, display result

{

echo "No results!";

}

}

else

// if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error

{

echo 'Error!';

}

}

?>