<section class="scroll--section slide swiper-slide  tth_teacher--tth_partner">
	<section class="teacher--home ">
		<div class="container">
			<div class="cus-teacher--home clearfix">
				<div class="top-teacher--home">
					<?php
					$title = get_sub_field( 'clone_title' );
					?>
					<?php if ( $title ) : ?>
						<label class="label-mm t1l mx-auto">
							<?php echo $title['clone_title_top']; ?>
						</label>
						<h2 class="title-mm"><?php echo $title['clone_title_main']; ?></h2>
					<?php endif; ?>
				</div>
				<?php if ( have_rows( 'f5_list_staff' ) ) : ?>
					<div class="list-teacher--home overflow-hidden ">
						<div class="swiper-wrapper">
							<?php while ( have_rows( 'f5_list_staff' ) ) :
								the_row(); ?>

								<div class="item-teacher--home swiper-slide">
									<?php if ( get_sub_field( 'img' ) ) : ?>
										<div class="img">
											<?php echo wp_get_attachment_image( get_sub_field( 'img' ), 'full' ) ?>
										</div>
									<?php endif; ?>
									<div class="intro--teacher">
										<?php if ( get_sub_field( 'name' ) ) : ?>
											<h3 class="name-teacher--home">
												<?php the_sub_field( 'name' ); ?>
											</h3>
										<?php endif; ?>
										<?php if ( get_sub_field( 'pos' ) ) : ?>
											<div class="cmt-teacher--home">
												<p class="t1l"><?php the_sub_field( 'pos' ); ?></p>
											</div>
										<?php endif; ?>
										<div class="content-teacher--home"></div>
									</div>
								</div>
							<?php endwhile; ?>

						</div>
					</div>
				<?php endif; ?>

			</div>
		</div>
	</section>
</section>
