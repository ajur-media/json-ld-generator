<?php

namespace AJUR\Toolkit\JsonLd\ContextTypes;

class PostalAddress extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected array $structure = [
        'streetAddress' => '',
        'addressLocality' => '',
        'addressRegion' => '',
        'addressCountry' => '',
        'postalCode' => '',
    ];
}