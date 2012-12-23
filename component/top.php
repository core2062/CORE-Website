<?php
/**
 * Navigation Menu template functions
 *
 * @package WordPress
 * @subpackage Nav_Menus
 * @since 3.0.0
 */

/**
 * Create HTML list of nav menu items.
 *
 * @package WordPress
 * @since 3.0.0
 * @uses Walker
 */
class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
	/**
	 * @see Walker::$tree_type
	 * @since 3.0.0
	 * @var string
	 */
	var $tree_type = array( 'post_type', 'taxonomy', 'custom' );

	/**
	 * @see Walker::$db_fields
	 * @since 3.0.0
	 * @todo Decouple this.
	 * @var array
	 */
	var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );

	/**
	 * @see Walker::start_lvl()
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param int $depth Depth of page. Used for padding.
	 */
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$output .= "<ul class=\"sub-menu\">";
	}

	/**
	 * @see Walker::end_lvl()
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param int $depth Depth of page. Used for padding.
	 */
	function end_lvl( &$output, $depth = 0, $args = array() ) {
		$output .= "</ul>";
	}

	/**
	 * @see Walker::start_el()
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param object $item Menu item data object.
	 * @param int $depth Depth of menu item. Used for padding.
	 * @param int $current_page Menu item ID.
	 * @param object $args
	 */
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		//$classes[] = 'menu-item-' . $item->ID;

		$class_names = join(' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ));
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		//$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= '<li' . $id . $value . $class_names .'>';

		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';

		$item_output .= '<input type="radio" id="tab-' . $item->ID . '" name="group-' . $depth . '"><label for="tab-' . $item->ID . '">▼</label><div><input type="radio" id="tab-close-' . $depth . '" name="group-' . $depth . '"><label for="tab-close-' . $depth . '">▲</label></div>';
		//group should also contain the name of the menu
		//

		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

	/**
	 * @see Walker::end_el()
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param object $item Page data object. Not used.
	 * @param int $depth Depth of page. Not Used.
	 */
	function end_el( &$output, $item, $depth = 0, $args = array() ) {
		$output .= "</li>";
	}
}
?>

<div class="<?php echo (is_front_page() ? "header" : "header-short"); ?>">
	<a class="logo-click" href="<?php bloginfo('url'); ?>" title="Click here to go back to the main page."></a>
	<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	<?php if(is_front_page()):?>
		<div class="header-show">
			<div id="cu3er-container">
				<br />
				<br />
				<p>Hey there...it looks like you don't have a current version of flash installed on your computer..or you have it disabled. Sorry about the inconvenience. If you'd like to see the magical thing that should be where I am, please enable or install flash using the link below. Thanks! If you don't care, then just pretend I'm not here.</p>
				<br />
				<br />
				<a href="http://www.adobe.com/go/getflashplayer">
					<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
				</a>
			</div>
		</div>
	<?php else: ?>
		<div class="header-short-pic"></div>
	<?php endif; ?>

	<?php wp_nav_menu(array(
		'container' => false,
		'theme_location' => 'main-menu',
		'walker'=> new Custom_Walker_Nav_Menu
	));?>
</div>