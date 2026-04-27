<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Translate;

use Totaldev\TgSchema\TdFunction;

/**
 * Extracts text or caption of the given message and translates it to the given language; must not be used in secret chats. If the current user is a Telegram
 * Premium user, then text formatting is preserved.
 */
class TranslateMessageText extends TdFunction
{
    public const string TYPE_NAME = 'translateMessageText';

    public function __construct(
        /**
         * Identifier of the chat to which the message belongs.
         */
        protected int    $chatId,
        /**
         * Identifier of the message.
         */
        protected int    $messageId,
        /**
         * Language code of the language to which the message is translated. See translateText.to_language_code for the list of supported values.
         */
        protected string $toLanguageCode,
        /**
         * Tone of the translation; see translateText.tone for the list of supported values.
         */
        protected string $tone,
    ) {}

    public static function fromArray(array $array): TranslateMessageText
    {
        return new static(
            chatId        : $array['chat_id'],
            messageId     : $array['message_id'],
            toLanguageCode: $array['to_language_code'],
            tone          : $array['tone'],
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

    public function getToLanguageCode(): string
    {
        return $this->toLanguageCode;
    }

    public function getTone(): string
    {
        return $this->tone;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function setToLanguageCode(string $value): static
    {
        $this->toLanguageCode = $value;

        return $this;
    }

    public function setTone(string $value): static
    {
        $this->tone = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'chat_id'          => $this->chatId,
            'message_id'       => $this->messageId,
            'to_language_code' => $this->toLanguageCode,
            'tone'             => $this->tone,
        ];
    }
}
