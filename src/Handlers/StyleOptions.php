<?php

namespace Pixney\WysiwygImageBlockExtension\Handlers;

use Anomaly\SelectFieldType\SelectFieldType;

class StyleSelectOptions
{
    public function handle(SelectFieldType $fieldType)
    {
        $fieldType->setOptions(
            [
                '--color'    => 'With color background',
                '--no-color' => 'Without color background'
            ]
        );
    }
}
