<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Giveaway\GiveawayParameters;
use Totaldev\TgSchema\Giveaway\GiveawayPrize;
use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A giveaway.
 */
class MessageGiveaway extends MessageContent
{
    public const TYPE_NAME = 'messageGiveaway';

    public function __construct(
        /**
         * Giveaway parameters.
         */
        protected GiveawayParameters $parameters,
        /**
         * Number of users which will receive Telegram Premium subscription gift codes.
         */
        protected int                $winnerCount,
        /**
         * Prize of the giveaway.
         */
        protected GiveawayPrize      $prize,
        /**
         * A sticker to be shown in the message; may be null if unknown.
         */
        protected ?Sticker           $sticker,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageGiveaway
    {
        return new static(
            TdSchemaRegistry::fromArray($array['parameters']),
            $array['winner_count'],
            TdSchemaRegistry::fromArray($array['prize']),
            isset($array['sticker']) ? TdSchemaRegistry::fromArray($array['sticker']) : null,
        );
    }

    public function getParameters(): GiveawayParameters
    {
        return $this->parameters;
    }

    public function getPrize(): GiveawayPrize
    {
        return $this->prize;
    }

    public function getSticker(): ?Sticker
    {
        return $this->sticker;
    }

    public function getWinnerCount(): int
    {
        return $this->winnerCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'parameters'   => $this->parameters->typeSerialize(),
            'winner_count' => $this->winnerCount,
            'prize'        => $this->prize->typeSerialize(),
            'sticker'      => $this->sticker ?? null,
        ];
    }
}
