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
    public const string TYPE_NAME = 'chatEvent';

    public function __construct(
        /**
         * The action.
         */
        protected ChatEventAction $action,
        /**
         * Point in time (Unix timestamp) when the event happened.
         */
        protected int             $date,
        /**
         * Chat event identifier.
         */
        protected int             $id,
        /**
         * Identifier of the user or chat who performed the action.
         */
        protected MessageSender   $memberId,
    ) {}

    public static function fromArray(array $array): ChatEvent
    {
        return new static(
            action  : TdSchemaRegistry::fromArray($array['action']),
            date    : $array['date'],
            id      : $array['id'],
            memberId: TdSchemaRegistry::fromArray($array['member_id']),
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

    public function setAction(ChatEventAction $value): static
    {
        $this->action = $value;

        return $this;
    }

    public function setDate(int $value): static
    {
        $this->date = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setMemberId(MessageSender $value): static
    {
        $this->memberId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'action'    => $this->action->jsonSerialize(),
            'date'      => $this->date,
            'id'        => $this->id,
            'member_id' => $this->memberId->jsonSerialize(),
        ];
    }
}
