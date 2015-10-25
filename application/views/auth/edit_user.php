<div class="rightpanel">
        

        <ul class="breadcrumbs">
            <div class="container">
                <li><a href="dashboard.html"><i class="fa fa-home"></i></a> Laporan</li>
            </div>
        </ul>
        
        
        <div class="maincontent">
            <div class="maincontentinner">
            
      

            <div class="widgetbox profile-notifications">
                                    <h4 class="widgettitle">Notifications</h4>
                                    <div class="widgetcontent">
                                    

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open(uri_string(),array('class' =>'stdform stdform2' , ));?>

      <p class="animate1 bounceIn">
            <?php echo lang('edit_user_fname_label', 'first_name');?>
            <span class="field"><?php echo form_input($first_name);?></span>
      </p>

      <p class="animate2 bounceIn">
            <?php echo lang('edit_user_lname_label', 'last_name');?>
            <span class="field"><?php echo form_input($last_name);?></span>
      </p>

      
      <p class="animate3 bounceIn">
            <?php echo lang('edit_user_password_label', 'password');?>
            <span class="field"><?php echo form_input($password);?></span>
      </p>

      <p class="animate4 bounceIn">
            <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?>
            <span class="field"><?php echo form_input($password_confirm);?></span>
      </p>

      <?php if ($this->ion_auth->is_admin()): ?>
          <span class="field animate5 bounceIn"><?php foreach ($groups as $group):?>
              <div class="checkbox">
              <?php
                  $gID=$group['id'];
                  $checked = null;
                  $item = null;
                  foreach($currentGroups as $grp) {
                      if ($gID == $grp->id) {
                          $checked= ' checked="checked"';
                      break;
                      }
                  }
              ?>
              <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
              <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
              </div>
          <?php endforeach?></span>

      <?php endif ?>

      <?php echo form_hidden('id', $user->id);?>
      <?php echo form_hidden($csrf); ?>

      <p class="animate5 bounceIn stdformbutton">
        <label></label>
        <button class="btn btn-inverse"><i class="fa fa-save"></i> Simpan</button>
      </p>

<?php echo form_close();?>

                                    </div>
                                </div>


</div>
</div>
</div>