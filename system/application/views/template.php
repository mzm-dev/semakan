<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>mycss/mycss.css" />
      <!--  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/form.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/jadual.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/nav.css" />-->
       <!-- <script type="text/javascript" src="<?php echo base_url(); ?>js/tinymce/jscripts/tiny_mce/tiny_mce.js" >
            </script> -->
        
        
</head>
<body>

	<div class="container">

		<div id="header">
                  
                        
             </div>
             
               

		<div class="container">
			
			<?php $this-> load-> view($main);?>
		</div>

		<div id="footer">
                   
		</div>
	</div>

<link rel="stylesheet" href="<?php echo base_url();?>js/jqueryui/css/humanity/jquery-ui-1.8.18.custom.css"/>

<script src="<?php echo base_url();?>js/jqueryui/js/jquery-ui-1.8.18.custom.min.js" type="text/javascript"></script>
<!--<script src="<?php echo base_url();?>bootstrap/js/bootstrap.js" type="text/javascript"></script>-->


	
	

</body></html>