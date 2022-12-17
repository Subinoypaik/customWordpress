

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>:: croplifeindiademo ::</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="Quickdev">
<link rel="canonical" href="https://example.com"/>


 <!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script type="text/javascript" src="js/respond.min.js"></script>
<![endif]-->
<!--- Custom ---->

<?php wp_head()?>
</head>
<body>

<!--LOGO-->

<a class="navbar-brand" href="#">
                           <?php
                           if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                        }
                           ?>
                        </a>
                        
<?php wp_nav_menu(array('theme_location'=>'header-menu'));?>

