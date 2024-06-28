<?php

namespace AJUR\Toolkit\JsonLd\ContextTypes;

class BlogPosting extends Article
{
    /**
     * Property structure
     *
     * @var array
     */
    protected array $extendStructure = [
        'sharedContent' => CreativeWork::class,
    ];
}