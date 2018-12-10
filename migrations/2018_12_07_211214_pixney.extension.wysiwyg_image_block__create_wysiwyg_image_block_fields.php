<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class PixneyExtensionWysiwygImageBlockCreateWysiwygImageBlockFields extends Migration
{
    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'classes' => 'anomaly.field_type.text',
        'content' => [
            'type'   => 'anomaly.field_type.wysiwyg',
            'name'   => 'content',
            'locked' => false,
            'config' => [
                'default_value' => null,

                'buttons' => [
                    'format',
                    'bold',
                    'italic',
                    'lists',
                    'link',
                    'underline',
                ],
                'configuration' => '',
                'plugins'       => ['alignment', 'source'],
                'line_breaks'   => false,
                'sync'          => true,
                'height'        => 300,
            ]
        ],
        'image'   => [
            'type'   => 'anomaly.field_type.image',
            'config' => [
                'folders'       => null,
                'aspect_ratio'  => '1:1',
                'min_height'    => 400
            ]
        ]
    ];
}
