<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body <?php body_class(); ?>>
        <header>
            <a src="<?php bloginfo('url') ?>"><?php bloginfo('name'); ?></h1>
            <p><?php bloginfo('description'); ?></p>
        </header>

        <?php get_template_part('template-parts/navigation'); ?>

<style>
    header {
        background-color: #f2f2f2;
        padding: 20px;
    }

    header a {
        text-decoration: none;
        color: #333;
        font-size: 24px;
    }

    header p {
        color: #666;
        font-size: 16px;
    }
</style>