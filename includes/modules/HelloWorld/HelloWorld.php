<?php

class MYFE_HelloWorld extends ET_Builder_Module {

	public $slug       = 'myfe_hello_world';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => 'www.tacticalengine.com',
		'author'     => 'Adnan Usman',
		'author_uri' => 'www.tacticalengine.com',
	);

	public function init() {
		$this->name = esc_html__( 'Hello World', 'myfe-my-first-extension' );
	}

	public function get_fields() {
		return array(
			'content' => array(
				'label'           => esc_html__( 'Content', 'myfe-my-first-extension' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear inside the module.', 'myfe-my-first-extension' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {
		return sprintf( '<h1>%1$s</h1>', $this->props['content'] );
	}
}

new MYFE_HelloWorld;
