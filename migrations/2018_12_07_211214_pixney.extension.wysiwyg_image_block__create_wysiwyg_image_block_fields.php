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
        'content' => 'anomaly.field_type.wysiwyg',
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
