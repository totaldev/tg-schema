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
    public const string TYPE_NAME = 'savedMessagesTags';

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
            tags: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['tags']),
        );
    }

    public function getTags(): array
    {
        return $this->tags;
    }

    public function setTags(array $value): static
    {
        $this->tags = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'tags'  => array_map(static fn($x) => $x->jsonSerialize(), $this->tags),
        ];
    }
}
