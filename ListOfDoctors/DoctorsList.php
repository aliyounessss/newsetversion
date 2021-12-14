<!doctype html>
<html>
    <head>
        <link rel="icon" href="../images/LOGO.jpg" />
        <title>Doctors</title>
<html style="background-color: #caf4f4;"></html>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<?php 
    include 'connection.php';
    $sqlDocs = 'Select * From doctors';

    $rsDocs = mysqli_query($conn, $sqlDocs);
    ?>
</head>
<style>
round-color: #eee
    font-family: 'Roboto', sans-serif
}
.card {
    background-color: #B9F6CA;
    width: 350px;
    border-radius: 0px;
}
body {
    background-color:white;
    font-family: 'Roboto', sans-serif
}
.heading {
    font-weight: 700
}
.hour {
    margin-top: 1px;
    color:#02368e;
    font-size: 12px
}
ratings i {
    color:#caf4f4;
}
.btn {border: 0.5px solid rgba(12, 161, 12, 0.123) ;
    border-radius: 55px !important;
    background-color: white;
}
.btn:hover{background-color:#caf4f4 !important;color:caf4f4;}
.line-color {
    color:#caf4f4;
    height: 3px
}
.R{height:70%;}
</style>
<body>
<div class = "nav"></div>

<div class="container-fluid"  style="background-color: #caf4f4; margin-top: 70px !important; ">
<H1 style="text-align: center; color: #02368e; font-family: Arial, Helvetica, sans-serif;"> List of  Doctors</H1>
<hr>
<div class="row  row-cols-md-3 "style="border:0px;border-radius:0px !important;">
<?php
     while($rDoc = mysqli_fetch_assoc($rsDocs)){
   ?> 
<!-------------------------------------------------------------------------------->
    <div class="card h-100"style="background-color:#caf4f4;border:0px;">
<!-- --><!-- -->
<div class="container mt-5 d-flex justify-content-center">
    <div class="card p-4 mt-3"style="background-color:#02368e;border:0; color:white">
        <div class="first">
         <h6 class="heading"><?php echo $rDoc['dName']; ?></h6>
         <div class="time d-flex flex-row align-items-center justify-content-between mt-3">
          <div class="d-flex align-items-center"><?php echo $rDoc['Speciality']; ?></span> </div>
          <div> <span class="font-weight-bold">Consultation <?php echo $rDoc['consultation']; ?>$</span> </div> </div></div>
        <div class="second d-flex flex-row mt-2">
        <div class="image"> <img src="images/<?php echo $rDoc['Id']; ?>.jpg" width="100px" /> </div>
       <div class=""><div class="d-flex flex-row mb-1"style="float: left!important;"> <span></span><div class="ratings ml-2">  <i class="fa fa-star"></i>  <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div></div>
         <div> <button class="btn btn-outline-dark btn-sm px-2"><a href="../Dr.Profile/profdoc1.php?Docid=<?php echo $rDoc['Id']; ?>"> See profile & Give feedback</button></a><hr/> <button class="btn btn-outline-dark btn-sm"><i class="fa fa-comment-o"><a href="../chats/chats.html"> Let's Talk</i></button> </a></div></div>
       </div><hr class="line-color">
        <h6><?php echo $rDoc['hospital']; ?></h6>
        <div class="third mt-4"> <button style="background-color:rgb(2,97,151) !important;border-radius: 55px;height:40px;" class="btn-success btn-block"><i class="fa fa-clock-o"></i><a href="../dr.profile/patient.php"> Book Now</a></button>
        </div>
    </div>
</div>
</div>
<?php
     }
   ?>
    
<!-- -->
</div>
</div>
 
<!-- -->    

     
</body>
<div class='footer'></div>

<script src="dl.js"></script>
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

