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
 * Represents a reaction applied to a message
 */
class AddedReaction extends TdObject
{
    public const TYPE_NAME = 'addedReaction';

    /**
     * Type of the reaction
     *
     * @var ReactionType
     */
    protected ReactionType $type;

    /**
     * Identifier of the chat member, applied the reaction
     *
     * @var MessageSender
     */
    protected MessageSender $senderId;

    /**
     * Point in time (Unix timestamp) when the reaction was added
     *
     * @var int
     */
    protected int $date;

    public function __construct(ReactionType $type, MessageSender $senderId, int $date)
    {
        $this->type = $type;
        $this->senderId = $senderId;
        $this->date = $date;
    }

    public static function fromArray(array $array): AddedReaction
    {
        return new static(
            TdSchemaRegistry::fromArray($array['type']),
            TdSchemaRegistry::fromArray($array['sender_id']),
            $array['date'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'type' => $this->type->typeSerialize(),
            'sender_id' => $this->senderId->typeSerialize(),
            'date' => $this->date,
        ];
    }

    public function getType(): ReactionType
    {
        return $this->type;
    }

    public function getSenderId(): MessageSender
    {
        return $this->senderId;
    }

    public function getDate(): int
    {
        return $this->date;
    }
}
