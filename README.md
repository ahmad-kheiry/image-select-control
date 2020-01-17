# image-select-control
This plugin handles adding image select control to elementor plugin.
Just install this plugin like other plugins of wordpress and after that image select control is ready.

The sample structure of this control is like below :

$this->add_control(
    'image_select_control_test',
    [
        'label' =>esc_html__( 'Image URL', 'pinkmart' ),
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

