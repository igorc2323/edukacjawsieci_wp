<?php //This part is required for WordPress to recognize it as a page template
/*
Template Name: single

*/
 get_header(); ?>

<section id="single">
<?php get_template_part( 'template-parts/navigation'); ?>

<div class="news grid-container navigation grid-y my-2">
  <div class="grid-x grid-margin-x pt-2 mt-2">
<div class="media-object">
  <div class="media-object-section">
    <div class="thumbnail">
      <img src="<?php the_field('thumbnail'); ?>">
    </div>
  </div>
  <div class="media-object-section">
    <p class="news__title bold"><?php the_field('title'); ?></p>
       <p class="news__info"><?php the_date(); ?> <?php the_time(); ?></p>
   <p class="news__excerpt"><?php the_field('excerpt'); ?>/p>
      <p class="single__organisator">Organizowane przez <a class="news__organistorlink" href="<?php the_field('organisator_link'); ?> "><?php the_field('organisation'); ?></a></p>
         <p class="single__excerpt"><?php the_field('content'); ?></p>

  </div>
</div>

</div>
</div>

</section>
<?php get_template_part( 'template-parts/formfill'); ?>
 <?php get_footer(); ?>

