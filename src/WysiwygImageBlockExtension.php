<?php

namespace Pixney\WysiwygImageBlockExtension;

use Anomaly\BlocksModule\Block\BlockExtension;
use Pixney\WysiwygImageBlockExtension\Block\BlockModel;
use Anomaly\SettingsModule\Setting\Contract\SettingRepositoryInterface;

class WysiwygImageBlockExtension extends BlockExtension
{
    protected $provides = 'anomaly.module.blocks::block.wysiwyg_image';
    protected $model    = BlockModel::class;

    public function getView()
    {
        $settings      = app(SettingRepositoryInterface::class);
        $setting       = $settings->get('streams::standard_theme');
        $this->wrapper = $setting->value . '::blocks/global/wrapper';
        return $setting->value . '::blocks/wysiwyg_image';
    }
}
