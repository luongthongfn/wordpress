<?php get_header(); ?>


<div class="content">

	<main id="main-content">
		<div class="hehehe">
			<?php get_template_part('author-bio') ?>
		</div>

		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) :  ?>
				<?php the_post(); ?>
                <?php get_template_part( 'content', get_post_format() ); ?>
        	<?php endwhile; ?>
			<?php thachpham_pagination(); ?>

        <?php else : ?>
                <?php get_template_part( 'content', 'none' ); ?>
        <?php endif; ?>
	</main>
	<aside id="sidebar">
		<?php get_sidebar(); ?>
	</aside>
	
</div>


<?php get_footer(); ?>