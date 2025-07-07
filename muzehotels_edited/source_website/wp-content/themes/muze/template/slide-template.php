  
<?php
/**
 * Template Name: slide Template
 */
            
                  $custom_args = array(
                      'post_type' => 'post',
                      'posts_per_page' => 4,
                      'category' =>'slide',
                      'paged' => $paged
                    );

                  $custom_query = new WP_Query( $custom_args ); ?>

                      <div class="carousel-box" id="home-carousel123">
    <div class="carousel carousel-simple">
                  <?php if ( $custom_query->have_posts() ) : ?>

    <div class="carousel-item">
                    <!-- the loop -->
                    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                            <a href="<?php the_permalink() ?>">
                                    <img src="<?php 
                                        $thumb_id = get_post_thumbnail_id();
                                        $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
                                        echo $thumb_url[0]; ?>"/>
                            </a>

                        
                   
                    </div>
                    <?php endwhile; ?>
                    
                  <?php wp_reset_postdata(); ?>
                  
                  <?php endif; ?>
 
     </div>
                    </div>   


