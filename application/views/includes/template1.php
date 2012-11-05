<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="<?php echo base_url();?>css/main.css" type="text/css" media="screen" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <meta name="description" content="<?php echo $description; ?>" />
        <meta name="keywords" content="<?php echo $keywords; ?>" />
        <meta name="revisit-after" content="7 days" />
        <meta name="ROBOTS" content="all" />
        <script src="<?php echo base_url();?>/jquery.min.js"></script>
        <title><?php echo $title;?></title>
    </head>
    <body>
        <div id="container">
            <div id="nav">
                <?php $this->load->view('includes/nav'); ?>
            </div>
            <div id="content">
                <?php $this->load->view($main_content); ?>
            </div>
            <!--div id="footer">
                <?php $this->load->view('includes/footer'); ?>
            </div-->
        </div>
    </body>
</html>