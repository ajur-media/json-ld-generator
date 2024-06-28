<?php

namespace AJUR\Toolkit\JsonLd\ContextTypes;

class Review extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected array $structure = [
        'itemReviewed' => Thing::class,
        'reviewRating' => Rating::class,
        'aggregateRating' => AggregateRating::class,
        'name' => null,
        'author' => Person::class,
        'reviewBody' => null,
        'publisher' => Organization::class,
        'duration' => Duration::class,
        'datePublished' => null,
    ];
}