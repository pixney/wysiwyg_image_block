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
        'slug' => 'blocks'
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'content',
        'image',
    ];
}
