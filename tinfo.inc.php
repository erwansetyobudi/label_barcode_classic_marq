<?php 
/**
 * @Created by          : Heru Subekti (heroe.soebekti@gmail.com)
 * @Date                : 26/11/20
 * @File name           : tinfo.inc.php
 */

$sysconf['plugin']['option'][$plugin_name] = [
    'barcode_dimension' => [
        'dbfield' => 'barcode_dimension',
        'label' => __('Global Configuration'),
        'type' => 'anything',
        'default' => '<div class="alert alert-info">Contains global rules, label size, fonts use, etc.</div>'
    ], 
    'barcode_fonts' => [
        'dbfield' => 'barcode_fonts',
        'label' => __('Fonts'),
        'type' => 'dropdown',
        'default' => $sysconf[$plugin_name]['barcode_fonts']??'Arial',
        'data' => [
            ['Georgia', __('Georgia')],
            ['\'Palatino Linotype\', \'Book Antiqua\', Palatino, serif', __('Palatino Linotype')],
            ['\'Times New Roman\', Times, serif', __('Times New Roman')],
            ['Arial, Helvetica, sans-serif', __('Arial')],            
            ['\'Arial Black\', Gadget, sans-serif', __('Arial Black')],
            ['\'Comic Sans MS\', cursive, sans-serif', __('Comic Sans MS')],
            ['Impact, Charcoal, sans-serif', __('Impact')],
            ['\'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif', __('Lucida Sans Unicode')],
            ['Verdana, Geneva, sans-serif', __('Verdana')],            
            ['\'Trebuchet MS\', Helvetica, sans-serif', __('Trebuchet MS')],
            ['Tahoma, Geneva, sans-serif', __('Tahoma')],
            ['\'Courier New\', Courier, monospace', __('Courier New')],
            ['\'Lucida Console\', Monaco, monospace', __('Lucida Console')],
        ]
    ],   
    'barcode_font_size' => [
        'dbfield' => 'barcode_font_size',
        'label' => __('Font Size').' <small><i>(pt)</i></small>',
        'type' => 'text',
        'width' => '15',
        'default' => $sysconf[$plugin_name]['barcode_font_size']??'12'
    ],
    'barcode_page_margin' => [
        'dbfield' => 'barcode_page_margin',
        'label' => __('Page Margin').' <small><i>(mm)</i></small>',
        'type' => 'text',
        'width' => '15',
        'default' => $sysconf[$plugin_name]['barcode_page_margin']??'2'
    ],
    'barcode_items_per_row' => [
        'dbfield' => 'barcode_items_per_row',
        'label' => __('Items Per Row').' <small><i>(items)</i></small>',
        'type' => 'text',
        'width' => '15',
        'default' => $sysconf[$plugin_name]['barcode_items_per_row']??'2'
    ],
    'barcode_items_margin' => [
        'dbfield' => 'barcode_items_margin',
        'label' => __('Items Margin').' <small><i>(mm)</i></small>',
        'type' => 'text',
        'width' => '15',
        'default' => $sysconf[$plugin_name]['barcode_items_margin']??'1'
    ],    
    'barcode_box_height' => [
        'dbfield' => 'barcode_box_height',
        'label' => __('Box Height').' <small><i>(mm)</i></small>',
        'type' => 'text',
        'width' => '15',
        'default' => $sysconf[$plugin_name]['barcode_box_height']??'55'
    ],
    'barcode_box_width' => [
        'dbfield' => 'barcode_box_width',
        'label' => __('Box Width').' <small><i>(mm)</i></small>',
        'type' => 'text',
        'width' => '15',
        'default' => $sysconf[$plugin_name]['barcode_box_width']??'130'
    ],
    'barcode_border_size' => [
        'dbfield' => 'barcode_border_size',
        'label' => __('Border Size').' <small><i>(px)</i></small>',
        'type' => 'text',
        'width' => '15',
        'default' => $sysconf[$plugin_name]['barcode_border_size']??'3'
    ],
    'barcode_border_color' => [
        'dbfield' => 'barcode_border_color',
        'label' => __('Border Color<br><small>hex color</small>'),
        'type' => 'text',
        'width' => '50',        
        'default' => $sysconf[$plugin_name]['barcode_border_color']??'#000',
        'class' => 'colorpicker'
    ],
    'callnumber_section' => [
        'dbfield' => 'callnumber_section',
        'label' => __('Callnumber Section'),
        'type' => 'anything',
        'default' => '<div class="alert alert-info">Configurations for call number field, size, position, and layout.</div>'
    ],
    'callnumber_align' => [
        'dbfield' => 'callnumber_align',
        'label' => __('Callnumber Text Align').'',
        'type' => 'dropdown',
        'default' => $sysconf[$plugin_name]['callnumber_align']??'center',
        'data' => [
            ['center', __('Center')],
            ['right', __('Right')],
            ['left', __('Left')]
        ]
    ], 
    'callnumber_padding_size' => [
        'dbfield' => 'callnumber_padding_size',
        'label' => __('Callnumber Padding Size').' <small><i>(mm)</i></small>',
        'type' => 'text',
        'width' => '15',
        'default' => $sysconf[$plugin_name]['callnumber_padding_size']??'20'
    ],       
    'callnumber_font_size' => [
        'dbfield' => 'callnumber_font_size',
        'label' => __('Callnumber Fonts Size').' <small><i>(pt)</i></small>',
        'type' => 'text',
        'width' => '15',
        'default' => $sysconf[$plugin_name]['callnumber_font_size']??'13'
    ],  
    'header_section' => [
        'dbfield' => 'header_section',
        'label' => __('Header Section'),
        'type' => 'anything',
        'default' => '<div class="alert alert-info">Configurations for header field, size, color, and look.</div>'
    ],                 
    'barcode_include_header_text' => [
        'dbfield' => 'barcode_include_header_text',
        'label' => __('Include Header Text'),
        'type' => 'dropdown',
        'default' => $sysconf[$plugin_name]['barcode_include_header_text']??'1',
        'data' => [
            ['1', __('Yes')],
            ['0', __('No')]
        ]
    ],
    'barcode_header_text' => [
        'dbfield' => 'barcode_header_text',
        'label' => __('Header Text'),
        'type' => 'longtext',
        'default' => $sysconf[$plugin_name]['barcode_header_text']??'',
        'width' => '100',
        'class' => 'ckeditor',
        'max' => 1000
    ], 
    'header_font_size' => [
        'dbfield' => 'header_font_size',
        'label' => __('Header Fonts Size').' <small><i>(pt)</i></small>',
        'type' => 'text',
        'width' => '12',   
        'default' => $sysconf[$plugin_name]['header_font_size']??'10'
    ],
    'barcode_section' => [
        'dbfield' => 'barcode_section',
        'label' => __('Barcode Section'),
        'type' => 'anything',
        'default' => '<div class="alert alert-info">Configuration for barcode field.</div>'
    ], 
    'barcode_type' => [
        'dbfield' => 'barcode_type',
        'label' => __('Code Type'),
        'type' => 'dropdown',
        'default' => $sysconf[$plugin_name]['barcode_type']??'qr',
        'data' => [
            ['bar', __('Barcode')],
            ['qr', __('QRCode')]
        ]
    ],
    'barcode_position' => [
        'dbfield' => 'barcode_position',
        'label' => __('Barcode Position'),
        'type' => 'dropdown',
        'default' => $sysconf[$plugin_name]['barcode_position']??'right',
        'data' => [
            ['left', __('Left')],
            ['right', __('Right')]
        ]
    ],
    'barcode_rotate' => [
        'dbfield' => 'barcode_rotate',
        'label' => __('Barcode Rotation'),
        'type' => 'dropdown',
        'default' => $sysconf[$plugin_name]['barcode_rotate']??'',
        'data' => [
            ['cc', __('Clockwise')],
            ['cw', __('Counter Clockwise')],
            ['', __('Landscape')]            
        ]
    ], 
    'barcode_col_size' => [
        'dbfield' => 'barcode_col_size',
        'label' => __('Barcode Column Size').' <small><i>(mm)</i></small>',
        'type' => 'text',
        'width' => '15', 
        'default' => $sysconf[$plugin_name]['barcode_col_size']??'65'
    ],     
    'barcode_scale' => [
        'dbfield' => 'barcode_scale',
        'label' => __('Barcode Scale').' <small><i>(%)</i></small>',
        'type' => 'text',
        'width' => '15',
        'default' => $sysconf[$plugin_name]['barcode_scale']??'75'
    ],
    'barcode_cut_title' => [
        'dbfield' => 'barcode_cut_title',
        'label' => __('Cut Title').' <small><i>(character)</i></small>',
        'type' => 'text',
        'width' => '15',
        'default' => $sysconf[$plugin_name]['barcode_cut_title']??'25'
    ],
    'barcode_position' => [
        'dbfield' => 'barcode_position',
        'label' => __('Barcode Position'),
        'type' => 'dropdown',
        'default' => $sysconf[$plugin_name]['barcode_position']??'right',
        'data' => [
            ['left', __('Left')],
            ['right', __('Right')]
        ]
    ],
    'color_section' => [
        'dbfield' => 'color_section',
        'label' => __('Custom Header Color'),
        'type' => 'anything',
        'default' => '<div class="alert alert-info">Make color adjusment to header for classification.</div>'
    ],   
    'color_header' => [
        'dbfield' => 'color_header',
        'label' => __('Color Header'),
        'type' => 'dropdown',
        'default' => $sysconf[$plugin_name]['color_header']??'1',
        'data' => [
            ['1', __('Yes')],
            ['0', __('No')]
        ]
    ],        
    'class_0' => [
        'dbfield' => 'class_0',
        'label' => '<div style="background-color:'.($sysconf[$plugin_name]['class_0']??'#e35c5c').';padding:5px;">'.__('Class 000').'</div>',
        'type' => 'text',
        'width' => '50',        
        'default' => $sysconf[$plugin_name]['class_0']??'#000080',
        'class' => 'colorpicker'
    ],    
    'class_1' => [
        'dbfield' => 'class_1',
        'label' => '<div style="background-color:'.($sysconf[$plugin_name]['class_1']??'#a343dc').';padding:5px;">'.__('Class 100'),
        'type' => 'text',
        'width' => '50',        
        'default' => $sysconf[$plugin_name]['class_1']??'#DC143C',
        'class' => 'colorpicker'
    ],     
    'class_2' => [
        'dbfield' => 'class_2',
        'label' => '<div style="background-color:'.($sysconf[$plugin_name]['class_2']??'#2ee8c9').';padding:5px;">'.__('Class 200').'</div>',
        'type' => 'text',
        'width' => '50',        
        'default' => $sysconf[$plugin_name]['class_2']??'#4CBB17',
        'class' => 'colorpicker'
    ],
    'class_2x' => [
        'dbfield' => 'class_2x',
        'label' => '<div style="background-color:'.($sysconf[$plugin_name]['class_2x']??'#57cc12').';padding:5px;">'.__('Class 2X0').'</div>',
        'type' => 'text',
        'width' => '50',        
        'default' => $sysconf[$plugin_name]['class_2x']??'#57cc12',
        'class' => 'colorpicker'
    ],           
    'class_3' => [
        'dbfield' => 'class_3',
        'label' => '<div style="background-color:'.($sysconf[$plugin_name]['class_3']??'#e8d82e').';padding:5px;">'.__('Class 300').'</div>',
        'type' => 'text',
        'width' => '50',        
        'default' => $sysconf[$plugin_name]['class_3']??'#FFFF33',
        'class' => 'colorpicker'
    ], 
    'class_4' => [
        'dbfield' => 'class_4',
        'label' => '<div style="background-color:'.($sysconf[$plugin_name]['class_4']??'#f5822b').';padding:5px;">'.__('Class 400').'</div>',
        'type' => 'text',
        'width' => '50',        
        'default' => $sysconf[$plugin_name]['class_4']??'#4169E1',
        'class' => 'colorpicker'
    ],    
    'class_5' => [
        'dbfield' => 'class_5',
        'label' => '<div style="background-color:'.($sysconf[$plugin_name]['class_5']??'#5069c5').';padding:5px;">'.__('Class 500').'</div>',
        'type' => 'text',
        'width' => '50',        
        'default' => $sysconf[$plugin_name]['class_5']??'#CC5500',
        'class' => 'colorpicker'
    ],     
    'class_6' => [
        'dbfield' => 'class_6',
        'label' => '<div style="background-color:'.($sysconf[$plugin_name]['class_6']??'#c775b4').';padding:5px;">'.__('Class 600').'</div>',
        'type' => 'text',
        'width' => '50',        
        'default' => $sysconf[$plugin_name]['class_6']??'#660066',
        'class' => 'colorpicker'
    ],     
    'class_7' => [
        'dbfield' => 'class_7',
        'label' => '<div style="background-color:'.($sysconf[$plugin_name]['class_7']??'#c3f30e').';padding:5px;">'.__('Class 700').'</div>',
        'type' => 'text',
        'width' => '50',        
        'default' => $sysconf[$plugin_name]['class_7']??'#FF00FF',
        'class' => 'colorpicker'
    ],  
    'class_8' => [
        'dbfield' => 'class_8',
        'label' => '<div style="background-color:'.($sysconf[$plugin_name]['class_8']??'#caa030').';padding:5px;">'.__('Class 800').'</div>',
        'type' => 'text',
        'width' => '50',        
        'default' => $sysconf[$plugin_name]['class_8']??'#008080',
        'class' => 'colorpicker'
    ],    
    'class_9' => [
        'dbfield' => 'class_9',
        'label' => '<div style="background-color:'.($sysconf[$plugin_name]['class_9']??'#9d7afa').';padding:5px;">'.__('Class 900').'</div>',
        'type' => 'text',
        'width' => '50',        
        'default' => $sysconf[$plugin_name]['class_9']??'#AA4A44',
        'class' => 'colorpicker',
    ],        
    'class_other' => [
        'dbfield' => 'class_other',
        'label' => '<div style="background-color:'.($sysconf[$plugin_name]['class_other']??'#ffffff').';padding:5px;">'.__('Other Class').'</div>',
        'type' => 'text',
        'width' => '50',        
        'default' => $sysconf[$plugin_name]['class_other']??'#9d7afa',
        'class' => 'colorpicker'
    ],  
    'restore' => [
        'dbfield' => 'restore',
        'label' => __('Restore'),
        'type' => 'anything',
        'default' => '<div class=""><a href="'.$php_self.'_reset">Restore default settings</a></div>'
    ],               
];
