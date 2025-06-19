<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Reaction\ReactionType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes label of a Saved Messages tag; for Telegram Premium users only.
 */
class SetSavedMessagesTagLabel extends TdFunction
{
    public const TYPE_NAME = 'setSavedMessagesTagLabel';

    public function __construct(
        /**
         * The tag which label will be changed.
         */
        protected ReactionType $tag,
        /**
         * New label for the tag; 0-12 characters.
         */
        protected string       $label
    ) {}

    public static function fromArray(array $array): SetSavedMessagesTagLabel
    {
        return new static(
            TdSchemaRegistry::fromArray($array['tag']),
            $array['label'],
        );
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
        ];
    }
}
