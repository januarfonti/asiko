<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php echo $judul; ?></title>
<link rel="stylesheet" href="<?php echo base_url('assets'); ?>/css/style.default.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url('assets'); ?>/css/bootstrap-fileupload.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url('assets'); ?>/css/bootstrap-timepicker.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url('assets'); ?>/css/responsive-tables.css">



<script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/jquery-1.9.1.min.js"></script>

<script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/jquery.nicescroll.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/jquery-ui-1.10.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/modernizr.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/bootstrap-fileupload.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/bootstrap-timepicker.min.js"></script>

<script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/jquery.uniform.min.js"></script>

<script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/jquery.autogrow-textarea.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/chosen.jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/jquery.cookie.js"></script>

<script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/flot/jquery.flot.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/flot/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/responsive-tables.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/jquery.slimscroll.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/forms.js"></script>
</head>

<body>

<div id="mainwrapper" class="mainwrapper">
    
    <div class="header">
        <div class="logo">
            <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets'); ?>/images/logo.png" alt="" /></a>
        </div>
        <div class="headerinner">
            <ul class="headmenu">
                <li class="odd">
                    <a href="<?php echo base_url('surat'); ?>">
                        <span class="count"></span>
                        <span class="head-icon head-message"></span>
                        <span class="headmenu-label">Data Surat</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('users'); ?>">
                    <span class="count"></span>
                    <span class="head-icon head-users"></span>
                    <span class="headmenu-label">Users</span>
                    </a>
                </li>
                <li class="odd">
                    <a href="<?php echo base_url('laporan'); ?>">
                    <span class="count"></span>
                    <span class="head-icon head-bar"></span>
                    <span class="headmenu-label">Laporan</span>
                    </a>
                </li>
                <li class="right">
                    <div class="userloggedinfo">
                        <img src="<?php echo base_url('assets/images/photos/'.$this->ion_auth->user()->row()->foto); ?>" alt="" />
                        <div class="userinfo">
                            <h5><?php echo $this->ion_auth->user()->row()->first_name.' '.$this->ion_auth->user()->row()->last_name; ?> <small>- <?php echo $this->ion_auth->user()->row()->email; ?></small></h5>
                            <ul>
                                <li><a href="<?php echo base_url('auth/edit_user/'.$this->ion_auth->user()->row()->id); ?>">Edit Profile</a></li>
                                <li><a href="<?php echo base_url('auth/logout'); ?>">Keluar</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul><!--headmenu-->
        </div>
    </div>
    
    <?php echo $output; ?>
    
</div><!--mainwrapper-->

<script>
$(document).ready(

  function() { 

    $("html").niceScroll();

  }

);
</script>

</body>
</html>

