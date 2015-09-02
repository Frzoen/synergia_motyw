<?php get_header(); ?>
<?php get_template_part('template-part', 'topnav'); ?>

<div class="gl">
        <?php //left sidebar ?>
        <?php get_sidebar( 'left' ); ?>
<!-- This sets the $curauth variable -->

    <?php
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
    ?>
    <div class="gl-md-9 gl-cell">
        <div class="gl">
            <div class="gl-md-3 userpic gl-cell">
                <img src="<?php echo $curauth->image; ?>"/>
            </div>
            <div class="gl-md-9 gl-cell userinfo">
                <h2><?php echo $curauth->first_name ." ". $curauth->last_name; ?></h2>
                <?php if ( in_array( 'synergia_member', (array) $curauth->roles ) ) { ?>
                <span>Członek MKNM "Synergia"</span>
                <?php } ?>
            </div>
        </div>

        <h2>Posts by <?php echo $curauth->nickname; ?>:</h2>
        <h2>FB <?php echo $curauth->facebook_profile; ?>:</h2>

        <ul>
    <!-- The Loop -->








        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <li>
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
                <?php the_title(); ?></a>,
                <?php the_time('d M Y'); ?> in <?php the_category('&');?>
            </li>

        <?php endwhile; else: ?>
            <p><?php _e('No posts by this author.'); ?></p>

        <?php endif; ?>

    <!-- End Loop -->

        </ul>


    </div>
</div>
<?php get_footer(); ?>
