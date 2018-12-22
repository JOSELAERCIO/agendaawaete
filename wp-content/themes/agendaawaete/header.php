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
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:700" rel="stylesheet">
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
       <div class="social-icons">
           <a class="link-social-icon" href="#">
           <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 169.063 169.063" style="enable-background:new 0 0 169.063 169.063;"
                xml:space="preserve">
                <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                    c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                    c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                    c17.455,0,31.656,14.201,31.656,31.655V122.407z"/>
                <path d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                    C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                    c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z"/>
                <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                    c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                    C135.661,29.421,132.821,28.251,129.921,28.251z"/>
            </svg>
           </a>
           <a class="link-social-icon" href="#">
            <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 408.788 408.788" style="enable-background:new 0 0 408.788 408.788;" xml:space="preserve">
                    <path d="M353.701,0H55.087C24.665,0,0.002,24.662,0.002,55.085v298.616c0,30.423,24.662,55.085,55.085,55.085
                    h147.275l0.251-146.078h-37.951c-4.932,0-8.935-3.988-8.954-8.92l-0.182-47.087c-0.019-4.959,3.996-8.989,8.955-8.989h37.882
                    v-45.498c0-52.8,32.247-81.55,79.348-81.55h38.65c4.945,0,8.955,4.009,8.955,8.955v39.704c0,4.944-4.007,8.952-8.95,8.955
                    l-23.719,0.011c-25.615,0-30.575,12.172-30.575,30.035v39.389h56.285c5.363,0,9.524,4.683,8.892,10.009l-5.581,47.087
                    c-0.534,4.506-4.355,7.901-8.892,7.901h-50.453l-0.251,146.078h87.631c30.422,0,55.084-24.662,55.084-55.084V55.085
                    C408.786,24.662,384.124,0,353.701,0z"/>
            </svg>
           </a>
           <a class="link-social-icon" href="#">
            <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 96.875 96.875" style="enable-background:new 0 0 96.875 96.875;"
                xml:space="preserve">
                <path d="M95.201,25.538c-1.186-5.152-5.4-8.953-10.473-9.52c-12.013-1.341-24.172-1.348-36.275-1.341
                    c-12.105-0.007-24.266,0-36.279,1.341c-5.07,0.567-9.281,4.368-10.467,9.52C0.019,32.875,0,40.884,0,48.438
                    C0,55.992,0,64,1.688,71.336c1.184,5.151,5.396,8.952,10.469,9.52c12.012,1.342,24.172,1.349,36.277,1.342
                    c12.107,0.007,24.264,0,36.275-1.342c5.07-0.567,9.285-4.368,10.471-9.52c1.689-7.337,1.695-15.345,1.695-22.898
                    C96.875,40.884,96.889,32.875,95.201,25.538z M35.936,63.474c0-10.716,0-21.32,0-32.037c10.267,5.357,20.466,10.678,30.798,16.068
                    C56.434,52.847,46.23,58.136,35.936,63.474z"/>
            </svg>
         </a>
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