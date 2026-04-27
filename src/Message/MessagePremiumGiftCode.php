<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A Telegram Premium gift code was created for the user.
 */
class MessagePremiumGiftCode extends MessageContent
{
    public const string TYPE_NAME = 'messagePremiumGiftCode';

    public function __construct(
        /**
         * The paid amount, in the smallest units of the currency; 0 if unknown.
         */
        protected int            $amount,
        /**
         * The gift code.
         */
        protected string         $code,
        /**
         * Identifier of a chat or a user who created the gift code; may be null if unknown.
         */
        protected ?MessageSender $creatorId,
        /**
         * Cryptocurrency used to pay for the gift; may be empty if none or unknown.
         */
        protected string         $cryptocurrency,
        /**
         * The paid amount, in the smallest units of the cryptocurrency; 0 if unknown.
         */
        protected int            $cryptocurrencyAmount,
        /**
         * Currency for the paid amount; empty if unknown.
         */
        protected string         $currency,
        /**
         * Number of days the Telegram Premium subscription will be active after code activation.
         */
        protected int            $dayCount,
        /**
         * True, if the gift code was created for a giveaway.
         */
        protected bool           $isFromGiveaway,
        /**
         * True, if the winner for the corresponding Telegram Premium subscription wasn't chosen.
         */
        protected bool           $isUnclaimed,
        /**
         * Number of months the Telegram Premium subscription will be active after code activation; 0 if the number of months isn't integer.
         */
        protected int            $monthCount,
        /**
         * A sticker to be shown in the message; may be null if unknown.
         */
        protected ?Sticker       $sticker,
        /**
         * Message added to the gift.
         */
        protected FormattedText  $text,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessagePremiumGiftCode
    {
        return new static(
            amount              : $array['amount'],
            code                : $array['code'],
            creatorId           : (isset($array['creator_id']) ? TdSchemaRegistry::fromArray($array['creator_id']) : null),
            cryptocurrency      : $array['cryptocurrency'],
            cryptocurrencyAmount: $array['cryptocurrency_amount'],
            currency            : $array['currency'],
            dayCount            : $array['day_count'],
            isFromGiveaway      : $array['is_from_giveaway'],
            isUnclaimed         : $array['is_unclaimed'],
            monthCount          : $array['month_count'],
            sticker             : (isset($array['sticker']) ? TdSchemaRegistry::fromArray($array['sticker']) : null),
            text                : TdSchemaRegistry::fromArray($array['text']),
        );
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getCreatorId(): ?MessageSender
    {
        return $this->creatorId;
    }

    public function getCryptocurrency(): string
    {
        return $this->cryptocurrency;
    }

    public function getCryptocurrencyAmount(): int
    {
        return $this->cryptocurrencyAmount;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getDayCount(): int
    {
        return $this->dayCount;
    }

    public function getIsFromGiveaway(): bool
    {
        return $this->isFromGiveaway;
    }

    public function getIsUnclaimed(): bool
    {
        return $this->isUnclaimed;
    }

    public function getMonthCount(): int
    {
        return $this->monthCount;
    }

    public function getSticker(): ?Sticker
    {
        return $this->sticker;
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function setAmount(int $value): static
    {
        $this->amount = $value;

        return $this;
    }

    public function setCode(string $value): static
    {
        $this->code = $value;

        return $this;
    }

    public function setCreatorId(?MessageSender $value): static
    {
        $this->creatorId = $value;

        return $this;
    }

    public function setCryptocurrency(string $value): static
    {
        $this->cryptocurrency = $value;

        return $this;
    }

    public function setCryptocurrencyAmount(int $value): static
    {
        $this->cryptocurrencyAmount = $value;

        return $this;
    }

    public function setCurrency(string $value): static
    {
        $this->currency = $value;

        return $this;
    }

    public function setDayCount(int $value): static
    {
        $this->dayCount = $value;

        return $this;
    }

    public function setIsFromGiveaway(bool $value): static
    {
        $this->isFromGiveaway = $value;

        return $this;
    }

    public function setIsUnclaimed(bool $value): static
    {
        $this->isUnclaimed = $value;

        return $this;
    }

    public function setMonthCount(int $value): static
    {
        $this->monthCount = $value;

        return $this;
    }

    public function setSticker(?Sticker $value): static
    {
        $this->sticker = $value;

        return $this;
    }

    public function setText(FormattedText $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'amount'                => $this->amount,
            'code'                  => $this->code,
            'creator_id'            => (null !== $this->creatorId ? $this->creatorId->jsonSerialize() : null),
            'cryptocurrency'        => $this->cryptocurrency,
            'cryptocurrency_amount' => $this->cryptocurrencyAmount,
            'currency'              => $this->currency,
            'day_count'             => $this->dayCount,
            'is_from_giveaway'      => $this->isFromGiveaway,
            'is_unclaimed'          => $this->isUnclaimed,
            'month_count'           => $this->monthCount,
            'sticker'               => (null !== $this->sticker ? $this->sticker->jsonSerialize() : null),
            'text'                  => $this->text->jsonSerialize(),
        ];
    }
}
