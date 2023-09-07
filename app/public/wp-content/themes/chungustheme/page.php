<?php
    get_header();
?>

        <article class="body-section" id="body-section">
            <?php
                if(have_posts()) {

                    while(have_posts()) {
                        the_post();
                        the_content();
                    }
                }
            ?>
            <?php
            the_posts_pagination();
        ?>
        </article>

        
<?php
    get_footer();
?>