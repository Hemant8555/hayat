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
    <title>Header</title>
</head>
<body>

    <?php
    wp_footer();
    wp_body_open(); ?>
    <div class="container">
        Header
    </div>
