<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about messages. If a message is not found, returns null on the corresponding position of the result.
 */
class GetMessages extends TdFunction
{
    public const TYPE_NAME = 'getMessages';

    public function __construct(
        /**
         * Identifier of the chat the messages belong to.
         */
        protected int   $chatId,
        /**
         * Identifiers of the messages to get.
         *
         * @var int[]
         */
        protected array $messageIds,
    ) {}

    public static function fromArray(array $array): GetMessages
    {
        return new static(
            $array['chat_id'],
            $array['message_ids'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageIds(): array
    {
        return $this->messageIds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'chat_id'     => $this->chatId,
            'message_ids' => $this->messageIds,
        ];
    }
}
