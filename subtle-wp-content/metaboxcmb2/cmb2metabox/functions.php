<?php
// CMB2 Meta Box



function bravo_meta_box(array $tanmoy_text_box){

      $prefix = "_fifteen";

      $tanmoy_text_box[] = array(
          'id' => 'first-section',
          'title' => 'What is this post all about ?',
          'object_types' => array('post'),
          'fields' => array(
              array(
                    'name' => 'Type Your Opinion',
                    'type' => 'text',
                    'id' => $prefix.'bravo-opinion',
              ),
              array(
                    'name' => 'Type Your Opinion Two',
                    'type' => 'text_small',
                    'id' => $prefix.'bravo-opinion2',
              ),
              array(
                    'name' => 'Type Your Email Address',
                    'type' => 'text_email',
                    'id' => $prefix.'your-email',
              ),
              array(
                    'name' => 'Select Your Color',
                    'type' => 'colorpicker',
                    'id' => $prefix.'your-color',
              ),
              array(
                    'name' => 'Select Your Time Zone',
                    'type' => 'select_timezone',
                    'id' => $prefix.'your-time-zone',
              ),
              array(
                    'name' => 'Select Your Gender',
                    'type' => 'radio',
                    'id' => $prefix.'my-gender',
                    'options' => array(
                        'Male' => 'Male',
                        'Female' => 'Female'
                    ),
                    'default' => 'Male'
              ),
              array(
                    'name' => 'Tanmoy This is your Editor',
                    'type' => 'wysiwyg',
                    'id' => $prefix.'your-wysiwyg',
              ),
              array(
                    'name' => 'Upload Your File',
                    'type' => 'file',
                    'id' => $prefix.'your-uploded-file',
              ),


          )

      );

      return $tanmoy_text_box;

}
add_filter('cmb2_meta_boxes', 'bravo_meta_box');
