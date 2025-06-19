<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Available;

use Totaldev\TgSchema\Reaction\ReactionType;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents an available reaction.
 */
class AvailableReaction extends TdObject
{
    public const TYPE_NAME = 'availableReaction';

    public function __construct(
        /**
         * Type of the reaction.
         */
        protected ReactionType $type,
        /**
         * True, if Telegram Premium is needed to send the reaction.
         */
        protected bool         $needsPremium
    ) {}

    public static function fromArray(array $array): AvailableReaction
    {
        return new static(
            TdSchemaRegistry::fromArray($array['type']),
            $array['needs_premium'],
        );
    }

    public function getNeedsPremium(): bool
    {
        return $this->needsPremium;
    }

    public function getType(): ReactionType
    {
        return $this->type;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'type'          => $this->type->typeSerialize(),
            'needs_premium' => $this->needsPremium,
        ];
    }
}
