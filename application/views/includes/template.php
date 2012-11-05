<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <meta name="description" content="<?php echo $description; ?>" />
        <meta name="keywords" content="<?php echo $keywords; ?>" />
        <meta name="revisit-after" content="7 days" />
        <meta name="ROBOTS" content="all" />
        	
    	<!-- 1140px Grid styles for IE -->
    	<!--[if lte IE 9]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" /><![endif]-->
    
    	<!-- The 1140px Grid - http://cssgrid.net/ -->
    	<link rel="stylesheet" href="<?php echo base_url();?>css/1140.css" type="text/css" media="screen" />
    	
    	<!-- Your styles -->
    	<link rel="stylesheet" href="<?php echo base_url();?>css/styles.css" type="text/css" media="screen" />
    	
    	<!--css3-mediaqueries-js - http://code.google.com/p/css3-mediaqueries-js/ - Enables media queries in some unsupported browsers-->
    	<script type="text/javascript" src="<?php echo base_url();?>js/css3-mediaqueries.js"></script>
    	<script type="text/javascript" src="<?php echo base_url();?>js/in.js"></script>
        
        <script src="<?php echo base_url();?>js/jquery.min.js"></script>
        
        <title><?php echo $title;?></title>
    </head>
    <body>
        <div class="nav">
                <?php $this->load->view('includes/nav'); ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="twelvecol last">
                    
                    <?php $this->load->view($main_content); ?>
                </div>
            </div>                        
        </div>        
        <!--div id="footer">
            <?php $this->load->view('includes/footer'); ?>
        </div-->        
    </body>
</html>