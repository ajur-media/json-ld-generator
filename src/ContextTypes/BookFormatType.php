<?php

namespace AJUR\Toolkit\JsonLd\ContextTypes;

/**
 * The publication format of the book.
 *
 * https://schema.org/BookFormatType
 */
class BookFormatType extends Enumeration
{
    /**
     * Book format: Audiobook. This is an enumerated value for use with the
     * bookFormat property. There is also a type 'Audiobook' in the bib
     * extension which includes Audiobook specific properties.
     *
     * @see http://schema.org/AudiobookFormat
     */
    const AudiobookFormat = 'https://schema.org/AudiobookFormat';

    /**
     * Book format: Ebook.
     *
     * @see http://schema.org/EBook
     */
    const EBook = 'https://schema.org/EBook';

    /**
     * Book format: GraphicNovel. May represent a bound collection of
     * ComicIssue instances.
     *
     * @see http://schema.org/GraphicNovel
     */
    const GraphicNovel = "https://schema.org/GraphicNovel";

    /**
     * Book format: Hardcover.
     *
     * @see http://schema.org/Hardcover
     */
    const Hardcover = 'https://schema.org/Hardcover';

    /**
     * Book format: Paperback.
     *
     * @see http://schema.org/Paperback
     */
    const Paperback = 'https://schema.org/Paperback';

    /**
     * Property structure
     *
     * @var array
     */
    protected array $extendedStructure = [];

    /**
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