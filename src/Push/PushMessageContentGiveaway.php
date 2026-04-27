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
    public const string TYPE_NAME = 'pushMessageContentGiveaway';

    public function __construct(
        /**
         * True, if the message is a pinned message with the specified content.
         */
        protected bool           $isPinned,
        /**
         * Prize of the giveaway; may be null for pinned message.
         */
        protected ?GiveawayPrize $prize,
        /**
         * Number of users which will receive giveaway prizes; 0 for pinned message.
         */
        protected int            $winnerCount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentGiveaway
    {
        return new static(
            isPinned   : $array['is_pinned'],
            prize      : (isset($array['prize']) ? TdSchemaRegistry::fromArray($array['prize']) : null),
            winnerCount: $array['winner_count'],
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

    public function setIsPinned(bool $value): static
    {
        $this->isPinned = $value;

        return $this;
    }

    public function setPrize(?GiveawayPrize $value): static
    {
        $this->prize = $value;

        return $this;
    }

    public function setWinnerCount(int $value): static
    {
        $this->winnerCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'is_pinned'    => $this->isPinned,
            'prize'        => (null !== $this->prize ? $this->prize->jsonSerialize() : null),
            'winner_count' => $this->winnerCount,
        ];
    }
}
