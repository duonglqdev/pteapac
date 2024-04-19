<section class="scroll--section slide swiper-slide  about--home">
	<div class="container">
		<div class="cus-about--home clearfix">
			<div class="content-left--50 ct--left--abh">
				<?php if ( get_sub_field( 'left_img' ) ) : ?>
					<div class="img-left--abh">
						<?php echo wp_get_attachment_image( get_sub_field( 'left_img' ), 'full' ) ?>
					</div>
				<?php endif; ?>

				<?php if ( have_rows( 'right_img' ) ) : ?>
					<div class="img-right--abh">
						<?php while ( have_rows( 'right_img' ) ) :
							the_row(); ?>
							<?php echo wp_get_attachment_image( get_sub_field( 'img' ), 'full' ) ?>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>

			</div>
			<div class="content-right--50">
				<div class="cus-l-about--home">
					<?php
					$title = get_sub_field( 'clone_title' );
					?>

					<?php if ( $title ) : ?>
						<label class="label-mm t1l">
							<?php echo $title['clone_title_top']; ?>
						</label>
                        <h2 class="title-mm"><?php echo $title['clone_title_main']; ?></h2>
					<?php endif; ?>
					


					<?php if ( get_sub_field( 'desc' ) ) : ?>

						<div class="cmt-about--home">
							<?php the_sub_field( 'desc' ); ?>
						</div>

					<?php endif; ?>

					<?php
					$button = get_sub_field( 'btn_more' );
					if ( $button['title'] ) : ?>

						<a href="<?php echo $button['link']; ?>" title="<?php echo $button['title']; ?>"
							class="more-about--home hover-dark-blue text-white"><span><?php echo $button['title']; ?></span><i
								class="fa-regular fa-arrow-right"></i>
						</a>
					<?php endif; ?>
				</div>
			</div>
		</div>

	</div>
</section>