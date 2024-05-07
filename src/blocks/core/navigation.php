<?php
/**
 * Bind the data to the block
 *
 * @package TenUp\DataLayer
 */

namespace TenUp\DataLayer\Blocks\Core\Navigation;

/**
 * Set up blocks
 *
 * @return void
 */
function setup() {
	$n = function( $function ) {
		return __NAMESPACE__ . "\\$function";
	};

	add_filter( 'render_block_core/navigation', $n( 'render' ), 10, 2 );
}

/**
 * Add tracking to navigation blocks.
 *
 * @param string $block_content The block content about to be rendered.
 * @param array $block The block data being rendered.
 * @param WP_Block $instance The block instance being rendered.
 * @return void
 */
function render( $block_content, $block ) {
    $is_main_navigation = $block['attrs']['className'] === 'sidebar__primary-menu';

	$processor = new \WP_HTML_Tag_Processor( $block_content );

	$index = 0;

	/**
	 * We go through each anchor tag in the navigation block and add the necessary shared attributes.
	 * We add item specific attributes in the next filter.
	 */
	while ( $processor->next_tag( 'A' ) ) {
		$processor->set_attribute( 'data-ga-event-category', 'global navigation' );
		$processor->set_attribute( 'data-ga-event-action', 'click' );
	}

	return $processor->get_updated_html();
}