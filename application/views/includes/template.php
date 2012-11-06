<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <meta name="description" content="<?php echo $description; ?>" />
        <meta name="keywords" content="<?php echo $keywords; ?>" />
        <meta name="revisit-after" content="7 days" />
        <meta name="ROBOTS" content="all" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">	    	
    	<link rel="stylesheet" href="<?php echo base_url();?>css/styles.css" type="text/css" media="screen" />
        <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    	<link href="<?php echo base_url();?>css/bootstrap-responsive.min.css" rel="stylesheet">
        <script src="<?php echo base_url();?>js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
        <title><?php echo $title;?></title>
    </head>
    <body>        
        <?php $this->load->view('includes/nav'); ?>                    
        <div id="wrap">            
            <div class="row-fluid">                
                <div class="container">                                   
                        <?php $this->load->view($main_content); ?>                
                </div>                        
            </div> 
            <div id="push"></div>
        </div>    
         
        <div id="footer">            
                <?php $this->load->view('includes/footer'); ?>            
        </div>        
    </body>
</html>