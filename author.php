

<?php get_header(); ?>
<?php  


require_once('components/navbar.inc.php');
?>
<!--Main Navigation-->
...

<header>

    <!-- Intro -->
  

        <div class="card-body white-text delicate-gradient pt-5 pb-4">
         <!--Grid row-->
           

                <!--Grid column-->
                <div class="col-md-6">

                    <!-- <h1 class="font-weight-bold mb-4">Post title</h1> -->
                    <h1 class="font-weight-bold mb-4 text-center"><?php the_author_meta('nickname') ?>:-Page</h1>
                    
                    <!--  <h1 class="font-weight-bold mb-4"><?php //echo get_the_title(); ?></h1> -->

                </div>
                <!--Grid column-->
             </div>
            <!--Grid row-->
            <div class="row d-flex ">

                <!--Grid column-->
                <div class="col-md-3">
                <?php  
                    $avatar_args = array(
                        'class' => 'img-responsive img-thumbnail center-block' 
                        );

                    echo get_avatar(get_the_author_meta('ID'), 196, '', 'User Avatar', $avatar_args); ?> 

                </div>
             
                <!--Grid column-->
                <div class="col-md-9">
                <ul class="list-unstyled">
                    <li>First Name: <?php the_author_meta('first_name') ?></li>
                    <li>Last Name: <?php the_author_meta('last_name') ?></li>
                    <li>Nickname: <?php the_author_meta('nickname') ?></li>
                </ul>
                <hr>
                  <?php if (get_the_author_meta('description')) {

                                        the_author_meta('description');

                                    } else {

                                        echo 'There is no Biographical Info';

                                    }
                    ?>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>

    </div>
    <!-- Intro -->

</header>
<!--Main Navigation-->

<!--Main layout-->


 
    <div class="container author-page">


    <!--Section: Post-->
    <div class="mt-3 moon-purple-gradient ">

        <!--Grid row-->
        <div class="row wow fadeIn mb-5">

            <!--Grid column-->
        	<div class="col-md-3">
            <div class="stats">
            Posts Count
            <span><?php echo count_user_posts(get_the_author_meta('ID')); ?></span>
            </div>
			<!--Grid column-->
            </div>
            <div class="col-md-3">
            <div class="stats">
            Comments Count
            <span>
            <?php 
            $commentscount_args = array(
                'user_id' => get_the_author_meta('ID'), 
                'count'   => true
                );
              echo get_comments( $commentscount_args);
             ?>
                
            </span>
            </div>
            <!--Grid column-->
            </div>

	       <!--Grid column-->
        	<div class="col-md-3"> 
            <div class="stats">          
               Total Posts View
               <span>0</span>
            </div>
            <!--Grid column-->
            </div>
            <!--Grid column-->
            <div class="col-md-3">
            <div class="stats">
            Testing
            <span>0</span>
            </div>
            <!--Grid column-->
     
        </div>
     
        <!--Grid row-->
        </div> <!-- End Row ======================================
===============================================================
==========================================================================
            =========================================-->
<?php 
 //$author_posts_per_page = 5; 
 
 ?>
 <!-- <h3 class="nick p-5 font-weight-normal">Latest[<?php echo $author_posts_per_page; ?> ] Posts of: <?php //the_author_meta('nickname') ?></h3>  -->

 <h3 class="nick p-5 font-weight-normal"><?php the_author_meta('nickname') ?> : Posts</h3>

 <div class="row ml-5">
 <?php
  // $author_posts_args = array(
  //   'author' => get_the_author_meta('ID'),
  //   'posts_per_page' => $author_posts_per_page 
  //    );

  //   $author_posts = new WP_Query($author_posts_args);


  //   if ($author_posts->have_posts()) { 
    if (have_posts()) {           ?> 
     <?php
         // while ($author_posts->have_posts()) {
      while (have_posts()) {
            // $author_posts->the_post() ;
             the_post() ; ?>  
   
    
   
         <div class="autor-posts">
     
            <div class="col-lg-3 ">
        <!--Featured image-->
        <div class="view overlay hm-white-slight rounded z-depth-2 mb-4">
            <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'img-fluid')); ?>
            <a href="<?php echo get_permalink() ?>">
                <div class="mask"></div>
            </a>
        </div>
        </div>
            <div class="col-lg-9 col-md-6 mb-4 justify-content-end">            
                <h3 class="post-title font-weight-normal ">
                     <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                     </a>
                </h3>
               <span class="post-date">
                   <i class="fa fa-calendar fa-fw"></i> <?php the_time('F j, Y'); ?>
               </span>
                <span class="post-comments">
                    <i class="fa fa-comments-o fa-w"></i>
                    <?php comments_popup_link('0 Comments', 'One Comment', '%Comments', 'comment-url', 'Comments Disabled'); ?>
                </span>
                 <div class="post-content p-2">
                    <?php the_excerpt(); ?>            
                </div>          
            </div>

        </div>

   <?php 
      
  
  } // end while
  } // end if
  // wp_reset_postdata();

  $comments_per_page = 6;
  $comments_args = array(
     'user_id'         => get_the_author_meta('ID'),
     'ststus'          => 'approve',
     'number'          => $comments_per_page,
     'post_ststus'     => 'publish',
     'post_type'       => 'post'
      ); 

      $comments = get_comments($comments_args);

if ($comments) {
    

      foreach ($comments as $comment) { 
        // $comment->comment_post_ID . '<br>';?>
    <a href="<?php echo get_the_permalink($comment->comment_post_ID)?>">
    <?php   echo get_the_title($comment->comment_post_ID) ?>
    
    </a>
    <br />
    <?php echo $comment->comment_date ?>
    <br />
     <?php echo $comment->comment_content ?>
    <hr />
   <?php    }
    } else{
        echo "This Author Don't have any Comment";
    }
  ?> 
  
 </div>

                <!--Pagination -->
   <nav class="d-flex justify-content-center my-3 pb-3 pagination_num">              
<!--      <?php //mdb_pagination(); ?> -->
<?php echo numbering_pagination(); ?>
   </nav> 
   <!--Section: Post-->
    </div>
<!--Container-->
</div>



<?php get_footer('author'); ?>