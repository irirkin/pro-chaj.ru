<?php get_header(); ?>

<div>
 <div>
 <h1>Блог</h1>

 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
 <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p><em><?php the_time('l, F jS, Y'); ?></em></p>
 <hr>

 <?php endwhile; else: ?> 
 <p>
 <?php _e('К сожалению, здесь нет записей.'); ?>
 </p> 
 <?php endif; ?>
 </div>
 <div>
 <?php get_sidebar(); ?> 
 </div>
</div>

<?php get_footer(); ?>