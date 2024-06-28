<?php

namespace AJUR\Toolkit\JsonLd\ContextTypes;

class WebSite extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected array $structure = [
        'about' => null,
        'headline' => null,
        'image' => null,
        'name' => null,
        'url' => null,
        'publisher' => Organization::class,
        'keywords' => null,
        'inLanguage' => null,
        'dateCreated' => null,
        'dateModified' => null,
        'datePublished' => null,
        'sameAs' => null,
    ];
}