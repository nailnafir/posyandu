<html>
    <head>

        <title>Login Posyandu</title>
        <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login.css">
    </head>
    <body>
        <div class="login-page">
            <div class="form">
                <!-- <form class="register-form">
                    <input type="text" placeholder="name"/>
                    <input type="password" placeholder="password"/>
                    <input type="text" placeholder="email address"/>
                    <button>create</button>
                    <p class="message">Already registered? <a href="#">Sign In</a></p>
                </form> -->
                <?php 
                $attr = array("class" => "login-form");
                echo form_open('Login/ceklogin', $attr) ?> 
                    <input type="text" placeholder="username" name="username"/>
                    <input type="password" placeholder="password" name="password"/>
                    <input type="submit" name="login" value="Login" class="button"/>
                    <!-- <button>login</button> -->
                <!-- <p class="message">Not registered? <a href="#">Create an account</a></p> -->
                <?php echo form_close() ?>
            </div>
        </div>

        <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
	    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>