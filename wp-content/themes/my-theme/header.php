<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Wordpress Theme</title>
    <?php wp_head(); ?>
</head>
<body class="relative">
    <div class="h-[100px] px-6 py-4 bg-sky-700">
        <div class="container mx-auto">
            <a href="#" class="text-sky-100 text-3xl text-sky-300 italic">My Simple Theme</a>
        </div>
    </div>
    <header class="px-6 py-4 bg-sky-900  sticky top-0 left-0 right-0">
        <div class="container mx-auto flex items-center justify-between">
            <?php
            wp_nav_menu(array(
                'theme_location'=>'primary',
                'container'=>'nav',
                'container_class'=>'',
                'menu_class'=>'flex gap-4 text-sky-300'
                ));
            ?>
        </div>
    </header>