<?php

/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<!--==========================
    Footer
  ============================-->
<footer id="footer">
	<div class="footer-top">
		<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-4">
						<h4>Who we are</h4>
						<div class="nav">
							<ul>
								<li><a href="#">Company</a></li>
								<li><a href="#">CEO Message</a></li>
								<li><a href="#">Family Members</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4">
						<h4>What we value</h4>
						<div class="nav">
							<ul>
								<li><a href="#">Pine City</a></li>
								<li><a href="#">Cultural Heritage</a></li>
								<li><a href="#">Be there</a></li>
								<li><a href="#">Innovation</a></li>
								<li><a href="#">Ethics</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4">
						<h4>What we do</h4>
						<div class="nav">
							<ul>
								<li><a href="#">Deep Learning</a></li>
								<li><a href="#">IoT Monitoring</a></li>
								<li><a href="#">Detection</a></li>
								<li><a href="#">Sensors</a></li>
								<li><a href="#">Solutions</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<h4>&nbsp;</h4>
				<div class="nav">
					<ul>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Media</a></li>
						<li><a href="#">Downloads</a></li>
						<li><a href="#">- CI</a></li>
						<li><a href="#">- Brochure</a></li>
					</ul>
				</div>
			</div>
		</div>
			<div class="row justify-content-center">
				<div class="col-md-5 more-info">
					<h4>More Information</h4>
					<table class=" table-borderless">
						<tbody>
							<tr>
								<th scope="row">Privacy Protection Act </th>
								<td>Map</td>
							</tr>
							<tr>
								<th scope="row">CEO</th>
								<td>Jong Un Choi</td>
							</tr>
							<tr>
								<th scope="row">Business Reg. No</th>
								<td>226 10 60685</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="col-md-6 footer-contact">
					<h4>Contact Us</h4>
					<p>
						<strong>Address:</strong> and Culture Promotion Center Suite 113, 4 Gyeunggang-ro 2325 Gangneung Kangwondo, S. Korea <br>
						<strong>Telephone:</strong> 82 33 645 2407<br>
						<strong>Fax:</strong> 82 33 645 2408<br>
						<strong>Email:</strong> led@lightup.co.kr<br>
					</p>
				</div>

			</div>
		</div>
	</div>
	<div class="container">
		<div class="copyright">
			Copyright &copy; <strong>HIGH TECH</strong>. All rights reserved
		</div>
	</div>

</footer>

<script src="<?php echo get_theme_file_uri() ?>/olora/lib/counterup/counterup.min.js"></script>
<script src="<?php echo get_theme_file_uri() ?>/olora/lib/easing/easing.min.js"></script>
<script src="<?php echo get_theme_file_uri() ?>/olora/lib/mobile-nav/mobile-nav.js"></script>
<script src="<?php echo get_theme_file_uri() ?>/olora/lib/wow/wow.min.js"></script>
<script src="<?php echo get_theme_file_uri() ?>/olora/lib/waypoints/waypoints.min.js"></script>
<script src="<?php echo get_theme_file_uri() ?>/olora/lib/counterup/counterup.min.js"></script>
<script src="<?php echo get_theme_file_uri() ?>/olora/lib/isotope/isotope.pkgd.min.js"></script>
<script src="<?php echo get_theme_file_uri() ?>/olora/lib/lightbox/js/lightbox.min.js"></script>
<!-- Template Main Javascript File -->
<script src="<?php echo get_theme_file_uri() ?>/olora/js/main.js"></script>

<script>
	function homeAdd(data) {
		var sel = ["", ""];
		if (data.val().target == "_blank") sel[0] = "selected";
		else sel[1] = "selected";

		var html = `
 <li id="${data.key}">
     <input type="text" class="w3-input w3-border w3--show-inline-block home_title" value="${data.val().title}">
     <input type="text">
     <select name="" id="">
       <option value=""></option>
       <option value=""></option>
       <button></button><button></button>
     </select>
   </li>
`
	}
</script>


<?php
echo date_i18n(
	/* translators: Copyright date format, see https://www.php.net/date */
	_x('Y', 'copyright date format', 'twentytwenty')
);
?>
<a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>

<a href="<?php echo esc_url(__('https://wordpress.org/', 'twentytwenty')); ?>">
	<?php _e('Powered by WordPress', 'twentytwenty'); ?>
</a>



<?php wp_footer(); ?>

</body>

</html>