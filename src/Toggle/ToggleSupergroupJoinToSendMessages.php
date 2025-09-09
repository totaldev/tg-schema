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
    public const TYPE_NAME = 'toggleSupergroupJoinToSendMessages';

    public function __construct(
        /**
         * Identifier of the supergroup that isn't a broadcast group.
         */
        protected int  $supergroupId,
        /**
         * New value of join_to_send_messages.
         */
        protected bool $joinToSendMessages,
    ) {}

    public static function fromArray(array $array): ToggleSupergroupJoinToSendMessages
    {
        return new static(
            $array['supergroup_id'],
            $array['join_to_send_messages'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'supergroup_id'         => $this->supergroupId,
            'join_to_send_messages' => $this->joinToSendMessages,
        ];
    }
}
