<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns RTMP URL for streaming to the chat; requires owner privileges.
 */
class GetVideoChatRtmpUrl extends TdFunction
{
    public const TYPE_NAME = 'getVideoChatRtmpUrl';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId
    ) {}

    public static function fromArray(array $array): GetVideoChatRtmpUrl
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
