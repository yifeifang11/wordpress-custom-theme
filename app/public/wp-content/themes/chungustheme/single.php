<?php
    get_header();
?>

        <article class="article-section" id="article-section">
        <h2 class="body-heading" id="body-heading"><?php the_title(); ?></h2>
            <?php
                if(have_posts()) {

                    while(have_posts()) {
                        the_post();
                        get_template_part('template-parts/content', 'article');
                    }
                }
            ?>

        </article>
<?php
    get_footer();
?>