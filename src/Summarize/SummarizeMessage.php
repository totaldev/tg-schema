<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Summarize;

use Totaldev\TgSchema\TdFunction;

/**
 * Summarizes content of the message with non-empty summary_language_code.
 */
class SummarizeMessage extends TdFunction
{
    public const string TYPE_NAME = 'summarizeMessage';

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
         * Tone of the summarization; see translateText.tone for the list of supported values.
         */
        protected string $tone,
        /**
         * Pass a language code to which the summary will be translated; pass an empty string if translation isn't needed. See translateText.to_language_code for the list of supported values.
         */
        protected string $translateToLanguageCode,
    ) {}

    public static function fromArray(array $array): SummarizeMessage
    {
        return new static(
            chatId                 : $array['chat_id'],
            messageId              : $array['message_id'],
            tone                   : $array['tone'],
            translateToLanguageCode: $array['translate_to_language_code'],
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

    public function getTone(): string
    {
        return $this->tone;
    }

    public function getTranslateToLanguageCode(): string
    {
        return $this->translateToLanguageCode;
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

    public function setTone(string $value): static
    {
        $this->tone = $value;

        return $this;
    }

    public function setTranslateToLanguageCode(string $value): static
    {
        $this->translateToLanguageCode = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                      => static::TYPE_NAME,
            'chat_id'                    => $this->chatId,
            'message_id'                 => $this->messageId,
            'tone'                       => $this->tone,
            'translate_to_language_code' => $this->translateToLanguageCode,
        ];
    }
}
