<section class="scroll--section slide swiper-slide  course--home course--home1">
	<div class="box-wp">
		<div class="cus-course--home clearfix">
			<div class="top-course--home top--tl--home"> 
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
            <?php if( have_rows('...') ): ?>
                <div class="slides">
                <?php while( have_rows('...') ): the_row();?>
                    <li>
                        <p><?php the_sub_field('caption'); ?></p>
                    </li>
                <?php endwhile; ?>
                </div>
            <?php endif; ?>
			<div class="list-course--home  clearfix">
				<div class="item-course--home">
					<div class="cus-i-course--home">
						<div class="img-course">
                            <img src="images/course_404.png"
								alt="Tiếng Anh Mầm Non (3-6 tuổi)"></div>
						<div class="intro--course">
							<div class="top-course--home clearfix">
								<div class="left-course--home"><span>SMART
										KIDS</span> </div>
								<div class="right-course--home"><a href="tieng-anh-mam-non-3-6-tuoi"
										title="Tiếng Anh Mầm Non (3-6 tuổi)"
										class="a-more-course--home"><span>Khám
											phá</span><i class="fa-regular fa-arrow-right"></i></a>
								</div>
							</div>
							<h3 class="name-course--home"><a href="tieng-anh-mam-non-3-6-tuoi"
									class="t2l" title="Tiếng Anh Mầm Non (3-6 tuổi)">Tiếng Anh
									Mầm Non (3-6 tuổi)</a></h3>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>