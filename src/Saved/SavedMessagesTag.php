<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Saved;

use Totaldev\TgSchema\Reaction\ReactionType;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a tag used in Saved Messages or a Saved Messages topic.
 */
class SavedMessagesTag extends TdObject
{
    public const TYPE_NAME = 'savedMessagesTag';

    public function __construct(
        /**
         * The tag.
         */
        protected ReactionType $tag,
        /**
         * Label of the tag; 0-12 characters. Always empty if the tag is returned for a Saved Messages topic.
         */
        protected string       $label,
        /**
         * Number of times the tag was used; may be 0 if the tag has non-empty label.
         */
        protected int          $count
    ) {}

    public static function fromArray(array $array): SavedMessagesTag
    {
        return new static(
            TdSchemaRegistry::fromArray($array['tag']),
            $array['label'],
            $array['count'],
        );
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getTag(): ReactionType
    {
        return $this->tag;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'tag'   => $this->tag->typeSerialize(),
            'label' => $this->label,
            'count' => $this->count,
        ];
    }
}
