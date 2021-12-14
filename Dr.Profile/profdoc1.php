<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Profile Of Dr.</title>
    <meta name="description" content="" />
    <meta name="author" content="Tooplate" />
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Additional CSS Files -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/tooplate-style.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/lightbox.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <style>::placeholder { 
  color: white !important;
  opacity: 1; 
}</style>
    <?php session_start();

    include 'connection.php';
    // if(isset($_GET['Docid'])){
    // 	$Docid = $_GET['Docid'];
    // }
    
    $sqlDocs = "Select * From doctors where Id=".$_GET['Docid'];

    $rsDocs = mysqli_query($con, $sqlDocs);
    $rDoc = mysqli_fetch_assoc($rsDocs);
    
?>
    
  </head>
  <body>
    <div class = 'nav'></div>

    <div id="page-wraper" style="margin-top: 50px; display: inline-block; position: relative;">
      <!-- Sidebar Menu -->
      <div class="responsive-nav">
        <i class="fa fa-bars" id="menu-toggle"></i>
        <div id="menu" class="menu" style="margin-top: 90px;width:350px;position:absolute!important; z-index: 0 !important;">
          <i class="fa fa-times" id="menu-close"></i>
          <div class="container">
            <div class="image">
              <a href="#"><img src="imagess/<?php echo $rDoc['Id']; ?>.jpg" alt="Image of Doctor" /></a>
            </div>
            <div class="author-content">
              <h4><?php echo $rDoc['dName']; ?></h4>
              <span><?php echo $rDoc['Speciality']; ?></span><br/><span><?php echo $rDoc['Telephone']; ?></span><br/><span><?php echo $rDoc['hospital'];?></span>
          
            <nav class="main-nav" role="navigation">
              <ul class="main-menu">
                <li><a href="#section1">Introduction</a></li>
                <li><a href="#section4">Give Me Feedback </a></li>
              
              </ul>
            </nav>
            <div class="social-network">
              <ul class="soial-icons"><font color="white">Follow me</font>

                <li>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-dribbble"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-rss"></i></a>
                </li>
              </ul>
            </div></div>
            <div class="copyright-text">
            
            </div>
          </div>
        </div>
      </div>

      <section class="section about-me" data-section="section1">
        <div class="container">
       
          <div class="section-heading">
          
            <h2>About My Speciality</h2>
            <div class="line-dec"></div>
            <span><?php echo $rDoc['education']; ?> </span>
          </div>
          <div class="right-image-post">
            <div class="row">
 
              <div class="col-md-8">
                <div class="left-text">
                  <h4>My Experience in Medicine </h4>
                  <p><?php echo $rDoc['Experience'];?></p>
                  <div class="white-button">
                  
                  </div>
                </div>
              </div>
              <div class="col-md-4">
               
              </div>
              
            </div>
          </div>
          <div class="left-image-post">
            <div class="row">
            
              <div class="col-md-4">
                <div class="left-image">
                  <img src="imagess/<?php echo $rDoc['Id']; ?>.jpg" alt="Doctor" />
                </div>
              </div>
              
              <div class="col-md-8">
                <div class="right-text">
                  <h4>My work Time at Hospitals</h4>
                  <p>Monday - Wednesday - Friday :  Hammoud Hospital - first floor -ex: 1584</p>
                  <p>Tuesday - Thursday : Beirut Governemental Hospital - Second Building -Section Of Corona ex: 5842</p>
                  <div class="white-button">
                
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </section>
      <section class="section contact-me" data-section="section4">
        <div class="container">
          <div class="section-heading">
            <h2>Give Me Your Feedback </h2>
             <?php
             $sqlfeed="Select * From feedback where id_doc=".$_GET['Docid'];
    $rsfeed = mysqli_query($con, $sqlfeed);
      
              while($rfeed= mysqli_fetch_assoc($rsfeed)) { ?>
            <div class="line-dec" ></div><i class="bi bi-chat-right-quote"></i>
            <span style="color:yellow !important;">User :<?php echo $rfeed['name']?>(<?php echo $rfeed['E-mail'] ?>)
            </span><br/>
            <span style="color:yellow !important;">
           <?php echo $rfeed['details'] ?></span>
           <?php } ?>
           <div class="line-dec" ></div>
          </div>
          <div class="row">
            <div class="right-content">
              <div class="container">
                <form id="contact" action="chekfeedback.php?Docid=<?php echo $rDoc['Id']; ?>" method="post">
                  <div class="row">
                    <fieldset>
                    <div class="col-md-6"style="border:0px!important;">
                                             <input type="text" class="form-control"id="name" name="name" placeholder="Your name..." required="" />
                                         </div>
                    <div class="col-md-6">
                                          <input type="text" class="form-control" name="email"
                          id="email" placeholder="Your email..." required=""  />
                                      </div>
                   
                    <div class="col-md-12">
                                       <textarea  rows="6" class="form-control"  name="details"
                          id="message" placeholder="Your message..." required="" ></textarea>
                                          </div>
                    <div class="col-md-12">
                        <button type="submit" id="form-submit" class="button" value="submit">
                          Send Message
                        </button>  
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
      //according to loftblog tut
      $(".main-menu li:first").addClass("active");

      var showSection = function showSection(section, isAnimate) {
        var direction = section.replace(/#/, ""),
          reqSection = $(".section").filter(
            '[data-section="' + direction + '"]'
          ),
          reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
          $("body, html").animate(
            {
              scrollTop: reqSectionPos
            },
            800
          );
        } else {
          $("body, html").scrollTop(reqSectionPos);
        }
      };

      var checkSection = function checkSection() {
        $(".section").each(function() {
          var $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
          if (topEdge < wScroll && bottomEdge > wScroll) {
            var currentId = $this.data("section"),
              reqLink = $("a").filter("[href*=\\#" + currentId + "]");
            reqLink
              .closest("li")
              .addClass("active")
              .siblings()
              .removeClass("active");
          }
        });
      };

      $(".main-menu").on("click", "a", function(e) {
        e.preventDefault();
        showSection($(this).attr("href"), true);
      });

      $(window).scroll(function() {
        checkSection();
      });
    </script>

    
  </body>
  <div class = 'footer'></div>
  
  <script type="text/javascript">
    $(function () {
      $(".nav").load("../NavBar/navbar.html");
    });
  </script>

  <script type = "text/javascript">
    $(function(){
      $(".footer").load("../Footer/footer.html");
    })
  </script>
</html>