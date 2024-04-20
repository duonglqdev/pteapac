 <?php  
 $background= get_sub_field('f10_bg');
 $is_hide_pc = get_sub_field('f10_hide_pc');
 $is_hide_mb = get_sub_field('f10_hide_mb');
 ?>
<section class="scroll--section swiper-slide <?php echo ($is_hide_pc) ? 'd-lg-none d-block ' :'form__show' ?> <?php echo ($is_hide_mb) ? 'd-lg-block d-none' :'' ?> ">
                    <section class=" find--home " <?php if ($background ) { ?> style="background-image: url(<?php echo wp_get_attachment_image_url($background, 'full') ?>);" <?php } ?>>
                        <div class="container">
                            <div class="cus-find--home clearfix">
                                <div class="content-left--50">
                                    <div class="info--find">
                                    <?php
                                        $title = get_sub_field( 'clone_title' );
                                        ?>
                                        <?php if ( $title ) : ?>
                                            
                                            <h2 class="title--find"><?php echo $title['clone_title_top']; ?></h2>
                                            <p class="d-lg-block d-none"><?php echo $title['clone_title_main']; ?></p>
                                        <?php endif;
                                        ?>
                                    </div>
                                    <?php echo do_shortcode( '[wpforms id="92"]	' ) ?>
                                    <div class="social--find mt-5">
                                    <?php if( get_sub_field('f10_title_social') ): ?>
									
									<p>
									<?php the_sub_field('f10_title_social'); ?>
									</p>
								<?php endif; ?>
                                <?php if ( have_rows( 'f10_list_social' ) ) : ?>
									<ul class="social">
										<?php while ( have_rows( 'f10_list_social' ) ) :
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
                                    <?php if( get_sub_field('f10_img') ): ?>
                                        
                                        <div class="cus-right--find">
                                            <p> <?php echo wp_get_attachment_image(get_sub_field('f10_img'), 'full') ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>