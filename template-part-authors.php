<div class="authors gl">
<?php //http://wordpress.stackexchange.com/a/119946
global $post;
$author_id=$post->post_author;
project_counter();

foreach( get_coauthors() as $curauth ):
?>
	<div class="co-author gl-cell gl-sm-1 gl-lg-3 gl-md-4">
		<div class="userpic-project">
			<a href="<?php echo get_author_posts_url( $curauth->ID, $curauth->user_nicename ); ?>">
				<?php show_avatar($curauth);?>
			</a>
			<div class="project-count"><?php echo $curauth->project_count; ?></div>
		</div>
		<div>
			<div class="gl-vertical gl">
				<h3 class="gl-cell"><a href="<?php echo get_author_posts_url( $curauth->ID, $curauth->user_nicename ); ?>"  rel="author"><?php echo $curauth->display_name; ?></a></h3>
				<div class="gl-cell">
					<?php social_links($curauth); ?>
				</div>
			</div>
		</div>
	</div>
	<!-- .entry-author co-author -->
	<?php endforeach; ?>
</div>
