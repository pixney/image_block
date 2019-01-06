<?php

namespace Pixney\ImageBlockExtension;

use Anomaly\BlocksModule\Block\BlockExtension;
use Pixney\ImageBlockExtension\Block\BlockModel;

class ImageBlockExtension extends BlockExtension
{
    protected $provides = 'anomaly.module.blocks::block.image';
    protected $model    = BlockModel::class;
    protected $wrapper  = 'theme::blocks/wrapper';

    public function getView()
    {
        // TODO : Either get active theme or config..
        return 'themer::blocks/image';

        // if ($this->block->configuration('something_special')) {
        //     return 'my_company.extension.awesome_block::alternate_view';
        // }
        // return $this->view;
    }
}
