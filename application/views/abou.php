<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="<?php base_url(); ?>main_file/img/logo.png" type="image/gif" sizes="16x16">
  <title>About</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



  <link rel="stylesheet" href="<?php base_url(); ?>main_file/accets/cuasom.css">
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
                <div class="panel-heading align-center"><h2>Padega India Badega India</h2></div>
                <div class="panel-body">Our website allows students to access multiple exams question papers on the same platform. Through this website you can view and download the question papers of all types of Board Exam Competitive Exam and Universities Exam of India. All types of question papers will be uploaded gradually. We will try to upload the answers to these question papers according to your response</div>
              </div>
            </div>
          </div>

           <!-- ALL SELECT TAG -->

              <!-- body content -->
        <div class="row b-row">
            <div class="col-md-12" >
              <div class="panel-group p_gro">
                <div class="panel panel-default ">
                  <div class="panel-heading align-left"><h2>Sharing Is Caring</h2></div>
                  <div class="panel-body align-left"><p>We request you to email us the missing Questions on this website so that we can help each other. We will publish the names of those who will do so on the website.</p></div>
                </div>
              </div>
            </div>
            <div class="col-md-12" >
              <div class="panel-group p_gro">
                <div class="panel panel-default ">
                  <div class="panel-heading align-left"><h2>Policy</h2></div>
                  <div class="panel-body align-left"><p>The question papers uploaded on this website are taken from the Students Community, books and the websites.We are not taking any kind of right of these questions papers. </p></div>
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