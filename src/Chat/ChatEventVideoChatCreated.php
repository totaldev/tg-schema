<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * A video chat was created.
 */
class ChatEventVideoChatCreated extends ChatEventAction
{
    public const string TYPE_NAME = 'chatEventVideoChatCreated';

    public function __construct(
        /**
         * Identifier of the video chat. The video chat can be received through the method getGroupCall.
         */
        protected int $groupCallId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventVideoChatCreated
    {
        return new static(
            groupCallId: $array['group_call_id'],
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function setGroupCallId(int $value): static
    {
        $this->groupCallId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
        ];
    }
}
