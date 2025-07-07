<?php
    /* INCLUDE OPTIONS FRAMEWORKN */
    require_once dirname( __FILE__ ) . '/inc/theme.options.php';
    /* INCLUDE TGM PLUGIN ACTIVATION */
    require_once dirname( __FILE__ ) . '/inc/class-tgm-plugin-activation.php';
	/* FRONTEND FUNCTIONS */
    include get_template_directory() . '/inc/functions.frontend.php';
    /* ADMIN PANEL FUNCTIONS */
    include get_template_directory() . '/inc/functions.admin.php';
    /* POSTS TYPES DEFINITION FUNCTIONS */
    include get_template_directory() . '/inc/functions.posts_types.php';
	/* SHORTCODES DEFINITION */
    include get_template_directory() . '/inc/functions.shortcodes.php';
    /* METABOXES FRAMEWORK LOAD */
    require_once get_template_directory() . '/inc/meta-box/meta-box.php';
    include get_template_directory() . '/inc/functions.meta-boxes.php';
    /* VISUAL SHORTCODE LOAD */

function custom_pagination($numpages = '', $pagerange = '', $paged='') {

  if (empty($pagerange)) {
    $pagerange = 2;
  }

  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   * 
   * It's good because we can now override default pagination
   * in our theme, and use this function in default quries
   * and custom queries.
   */
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }

  /** 
   * We construct the pagination arguments to enter into our paginate_links
   * function. 
   */
  $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => __('&laquo;'),
    'next_text'       => __('&raquo;'),
    'type'            => 'plain',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);

  if ($paginate_links) {
    echo "<nav class='custom-pagination text-center'>";
      echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
      echo $paginate_links;
    echo "</nav>";
  }

}

add_theme_support( 'menus' );
// This theme uses wp_nav_menu() in two locations.
register_nav_menus( array(
    'multil'       => __( 'Multil Menu', 'latido' ),
) );

