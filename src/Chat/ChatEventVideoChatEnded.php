<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * A video chat was ended.
 */
class ChatEventVideoChatEnded extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventVideoChatEnded';

    public function __construct(
        /**
         * Identifier of the video chat. The video chat can be received through the method getGroupCall.
         */
        protected int $groupCallId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventVideoChatEnded
    {
        return new static(
            $array['group_call_id'],
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
        ];
    }
}
