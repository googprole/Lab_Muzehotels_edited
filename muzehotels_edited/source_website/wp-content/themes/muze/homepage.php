<?php /* Template Name: Home Page */
define('THEME_DIR',get_theme_root().'/latio'); 
?>
<?php get_header(); ?>
<?php if(ICL_LANGUAGE_CODE==vi) : ?>
<div class="page-latido">

        <!-- banner-->
        <div class="banner relative">
           <div class="about-us" id="introduction">
                                     <?php
                  $custom_args = array(
                      'post_type' => 'post',
                      'category_name' =>'slide',
                      'posts_per_page' => 6,
                    );
                  $custom_query = new WP_Query( $custom_args ); ?>
                <div class="carousel relative" id="about-carousel">   
                  <?php if ( $custom_query->have_posts() ) : ?>
                    <div class="carousel-item">
                    <!-- the loop -->
                    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                                    <img src="<?php 
                                        $thumb_id = get_post_thumbnail_id();
                                        $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
                                        echo $thumb_url[0]; ?>" class="img-responsive"/>
                    </div>
                    <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?>
                  <?php endif; ?>
                            
                        </div>
                        <div class="absolute full-width text-about relative-xs">
                      <div class="container">
                        <div class="row">
                        <div class="white-space space-small"></div>
                          <div class="col-md-9">
                             <?php
                                $custom_args = array(
                                    'post_type' => 'post',
                                    'category_name' =>'about-article',
                                
                                  );
                                $custom_query = new WP_Query( $custom_args ); ?>
                                
                                <?php if ( $custom_query->have_posts() ) : ?>
                                  
                                  <!-- the loop -->
                                  <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                                                  <?php the_content()?>
                                  
                                  <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                                <?php endif; ?>
                          </div>
                          <div class="col-md-2 text-center-xs">
                              <a href="https://redirect.fastbooking.com/DIRECTORY/dispoprice.phtml?showPromotions=1&Hotelnames=ASIAVNHTLBoutiqueHot&Clusternames=ASIAVNHTLBoutiqueHot" class="text-uppercase bg-color-primary color-black btn-book" target="_blank">Đặt chỗ ngay</a>
                          </div>
                          <div class="clearfix"></div>
                          <div class="white-space space-small"></div>
                        </div>
                      </div>
                    </div>
                    </div>

                    
        </div>        
        <!-- en banner -->
       


        <!-- Procedures Section -->
    <section id="procedures">
        <div class="container-fluid no-padding">
            <div class="procedures">
                <!-- first procedure -->
                <div class="row equal-height-columns post-item bg-color-primary" id="stay">
                    <div class="col-md-6 no-padding">
                        <div class="care-img equal-height-column">
                          <?php
                          $i = 0;
                  $custom_args = array(
                      'post_type' => 'post',
                      'category_name' =>'stay',
                      'order' => 'ASC',
                      'posts_per_page' => 6,
                    );
                  $custom_query = new WP_Query( $custom_args ); ?>
                <div class="carousel relative" id="stay-carousel">   
                  <?php if ( $custom_query->have_posts() ) : ?>
                 
                    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                        <div class="carousel-item">
                    <!-- the loop -->
                                    <img src="<?php 

                                        $thumb_id = get_post_thumbnail_id();
                                        $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
                                        echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>"/>
                        </div>
                    <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?>
                  <?php endif; ?>      
                </div>
                </div>
                </div>

                    <div class="col-md-6 no-padding">
                        <div class="care-text-wrapper">
                            <div class="care-text equal-height-column">
                
                                <div class="text-center">
                                        <div class="white-space space-small"></div>
                                        <?php
                                          $custom_args = array(
                                              'post_type' => 'post',
                                              'category_name' =>'stay-article',
                                          
                                            );
                                          $custom_query = new WP_Query( $custom_args ); ?>
                                          
                                          <?php if ( $custom_query->have_posts() ) : ?>
                                            
                                            <!-- the loop -->
                                            <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                                                  <div class="marB15"><img class="padB10" src="<?php the_post_thumbnail_url() ?>" class="img-responsive"/></div>
                                                   <?php the_title( '<div class="text-uppercase f24 color-black bold marB15">', '</div>' ); ?>
                                                  
                                                  <?php the_content();?>
                                            <?php endwhile; ?>
                                          <?php wp_reset_postdata(); ?>
                                          <?php endif; ?>                                              
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <!-- second procedure -->
                <div class="row equal-height-columns post-item bg-color-primary" id="dine">
                   

                    <div class="col-md-6 no-padding col-md-push-6">
                        <div class="care-img equal-height-column">
                             <?php
                  $custom_args = array(
                      'post_type' => 'post',
                      'category_name' =>'dine',
                      'order' => 'ASC',
                      'posts_per_page' => 6,

                    );
                  $custom_query = new WP_Query( $custom_args ); ?>
                    <div class="carousel relative" id="dine-carousel">   
                      <?php if ( $custom_query->have_posts() ) : ?>
                        
                        <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                                <div class="carousel-item">
                                    <!-- the loop -->
                                        <img src="<?php 
                                            $thumb_id = get_post_thumbnail_id();
                                            $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
                                            echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>"/>
                                 </div>
                        <?php endwhile; ?>
                      <?php wp_reset_postdata(); ?>
                      <?php endif; ?>
                    </div>
                </div>
                </div>
                 <div class="col-md-6 no-padding col-md-pull-6">
                        <div class="care-text-wrapper">
                            <div class="care-text equal-height-column">
                                <div class="text-center">
                                                <div class="white-space space-small"></div>
                                                 <?php
                                                    $custom_args = array(
                                                        'post_type' => 'post',
                                                        'category_name' =>'dine-article',
                                                    
                                                      );
                                                    $custom_query = new WP_Query( $custom_args ); ?>
                                                    
                                                    <?php if ( $custom_query->have_posts() ) : ?>
                                                      
                                                      <!-- the loop -->
                                                      <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                                                            <div class="marB15"><img class="padB10" src="<?php the_post_thumbnail_url() ?>" class="img-responsive"/></div>
                                                             <?php the_title( '<div class="text-uppercase f24 color-black bold marB15">', '</div>' ); ?>
                                                            
                                                            <?php the_content();?>
                                                      <?php endwhile; ?>
                                                    <?php wp_reset_postdata(); ?>
                                                    <?php endif; ?>
                                            </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- three procedure -->
                <div class="row equal-height-columns post-item bg-color-primary" id="relax">
                    <div class="col-md-6 no-padding">
                        <div class="care-img equal-height-column">
                            <?php
                  $custom_args = array(
                      'post_type' => 'post',
                      'category_name' =>'relax',
                      'posts_per_page' => 6,
                    );
                  $custom_query = new WP_Query( $custom_args ); ?>
                <div class="carousel relative" id="relax-carousel">   
                  <?php if ( $custom_query->have_posts() ) : ?>
                   
                    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                         <div class="carousel-item">
                            <!-- the loop -->
                                    <img src="<?php 
                                        $thumb_id = get_post_thumbnail_id();
                                        $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
                                        echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>"/>
                    </div>
                    <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?>
                  <?php endif; ?>
                        </div>
                    </div>
                    </div>

                    <div class="col-md-6 no-padding">
                        <div class="care-text-wrapper">
                            <div class="care-text equal-height-column">
                
                                <div class="text-center">
                                	<div class="white-space space-small"></div>
                                        <?php
                                            $custom_args = array(
                                                'post_type' => 'post',
                                                'category_name' =>'relax-article',
                                            
                                              );
                                            $custom_query = new WP_Query( $custom_args ); ?>
                                            
                                            <?php if ( $custom_query->have_posts() ) : ?>
                                              
                                              <!-- the loop -->
                                              <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                                                    <div class="marB15"><img class="padB10" src="<?php the_post_thumbnail_url() ?>" class="img-responsive"/></div>
                                                     <?php the_title( '<div class="text-uppercase f24 color-black bold marB15">', '</div>' ); ?>
                                                    
                                                    <?php the_content();?>
                                              <?php endwhile; ?>
                                            <?php wp_reset_postdata(); ?>
                                            <?php endif; ?>    
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--feature-->
    <section id="Feature" class="bg-color-primary">
      <div class="white-space space-big"></div>
      <div class="text-uppercase f24 color-black bold marB15 text-center">Tiện ích</div>
      <div class="white-space space-medium"></div>
      <div class="container">
        <div class="row">
          <?php
            $custom_args = array(
                'post_type' => 'post',
                'category_name' =>'feature',
            
              );
            $custom_query = new WP_Query( $custom_args ); ?>
            
            <?php if ( $custom_query->have_posts() ) : ?>
              
              <!-- the loop -->
              <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                              <?php the_content()?>
              
              <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
      </div>
      <div class="white-space space-big"></div>
    </section>
    <!--End of Procedures Section -->
        <!-- end content -->
        <!-- map -->
        <div class="map" id="contact">
            <img src="<?php echo get_template_directory_uri().'/images/map6.jpg'?>" class="img-responsive"/>
        </div>
        <!-- end map -->
         <!-- footer -->
         <div class="footer bg-color-info">
         <div class="white-space space-medium"></div>
             <div class="text-center">
                 <img src="<?php echo get_template_directory_uri().'/images/cocobay.png'?>" class="padB10 marB15-xs"/>
                 <!-- social-->
                    <ul class="list-inline marB0">
                        <li><a href="https://www.facebook.com/muzehotels/" target="_blank"><i class="fa fa-facebook bg-color-danger circle social" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/muzehotels" target="_blank"><i class="fa fa-twitter bg-color-danger circle social" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/muzehotels_vietnam/" target="_blank"><i class="fa fa-instagram bg-color-danger circle social" aria-hidden="true"></i></a></li>                        
                    </ul>
                    <!-- end social-->
                 <div class="white-space space-small"></div>
                 <ul class="list-inline marB0">
                     <li class="add relative">
                        <div class="ab-add relative-xs bottom0-xs marB30-xs">
                            <div><i class="fa fa-map-o color-white f30 marB20" aria-hidden="true"></i></div>
                            <div class="text-uppercase f15 color-white marB5 opacity0-5">Địa chỉ</div>
                             <div class="color-white">Đường Trường Sa, <br/>Ngũ Hành Sơn</div>
                        </div>
                     </li>
                     <li class="phone marB30-xs">
                        <div><i class="fa fa-phone color-white f30 marB20" aria-hidden="true"></i></div>
                        <div class="text-uppercase f15 color-white marB5 opacity0-5">T</div>
                         <div class="color-white">+84‎‎‎ 236 3966 988</div>
                         <p></p>
                     </li>
                     <li>
                        <div><i class="fa fa-envelope color-white f30 marB20" aria-hidden="true"></i></div>
                        <div class="text-uppercase f15 color-white marB5 opacity0-5">E</div>
                         <div class="color-white">reservation@cocobay.vn</div>
                     </li>

                 </ul>
             </div>
             <div class="white-space space-small"></div>
             <hr/>
             <div class="text-center">
                 <ul class="list-inline marB0">
                     <li><a href="/" class="color-white text-uppercase"> Trang chủ</a></li>
                     <li><a href="#introduction" class="anchor color-white text-uppercase"> Giới thiệu</a></li>
                     <li><a href="#stay" class="color-white text-uppercase anchor">Nghỉ dưỡng</a></li>
                     <li><a href="#dine" class="color-white text-uppercase anchor">Ẩm thực</a></li>
                     <li><a href="#relax" class="color-white text-uppercase anchor">Thư giãn</a></li>
                     <li><a href="#map" class="anchor color-white text-uppercase">Địa chỉ</a></li>
                     <li><a href="#map" class="anchor color-white text-uppercase">Liên hệ</a></li> <div class="white-space space-small"></div>                                   
                 </ul>
             </div>
             <div>
         </div>
         <!-- end footer -->


<?php get_footer(); ?>
</div>
<?php endif; ?>

   
</div><?php if(ICL_LANGUAGE_CODE==en) : ?>
<div class="page-latido">

        <!-- banner-->
        <div class="banner relative">
           <div class="about-us" id="introduction">
                                     <?php
                  $custom_args = array(
                      'post_type' => 'post',
                      'category_name' =>'slide-en',
                      'posts_per_page' => 6,
                    );
                  $custom_query = new WP_Query( $custom_args ); ?>
                <div class="carousel relative" id="about-carousel">   
                  <?php if ( $custom_query->have_posts() ) : ?>
                    <div class="carousel-item">
                    <!-- the loop -->
                    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                                    <img src="<?php 
                                        $thumb_id = get_post_thumbnail_id();
                                        $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
                                        echo $thumb_url[0]; ?>" class="img-responsive"/>
                    </div>
                    <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?>
                  <?php endif; ?>
                            
                        </div>
                        <div class="absolute full-width text-about relative-xs">
                      <div class="container">
                        <div class="row">
                        <div class="white-space space-small"></div>
                          <div class="col-md-9">
                             <?php
                                $custom_args = array(
                                    'post_type' => 'post',
                                    'category_name' =>'about-article-en',
                                
                                  );
                                $custom_query = new WP_Query( $custom_args ); ?>
                                
                                <?php if ( $custom_query->have_posts() ) : ?>
                                  
                                  <!-- the loop -->
                                  <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                                                  <?php the_content()?>
                                  
                                  <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                                <?php endif; ?>
                          </div>
                          <div class="col-md-2 text-center-xs">
                              <a href="https://redirect.fastbooking.com/DIRECTORY/dispoprice.phtml?showPromotions=1&Hotelnames=ASIAVNHTLBoutiqueHot&Clusternames=ASIAVNHTLBoutiqueHot" class="text-uppercase bg-color-primary color-black btn-book" target="_blank">Book now</a>
                          </div>
                          <div class="clearfix"></div>
                          <div class="white-space space-small"></div>
                        </div>
                      </div>
                    </div>
                    </div>

                    
        </div>        
        <!-- en banner -->
       


        <!-- Procedures Section -->
    <section id="procedures">
        <div class="container-fluid no-padding">
            <div class="procedures">
                <!-- first procedure -->
                <div class="row equal-height-columns post-item bg-color-primary" id="stay">
                    <div class="col-md-6 no-padding">
                        <div class="care-img equal-height-column">
                          <?php
                          $i = 0;
                  $custom_args = array(
                      'post_type' => 'post',
                      'category_name' =>'stay-en',
                      'order' => 'ASC',
                      'posts_per_page' => 6,
                    );
                  $custom_query = new WP_Query( $custom_args ); ?>
                <div class="carousel relative" id="stay-carousel">   
                  <?php if ( $custom_query->have_posts() ) : ?>
                 
                    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                        <div class="carousel-item">
                    <!-- the loop -->
                                    <img src="<?php 

                                        $thumb_id = get_post_thumbnail_id();
                                        $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
                                        echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>"/>
                        </div>
                    <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?>
                  <?php endif; ?>      
                </div>
                </div>
                </div>

                    <div class="col-md-6 no-padding">
                        <div class="care-text-wrapper">
                            <div class="care-text equal-height-column">
                
                                <div class="text-center">
                                        <div class="white-space space-small"></div>
                                        <?php
                                          $custom_args = array(
                                              'post_type' => 'post',
                                              'category_name' =>'stay-article-en',
                                          
                                            );
                                          $custom_query = new WP_Query( $custom_args ); ?>
                                          
                                          <?php if ( $custom_query->have_posts() ) : ?>
                                            
                                            <!-- the loop -->
                                            <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                                                  <div class="marB15"><img class="padB10" src="<?php the_post_thumbnail_url() ?>" class="img-responsive"/></div>
                                                   <?php the_title( '<div class="text-uppercase f24 color-black bold marB15">', '</div>' ); ?>
                                                  
                                                  <?php the_content();?>
                                            <?php endwhile; ?>
                                          <?php wp_reset_postdata(); ?>
                                          <?php endif; ?>                                              
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <!-- second procedure -->
                <div class="row equal-height-columns post-item bg-color-primary" id="dine">
                   

                    <div class="col-md-6 no-padding col-md-push-6">
                        <div class="care-img equal-height-column">
                             <?php
                  $custom_args = array(
                      'post_type' => 'post',
                      'category_name' =>'dine-en',
                      'order' => 'ASC',
                      'posts_per_page' => 6,

                    );
                  $custom_query = new WP_Query( $custom_args ); ?>
                    <div class="carousel relative" id="dine-carousel">   
                      <?php if ( $custom_query->have_posts() ) : ?>
                        
                        <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                                <div class="carousel-item">
                                    <!-- the loop -->
                                        <img src="<?php 
                                            $thumb_id = get_post_thumbnail_id();
                                            $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
                                            echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>"/>
                                 </div>
                        <?php endwhile; ?>
                      <?php wp_reset_postdata(); ?>
                      <?php endif; ?>
                    </div>
                </div>
                </div>
                 <div class="col-md-6 no-padding col-md-pull-6">
                        <div class="care-text-wrapper">
                            <div class="care-text equal-height-column">
                                <div class="text-center">
                                                <div class="white-space space-small"></div>
                                                 <?php
                                                    $custom_args = array(
                                                        'post_type' => 'post',
                                                        'category_name' =>'dine-article-en',
                                                    
                                                      );
                                                    $custom_query = new WP_Query( $custom_args ); ?>
                                                    
                                                    <?php if ( $custom_query->have_posts() ) : ?>
                                                      
                                                      <!-- the loop -->
                                                      <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                                                            <div class="marB15"><img class="padB10" src="<?php the_post_thumbnail_url() ?>" class="img-responsive"/></div>
                                                             <?php the_title( '<div class="text-uppercase f24 color-black bold marB15">', '</div>' ); ?>
                                                            
                                                            <?php the_content();?>
                                                      <?php endwhile; ?>
                                                    <?php wp_reset_postdata(); ?>
                                                    <?php endif; ?>
                                            </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- three procedure -->
                <div class="row equal-height-columns post-item bg-color-primary" id="relax">
                    <div class="col-md-6 no-padding">
                        <div class="care-img equal-height-column">
                            <?php
                  $custom_args = array(
                      'post_type' => 'post',
                      'category_name' =>'relax-en',
                      'posts_per_page' => 6,
                    );
                  $custom_query = new WP_Query( $custom_args ); ?>
                <div class="carousel relative" id="relax-carousel">   
                  <?php if ( $custom_query->have_posts() ) : ?>
                   
                    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                         <div class="carousel-item">
                            <!-- the loop -->
                                    <img src="<?php 
                                        $thumb_id = get_post_thumbnail_id();
                                        $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
                                        echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>"/>
                    </div>
                    <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?>
                  <?php endif; ?>
                        </div>
                    </div>
                    </div>

                    <div class="col-md-6 no-padding">
                        <div class="care-text-wrapper">
                            <div class="care-text equal-height-column">
                
                                <div class="text-center">
                                	<div class="white-space space-small"></div>
                                        <?php
                                            $custom_args = array(
                                                'post_type' => 'post',
                                                'category_name' =>'relax-article-en',
                                            
                                              );
                                            $custom_query = new WP_Query( $custom_args ); ?>
                                            
                                            <?php if ( $custom_query->have_posts() ) : ?>
                                              
                                              <!-- the loop -->
                                              <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                                                    <div class="marB15"><img class="padB10" src="<?php the_post_thumbnail_url() ?>" class="img-responsive"/></div>
                                                     <?php the_title( '<div class="text-uppercase f24 color-black bold marB15">', '</div>' ); ?>
                                                    
                                                    <?php the_content();?>
                                              <?php endwhile; ?>
                                            <?php wp_reset_postdata(); ?>
                                            <?php endif; ?>    
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End of Procedures Section -->
    <!--Feature En-->
    <section id="Feature" class="bg-color-primary">
      <div class="white-space space-big"></div>
      <div class="text-uppercase f24 color-black bold marB15 text-center">Features</div>
      <div class="white-space space-medium"></div>
      <div class="container">
        <div class="row">
          <?php
            $custom_args = array(
                'post_type' => 'post',
                'category_name' =>'feature-en',
            
              );
            $custom_query = new WP_Query( $custom_args ); ?>
            
            <?php if ( $custom_query->have_posts() ) : ?>
              
              <!-- the loop -->
              <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                              <?php the_content()?>
              
              <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
      </div>
      <div class="white-space space-big"></div>
    </section>
        <!-- end content -->
        <!-- map -->
        <div class="map" id="contact">
            <img src="<?php echo get_template_directory_uri().'/images/map6.jpg'?>" class="img-responsive"/>
        </div>
        <!-- end map -->
         <!-- footer -->
         <div class="footer bg-color-info">
         <div class="white-space space-medium"></div>
             <div class="text-center">
                 <img src="<?php echo get_template_directory_uri().'/images/cocobay.png'?>" class="padB10 marB15-xs"/>
                 <!-- social-->
                    <ul class="list-inline marB0">
                        <li><a href="https://www.facebook.com/muzehotels/" target="_blank"><i class="fa fa-facebook bg-color-danger circle social" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/muzehotels" target="_blank"><i class="fa fa-twitter bg-color-danger circle social" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/muzehotels_vietnam/" target="_blank"><i class="fa fa-instagram bg-color-danger circle social" aria-hidden="true"></i></a></li>                        
                    </ul>
                    <!-- end social-->
                 <div class="white-space space-small"></div>
                 <ul class="list-inline marB0">
                     <li class="add relative">
                        <div class="ab-add relative-xs bottom0-xs marB30-xs">
                            <div><i class="fa fa-map-o color-white f30 marB20" aria-hidden="true"></i></div>
                            <div class="text-uppercase f15 color-white marB5 opacity0-5">Address</div>
                             <div class="color-white">Truong Sa Road, <br/>Ngu Hanh Son, Da Nang</div>
                        </div>
                     </li>
                     <li class="phone marB30-xs">
                        <div><i class="fa fa-phone color-white f30 marB20" aria-hidden="true"></i></div>
                        <div class="text-uppercase f15 color-white marB5 opacity0-5">T</div>
                         <div class="color-white">+84‎‎‎ 236 3966 988</div>
                         <p></p>
                     </li>
                     <li>
                        <div><i class="fa fa-envelope color-white f30 marB20" aria-hidden="true"></i></div>
                        <div class="text-uppercase f15 color-white marB5 opacity0-5">E</div>
                         <div class="color-white">reservation@cocobay.vn</div>
                     </li>

                 </ul>
             </div>
             <div class="white-space space-small"></div>
             <hr/>
             <div class="text-center">
                 <ul class="list-inline marB0">
                     <li><a href="/" class="color-white text-uppercase">Home</a></li>
                     <li><a href="#introduction" class="anchor color-white text-uppercase">Introduction</a></li>
                     <li><a href="#stay" class="color-white text-uppercase anchor">Stay</a></li>
                     <li><a href="#dine" class="color-white text-uppercase anchor">Dine</a></li>
                     <li><a href="#relax" class="color-white text-uppercase anchor">Relax</a></li>
                     <li><a href="#map" class="anchor color-white text-uppercase">Destination map</a></li>
                     <li><a href="#map" class="anchor color-white text-uppercase">Contact us</a></li> <div class="white-space space-small"></div>                                   
                 </ul>
             </div>
             <div>
         </div>
         <!-- end footer -->


<?php get_footer(); ?>

</div>
<?php endif; ?>



</body>
</html>
