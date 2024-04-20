<section class="scroll--section slide swiper-slide  tth_teacher--tth_partner">
	<div class=" partner--home">
		<div class="container">
			<div class="cus-partner--home clearfix">
				<div class="top-partner--home"> <?php
				$title = get_sub_field( 'clone_title' );
				?>
					<?php if ( $title ) : ?>
						<label class="label-mm t1l mx-auto">
							<?php echo $title['clone_title_top']; ?>
						</label>
						<h2 class="title-mm"><?php echo $title['clone_title_main']; ?></h2>
					<?php endif; ?>
				</div>
				<?php if ( have_rows( 'f6_list_partner' ) ) : ?>

					<div class="list-partner--home overflow-hidden ">
						<div class="swiper-wrapper">
							<?php while ( have_rows( 'f6_list_partner' ) ) :
								the_row(); ?>
								<div class="item-partner--home swiper-slide" data-bs-toggle="modal" data-bs-target="#partnerModal">
									<div class="img">
										<?php echo wp_get_attachment_image( get_sub_field( 'img' ), 'full' ) ?>
									</div>
									<div class="d-none" data-popup>
                                        <div class="show--partner">
                                            <?php if( get_sub_field('name') ): ?>
                                                <h3><?php the_sub_field('name'); ?></h3>
                                            <?php endif; ?>
											<?php if( get_sub_field('desc') ): ?>
                                                <div class="text--partner">
                                                    <p><?php the_sub_field('desc'); ?></p>
                                                </div>
                                            <?php endif; ?>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>

	</div>
</section>