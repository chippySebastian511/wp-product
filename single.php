<?php

/**
 * Index
 */
get_header();
if (have_posts()) :
    echo "single here";
    while (have_posts()) :
        the_post();
        the_title('<h1>', '</h1>');
        the_date();
        the_content();
        the_author();
        comments_template();

    endwhile;
endif;
// get_footer();
