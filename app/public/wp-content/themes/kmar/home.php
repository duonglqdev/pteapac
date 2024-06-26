<?php

/**
Template Name: Theme
 */

get_header();
?>
<main>
	<?php
	if ( have_rows( 'home_components' ) )
	{ ?>
		<div class="my-swiper">
			<div class="">
				<?php
				while ( have_rows( 'home_components' ) ) :
					the_row();
					$module_name = get_row_layout();
					switch ( $module_name ) :
						case $module_name:
							get_template_part( 'components/' . $module_name );
					endswitch;
				endwhile;

				?>
				<?php
				get_footer();
				?>

			</div>
		</div>
		<?php
	}
	?>
	<h1 class="d-none"><?php echo wp_title() ?></h1>

</main>