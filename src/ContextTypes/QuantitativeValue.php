<?php

namespace AJUR\Toolkit\JsonLd\ContextTypes;

class QuantitativeValue extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected array $structure = [
        'maxValue' => null,
        'minValue' => null,
        'value' => null,
        'unitText' => null,
    ];
}