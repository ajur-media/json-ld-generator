<?php

namespace AJUR\Toolkit\JsonLd\ContextTypes;

class MusicPlaylist extends MusicAbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected array $structure = [
        '@id' => null,
        'url' => null,
        'name' => null,
        'numTracks' => null,
        'track' => null,
    ];
}
