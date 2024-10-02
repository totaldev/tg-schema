<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

use Totaldev\TgSchema\Giveaway\GiveawayPrize;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message with a giveaway.
 */
class PushMessageContentGiveaway extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentGiveaway';

    public function __construct(
        /**
         * Number of users which will receive giveaway prizes; 0 for pinned message.
         */
        protected int            $winnerCount,
        /**
         * Prize of the giveaway; may be null for pinned message.
         */
        protected ?GiveawayPrize $prize,
        /**
         * True, if the message is a pinned message with the specified content.
         */
        protected bool           $isPinned,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentGiveaway
    {
        return new static(
            $array['winner_count'],
            isset($array['prize']) ? TdSchemaRegistry::fromArray($array['prize']) : null,
            $array['is_pinned'],
        );
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function getPrize(): ?GiveawayPrize
    {
        return $this->prize;
    }

    public function getWinnerCount(): int
    {
        return $this->winnerCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'winner_count' => $this->winnerCount,
            'prize'        => (isset($this->prize) ? $this->prize : null),
            'is_pinned'    => $this->isPinned,
        ];
    }
}
