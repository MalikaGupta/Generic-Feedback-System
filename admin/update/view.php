<!DOCTYPE HTML PUBLIC >

<html>

<head>

<title>View Records</title>

</head>

<body>



<?php

/*

VIEW.PHP

Displays all data from 'players' table

*/



// connect to the database

include('dbcon.php');



// get results from database

$result = mysqli_query($con,"SELECT * FROM student")

or die(mysqli_error());



// display data in table

echo "<p><b>View All</b> | <a href='view-paginated.php?page=1'>View Paginated</a></p>";



echo "<table border='1' cellpadding='10'>";

echo "<tr> <th>id</th> <th>username</th> <th>pass</th> <th>name</th> <th>sem</th> <th>email</th> <th>phone</th> <th>aadhar</th> <th>dob</th> </tr>";


// loop through results of database query, displaying them in the table

while($row = mysqli_fetch_array( $result )) {



// echo out the contents of each row into a table

echo "<tr>";

echo '<td>' . $row['id'] . '</td>';

echo '<td>' . $row['username'] . '</td>';

echo '<td>' . $row['pass'] . '</td>';

echo '<td>' . $row['name'] . '</td>';

echo '<td>' . $row['sem'] . '</td>';

echo '<td>' . $row['email'] . '</td>';

echo '<td>' . $row['phone'] . '</td>';

echo '<td>' . $row['aadhar'] . '</td>';

echo '<td>' . $row['dob'] . '</td>';


echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a></td>';

echo '<td><a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';


echo "</tr>";

}



// close table>

echo "</table>";

?>

<p><a href="new.php">Add a new record</a></p>



</body>

</html>