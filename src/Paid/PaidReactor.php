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
    public const TYPE_NAME = 'paidReactor';

    public function __construct(
        /**
         * Identifier of the user or chat that added the reactions; may be null for anonymous reactors that aren't the current user.
         */
        protected ?MessageSender $senderId,
        /**
         * Number of Telegram Stars added.
         */
        protected int            $starCount,
        /**
         * True, if the reactor is one of the most active reactors; can be false if the reactor is the current user.
         */
        protected bool           $isTop,
        /**
         * True, if the paid reaction was added by the current user.
         */
        protected bool           $isMe,
        /**
         * True, if the reactor is anonymous.
         */
        protected bool           $isAnonymous,
    ) {}

    public static function fromArray(array $array): PaidReactor
    {
        return new static(
            isset($array['sender_id']) ? TdSchemaRegistry::fromArray($array['sender_id']) : null,
            $array['star_count'],
            $array['is_top'],
            $array['is_me'],
            $array['is_anonymous'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'sender_id'    => (isset($this->senderId) ? $this->senderId : null),
            'star_count'   => $this->starCount,
            'is_top'       => $this->isTop,
            'is_me'        => $this->isMe,
            'is_anonymous' => $this->isAnonymous,
        ];
    }
}
