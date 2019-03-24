<?php

namespace Pixney\WysiwygImageBlockExtension\Block\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

class BlockFormBuilder extends FormBuilder
{
    /**
     * The form fields.
     *
     * @var array|string
     */
    protected $fields = [];

    /**
     * Additional validation rules.
     *
     * @var array|string
     */
    protected $rules = [];

    /**
     * Fields to skip.
     *
     * @var array|string
     */
    protected $skips = [];

    /**
     * The form actions.
     *
     * @var array|string
     */
    protected $actions = [];

    /**
     * The form buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        'cancel',
    ];

    /**
     * The form options.
     *
     * @var array
     */
    protected $options = [];

    /**
     * The form sections.
     *
     * @var array
     */
    protected $sections = [
        'license'       => [
            'fields' => [
                'entry_content',
            ],
        ],
        'database'      => [
            'fields' => [
                //'entry_image',
                'entry_style',
            ]
        ]
    ];

    //'view' => 'pixney.extension.wysiwyg_image_block::admin/layout'
    // 'general' => [
    //     'view' => 'pixney.extension.wysiwyg_image_block::admin/layout'
    // ]
    // 'general'      => [
    //     'view'  => 'module::form/general',
    // ],
    // 'advanced'      => [
    //     'view'  => 'module::form/advanced',
    // ],

    /**
     * The form assets.
     *
     * @var array
     */
    protected $assets = [
        'styles.css' => [
            'pixney.extension.wysiwyg_image_block::scss/input.scss',
        ],
    ];
}
