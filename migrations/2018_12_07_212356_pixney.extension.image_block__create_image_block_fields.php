<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class PixneyExtensionImageBlockCreateImageBlockFields extends Migration
{
    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'image' => 'anomaly.field_type.image',
    ];
}
