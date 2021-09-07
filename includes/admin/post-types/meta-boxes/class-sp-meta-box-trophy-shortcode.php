<?php
/**
 * Trophy Shortcode
 *
 * @author 		ThemeBoy
 * @category 	Admin
 * @package 	SportsPress/Admin/Meta_Boxes
 * @version   2.8
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * SP_Meta_Box_Trophy_Shortcode
 */
class SP_Meta_Box_Trophy_Shortcode {

	/**
	 * Output the metabox
	 */
	public static function output( $post ) {
		$the_format = get_post_meta( $post->ID, 'sp_format', true );
		if ( ! $the_format ) $the_format = 'trophies';
		?>
		<p class="howto">
			<?php _e( 'Copy this code and paste it into your post, page or text widget content.', 'sportspress' ); ?>
		</p>
		<p><input type="text" value="<?php sp_shortcode_template( 'team_' . $the_format, $post->ID ); ?>" readonly="readonly" class="code widefat"></p>
		<?php
	}
}