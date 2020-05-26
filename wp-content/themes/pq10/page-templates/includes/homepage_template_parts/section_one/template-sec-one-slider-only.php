<div class="sec_one_slider_only_inner">
	
	<div class="sec_one_slider_only_left">
			
        <div id="sec_one_awards">

            <span class="featured_on"><?php the_field( 'featured_on_verbiage' ); ?></span><!-- featured_on -->

			<div id="media_slider_wrapper">
						
				<div class="sec_one_slider_only_slider">
						
					<?php if(get_field('featured_on_logos')): ?>
						
						<?php while(has_sub_field('featured_on_logos')): ?>
							
							<?php $image = get_sub_field( 'image' ); ?>
						
							<div class="sec_one_awards_slide">
							
								<div class="sec_one_awards_inner">
								
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								
								</div><!-- sec_one_awards_inner -->
							
							</div><!-- sec_one_awards_slide -->
							
							<?php endwhile; ?>
						
					<?php endif; ?>
						
				</div><!-- sec_one_awards_slider -->
			
			</div>
						
		</div><!-- sec_one_awards -->
			
	</div><!-- sec_left -->
		
	<div class="sec_one_right desktop">
			
		<?php if(get_field('section_one_selling_points')): ?>
			 	
			<ul class="sec_one_selling_points">
			 
				<?php while(has_sub_field('section_one_selling_points')): ?>
			 
					<li><?php the_sub_field( 'selling_point' ); ?></li>
			    
				<?php endwhile; ?>
				
			</ul>
			 
		<?php endif; ?>
		
		<div class="title_layout">
			
			<span class="sec_one_title"><?php the_field( 'section_one_large_header' ); ?></span><!-- sec_one_title -->
			
			<a class="button free_consultation_button" href="#consultation"><?php the_field( 'request_button_verbiage' ); ?></a>
			
		</div><!-- tablet_title_layout -->
			
	</div><!-- sec_one_right -->

	<div class="sec_one_right mobile">
		
		<div class="tablet_title_layout">
			
			<span class="sec_one_title"><?php the_field( 'section_one_large_header' ); ?></span><!-- sec_one_title -->

			<?php if(get_field('section_one_selling_points')): ?>
			 	
				 <ul class="sec_one_selling_points">
				  
					 <?php while(has_sub_field('section_one_selling_points')): ?>
				  
						 <li><?php the_sub_field( 'selling_point' ); ?></li>
					 
					 <?php endwhile; ?>
					 
				 </ul>
				  
			 <?php endif; ?>
			
			<a class="button free_consultation_button" href="#consultation"><?php the_field( 'request_button_verbiage' ); ?></a>
			
		</div><!-- tablet_title_layout -->
			
	</div><!-- sec_one_right -->

	
		
</div><!-- sec_one_inner -->
		