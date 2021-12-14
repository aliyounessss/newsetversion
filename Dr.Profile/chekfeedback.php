<?php session_start();

    include 'connection.php';
    $id_d=$_GET['Docid'];
    
    
$name        = $_POST['name'];
$email       = $_POST['email'];
 //$subject  = $_POST['subject'];
 //$date   = $_POST['date'];
 $details    = $_POST['details'];

// $_SESSION['id_doc']= $id_doc;
 $_SESSION['name']       = $name;
  $_SESSION['email']      = $email ;
 // $_SESSION['subject']      = $subject;
 //$_SESSION['date'] = $date;
 $_SESSION['details']    = $details;

    $sqlClient ="INSERT INTO feedback
    Values('$id_d','$name', '$email', '$details')";

          if(mysqli_query($con, $sqlClient)) {
    header("location:profdoc1.php?Docid=$id_d");}
    else echo "$name  $email   $details" ;
    ?>