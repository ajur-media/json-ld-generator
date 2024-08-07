<?php

namespace AJUR\Toolkit\JsonLd\ContextTypes;

class BreadcrumbList extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected array $structure = [
        'itemListElement' => null,
    ];

    /**
     * Set the canonical URL of the article page.
     *
     * @param array $items
     *
     * @return array
     */
    protected function setItemListElementAttribute(array $items): array
    {
        foreach ($items as $pos => $item) {
            $items[$pos] = $this->getNestedContext(ListItem::class, [
                'position' => $pos + 1,
                'item' => $item
            ]);
        }

        return $items;
    }
}