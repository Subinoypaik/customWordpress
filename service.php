
<?php
/*
 * Template Name: service
 *
 * */ 
?>

<?php get_header();?>

  <div class="row mt-4">
 <?php
                    $argc = array(

                        'post_type' =>  'product' ,
                        'post_status' =>'publish'
                    );
                    $text = new WP_Query($argc);
                    if($text->have_posts()): while($text->have_posts()): $text->the_post();

                ?>
        <div class="col-sm-12 col-md-4">
            <div class="blog">
            
            <div class="imageblog">
                <img src="<?php echo get_the_post_thumbnail_url();?>" class="embed-responsive" alt="blogimage" title="blog1"  loading="lazy">
                <p class="date"><?php the_date('j '); ?> <?php echo '<span>'.get_the_time( 'F').'</span>' ; ?></p>
            </div>

            <div class="contant-blog">
                <h3><?php the_title()?></h3>
                <p><?php the_content() ?></p>
            </div>
            
            <div class="arrowbtn">
                    <ul>
                        <li>  <a href="<?php echo get_the_permalink();?>">
                            Read More 
                           
                        
                        </a>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>
        <?php endwhile;endif;?>
    </div> 
   

<!---service----->


<?php get_footer();?>