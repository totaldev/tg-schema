<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * The number of online group members has changed. This update with non-zero number of online group members is sent only for currently opened chats. There is
 * no guarantee that it is sent just after the number of online users has changed.
 */
class UpdateChatOnlineMemberCount extends Update
{
    public const TYPE_NAME = 'updateChatOnlineMemberCount';

    public function __construct(
        /**
         * Identifier of the chat.
         */
        protected int $chatId,
        /**
         * New number of online members in the chat, or 0 if unknown.
         */
        protected int $onlineMemberCount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatOnlineMemberCount
    {
        return new static(
            $array['chat_id'],
            $array['online_member_count'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getOnlineMemberCount(): int
    {
        return $this->onlineMemberCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'chat_id'             => $this->chatId,
            'online_member_count' => $this->onlineMemberCount,
        ];
    }
}
