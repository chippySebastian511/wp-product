<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="wp-content/themes/product-theme/style.css" />
    <title>Products</title>
</head>

<body>
    <header>
        <div>
            <div class="chippy">
                <nav id="nav" class="main-navigation">
                    <div class="logo">
                        <?php
                        $custom_logo_id = themename_custom_logo_setup('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                        if (the_custom_logo()) {
                            echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
                        } else {
                            echo '<h1>' . get_bloginfo('name') . '</h1>';
                        }
                        ?>
                    </div>
                    <?php
                    echo "header here";
                    wp_nav_menu(

                        array(
                            'theme_location' => 'header'

                        )
                    );
                    ?>
                </nav>
            </div>
        </div>
    </header>
</body>

</html>



































<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="task">
    <meta name="keywords" content="HTML, CSS">
    <meta name="author" content="chippy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://css.gg/search.css' rel='stylesheet'>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="wp-content/themes/product-theme/style.css">

    <title>product</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">
               <?php
                // $custom_logo_id = themename_custom_logo_setup('custom_logo');
                // $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                // if (the_custom_logo()) {
                //     echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
                // } else {
                //     echo '<h1>' . get_bloginfo('name') . '</h1>';
                // }
                ?>
            </div>
            <nav id="site-navigation" class="main-navigation" style="color:black">
                <?php
                // wp_nav_menu(
                //     array(
                //         'theme_location' => 'header'

                //     )
                // );
                ?>
            </nav>
            <div class="heading">
                <h4>“Don’t find customers for your products, find products for your customers.” </h4>
            </div>
            <span class="searchsubtitle">
                Search in 413 plastic projects
            </span>
        </div>
    </header>
</body>

</html> -->