<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Gifts;

use Totaldev\TgSchema\Attribute\AttributeCraftPersistenceProbability;
use Totaldev\TgSchema\Received\ReceivedGift;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of gifts received by a user or a chat.
 */
class GiftsForCrafting extends TdObject
{
    public const string TYPE_NAME = 'giftsForCrafting';

    public function __construct(
        /**
         * The 4 objects that describe probabilities of the crafted gift to have the backdrop or symbol of one of the original gifts for the cases when 1, 2, 3 or 4 gifts are used in the craft correspondingly.
         *
         * @var AttributeCraftPersistenceProbability[]
         */
        protected array  $attributePersistenceProbabilities,
        /**
         * The list of gifts.
         *
         * @var ReceivedGift[]
         */
        protected array  $gifts,
        /**
         * The offset for the next request. If empty, then there are no more results.
         */
        protected string $nextOffset,
        /**
         * The total number of received gifts.
         */
        protected int    $totalCount,
    ) {}

    public static function fromArray(array $array): GiftsForCrafting
    {
        return new static(
            attributePersistenceProbabilities: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['attribute_persistence_probabilities']),
            gifts                            : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['gifts']),
            nextOffset                       : $array['next_offset'],
            totalCount                       : $array['total_count'],
        );
    }

    public function getAttributePersistenceProbabilities(): array
    {
        return $this->attributePersistenceProbabilities;
    }

    public function getGifts(): array
    {
        return $this->gifts;
    }

    public function getNextOffset(): string
    {
        return $this->nextOffset;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function setAttributePersistenceProbabilities(array $value): static
    {
        $this->attributePersistenceProbabilities = $value;

        return $this;
    }

    public function setGifts(array $value): static
    {
        $this->gifts = $value;

        return $this;
    }

    public function setNextOffset(string $value): static
    {
        $this->nextOffset = $value;

        return $this;
    }

    public function setTotalCount(int $value): static
    {
        $this->totalCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                               => static::TYPE_NAME,
            'attribute_persistence_probabilities' => array_map(static fn($x) => $x->jsonSerialize(), $this->attributePersistenceProbabilities),
            'gifts'                               => array_map(static fn($x) => $x->jsonSerialize(), $this->gifts),
            'next_offset'                         => $this->nextOffset,
            'total_count'                         => $this->totalCount,
        ];
    }
}
