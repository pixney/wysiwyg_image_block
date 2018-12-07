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
        'content' => 'anomaly.field_type.wysiwyg',
        'image'   => 'anomaly.field_type.image',
    ];
}
