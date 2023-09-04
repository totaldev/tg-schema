<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The current user shared a chat, which was requested by the bot
 */
class MessageChatShared extends MessageContent
{
    public const TYPE_NAME = 'messageChatShared';

    /**
     * Identifier of the shared chat
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifier of the keyboard button with the request
     *
     * @var int
     */
    protected int $buttonId;

    public function __construct(int $chatId, int $buttonId)
    {
        parent::__construct();

        $this->chatId = $chatId;
        $this->buttonId = $buttonId;
    }

    public static function fromArray(array $array): MessageChatShared
    {
        return new static(
            $array['chat_id'],
            $array['button_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'button_id' => $this->buttonId,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getButtonId(): int
    {
        return $this->buttonId;
    }
}
