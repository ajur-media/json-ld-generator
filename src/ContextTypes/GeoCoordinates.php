<?php

namespace AJUR\Toolkit\JsonLd\ContextTypes;

class GeoCoordinates extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected array $structure = [
        'latitude' => '',
        'longitude' => '',
    ];
}