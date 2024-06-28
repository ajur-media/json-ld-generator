<?php

namespace AJUR\Toolkit\JsonLd\ContextTypes;

class Beach extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected array $structure = [
        'name' => null,
        'openingHours' => null,
        'description' => null,
        'image' => null,
        'url' => null,
        'address' => PostalAddress::class,
        'geo' => GeoCoordinates::class,
        'review' => Review::class,
        'aggregateRating' => AggregateRating::class,
    ];
}
