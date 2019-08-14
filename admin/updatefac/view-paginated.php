<!DOCTYPE HTML PUBLIC >

<html>

<head>

<title>View Records</title>

</head>

<body>



<?php

/*

VIEW-PAGINATED.PHP

Displays all data from 'students' table

This is a modified version of view.php that includes pagination

*/



// connect to the database

include('dbcon.php');



// number of results to show per page

$per_page = 3;



// figure out the total pages in the database

$result = mysqli_query($con,"SELECT * FROM students");

$total_result = mysqli_result($result);

$total_pages = ceil($total_results / $per_page);



// check if the 'page' variable is set in the URL (ex: view-paginated.php?page=1)

if (isset($_GET['page']) && is_numeric($_GET['page']))

{

$show_page = $_GET['page'];



// make sure the $show_page value is valid

if ($show_page > 0 && $show_page <= $total_pages)

{

$start = ($show_page -1) * $per_page;

$end = $start + $per_page;

}

else

{

// error - show first set of results

$start = 0;

$end = $per_page;

}

}

else

{

// if page isn't set, show first set of results

$start = 0;

$end = $per_page;

}



// display pagination



echo "<p><a href='view.php'>View All</a> | <b>View Page:</b> ";

for ($i = 1; $i <= $total_pages; $i++)

{

echo "<a href='view-paginated.php?page=$i'>$i</a> ";

}

echo "</p>";



// display data in table

echo "<table border='1' cellpadding='10'>";

echo "<tr> <th>id</th> <th>username</th> <th>pass</th> <th>name</th> <th>sem</th> <th>email</th> <th>phone</th> <th>aadhar</th>  <th>dob</th> </tr>";



// loop through results of database query, displaying them in the table

for ($i = $start; $i < $end; $i++)

{

// make sure that PHP doesn't try to show results that don't exist

if ($i == $total_results) { break; }



// echo out the contents of each row into a table

echo "<tr>";

echo '<td>' . mysql_result($result, $i, 'id') . '</td>';

echo '<td>' . mysql_result($result, $i, 'username') . '</td>';

echo '<td>' . mysql_result($result, $i, 'pass') . '</td>';

echo '<td>' . mysql_result($result, $i, 'name') . '</td>';


echo '<td>' . mysql_result($result, $i, 'sem') . '</td>';


echo '<td>' . mysql_result($result, $i, 'email') . '</td>';

echo '<td>' . mysql_result($result, $i, 'phone') . '</td>';

echo '<td>' . mysql_result($result, $i, 'aadhar') . '</td>';

echo '<td>' . mysql_result($result, $i, 'dob') . '</td>';

echo '<td><a href="edit.php?id=' . mysql_result($result, $i, 'id') . '">Edit</a></td>';

echo '<td><a href="delete.php?id=' . mysql_result($result, $i, 'id') . '">Delete</a></td>';
echo '<td><a href="edit.php?username=' . mysql_result($result, $i, 'username') . '">Edit</a></td>';

echo '<td><a href="delete.php?username=' . mysql_result($result, $i, 'username') . '">Delete</a></td>';
echo '<td><a href="edit.php?pass=' . mysql_result($result, $i, 'pass') . '">Edit</a></td>';

echo '<td><a href="delete.php?pass=' . mysql_result($result, $i, 'pass') . '">Delete</a></td>';
echo '<td><a href="edit.php?name=' . mysql_result($result, $i, 'name') . '">Edit</a></td>';

echo '<td><a href="delete.php?name=' . mysql_result($result, $i, 'name') . '">Delete</a></td>';
echo '<td><a href="edit.php?sem=' . mysql_result($result, $i, 'sem') . '">Edit</a></td>';

echo '<td><a href="delete.php?sem=' . mysql_result($result, $i, 'sem') . '">Delete</a></td>';
echo '<td><a href="edit.php?email=' . mysql_result($result, $i, 'email') . '">Edit</a></td>';

echo '<td><a href="delete.php?email=' . mysql_result($result, $i, 'email') . '">Delete</a></td>';
echo '<td><a href="edit.php?phone=' . mysql_result($result, $i, 'phone') . '">Edit</a></td>';

echo '<td><a href="delete.php?phone=' . mysql_result($result, $i, 'phone') . '">Delete</a></td>';
echo '<td><a href="edit.php?aadhar=' . mysql_result($result, $i, 'aadhar') . '">Edit</a></td>';

echo '<td><a href="delete.php?aadhar=' . mysql_result($result, $i, 'aadhar') . '">Delete</a></td>';
echo '<td><a href="edit.php?dob=' . mysql_result($result, $i, 'dob') . '">Edit</a></td>';

echo '<td><a href="delete.php?dob=' . mysql_result($result, $i, 'dob') . '">Delete</a></td>';

echo "</tr>";

}

// close table>

echo "</table>";



// pagination



?>

<p><a href="new.php">Add a new record</a></p>



</body>

</html>