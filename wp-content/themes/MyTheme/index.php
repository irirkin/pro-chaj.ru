<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

 <?php the_content(); ?>
<?php endwhile; else: ?> 
<p>
<?php _e('К сожалению, ничего не найдено по Вашему запросу.'); ?>
</p> 
<?php endif; ?>

<?php get_footer(); ?>