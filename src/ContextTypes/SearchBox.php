<?php

namespace AJUR\Toolkit\JsonLd\ContextTypes;

class SearchBox extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected array $structure = [
        'url' => null,
        'potentialAction' => null,
    ];

    /**
     * After fill event.
     *
     * @param array $attributes
     */
    public function afterFill(array $attributes = []): void
    {
        $this->setType('WebSite');
    }

    /**
     * Set potential action.
     *
     * @param array $properties
     *
     * @return array
     */
    protected function setPotentialActionAttribute(array $properties = []): array
    {
        return \array_merge(['@type' => 'SearchAction'], $properties);
    }
}