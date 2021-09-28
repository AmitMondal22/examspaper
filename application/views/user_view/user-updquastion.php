<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="<?php echo base_url(); ?>main_file/img/logo.png" type="image/gif" sizes="16x16">
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="">
  <meta name="keywords" content="">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



  <link rel="stylesheet" href="<?php echo base_url(); ?>main_file/accets/cuasom.css">

</head>
<body oncontextmenu="return false">
  <div class="bodd">
    <!-- stat nav bar -->
    <?php $this->load->view('font_page_data/nav-bar') ?>
    <!-- end nave bar -->

      
        

      
            <!-- end nave bar -->
      <div class="pbod">
    <div class="row b-row ">
        <div class="col-md-12 mx-auto">
            <!-- Profile widget -->
            <h3>Upload Quastion</h3>

            <?php foreach ($a_qu as $key) { 
              if ($key->publish == "deactive") {
                $u_idabc=$this->session->userdata('uid'); 
              if ($key->user_id == $u_idabc) {
              
              
              ?>

            <form action="<?php echo base_url(); ?>user-update-quastion" method="post" enctype="multipart/form-data" style="background-color: #EDECFF; padding:20px;border-radius: 10px;">
              <input type="hidden" name="qu_id" value="<?php echo $key->sq_id; ?>">
              <p><b>Select institute</b></p>
              <p><select name="univer_id" id="" class="form-control" >
                  <option value="">Select institute.......</option>

                  <?php foreach ($ins_data as $in_d ) { ?>
                  
                  <option value="<?php echo $in_d->institute_id; ?>" <?php if ($in_d->institute_id == $key->institute_id) {
                    $a="selected";
                    echo $a;
                  }  ?>>
                  <?php echo $in_d->institute_name; ?>
                  </option>
                  <?php } ?>

              </select>
            </p>
              <p><b>Select stream</b></p>
              <p><select name="stream_id" id="" class="form-control" >
                  <option value="">Select stream.......</option>
                  <?php foreach ($u_str as $s) { ?>
                  <option value="<?php echo $s->stream_id; ?>"<?php if ($s->stream_id == $key->stream_id) {
                    $a="selected";
                    echo $a;
                  }  ?>><?php echo $s->stream_name; ?></option>
                  <?php } ?>
              </select></p>
              <p><b>year</b></p>
              <p><select name="year_id" id="" class="form-control" >
                  <option value="">Select Year.......</option>
                  <?php foreach ($y_row as $y_r) { ?>
                  <option value="<?php echo $y_r->year_id; ?>"<?php if ($y_r->year_id == $key->year_id) {
                    $a="selected";
                    echo $a;
                  }  ?>><?php echo $y_r->year; ?></option>
                  <?php } ?>
              </select></p>
              <p><b>Subject Name</b></p>
              <p><input type="text" name="sub_name" placeholder="Enter subject name....."  class="form-control" value="<?php echo $key->subject_name; ?>" ></p>
              <p><b>Upload Quastion</b><br>
              Allow file type only pdf.....
              </p>
              <p>
                  <div class="custom-file">
                      <label class="custom-file-label" for="customFile">Select Quastion paper</label>
                      <input type="file" class="custom-file-input" id="customFile" name="quas_upd" >
                  </div>
              </p>
              <p><a href="<?php echo base_url(); ?>all_file/quastion_paper/<?php echo $key->q_file; ?>">View Quastion</a></p>
              <p><input type="submit" value="UPDATE" class="btn btn-primary btn-block"></p>
          </form> 
          <?php }}} ?>

    </div>
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
  

    function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}

// file type
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
</body>
</html>