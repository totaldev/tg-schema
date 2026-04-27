<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Received;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of gifts received by a user or a chat.
 */
class ReceivedGifts extends TdObject
{
    public const string TYPE_NAME = 'receivedGifts';

    public function __construct(
        /**
         * True, if notifications about new gifts of the owner are enabled.
         */
        protected bool   $areNotificationsEnabled,
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

    public static function fromArray(array $array): ReceivedGifts
    {
        return new static(
            areNotificationsEnabled: $array['are_notifications_enabled'],
            gifts                  : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['gifts']),
            nextOffset             : $array['next_offset'],
            totalCount             : $array['total_count'],
        );
    }

    public function getAreNotificationsEnabled(): bool
    {
        return $this->areNotificationsEnabled;
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

    public function setAreNotificationsEnabled(bool $value): static
    {
        $this->areNotificationsEnabled = $value;

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
            '@type'                     => static::TYPE_NAME,
            'are_notifications_enabled' => $this->areNotificationsEnabled,
            'gifts'                     => array_map(static fn($x) => $x->jsonSerialize(), $this->gifts),
            'next_offset'               => $this->nextOffset,
            'total_count'               => $this->totalCount,
        ];
    }
}
