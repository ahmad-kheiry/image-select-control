<?php
/**
 * Plugin Name:       Image Select Plugin
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       This plugin adds image select control to elementor
 * Version:           1.0
 * Requires at least: 5.0
 * Requires PHP:      7.2
 * Author:            Ahmad Kheiry
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       ak-plugin
 * Domain Path:       /languages
 */
if (!defined('ABSPATH'))
    exit;

add_action( 'elementor/controls/controls_registered', 'ak_plugin_init' );
function ak_plugin_init() {
    require_once(__DIR__.'/class-image-select.php');
    $controls_manager = \Elementor\Plugin::$instance->controls_manager;
    $controls_manager->register_control( 'image-select-control', new Ak_Image_Select_Control() );
}
/* Sample add contorl settings
$this->add_control(
    'image_select_control_test',
    [
        'label' =>esc_html__( 'Image URL', 'ak-plugin' ),
        'type' => 'image-select-control',
        'options' => array(
            'fade' => array(
                'label' => 'fade',
                'image' => 'path to image'
            ),
            'fade-up' => array(
                'label' => 'fade-up',
                'image' => 'path to image'
            ),
        )
    ]
);
*/
