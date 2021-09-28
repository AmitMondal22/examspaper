<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="<?php base_url(); ?>main_file/img/logo.png" type="image/gif" sizes="16x16">
  <title>Contact</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



  <link rel="stylesheet" href="<?php base_url(); ?>main_file/accets/cuasom.css">

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body oncontextmenu="return false">
  <div class="bodd">
    <!-- stat nav bar -->
    <?php $this->load->view('font_page_data/nav-bar') ?>
    <!-- end nave bar -->

      <div class="contai" >
        

        <!-- body content -->

        <div class="row b-row">
          <div class="col-md-12" >
            <div class="panel-group p_gro">
              <div class="panel panel-default ">
                <div class="panel-heading align-left">
                    <div class="row">
                        <div class="col-md-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12790047.96241428!2d78.93352446077535!3d21.86288945409456!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1614139349054!5m2!1sen!2sin" width="100%" height="445"  allowfullscreen="" loading="lazy" class="map-con"></iframe>
                        </div>
                        <div class="col-md-6">
                            <form action="act-contact" method="post">
                                <p><input type="text" name="name" class="form-control" placeholder="Enter full Name"></p>
                                <p><input type="email" name="email" id="" class="form-control" placeholder="Enter e-mail"></p>
                                <p><input type="text" name="title" class="form-control" placeholder="Title"></p>
                                <p><textarea name="subject" class="form-control"  rows="5" placeholder="Subject"></textarea></p>
                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="6LdjPnUaAAAAAB2pjV1rWwvIUjNA0yiSk5o8aYY4"></div>
                                </div>
                                <p><input type="submit" name="consub" value="SEND" class="btn btn-primary btn-block"></p>
                                
                            </form>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>


            

        <!-- body content -->
            


            
          </div>

          <!-- TRANDING SITE -->
          <!-- <?php $this->load->view('font_page_data/tranding'); ?> -->
          <!-- END TRANDING SIDE -->



          <!-- FOOTER -->
          <?php $this->load->view('font_page_data/footer'); ?>
          <!-- END FOOTER -->

        </div>

      </div>

      <!-- coppy rider start -->
      <?php $this->load->view('font_page_data/copyRides'); ?>
      <!-- end copyrides -->
      
</div>



<script type="text/javascript">
  
  $(document).ready(function(){
  
          $(".slidingDiv").hide();
          $(".show_hide").show();
  
      $('.show_hide').click(function(){
      $(".slidingDiv").slideToggle();
      });
  
  });



  // dilable inspect element

  document.onkeydown = function(e) {
      if(event.keyCode == 123) {
        return false;
      }
      if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
        return false;
      }
      if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
        return false;
      }
      if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
        return false;
      }
      if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
        return false;
      }
    }
  
</script>
</body>
</html>