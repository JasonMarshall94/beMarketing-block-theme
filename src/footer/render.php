<?php

/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<footer <?php echo get_block_wrapper_attributes(); ?>>
	<?php esc_html_e('Header – hello from a dynamic block!', 'header'); ?>
</footer>