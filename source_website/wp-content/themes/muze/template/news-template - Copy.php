  
<?php
/**
 * Template Name: list news Template
 */

    $paged = 1; //hoặc 0
    if(get_query_var('paged')) {
      $paged = get_query_var('paged');
    } elseif(get_query_var('page')) {
      $paged = get_query_var('page');
    }
    $posts_per_page=get_option("posts_per_page");  //posts per page
    $big = 999999999;
?>
<?php get_header('multipage'); ?>
<div class="white-space big"></div>
  <div class="news" >
  <div class="pad20"></div>	  
<div class="page-wrapper">
    <div class="main-wrapper" id="box-news">       
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <?php if(function_exists('the_breadcrumb_sidebar')) the_breadcrumb_sidebar(); ?>


                <?php $args = array(   
                'numberposts' => 2,
                'category' =>'news',
                'orderby' => 'post_date',
                'order' => 'DESC',
                'post_status' => 'publish',
                'paged'=>$paged

                );

                $data = new wp_query($args);

                if( $data->have_posts() ) {
                while ($data->have_posts()) : $data->the_post(); ?>
                     
                    <div class="col-md-4">
                    <div class="item">                       
                            <a href="<?php the_permalink() ?>">
                				<div class="overflow">
		                            <img src="<?php 
		                                $thumb_id = get_post_thumbnail_id();
		                                $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
		                                echo $thumb_url[0]; ?>" class="img-responsive">
                                 </div> 
                        	</a>

                        <div class="box-info">    
							<h3 class="title-promotion"> <a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
							<div class="third-line"><?php the_excerpt() ?></div>
                        </div>
                        </div>
                    </div>                                        
                    <?php endwhile;
                    }
                        wp_reset_query();  // Restore global post data stomped by the_post().
                        
                    ?>
                    </div>
                </div>
        </div>
 
    </div>
</div>
<div class="clearfix"></div>
<div class="pad20"></div>
<div class="pagging">
<?php 
    echo paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),   
     
    'format' => '?paged=%#%',
    'current' => min($paged,1),  
    'total' =>$data->max_num_pages,
    'prev_text'=>'<<',
    'next_text'=>'>>',
    //thêm tham số vào liên kết phân trang.
    'add_args'=>array('abc'=>1)       //result: /page/2/?s=xx&abc=1
) );
?>

</div>
<?php get_footer(); ?>