
<?php get_header(); ?>

<?php while (have_posts()) {
      the_post(); ?>


              <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_template_directory_uri().'/images/ocean.jpg' ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        
        <p>Dont forget to work on me.</p>
      </div>

    </div>  
  </div>

  <div class="container container--narrow page-section">
    
     
       
        
        <div class="generic-content">
          <div class="row group">
            <div class="one-third">
              <?php the_post_thumbnail(); ?>
            </div>
            <div class="two-third">
              <?php the_content(); ?>
            </div>
          </div>  
        </div>
           

   
           
           


 

           <?php 

           $relatedPrograms = get_field('related_program');
           
           if($relatedPrograms){
            echo '<hr/>'; 

            echo '<h2 class="headline headline--medium ">Subjects  Taught</h2>';
            echo '<ul class="link-list min-list">';
           foreach ($relatedPrograms as $program) { ?>
            <li><a href="<?php echo get_the_permalink($program); ?>"><?php echo get_the_title($program) ?></a></li>

              
          <?php  }
          echo '</ul>';

           }
           
         
          

          
            ?>
          
       
   
     
   <?php  } ?>

   <?php the_posts_pagination(); ?>
  </div>

 
<?php get_footer(); ?>

