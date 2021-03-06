<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link rel="icon" href="../images/LOGO.jpg" />
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

    <title>Patient</title>
</head>
<style>body {
    color: #797979;
    background: #f1f2f7;
    font-family: 'Open Sans', sans-serif;
    padding: 0px !important;
    margin: 0px !important;
    font-size: 13px;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    -moz-font-smoothing: antialiased;
}
.profile-nav, .profile-info{
    margin-top:30px;   
}
.profile-nav .user-heading {
    background: #2dc1fb;
    color: #fff;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    padding: 30px;
    text-align: center;
}

.profile-nav .user-heading.round a  {
    border-radius: 50%;
    -webkit-border-radius: 50%;
    border: 10px solid rgba(255,255,255,0.3);
    display: inline-block;
}

.profile-nav .user-heading a img {
    width: 112px;
    height: 112px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
}

.profile-nav .user-heading h1 {
    font-size: 22px;
    font-weight: 300;
    margin-bottom: 5px;
}

.profile-nav .user-heading p {
    font-size: 12px;
}

.profile-nav ul {
    margin-top: 1px;
}

.profile-nav ul > li {
    border-bottom: 1px solid #ebeae6;
    margin-top: 0;
    line-height: 30px;
}

.profile-nav ul > li:last-child {
    border-bottom: none;
}

.profile-nav ul > li > a {
    border-radius: 0;
    -webkit-border-radius: 0;
    color: #89817f;
    border-left: 5px solid #fff;
}

.profile-nav ul > li > a:hover, .profile-nav ul > li > a:focus, .profile-nav ul li.active  a {
    background: #f8f7f5 !important;
    border-left: 5px solid #2d86fb;
    color: #89817f !important;
}

.profile-nav ul > li:last-child > a:last-child {
    border-radius: 0 0 4px 4px;
    -webkit-border-radius: 0 0 4px 4px;
}

.profile-nav ul > li > a > i{
    font-size: 16px;
    padding-right: 10px;
    color: #bcb3aa;
}
.p-text-area, .p-text-area:focus {
    border: none;
    font-weight: 300;
    box-shadow: none;
    color: #c3c3c3;
    font-size: 16px;
}

.profile-info .panel-footer {
    background-color:#f8f7f5 ;
    border-top: 1px solid #e7ebee;
}s

.profile-info .panel-footer ul li a {
    color: #7a7a7a;
}

.bio-graph-heading {
    background: #2d97fb;
    color: #fff;
    text-align: center;
    font-style: italic;
    padding: 40px 110px;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    font-size: 16px;
    font-weight: 300;
}

.bio-graph-info {
    color: #89817e;
}

.bio-graph-info h1 {
    font-size: 22px;
    font-weight: 300;
    margin: 0 0 20px;
}

.bio-row {
    width: 50%;
    float: left;
    margin-bottom: 10px;
    padding:0 15px;
}

.bio-row p span {
    width: 100px;
    display: inline-block;
}

</style>
<body>
<div class = "nav"></div>

    <div class="container bootstrap snippets bootdey" style="margin-top: 100px;">
<div class="row">
  <div class="profile-nav col-md-3">
      <div class="panel">
          <div class="user-heading round">
              <a href="#">
                  <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
              </a>
              <h1>Camila Smith</h1>
              <p>Camilia@gmail.com</p>
          </div>

          
      </div>
  </div>
  <div class="profile-info col-md-9">
     
      <div class="panel">
          <div class="bio-graph-heading">
            This patient suffers from chronic diseases such as pressure and diabetes, and his medical file has been updated 3 months ago
          </div>
          <div class="panel-body bio-graph-info">
              <h1>Bio Graph</h1>
              <div class="row">
                  <div class="bio-row">
                      <p><span>First Name </span>: Camilia</p>
                  </div>
                  <div class="bio-row">
                      <p><span>Last Name </span>: El Ali</p>
                  </div>
                  <div class="bio-row">
                      <p><span>Country </span>: Lebanon - Nabatieh</p>
                  </div>
                  <div class="bio-row">
                      <p><span>Birthday</span>: 13 July 1983</p>
                  </div>
                  <div class="bio-row">
                      <p><span>diseases </span>: Pressure and diabetes</p>
                  </div>
                  <div class="bio-row">
                      <p><span>Email </span>: jelAli@gmail.com</p>
                  </div>
                  <div class="bio-row">
                      <p><span>Mobile </span>:  03 4567890</p>
                  </div>
                  <div class="bio-row">
                      <p><span>Phone </span>: 961 (01) 123456</p>
                  </div>
                  <div class="bio-row">
                    <p><span>Upload a Report </span>:<input type="file" value="Upload your reports"></p>
                </div>
              </div>
          </div>
      </div>
      <div>  
          </div>
      </div>
  </div>
</div>
</div>
<div class = "footer"></div>
</body>
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



