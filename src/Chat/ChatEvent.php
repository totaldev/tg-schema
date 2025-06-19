<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a chat event.
 */
class ChatEvent extends TdObject
{
    public const TYPE_NAME = 'chatEvent';

    public function __construct(
        /**
         * Chat event identifier.
         */
        protected int             $id,
        /**
         * Point in time (Unix timestamp) when the event happened.
         */
        protected int             $date,
        /**
         * Identifier of the user or chat who performed the action.
         */
        protected MessageSender   $memberId,
        /**
         * The action.
         */
        protected ChatEventAction $action
    ) {}

    public static function fromArray(array $array): ChatEvent
    {
        return new static(
            $array['id'],
            $array['date'],
            TdSchemaRegistry::fromArray($array['member_id']),
            TdSchemaRegistry::fromArray($array['action']),
        );
    }

    public function getAction(): ChatEventAction
    {
        return $this->action;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getMemberId(): MessageSender
    {
        return $this->memberId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'id'        => $this->id,
            'date'      => $this->date,
            'member_id' => $this->memberId->typeSerialize(),
            'action'    => $this->action->typeSerialize(),
        ];
    }
}
