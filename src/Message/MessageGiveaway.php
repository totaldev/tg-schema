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
    public const string TYPE_NAME = 'messageGiveaway';

    public function __construct(
        /**
         * Giveaway parameters.
         */
        protected GiveawayParameters $parameters,
        /**
         * Prize of the giveaway.
         */
        protected GiveawayPrize      $prize,
        /**
         * A sticker to be shown in the message; may be null if unknown.
         */
        protected ?Sticker           $sticker,
        /**
         * Number of users which will receive Telegram Premium subscription gift codes.
         */
        protected int                $winnerCount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageGiveaway
    {
        return new static(
            parameters : TdSchemaRegistry::fromArray($array['parameters']),
            prize      : TdSchemaRegistry::fromArray($array['prize']),
            sticker    : (isset($array['sticker']) ? TdSchemaRegistry::fromArray($array['sticker']) : null),
            winnerCount: $array['winner_count'],
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

    public function setParameters(GiveawayParameters $value): static
    {
        $this->parameters = $value;

        return $this;
    }

    public function setPrize(GiveawayPrize $value): static
    {
        $this->prize = $value;

        return $this;
    }

    public function setSticker(?Sticker $value): static
    {
        $this->sticker = $value;

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
            'parameters'   => $this->parameters->jsonSerialize(),
            'prize'        => $this->prize->jsonSerialize(),
            'sticker'      => (null !== $this->sticker ? $this->sticker->jsonSerialize() : null),
            'winner_count' => $this->winnerCount,
        ];
    }
}
