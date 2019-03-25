<?php

return [
    'block' => [
        'fields' => []
    ],
    'options' => [
        'stacked' => true,
        'tabs'    => [
            'config'  => [
                'title'   => 'Content',
                'fields'  => [
                    'entry_content',
                ],
            ],
            'content' => [
                'title'   => 'Image',
                'fields'  => [
                    'entry_image',
                ],
            ],
            'style' => [
                'title'   => 'Style',
                'fields'  => [
                    'entry_style',
                    'entry_classes',
                ],
            ],
        ]
    ]
];
