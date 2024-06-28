<?php

namespace AJUR\Toolkit\JsonLd;

use InvalidArgumentException;
use AJUR\Toolkit\JsonLd\Contracts\ContextTypeInterface;

class Context
{
    public const DEFAULT_JSON_ENCODE_FLAGS = JSON_HEX_APOS | JSON_UNESCAPED_UNICODE /*| JSON_UNESCAPED_SLASHES*/;

    public const CONTEXT_TYPES_NAMESPACE = '\\AJUR\Toolkit\\JsonLd\\ContextTypes\\';
    /**
     * Context type
     *
     * @var ContextTypeInterface
     */
    protected $context = null;

    /**
     * Create a new Context instance
     *
     * @param string $context
     * @param array  $data
     */
    public function __construct(string $context, array $data = [])
    {
        $class = $this->getContextTypeClass($context);

        $this->context = new $class($data);
    }

    /**
     * Present given data as a JSON-LD object.
     *
     * @param string $context
     * @param array  $data
     *
     * @return static
     */
    public static function create($context, array $data = []): Context
    {
        return new static($context, $data);
    }

    /**
     * Return the array of context properties.
     *
     * @return array
     */
    public function getProperties(): array
    {
        return \array_filter($this->context->getProperties());
    }

    /**
     * Generate the JSON-LD script tag.
     *
     * @return string
     */
    public function generate($json_encode_flags = self::DEFAULT_JSON_ENCODE_FLAGS): string
    {
        $properties = $this->getProperties();

        return $properties
            ? "<script type=\"application/ld+json\">" . \json_encode($properties, $json_encode_flags) . "</script>"
            : '';
    }

    /**
     * Return script tag.
     *
     * @param string $name
     *
     * @return string|null
     * @throws InvalidArgumentException
     */
    protected function getContextTypeClass(string $name): ?string
    {
        // Check for custom context type
        if (\class_exists($name)) {
            return $name;
        }

        // Create local context type class
        $class = \ucwords(\str_replace(['-', '_'], ' ', $name));
        $class = self::CONTEXT_TYPES_NAMESPACE . \str_replace(' ', '', $class);

        // Check for local context type
        if (\class_exists($class)) {
            return $class;
        }

        // Backwards compatible, remove in a future version
        switch ($name) {
            case 'address':
                return ContextTypes\PostalAddress::class;
                break;
            case 'business':
                return ContextTypes\LocalBusiness::class;
                break;
            case 'breadcrumbs':
                return ContextTypes\BreadcrumbList::class;
                break;
            case 'geo':
                return ContextTypes\GeoCoordinates::class;
                break;
        }

        throw new InvalidArgumentException(\sprintf('Undefined context type: "%s"', $name));
    }

    /**
     * Return script tag.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->generate();
    }
}
