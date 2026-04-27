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
    public const string TYPE_NAME = 'addedReaction';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the reaction was added.
         */
        protected int           $date,
        /**
         * True, if the reaction was added by the current user.
         */
        protected bool          $isOutgoing,
        /**
         * Identifier of the chat member, applied the reaction.
         */
        protected MessageSender $senderId,
        /**
         * Type of the reaction.
         */
        protected ReactionType  $type,
    ) {}

    public static function fromArray(array $array): AddedReaction
    {
        return new static(
            date      : $array['date'],
            isOutgoing: $array['is_outgoing'],
            senderId  : TdSchemaRegistry::fromArray($array['sender_id']),
            type      : TdSchemaRegistry::fromArray($array['type']),
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

    public function setDate(int $value): static
    {
        $this->date = $value;

        return $this;
    }

    public function setIsOutgoing(bool $value): static
    {
        $this->isOutgoing = $value;

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
            '@type'       => static::TYPE_NAME,
            'date'        => $this->date,
            'is_outgoing' => $this->isOutgoing,
            'sender_id'   => $this->senderId->jsonSerialize(),
            'type'        => $this->type->jsonSerialize(),
        ];
    }
}
