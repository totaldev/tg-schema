<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of chat boost slots.
 */
class ChatBoostSlots extends TdObject
{
    public const TYPE_NAME = 'chatBoostSlots';

    public function __construct(
        /**
         * List of boost slots.
         *
         * @var ChatBoostSlot[]
         */
        protected array $slots
    ) {}

    public static function fromArray(array $array): ChatBoostSlots
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['slots']),
        );
    }

    public function getSlots(): array
    {
        return $this->slots;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->slots),
        ];
    }
}
