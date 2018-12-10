<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class PixneyExtensionWysiwygImageBlockCreateBlocksStream extends Migration
{
    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'blocks',
        'translatable' => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'classes',
        'content' => [
            'translatable' => true,
        ],
        'image',
    ];
}
