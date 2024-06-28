<?php

namespace AJUR\Toolkit\JsonLd\ContextTypes;

class NutritionInformation extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected array $structure = [
        'calories' => null,
        'fatContent' => null,
        'cholesterolContent' => null,
        'sodiumContent' => null,
        'carbohydrateContent' => null,
        'fiberContent' => null,
        'proteinContent' => null,
    ];
}
