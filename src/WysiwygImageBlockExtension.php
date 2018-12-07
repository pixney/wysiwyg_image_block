<?php

namespace Pixney\WysiwygImageBlockExtension;

use Anomaly\BlocksModule\Block\BlockExtension;
use Pixney\WysiwygImageBlockExtension\Block\BlockModel;

class WysiwygImageBlockExtension extends BlockExtension
{
    protected $provides = 'anomaly.module.blocks::block.wysiwyg_image';
    protected $model    = BlockModel::class;

    public function getView()
    {
        // TODO : Either get active theme or config..
        return 'pixney.theme.esharawater::blocks/wysiwyg_image';

        // if ($this->block->configuration('something_special')) {
        //     return 'my_company.extension.awesome_block::alternate_view';
        // }
        // return $this->view;
    }
}
