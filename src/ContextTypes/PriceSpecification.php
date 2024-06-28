<?php

namespace AJUR\Toolkit\JsonLd\ContextTypes;

class PriceSpecification extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected array $structure = [
        'price' => null,
        'priceCurrency' => null,
    ];
}
