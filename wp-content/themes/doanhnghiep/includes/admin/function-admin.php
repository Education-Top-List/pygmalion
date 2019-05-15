<?php
add_action('admin_menu', 'ch_essentials_admin');
function ch_essentials_admin() {

	register_setting('zang-settings-header', 'phone');
	register_setting('zang-settings-header', 'address_header');
	register_setting('zang-settings-socials', 'footer_fb');
	register_setting('zang-settings-socials', 'footer_youtube');
	register_setting('zang-settings-socials', 'footer_insta');
	// Commit index
	register_setting('zang-settings-commit', 'idx_commit_title_one');
	register_setting('zang-settings-commit', 'idx_commit_desc_one');
	register_setting('zang-settings-commit', 'idx_commit_title_two');
	register_setting('zang-settings-commit', 'idx_commit_desc_two');
	register_setting('zang-settings-commit', 'idx_commit_title_three');
	register_setting('zang-settings-commit', 'idx_commit_desc_three');
	/* Base Menu */
	add_menu_page('Zang Theme Option','Tenten Framework','manage_options','template_admin_zang','zang_theme_create_page',get_template_directory_uri() . '/images/tenten.png',110);
}
add_action('admin_init', 'zang_custom_settings');
function zang_custom_settings() { 

	/* Header Options Section */
	add_settings_section('zang-header-options', 'Chỉnh sửa header','zang_header_options_callback','zang-settings-header' );
	add_settings_field('address-hd','Số điện thoại', 'zang_phone_header','zang-settings-header', 'zang-header-options');
	add_settings_field('phone-hd','Địa chỉ', 'zang_address_header','zang-settings-header', 'zang-header-options');

	/* Social Options Section */
	add_settings_section('zang-social-options','Chỉnh sửa social','zang_social_options_callback','zang-settings-socials' );
	add_settings_field('facebook','Facebook Link', 'zang_footer_fb','zang-settings-socials', 'zang-social-options');
	add_settings_field('youtube','Twitter Link', 'zang_footer_youtube','zang-settings-socials', 'zang-social-options');
	add_settings_field('insta','Instagram Link', 'zang_footer_insta','zang-settings-socials', 'zang-social-options');

	/* Commit Options Section */
	add_settings_section('zang-commit-options','Chỉnh sửa cam kết trang chủ','zang_commit_options_callback','zang-settings-commit');
	add_settings_field('idx-commit-title-one','Cam kết 1','zang_commit_title_one', 'zang-settings-commit','zang-commit-options');
	add_settings_field('idx-commit-desc-one','','zang_commit_desc_one', 'zang-settings-commit','zang-commit-options');
	add_settings_field('idx-commit-title-two','Cam kết 2','zang_commit_title_two', 'zang-settings-commit','zang-commit-options');
	add_settings_field('idx-commit-desc-two','','zang_commit_desc_two', 'zang-settings-commit','zang-commit-options');
	add_settings_field('idx-commit-title-three','Cam kết 3','zang_commit_title_three', 'zang-settings-commit','zang-commit-options');
	add_settings_field('idx-commit-desc-three','','zang_commit_desc_three', 'zang-settings-commit','zang-commit-options');
}

function zang_header_options_callback(){
	echo '';
}

function zang_social_options_callback(){
	echo '';
}

function zang_commit_options_callback(){
	echo '';
}

function zang_phone_header(){
	$phone = esc_attr(get_option('phone'));
	echo '<input type="text" class="iptext_adm" name="phone" value="'.$phone.'" >';
}
function zang_address_header(){
	$address_header = esc_attr(get_option('address_header'));
	echo '<input type="text" class="iptext_adm" name="address_header" value="'.$address_header.'" placeholder="" ';
}
function zang_footer_fb(){
	$footer_fb = esc_attr(get_option('footer_fb'));
	echo '<input type="text" class="iptext_adm" name="footer_fb" value="'.$footer_fb.'" placeholder="" ';
}
function zang_footer_youtube(){
	$footer_youtube = esc_attr(get_option('footer_youtube'));
	echo '<input type="text" class="iptext_adm" name="footer_youtube" value="'.$footer_youtube.'" placeholder="" ';
}
function zang_footer_insta(){
	$footer_insta = esc_attr(get_option('footer_insta'));
	echo '<input type="text" class="iptext_adm" name="footer_insta" value="'.$footer_insta.'" placeholder="" ';
}

function zang_commit_title_one(){
	$idx_commit_title_one = esc_attr(get_option('idx_commit_title_one'));
	echo '<input type="text" class="iptext_adm" name="idx_commit_title_one" value="'.$idx_commit_title_one.'" >';
};

function zang_commit_desc_one(){
	$idx_commit_desc_one = esc_attr(get_option('idx_commit_desc_one'));
	echo '<input type="text" class="iptext_adm" name="idx_commit_desc_one" value="'.$idx_commit_desc_one.'" >';
}

function zang_commit_title_two(){
	$idx_commit_title_two = esc_attr(get_option('idx_commit_title_two'));
	echo '<input type="text" class="iptext_adm" name="idx_commit_title_two" value="'.$idx_commit_title_two.'" >';
};

function zang_commit_desc_two(){
	$idx_commit_desc_two = esc_attr(get_option('idx_commit_desc_two'));
	echo '<input type="text" class="iptext_adm" name="idx_commit_desc_two" value="'.$idx_commit_desc_two.'" >';
}

function zang_commit_title_three(){
	$idx_commit_title_three = esc_attr(get_option('idx_commit_title_three'));
	echo '<input type="text" class="iptext_adm" name="idx_commit_title_three" value="'.$idx_commit_title_three.'" >';
};

function zang_commit_desc_three(){
	$idx_commit_desc_three = esc_attr(get_option('idx_commit_desc_three'));
	echo '<input type="text" class="iptext_adm" name="idx_commit_desc_three" value="'.$idx_commit_desc_three.'" >';
}


function myshortcode(){
	ob_start();
	if(get_option('footer_fb') || get_option('footer_youtube') || get_option('footer_insta') ){
		?>
		<ul class="social_ft">
			<?php if(get_option('footer_fb')){ ?>
				<li class="fb_ft"><a href="<?php echo get_option('footer_fb'); ?>" target="_blank"><img src="<?php echo BASE_URL; ?>/images/icon_fb.png ?>"></a></li>
			<?php }?>
			<?php if(get_option('footer_youtube')){ ?>
				<li class="twitter"><a href="<?php echo get_option('footer_youtube'); ?>" target="_blank"><img src="<?php echo BASE_URL; ?>/images/icon_ytb.png ?>"></a></li>
			<?php }?>
			<?php if(get_option('footer_insta')){ ?>
				<li class="instagram"><a href="<?php echo get_option('footer_insta'); ?>" target="_blank"><img src="<?php echo BASE_URL; ?>/images/icon_insta.png ?>"></a></li>
			<?php }?>
		</ul>	
		<?php
	}
	return ob_get_clean();
}
add_shortcode('social_ft','myshortcode');



/* Display Page
-----------------------------------------------------------------*/
function zang_theme_create_page() {
	?>
	<div class="wrap">  
		<?php settings_errors(); ?>  

		<?php  
		$active_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : 'header_page_options';  
		?>  

		<ul class="nav-tab-wrapper"> 
		<li><a href="?page=template_admin_zang&tab=social_page_options" class="nav-tab <?php echo $active_tab == 'social_page_options' ? 'nav-tab-active' : ''; ?>">Social Footer</a></li>	
		</ul>  

		<form method="post" action="options.php">  
			<?php 
				settings_fields( 'zang-settings-socials' );
				do_settings_sections( 'zang-settings-socials' );
			?>             
			<?php submit_button(); ?>  
		</form> 

	</div> 




	<?php
}

