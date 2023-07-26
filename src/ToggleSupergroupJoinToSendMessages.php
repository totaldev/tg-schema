<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Toggles whether joining is mandatory to send messages to a discussion supergroup; requires can_restrict_members administrator right
 */
class ToggleSupergroupJoinToSendMessages extends TdFunction
{
    public const TYPE_NAME = 'toggleSupergroupJoinToSendMessages';

    /**
     * Identifier of the supergroup
     *
     * @var int
     */
    protected int $supergroupId;

    /**
     * New value of join_to_send_messages
     *
     * @var bool
     */
    protected bool $joinToSendMessages;

    public function __construct(int $supergroupId, bool $joinToSendMessages)
    {
        $this->supergroupId = $supergroupId;
        $this->joinToSendMessages = $joinToSendMessages;
    }

    public static function fromArray(array $array): ToggleSupergroupJoinToSendMessages
    {
        return new static(
            $array['supergroup_id'],
            $array['join_to_send_messages'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'supergroup_id' => $this->supergroupId,
            'join_to_send_messages' => $this->joinToSendMessages,
        ];
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function getJoinToSendMessages(): bool
    {
        return $this->joinToSendMessages;
    }
}
