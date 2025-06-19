<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Gift;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Allows to buy a Telegram Premium subscription for another user with payment in Telegram Stars; for bots only.
 */
class GiftPremiumWithStars extends TdFunction
{
    public const TYPE_NAME = 'giftPremiumWithStars';

    public function __construct(
        /**
         * Identifier of the user which will receive Telegram Premium.
         */
        protected int           $userId,
        /**
         * The number of Telegram Stars to pay for subscription.
         */
        protected int           $starCount,
        /**
         * Number of months the Telegram Premium subscription will be active for the user.
         */
        protected int           $monthCount,
        /**
         * Text to show to the user receiving Telegram Premium; 0-getOption("gift_text_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities are allowed.
         */
        protected FormattedText $text
    ) {}

    public static function fromArray(array $array): GiftPremiumWithStars
    {
        return new static(
            $array['user_id'],
            $array['star_count'],
            $array['month_count'],
            TdSchemaRegistry::fromArray($array['text']),
        );
    }

    public function getMonthCount(): int
    {
        return $this->monthCount;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'user_id'     => $this->userId,
            'star_count'  => $this->starCount,
            'month_count' => $this->monthCount,
            'text'        => $this->text->typeSerialize(),
        ];
    }
}
