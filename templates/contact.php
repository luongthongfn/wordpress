<?php 
/*
	template name: contact
 */ 
 
 get_header(); ?>
 
<div id="content">
 
	<main id="main-content">
		<div class="contact-info">
			<h4>Địa chỉ liên lạc</h4>
			<p>Ghi địa chỉ vào đây</p>
			<p>090 456 765</p>
		</div>
		<div class="contact-form">
			<?php echo do_shortcode('[contact-form-7 id="1519" title="Contact form 1"]'); ?>
		</div>
	</main>
	<aside id="sidebar">
		<?php get_sidebar(); ?>
	</aside>
 
</div>
 
<?php get_footer(); ?>