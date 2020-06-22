<?php get_header(); ?>

<div id="internal_main">

<?php get_template_part('page-templates/includes/template','default-page-banner'); ?>
	
	<div class="page_container">
		
		<div class="page_content">
			
			<?php if(get_field('banner_h1') == "Yes") : ?>
			
				<h2 class="page_header"><?php the_title();?></h2>
			
			<?php else:?>
			
				<h1 class="page_header"><?php the_title();?></h1>
			
			<?php endif;?>

			<div class='page_content_inner content'>
			
			<?php get_template_part( 'loop', 'page' ); ?>
			
			</div><!-- page_content_inner -->
			
		</div><!-- page_content -->

		<?php get_sidebar(); ?>
		
	</div><!-- page_container -->
	
	
</div><!-- internal_main -->
		

<?php get_footer(); ?>
