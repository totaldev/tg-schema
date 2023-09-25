<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns information about a message with the callback button that originated a callback query; for bots only
 */
class GetCallbackQueryMessage extends TdFunction
{
    public const TYPE_NAME = 'getCallbackQueryMessage';

    /**
     * Identifier of the chat the message belongs to
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Message identifier
     *
     * @var int
     */
    protected int $messageId;

    /**
     * Identifier of the callback query
     *
     * @var int
     */
    protected int $callbackQueryId;

    public function __construct(int $chatId, int $messageId, int $callbackQueryId)
    {
        $this->chatId = $chatId;
        $this->messageId = $messageId;
        $this->callbackQueryId = $callbackQueryId;
    }

    public static function fromArray(array $array): GetCallbackQueryMessage
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['callback_query_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
            'callback_query_id' => $this->callbackQueryId,
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

    public function getCallbackQueryId(): int
    {
        return $this->callbackQueryId;
    }
}
