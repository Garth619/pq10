<?php $video_thumbnail_mobile_webp = get_field( 'video_thumbnail_mobile_webp' ); ?>
<?php $video_thumbnail_mobile = get_field( 'video_thumbnail_mobile' ); ?>
<?php $video_thumbnail_tablet_webp = get_field( 'video_thumbnail_tablet_webp' ); ?>
<?php $video_thumbnail_tablet = get_field( 'video_thumbnail_tablet' ); ?>
<?php $video_thumbnail_desktop_webp = get_field( 'video_thumbnail_desktop_webp' ); ?>
<?php $video_thumbnail_desktop = get_field( 'video_thumbnail_desktop' ); ?>

<picture>

	<?php if($video_thumbnail_mobile_webp) { ?>	

		<source media="(max-width: 767px)" srcset="<?php echo $video_thumbnail_mobile_webp['url']; ?>" type="image/webp">
	
	<?php } ?>

	<?php if($video_thumbnail_mobile) { ?>

		<source media="(max-width: 767px)" srcset="<?php echo $video_thumbnail_mobile['url']; ?>">

	<?php } ?>
	
	<?php if($video_thumbnail_tablet_webp) { ?>
		
		<source media="(max-width: 1170px)" srcset="<?php echo $video_thumbnail_tablet_webp['url']; ?>" type="image/webp">

	<?php } ?>

	<?php if($video_thumbnail_tablet) { ?>	

		<source media="(max-width: 1170px)" srcset="<?php echo $video_thumbnail_tablet['url']; ?>">

	<?php } ?>

	<?php if($video_thumbnail_desktop_webp) { ?>

		<source srcset="<?php echo $video_thumbnail_desktop_webp['url']; ?>" type="image/webp">

	<?php } ?>
								
	<img src="<?php echo $video_thumbnail_desktop['url']; ?>" alt="<?php echo $video_thumbnail_desktop['alt']; ?>" />

							
</picture>