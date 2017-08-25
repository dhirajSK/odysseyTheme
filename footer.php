<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package odyssey
 */

?>

	<footer class="footer" id="contact">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="contact-details">
							<?php echo do_shortcode('[contact-form-7 id="44" title="Contact form 1"]'); ?>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="map-area"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d112051.30688176303!2d77.36612328909914!3d28.641648101388633!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfad3d093eddf%3A0xdd7e519ea30a44ae!2sKilobyte+Technologies!5e0!3m2!1sen!2sin!4v1503473434892" width="400" height="270" frameborder="0" style="border:0" allowfullscreen class="map"></iframe>
				</div>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
