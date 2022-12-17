<?php get_header();?>

<div class="sidebar-category">
                      <h4>Categories</h4>
                    
                          <?php
                              $cat = get_categories(array(
                                'taxonomy'=>'category'
                              ));
                              // echo "<pre>";
                              //  print_r($cat);
                              // echo "</pre>";
                     
                            ?>
                      <?php foreach($cat as $catvalue){
                              // echo   $meta_image = get_wp_term_image( $catvalue -> $term_id); 
                         ?>

                        
                           <a href="<?php echo get_category_link( $catvalue->term_id);?>">
                            <?php  if($meta_image!=""){?>
                                <img src="<?php print_r($meta_image);?>" alt="tt"/>
                            <?php }?>
                          
                        
                           <h1 href="#"><?php echo $catvalue -> name ?> <?php echo $catvalue ->count ?></h1>
                        </a>

                      <?php } ?>
    
              
        </div>







<?php get_footer();?>