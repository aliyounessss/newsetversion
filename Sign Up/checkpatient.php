<?php 
 session_start();
 include 'connection.php';

 $pfname          = $_POST['pfname'];
 $plname          = $_POST['plname'];
 $pic             = $_POST['pic'];
 $pemail          = $_POST['pemail'];
 $pphone          = $_POST['pphone'];
 $pdate_ofbirth   = $_POST['pbday'];
 $ppassword       = $_POST['ppassword'];
 $pconfirmpass    = $_POST['cppassword'];

 $_SESSION['pfname']          = $pfname;
 $_SESSION['plname']          = $plname;
 $_SESSION['pic']             =$pic;
 $_SESSION['pemail']          = $pemail ;
 $_SESSION['pphone']            = $pphone;
 $_SESSION['pbday']             = $pdate_ofbirth;
 $_SESSION['ppassword']        = $ppassword;
 $_SESSION['cppassword']     = $pconfirmpass;

 
 if(empty($pfname))
   $_SESSION['msg'] = 'Please Enter Your First Name';
 
   else 
    if(empty($plname))
      $_SESSION['msg'] = 'Please Enter Your Last Name';
    else 
        if(empty($pic))
         $_SESSION['msg']='please insert a username ';
         else
         {
            $sqlUsers="SELECT icPatient FROM patient as P WHERE (P.icPatient='$pic')";
            $rsUser=mysqli_query($conn,$sqlUsers);
            $rUser=mysqli_fetch_assoc($rsUser);
            if(($rUser) >=1)
                  $_SESSION['msg']='User already exists';
     else 
    if(empty($pemail))
        $_SESSION['msg'] = 'Please Enter Your Email';
   else 
 if(empty($pphone))
        $_SESSION['msg'] = 'Please Enter Your Phone Number';
else 
if(empty($pdate_ofbirth))
        $_SESSION['msg'] = 'Please Enter Your date of Birth';
else 
  if(empty($ppassword))
   $_SESSION['msg'] = 'Please Enter Your Password';
  else
   if(strlen($ppassword) < 6)
    $_SESSION['msg'] = 'Minimum length of password is 6 characters';
    else 
    if($ppassword != $pconfirmpass)
     $_SESSION['msg'] = 'OOPs ! Password is not confirmed';
          else {
          $sqlClient = "INSERT INTO patient (patientFirstName,patientLastName,icPatient,patientEmail,patientPhone,patientDOB,password,confirmpass) Values
          ('$pfname','$lpname','$pic','$pemail','$pphone','$pdate_ofbirth','$ppassword','$pconfirmpass')";

          if(mysqli_query($conn, $sqlClient)) {
            $_SESSION['msg'] = 'Record has been saved successfully';
            $_SESSION['saved'] = true;
          }
          else
            $_SESSION['msg'] = 'Cannot Save Patient ';
        }
 }
 header('location:signup.php');
?>