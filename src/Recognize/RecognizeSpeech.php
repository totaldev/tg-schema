<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Recognize;

use Totaldev\TgSchema\TdFunction;

/**
 * Recognizes speech in a video note or a voice note message.
 */
class RecognizeSpeech extends TdFunction
{
    public const TYPE_NAME = 'recognizeSpeech';

    public function __construct(
        /**
         * Identifier of the chat to which the message belongs.
         */
        protected int $chatId,
        /**
         * Identifier of the message. Use messageProperties.can_recognize_speech to check whether the message is suitable.
         */
        protected int $messageId
    ) {}

    public static function fromArray(array $array): RecognizeSpeech
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
