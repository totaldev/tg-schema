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
    public const TYPE_NAME = 'messageChatShared';

    public function __construct(
        /**
         * The shared chat.
         */
        protected SharedChat $chat,
        /**
         * Identifier of the keyboard button with the request.
         */
        protected int        $buttonId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageChatShared
    {
        return new static(
            TdSchemaRegistry::fromArray($array['chat']),
            $array['button_id'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'chat'      => $this->chat->typeSerialize(),
            'button_id' => $this->buttonId,
        ];
    }
}
