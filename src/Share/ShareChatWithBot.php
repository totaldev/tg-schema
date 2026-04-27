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
    public const string TYPE_NAME = 'shareChatWithBot';

    public function __construct(
        /**
         * Identifier of the button.
         */
        protected int  $buttonId,
        /**
         * Identifier of the chat with the bot.
         */
        protected int  $chatId,
        /**
         * Identifier of the message with the button.
         */
        protected int  $messageId,
        /**
         * Pass true to check that the chat can be shared by the button instead of actually sharing it. Doesn't check bot_is_member and bot_administrator_rights restrictions. If the bot must be a member, then all chats from getGroupsInCommon and all chats, where the user can add the bot, are suitable. In the latter case the bot will be automatically added to the chat. If the bot must be an administrator, then all chats, where the bot already has requested rights or can be added to administrators by the user, are suitable. In the latter case the bot will be automatically granted requested rights.
         */
        protected bool $onlyCheck,
        /**
         * Identifier of the shared chat.
         */
        protected int  $sharedChatId,
    ) {}

    public static function fromArray(array $array): ShareChatWithBot
    {
        return new static(
            buttonId    : $array['button_id'],
            chatId      : $array['chat_id'],
            messageId   : $array['message_id'],
            onlyCheck   : $array['only_check'],
            sharedChatId: $array['shared_chat_id'],
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

    public function setButtonId(int $value): static
    {
        $this->buttonId = $value;

        return $this;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function setOnlyCheck(bool $value): static
    {
        $this->onlyCheck = $value;

        return $this;
    }

    public function setSharedChatId(int $value): static
    {
        $this->sharedChatId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'button_id'      => $this->buttonId,
            'chat_id'        => $this->chatId,
            'message_id'     => $this->messageId,
            'only_check'     => $this->onlyCheck,
            'shared_chat_id' => $this->sharedChatId,
        ];
    }
}
