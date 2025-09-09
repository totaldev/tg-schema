<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Video\VideoChat;

/**
 * A chat video chat state has changed.
 */
class UpdateChatVideoChat extends Update
{
    public const TYPE_NAME = 'updateChatVideoChat';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int       $chatId,
        /**
         * New value of video_chat.
         */
        protected VideoChat $videoChat,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatVideoChat
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['video_chat']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getVideoChat(): VideoChat
    {
        return $this->videoChat;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'video_chat' => $this->videoChat->typeSerialize(),
        ];
    }
}
