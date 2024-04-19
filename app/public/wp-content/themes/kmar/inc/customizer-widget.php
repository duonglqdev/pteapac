<?php
class kmar_sidebar_widget extends WP_Widget {
	function __construct() {

		parent::__construct(

			'kmar_sidebar_widget',

			'Widget',

			array( 'description' => 'Widget hiển thị Widget' )

		);
	}



	function form( $instance ) {

		$default = array();

		$instance = wp_parse_args( (array) $instance, $default );
	}



	function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		return $instance;
	}



	function widget( $args, $instance ) {

		extract( $args );
		?>



		<?php

	}
}
add_action( 'widgets_init', 'create_kmar_sidebar_widget' );

function create_kmar_sidebar_widget() {

	register_widget( 'kmar_sidebar_widget' );
}





class Footer_HTML_Widget_1 extends WP_Widget {


	function __construct() {
		parent::__construct(
			'footer_html_widget_1', // ID của widget
			esc_html__( '[Footer] Social', 'kmar' ), // Tên của widget
			array( 'description' => esc_html__( 'Hiển thị footer social', 'kmar' ), ) // Mô tả của widget
		);
	}

	// Hàm hiển thị widget
	function widget( $args, $instance ) {
		extract( $args );

		?>
		<?php
		$footer_logo = get_field( 'logo_footer', 'widget_' . $args['widget_id'] );
		$footer_desc = get_field( 'f1_footer_desc', 'widget_' . $args['widget_id'] );
		?>
		<div class="col-lg-3">
			<div class="ft-col">
				<?php if ( $footer_logo ) : ?>

					<a class="logo" href="<?php echo get_home_url() ?>" title="Logo footer">
						<?php echo wp_get_attachment_image( $footer_logo, 'full' ) ?>
					</a>
				<?php endif; ?>
				<?php if ( $footer_desc ) : ?>
					<p class="tl--contact-footer"> <?php echo $footer_desc ?></p>
				<?php endif; ?>

				<?php if ( have_rows( 'f1_footer_social', 'widget_' . $args['widget_id'] ) ) : ?>
					<div class="ft-social">
						<ul class="social">
							<?php while ( have_rows( 'f1_footer_social', 'widget_' . $args['widget_id'] ) ) :
								the_row(); ?>
								<li>
									<a target="_blank"
										href="<?php echo check_link( get_sub_field( 'link_mxh' ) ) ?>" title="">
										<?php echo wp_get_attachment_image( get_sub_field( 'icon_mxh' ), 'full' ) ?>
									</a>

								</li>
							<?php endwhile; ?>
						</ul>
					</div>
				<?php endif; ?>

			</div>

		</div>

		<?php
	}

	// Hàm hiển thị biểu mẫu quản trị widget
	function form( $instance ) {

		$default = array();

		$instance = wp_parse_args( (array) $instance, $default );
	}

	function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		return $instance;
	}
}

// Bước 2: Đăng ký widget mới
function register_footer_html_widget_1() {
	register_widget( 'Footer_HTML_Widget_1' );
}
add_action( 'widgets_init', 'register_footer_html_widget_1' );



class Footer_HTML_Widget_2 extends WP_Widget {


	function __construct() {
		parent::__construct(
			'footer_html_widget_2', // ID của widget
			esc_html__( '[Footer] Danh sách menu', 'kmar' ), // Tên của widget
			array( 'description' => esc_html__( 'Hiển thị footer menu', 'kmar' ), ) // Mô tả của widget
		);
	}

	// Hàm hiển thị widget
	function widget( $args, $instance ) {
		extract( $args );

		?>
		<?php
		$title = get_field( 'f2_footer_title', 'widget_' . $args['widget_id'] );
		?>
		<div class="col-lg-3 col-md-6">
			<div class="ft-col">
				<?php if ( $title ) : ?>
					<p class="title"><?php echo $title ?></p>
				<?php endif; ?>
				<?php if ( have_rows( 'f2_footer_list', 'widget_' . $args['widget_id'] ) ) : ?>
					<ul class="ft-sitemap clearfix">
						<?php while ( have_rows( 'f2_footer_list', 'widget_' . $args['widget_id'] ) ) :
							the_row(); ?>
							<li><a href="<?php echo check_link( get_sub_field( 'link' ) ) ?>"
									title="<?php the_sub_field( 'title' ) ?>">
									<?php the_sub_field( 'title' ) ?>
								</a></li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>

			</div>
		</div>

		<?php
	}

	// Hàm hiển thị biểu mẫu quản trị widget
	function form( $instance ) {

		$default = array();

		$instance = wp_parse_args( (array) $instance, $default );
	}

	function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		return $instance;
	}
}

// Bước 2: Đăng ký widget mới
function register_footer_html_widget_2() {
	register_widget( 'Footer_HTML_Widget_2' );
}
add_action( 'widgets_init', 'register_footer_html_widget_2' );


class Footer_HTML_Widget_3 extends WP_Widget {


	function __construct() {
		parent::__construct(
			'footer_html_widget_3', // ID của widget
			esc_html__( '[Footer] Thông tin liên hệ', 'kmar' ), // Tên của widget
			array( 'description' => esc_html__( 'Hiển thị thông tin liên hệ', 'kmar' ), ) // Mô tả của widget
		);
	}

	// Hàm hiển thị widget
	function widget( $args, $instance ) {
		extract( $args );

		?>
		<?php
		$title = get_field( 'f3_footer_title', 'widget_' . $args['widget_id'] );
		$footer_form = get_field( 'ft_show_form', 'widget_' . $args['widget_id'] );
		?>
		<div class="col-lg-3 col-md-6">
			<div class="ft-col">
				<div class="infor-footer">
					<?php if ( $title ) : ?>
						<p class="title"> <?php echo $title ?></p>
					<?php endif; ?>

					<?php if ( have_rows( 'f3_ft_contact_list', 'widget_' . $args['widget_id'] ) ) : ?>
						<div class="g-if">
							<table border="0" cellpadding="1" cellspacing="1" class="tcs" style="width: 100%;">
								<tbody>
									<?php while ( have_rows( 'f3_ft_contact_list', 'widget_' . $args['widget_id'] ) ) :
										the_row(); ?>
										<tr>
											<td>
												<?php echo wp_get_attachment_image( get_sub_field( 'icon' ), 'full' ) ?>
											</td>
											<td class="tcs-selection-enabled">
												<?php the_sub_field( 'desc' ); ?>
											</td>
										<tr>
										<?php endwhile; ?>
								</tbody>
							</table>
						</div>
					<?php endif; ?>

				</div>
				<?php if ( $footer_form )
				{ ?>
					<div class="pteapac-res">
						<div class="modal-register clearfix">
                            <?php echo do_shortcode( '[wpforms id="63"]	' ) ?>
						</div>
					</div>
				<?php } ?>


			</div>
		</div>

		<?php
	}

	// Hàm hiển thị biểu mẫu quản trị widget
	function form( $instance ) {

		$default = array();

		$instance = wp_parse_args( (array) $instance, $default );
	}

	function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		return $instance;
	}
}

// Bước 2: Đăng ký widget mới
function register_footer_html_widget_3() {
	register_widget( 'Footer_HTML_Widget_3' );
}
add_action( 'widgets_init', 'register_footer_html_widget_3' );



class Footer_HTML_Widget_4 extends WP_Widget {


	function __construct() {
		parent::__construct(
			'footer_html_widget_4', // ID của widget
			esc_html__( '[Footer] Copyright', 'kmar' ), // Tên của widget
			array( 'description' => esc_html__( 'Hiển thị Copyright', 'kmar' ), ) // Mô tả của widget
		);
	}

	// Hàm hiển thị widget
	function widget( $args, $instance ) {
		extract( $args );

		?>
		<?php
		$ft_copy_right = get_field( 'ft_copy_right', 'widget_' . $args['widget_id'] );
		$ft_copy_right_author = get_field( 'ft_copy_right_author', 'widget_' . $args['widget_id'] );
		?>
		  <div class="footer-copyright">
                    <div class="container">
                         <div class="box-wp">
                            <?php if( $ft_copy_right): ?>
                                <div class="copyright">
                                     <?php echo $ft_copy_right  ?>
                                </div>
                            <?php endif; ?>
                            <?php if( $ft_copy_right_author): ?>
                               
                                <div class="dnw"> 
                                    <?php echo $ft_copy_right_author  ?>
                                </div>
                            <?php endif; ?>
                         </div>

                    </div>
               </div>

		<?php
	}

	// Hàm hiển thị biểu mẫu quản trị widget
	function form( $instance ) {

		$default = array();

		$instance = wp_parse_args( (array) $instance, $default );
	}

	function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		return $instance;
	}
}

// Bước 2: Đăng ký widget mới
function register_footer_html_widget_4() {
	register_widget( 'Footer_HTML_Widget_4' );
}
add_action( 'widgets_init', 'register_footer_html_widget_4' );