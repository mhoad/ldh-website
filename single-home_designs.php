<?php get_header(); ?>
	<style>
		.single-design {
			margin: 0; padding: 50px;
			background: #FFF;
		}
		
		.slide-panel {
			position: relative; display: inline-block;
			margin: 50px 0 0 0; padding: 0;
			
			width: 100%; height: auto;
		}
		
		.slide-wrapper {
			overflow: scroll;
		}
		
		.body-container {
			position: relative; display: inline-block;
			margin-bottom: 20px;
			
			width: 100%; height: auto;
		}
		
		
		.wrapper-hero {
			<?php $img_thumb = wp_get_attachment_image_src(get_field('project_hero'), 'thumb', false); ?>
			background-image: url(<?php echo $img_thumb[0]; ?>);
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-position: top ;
			
			-webkit-background-size: cover;
			   -moz-background-size: cover;
			        background-size: cover;
			        
			-webkit-transition: all 500ms ease-in-out;
			-moz-transition: all 500ms ease-in-out;
			-ms-transition: all 500ms ease-in-out;
			-o-transition: all 500ms ease-in-out;
			transition: all 500ms ease-in-out;
		}
	</style>

	
	<div class="wrapper-hero">
		<h2 class="hero-image-caption"></h2>
	</div>
	
	<div class="screen-spacer screen-spacer-short"></div>
	
	<div class="inner-wrapper single-design">
	 
		<div class="column col-02">
			<div class="heading-area negative-head">
				<h1><?php the_title(); ?></h1> 
				<!--<h2 class="facade-heading"><?php the_field('hero_facade'); ?></h2>-->
				<?php echo icon_group(get_field('bedrooms'), get_field('bathrooms'), get_field('car_space')); ?>
			</div>
			
			<div class="intro">
				<p><?php the_field('introduction') ?></p>
			</div>
			
			<h2 class="underline">Display Locations</h2>
			<div class="body-container">			
 				<?php if( have_rows('display_homes') ): ?>
					<?php while ( have_rows('display_homes') ) : the_row(); ?>
						<?php $postid = url_to_postid( get_sub_field('display') ); ?>
						<a href="<?php the_sub_field('display') ?>" class="icon-field-map"><i class="icon-map icon-marker-large"></i>&nbsp;<?php echo get_the_title($postid); ?></a>
        			<?php endwhile; ?>
        		<?php endif; ?>
			</div>
			
			
			<?php /*
			
			<h2 class="underline">Specifications</h2>
			<div class="body-container">			
				<?php if( get_field('general_specifications') ): ?>
					<?php while( has_sub_field('general_specifications') ): ?>
						<div class="column col-06 single-spec">
							<p class="label"><?php the_sub_field('label') ?></p>
							<p class="value"><?php the_sub_field('value')?><?php $unit = get_sub_field('unit'); ?> 
							<?php if( $unit == 'yes' ){?>m&sup2;
							<?php } else if( $unit  == 'no' ){?>
							<?php } ?>
							</p>
						</div>	
					<?php endwhile; ?>
				<?php endif; ?>
			</div>

			*/ ?>
			
									
			<h2 class="underline">More Information</h2>
				
			<div class="body-container">			
			<p><?php the_field('download_introduction') ?></p>
			<?php if( get_field('downloads') ): ?>
				<?php while( has_sub_field('downloads') ): ?>
					<div class="col-02 column download">
						<a href="<?php the_sub_field('file') ?>" target="_blank"><i class="fa fa-download fa-5x"></i>
						<p><?php the_sub_field('file_name') ?></p></a>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			</div>

			
			
			
			
		</div><!-- End Left Column -->
				
		
		
		
		<div class="column col-04 fade-in-out" style="padding:0 50px 50px 50px;">	
		<!-- Panel One Gallery -->
	
	<?php if(get_field('gallery_images')) { ?>		
			<div class="heading-area sub-heading">
				<h2>Gallery</h2>
			</div>
	<div class="gallery-slider">
			<?php if( get_field('gallery_images') ): ?>
				<?php while( has_sub_field('gallery_images') ): ?>
					<?php $img_thumb = wp_get_attachment_image_src(get_sub_field('gallery_image'), 'thumb', false); ?>
					<?php $img_large = wp_get_attachment_image_src(get_sub_field('gallery_image'), 'thumb', false); ?>
					<?php $caption = get_sub_field('gallery_label'); ?>
					<div class="img-gallery-thumb column" style="background-image: url(<?php echo $img_thumb[0]; ?>)" data-caption="<?php echo $caption ?>" data-imgsrc="<?php echo $img_large[0] ?>">
						<a rel="gallery" title="<?php the_sub_field('gallery_label')?>" class="fancybox" href="<?php echo $img_large[0] ?>">
							<div class="overlay">
								<p><?php the_sub_field('gallery_label')?></p>
							</div>
						</a>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
	</div>	
	
	<?php }?>

	<?php if(get_field('facade_images')) { ?>		
			<div class="heading-area sub-heading">
				<h2 class="sub-heading-main">Façades</h2>
			</div>
	<div class="gallery-slider">
			<?php if( get_field('facade_images') ): ?>
				<?php while( has_sub_field('facade_images') ): ?>
					<?php $img_thumb = wp_get_attachment_image_src(get_sub_field('facade_image'), 'thumb', false); ?>
					<?php $img_large = wp_get_attachment_image_src(get_sub_field('facade_image'), 'thumb', false); ?>
					<?php $caption = get_sub_field('facade_label'); ?> 
					<div class="img-gallery-thumb column" style="background-image: url(<?php echo $img_thumb[0]; ?>)" data-caption="<?php echo $caption ?>" data-imgsrc="<?php echo $img_large[0] ?>">
						<a rel="facade" title="<?php the_sub_field('facade_label')?>" class="fancybox" href="<?php echo $img_large[0] ?>">
							<div class="overlay">
								<p><?php the_sub_field('facade_label')?></p>
							</div>
						</a>
					</div>	
				<?php endwhile; ?>
			<?php endif; ?>
	</div>	
	
	<?php }?>

	
	
	
		
		
		<!-- End Gallery -->	
		
		
		
	
		
		</div><!-- End Column 0 -->
</div><!-- End Inner Wrapper -->
	
<?php get_footer(); ?>