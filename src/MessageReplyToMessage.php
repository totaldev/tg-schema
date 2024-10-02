<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Describes a replied message
 */
class MessageReplyToMessage extends MessageReplyTo
{
    public const TYPE_NAME = 'messageReplyToMessage';

    /**
     * The identifier of the chat to which the replied message belongs; ignored for outgoing replies. For example, messages in the Replies chat are replies to messages in different chats
     *
     * @var int
     */
    protected int $chatId;

    /**
     * The identifier of the replied message
     *
     * @var int
     */
    protected int $messageId;

    public function __construct(int $chatId, int $messageId)
    {
        parent::__construct();

        $this->chatId = $chatId;
        $this->messageId = $messageId;
    }

    public static function fromArray(array $array): MessageReplyToMessage
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }
}
