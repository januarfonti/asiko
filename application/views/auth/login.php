<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>ASIKO - Aplikasi Kearsipan dan Korespondensi</title>
<link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/style.default.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/style.shinyblue.css" type="text/css" />

<script type="text/javascript" src="<?php echo base_url('assets') ?>/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets') ?>/js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets') ?>/js/jquery-ui-1.10.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets') ?>/js/modernizr.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets') ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets') ?>/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets') ?>/js/custom.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('#login').submit(function(){
            var u = jQuery('#username').val();
            var p = jQuery('#password').val();
            if(u == '' && p == '') {
                jQuery('.login-alert').fadeIn();
                return false;
            }
        });
    });
</script>
</head>

<body class="loginpage">

<div class="loginpanel">
    <div class="loginpanelinner">
        <div class="logo animate0 bounceIn"><img src="<?php echo base_url('assets') ?>/images/logo-login.png" alt="" /></div>
        <?php echo form_open("auth/login", array('id' => 'login' ));?>
            <div class="inputwrapper login-alert">
                <div class="alert alert-error"><?php echo $message;?></div>
            </div>
            <div class="inputwrapper animate1 bounceIn">
                <input type="text" name="identity" id="username" placeholder="<?php echo lang('login_identity_label');?>" />
            </div>
            <div class="inputwrapper animate2 bounceIn">
                <input type="password" name="password" id="password" placeholder="<?php echo lang('login_password_label');?>" />
            </div>
            <div class="inputwrapper animate3 bounceIn">
                <button name="submit">Masuk</button>
            </div>
            
            <div class="inputwrapper animate4 bounceIn">
                <div class="pull-right"><a href="<?php echo base_url('auth/forgot_password'); ?> ">Lupa Password</a></div>
                <label><input type="checkbox" class="remember" name="remember" /> Ingat Saya</label>
            </div>
            
        <?php echo form_close();?>
    </div><!--loginpanelinner-->
</div><!--loginpanel-->

<div class="loginfooter">
    <p>&copy; 2015. Aplikasi Kearsipan dan Korespondensi.</p>
</div>

</body>
</html>