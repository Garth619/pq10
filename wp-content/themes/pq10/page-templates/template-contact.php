<?php
	
	/* Template Name: Contact */
	
	get_header();
	
	
	if(get_field('contact_layout_options') == "Layout One") {
		get_template_part( 'page-templates/includes/contact_page/template', 'contact-layout-one' );
	}
	
	elseif(get_field('contact_layout_options') == "Layout Two") {
		get_template_part( 'page-templates/includes/contact_page/template', 'contact-layout-two' );
	}
	
	elseif(get_field('contact_layout_options') == "Layout Three") {
		
		get_template_part( 'page-templates/includes/contact_page/template', 'contact-map' );
	}

	get_footer(); ?>