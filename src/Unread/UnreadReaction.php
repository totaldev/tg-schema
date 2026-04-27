<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Unread;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\Reaction\ReactionType;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about an unread reaction to a message.
 */
class UnreadReaction extends TdObject
{
    public const string TYPE_NAME = 'unreadReaction';

    public function __construct(
        /**
         * True, if the reaction was added with a big animation.
         */
        protected bool          $isBig,
        /**
         * Identifier of the sender, added the reaction.
         */
        protected MessageSender $senderId,
        /**
         * Type of the reaction.
         */
        protected ReactionType  $type,
    ) {}

    public static function fromArray(array $array): UnreadReaction
    {
        return new static(
            isBig   : $array['is_big'],
            senderId: TdSchemaRegistry::fromArray($array['sender_id']),
            type    : TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function getIsBig(): bool
    {
        return $this->isBig;
    }

    public function getSenderId(): MessageSender
    {
        return $this->senderId;
    }

    public function getType(): ReactionType
    {
        return $this->type;
    }

    public function setIsBig(bool $value): static
    {
        $this->isBig = $value;

        return $this;
    }

    public function setSenderId(MessageSender $value): static
    {
        $this->senderId = $value;

        return $this;
    }

    public function setType(ReactionType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'is_big'    => $this->isBig,
            'sender_id' => $this->senderId->jsonSerialize(),
            'type'      => $this->type->jsonSerialize(),
        ];
    }
}
