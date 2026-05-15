<?php
/**
 * Pro customizer section.
 * All code, unless otherwise noted, is licensed under the GNU GPL, version 2 or later. 2017 © Justin Tadlock.
 * @since  1.0.0
 * @access public
 */
class Coming_Soon_Lite_Customize_Section_Pro extends WP_Customize_Section {

	/**
	 * The type of customize section being rendered.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $type = 'coming-soon-lite';

	/**
	 * Custom button text to output.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $pro_text = '';

	/**
	 * Custom pro button URL.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $pro_url = '';

	/**
	 * Add custom parameters to pass to the JS via JSON.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function json() {
		$json = parent::json();

		$json['pro_text'] = $this->pro_text;
		$json['pro_url']  = esc_url( $this->pro_url );

		return $json;
	}

	/**
	 * Outputs the Underscore.js template.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	protected function render_template() { ?>

		<li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }} cannot-expand">
			<div class="discount-banner" style="background: #fffaeb; border: 2px dashed #ff0000;border-radius: 10px; margin: 10px; padding: 10px;text-align: center;">
				<p class="discount-banner-text" style="color: #ff0000; font-size: 16px; font-weight: bold; margin: 0; padding: 10px;">
					Get Extra Discount
				</p>
				<p class="discount-banner-subtext" style="color: #000000;font-size: 14px;margin: 0;padding: 0 10px 10px;line-height: 2;">
					Use code & Save 15% OFF!
					<strong style="color: #ffffff;font-weight: bold;background: #ff0000;padding: 4px 10px;">FREEWORDTHEME</strong>
				</p>
			</div>
			<h3 class="accordion-section-title">
				{{ data.title }}

				<# if ( data.pro_text && data.pro_url ) { #>
					<a href="{{ data.pro_url }}" class="button button-secondary alignright" target="_blank">{{ data.pro_text }}</a>
				<# } #>
			</h3>
		</li>
	<?php }
}