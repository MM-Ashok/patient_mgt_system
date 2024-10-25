<?php
$connection=mysqli_connect('localhost','developer','mir_developer','patient_management');


if (!$connection) {
    die('Connection failed: ' . mysqli_connect_error());
}
// else {
//     echo 'Successfully connected to the database.'; // For debugging
// }


?>