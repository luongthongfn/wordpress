<?php get_header(); ?>


<div class="content">

	<main id="main-content">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) :  ?>
				<?php
				the_post(); 
				get_template_part( 'content', get_post_format() );
				get_template_part("author-bio") ;
				comments_template() 
				?>
        	<?php endwhile; ?>

        <?php else : ?>
                <?php get_template_part( 'content', 'none' ); ?>
        <?php endif; ?>
	</main>
	<aside id="sidebar">
		<?php get_sidebar(); ?>
	</aside>
	
</div>


<?php get_footer(); ?>