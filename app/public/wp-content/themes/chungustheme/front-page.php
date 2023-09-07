<?php
    get_header();
?>
    <main>
        <section class="title-section">
            <h1 class="name-title"><?php echo get_bloginfo('name', 'raw'); ?></h1>
            <h2 class="subtitle"><?php echo get_bloginfo('description', 'raw'); ?></h2>
        </section>
        <section class="divider-section">
            <div class="divider-div"></div>
        </section>
        <article class="introduction">
            
            <?php
                if(have_posts()) {

                    while(have_posts()) {
                        the_post();
                        the_content();
                    }
                }
            ?>

        </article>
<?php
    get_footer();
?>