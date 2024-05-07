<?php
/**
 * Bind the data to the block
 *
 * @package TenUp\DataLayer
 */

namespace TenUp\DataLayer\Blocks\Core\NavigationLink;

/**
 * Set up blocks
 *
 * @return void
 */
function setup() {
	$n = function( $function ) {
		return __NAMESPACE__ . "\\$function";
	};

	add_filter( 'render_block_core/navigation-link', $n( 'render' ), 10, 2 );
}

/**
 * Add tracking to navigation link blocks.
 *
 * @param string $block_content The block content about to be rendered.
 * @param array $block The block data being rendered.
 * @param WP_Block $instance The block instance being rendered.
 * @return void
 */
function render( $block_content, $block ) {
	$label = $block['attrs']['label'] ?? '';
	$url   = $block['attrs']['url'] ?? '';

	$processor = new \WP_HTML_Tag_Processor( $block_content );

	$processor->next_tag( 'A' );
	$processor->set_attribute( 'data-ga-event-label', $label );

	$datalayer = [
		'event'     => 'navigation',
		'clickText' => $label,
	];

	$processor->set_attribute( 'data-datalayer', esc_attr( wp_json_encode( $datalayer ) ) );

	return $processor->get_updated_html();
}