<?php

namespace Pixney\ImageBlockExtension;

use Pixney\ImageBlockExtension\Block\BlockModel;
use Anomaly\Streams\Platform\Addon\Extension\Extension;

class ImageBlockExtension extends Extension
{
    protected $provides = 'anomaly.module.blocks::block.image';
    protected $model    = BlockModel::class;

    public function getView()
    {
        // TODO : Either get active theme or config..
        return 'pixney.theme.esharawater::blocks/image';

        // if ($this->block->configuration('something_special')) {
        //     return 'my_company.extension.awesome_block::alternate_view';
        // }
        // return $this->view;
    }
}
