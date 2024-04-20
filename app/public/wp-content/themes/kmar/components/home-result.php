<section class="scroll--section slide swiper-slide  result--home">
	<div class="container">
		<div class="cus-result--home clearfix">
			<div class="top-result--home mb--main">
				<?php
				$title = get_sub_field( 'clone_title' );
				?>
				<?php if ( $title ) : ?>
					<label class="label-mm t1l ">
						<?php echo $title['clone_title_top']; ?>
					</label>
					<h2 class="title-mm"><?php echo $title['clone_title_main']; ?></h2>
				<?php endif;
				?>
			</div>
			<div class="content-left--40 position-relative">

				<?php
				$images = get_sub_field( 'f9_list_slider' );

				if ( $images ) : ?>
					<div class="list-result--home overflow-hidden  ">
						<div class="swiper-wrapper">
							<?php foreach ( $images as $image ) : ?>

								<div class="item-result--home swiper-slide">
									<div class="img--result">
										<a data-fancybox="result"
											href="<?php echo esc_url( $image['sizes']['large'] ); ?>"
											title="<?php echo esc_attr( $image['alt'] ); ?>">
											<img src="<?php echo esc_url( $image['sizes']['large'] ); ?>"
												alt="<?php echo esc_attr( $image['alt'] ); ?>" />

										</a>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
                        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
					</div>
				<?php endif;
				?>




			</div>
			<div class="content-right--60">
				<div class="top-result--home">
					<?php
					$title = get_sub_field( 'clone_title' );
					?>
					<?php if ( $title ) : ?>
						<label class="label-mm t1l ">
							<?php echo $title['clone_title_top']; ?>
						</label>
						<h2 class="title-mm"><?php echo $title['clone_title_main']; ?></h2>
					<?php endif;
					?>
				</div>
				<?php if ( get_sub_field( 'f9_content' ) ) : ?>
					<div class="cmt-result--home">
						<p class="t7l"><?php the_sub_field( 'f9_content' ); ?>
						</p>
					</div>
				<?php endif; ?>
				<div class="getPage--result">
					<?php if ( get_sub_field( 'f9_title_contact' ) ) : ?>
						<h3 class="title--get"><?php the_sub_field( 'f9_title_contact' ); ?>
						</h3>
					<?php endif; ?>
					<div class="cmt-sm--result">
						<?php if ( get_sub_field( 'f9_contact_phone' ) ) : ?>
							<p><strong>
									<img alt="icon"
										src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/phone.svg"
										style="max-width: 100%; height: 25px; width: 24px;" /><?php the_sub_field( 'f9_contact_phone' ); ?></strong>
							</p>
						<?php endif; ?>
						<?php if ( get_sub_field( 'f9_contact_email' ) ) : ?>
							<p><strong><img alt="icon"
										src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/mail.svg"
										style="max-width: 100%;" /><?php the_sub_field( 'f9_contact_email' ); ?></strong>
							</p>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>