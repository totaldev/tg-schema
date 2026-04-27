<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Paid;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a user that added paid reactions.
 */
class PaidReactor extends TdObject
{
    public const string TYPE_NAME = 'paidReactor';

    public function __construct(
        /**
         * True, if the reactor is anonymous.
         */
        protected bool           $isAnonymous,
        /**
         * True, if the paid reaction was added by the current user.
         */
        protected bool           $isMe,
        /**
         * True, if the reactor is one of the most active reactors; may be false if the reactor is the current user.
         */
        protected bool           $isTop,
        /**
         * Identifier of the user or chat that added the reactions; may be null for anonymous reactors that aren't the current user.
         */
        protected ?MessageSender $senderId,
        /**
         * Number of Telegram Stars added.
         */
        protected int            $starCount,
    ) {}

    public static function fromArray(array $array): PaidReactor
    {
        return new static(
            isAnonymous: $array['is_anonymous'],
            isMe       : $array['is_me'],
            isTop      : $array['is_top'],
            senderId   : (isset($array['sender_id']) ? TdSchemaRegistry::fromArray($array['sender_id']) : null),
            starCount  : $array['star_count'],
        );
    }

    public function getIsAnonymous(): bool
    {
        return $this->isAnonymous;
    }

    public function getIsMe(): bool
    {
        return $this->isMe;
    }

    public function getIsTop(): bool
    {
        return $this->isTop;
    }

    public function getSenderId(): ?MessageSender
    {
        return $this->senderId;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function setIsAnonymous(bool $value): static
    {
        $this->isAnonymous = $value;

        return $this;
    }

    public function setIsMe(bool $value): static
    {
        $this->isMe = $value;

        return $this;
    }

    public function setIsTop(bool $value): static
    {
        $this->isTop = $value;

        return $this;
    }

    public function setSenderId(?MessageSender $value): static
    {
        $this->senderId = $value;

        return $this;
    }

    public function setStarCount(int $value): static
    {
        $this->starCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'is_anonymous' => $this->isAnonymous,
            'is_me'        => $this->isMe,
            'is_top'       => $this->isTop,
            'sender_id'    => (null !== $this->senderId ? $this->senderId->jsonSerialize() : null),
            'star_count'   => $this->starCount,
        ];
    }
}
