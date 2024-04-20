<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kmar
 */

?>

<?php the_field( 'script_body', 'option' ); ?>
<?php wp_footer(); ?>

<section class="scroll--section slide footer--home">
	<footer class="footer ft-bottom">
		<div class="cus--footer--main">
			<div class="container">
				<div class="footer-sitemap">
					<div class="box-wp">
						<div class="row g-5">
							<?php dynamic_sidebar( 'footer-1' ); ?>

						</div>
					</div>
				</div>
			</div>
			<?php dynamic_sidebar( 'footer-2' ); ?>

		</div>

	</footer>
</section>


<div class="back-to-top">
	<?php echo svg( 'back-top', '15', '15' ) ?>
</div>


<div class="modal fade" id="partnerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
       
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      </div>
      
    </div>
  </div>
</div>


<?php
$custom_js = get_field( 'custom_javascript', 'option' );
?>
<?php if ( $custom_js )
{ ?>
	<script>
		(function ($) {
			$(document).ready(function () {
				<?php echo $custom_js; ?>
			});
		})(jQuery);

	</script>
<?php } ?>



</body>

</html>