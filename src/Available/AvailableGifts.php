<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Available;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of gifts that can be sent to another user or channel chat.
 */
class AvailableGifts extends TdObject
{
    public const TYPE_NAME = 'availableGifts';

    public function __construct(
        /**
         * The list of gifts.
         *
         * @var AvailableGift[]
         */
        protected array $gifts
    ) {}

    public static function fromArray(array $array): AvailableGifts
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['gifts']),
        );
    }

    public function getGifts(): array
    {
        return $this->gifts;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(static fn($x) => $x->typeSerialize(), $this->gifts),
        ];
    }
}
