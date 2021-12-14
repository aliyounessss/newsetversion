<?php
include 'connection.php';

$icPatient = $_POST['ic'];

$delete = mysqli_query($con,"DELETE FROM patient WHERE icPatient=$icPatient");

?>

