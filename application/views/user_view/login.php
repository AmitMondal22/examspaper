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
        <form action="log_action" method="post">
            <p>email</p>
            <p><input type="email" name="u_email" id="" class="form-control" required></p>
            <p>password</p>
            <p><input type="password" name="u_password" id="" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[~,!,@,#,$,%,^,&,_,]).{8,}" required>password min 8 characters A to z  special characters</p>
            <p><input type="submit" value="Log In" class="btn btn-primary btn-block"></p>
        </form>
        <p><a href="<?php echo base_url(); ?>create-account">create account</a></p>
        <p><a href="">Forget account</a></p>
    </div>
</body>
<script></script>
</html>