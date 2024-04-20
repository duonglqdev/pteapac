<section class="scroll--section slide swiper-slide  quality--home">
	<div class="container">
		<div class="cus-quality--home clearfix">
			<div class="content-left--nf">
				<div class="cus-r-quality--home">
					<?php
					$title = get_sub_field( 'clone_title' );
					?>
					<?php if ( $title ) : ?>
						<label class="label-mm t1l ">
							<?php echo $title['clone_title_top']; ?>
						</label>
						<h2 class="title-mm"><?php echo $title['clone_title_main']; ?></h2>
					<?php endif; ?>
                    <?php if( have_rows('f7_list_content') ): ?>
                        <div class="list-quality--home">
                        <?php while( have_rows('f7_list_content') ): the_row();?>
                            
                            <div class="item-icon--quality">
                                <div class="img--quality">
                                 <?php echo wp_get_attachment_image(get_sub_field('icon'), 'full') ?>    
                                
                                </div>
                                <?php if( get_sub_field('title') ): ?>
                                    <div class="info--quality">
    
                                        <p class="t3l"><?php the_sub_field('title'); ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
					
				</div>
			</div>
			<div class="content-right--nf">
				<?php if ( get_sub_field( 'f7_image' ) ) : ?>
					<div class="img-right--quality">
						<?php echo wp_get_attachment_image( get_sub_field( 'f7_image' ), 'full' ) ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>