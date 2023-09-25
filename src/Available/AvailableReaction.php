<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Available;

use Totaldev\TgSchema\Reaction\ReactionType;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents an available reaction
 */
class AvailableReaction extends TdObject
{
    public const TYPE_NAME = 'availableReaction';

    /**
     * Type of the reaction
     *
     * @var ReactionType
     */
    protected ReactionType $type;

    /**
     * True, if Telegram Premium is needed to send the reaction
     *
     * @var bool
     */
    protected bool $needsPremium;

    public function __construct(ReactionType $type, bool $needsPremium)
    {
        $this->type = $type;
        $this->needsPremium = $needsPremium;
    }

    public static function fromArray(array $array): AvailableReaction
    {
        return new static(
            TdSchemaRegistry::fromArray($array['type']),
            $array['needs_premium'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'type' => $this->type->typeSerialize(),
            'needs_premium' => $this->needsPremium,
        ];
    }

    public function getType(): ReactionType
    {
        return $this->type;
    }

    public function getNeedsPremium(): bool
    {
        return $this->needsPremium;
    }
}
