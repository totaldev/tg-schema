<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Added;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\Reaction\ReactionType;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a reaction applied to a message.
 */
class AddedReaction extends TdObject
{
    public const TYPE_NAME = 'addedReaction';

    public function __construct(
        /**
         * Type of the reaction.
         */
        protected ReactionType  $type,
        /**
         * Identifier of the chat member, applied the reaction.
         */
        protected MessageSender $senderId,
        /**
         * True, if the reaction was added by the current user.
         */
        protected bool          $isOutgoing,
        /**
         * Point in time (Unix timestamp) when the reaction was added.
         */
        protected int           $date
    ) {}

    public static function fromArray(array $array): AddedReaction
    {
        return new static(
            TdSchemaRegistry::fromArray($array['type']),
            TdSchemaRegistry::fromArray($array['sender_id']),
            $array['is_outgoing'],
            $array['date'],
        );
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getIsOutgoing(): bool
    {
        return $this->isOutgoing;
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
            '@type'       => static::TYPE_NAME,
            'type'        => $this->type->typeSerialize(),
            'sender_id'   => $this->senderId->typeSerialize(),
            'is_outgoing' => $this->isOutgoing,
            'date'        => $this->date,
        ];
    }
}
