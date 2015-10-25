<div class="rightpanel">
        
        <ul class="breadcrumbs">
            <li><a href="dashboard.html"><i class="fa fa-home"></i></a> <span class="separator"></span></li>
            <li>Dashboard</li>
        </ul>
        
        
        <div class="maincontent">
            <div class="maincontentinner">
                
                

                    <div id="infoMessage"><?php echo $message;?></div>

                    
                    <a class="btn btn-inverse" style="color:#fff;" href="<?php echo base_url('auth/create_user'); ?>"><i class="fa fa-plus"></i> Tambah Pengguna</a> 

                    <h4 class="widgettitle"><i class="fa fa-users"></i> Daftar Pengguna</h4>
                    <table class="table table-striped table-bordered responsive" id="tabel-user">
                        <thead>
                        <tr>
                            <th><?php echo lang('index_fname_th');?></th>
                            <th><?php echo lang('index_lname_th');?></th>
                            <th><?php echo lang('index_email_th');?></th>
                            <th><?php echo lang('index_status_th');?></th>
                            <th><?php echo lang('index_action_th');?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($users as $user):?>
                            <tr>
                                <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
                                <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
                                <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
                                <td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
                                <td><?php echo anchor("auth/edit_user/".$user->id, 'Edit',array('class' => 'btn btn-success ','style' => 'color:#fff;' ) ) ;?></td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>

                    
                
                
            </div><!--maincontentinner-->
        </div><!--maincontent-->
        
    </div><!--rightpanel-->