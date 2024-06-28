<?php

namespace AJUR\Toolkit\JsonLd\ContextTypes;

class LocalBusiness extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected array $structure = [
        'name' => null,
        'description' => null,
        'image' => null,
        'telephone' => null,
        'email' => null,
        'openingHours' => null,
        'address' => PostalAddress::class,
        'geo' => GeoCoordinates::class,
        'review' => Review::class,
        'aggregateRating' => AggregateRating::class,
        'url' => null,
        'priceRange' => null,
        'areaServed' => null,
        'hasMap' => null,
    ];

    /**
     * Set the opening hours of the business.
     *
     * @param array $items
     *
     * @return array
     */
    protected function setOpeningHoursAttribute($items)
    {
        return $items;
    }
}
