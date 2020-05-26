<div id="internal_main" class="no_banner">

	<div id="contact_reg_top">
	
		<h1 class="internal_header"><?php the_title();?></h1><!-- internal_header -->
		
		<div class="contact_phone">
				
			<span class="phone_title"><?php the_field( 'phone_title_reg' ); ?></span><!-- phone_title -->
				
				<a class="phone_number" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('phone_reg')); ?>"><?php the_field( 'phone_reg' ); ?></a><!-- phone_number -->
						
		</div><!-- contact_phone -->
		
		<div id="contact_top_content" class="content">
			
			<?php the_field( 'contact_page_content' ); ?>
						
		</div><!-- contact_top_content -->

	</div><!-- contact_reg_top -->
	
	<div id="content_reg_bottom">
		
		<?php if(get_field('footer_layout_option', 'option') == "1-2 Locations"){
			
			get_template_part('page-templates/includes/template','locations');

		}elseif (get_field('footer_layout_option', 'option') == "4 Locations") {

			get_template_part('page-templates/includes/template','locations-many');

		} ?>
		
	</div><!-- content_reg_bottom -->

</div><!-- internal_main -->