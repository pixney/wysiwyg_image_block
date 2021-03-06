<?php

namespace Pixney\WysiwygImageBlockExtension;

use Anomaly\BlocksModule\Block\BlockExtension;
use Pixney\WysiwygImageBlockExtension\Block\BlockModel;
use Pixney\WysiwygImageBlockExtension\Block\Form\BlockFormBuilder;
use Anomaly\SettingsModule\Setting\Contract\SettingRepositoryInterface;

class WysiwygImageBlockExtension extends BlockExtension
{
    protected $provides     = 'anomaly.module.blocks::block.wysiwyg_image';
    protected $model        = BlockModel::class;
    protected $category     = 'content';
    // protected $form         = BlockFormBuilder::class;

    public function getView()
    {
        $settings      = app(SettingRepositoryInterface::class);
        $setting       = $settings->get('streams::standard_theme');
        $this->wrapper = $setting->value . "::blocks/{$this->slug}/wrapper";
        return $setting->value . "::blocks/{$this->slug}/content";
    }
}
