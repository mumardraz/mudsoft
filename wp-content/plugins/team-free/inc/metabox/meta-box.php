<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}  // if direct access

/**
 * MetaBox Class
 */
class SP_Team_Free_MetaBox{

	/**
	 * Initialize the class
	 */
	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );
		add_action( 'save_post', array( $this, 'save_post' ) );
	}

	/**
	 * Add MetaBox
	 */
	function add_meta_boxes() {
		add_meta_box( 'member_info_meta', esc_html__( 'Member Info', 'team-free' ), 'team_free_member_info_meta_callback', 'team_free', 'normal' );
		add_meta_box( 'member_social_link_meta', esc_html__( 'Member Social Links', 'team-free' ), 'team_free_social_meta_link_callback', 'team_free', 'normal' );
		add_meta_box( 'team_free_shortcode_meta', esc_html__( 'Shortcode Generator', 'team-free' ), 'team_free_shortcode_meta_callback', 'team_free_shortcodes', 'normal' );
		add_meta_box( 'sp_team_free_shortcode_content_metabox', esc_html__('Shortcode', 'team-free'), 'sp_team_free_shortcode_content_metabox', 'team_free_shortcodes', 'side', 'default' );
	}


	/**
	 * Add MetaBox Save
	 */
	function save_post( $post_id ) {
		if ( ! isset( $_POST['member_social_metabox_nonce'] ) ) {
			return $post_id;
		}

		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return $post_id;
		}

		if ( 'team_free' == $_POST['post_type'] ) {
			if ( ! current_user_can( 'edit_post', $post_id ) ) {
				return $post_id;
			}
		}

		$mymeta = array( 'facebook', 'twitter', 'google_plus', 'instagram', 'designation', 'total_members', 'display_members', 'auto_play', 'pagination', 'navigation', 'pagination_bg', 'pagination_active_bg', 'stop_on_hover', 'items_small_desktop', 'items_tablet', 'items_mobile', 'navigation_color', 'navigation_border_color', 'navigation_bg', 'navigation_hover_color', 'navigation_hover_border_color', 'navigation_hover_bg' );

		foreach ( $mymeta as $keys ) {

			if ( is_array( $_POST[ $keys ] ) ) {
				$data = array();

				foreach ( $_POST[ $keys ] as $key => $value ) {
					$data[] = $value;
				}
			} else {
				$data = sanitize_text_field( $_POST[ $keys ] );
			}

			update_post_meta( $post_id, $keys, $data );
		}
	}

}
new SP_Team_Free_MetaBox();


/**
 * member info callback
 */
function team_free_member_info_meta_callback( $member_info ) {

	wp_nonce_field( 'member_social_metabox', 'member_social_metabox_nonce' ); ?>

    <div style="margin: 10px 0;">
        <label for="designation" style="width:150px; display:inline-block;"><?php esc_html_e( 'Designation', 'team-free' ) ?></label>
		<?php $designation = get_post_meta( $member_info->ID, 'designation', true ); ?>
        <input type="text" name="designation" id="designation" class="designation" value="<?php echo esc_html($designation); ?>" style="width:300px;"/>
    </div>
    <div style="margin: 10px 0;">
        <label style="width:150px; display:inline-block;"></label>
        <div style="display:inline-block;">The following fields are available in the <a href="https://shapedplugin.com/plugin/team-pro/" target="_blank">Pro version</a></div>
    </div>
    <div style="margin: 10px 0;">
        <label for="location" style="width:150px; display:inline-block;"><?php esc_html_e( 'Location', 'team-free' ) ?></label>
        <input disabled type="text" name="location" id="location" class="location" style="width:300px;"/>
    </div>
    <div style="margin: 10px 0;">
        <label for="email" style="width:150px; display:inline-block;"><?php esc_html_e( 'Email', 'team-free' ) ?></label>
        <input disabled type="text" name="email" id="email" class="email" style="width:300px;"/>
    </div>
    <div style="margin: 10px 0;">
        <label for="telephone" style="width:150px; display:inline-block;"><?php esc_html_e( 'Telephone', 'team-free' ) ?></label>
        <input disabled type="text" name="telephone" id="telephone" class="telephone" style="width:300px;"/>
    </div>
    <div style="margin: 10px 0;">
        <label for="mobile" style="width:150px; display:inline-block;"><?php esc_html_e( 'Mobile', 'team-free' ) ?></label>
        <input disabled type="text" name="mobile" id="mobile" class="mobile" style="width:300px;"/>
    </div>
    <div style="margin: 10px 0;">
        <label for="website" style="width:150px; display:inline-block;"><?php esc_html_e( 'Website', 'team-free' ) ?></label>
        <input disabled type="text" name="website" id="website" class="website" style="width:300px;"/>
    </div>

<?php }


/**
 * Social Meta Callback
 */
function team_free_social_meta_link_callback( $social_meta ) {

	wp_nonce_field( 'member_social_metabox', 'member_social_metabox_nonce' ); ?>

    <!-- member social -->
    <div class="wrap-meta-group">

        <div style="margin: 10px 0;">
            <label for="facebook" style="width:150px; display:inline-block;"><?php esc_html_e( 'Facebook', 'team-free' ) ?></label>
			<?php $facebook = get_post_meta( $social_meta->ID, 'facebook', true ); ?>
            <input type="text" name="facebook" id="facebook" class="facebook" value="<?php echo esc_html($facebook); ?>" style="width:300px;"/>
        </div>

        <div style="margin: 10px 0;">
            <label for="twitter" style="width:150px; display:inline-block;"><?php esc_html_e( 'Twitter', 'team-free' ) ?></label>
			<?php $twitter = get_post_meta( $social_meta->ID, 'twitter', true ); ?>
            <input type="text" name="twitter" id="twitter" class="twitter" value="<?php echo esc_html($twitter); ?>" style="width:300px;"/>
        </div>

        <div style="margin: 10px 0;">
            <label for="google_plus" style="width:150px; display:inline-block;"><?php esc_html_e( 'Google Plus', 'team-free' ) ?></label>
			<?php $google_plus = get_post_meta( $social_meta->ID, 'google_plus', true ); ?>
            <input type="text" name="google_plus" id="google_plus" class="google_plus" value="<?php echo esc_html($google_plus); ?>" style="width:300px;"/>
        </div>

        <div style="margin: 10px 0;">
            <label for="instagram" style="width:150px; display:inline-block;"><?php esc_html_e( 'Instagram', 'team-free' ) ?></label>
			<?php $instagram = get_post_meta( $social_meta->ID, 'instagram', true ); ?>
            <input type="text" name="instagram" id="instagram" class="instagram" value="<?php echo esc_html($instagram); ?>" style="width:300px;"/>
        </div>

        <div style="margin: 10px 0;">
            <label style="width:150px; display:inline-block;"></label>
            <div style="display:inline-block;">The following fields are available in the <a href="https://shapedplugin.com/plugin/team-pro/" target="_blank">Pro version</a></div>
        </div>

        <div style="margin: 10px 0;" class="sp-only-for-pro">
            <select disabled style="width:150px; display:inline-block;">
                <option value="fa-facebook"><?php esc_html_e('Facebook', 'team-free'); ?></option>
                <option value="fa-twitter"><?php esc_html_e('Twitter', 'team-free'); ?></option>
            </select>
            <input disabled type="text" placeholder="e.g www.fb.com/user" class="time-line text-field" style="width: 300px;"/>
            <span class="button-danger">Remove</i></span>
            <span class="sp-button-primary">Add New</span>
        </div>


    </div>
<?php }


/**
 * Team Free shortCode callback
 */
function team_free_shortcode_meta_callback( $shortcode_id ) {
	wp_nonce_field( 'team_free_shortcode_metabox', 'member_social_metabox_nonce' ); ?>

    <div id="sp-team-free-shortcode">

        <div class="nav-tab-wrapper">
            <a class="nav-tab" href="javascript:;"><?php esc_html_e('General Settings', 'team-free') ?></a>
            <a class="nav-tab" href="javascript:;"><?php esc_html_e('Carousel Settings', 'team-free') ?></a>
            <a class="nav-tab" href="javascript:;"><?php esc_html_e('Stylization', 'team-free') ?></a>
        </div>

        <div id="sp-team-free-meta-content">
            <div class="inside hidden">

                <div class="sp-single-meta sp-only-for-pro">
                    <div class="sp-meta-th">
                        <label for="theme_style"><?php esc_html_e( 'Theme Style', 'team-free' ) ?></label>
                    </div>
                    <div class="sp-meta-td">
                        <ul>
                            <li><input type="radio" name="team_theme_style" value="true" checked><?php esc_html_e('Theme One', 'team-free') ?></li>
                            <li style="display:inline-block;">The following fields are available in the <a href="https://shapedplugin.com/plugin/team-pro/" target="_blank">Pro version</a></li>
                            <li><input disabled type="radio" name="team_theme_style" value="false"><?php esc_html_e('Theme Two', 'team-free') ?></li>
                        </ul>
                    </div>
                </div>

                <div class="sp-single-meta sp-only-for-pro">
                    <div class="sp-meta-th">
                        <label for="team_member_type"><?php esc_html_e( 'Team Member type', 'team-free' ) ?></label>
                    </div>
                    <div class="sp-meta-td">
                        <ul>
                            <li><input type="radio" name="team_member_type" value="true" checked><?php esc_html_e('Latest Member', 'team-free') ?></li>
                            <li style="display:inline-block;">The following fields are available in the <a href="https://shapedplugin.com/plugin/team-pro/" target="_blank">Pro version</a></li>
                            <li><input disabled type="radio" name="team_member_type" value="false"><?php esc_html_e('Member from Department', 'team-free') ?></li>
                            <li><input disabled type="radio" name="team_member_type" value="false"><?php esc_html_e('Member from Exclude Department', 'team-free') ?></li>
                            <li><input disabled type="radio" name="team_member_type" value="false"><?php esc_html_e('Specific Member', 'team-free') ?></li>
                        </ul>
                    </div>
                </div>

                <div class="sp-single-meta">
                    <div class="sp-meta-th">
                        <label for="total_members"><?php esc_html_e( 'Total Members', 'team-free' ) ?></label>
                    </div>
					<?php
					$default_value  = '20';
					$total_members = get_post_meta( $shortcode_id->ID, 'total_members', true );
					$total_members = $total_members ? $total_members : $default_value;
					?>
                    <div class="sp-meta-td">
                        <input type="number" name="total_members" id="total_members" class="total_members" value="<?php echo esc_html( $total_members ) ?>"/>
                        <p class="sp-meta-des"><?php esc_html_e('Total number of team members to be shown.', 'team-free') ?></p>
                    </div>
                </div>

                <div class="sp-single-meta">
                    <div class="sp-meta-th">
                        <label for="display_members"><?php esc_html_e( 'Column Number', 'team-free' ) ?></label>
                    </div>
		            <?php
		            $default_value    = '4';
		            $display_members = get_post_meta( $shortcode_id->ID, 'display_members', true );
		            $display_members = $display_members ? $display_members : $default_value;
		            ?>
                    <div class="sp-meta-td">
                        <input type="number" name="display_members" id="display_members" class="display_members" value="<?php echo esc_html( $display_members ) ?>"/>
                        <p class="sp-meta-des"><?php esc_html_e('Number of columns to display team members.', 'team-free') ?></p>
                    </div>
                </div>

                <div class="sp-single-meta">
                    <div class="sp-meta-th">
                        <label for="items_small_desktop"><?php esc_html_e( 'Column Number on Small Desktop', 'team-free' ) ?></label>
                    </div>
					<?php
					$default_value  = '3';
					$items_small_desktop = get_post_meta( $shortcode_id->ID, 'items_small_desktop', true );
					$items_small_desktop = $items_small_desktop ? $items_small_desktop : $default_value;
					?>
                    <div class="sp-meta-td">
                        <input type="number" name="items_small_desktop" id="items_small_desktop" class="items_small_desktop" value="<?php echo esc_html( $items_small_desktop ) ?>"/>
                        <p class="sp-meta-des"><?php esc_html_e('Number of columns to display team members on small desktop.', 'team-free') ?></p>
                    </div>
                </div>

                <div class="sp-single-meta">
                    <div class="sp-meta-th">
                        <label for="items_tablet"><?php esc_html_e( 'Column Number on Tablet', 'team-free' ) ?></label>
                    </div>
					<?php
					$default_value  = '2';
					$items_tablet = get_post_meta( $shortcode_id->ID, 'items_tablet', true );
					$items_tablet = $items_tablet ? $items_tablet : $default_value;
					?>
                    <div class="sp-meta-td">
                        <input type="number" name="items_tablet" id="items_tablet" class="items_tablet" value="<?php echo esc_html( $items_tablet ) ?>"/>
                        <p class="sp-meta-des"><?php esc_html_e('Number of columns to display team members on Tablet', 'team-free') ?></p>
                    </div>
                </div>

                <div class="sp-single-meta">
                    <div class="sp-meta-th">
                        <label for="items_mobile"><?php esc_html_e( 'Column Number on Mobile', 'team-free' ) ?></label>
                    </div>
					<?php
					$default_value  = '1';
					$items_mobile = get_post_meta( $shortcode_id->ID, 'items_mobile', true );
					$items_mobile = $items_mobile ? $items_mobile : $default_value;
					?>
                    <div class="sp-meta-td">
                        <input type="number" name="items_mobile" id="items_mobile" class="items_mobile" value="<?php echo esc_html( $items_mobile ) ?>"/>
                        <p class="sp-meta-des"><?php esc_html_e('Number of columns to display team members on Mobile.', 'team-free') ?></p>
                    </div>
                </div>

                <div class="sp-single-meta sp-only-for-pro">
                    <div class="sp-meta-th">
                        <label for="rtl"><?php esc_html_e( 'RTL', 'team-free' ) ?></label>
                    </div>
                    <div class="sp-meta-td">
                        <div style="display:inline-block;">The following fields are available in the <a href="https://shapedplugin.com/plugin/team-pro/" target="_blank">Pro version</a></div>
                        <br>
                        <br>
                        <ul>
                            <li><input disabled type="radio" name="rtl" value="true"><?php esc_html_e('Yes', 'team-free') ?></li>
                            <li><input disabled type="radio" name="rtl" value="false" checked><?php esc_html_e('No', 'team-free') ?></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="inside hidden">

                <div class="sp-single-meta">
                    <div class="sp-meta-th">
                        <label for="auto_play"><?php esc_html_e( 'Auto Play', 'team-free' ) ?></label>
                    </div>
					<?php
					$default_value = 'true';
					$auto_play     = get_post_meta( $shortcode_id->ID, 'auto_play', true );
					$auto_play     = $auto_play ? $auto_play : $default_value;
					?>
                    <div class="sp-meta-td">
                        <ul>
                            <li><input type="radio" name="auto_play" value="true" <?php checked( $auto_play, 'true' ) ?>><?php esc_html_e('Yes', 'team-free') ?></li>
                            <li><input type="radio" name="auto_play" value="false" <?php checked( $auto_play, 'false' ) ?>><?php esc_html_e('No', 'team-free') ?></li>
                        </ul>
                        <p class="sp-meta-des"><?php esc_html_e('AutoPlay team carousel.', 'team-free') ?></p>
                    </div>
                </div>

                <div class="sp-single-meta">
                    <div class="sp-meta-th">
                        <label for="pagination"><?php esc_html_e( 'Pagination', 'team-free' ) ?></label>
                    </div>
					<?php
					$default_value = 'false';
					$pagination     = get_post_meta( $shortcode_id->ID, 'pagination', true );
					$pagination     = $pagination ? $pagination : $default_value;
					?>
                    <div class="sp-meta-td">
                        <ul>
                            <li><input type="radio" name="pagination" value="true" <?php checked( $pagination, 'true' ) ?>><?php esc_html_e('Yes', 'team-free') ?></li>
                            <li><input type="radio" name="pagination" value="false" <?php checked( $pagination, 'false' ) ?>><?php esc_html_e('No', 'team-free') ?></li>
                        </ul>
                        <p class="sp-meta-des"><?php esc_html_e('Show / Hide pagination', 'team-free') ?></p>
                    </div>
                </div>

                <div class="sp-single-meta">
                    <div class="sp-meta-th">
                        <label for="navigation"><?php esc_html_e( 'Navigation', 'team-free' ) ?></label>
                    </div>
					<?php
					$default_value = 'true';
					$navigation     = get_post_meta( $shortcode_id->ID, 'navigation', true );
					$navigation     = $navigation ? $navigation : $default_value;
					?>
                    <div class="sp-meta-td">
                        <ul>
                            <li><input type="radio" name="navigation" value="true" <?php checked( $navigation, 'true' ) ?>><?php esc_html_e('Yes', 'team-free') ?></li>
                            <li><input type="radio" name="navigation" value="false" <?php checked( $navigation, 'false' ) ?>><?php esc_html_e('No', 'team-free') ?></li>
                        </ul>
                        <p class="sp-meta-des"><?php esc_html_e('Show / Hide navigation', 'team-free') ?></p>
                    </div>
                </div>

                <div class="sp-single-meta">
                    <div class="sp-meta-th">
                        <label for="stop_on_hover"><?php esc_html_e( 'Pause on hover', 'team-free' ) ?></label>
                    </div>
					<?php
					$default_value = 'true';
					$stop_on_hover     = get_post_meta( $shortcode_id->ID, 'stop_on_hover', true );
					$stop_on_hover     = $stop_on_hover ? $stop_on_hover : $default_value;
					?>
                    <div class="sp-meta-td">
                        <ul>
                            <li><input type="radio" name="stop_on_hover" value="true" <?php checked( $stop_on_hover, 'true' ) ?>><?php esc_html_e('Yes', 'team-free') ?></li>
                            <li><input type="radio" name="stop_on_hover" value="false" <?php checked( $stop_on_hover, 'false' ) ?>><?php esc_html_e('No', 'team-free') ?></li>
                        </ul>
                        <p class="sp-meta-des"><?php esc_html_e('Carousel pause on hover', 'team-free') ?></p>
                    </div>
                </div>

            </div>
            <div class="inside hidden">

                <div class="sp-single-meta">
                    <div class="sp-meta-th">
                        <label for="pagination_bg"><?php esc_html_e( 'Pagination Background', 'team-free' ) ?></label>
                    </div>
					<?php
					$default_value = '#cccccc';
					$pagination_bg     = get_post_meta( $shortcode_id->ID, 'pagination_bg', true );
					$pagination_bg     = $pagination_bg ? $pagination_bg : $default_value;
					?>
                    <div class="sp-meta-td">
                        <input type="text" class="sp-color-picker-field" name="pagination_bg" id="pagination_bg" value="<?php echo esc_html($pagination_bg) ?>">
                        <p class="sp-meta-des"><?php esc_html_e('Set pagination background color.', 'team-free')
                            ?></p>
                    </div>
                </div>

                <div class="sp-single-meta">
                    <div class="sp-meta-th">
                        <label for="pagination_active_bg"><?php esc_html_e( 'Pagination Active Background', 'team-free' ) ?></label>
                    </div>
					<?php
					$default_value = '#459fb5';
					$pagination_active_bg     = get_post_meta( $shortcode_id->ID, 'pagination_active_bg', true );
					$pagination_active_bg     = $pagination_active_bg ? $pagination_active_bg : $default_value;
					?>
                    <div class="sp-meta-td">
                        <input type="text" class="sp-color-picker-field" name="pagination_active_bg" id="pagination_active_bg" value="<?php echo esc_html($pagination_active_bg) ?>">
                        <p class="sp-meta-des"><?php esc_html_e('Set pagination active background color.', 'team-free') ?></p>
                    </div>
                </div>

                <div class="sp-single-meta">
                    <div class="sp-meta-th">
                        <label for="navigation_color"><?php esc_html_e( 'Navigation Color', 'team-free' ) ?></label>
                    </div>
					<?php
					$default_value = '#dddddd';
					$navigation_color     = get_post_meta( $shortcode_id->ID, 'navigation_color', true );
					$navigation_color     = $navigation_color ? $navigation_color : $default_value;
					?>
                    <div class="sp-meta-td">
                        <input type="text" class="sp-color-picker-field" name="navigation_color" id="navigation_color" value="<?php echo esc_html($navigation_color) ?>">
                        <p class="sp-meta-des"><?php esc_html_e('Set navigation arrow color.', 'team-free') ?></p>
                    </div>
                </div>

                <div class="sp-single-meta">
                    <div class="sp-meta-th">
                        <label for="navigation_border_color"><?php esc_html_e( 'Navigation Border Color', 'team-free' ) ?></label>
                    </div>
					<?php
					$default_value = '#dddddd';
					$navigation_border_color     = get_post_meta( $shortcode_id->ID, 'navigation_border_color', true );
					$navigation_border_color     = $navigation_border_color ? $navigation_border_color : $default_value;
					?>
                    <div class="sp-meta-td">
                        <input type="text" class="sp-color-picker-field" name="navigation_border_color" id="navigation_border_color" value="<?php echo esc_html($navigation_border_color) ?>">
                        <p class="sp-meta-des"><?php esc_html_e('Set navigation border color.', 'team-free') ?></p>
                    </div>
                </div>

                <div class="sp-single-meta">
                    <div class="sp-meta-th">
                        <label for="navigation_bg"><?php esc_html_e( 'Navigation Background', 'team-free' ) ?></label>
                    </div>
					<?php
					$default_value = '#ffffff';
					$navigation_bg     = get_post_meta( $shortcode_id->ID, 'navigation_bg', true );
					$navigation_bg     = $navigation_bg ? $navigation_bg : $default_value;
					?>
                    <div class="sp-meta-td">
                        <input type="text" class="sp-color-picker-field" name="navigation_bg" id="navigation_bg" value="<?php echo esc_html($navigation_bg) ?>">
                        <p class="sp-meta-des"><?php esc_html_e('Set navigation background color.', 'team-free')
                            ?></p>
                    </div>
                </div>

                <div class="sp-single-meta">
                    <div class="sp-meta-th">
                        <label for="navigation_hover_color"><?php esc_html_e( 'Navigation Hover Color', 'team-free' )
                            ?></label>
                    </div>
					<?php
					$default_value = '#ffffff';
					$navigation_hover_color     = get_post_meta( $shortcode_id->ID, 'navigation_hover_color', true );
					$navigation_hover_color     = $navigation_hover_color ? $navigation_hover_color : $default_value;
					?>
                    <div class="sp-meta-td">
                        <input type="text" class="sp-color-picker-field" name="navigation_hover_color" id="navigation_chover_olor" value="<?php echo esc_html($navigation_hover_color) ?>">
                        <p class="sp-meta-des"><?php esc_html_e('Set navigation arrow hover color.', 'team-free')
                            ?></p>
                    </div>
                </div>

                <div class="sp-single-meta">
                    <div class="sp-meta-th">
                        <label for="navigation_hover_border_color"><?php esc_html_e( 'Navigation Border Hover 
                        Color', 'team-free' ) ?></label>
                    </div>
					<?php
					$default_value = '#459fb5';
					$navigation_hover_border_color     = get_post_meta( $shortcode_id->ID, 'navigation_hover_border_color', true );
					$navigation_hover_border_color     = $navigation_hover_border_color ? $navigation_hover_border_color : $default_value;
					?>
                    <div class="sp-meta-td">
                        <input type="text" class="sp-color-picker-field" name="navigation_hover_border_color" id="navigation_hover_border_color" value="<?php echo esc_html($navigation_hover_border_color) ?>">
                        <p class="sp-meta-des"><?php esc_html_e('Set navigation border hover color.', 'team-free')
                            ?></p>
                    </div>
                </div>

                <div class="sp-single-meta">
                    <div class="sp-meta-th">
                        <label for="navigation_hover_bg"><?php esc_html_e( 'Navigation Hover Background', 'team-free' ) ?></label>
                    </div>
					<?php
					$default_value = '#459fb5';
					$navigation_hover_bg     = get_post_meta( $shortcode_id->ID, 'navigation_hover_bg', true );
					$navigation_hover_bg     = $navigation_hover_bg ? $navigation_hover_bg : $default_value;
					?>
                    <div class="sp-meta-td">
                        <input type="text" class="sp-color-picker-field" name="navigation_hover_bg" id="navigation_hover_bg" value="<?php echo esc_html($navigation_hover_bg) ?>">
                        <p class="sp-meta-des"><?php esc_html_e('Set navigation background hover color.', 'team-free')
                            ?></p>
                    </div>
                </div>

            </div>
        </div>
    </div>

<?php }


/**
 * The Shortcode
 */
function sp_team_free_shortcode_content_metabox() {
	global $post;
	echo '<p>Copy and paste this shortcode into your post, page or custom post editor:</p>';
	echo '<input type="text" name="sp-tf-shortcode" id="sp-tf-shortcode" value="[team-free id=&#x00022;' . $post->ID . '&#x00022;]" class="the-shortcode" size="30" readonly="readonly" onClick="this.select();" style="width: 100%;"/>';
	echo '<p>Copy and paste this code in your template files:</p>';
	echo '<input type="text" name="sp-tf-shortcode" id="sp-tf-shortcode" value="<?php  echo do_shortcode(\'[team-free id=&#x00022;' . $post->ID . '&#x00022; ]\'); ?>" class="the-shortcode" size="30" readonly="readonly" onClick="this.select();" style="width: 100%;"/>';
}