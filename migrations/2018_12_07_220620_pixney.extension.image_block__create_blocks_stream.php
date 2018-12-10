<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class PixneyExtensionImageBlockCreateBlocksStream extends Migration
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
        'classes',
       'image'
    ];
}
