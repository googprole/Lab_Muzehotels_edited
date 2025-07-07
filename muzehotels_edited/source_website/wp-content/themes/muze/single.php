<?php get_header('multipage'); ?>

<section class="container blog">
		<div class="content-single">
			<?php if ( have_posts() ) : while  ( have_posts() ) : the_post(); ?>
				<article <?php post_class('post'); ?>>									
					<div class="inner-spacer-right-lrg">
						<div class="post-title">
							<h2><a href="<?php the_permalink(); ?>" class="SVN-Smirk"><?php the_title() ?></a></h2>
						</div>
						<div class="post-body pe-wp-default">
							<?php the_content(); ?>
							<?php wp_link_pages(); ?>
						</div>
									
					</div>
				</article>
			<?php endwhile; ?>
				<nav class="pagination">
					<?php posts_nav_link(); ?>
				</nav>
			<?php else: ?>
			<!-- no posts found -->
			<?php endif; ?>
		</div>
</section>


<div class="news">
  <div class="pad20"></div>     
      <h2 class="heading text-center text-uppercase SVN-Smirk">Bài viết liên quan</h2>
      
<div class="page-wrapper">
    <div class="main-wrapper">       
        <div class="container">
            <div class="row">
                <?php if(function_exists('the_breadcrumb_sidebar')) the_breadcrumb_sidebar(); ?>        
                <?php $args = array(
                'posts_per_page' => 3,
                'numberposts' => 10,
                'category' =>'news',
                'tag' => 'ishot',
                'orderby' => 'post_date',
                'order' => 'DESC',
                'post_status' => 'publish',
                'post__not_in' => array($post->ID),
                );

                $recent_posts = new WP_Query($args);

                if( $recent_posts->have_posts() ) {
                while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
                  
                        
                    <div class="col-md-4">   
                    <div class="item">                      
                            <a href="<?php the_permalink() ?>">
                                <div class="overflow">
                                <figure>
                                    <img src="<?php 
                                        $thumb_id = get_post_thumbnail_id();
                                        $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
                                        echo $thumb_url[0]; ?>" class="img-responsive"/>
                                        </figure>
                                 </div> 
                            </a>

                        <div class="box-info">    
                            <h3 class="text-uppercase f14 SVN-Smirk line-hight1-5"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                            <span class="f14 color-999 third-line"><?php the_excerpt() ?></span>
                        </div>
                         </div>
                    </div>                                        
                   
                    <?php endwhile;
                    }
                        wp_reset_query();  // Restore global post data stomped by the_post().
                        
                    ?>
                    <div class="clearfix"></div>
                    </div>
                <div class="clearfix"></div>

        </div>
 
    </div>
</div>
<div class="pad20"></div>
</div>
<?php get_footer(); ?>






