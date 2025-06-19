<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Replace;

use Totaldev\TgSchema\TdFunction;

/**
 * Replaces the current RTMP URL for streaming to the video chat of a chat; requires owner privileges in the chat.
 */
class ReplaceVideoChatRtmpUrl extends TdFunction
{
    public const TYPE_NAME = 'replaceVideoChatRtmpUrl';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId
    ) {}

    public static function fromArray(array $array): ReplaceVideoChatRtmpUrl
    {
        return new static(
            $array['chat_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
        ];
    }
}
