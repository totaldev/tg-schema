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
    public const TYPE_NAME = 'receivedGifts';

    public function __construct(
        /**
         * The total number of received gifts.
         */
        protected int    $totalCount,
        /**
         * The list of gifts.
         *
         * @var ReceivedGift[]
         */
        protected array  $gifts,
        /**
         * True, if notifications about new gifts of the owner are enabled.
         */
        protected bool   $areNotificationsEnabled,
        /**
         * The offset for the next request. If empty, then there are no more results.
         */
        protected string $nextOffset
    ) {}

    public static function fromArray(array $array): ReceivedGifts
    {
        return new static(
            $array['total_count'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['gifts']),
            $array['are_notifications_enabled'],
            $array['next_offset'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                     => static::TYPE_NAME,
            'total_count'               => $this->totalCount,
            array_map(fn($x) => $x->typeSerialize(), $this->gifts),
            'are_notifications_enabled' => $this->areNotificationsEnabled,
            'next_offset'               => $this->nextOffset,
        ];
    }
}
