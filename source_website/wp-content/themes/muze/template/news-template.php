  
<?php
/**
 * Template Name: list news Template
 */
$count = 0;
                ?>
                <?php get_header('multipage'); ?>
                  <div class="news" >

                  <div class="pad20"></div>	  
                <div class="page-wrapper">
                    <div class="main-wrapper">       
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                  <?php                   
                  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

                  $custom_args = array(
                      'post_type' => 'post',
                      'posts_per_page' => 9,
                      'category_name' =>'News',
                      'paged' => $paged
                    );

                  $custom_query = new WP_Query( $custom_args ); ?>

                  <?php if ( $custom_query->have_posts() ) : ?>

                    <!-- the loop -->
                    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                       <?php  
                        if($count%3 == 0){
                          echo '<div class="clearfix"></div><div class="divide"></div>' ;
                        }
                        $count++;
                      ?>
                      <article class="loop">
                       <div class="col-md-4">
                    <div class="item <?php echo $count ?>">                       
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
                            <h3 class="title-promotion"> <a href="<?php the_permalink() ?>" class="SVN-Smirk text-uppercase"><?php the_title() ?> </a></h3>
                            <div class="third-line"><?php the_excerpt() ?></div>
                        </div>
                        </div>
                    </div>   
                      </article>

                    <?php endwhile; ?>
                    <!-- end of the loop -->
                    <div class="clearfix"></div>
                    <div class="pad20"></div>
                    <!-- pagination here -->
                    <?php
                      if (function_exists(custom_pagination)) {
                        custom_pagination($custom_query->max_num_pages,"",$paged);
                      }
                    ?>

                  <?php wp_reset_postdata(); ?>

                  <?php else:  ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                  <?php endif; ?>
                  <div class="pad20"></div>
                    </div>
                </div>
        </div>
 
    </div>
</div>

<div class="pad20"></div>

<?php get_footer(); ?>