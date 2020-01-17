<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
if (!class_exists('Ak_Image_Select_Control')) {
	class Ak_Image_Select_Control extends \Elementor\Base_Data_Control {
		public function get_type() {
			return 'image-select-control';
		}
		public function enqueue() {
			wp_register_style( 'ak-style', plugins_url( 'image-select-control/style.css' ) );
			wp_enqueue_style( 'ak-style');
		}

		public function content_template() {
			$control_uid = $this->get_control_uid();

			?>
			<div class="elementor-control-field" id="<?php echo esc_attr( $control_uid ); ?>">
				<label for="<?php echo esc_attr( $control_uid ); ?>" class="elementor-control-title">{{{ data.label }}}</label>
				<div class="elementor-visual-control-wrapper">
				<# _.each(data.options,function(option_params,option_value){ 
						var value = data.controlValue;
						if ( typeof value == 'string' ) {
							var selected = ( option_value === value ) ? 'selected' : '';
						} else if ( null !== value ) {
							var value = _.values( value );
							var selected = ( -1 !== value.indexOf( option_value ) ) ? 'selected' : '';
						}
					#>
					<div class='elementor-each-visual-control-wrapper'>
						<input id="<?php echo esc_attr( $control_uid ); ?>" type="radio" name="{{data.name}}" value="{{ option_value }}" data-setting="{{ data.name }}" {{selected}}>
						<img src="{{option_params.image}}" alt="{{option_params.label}}">
						<label>{{{option_params.label}}}</label>
					</div>
					<# }); #>
				</div>
                <# if ( data.description ) { #>
                <div class="elementor-control-field-description">{{{ data.description }}}</div>
                <# } #>
			</div>
			<?php
		}
	}
}
?>