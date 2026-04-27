<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Toggles whether participants of a group call can send messages there. Requires groupCall.can_toggle_are_messages_allowed right.
 */
class ToggleGroupCallAreMessagesAllowed extends TdFunction
{
    public const string TYPE_NAME = 'toggleGroupCallAreMessagesAllowed';

    public function __construct(
        /**
         * New value of the are_messages_allowed setting.
         */
        protected bool $areMessagesAllowed,
        /**
         * Group call identifier.
         */
        protected int  $groupCallId,
    ) {}

    public static function fromArray(array $array): ToggleGroupCallAreMessagesAllowed
    {
        return new static(
            areMessagesAllowed: $array['are_messages_allowed'],
            groupCallId       : $array['group_call_id'],
        );
    }

    public function getAreMessagesAllowed(): bool
    {
        return $this->areMessagesAllowed;
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function setAreMessagesAllowed(bool $value): static
    {
        $this->areMessagesAllowed = $value;

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
            '@type'                => static::TYPE_NAME,
            'are_messages_allowed' => $this->areMessagesAllowed,
            'group_call_id'        => $this->groupCallId,
        ];
    }
}
