<section id="section_one" class="<?php $mobilebar = get_field('mobile_header_layout','option') == "Double Bar"; $mobilebar_class = $mobilebar ? 'double_bar' : 'single_bar';echo $mobilebar_class?>">
	
	<?php if(get_field('layout_option_sec_one') == "Video & Slider") { 
	
		get_template_part( '/page-templates/includes/homepage_template_parts/section_one/template', 'sec-one-video-layout' );
	
	}
	
	elseif(get_field('layout_option_sec_one') == "No Slider or Video") {
	
		get_template_part( '/page-templates/includes/homepage_template_parts/section_one/template', 'sec-one-regular-layout' ); 
	
	}

	elseif(get_field('layout_option_sec_one') == "Slider Only") {
	
		get_template_part( '/page-templates/includes/homepage_template_parts/section_one/template', 'sec-one-slider-only' ); 
	
	}
	
	$hero_image_mobile_webp = get_field( 'hero_image_mobile_webp' );	
	$hero_image_mobile = get_field( 'hero_image_mobile' ); 	
	$hero_image_tablet_webp = get_field( 'hero_image_tablet_webp' );	
	$hero_image_tablet = get_field( 'hero_image_tablet' );	
	$hero_small_laptop_image_webp = get_field( 'hero_small_laptop_image_webp' );	
	$hero_small_laptop_image = get_field( 'hero_small_laptop_image' );
	$hero_desktop_image_webp = get_field( 'hero_desktop_image_webp' );
	$hero_desktop_image = get_field( 'hero_desktop_image' ); 
	
	?>
	
	<picture>
		
		<?php if($hero_image_mobile_webp) { ?>	

			<source media="(max-width: 450px)" srcset="<?php echo $hero_image_mobile_webp['url']; ?>" type="image/webp">	

		<?php } ?>	

		<?php if($hero_image_mobile) { ?>	

			<source media="(max-width: 450px)" srcset="<?php echo $hero_image_mobile['url']; ?>">	

		<?php } ?>	

		<?php if($hero_image_tablet_webp) { ?>	

			<source media="(max-width: 1066px)" srcset="<?php echo $hero_image_tablet_webp['url']; ?>" type="image/webp">	

		<?php } ?>	

		<?php if($hero_image_tablet) { ?>	

			<source media="(max-width: 1066px)" srcset="<?php echo $hero_image_tablet['url']; ?>">	

		<?php } ?>
		
		<?php if($hero_small_laptop_image_webp) { ?>	

			<source media="(max-width: 1270px)" srcset="<?php echo $hero_small_laptop_image_webp['url']; ?>" type="image/webp">			

		<?php } ?>	

		<?php if($hero_small_laptop_image) { ?>	

			<source media="(max-width: 1270px)" srcset="<?php echo $hero_small_laptop_image['url']; ?>">			

		<?php } ?>

		<?php if($hero_desktop_image_webp) { ?>	

			<source srcset="<?php echo $hero_desktop_image_webp['url']; ?>" type="image/webp">			

		<?php } ?>
	
		<img id="hero_img" src="<?php echo $hero_desktop_image['url']; ?>" alt="<?php echo $hero_desktop_image['alt']; ?>"  />

	</picture>
	
</section><!-- section_one -->

