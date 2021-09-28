<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php foreach ($head as $list) {  ?>
  <link rel="icon" href="<?php echo base_url(); ?>main_file/img/logo.png" type="image/gif" sizes="16x16">
  <title><?php echo $list->institute_name; ?>  quastion paper</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="<?php echo $list->institute_name; ?> quastion paper">
  <meta name="keywords" content="<?php //echo $list->institute_name; ?> <?php 

 foreach ($ye_a as $y_d ) { 
    $sect=null;
     


     foreach ($str as $s_data) { 
            if ($y_d->year_id == $s_data->year_id) { 
              if($s_data->stream_name !== $sect){
                if ($sect !== null){
                } 
                //<!-- quastion id -->
                foreach ($head as $list) {
                  echo $list->institute_name." ";
                  echo $s_data->stream_name ." ";
                  echo	$y_d->year." question paper , ";
                }
                $sect = $s_data->stream_name;
              }
            }
          } 



         }





  
  ?>  ">



  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



  <link rel="stylesheet" href="<?php echo base_url(); ?>main_file/accets/cuasom.css">
  <?php } ?>
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
                <div class="panel-heading align-middle">
                <?php foreach ($head as $list) {  ?>
                  <h2><?php echo $list->institute_name; ?></h2>
                  <?php } ?>
                </div>
                <div class="panel-body">Our website allows students to access multiple exams question papers on the same platform. Through this website you can view and download the question papers of all types of Board Exam Competitive Exam and Universities Exam of India. All types of question papers will be uploaded gradually. We will try to upload the answers to these question papers according to your response</div>
              </div>
            </div>
          </div>

           <!-- ALL SELECT TAG -->


          <div class="col-md-9">
            
            <div class="row">
              <?php  $i=0; foreach ($ye_a as $y_d ) { $i = $i+1; 
                $sect=null;
                ?>
              <div class="col-md-6">
                <div class="panel-group">
                  <div class="panel panel-default p_gro">
                    <div class="panel-heading"><h3><?php echo	$y_d->year; ?></h3></div>
                      <div class="panel-body">
                        <!-- subject -->
                      <?php  foreach ($str as $s_data) { 
                        if ($y_d->year_id == $s_data->year_id) { 
                          if($s_data->stream_name !== $sect){
                            if ($sect !== null){
                            } 
                            //<!-- quastion id -->
                            foreach ($head as $list) {  
                        ?>
                              <p>
                                <a href="<?php echo base_url(); ?>quastions/<?php echo $list->institute_id; ?>/<?php echo	$y_d->year_id; ?>/<?php echo	$s_data->stream_id; ?>">
                                
                                  <?php echo $s_data->stream_name; ?>

                                </a>
                              </p>
                        <?php 
                            }
                            $sect = $s_data->stream_name;
                          }
                        }
                      } 
                      ?>  
                      </div> 
                  </div>
                </div>
              </div>








              <?php if ($i%2==0) { ?>
              <div class="col-md-12">
                <div class="panel-group">
                  <div class="panel panel-default p_gro">
                    <!-- <div class="panel-heading"><h3></h3></div> -->
                    <div class="panel-body">
                        <?php $this->load->view("go_add"); ?>
                    </div>
                  </div>
                </div>
              </div>
              <?php } } ?>
              
              </div>
            
            
            

            <!-- END SELECT TAG  -->


            
          </div>

          <!-- TRANDING SITE -->
          <?php $this->load->view('font_page_data/tranding'); ?>
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