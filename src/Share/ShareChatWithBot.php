<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Share;

use Totaldev\TgSchema\TdFunction;

/**
 * Shares a chat after pressing a keyboardButtonTypeRequestChat button with the bot.
 */
class ShareChatWithBot extends TdFunction
{
    public const TYPE_NAME = 'shareChatWithBot';

    public function __construct(
        /**
         * Identifier of the chat with the bot.
         */
        protected int  $chatId,
        /**
         * Identifier of the message with the button.
         */
        protected int  $messageId,
        /**
         * Identifier of the button.
         */
        protected int  $buttonId,
        /**
         * Identifier of the shared chat.
         */
        protected int  $sharedChatId,
        /**
         * Pass true to check that the chat can be shared by the button instead of actually sharing it. Doesn't check bot_is_member and bot_administrator_rights restrictions. If the bot must be a member, then all chats from getGroupsInCommon and all chats, where the user can add the bot, are suitable. In the latter case the bot will be automatically added to the chat. If the bot must be an administrator, then all chats, where the bot already has requested rights or can be added to administrators by the user, are suitable. In the latter case the bot will be automatically granted requested rights.
         */
        protected bool $onlyCheck
    ) {}

    public static function fromArray(array $array): ShareChatWithBot
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['button_id'],
            $array['shared_chat_id'],
            $array['only_check'],
        );
    }

    public function getButtonId(): int
    {
        return $this->buttonId;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getOnlyCheck(): bool
    {
        return $this->onlyCheck;
    }

    public function getSharedChatId(): int
    {
        return $this->sharedChatId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'chat_id'        => $this->chatId,
            'message_id'     => $this->messageId,
            'button_id'      => $this->buttonId,
            'shared_chat_id' => $this->sharedChatId,
            'only_check'     => $this->onlyCheck,
        ];
    }
}
