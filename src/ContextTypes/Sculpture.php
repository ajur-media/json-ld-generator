<?php

namespace AJUR\Toolkit\JsonLd\ContextTypes;

class Sculpture extends CreativeWork
{
    /**
     * Property structure.
     *
     * @var array
     */
    private array $extendedStructure = [];

    /**
     * Constructor. Merges extendedStructure up
     *
     * @param array $attributes
     * @param array $extendedStructure
     */
    public function __construct(array $attributes, array $extendedStructure = [])
    {
        parent::__construct(
            $attributes, \array_merge($this->structure, $this->extendedStructure, $extendedStructure)
        );
    }
}
