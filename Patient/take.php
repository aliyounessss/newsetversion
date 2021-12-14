<!doctype html>
<html>
    <head>
    <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Clinic Appointment Application</title>
        <!-- Bootstrap -->
        <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"> -->
        <link href="assetss/css/style.css" rel="stylesheet">
        <link href="assetss/css/style1.css" rel="stylesheet">
        <link href="assetss/css/blocks.css" rel="stylesheet">
        <link href="assetss/css/date/bootstrap-datepicker.css" rel="stylesheet">
        <link href="assetss/css/date/bootstrap-datepicker3.css" rel="stylesheet">
        <link href="assetss/css/material.css" rel="stylesheet">
        <?php include 'connection.php' ?>
    </head>
    <body>

<!-- 1st section start -->
<section id="promo-1" class="content-block promo-1 min-height-600px bg-offwhite">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h2>Make appointment today!</h2>
                        <p>This is Doctor's Schedule. Please <span class="label label-danger">login</span> to make an appointment. </p>
                            
                        <!-- date textbox -->
                       
                        <div class="input-group" style="margin-bottom:10px;">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar">
                                </i>
                            </div>
                            <input class="form-control" id="date" name="date" value="<?php echo date("Y-m-d")?>" onchange="showUser(this.value)"/>
                        </div>
                       
                        <!-- date textbox end -->

                        <!-- script start -->
                        <script>

                            function showUser(str) {
                                
                                if (str == "") {
                                    document.getElementById("txtHint").innerHTML = "";
                                    return;
                                } else { 
                                    if (window.XMLHttpRequest) {
                                        // code for IE7+, Firefox, Chrome, Opera, Safari
                                        xmlhttp = new XMLHttpRequest();
                                    } else {
                                        // code for IE6, IE5
                                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                    }
                                    xmlhttp.onreadystatechange = function() {
                                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                            document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                                        }
                                    };
                                    xmlhttp.open("GET","getuser.php?idUser="+str,true);
                                    console.log(str);
                                    xmlhttp.send();
                                }
                            }
                        </script>
                        
                        <!-- script start end -->
                     
                        <!-- table appointment start -->
                        <div id="txtHint"><b> </b></div>
                        
                        <!-- table appointment end -->
                    </div>
                              </div>
                      </div>
        </section>
           <div class="copyright-bar bg-black">
            <div class="container">
                <p class="pull-left small">© Esa </a></p>
                <p class="pull-right small"><a href="adminlogin.php">admin</a></p>
            </div>
        </div>
        <!-- footer end -->
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assetss/js/jquery.js"></script>
    <script src="assetss/js/date/bootstrap-datepicker.js"></script>
    <script src="assetss/js/moment.js"></script>
    <script src="assetss/js/transition.js"></script>
    <script src="assetss/js/collapse.js"></script>
     <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assetss/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus()
    })
    </script>
    <!-- date start -->
  
<script>
    $(document).ready(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'yyyy-mm-dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })

    })

</script>

    <!-- date end -->
</body>
</html>