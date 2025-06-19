<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Rate;

use Totaldev\TgSchema\TdFunction;

/**
 * Rates recognized speech in a video note or a voice note message.
 */
class RateSpeechRecognition extends TdFunction
{
    public const TYPE_NAME = 'rateSpeechRecognition';

    public function __construct(
        /**
         * Identifier of the chat to which the message belongs.
         */
        protected int  $chatId,
        /**
         * Identifier of the message.
         */
        protected int  $messageId,
        /**
         * Pass true if the speech recognition is good.
         */
        protected bool $isGood
    ) {}

    public static function fromArray(array $array): RateSpeechRecognition
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['is_good'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getIsGood(): bool
    {
        return $this->isGood;
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
            'is_good'    => $this->isGood,
        ];
    }
}
