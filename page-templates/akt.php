<?php
/*
Template Name: Aktualności
*/
?>


<?php get_header(); ?>

<?php get_template_part('template-part', 'topnav'); ?>
<!-- end content container -->

	<div class="gl">
        <?php get_sidebar( 'left' ); ?>

            <div class="post-list">
            <?php
                $args = array(
                    'posts_per_page' => 5
                   );
                $items = new WP_Query( $args );
                if( $items->have_posts() ) {
                  while( $items->have_posts() ) {
                    $items->the_post();
                    ?>
                      <div class="post-list-item ">
						  <div class="thumb">
								<a rel="bookmark" href="<?php the_permalink(); ?>">
									<time><?php echo get_the_date(); ?></time>
									<?php the_post_thumbnail("thumbnail"); ?>
							  </a>
						  </div>
                        <div class="post-list-item-content">
                          <a rel="bookmark" href="<?php the_permalink(); ?>">
                            <h2><?php the_title(); ?></h2>
                          </a>
                          <div class="excerpt">
                            <?php the_excerpt(); ?>
                          </div>
                        </div>
                      </div>
            <?php
                  }
                }
                else {
                  echo 'Nic a nic';
                }
              ?>
          </div>
	</div>

		<?php wp_reset_postdata(); ?>


<?php get_footer(); ?>
