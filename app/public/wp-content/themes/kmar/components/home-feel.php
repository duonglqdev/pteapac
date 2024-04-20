<section class="scroll--section swiper-slide  feel--home">
	<div class="container">
		<div class="cus-feel--home clearfix">
			<div class="top-feel--home">
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
			<?php if ( have_rows( 'f8_list_feel' ) ) : ?>
				<div class="list-feel--home overflow-hidden ">
					<div class="swiper-wrapper">
						<?php while ( have_rows( 'f8_list_feel' ) ) :
							the_row(); ?>
							<div class="item-feel--home swiper-slide">
                            <?php if( get_sub_field('img') ): ?>
								<div class="img text-center">
                                     <?php echo wp_get_attachment_image(get_sub_field('img'), 'full',"",array('class'=>'mx-auto')) ?>
                                    </div>
                             <?php endif; ?>
								<div class="intro--feel">
                                    <?php if( get_sub_field('name') ): ?>
                                        <h3 class="name-feel--home"><?php the_sub_field('name'); ?></h3>
                                    <?php endif; ?>
                                    <?php if( get_sub_field('course') ): ?>
									<div class="cmt-feel--home">
										<p class="t1l"><?php the_sub_field('course'); ?></p>
									</div>
                                    <?php endif; ?>
                                    <?php if( get_sub_field('feel') ): ?>
									<div class="content-feel--home t5l">
										<p><?php the_sub_field('feel'); ?></p>
									</div>
                                    <?php endif; ?>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
                    <div class="swiper-pagination mb-5 "></div>
				</div>
			<?php endif; ?>

		</div>
	</div>
</section>