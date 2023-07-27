<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns reactions, which can be added to a message. The list can change after updateActiveEmojiReactions, updateChatAvailableReactions for the chat, or updateMessageInteractionInfo for the message
 */
class GetMessageAvailableReactions extends TdFunction
{
    public const TYPE_NAME = 'getMessageAvailableReactions';

    /**
     * Identifier of the chat to which the message belongs
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifier of the message
     *
     * @var int
     */
    protected int $messageId;

    /**
     * Number of reaction per row, 5-25
     *
     * @var int
     */
    protected int $rowSize;

    public function __construct(int $chatId, int $messageId, int $rowSize)
    {
        $this->chatId = $chatId;
        $this->messageId = $messageId;
        $this->rowSize = $rowSize;
    }

    public static function fromArray(array $array): GetMessageAvailableReactions
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['row_size'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
            'row_size' => $this->rowSize,
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

    public function getRowSize(): int
    {
        return $this->rowSize;
    }
}
