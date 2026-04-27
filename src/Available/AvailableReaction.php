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
    public const string TYPE_NAME = 'availableReaction';

    public function __construct(
        /**
         * True, if Telegram Premium is needed to send the reaction.
         */
        protected bool         $needsPremium,
        /**
         * Type of the reaction.
         */
        protected ReactionType $type,
    ) {}

    public static function fromArray(array $array): AvailableReaction
    {
        return new static(
            needsPremium: $array['needs_premium'],
            type        : TdSchemaRegistry::fromArray($array['type']),
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

    public function setNeedsPremium(bool $value): static
    {
        $this->needsPremium = $value;

        return $this;
    }

    public function setType(ReactionType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'needs_premium' => $this->needsPremium,
            'type'          => $this->type->jsonSerialize(),
        ];
    }
}
