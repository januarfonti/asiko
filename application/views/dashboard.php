<div class="rightpanel">
        

        <ul class="breadcrumbs">
            <div class="container">
                <li><a href="dashboard.html"><i class="fa fa-home"></i></a> Dashboard</li>
            </div>
        </ul>
        
        
        <div class="maincontent">
            <div class="maincontentinner">
                
                <?php print_r($this->ion_auth->user()->row()->first_name); ?>
                
                
            </div><!--maincontentinner-->
        </div><!--maincontent-->
        
    </div><!--rightpanel-->