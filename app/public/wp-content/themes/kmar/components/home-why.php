<section class="scroll--section swiper-slide  why--home ">
    <div class="container">
            <div class="cus-why--home clearfix">
                <div class="top-why--home text-center">
                    <?php
					$title = get_sub_field( 'clone_title' );
					?>
					<?php if ( $title ) : ?>
						<label class="label-mm t1l mx-auto ">
							<?php echo $title['clone_title_top']; ?>
						</label>
                        <h2 class="title-mm"><?php echo $title['clone_title_main']; ?></h2>
					<?php endif; ?>
                    
                </div>

                <div class="content-left--50">
                    <div class="cus-r-why--home">
                        <div class="list-ques clearfix">
                            <?php if( have_rows('f3_list_content') ): ?>
                                <ul class="list-cauhoi ">
                                <?php while( have_rows('f3_list_content') ): the_row();?>
                                <li>
                                    <h4>  <?php the_sub_field('title')  ?>
                                    </h4>
                                    <div class=" box-ques">
                                         <?php  the_sub_field('desc') ?>
                                     
                                    </div>
                                </li>
                                <?php endwhile; ?>
                            </ul>
                            <?php endif; ?>
                            
                        </div>
                    </div>
                </div>
                <div class="content-right--50">
                    <?php if( get_sub_field('f3_why_img') ): ?>
                        <p> <?php echo wp_get_attachment_image(get_sub_field('f3_why_img'), 'full') ?></p>
                    <?php endif; ?>
                </div>
            </div>

    </div>
                </section>