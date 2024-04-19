<section class="scroll--section slide swiper-slide  course--home course--home1">
	<div class="container">
		<div class="cus-course--home clearfix">
			<div class="top-course--home top--tl--home"> 
            <?php
					$title = get_sub_field( 'clone_title' );
					?>
					<?php if ( $title ) : ?>
						<label class="label-mm t1l ">
							<?php echo $title['clone_title_top']; ?>
						</label>
                        <h2 class="title-mm"><?php echo $title['clone_title_main']; ?></h2>
					<?php endif; ?>

			</div>
            <?php if( have_rows('f4_list_course') ): ?>
                <div class="list-course--home  clearfix">
                <?php while( have_rows('f4_list_course') ): the_row();
                $btn_contact = get_sub_field('btn_contact');
           
                
                ?>
                  
                    <div class="item-course--home">
                        <div class="cus-i-course--home">
                            <div class="img-course">
                         <?php echo wp_get_attachment_image(get_sub_field('img'), 'full') ?>      
                        </div>
                            <div class="intro--course">
                                <div class="top-course--home clearfix">

                                    <div class="left-course--home text-center"><span class="mx-auto"><?php the_sub_field('level_course'); ?></span> </div>

                                    <div class="right-course--home">
                                        <?php
                                            if ($btn_contact['clone_btn']['title'] ) : ?>
                                           
                                            <a href="<?php echo$btn_contact['clone_btn']['link']; ?>"
                                            title="<?php echo$btn_contact['clone_btn']['title']; ?>"
                                            class="a-more-course--home"><span><?php echo$btn_contact['clone_btn']['title']; ?></span><i class="fa-regular fa-arrow-right"></i>
                                            </a>
                                        <?php endif; ?>
                                       
                                    </div>
                                </div>
                                <h3 class="name-course--home">
                                    <a href="tieng-anh-mam-non-3-6-tuoi"
                                        class="t2l" title="<?php the_sub_field('title_course');  ?>">
                                      <?php the_sub_field('title_course');  ?>
                                    </a>
                                    </h3>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                </div>
            <?php endif; ?>
		
		</div>
	</div>
</section>