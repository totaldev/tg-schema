<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Replace;

use Totaldev\TgSchema\TdFunction;

/**
 * Replaces the current RTMP URL for streaming to the chat; requires creator privileges
 */
class ReplaceVideoChatRtmpUrl extends TdFunction
{
    public const TYPE_NAME = 'replaceVideoChatRtmpUrl';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    public function __construct(int $chatId)
    {
        $this->chatId = $chatId;
    }

    public static function fromArray(array $array): ReplaceVideoChatRtmpUrl
    {
        return new static(
            $array['chat_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }
}
