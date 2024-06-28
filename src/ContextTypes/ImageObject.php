<?php

namespace AJUR\Toolkit\JsonLd\ContextTypes;

class ImageObject extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected array $structure = [
        'url' => null,
        'height' => null,
        'width' => null,
        'caption' => null,
        'thumbnail' => ImageObject::class,
    ];
}