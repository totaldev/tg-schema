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
    public const TYPE_NAME = 'unreadReaction';

    public function __construct(
        /**
         * Type of the reaction.
         */
        protected ReactionType  $type,
        /**
         * Identifier of the sender, added the reaction.
         */
        protected MessageSender $senderId,
        /**
         * True, if the reaction was added with a big animation.
         */
        protected bool          $isBig,
    ) {}

    public static function fromArray(array $array): UnreadReaction
    {
        return new static(
            TdSchemaRegistry::fromArray($array['type']),
            TdSchemaRegistry::fromArray($array['sender_id']),
            $array['is_big'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'type'      => $this->type->typeSerialize(),
            'sender_id' => $this->senderId->typeSerialize(),
            'is_big'    => $this->isBig,
        ];
    }
}
