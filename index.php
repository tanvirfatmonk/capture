<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Capture</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="dist/cropme.css">
  <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->

  <script type="text/javascript">
$(document).ready(function() {
  $("button").click(function(){
$("button").removeClass("active");
$(this).addClass("active");
});
});
    function CheckCustom(val){
     var customdiv =document.getElementById('custom');
     var countrydiv=document.getElementById('country');
     var chwdiv=document.getElementById('chw');
     if(val==0){
       customdiv.style.display='block';
       countrydiv.style.display='none';
       chwdiv.style.display='none';
     }
     else if (val==1){
       customdiv.style.display='none';
       countrydiv.style.display='block';
       chwdiv.style.display='none';
     }

    }
    function checkCntry(vals){
     var el=document.getElementById('chw');
     if(vals!=null){
       el.style.display='none';
     }
     else{
       el.style.display='block';
     }
    }
</script>
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto"><img src="img/" alt="" title=""></a>
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">How to use</a></li>
          <li><a href="#contact">Select Options</a></li>
          <li><a href="#uploadsec">Upload Photo</a></li>
          <li><a href="#sentmail">Sent Mail</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
    </div>
  </section>
  <main id="main">
    <section id="about">
      <div class="container col-lg-8">
        <div class="section-header">
          <h2>How to use</h2>
        </div>
        <div class="col-lg-12 text-center">
        <div class="form-row">
            <div class="form-group col-lg-4 col-md-4">
              <div class="help">
                <h3><a href="">STEP ONE</a></h3>
                <p id="kl">Select Image Options</p>
              </div>
            </div>
            <div class="form-group col-lg-4 col-md-4">
              <div class="help">
                <h3><a href="">STEP Two</a></h3>
                <p>Upload your image</p>
              </div>
            </div>
            <div class="form-group col-lg-4 col-md-4">
              <div class="help">
                <h3><a href="">STEP Three</a></h3>
                <p>Give us your feedback</p>
              </div>
            </div>
      </div>
    </div>
    </section>
    <hr>
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container col-lg-10">
        <div class="section-header">
          <h2>Select Option</h2>
        </div><br><br>
        <div class="form">
            <div class="form-row" align="center">
              <div class="form-group col-lg-6" id="btnclick">
                <button class="btn btn-outline-secondary col-md-8" onclick='CheckCustom(2);'>Passport Size<img src="img/country.png" width="50" ALIGN="right" /></button><br></br>
                <button class="btn btn-outline-secondary col-md-8" onclick='CheckCustom(1);'>VISA</button><br></br>
                <button class="btn btn-outline-secondary col-md-8" onclick='CheckCustom(0);'>Custom Size</button>
              </div>
              <div class="form-group col-lg-6">
                <div class="form-group" id="country" Style="display:none;" onchange='checkCntry(this.value);'>
                  <select id="ticket-type"  name="ticket-type" class="form-control col-lg-8"   required >
                    <option selected disabled  value="pro-access">---- Select Country ---</option>
                    <option value="pro-access">Bangladesh</option>
                    <option value="premium-access">India</option>
                  </select></br>
                <div class="form-group col-lg-10" name="cntry" id="chw" Style="display:none;" >
                  <div class="form-row">
                    <div class="col-lg-6">
                        <span>Width:</span>
                        <label>5.3</label>
                        <span>cm</span>
                    </div>
                    <div class="col-lg-6">
                        <span>Height:</span>
                        <label>5.3</label>
                        <span>cm</span>
                    </div>
                  </div>
                </div>
                </div>
                <div class="form-group col-lg-10" name="custom" id="custom" align="center"  Style="display:none;">
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label">Height :</label>
                  <div class="col-lg-4">
                    <input type="email" class="form-control" id="email" placeholder="Height" name="email">
                  </div>
                    <label class="col-lg-3 col-form-label text-left" >cm</label>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label">Width :</label>
                  <div class="col-lg-4">
                    <input type="email" class="form-control" id="email" placeholder="Width" name="email">
                  </div>
                    <label class="col-lg-3 col-form-label text-left" >cm</label>
                </div>

                </div>
              </div>
            </div>
            <div class="text-center">
                <input type="submit" id="selectbtn" class="col-lg-4" value="Done">
            </div>
          </div>
        </div>
      </div>
    </section><!-- #contact -->
    <hr>
    <section id="uploadsec" class="section-with-bg wow fadeInUp">
      <div class="container" id="app">
        <div class="section-header">
          <h2>Upload Image</h2>
          <p></p>
        </div>
        <div class="text-center">
        <label class="uploadbtn"><i class="fa fa-cloud-upload"></i>
            Browse&hellip;<input id="upload" type="file" style="display: none;">
        </label>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 text-center">
            <div id="myImg" >
            </div>
            <h3>Upload your image</h3>
            <button class="btn btn-success upload-result uploadbtn" @click="force"><i class="fa fa-upload"></i>Upload Image</button>
          </div>
          <div class="col-lg-6 col-md-6 text-center ">
              <div id="cropme" class="preview text-center"></div>
                <img id="cropme-result">
              <h3 style="margin-top:45px;">Preview</h3>
              <button class="uploadbtn"><i class="fa fa-envelope"></i>Send Mail</button>
          </div>
      </div>



              <!--


              -->

      </div>
    </section>

    <section id="sentmail" class="section-bg wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Send Via Mail</h2>
        </div>
        <div class="form col-lg-12 " id="formelement" ALIGN="center">
          <form method="post"  role="form">
            <div class="form-group col-lg-6 text-center" >
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validation"></div>
            </div>
            <div class="form-group col-lg-6 ">
              <textarea class="form-control " name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center" ><input type="submit" id="mailbtn" value="Send Message"></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->
  </main>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">

    <div class="container">
      <img src="img/google.png" alt="capture">
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <script src="lib/jquery/jquery.min.js"></script>
  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>
  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.5.21/dist/vue.js"></script>
  <script src="dist/cropme.js"></script>
  <script src="js/app.js"></script>
  <script type="text/javascript">
  $(function () {
  $(":file").change(function () {
      if (this.files && this.files[0]) {
          var reader = new FileReader();
          reader.onload = imageIsLoaded;
          reader.readAsDataURL(this.files[0]);
      }
  });
});

function imageIsLoaded(e) {
  //$('#myImg').attr('src', e.target.result);
  html = '<img src="' +e.target.result+ '" id="a" height="300px" width="300px" />';
  $("#myImg").html(html);
};

  </script>
</body>

</html>
