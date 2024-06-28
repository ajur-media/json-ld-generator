<?php

namespace AJUR\Toolkit\JsonLd\ContextTypes;

class Invoice extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected array $structure = [
        'totalPaymentDue' => PriceSpecification::class,
        'provider' => Organization::class,
        'paymentDueDate' => null,
        'paymentStatus' => null,
        'url' => null,
        'referencesOrder' => Order::class
    ];
}
