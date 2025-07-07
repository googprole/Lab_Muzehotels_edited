<?php global $jellythemes; global $class;
define('THEME_DIR',get_theme_root().'/muze');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/muzze-logo_web.png" ?>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <!--<title><?php wp_title(); ?></title>-->
	<title>Muze</title>
    <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
    <!--[if lt IE 9]>
        <script src="./js/html5shiv.js"></script>
        <script src="./js/respond.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body>
    

    <!-- BEGIN HEADER -->
    <header id="header" role="banner">
        <div class="jt_row container">
            <div class="row">
                <div class="col-md-9">
                    <div class="navbar-header page-scroll padT10 padB10">
                        <button type="button" class="navbar-toggle pad0-xs mar0-xs" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars mar0-xs"></i>
                        </button>
                        <a class="normal logo" href="<?php echo site_url(); ?>/"><img src="<?php echo esc_url($jellythemes['logo']['url']); ?>" alt="<?php wp_title(); ?>"></a>
                    </div> 

                    <!-- BEGIN NAVIGATION MENU-->
                    <?php $pid = !empty($post) ? get_post_meta($post->ID, '_jellythemes_menu_name', true) : 0; ?>
                    <?php wp_nav_menu(array('container' => 'nav', 'menu_class' => 'nav navbar-nav navigation marT20','menu_id' => 'nav', 'container_class' => 'collapse navbar-collapse navbar-right navbar-main-collapse', 'theme_location' => 'main', 'menu' => $pid, 'walker' => new jellythemes_walker_nav_menu)); ?>
                    <!-- EN NAVIGATION MENU -->
                </div>
                <div class="col-md-3 hidden-xs">
                    <!-- social-->
                    <ul class="list-inline marT25 marB0">
                        <li><a href="https://www.facebook.com/muzehotels/" target="_blank"><i class="fa fa-facebook bg-color-success circle social" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/muzehotels" target="_blank"><i class="fa fa-twitter bg-color-success circle social" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/muzehotels_vietnam/" target="_blank"><i class="fa fa-instagram bg-color-success circle social marR0" aria-hidden="true"></i></a></li>
                        <?php if(ICL_LANGUAGE_CODE == vi) : ?>
                        <li><a href="http://muzehotels.com/"><img src="<?php echo get_template_directory_uri().'/images/eng.png'?>"/></a></li> 
                        <?php endif; ?>
                        <?php if(ICL_LANGUAGE_CODE == en) : ?>
                        <li><a href="http://muzehotels.com/vi"><img src="<?php echo get_template_directory_uri().'/images/vn.png'?>"/></a></li> 
                        <?php endif; ?>                            
                    </ul>
                    <!-- end social-->
                </div>
            </div>

         </div>
    </header> 
    <!-- END HEADER -->