<?php //This part is required for WordPress to recognize it as a page template
/*
Template Name: wydarzenia
*/
 get_header(); ?>
<?php get_template_part( 'template-parts/navigation'); ?>

<section id="news">

<div class="news grid-container navigation grid-y my-2">
  <div class="grid-x grid-margin-x pt-2 mt-2">
  	  <?php
  $args = array(  
        'post_type' => 'wydarzenia',
        'post_status' => 'publish',
        'posts_per_page' => 6, 
  
    );

    $loop = new WP_Query( $args ); 
        
    while ( $loop->have_posts() ) : $loop->the_post();  ?>
    <div class="cell large-6"><div class="media-object">
  <div class="media-object-section">
    <div class="thumbnail">
      <img src= "<?php the_field('thumbnail'); ?>">
    </div>
  </div>
  <div class="media-object-section main-section">
 <a class="news__title bold" href="<?php the_permalink() ?> ">  <p class="news__title bold"><?php the_field('title'); ?></p></a>
     <p class="news__info"><?php the_date(); ?> <?php the_time(); ?></p>
   <p class="news__excerpt"><?php the_field('excerpt'); ?></p>
      <p class="news__organisator">Organizowane przez <a class="news__organistorlink" href="<?php the_field('organisator_link'); ?> "><?php the_field('organisation'); ?></a></p>
  </div>
</div></div>
	  <?php
     endwhile;

    wp_reset_postdata();  ?>

  </div>


</div>
</section>
<?php get_template_part( 'template-parts/formfill'); ?>
 <?php get_footer(); ?>


