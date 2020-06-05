<footer id='consultation'>


<div id='footer_form_wrapper'>

	<div id='footer_form_inner'>

		<div id='footer_form_left'>
		
			<div id='footer_left_inner'>
		
				<span id='footer_form_title'>Request a<br/> free consultation</span><!-- footer_form_title -->

				<div id='footer_desc'>
			
					<p>There is never a fee to talk to a lawyer at Hilley & Frieder about your case. Call <a href="tel:4042336200">(404) 233-6200</a> or complete our contact form for a free and confidential consultation.</p>
			
				</div><!-- footer_desc -->

				<span id='schedule'>Schedule Your Free Consultation Today!</span><!-- schedule -->

				</div><!-- footer_left_inner -->
		
			</div><!-- footer_form_left -->

			<div id='footer_form_right'>
		
				<?php gravity_form(1, false, false, false, '', true, 12); ?>

				<span id='required'>*Required Fields</span><!-- required -->
		
			</div><!-- footer_form_right -->
		
		</div><!-- footer_form_inner -->

	</div><!-- footer_form_wrapper -->

	<div id='footer_bottom'>
	
			<?php get_template_part('page-templates/includes/template','locations');?>

		<div id='copyright'>
	
			<div id='copyright_inner'>

				<ul>
					<li>&copy; <?php echo date('Y'); ?> Hilley & Frieder, P.C.</li>
					<li><a href="">All Rights Reserved</a></li>
					<li><a href="">Disclaimer</a></li>
					<li><a href="">Site Map</a></li>
				</ul>

				<a id='ilawyer' href='//ilawyermarketing.com' target="_blank" rel="noopener">
				
					<?php echo file_get_contents( get_template_directory() . '/images/hilley/footer-01.svg' ) ?>
				
				</a><!-- ilawyer -->

			</div><!-- copyright_inner -->
	
		</div><!-- copyright -->

	</div><!-- footer_bottom -->

</footer>

<?php wp_footer();?>



