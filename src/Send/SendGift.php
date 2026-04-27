<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends a gift to another user or channel chat. May return an error with a message "STARGIFT_USAGE_LIMITED" if the gift was sold out.
 */
class SendGift extends TdFunction
{
    public const string TYPE_NAME = 'sendGift';

    public function __construct(
        /**
         * Identifier of the gift to send.
         */
        protected int           $giftId,
        /**
         * Pass true to show gift text and sender only to the gift receiver; otherwise, everyone will be able to see them.
         */
        protected bool          $isPrivate,
        /**
         * Identifier of the user or the channel chat that will receive the gift; limited gifts can't be sent to channel chats.
         */
        protected MessageSender $ownerId,
        /**
         * Pass true to additionally pay for the gift upgrade and allow the receiver to upgrade it for free.
         */
        protected bool          $payForUpgrade,
        /**
         * Text to show along with the gift; 0-getOption("gift_text_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities are allowed. Must be empty if the receiver enabled paid messages.
         */
        protected FormattedText $text,
    ) {}

    public static function fromArray(array $array): SendGift
    {
        return new static(
            giftId       : $array['gift_id'],
            isPrivate    : $array['is_private'],
            ownerId      : TdSchemaRegistry::fromArray($array['owner_id']),
            payForUpgrade: $array['pay_for_upgrade'],
            text         : TdSchemaRegistry::fromArray($array['text']),
        );
    }

    public function getGiftId(): int
    {
        return $this->giftId;
    }

    public function getIsPrivate(): bool
    {
        return $this->isPrivate;
    }

    public function getOwnerId(): MessageSender
    {
        return $this->ownerId;
    }

    public function getPayForUpgrade(): bool
    {
        return $this->payForUpgrade;
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function setGiftId(int $value): static
    {
        $this->giftId = $value;

        return $this;
    }

    public function setIsPrivate(bool $value): static
    {
        $this->isPrivate = $value;

        return $this;
    }

    public function setOwnerId(MessageSender $value): static
    {
        $this->ownerId = $value;

        return $this;
    }

    public function setPayForUpgrade(bool $value): static
    {
        $this->payForUpgrade = $value;

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
            '@type'           => static::TYPE_NAME,
            'gift_id'         => $this->giftId,
            'is_private'      => $this->isPrivate,
            'owner_id'        => $this->ownerId->jsonSerialize(),
            'pay_for_upgrade' => $this->payForUpgrade,
            'text'            => $this->text->jsonSerialize(),
        ];
    }
}
