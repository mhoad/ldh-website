<?php /* Template Name: Contact */ get_header(); ?>

<style>
#wpcf7-f1467-o1 input[type="text"], #wpcf7-f1467-o1 input[type="tel"],
#wpcf7-f1467-o1 input[type="email"] {
	background: none; border: none;
	
	margin: 0; padding: 0;
	
	display: block;
	width: 100%;
	height: 100%;
	
	font-family: 'clan_otbold';
	/*text-transform: uppercase;*/
	color: #2E3E47;
	
	border-bottom: 1px solid #B0A39A;
}

#wpcf7-f1467-o1 .wpcf7-form-control-wrap {
	width: 50%;
	height: 40px;
	position: relative;
	display: inline-block;
	float: left;
	font-size: 14px; line-height: 40px;
}

input.auto-hint {
	background: none; border: none;
	
	position: relative; display: inline-block; float: left;
	margin: 0; padding: 0;
	
	width: 50%; height: 40px;
	
	font-family: 'clan_otbold';
	text-transform: uppercase;
	font-size: 14px; line-height: 40px;
	color: #2E3E47;
	
	border-bottom: 1px solid #B0A39A;
}
	
input.message { line-height: 40px;
	height:40px;
	width: 100%;
}	
	
button {
	background: none; border: none;
	-webkit-appearance: none; -moz-appearance: none;
	
	
	position: relative; display: inline-block;
	margin: 20px 0 0 0; padding: 0;
	
	font-family: 'clan_otbold';
	text-transform: uppercase;
	color:#B21F28;
}
#wpcf7-f1467-o1 input[type="submit"] {
	background: none; border: none;
	-webkit-appearance: none; -moz-appearance: none;
	
	
	position: relative; display: inline-block;
	margin: 20px 0 0 0; padding: 0;
	
	font-family: 'clan_otbold';
	text-transform: uppercase;
	color:#B21F28;
}

.wpcf7-not-valid-tip {
	position: absolute;
	top: 0;
	right: 15px;
}
.wpcf7-form-control-wrap:hover .wpcf7-not-valid-tip {
	display: none;
}
</style>

<div class="inner-wrapper">
	 
		<div class="column col-06 heading-area">
			<div class="column col-03">
				<h1><?php the_title(); ?></h1>
				<h2><?php the_field('subheading')?></h2>
			</div><!-- End Title-->
		</div><!-- End Heading Area -->
		
		<div class="content-wrapper">
		
		<div class="column col-03">
			<div class="column col-04">
				<p><?php the_field('contact_intro'); ?></p>
				
			</div>
			
		</div>	

		
		
		
			<div class="column col-03 cnt-dets">
				
					<h4>Address</h4>
					<a href="https://www.google.com.au/maps/place/<?php the_field('address'); ?>"><p><?php the_field('address'); ?></p></a>
					<h4>Phone</h4>
					<p><?php the_field('phone'); ?></p>
					<h4>Fax</h4>
					<p><?php the_field('fax'); ?></p>
					<h4>Email</h4>
					<?php $email = explode('@', get_field('email')); ?>
					<script language=JavaScript type="text/javascript">
					<!--
					var user = "<?php echo $email[0]; ?>";
					var host = "<?php echo $email[1]; ?>";
					var link = user + "@" + host;
					document.write("<a hre" + "f=mai" + "lto:" + user + "@" + host + "><p>" + link + "</p></a>");
					--> </script>
					<?php /*<a href="mailto:<?php the_field('email'); ?>"><p><?php the_field('email'); ?></p></a>*/ ?>
					<h4>ABN</h4>
					<p><?php the_field('abn'); ?></p>
								
					<?php echo do_shortcode( '[contact-form-7 id="1467" title="Contact form"]' ); ?>
					
<?php /*					<form action="http://mistermailout.misterbrown.graphics/t/r/s/tuirljl/" method="post">
							<input class="auto-hint" placeholder="Name" id="fieldName" name="cm-name" type="text" />
							<input class="auto-hint" placeholder="Email" id="fieldEmail" name="cm-tuirljl-tuirljl" type="email" required />
							<input class="auto-hint" placeholder="Phone" id="fieldjujriui" name="cm-f-jujriui" type="text" />
							<input class="auto-hint" placeholder="Company" id="fieldjujriud" name="cm-f-jujriud" type="text" />
							<input class="auto-hint message" placeholder="Message" id="fieldjujriuh" name="cm-f-jujriuh" type="text" />
							<button type="submit">Click here to Send Message</button>
					</form>*/ ?>
					
					<p class="social-icons-contact">
					<?php if(get_field('facebook_link')) { ?>
					
						<a href="http://<?php the_field('facebook_link') ?>" > <i class="fa fa-facebook-square fa-2x"></i></a>
					
					 <?php }?>
					 
					 <?php if(get_field('twitter_link')) { ?>
					
					 	<a href="http://<?php the_field('twitter_link') ?>" > <i class="fa fa-twitter-square fa-2x"></i></a>
					
					 <?php }?>
				 </p>

				
			</div>	
		</div>
		

			</div><!-- End Inner Wrapper -->

<?php get_footer(); ?>
