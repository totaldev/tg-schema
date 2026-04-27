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
    public const string TYPE_NAME = 'rateSpeechRecognition';

    public function __construct(
        /**
         * Identifier of the chat to which the message belongs.
         */
        protected int  $chatId,
        /**
         * Pass true if the speech recognition is good.
         */
        protected bool $isGood,
        /**
         * Identifier of the message.
         */
        protected int  $messageId,
    ) {}

    public static function fromArray(array $array): RateSpeechRecognition
    {
        return new static(
            chatId   : $array['chat_id'],
            isGood   : $array['is_good'],
            messageId: $array['message_id'],
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

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setIsGood(bool $value): static
    {
        $this->isGood = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'is_good'    => $this->isGood,
            'message_id' => $this->messageId,
        ];
    }
}
