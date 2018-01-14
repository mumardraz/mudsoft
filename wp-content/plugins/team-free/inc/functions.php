<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}  // if direct access

/**
 * Functions
 */
class SP_Team_Free_Functions{

	/**
	 * Initialize the class
	 */
	public function __construct() {
		add_action( 'plugins_loaded', array( $this, 'sp_team_free_load_text_domain' ) );
		add_action( 'init', array( $this, 'sp_team_free_register_post_type' ) );
		add_action( 'init', array( $this, 'sp_team_free_shortcode_generator' ) );
		add_action( 'admin_menu', array($this, 'admin_menu') );
	}

	/**
	 * Load Text Domain
	 */
	public function sp_team_free_load_text_domain() {
		load_plugin_textdomain( 'team-free', false, plugin_basename( dirname( __FILE__ ) ) . '/languages/' );
	}

	/**
	 * Register a team_free post type
	 */
	function sp_team_free_register_post_type() {

		$labels = array(
			'name'               => esc_html__( 'Team Members', 'team-free' ),
			'singular_name'      => esc_html__( 'Team Member', 'team-free' ),
			'add_new'            => esc_html__( 'Add New Member', 'team-free' ),
			'add_new_item'       => esc_html__( 'Add New Team Member', 'team-free' ),
			'edit_item'          => esc_html__( 'Edit Team Member', 'team-free' ),
			'new_item'           => esc_html__( 'New Team Member', 'team-free' ),
			'all_items'          => esc_html__( 'All Team Members', 'team-free' ),
			'view_item'          => esc_html__( 'View Team Member', 'team-free' ),
			'search_items'       => esc_html__( 'Search Team Members', 'team-free' ),
			'not_found'          => esc_html__( 'No Team Members found', 'team-free' ),
			'not_found_in_trash' => esc_html__( 'No Team Members found in Trash', 'team-free' ),
			'parent_item_colon'  => esc_html__( 'Parent Team Member:', 'team-free' ),
			'menu_name'          => esc_html__( 'Team', 'team-free' ),
		);

		$args = array(
			'labels'              => $labels,
			'hierarchical'        => false,
			'description'         => 'description',
			'taxonomies'          => array(),
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 20,
			'menu_icon'          => SP_TEAM_FREE_URL . 'assets/images/icon.png',
			'show_in_nav_menus'   => true,
			'publicly_queryable'  => false,
			'exclude_from_search' => false,
			'has_archive'         => true,
			'query_var'           => true,
			'can_export'          => true,
			'rewrite'             => true,
			'capability_type'     => 'post',
			'supports'           => array( 'title', 'thumbnail' )
		);

		register_post_type( 'team_free', $args );

	}

	/**
	 * ShortCode Generator
	 */
	public function sp_team_free_shortcode_generator() {

		register_post_type( 'team_free_shortcodes', array(
			'label'           => esc_html__( 'Shortcode Generator', 'team-free' ),
			'public'          => false,
			'show_ui'         => true,
			'show_in_menu'    => false,
			'hierarchical'    => false,
			'query_var'       => false,
			'supports'        => array('title'),
			'capability_type' => 'post',
			'labels' => array(
				'name'               => esc_html__( 'Shortcode Generator', 'team-free' ),
				'singular_name'      => esc_html__( 'Generate Shortcode', 'team-free' ),
				'menu_name'          => esc_html__( 'Generate Shortcode', 'team-free' ),
				'add_new'            => esc_html__( 'Add New Shortcode', 'team-free' ),
				'add_new_item'       => esc_html__( 'Generate New Shortcode', 'team-free' ),
				'edit'               => esc_html__( 'Edit', 'team-free' ),
				'edit_item'          => esc_html__( 'Edit Shortcode', 'team-free' ),
				'new_item'           => esc_html__( 'New Shortcode', 'team-free' ),
				'view'               => esc_html__( 'View Shortcode', 'team-free' ),
				'view_item'          => esc_html__( 'View Shortcode', 'team-free' ),
				'search_items'       => esc_html__( 'Search Shortcode', 'team-free' ),
				'not_found'          => esc_html__( 'No Shortcode Found', 'team-free' ),
				'not_found_in_trash' => esc_html__( 'No Shortcode Found in Trash', 'team-free' ),
				'parent'             => esc_html__( 'Parent Shortcode', 'team-free' ),
			),
		) );
	}

	/**
	 * Sdd SubMenu
	 */
	function admin_menu() {
		add_submenu_page( 'edit.php?post_type=team_free', esc_html__( 'Shortcode Generator', 'team-free' ), esc_html__( 'Shortcode Generator', 'team-free' ), 'manage_options', 'edit.php?post_type=team_free_shortcodes' );
		add_submenu_page( 'edit.php?post_type=team_free', esc_html__( 'Support', 'team-free' ), esc_html__( 'Support', 'team-free' ), 'manage_options', 'sp_team_free_support_page', 'sp_team_free_support_page_callback' );
	}

}
new SP_Team_Free_Functions();

/**
 * Include files
 */
require_once( SP_TEAM_FREE_PATH . "inc/metabox/meta-box.php" );


/**
 * Member image size
 */
add_theme_support( 'post-thumbnails' );
add_image_size( 'tp-member-image', 370, 380, true );


/**
 * ShortCode Column
 */
function sp_tf_add_shortcode_column( $columns ) {
	return array_merge( $columns,
		array( 'shortcode' => esc_html__( 'Shortcode', 'team-free' ) ) );
}
add_filter( 'manage_team_free_shortcodes_posts_columns' , 'sp_tf_add_shortcode_column' );

/**
 * ShortCode Column Form
 */
function sp_tf_add_shortcode_form( $column, $post_id ) {
	if ($column == 'shortcode'){ ?>
		<input style="width: 270px;padding: 6px;" type="text" onClick="this.select();" readonly="readonly" value="[team-free <?php echo 'id=&quot;'.$post_id .'&quot;';?>]" />
		<?php
	}
}
add_action( 'manage_team_free_shortcodes_posts_custom_column' , 'sp_tf_add_shortcode_form', 10, 2 );

/**
 * Support page callback
 */
function sp_team_free_support_page_callback(){ ?>
    <div class="wrap sp-support-page">
        <h2>Support</h2>
        <div class="postbox">
            <div class="sp-support-section">
                <h3>Support</h3>
                <p>If you need any help regarding the plugin, please don't hesitate to <a href="mailto:support@shapedplugin.com?Subject=Team%20Free">contact us</a>.</p>
            </div>
            <div class="sp-support-section">
                <h3>Submit a Review</h3>
                <p>If you like this plugin, please <a href="https://wordpress.org/support/plugin/team-free/reviews/?filter=5#new-post" target="_blank">give us 5 <i class="dashicons-before dashicons-star-filled"></i><i class="dashicons-before dashicons-star-filled"></i><i class="dashicons-before dashicons-star-filled"></i><i class="dashicons-before dashicons-star-filled"></i><i class="dashicons-before dashicons-star-filled"></i> star</a> to encourage for future improvement of this plugin. If you face any issue with the plugin, please <a href="mailto:support@shapedplugin.com?Subject=Team%20Free">let us know</a> before leaving a review. We'll try definitely to help you.</p>
            </div>
        </div>
    </div>
<?php }