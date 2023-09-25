<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns viewers of a recent outgoing message in a basic group or a supergroup chat. For video notes and voice notes only users, opened content of the message, are returned. The method can be called if message.can_get_viewers == true
 */
class GetMessageViewers extends TdFunction
{
    public const TYPE_NAME = 'getMessageViewers';

    /**
     * Chat identifier
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

    public function __construct(int $chatId, int $messageId)
    {
        $this->chatId = $chatId;
        $this->messageId = $messageId;
    }

    public static function fromArray(array $array): GetMessageViewers
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
