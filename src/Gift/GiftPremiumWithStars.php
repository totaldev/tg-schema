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
    public const string TYPE_NAME = 'giftPremiumWithStars';

    public function __construct(
        /**
         * Number of months the Telegram Premium subscription will be active for the user.
         */
        protected int           $monthCount,
        /**
         * The number of Telegram Stars to pay for subscription.
         */
        protected int           $starCount,
        /**
         * Text to show to the user receiving Telegram Premium; 0-getOption("gift_text_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities are allowed.
         */
        protected FormattedText $text,
        /**
         * Identifier of the user which will receive Telegram Premium.
         */
        protected int           $userId,
    ) {}

    public static function fromArray(array $array): GiftPremiumWithStars
    {
        return new static(
            monthCount: $array['month_count'],
            starCount : $array['star_count'],
            text      : TdSchemaRegistry::fromArray($array['text']),
            userId    : $array['user_id'],
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

    public function setMonthCount(int $value): static
    {
        $this->monthCount = $value;

        return $this;
    }

    public function setStarCount(int $value): static
    {
        $this->starCount = $value;

        return $this;
    }

    public function setText(FormattedText $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'month_count' => $this->monthCount,
            'star_count'  => $this->starCount,
            'text'        => $this->text->jsonSerialize(),
            'user_id'     => $this->userId,
        ];
    }
}
