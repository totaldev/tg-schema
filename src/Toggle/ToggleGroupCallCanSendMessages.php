<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Toggles whether participants of a group call can send messages there. Requires groupCall.can_toggle_can_send_messages right.
 */
class ToggleGroupCallCanSendMessages extends TdFunction
{
    public const string TYPE_NAME = 'toggleGroupCallCanSendMessages';

    public function __construct(
        /**
         * New value of the can_send_messages setting.
         */
        protected bool $canSendMessages,
        /**
         * Group call identifier.
         */
        protected int  $groupCallId,
    ) {}

    public static function fromArray(array $array): ToggleGroupCallCanSendMessages
    {
        return new static(
            canSendMessages: $array['can_send_messages'],
            groupCallId    : $array['group_call_id'],
        );
    }

    public function getCanSendMessages(): bool
    {
        return $this->canSendMessages;
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function setCanSendMessages(bool $value): static
    {
        $this->canSendMessages = $value;

        return $this;
    }

    public function setGroupCallId(int $value): static
    {
        $this->groupCallId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'can_send_messages' => $this->canSendMessages,
            'group_call_id'     => $this->groupCallId,
        ];
    }
}
