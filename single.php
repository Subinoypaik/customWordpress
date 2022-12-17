<?php get_header();?>



<!-----Blog-details----->
<section class="blog-details blog-area section-wrap">
    <div class="container">
     Blog details

     <div class="blog">
                        <?php if(have_posts()):while(have_posts()):the_post();?>
                            <div class="imageblog">
                               <img src="<?php echo get_the_post_thumbnail_url();?>" class="embed-responsive" alt="blogimage" title="blog1" loading="lazy">
                               <p class="date"><?php the_date("m-d-y"); ?> <?php the_time(); ?></p>
                            </div>
               
                           <div class="contant-blog">
                               <div class="d-flex title-part">
                                <h3><?php the_title();?></h3>
                                 <span><?php the_author();?></span>
                               </div>
                             
                               <p><?php the_content();?></p>
                           </div>
                           <?php endwhile;endif;?>
                        
    </div>
  </section>





<!---comment---->
<div class="comments">
     <div class="comments-title">
        <h3><?php echo  get_comments_number(); ?> Comments</h3>
    </div>
         <?php
            $comments = get_comments( array( 'post_id' => $post->ID ) );
            foreach($comments as $comment){
            $date= $comment->comment_date;
            $datetime = new DateTime($date);
         ?>
         <div class="media-all">
              <div class="media">
                  <div class="media-left">
                      <img src="<?php echo get_avatar_url( $comment->comment_author_email,60); ?>" class="embed-responsive" alt="blogimage" title="blog1" loading="lazy">
               </div>
                  <div class="media-body">
                      <div class="media-heading">
                          <a href="#"><?php echo $comment->comment_author;?></a>
                              <a href="#"><?php echo $datetime->format('M d, Y');?></a>
                                  </div>
                                      <div class="comment-reply">
                                          <p><?php echo $comment->comment_content;?></p>
                                      </div>
                      
                                  </div>
                              </div>
                              
                          </div>
                          <?php }?>
                      </div>

<div class="comment-area">
   <div class="comment-title">
  <!-- <h3 class="mb-3">Post your Comments</h3> -->
    </div>
  <?php comment_form();?>

  </div>


<?php //comments_template()?>
    
<?php get_footer();?>