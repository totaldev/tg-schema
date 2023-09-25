<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An invoice from a message of the type messageInvoice
 */
class InputInvoiceMessage extends InputInvoice
{
    public const TYPE_NAME = 'inputInvoiceMessage';

    /**
     * Chat identifier of the message
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

    public function __construct(int $chatId, int $messageId)
    {
        parent::__construct();

        $this->chatId = $chatId;
        $this->messageId = $messageId;
    }

    public static function fromArray(array $array): InputInvoiceMessage
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
        ];
    }
}
