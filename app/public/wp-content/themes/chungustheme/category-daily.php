<?php
    get_header();
?>

        <article class="body-section" id="body-section">
            <div class="margin-div"></div>
            <?php
                  if(have_posts()) {

                    while(have_posts()) {
                        the_post();
                        get_template_part('template-parts/content', 'category');
                    }
                }

            ?>
            
            
        </article>

        
<?php
    get_footer();
?>