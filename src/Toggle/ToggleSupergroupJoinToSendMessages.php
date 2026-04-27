<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Toggles whether joining is mandatory to send messages to a discussion supergroup; requires can_restrict_members administrator right.
 */
class ToggleSupergroupJoinToSendMessages extends TdFunction
{
    public const string TYPE_NAME = 'toggleSupergroupJoinToSendMessages';

    public function __construct(
        /**
         * New value of join_to_send_messages.
         */
        protected bool $joinToSendMessages,
        /**
         * Identifier of the supergroup that isn't a broadcast group.
         */
        protected int  $supergroupId,
    ) {}

    public static function fromArray(array $array): ToggleSupergroupJoinToSendMessages
    {
        return new static(
            joinToSendMessages: $array['join_to_send_messages'],
            supergroupId      : $array['supergroup_id'],
        );
    }

    public function getJoinToSendMessages(): bool
    {
        return $this->joinToSendMessages;
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function setJoinToSendMessages(bool $value): static
    {
        $this->joinToSendMessages = $value;

        return $this;
    }

    public function setSupergroupId(int $value): static
    {
        $this->supergroupId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'join_to_send_messages' => $this->joinToSendMessages,
            'supergroup_id'         => $this->supergroupId,
        ];
    }
}
