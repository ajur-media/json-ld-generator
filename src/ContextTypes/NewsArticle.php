<?php

namespace AJUR\Toolkit\JsonLd\ContextTypes;

/**
 * https://schema.org/NewsArticle
 */
class NewsArticle extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected array $structure = [
        'headline' => null,
        'description' => null,
        'url' => null,
        'mainEntityOfPage' => WebPage::class,
        'image' => ImageObject::class,
        'video' => VideoObject::class,
        'dateCreated' => null,
        'dateModified' => null,
        'datePublished' => null,
        'author' => Person::class,
        'publisher' => Organization::class,
        'articleBody' => null,
    ];

    /**
     * Set the description attribute.
     *
     * @param string $txt
     *
     * @return string
     */
    protected function setDescriptionAttribute(string $txt): string
    {
        return $this->truncate($txt, AbstractContext::MAX_TEXT_FIELD_LENGTH);
    }
}