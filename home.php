<?php

/**
 * Index
 */
get_header();
?>
<h1>Recent Post</h1>
<?php
if (have_posts()) :
    echo "home here";
    while (have_posts()) :
        if (has_post_thumbnail()) :
            the_post_thumbnail();
        endif;
        the_post();
        the_title('<h1>', '</h1>');
        the_excerpt();
        printf('<a href="%s" > Read more</a>', get_permalink());
    endwhile;
endif;
$args = array(
    'post_type' => 'product',
);
?>

<h1>All Product</h1>

<?php

$query = new WP_Query($args);
// The Loop
if (is_front_page() && is_home()) :
    while ($query->have_posts()) {
        $query->the_post();
        echo '<h2>' . get_the_title() . '</h2>';
        if (has_post_thumbnail()) :
            the_post_thumbnail();
        endif;
        the_excerpt();
        printf('<a href="%s" > Read more</a>', get_permalink());
    }
endif;

get_sidebar();
get_footer();
