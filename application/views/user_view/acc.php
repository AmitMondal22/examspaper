<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <div class="container">
        <form action="<?php echo base_url(); ?>act-userdata" method="post">
            <p>name</p>
            <p><input type="text" name="u_name" id="" class="form-control" required></p>

            <p>email</p>
            <p><input type="email" name="e_email" id="" class="form-control" required></p>

            <p>gender</p>
            <p><input type="radio" name="u_gen" id="" value="Male" required> Male</p>
            <p><input type="radio" name="u_gen" id="" value="Female" required> Female</p>
            <p><input type="radio" name="u_gen" id="" value="Others" required> Others</p>
            
            <p>password</p>
            <p><input type="password" name="u_password" id="" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[~,!,@,#,$,%,^,&,_,]).{8,}" required>password min 8 characters A to z  special characters</p>

            <p><input type="checkbox" name="u_agree" value="agree" required> terms and conditions</p>
            <div class="form-group">
                 <div class="g-recaptcha" data-sitekey="6LdjPnUaAAAAAB2pjV1rWwvIUjNA0yiSk5o8aYY4"></div>
            </div>                  
            <p><input type="submit" value="create account" name="submitacc" class="btn btn-primary btn-block"></p>
        </form>
    </div>
</body>
<script></script>
</html>