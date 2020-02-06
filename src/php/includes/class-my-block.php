<?php
/**
 * Main plugin file.
 *
 * @package clorith\MyBlock
 */

namespace Clorith\MyBlock;

/**
 * Class My_Block
 * @package Clorith\MyBlock
 */
class MyBlock {

	/**
	 * Teft_Block_Library constructor.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'register_blocks' ) );
		add_action( 'enqueue_block_editor_assets', array( $this, 'enqueue_scripts' ) );
	}
	
	/**
	 * Register the blocks we will use.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function register_blocks() {
		// Register the block script.
		wp_register_script(
			'clorith-my-block',
			plugins_url( 'my-block/assets/js/app.js' ),
			array(
				'wp-blocks',
				'wp-element',
				'wp-components',
				'wp-editor',
				'wp-data',
			)
		);
		
		// Register our custom block
		register_block_type( 'clorith/my-block', array(
			'attributes'      => array(
				'align'     => array(
					'type' => 'string',
				),
			),
			'editor_script'   => 'clorith-my-block',
		) );
	}

	/**
	 * Register and enqueue scripts and styles.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function enqueue_scripts() {
		wp_enqueue_style( 'teft-block-library', plugins_url( 'teft-block-library/assets/styles/library.css' ) );
	}

}

new My_Block();
