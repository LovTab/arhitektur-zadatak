<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    
    <!-- jQuery -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/jquery.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:ital,wght@0,300;0,500;1,300;1,500&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

    <!-- Animate on Scroll -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/aos/aos.css?v=1.01" type="text/css" />
    <script src="<?php echo get_template_directory_uri(); ?>/assets/aos/aos.js"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/operon.css?v=1.01" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?v=1.01" type="text/css" />

    <!-- Slick Slider -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/slick/slick.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/slick/slick.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/slick/slick-theme.css" type="text/css" />

    <!-- Functions -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/functions.js"></script>
</head>

<body>
    <div class="main-container flex relative">
        <!-- Mobile Bottom Sticky Nav -->
        <!-- Top Sticky Nav -->
        <nav class="full top-nav flex relative">
            <div class="container flex relative">
                <div href ="#" class="center relative text-logo">
                    <!-- Click logo to go to home page -->
                    <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/logos/logo.svg" alt="Arhitektura logo"></a></div>
                <div class="center relative desktop-only">
                    <a href="#" class="center relative animate">
                        <div class="full center-text">Projects</div>
                    </a>
                    <a href="#" class="center relative animate">
                        <div class="full center-text">Interviews</div>
                    </a>
                    <a href="#" class="center relative animate">
                        <div class="full center-text">About</div>
                    </a>
                    <a href="#" class="center relative animate">
                        <div class="full center-text">Contact</div>
                    </a>
                </div>
            </div>
        </nav>
        

