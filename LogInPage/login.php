<?php
include 'connection.php';
// include_once 'assets/conn/server.php';
?>


<!-- login -->
<!-- check session -->
<?php
session_start();
// session_destroy();
if (isset($_SESSION['patientSession']) != "") {
header("Location: ../Dr.Profile/patient.php");
}
if (isset($_POST['login']))
{
$icPatient = mysqli_real_escape_string($con,$_POST['icPatient']);
$password  = mysqli_real_escape_string($con,$_POST['password']);

$res = mysqli_query($con,"SELECT * FROM patient WHERE icPatient = '$icPatient'");
$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
if ($row['password'] == $password)
{
$_SESSION['patientSession'] = $row['icPatient'];
?>
<script type="text/javascript">
alert('Login Success');
</script>
<?php
header("Location: ../ListOfDoctors/DoctorsList.php");
} else {
?>
<script>
alert('wrong input ');
</script>
<?php
}
}
?>
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
    <link rel="stylesheet" href="login.css" />
    <title>Log in</title>
  </head>
  <body>
    <div class="nav"></div>

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="imglogin">
            <img src="../images/Login.png" width="80%" alt="" />
          </div>
        </div>

        <div class="col">
          <div class="loginform">
            <form class="form" role="form" method="POST"  accept-charset="UTF-8">
              <h4>Please Login!</h4>
              <div>
                <input
                type="text" id="inputtxt"class="form-control" name="icPatient" placeholder="IC Number" required
                />
              </div>
              <div>
                <input
                type="password" id="inputtxt"class="form-control" name="password" placeholder="Password" required
                />
              </div>
              <a href="">Forget Password!</a>
              <div>
                <button id="loginbtn" type="submit" name="login"  class="btn btn-primary btn-block">Login</button>
              </div>
              <hr />
              <a href="https://www.facebook.com">
                <input type="button" name="" id="btnf" value="f Login" />
              </a>
              <a href="https://www.gmail.com">
                <input type="button" id="btng" value="G Login"
              /></a>
              <p>
                Don't Have an Account?
                <a href="../Sign Up/signup.html">Register.</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
  <div class="footer"></div>
  <script type="text/javascript">
    $(function () {
      $(".nav").load("../NavBar/navbar.html");
    });
  </script>

  <script type="text/javascript">
    $(function () {
      $(".footer").load("../Footer/footer.html");
    });
  </script>
  <script src="login.js"></script>
</html>
