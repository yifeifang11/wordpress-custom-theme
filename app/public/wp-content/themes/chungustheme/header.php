<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    wp_head();
    ?>
</head>
<body>
    <div id="overlay" class="overlay">

            <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul id="" class="overlay-content">%3$s</ul>'
                    )
                );
            ?>

       
    </div>
    <header>
        <nav>
            <a href="#" class="logo"><?php echo get_bloginfo('name', 'raw'); ?></a>

            <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul id="" class="nav-link">%3$s</ul>'
                    )
                );
            ?>

            
            <div class="hamburger" id="hamburger" onclick="openNav()">
                <div class="line line-top" id="line-top"></div>
                <div class="line line-bottom" id="line-bottom"></div>
            </div>
            
        </nav>
    </header>
