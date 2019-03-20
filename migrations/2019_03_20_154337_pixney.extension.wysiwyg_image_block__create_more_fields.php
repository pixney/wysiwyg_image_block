<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class PixneyExtensionWysiwygImageBlockCreateMoreFields extends Migration
{
    protected $delete = false;

    protected $stream = [
        'slug' => 'blocks',
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'style',
    ];

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'style' => [
            'type'   => 'anomaly.field_type.select',
            'config' => [
                'handler'       => \Pixney\WysiwygImageBlockExtension\Handlers\StyleSelectOptions::class,
            ]
        ]
    ];
}
