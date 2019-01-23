<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda Awaete</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/reset.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/header.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/menu.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/main.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/footer.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/blog.css'; ?>">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
    <header id="header">
    <section class="img-background">
        <figure class="container-logo">
        <a class="link-logo" href="#">
            <img class="logo" src="<?php echo get_template_directory_uri().'/img/logo.jpg' ?>" alt="Logo da Agenda Awaete">
        </a>
       </figure>
       <?php get_template_part( 'parts/social-icons' ); ?>
    </section>
    <nav class="main-menu">
        <input type="checkbox" id="input-menu">
        <label for="input-menu">&#9776; Menu</label>
        
        <?php wp_nav_menu(
            array(
                'theme_location' => 'main_menu',
                'container' => 'ul',
                'menu_class' => 'list-items',
            )
        ); ?>
    </nav>
    
</header>