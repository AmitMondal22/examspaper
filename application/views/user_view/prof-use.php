<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="<?php echo base_url(); ?>main_file/img/logo.png" type="image/gif" sizes="16x16">
  <?php foreach ($use_daat as $u_d) { ?>
  <title><?php echo $u_d->u_name; ?></title>
  <?php } ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="">
  <meta name="keywords" content="">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



  <link rel="stylesheet" href="<?php echo base_url(); ?>main_file/accets/cuasom.css">
  <style>
        .profile-head {
            transform: translateY(5rem)
        }
        
        .cover {
            background-image: url(<?php echo base_url();?>main_file/img/icon/cosmic-160340_1280.png);
            background-size: cover;
            background-repeat: no-repeat
        }
        .pbod{
            margin-top: 15px;
        }
        


    </style>
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
            <div class="bg-white shadow rounded overflow-hidden">
                <div class="px-4 pt-0 pb-4 cover">
                    <?php foreach ($use_daat as $u_d) { ?>
                    <div class="media align-items-end profile-head">
                        <div class="profile mr-3">
                            <img src="
                            
                            <?php if ($u_d->u_img) { ?>
                              <?php echo base_url(); ?>user_pictur/<?php echo $u_d->u_img; ?>
                              <?php 
                            } else { ?>
                              <?php echo base_url();?>main_file/img/icon/img.jpg <?php
                            }
                             ?>
                            
                            " alt="..." width="130" class="rounded mb-2 img-thumbnail">
                            <a href="#" class="btn btn-outline-dark btn-sm btn-block" data-toggle="modal" data-target="#myModal3">Edit profile</a>
                            
                        </div>
                        <div class="media-body mb-5 text-white">
                            <h4 class="mt-0 mb-0"><?php echo $u_d->u_name; ?></h4>
                            <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i><?php echo $u_d->u_email; ?></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="bg-light p-4 d-flex justify-content-end text-center">
                    <ul class="list-inline mb-0">
                        <!-- <li class="list-inline-item">
                            <h5 class="font-weight-bold mb-0 d-block">215</h5><small class="text-muted"> <i class="fas fa-image mr-1"></i>Upload Quastion</small>
                        </li>
                        <li class="list-inline-item">
                            <h5 class="font-weight-bold mb-0 d-block">745</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Apruv Quastion</small>
                        </li> -->
                        <!-- <li class="list-inline-item">
                            <h5 class="font-weight-bold mb-0 d-block">340</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Following</small>
                        </li> -->
                    </ul>
                </div>
                <div class="px-4 py-3" >
                  
                    <h5 class="mb-12">My Info</h5>
                    <!-- Nav tabs -->
                   

                    <div class="row">
                      <div class="col-md-12">
                         
                          <table class="table table-borderless" style="background-color: #edecffad; padding:20px;border-radius: 5px;">
                          <?php foreach ($use_daat as $u_d) { ?>
                            <tbody>
                              <tr>
                                <th>Gender</th>
                                <td><?php echo $u_d->u_gender; ?></td>
                                
                              </tr>
                              <tr>
                                <th>Studied In</th>
                                <td><?php echo $u_d->studied_at; ?></td>
                              </tr>
                              <tr>
                                <th>Work In</th>
                                <td><?php echo $u_d->work_at; ?></td>
                              </tr>
                              <tr>
                                <th>Lives In</th>
                                <td><?php echo $u_d->lives_in; ?></td>
                              </tr>
                              <tr>
                                <th>Mobile No</th>
                                <td><?php $a=0; if ($u_d->mobile_no==$a) {
                                    
                                } else {
                                    echo $u_d->mobile_no;
                                }
                                  ?></td>
                              </tr>
                            </tbody>
                            <?php } ?>
                          </table>
                         
                          




                      </div>
                      
                    </div>
                    

                <nav role="navigation " > 
                  <ul class="nav nav-tabs nav-justified" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="tab1" data-toggle="tab" href="#page1" role="tab" >My Quastion</a>
                    </li>
                    <li class="nav-item">
                      <a href="#page2" id="tab2" data-toggle="tab" role="tab"  class="nav-link">Upload Quastion</a>
                    </li>
                  </ul>
                </nav>

                <div class="tab-content" id="myTabContent">     
                  <div class="tab-pane fade show active" id="page1" role="tabpanel" aria-labelledby="overview-tab">
                    <div class="table-responsive text-center" style="background-color: #EDECFF; padding:20px;border-radius: 5px; margin-top: 15px;">
                      <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>Subject Name</th>
                              <th>Select stream</th>
                              <th>institute</th>
                              <th>year</th>
                              <th>open / Download Quastion</th>
                              <th>Edit Quation</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php foreach ($all_quas as $quas) { ?>
                            <tr>
                              <td><?php echo $quas->subject_name; ?></td>
                              <td><?php echo $quas->stream_name; ?></td>
                              <td><?php echo $quas->institute_name; ?></td>
                              <td><?php echo $quas->year; ?></td>
                              <td>
                                <a href="<?php echo base_url(); ?>all_file/quastion_paper/<?php echo $quas->q_file; ?>" class="btn btn-primary">open</a>
                                </td>
                              <td>
                              <?php if ($quas->publish == "deactive") {?>
                                <a href="<?php echo base_url(); ?>updatemyquastion/<?php echo $quas->sq_id; ?>" class="btn btn-warning"><i class="fas fa-edit">edite</i></a>
                                <?php }else{?>
                                  Approve
                                  <?php } ?>
                              </td> 
                            </tr>
                            <?php } ?>
                          </tbody>
                          </table>
                      </div>
                  </div>
                 



                  <div class="tab-pane fade" id="page2" role="tabpanel" aria-labelledby="activities-tab" style="margin-top: 15px;">
                    
                    <h3>Upload Quastion</h3>


                    <form action="<?php echo base_url(); ?>upload-quastion" method="post" enctype="multipart/form-data" style="background-color: #EDECFF; padding:20px;border-radius: 10px;">
                    <?php foreach ($use_daat as $u_id) { ?>
                      <input type="hidden" name="u_id" value="<?php echo $u_id->user_id; ?>">
                    <?php } ?>
                      <p><b>Select institute</b></p>
                      <p><select name="univer_id" id="" class="form-control" required>
                          <option value="">Select institute.......</option>

                          <?php foreach ($ins_data as $in_d ) { ?>
                          
                          <option value="<?php echo $in_d->institute_id; ?>">
                          <?php echo $in_d->institute_name; ?>
                          </option>
                          <?php } ?>

                      </select>
                    </p>
                      <p><b>Select stream</b></p>
                      <p><select name="stream_id" id="" class="form-control" required>
                          <option value="">Select stream.......</option>
                          <?php foreach ($u_str as $s) { ?>
                          <option value="<?php echo $s->stream_id; ?>"><?php echo $s->stream_name; ?></option>
                          <?php } ?>
                      </select></p>
                      <p><b>year</b></p>
                      <p><select name="year_id" id="" class="form-control" required>
                          <option value="">Select Year.......</option>
                          <?php foreach ($y_row as $y_r) { ?>
                          <option value="<?php echo $y_r->year_id; ?>"><?php echo $y_r->year; ?></option>
                          <?php } ?>
                      </select></p>
                      <p><b>Subject Name</b></p>
                      <p><input type="text" name="sub_name" placeholder="Enter subject name....."  class="form-control" required></p>
                      <p><b>Upload Quastion</b><br>
              Allow file type only pdf.....</p>
                      <p>
                          <div class="custom-file">
                              <label class="custom-file-label" for="customFile">Select Quastion paper</label>
                              <input type="file" class="custom-file-input" id="customFile" name="quas_upd" required>
                          </div>
                      </p>
                      <p><input type="submit" value="Upload" class="btn btn-primary btn-block"></p>
                  </form>  

                  <div style="background-color: #EDECFF; padding:20px;border-radius: 10px; margin-top:20px;">

                    <button type="button" class="btn btn-warning " data-toggle="modal" data-target="#myModal">
                      Add institute
                    </button>

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">
                     ADD  stream
                    </button>

                  </div>


                  </div>
                </div>









            
        </div>
    </div>
    </div>
    </div>
      


          




      

      <!-- coppy rider start -->
      <?php $this->load->view('font_page_data/copyRides'); ?>
      <!-- end copyrides -->
      
</div>


<!-- The Modal ins institute -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Institute</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
       <form action="<?php echo base_url(); ?>ins-insti" method="post">
        <p>Institute Name</p>
        <p><input type="text" name="ins_name" id="" class="form-control" required></p>
        <p>Select Institute Type</p>
        <p>
          <select name="typ_inst" id="" class="form-control" required>
            <option value="">Select Institute Type.......</option>
            <?php foreach ($in_typ as $t_ins) { ?>
            <option value="<?php echo $t_ins->institute_type_id; ?>"><?php echo $t_ins->institute_type; ?></option>
            <?php } ?>
          </select>
        </p>
        <p><input type="submit" value="SAVE" class="btn btn-primary btn-block"></p>
       </form>
      </div>
      
      
      
    </div>
  </div>
</div>



<!-- The Modal ins stream -->
<div class="modal" id="myModal2">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add stream</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
       <form action="<?php echo base_url(); ?>add-stream" method="post">
        <p>Stream Name</p>
        <p><input type="text" name="ins_name" id="" class="form-control" required></p>
        <p><input type="submit" value="SAVE" class="btn btn-primary btn-block"></p>
       </form>
      </div>
      
      
      
    </div>
  </div>
</div>




<!-- The Modal update profil -->
<div class="modal" id="myModal3">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit My Profile</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
      <?php foreach ($use_daat as $u_d) { ?>
       <form action="<?php echo base_url(); ?>upd_profile" method="post" enctype="multipart/form-data">
       <input type="hidden" name="u_id" value="<?php echo $u_d->user_id; ?>">
       <p>Name</p>
       <p><input type="text" name="u_name" class="form-control" id="" value="<?php echo $u_d->u_name; ?>"></p>
       <p>Update profile picture</p>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile" value="" name="u_pro">
          <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
        <p>Studies in</p>
        <p><input type="text" name="u_study" id="" class="form-control"value="<?php echo $u_d->studied_at; ?>"></p>
        <p>Work in</p>
        <p><input type="text" name="u_workin" class="form-control" id="" value="<?php echo $u_d->work_at; ?>"></p>
        <p>Lives In</p>
        <p><input type="text" name="u_livin" class="form-control" id=""value="<?php echo $u_d->lives_in; ?>"></p>
        <p>Mobile No</p>
        <p><input type="text" name="um_no" class="form-control"  pattern="\d*" inputmode="numeric" onkeypress='validate(event)'value="<?php echo $u_d->mobile_no; ?>"></p>
        <p><input type="submit" value="SAVE" class="btn btn-primary btn-block"></p>
       </form>
       <?php } ?>
      </div>
      
      
      
    </div>
  </div>
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