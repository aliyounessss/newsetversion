
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../images/LOGO.jpg" />
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="index.css" />
    <title>Signup</title>
    <?php
     session_start();
   include('connection.php');

  $sqldropdown="SELECT  speciality_id, speciality_name  from speciality";
  $records =mysqli_query($conn,$sqldropdown) ;
  ?>
  
  </head>
  <body>
    <div class="nav"></div>

    <div class="container">
      <div class="imglogin">
        <img
          src="../images/Login.png"
          width="40%"
          style="margin-top: 90px"
          alt=""
        />
      </div>
      <div class="loginform">
      <form action="checkregistrationpatient.php" name ="frmReg"
        method="post">
          <h4 style="font-weight: bold">Please Sign Up!</h4>

          <hr />
          <h5>Doctor Sign Up Page</h5>

          <a href="../Sign Up/signup.php" style="font-weight: bold"
            >Are you a Patient</a
          >
          <div>
            <input type="text" class="inputtxt" placeholder="First Name" name="fname"
              value="<?php if(isset($_SESSION['fname'])) echo $_SESSION['fname'];?>" 
  />
            
            <input
              type="text"
              class="inputtxt"
              placeholder="Last Name"
              name="lname"
              value="<?php if(isset($_SESSION['lname'])) echo $_SESSION['lname'];?>"
              
            />
          </div>
          <div>
          <select   class="inputtxt" name="cat" aria-label="Default select example">
          <option value="0" hidden>Select Speciality</option>
             <?php 
             while($record=mysqli_fetch_assoc($records)){
               ?>
                            <option value="<?php echo $record['speciality_id']; ?>"
                         <?php if(isset($_SESSION['cat']))
                              if($_SESSION['cat'] ==  $record['speciality_id']) echo 'selected'?>>
             <?php  echo $record['speciality_name'];?>
                   </option>
            <?php 
             }
             ?>
             </select>
            <input
              type="email"
              class="inputtxt"
              placeholder="Email@example.com"
              name="Dr_Email"
              value="<?php if(isset($_SESSION['Dr_Email'])) echo $_SESSION['Dr_Email'];?>"
              
              
            />
          </div>
          <div>
            <input
              type="number"
              class="inputtxt"
              placeholder="Phone Number"
              name="Dr_phoneNumber"
              value="<?php if(isset($_SESSION['Dr_phoneNumber'])) echo $_SESSION['Dr_phoneNumber'];?>"

              
            />
            <input
              type="date"
              class="inputtxt"
              placeholder="Date of Birth"
              name="BDay"
              value="<?php if(isset($_SESSION['BDay'])) echo $_SESSION['BDay'];?>"

              
            />
          </div>
          <div>
            <input
              type="password"
              class="inputtxt"
              placeholder="Enter Password"
              name="password"
              value="<?php if(isset($_SESSION['password'])) echo $_SESSION['password'];?>"

              
            />
            <input
              type="password"
              class="inputtxt"
              placeholder="Confirm Password"
              name="confirm_Password"
              value="<?php if(isset($_SESSION['confirm_Password'])) echo $_SESSION['confirm_Password'];?>"

              
            />
          </div>
          <div>
            <input type="textarea" style="border:0;color:red;font-family:calibri;font-weight:bold;width:300px;"
          value="<?php
 	 if(isset($_SESSION['msg'])) echo $_SESSION['msg'];?>"/></div>
 <div>
            <button id="loginbtn" type="submit" value="save"> signUp</button>
          </div>
<?php
if(isset($_SESSION['saved'])) if($_SESSION['saved']==true) {
 	?>
   
 <script>
    document.frmReg.fname.value = '';
     	document.frmReg.password.value     = '';
     	document.frmReg.confirm_Password.value  = '';
       document.frmReg.cat.value  = 0;
     	document.frmReg.lname.value    = '';
     	document.frmReg.Dr_Email.value    = '';
      document.frmReg.Dr_phoneNumber.value    = '';
     	document.frmReg.BDay.value  = '';
  </script> 
  <?php } session_destroy();?>
          <div> 
          <hr />
         
          <hr />
          <a href="https://www.facebook.com">
            <input type="button" name="" id="btnf" value="f Login" />
          </a>
          <a href="https://www.gmail.com">
            <input type="button" id="btng" value="G Login"
          /></a>
        </form>
      </div>
    </div>
  </body>
  <div class="footer"></div>
  <script type="text/javascript">
    $(function () {
      $(".nav").load("../NavBar/navbar.php");
    });
  </script>
  <script type="text/javascript">
    $(function () {
      $(".footer").load("../Footer/footer.php");
    });
  </script>
</html>
