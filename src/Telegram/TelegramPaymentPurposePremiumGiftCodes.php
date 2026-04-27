<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Telegram;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The user boosting a chat by creating Telegram Premium gift codes for other users.
 */
class TelegramPaymentPurposePremiumGiftCodes extends TelegramPaymentPurpose
{
    public const string TYPE_NAME = 'telegramPaymentPurposePremiumGiftCodes';

    public function __construct(
        /**
         * Paid amount, in the smallest units of the currency.
         */
        protected int           $amount,
        /**
         * Identifier of the supergroup or channel chat, which will be automatically boosted by the users for duration of the Premium subscription and which is administered by the user.
         */
        protected int           $boostedChatId,
        /**
         * ISO 4217 currency code of the payment currency.
         */
        protected string        $currency,
        /**
         * Number of months the Telegram Premium subscription will be active for the users.
         */
        protected int           $monthCount,
        /**
         * Text to show along with the gift codes; 0-getOption("gift_text_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, CustomEmoji, and DateTime entities are allowed.
         */
        protected FormattedText $text,
        /**
         * Identifiers of the users which can activate the gift codes.
         *
         * @var int[]
         */
        protected array         $userIds,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): TelegramPaymentPurposePremiumGiftCodes
    {
        return new static(
            amount       : $array['amount'],
            boostedChatId: $array['boosted_chat_id'],
            currency     : $array['currency'],
            monthCount   : $array['month_count'],
            text         : TdSchemaRegistry::fromArray($array['text']),
            userIds      : $array['user_ids'],
        );
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getBoostedChatId(): int
    {
        return $this->boostedChatId;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getMonthCount(): int
    {
        return $this->monthCount;
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function getUserIds(): array
    {
        return $this->userIds;
    }

    public function setAmount(int $value): static
    {
        $this->amount = $value;

        return $this;
    }

    public function setBoostedChatId(int $value): static
    {
        $this->boostedChatId = $value;

        return $this;
    }

    public function setCurrency(string $value): static
    {
        $this->currency = $value;

        return $this;
    }

    public function setMonthCount(int $value): static
    {
        $this->monthCount = $value;

        return $this;
    }

    public function setText(FormattedText $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function setUserIds(array $value): static
    {
        $this->userIds = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'amount'          => $this->amount,
            'boosted_chat_id' => $this->boostedChatId,
            'currency'        => $this->currency,
            'month_count'     => $this->monthCount,
            'text'            => $this->text->jsonSerialize(),
            'user_ids'        => $this->userIds,
        ];
    }
}
