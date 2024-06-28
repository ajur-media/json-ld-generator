<?php

namespace AJUR\Toolkit\JsonLd\ContextTypes;

class MusicGroup extends MusicAbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected array $structure = [
        '@id' => null,
        'url' => null,
        'name' => null,
        'description' => null,
        'track' => null,
        'image' => null,
    ];
}
