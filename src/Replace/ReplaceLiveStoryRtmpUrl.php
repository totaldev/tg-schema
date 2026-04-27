<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Replace;

use Totaldev\TgSchema\TdFunction;

/**
 * Replaces the current RTMP URL for streaming to a live story; requires owner privileges for channel chats.
 */
class ReplaceLiveStoryRtmpUrl extends TdFunction
{
    public const string TYPE_NAME = 'replaceLiveStoryRtmpUrl';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId
    ) {}

    public static function fromArray(array $array): ReplaceLiveStoryRtmpUrl
    {
        return new static(
            chatId: $array['chat_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
        ];
    }
}
