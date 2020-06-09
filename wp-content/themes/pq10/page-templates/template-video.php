<?php 

/* Template Name: Video Center */

get_header(); ?>

<div id="internal_main">
	
	<div class="page_container one_col">

		<h1 class="page_header center"><?php the_title();?></h1><!-- page_header -->
		
		<div id='video_wrapper'>
		
			<div class='single_video'>

				<div class='video_thumb'>
				
					<div class='mywisita'></div><!-- mywisita -->

					<div class='video_overlay'>
					
						<span class='play_button'></span><!-- play_button -->
					
					</div><!-- video_overlay -->
				
				</div><!-- video_thumb -->

				<span class='video_title'></span><!-- video_title -->
			
			</div><!-- single_video -->
		
		</div><!-- video_wrapper -->
		
	</div><!-- page_container -->
	
</div><!-- internal_main -->

<?php get_footer(); ?>
