<?php

namespace designr;

class Heading extends \AcidWidget{
    
    function __construct() {
        
        $args = array(
            'id'            => 'designr_heading', // 1. Edit the widget ID
            'title'         => 'Designr: Heading', // 2. Edit the Widget Title
            'description'   => 'A widget to add a heading', // 3. Edit the widget description
            'output_file'   => get_plugin_path( 'inc/widgets/Heading/heading_view.php' ), // 4. Set the location of the frontend widget display
            'widget_title'  => false, // 5. Set to True if you want the built in Widget Title to be used
        );
        
        /**
        * Edit this array to specify your widget form fields
        * Make sure to set the ID to something easier for you to remember, 
        * Also set the type, which determines the datatype and form field type
        * 
        * This list is a sample of all possible options
        */
       $fields = array (
           
           'heading_content'    => array(
               'label'  => 'Content',
               'id'     => '',
               'default'=> '',
               'type'   => 'section',
           ),
           
           'title'  => array (
               'label' => 'Title',
               'id' => 'title',
               'default' => '',
               'type' => 'text',
           ),
           'subtitle'   => array (
               'label' => 'Sub-title',
               'id' => 'subtitle',
               'default' => '',
               'type' => 'textarea',
           ),
           
           'heading_appearance' => array(
               'label'  => 'Appearance',
               'id'     => '',
               'default'=> '',
               'type'   => 'section',
           ),           
           'bg_color'   => array (
               'label' => 'Background color',
               'id' => 'bg_color',
               'default' => '#ffffff',
               'type' => 'colorpicker',
           ),
           'text_align' => array(
               'label'  => 'Text align',
               'id'     => 'text_align',
               'default'=> 'center',
               'type'   => 'select',
               'options'=> array(
                   'left'       => 'Left',
                   'right'      => 'Right',
                   'center'   => 'Centered',
               )
           ),
           'text_color' => array (
               'label' => 'Text color',
               'id' => 'text_color',
               'default' => '#333333',
               'type' => 'colorpicker',
           ),
           'padding'    => array(
               'label'  => 'Vertical Padding',
               'id'     => 'padding',
               'default'=> '90',
               'type'   => 'number'
           ),

       );
        
        parent::__construct( $args, $fields );
        
    }
    
    
}

function register_heading_widget() {
    register_widget( 'designr\Heading' );
}

add_action( 'widgets_init', 'designr\register_heading_widget' );