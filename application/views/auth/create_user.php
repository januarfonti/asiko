<div class="rightpanel">
        

        <ul class="breadcrumbs">
            <div class="container">
                <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i></a> Tambah Pengguna Baru</li>
            </div>
        </ul>
        
        
        <div class="maincontent">
            <div class="maincontentinner">
            
      

            <div class="widgetbox profile-notifications">
                                    <h4 class="widgettitle"><i class="fa fa-user"></i> Tambah Pengguna Baru</h4>
                                    <div class="widgetcontent">
                                    

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open_multipart("auth/create_user",array('class' => 'stdform stdform2'));?>

      <p class="animate1 bounceIn">
            <?php echo lang('create_user_fname_label', 'first_name');?>
            <span class="field"><?php echo form_input($first_name);?></span>
      </p>

      <p class="animate2 bounceIn">
            <?php echo lang('create_user_lname_label', 'last_name');?> 
            <span class="field"><?php echo form_input($last_name);?></span>
      </p>
      
      <?php
      if($identity_column!=='email') {
          echo '<p>';
          echo lang('create_user_identity_label', 'identity');
          echo '<br />';
          echo form_error('identity');
          echo form_input($identity);
          echo '</p>';
      }
      ?>

      

      <p class="animate3 bounceIn">
            <?php echo lang('create_user_email_label', 'email');?> 
            <span class="field"><?php echo form_input($email);?></span>
      </p>

      <p class="animate4 bounceIn">
            <?php echo lang('create_user_password_label', 'password');?> 
            <span class="field"><?php echo form_input($password);?></span>
      </p>

      <p class="animate5 bounceIn">
            <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> 
            <span class="field"><?php echo form_input($password_confirm);?></span>
      </p>

      <div class="par animate6 bounceIn">
                                <label>Foto :</label>
                                <div class="field fileupload fileupload-new" data-provides="fileupload">
                                <div class="input-append">
                                <div class="uneditable-input span3">
                                    <i class="iconfa-file fileupload-exists"></i>
                                    <span class="fileupload-preview"></span>
                                </div>
                                <span class="btn btn-file"><span class="fileupload-new">Select file</span>
                                <span class="fileupload-exists">Change</span>
                                <input type="file" name="userfile" /></span>
                                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                                </div>
                            </div>


      <p class="animate7 bounceIn stdformbutton">
        <label></label>
        <button class="btn btn-inverse"><i class="fa fa-save"></i> Simpan</button>
      </p>

<?php echo form_close();?>

                                    </div>
                                </div>




</div>
</div>
</div>