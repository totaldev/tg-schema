<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Open;

use Totaldev\TgSchema\TdFunction;

/**
 * Informs TDLib that the message content has been opened (e.g., the user has opened a photo, video, document, location or venue, or has listened to an audio
 * file or voice note message). An updateMessageContentOpened update will be generated if something has changed.
 */
class OpenMessageContent extends TdFunction
{
    public const TYPE_NAME = 'openMessageContent';

    public function __construct(
        /**
         * Chat identifier of the message.
         */
        protected int $chatId,
        /**
         * Identifier of the message with the opened content.
         */
        protected int $messageId
    ) {}

    public static function fromArray(array $array): OpenMessageContent
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
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
        ];
    }
}
