<?php get_header(); ?>

<div class="container">

 <h1><?php single_cat_title('Статьи из категории: '); ?>.</h1>				
				
				 <?php 
					 $cat = get_the_category();				 
					 $ID_cat = get_cat_ID( $cat[0]->name);
					  get_category($ID_cat)->category_count; 
				 ?>
				
	
		<div class="row"> 
			<div class="col-lg-9" style="padding: 5px;border: 1px solid #dadee2;">
				<?php $count=0; ?>
				 <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				 
				 	 
					 $attr = array( 'class'	=> 'img-circle ' ); ?>
					<div class='row'>
						 <div class='col-lg-3'>
							<a href="<?php the_permalink() ?>"><?php echo the_post_thumbnail('small', $attr); ?></a>
						 </div>
						 
						 <div class='col-lg-9 pull-right'>
							<h2 style="text-decoration: overline;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<?php the_truncated_post( 900 ); ?>
						 </div>
					 </div>
					 <?php $count++ ?>
					 
					 <hr>
					 

					<?php if ($count == 2 || $count ==5) { ?>
					
					<div id='ads_<?php if($count == 2){ echo '1';} else { echo '2';} ?>' style="background:yellow;"> 
					<?php echo 'ad bloc 1 ';  ?>
					</div>
					<hr>
					
					<?php	continue; }
				
				
				 	
				 endwhile; 
				  ?>
				 <div id='ads_end' style="background:yellow;"><?php echo 'ad bloc '; ?> </div> 
					<hr>
				<?php  else:  ?>
				 <p>
				 <?php _e('К сожалению, здесь нет записей.'); ?>
				 </p> 
				 <?php endif; 
				 if(function_exists('my_navpages')) {
	my_navpages( '<center>', '</center>' );
}?>
			</div>
			<div class="col-lg-3" style="background:orange;">
					<?php get_sidebar(); ?> 				 
			</div>
		</div>
	

 
</div>

<?php get_footer(); ?>