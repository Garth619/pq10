<div id="location_info_repeater">
    <?php 
        $location_array = get_field('firm_locations','options');
    ?>

    <?php foreach( $location_array as $index=> $location ): ?>

        <div class="location_col">

            <span class="location_title"><?php echo $location['title']; ?></span><!-- footer_location_title -->

            <span class="address"><?php echo $location['street_address']; ?><br><?php echo $location['city']; ?>, <?= $location['state']['value']; ?> <?=$location['zip_code']; ?></span><!-- address -->

            <a class="get_directions" href="<?php echo $location['directions_link'] ?>" target="_blank" rel="noopener"><?php the_field( 'main_location_get_directions_title','option'); ?></a><!-- get_directions -->

            <div class="location_phone_wrapper">
				
				<span class="location_phone_title">Phone</span>
				
				<a class="location_phone_small" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '',$location['phone']) ?>"><?php echo $location['phone'] ?></a><!-- location_phone -->
				
            </div><!-- location_phone_wrapper -->

            <span class="appointment_only">*By appointment only</span>
            
        </div>


    <?php endforeach; ?>

    <div class="view_all mobile">
        <a class="button" href="/contact/">view all locations</a>
    </div>
		
</div><!-- location_info -->