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
    public const TYPE_NAME = 'messagePremiumGiftCode';

    public function __construct(
        /**
         * Identifier of a chat or a user that created the gift code; may be null if unknown.
         */
        protected ?MessageSender $creatorId,
        /**
         * Message added to the gift.
         */
        protected FormattedText  $text,
        /**
         * True, if the gift code was created for a giveaway.
         */
        protected bool           $isFromGiveaway,
        /**
         * True, if the winner for the corresponding Telegram Premium subscription wasn't chosen.
         */
        protected bool           $isUnclaimed,
        /**
         * Currency for the paid amount; empty if unknown.
         */
        protected string         $currency,
        /**
         * The paid amount, in the smallest units of the currency; 0 if unknown.
         */
        protected int            $amount,
        /**
         * Cryptocurrency used to pay for the gift; may be empty if none or unknown.
         */
        protected string         $cryptocurrency,
        /**
         * The paid amount, in the smallest units of the cryptocurrency; 0 if unknown.
         */
        protected int            $cryptocurrencyAmount,
        /**
         * Number of months the Telegram Premium subscription will be active after code activation.
         */
        protected int            $monthCount,
        /**
         * A sticker to be shown in the message; may be null if unknown.
         */
        protected ?Sticker       $sticker,
        /**
         * The gift code.
         */
        protected string         $code,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessagePremiumGiftCode
    {
        return new static(
            isset($array['creator_id']) ? TdSchemaRegistry::fromArray($array['creator_id']) : null,
            TdSchemaRegistry::fromArray($array['text']),
            $array['is_from_giveaway'],
            $array['is_unclaimed'],
            $array['currency'],
            $array['amount'],
            $array['cryptocurrency'],
            $array['cryptocurrency_amount'],
            $array['month_count'],
            isset($array['sticker']) ? TdSchemaRegistry::fromArray($array['sticker']) : null,
            $array['code'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'creator_id'            => $this->creatorId ?? null,
            'text'                  => $this->text->typeSerialize(),
            'is_from_giveaway'      => $this->isFromGiveaway,
            'is_unclaimed'          => $this->isUnclaimed,
            'currency'              => $this->currency,
            'amount'                => $this->amount,
            'cryptocurrency'        => $this->cryptocurrency,
            'cryptocurrency_amount' => $this->cryptocurrencyAmount,
            'month_count'           => $this->monthCount,
            'sticker'               => $this->sticker ?? null,
            'code'                  => $this->code,
        ];
    }
}
