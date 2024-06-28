<?php

namespace AJUR\Toolkit\JsonLd\ContextTypes;

class ContactPoint extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected array $structure = [
        'telephone' => null,
        'contactType' => null,
        'email' => null,
    ];
}
