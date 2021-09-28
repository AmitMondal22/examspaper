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
</head>
<body>
    <div class="container">
        <form action="<?php echo base_url(); ?>act-userotp" method="post">
        <?php $b=""; $a="activate"; foreach ($data as $key) { 
            if ($key->u_ststus == $a || $key->u_ststus=$b) {
                redirect(base_url()."create-account");
            } else {
            
            ?>
            <h1><?php echo $key->u_email; ?></h1>
            <p><input type="hidden" name="u_id" value="<?php echo $key->user_id ; ?>"></p>
            <p>OTP</p>
            <p><input type="text" name="u_num" id="" class="form-control" pattern="\d*" inputmode="numeric" required></p>
            
                            
            <p><input type="submit" value="create account" class="btn btn-primary btn-block"></p>
            <?php } } ?>
        </form>
    </div>
</body>
<script></script>
</html>