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

      <div class="widgetbox box-info animate1 bounceIn">
                            <h4 class="widgettitle">Deaktifasi Pengguna <a class="minimize">&#8211;</a></h4>
                            <div class="widgetcontent" style="background-color:#fff;">
                                


                                    <?php echo form_open("auth/deactivate/".$user->id,array('class' => 'stdform stdform2', ));?>

                                      <p>
                                        <label><?php echo sprintf(lang('deactivate_subheading'), $user->first_name." ".$user->last_name);?></label>
                                        <span class="field">
                                                    <input type="radio" name="confirm" value="yes" checked="checked" /> Ya &nbsp; &nbsp;&nbsp; &nbsp;
                                                    <input type="radio" name="confirm" value="no" /> Tidak
                                        </span>
                                    </p>

                                      <?php echo form_hidden($csrf); ?>
                                      <?php echo form_hidden(array('id'=>$user->id)); ?>

                                    

                                    <p>
                                        <label></label>
                                        <span class="field">
                                            <button type="submit" class="btn btn-inverse">Simpan</button>
                                        </span>
                                    </p>

                                    <?php echo form_close();?>


                            </div>
                        </div><!--widgetbox-->
        
                


    </div><!--loginpanelinner-->
</div><!--loginpanel-->

<div class="loginfooter">
    <p>&copy; 2015. Aplikasi Kearsipan dan Korespondensi.</p>
</div>

</body>
</html>