<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Saved;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of tags used in Saved Messages.
 */
class SavedMessagesTags extends TdObject
{
    public const TYPE_NAME = 'savedMessagesTags';

    public function __construct(
        /**
         * List of tags.
         *
         * @var SavedMessagesTag[]
         */
        protected array $tags
    ) {}

    public static function fromArray(array $array): SavedMessagesTags
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['tags']),
        );
    }

    public function getTags(): array
    {
        return $this->tags;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'tags'  => array_map(static fn($x) => $x->typeSerialize(), $this->tags),
        ];
    }
}
