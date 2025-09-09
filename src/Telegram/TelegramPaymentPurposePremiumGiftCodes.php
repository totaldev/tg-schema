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
    public const TYPE_NAME = 'telegramPaymentPurposePremiumGiftCodes';

    public function __construct(
        /**
         * Identifier of the supergroup or channel chat, which will be automatically boosted by the users for duration of the Premium subscription and which is administered by the user.
         */
        protected int           $boostedChatId,
        /**
         * ISO 4217 currency code of the payment currency.
         */
        protected string        $currency,
        /**
         * Paid amount, in the smallest units of the currency.
         */
        protected int           $amount,
        /**
         * Identifiers of the users which can activate the gift codes.
         *
         * @var int[]
         */
        protected array         $userIds,
        /**
         * Number of months the Telegram Premium subscription will be active for the users.
         */
        protected int           $monthCount,
        /**
         * Text to show along with the gift codes; 0-getOption("gift_text_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities are allowed.
         */
        protected FormattedText $text,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): TelegramPaymentPurposePremiumGiftCodes
    {
        return new static(
            $array['boosted_chat_id'],
            $array['currency'],
            $array['amount'],
            $array['user_ids'],
            $array['month_count'],
            TdSchemaRegistry::fromArray($array['text']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'boosted_chat_id' => $this->boostedChatId,
            'currency'        => $this->currency,
            'amount'          => $this->amount,
            'user_ids'        => $this->userIds,
            'month_count'     => $this->monthCount,
            'text'            => $this->text->typeSerialize(),
        ];
    }
}
