
<?php
/*
 * Template Name: blog
 *
 * */ 
?>

<?php get_header();?>


<!---blog Categories---->

<section>
     <h4>blog Categories</h4>
     <?php 
      $cat= get_categories(array(
        'taxonomy'=>'category'
      ));
      //  echo "<pre>";
      //    print_r($cat);
      //  echo "</pre>";
      ?>
      <?php 
         foreach($cat as $catvalue){?>
             <a href="<?php echo get_category_link( $catvalue ->term_id) ?>">
                 <?php echo $catvalue ->name?>
            </a> 
         <?php
         }
         ?>
</section>

 <!---blog--->
 <section  class="blog">
                  <?php
                      $argc = array(

                          'post_type' =>  'post ',
                       );
                    $text = new WP_Query($argc);
                        if($text->have_posts()): while($text->have_posts()): $text->the_post();

                  ?>
                    
                   <div class="flex">
                   <img width="100" src="<?php echo get_the_post_thumbnail_url();?>" class="embed-responsive" alt="blogimage" title="blog1"  loading="lazy">
                    <h3><?php the_title();?></h3>
                    <p><?php the_content();?></p>
                    <a href="<?php echo get_the_permalink();?>">
                                Read More 
                    </a>
                   </div>

               <?php endwhile;endif;?> 

               
</section> 





<?php get_footer();?>