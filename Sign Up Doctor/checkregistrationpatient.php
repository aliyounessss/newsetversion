<?php 
 session_start();
 include 'connection.php';

 $fname_patient           = $_POST['fname'];
 $lname_patient           = $_POST['lname'];
 $cat                     = $_POST['cat'];
 $email_patient           = $_POST['Dr_Email'];
 $phone_patient           = $_POST['Dr_phoneNumber'];
 $date_ofbirth_patient    = $_POST['BDay'];
 $password_patient        = $_POST['password'];
 $confirmpass_patient     = $_POST['confirm_Password'];
 $_SESSION['cat']          =   $cat;
 $_SESSION['fname']          = $fname_patient;
 $_SESSION['lname']          = $lname_patient;
 $_SESSION['Dr_Email']       = $email_patient ;
 $_SESSION['Dr_phoneNumber'] = $phone_patient;
 $_SESSION['BDay']            = $date_ofbirth_patient;
 $_SESSION['password']    = $password_patient;
 $_SESSION['confirm_Password'] = $confirmpass_patient;

 
 if(empty($fname_patient))
   $_SESSION['msg'] = 'Please Enter Your First Name';
  else 
{
  //$sqlUsers="SELECT fname_patient ,lname_patient FROM patientregistration as P WHERE (P.fname_patient='$fname_patient' AND P.lname_patient='$lname_patient')";
//   $rsUser=mysqli_query($conn,$sqlUsers);
//   $rUser=mysqli_fetch_assoc($rsUser);
//   if(($rUser) >=1)
//         $_SESSION['msg']='User already exists';
//    else 
    if(empty($lname_patient))
      $_SESSION['msg'] = 'Please Enter Your Last Name';
    else 
        if($cat == 0)
         $_SESSION['msg']='please select a speciality ';
     else 
    if(empty($email_patient))
        $_SESSION['msg'] = 'Please Enter Your Email';
   else 
 if(empty($phone_patient))
        $_SESSION['msg'] = 'Please Enter Your Phone Number';
else 
if(empty($date_ofbirth_patient))
        $_SESSION['msg'] = 'Please Enter Your date of Birth';
else 
  if(empty($password_patient))
   $_SESSION['msg'] = 'Please Enter Your Password';
  else
   if(strlen($password_patient) < 6)
    $_SESSION['msg'] = 'Minimum length of password is 6 characters';
    else 
    if($password_patient != $confirmpass_patient)
     $_SESSION['msg'] = 'OOPs ! Password is not confirmed';
          else {
          $sqlClient = "INSERT INTO doctors (dName,Email_address,Telephone,Speciality,Dpassword,confirm_pass,lastname,BDay) Values
          ('$fname_patient','$email_patient','$phone_patient','$cat', '$password_patient','$confirmpass_patient', '$lname_patient','$date_ofbirth_patient')";

          if(mysqli_query($conn, $sqlClient)) {
            $_SESSION['msg'] = 'Record has been saved successfully';
            $_SESSION['saved'] = true;
          }
          else
            $_SESSION['msg'] = 'Cannot Save Doctor ';
        }
 }
 header('location:index.php');
?>