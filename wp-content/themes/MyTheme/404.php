<?php get_header(); ?>

    <div class="row">
        <div class="col-lg-12">

           <h2>К сожалению, страница по указанному адресу не существует. </h2>



            <ul>
                <?php
                $args = array( 'numberposts' => 10, 'orderby' => 'rand' );
                $rand_posts = get_posts( $args );
                foreach( $rand_posts as $post ) : ?>
                    <li>
                       <?php  $attr = array( 'class'	=> 'img-circle ' ); ?>
                        <a href="<?php the_permalink() ?>"><?php echo the_post_thumbnail('thumbnail', $attr); ?></a>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                <?php endforeach; ?>
                <?php wp_reset_postdata() ?>
            </ul>

        </div>

    </div>

<?php get_footer(); ?>