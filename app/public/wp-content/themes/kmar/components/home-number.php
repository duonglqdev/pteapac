 <?php  
  $background= get_sub_field('f11_bg_number');
 ?>

<section class="scroll--section slide swiper-slide  number--home section__count">
                    <section class="number--hot pd--40 ">
                        <div class="over--number--hot" <?php if ($background ) { ?> style="background-image: url(<?php echo wp_get_attachment_image_url($background, 'full') ?>);" <?php } ?>>
                            <div class="container">
                                <div class="cus--number--hot">
                                    <div class="top--course top--number--hot">
                                       
                                        <?php
                                        $title = get_sub_field( 'clone_title' );
                                        ?>
                                        <?php if ( $title ) : ?>
                                            <label class="label-mm t1l mx-auto">
                                                <?php echo $title['clone_title_top']; ?>
                                            </label>
                                            <h2 class="title-mm"><?php echo $title['clone_title_main']; ?></h2>
                                        <?php endif;
                                        ?>
                                        
                                    </div>
                                    <?php if( have_rows('f11_list_number') ): ?>
                                        <div class="list--number--hot">
                                        <?php while( have_rows('f11_list_number') ): the_row();?>
                                        <div class="item--number--hot count-up-trigger">
                                            <div class="cus--number--hot">
                                                <h3 class="v--number--hot" ><span class="count" data-count="<?php the_sub_field('number')  ?>">0</span> <span><?php the_sub_field('unit')  ?></span></h3>
                                                <p class="n--number--hot"><?php the_sub_field('desc')  ?></p>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                        </div>
                                    <?php endif; ?>
                                   
                                </div>
                            </div>
                        </div>
                    </section>
                </section>