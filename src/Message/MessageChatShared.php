<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Shared\SharedChat;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The current user shared a chat, which was requested by the bot.
 */
class MessageChatShared extends MessageContent
{
    public const string TYPE_NAME = 'messageChatShared';

    public function __construct(
        /**
         * Identifier of the keyboard button with the request.
         */
        protected int        $buttonId,
        /**
         * The shared chat.
         */
        protected SharedChat $chat,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageChatShared
    {
        return new static(
            buttonId: $array['button_id'],
            chat    : TdSchemaRegistry::fromArray($array['chat']),
        );
    }

    public function getButtonId(): int
    {
        return $this->buttonId;
    }

    public function getChat(): SharedChat
    {
        return $this->chat;
    }

    public function setButtonId(int $value): static
    {
        $this->buttonId = $value;

        return $this;
    }

    public function setChat(SharedChat $value): static
    {
        $this->chat = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'button_id' => $this->buttonId,
            'chat'      => $this->chat->jsonSerialize(),
        ];
    }
}
