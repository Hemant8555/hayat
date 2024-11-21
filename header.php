<?php

/**
 * Header Template
 * 
 * @package Header
*/

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head();  ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hayat</title>
</head>
<body <?php body_class(); ?>> 

    <?php
    if(wp_body_open()){
        wp_body_open(); 
    }
    ?>
    <div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
		<?php include_once 'wp-content/themes/Hayat/template-parts/header/nav.php' ; ?>
	</header>

