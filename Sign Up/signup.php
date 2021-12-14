<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="../images/LOGO.jpg" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../images/LOGO.jpg" />
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="signup.css" />
    <title>Signup</title>
    <?php
     session_start();
   include 'connection.php';
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
        <form action="checkpatient.php" name="frmReg" method="post">
          <h4 style="font-weight: bold"> Sign Up Now !</h4>
          <hr />
          <h5>Patient Sign Up Page</h5>
          <a href="../Sign Up Doctor/index.php" style="font-weight: bold"
            >Are you a Doctor</a
          >
          <div>
            <input type="text" id="inputtxt" placeholder="First Name" name="pfname" 
            value="<?php if(isset($_SESSION['pfname'])) echo $_SESSION['pfname'];?>"
          
            />
            <input
              type="text"
              id="inputtxt"
              placeholder="lastname"
              name="plname"
              value="<?php if(isset($_SESSION['plname'])) echo $_SESSION['plname'];?>"

             
            />
          </div>
          <div>
            <input type="text" id="inputtxt" placeholder="username" name="pic"
            value="<?php if(isset($_SESSION['pic'])) echo $_SESSION['pic'];?>"
  />

            <input
              type="email"
              id="inputtxt" name="pemail"
              placeholder="Email@example.com"
              value="<?php if(isset($_SESSION['pemail'])) echo $_SESSION['pemail'];?>"

            />
          </div>
          <div>
            <input
              type="number"
              id="inputtxt" name="pphone"
              placeholder="Phone Number"
              value="<?php if(isset($_SESSION['pphone'])) echo $_SESSION['pphone'];?>"

              
            />
            <input
              type="date"
              id="inputtxt" name="pbday"
              placeholder="Date of Birth"
              
              value="<?php if(isset($_SESSION['pbday'])) echo $_SESSION['pbday'];?>"

              
            />
          </div>
          <div>
            <input
              type="password" name="ppassword"
              id="inputtxt"
              placeholder="Enter Password"
              value="<?php if(isset($_SESSION['ppassword'])) echo $_SESSION['ppassword'];?>"

              
            />
            <input
              type="password" name="cppassword"
              id="inputtxt"
              placeholder="Confirm Password"
              value="<?php if(isset($_SESSION['cppassword'])) echo $_SESSION['cppassword'];?>"

           
            />
          </div>
          <div>
            <input type="textarea" style="border:0;color:red;font-family:calibri;font-weight:bold;width:300px;"
          value="<?php
 	            if(isset($_SESSION['msg'])) echo $_SESSION['msg'];?>"/>
               </div>
          
          <div>
            <button id="loginbtn" type="submit" value="save">signUp</button>
          </div>
          <?php
if(isset($_SESSION['saved'])) if($_SESSION['saved']==true) {
 	?>
   
 <script>
   
      document.frmReg.pfname.value          = '';
     	document.frmReg.ppassword.value     = '';
     	document.frmReg.cppassword.value  = '';
      document.frmReg.pic.value          = '';
     	document.frmReg.plname.value        = '';
     	document.frmReg.pemail.value        = '';
      document.frmReg.pphone.value        = '';
     	document.frmReg.pbday.value  = '';
  </script> 
  <?php 
}
  session_destroy();?>
  
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
