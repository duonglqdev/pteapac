<section class=" scroll--section swiper-slide slider ">
	<div class="swiper__slider" data-id="slider-banner">

		<div class="i-sl-home swiper-wrapper">
			<?php if ( have_rows( 'home_banner' ) ) : ?>
				<?php while ( have_rows( 'home_banner' ) ) :
					the_row();
					$btn_view_more = get_sub_field( 'button_viewmore' );
					$btn_contact = get_sub_field( 'button_contact' );
					?>

					<div class="main--caption swiper-slide">

						<a href="<?php echo check_link( get_sub_field( 'banner_link' ) ) ?>">
							<?php echo wp_get_attachment_image( get_sub_field( 'banner_img' ), 'full', "", array( 'class' => "w-100 object-fit-cover" ) ) ?>
						</a>


						<div class="t-caption">
							<?php if ( get_sub_field( 'banner_title_top' ) ) : ?>
								<label class="label_slider t1l"><?php the_sub_field( 'banner_title_top' ); ?>
								</label>
							<?php endif; ?>

							<div class="n-welcome">
								<?php if ( get_sub_field( 'banner_main_title' ) ) : ?>
									<h2><?php the_sub_field( 'banner_main_title' ); ?>
									</h2>
								<?php endif; ?>
							</div>
							<?php if ( get_sub_field( 'banner_desc' ) ) : ?>
								<div class="s-text"><?php the_sub_field( 'banner_desc' ); ?>
								</div>
							<?php endif; ?>

							<?php

							if ( $btn_view_more['link_btn'] ) : ?>
								<a class="s-btn a--more-slider hover-dark-blue text-white"
									href="<?php echo $btn_view_more['link_btn']; ?>"
									title="<?php echo $btn_view_more['title_btn']; ?>">
									<span><?php echo $btn_view_more['title_btn']; ?></span>
									<i class="fa-solid fa-arrow-right"></i>
								</a>
							<?php endif; ?>

							<?php
							if ( $btn_contact['link_btn'] ) : ?>
								<a class="btn-contact a--more-slider hover-dark-blue text-white"
									href="<?php echo $btn_contact['link_btn']; ?>"
									title="<?php echo $btn_contact['title_btn']; ?>"><span><?php echo $btn_contact['title_btn']; ?></span><i
										class="fa-solid fa-arrow-right"></i></a>
							<?php endif; ?>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>

	</div>
</section>
<section class="form--mb--res">
	<div class="cus--form--mb--res">
		<section class="scroll--section swiper-slide ">
			<section class=" find--home ">
				<div class="box-wp">
					<div class="cus-find--home clearfix">
						<div class="content-left--50">
							<div class="info--find">
							</div>
							<?php echo do_shortcode( '[wpforms id="92"]	' ) ?>
							<div class="social--find ">
								<p>
									<?php _e( 'THEO DÕI CHÚNG TÔI ĐỂ CẬP NHẬT THÔNG TIN HỮU ÍCH', 'kmar' ) ?>
								</p>

								<?php if ( have_rows( 'cdc_mxh_list', 'option' ) ) : ?>
									<ul class="social">
										<?php while ( have_rows( 'cdc_mxh_list', 'option' ) ) :
											the_row(); ?>
											<li>
												<a
													href="<?php echo check_link( get_sub_field( 'link' ) ) ?>">
													<?php echo wp_get_attachment_image( get_sub_field( 'icon' ), 'full' ) ?>
												</a>
											</li>
										<?php endwhile; ?>
									</ul>
								<?php endif; ?>
							</div>
						</div>
						<div class="content-right--50">
							<div class="cus-right--find">
								<p><img alt="find" src="uploads/images/find_right.png"
										style="max-width: 100%;" /></p>
							</div>
						</div>
					</div>
				</div>
			</section>
		</section>
	</div>
</section>