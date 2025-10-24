<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of story albums.
 */
class StoryAlbums extends TdObject
{
    public const string TYPE_NAME = 'storyAlbums';

    public function __construct(
        /**
         * List of story albums.
         *
         * @var StoryAlbum[]
         */
        protected array $albums
    ) {}

    public static function fromArray(array $array): StoryAlbums
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['albums']),
        );
    }

    public function getAlbums(): array
    {
        return $this->albums;
    }

    public function setAlbums(array $value): static
    {
        $this->albums = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'albums' => array_map(static fn($x) => $x->typeSerialize(), $this->albums),
        ];
    }
}
