<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Translate;

use Totaldev\TgSchema\TdFunction;

/**
 * Extracts text or caption of the given message and translates it to the given language. If the current user is a Telegram Premium user, then text formatting
 * is preserved.
 */
class TranslateMessageText extends TdFunction
{
    public const TYPE_NAME = 'translateMessageText';

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
         * Language code of the language to which the message is translated. Must be one of "af", "sq", "am", "ar", "hy", "az", "eu", "be", "bn", "bs", "bg", "ca", "ceb", "zh-CN", "zh", "zh-Hans", "zh-TW", "zh-Hant", "co", "hr", "cs", "da", "nl", "en", "eo", "et", "fi", "fr", "fy", "gl", "ka", "de", "el", "gu", "ht", "ha", "haw", "he", "iw", "hi", "hmn", "hu", "is", "ig", "id", "in", "ga", "it", "ja", "jv", "kn", "kk", "km", "rw", "ko", "ku", "ky", "lo", "la", "lv", "lt", "lb", "mk", "mg", "ms", "ml", "mt", "mi", "mr", "mn", "my", "ne", "no", "ny", "or", "ps", "fa", "pl", "pt", "pa", "ro", "ru", "sm", "gd", "sr", "st", "sn", "sd", "si", "sk", "sl", "so", "es", "su", "sw", "sv", "tl", "tg", "ta", "tt", "te", "th", "tr", "tk", "uk", "ur", "ug", "uz", "vi", "cy", "xh", "yi", "ji", "yo", "zu".
         */
        protected string $toLanguageCode,
    ) {}

    public static function fromArray(array $array): TranslateMessageText
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['to_language_code'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'chat_id'          => $this->chatId,
            'message_id'       => $this->messageId,
            'to_language_code' => $this->toLanguageCode,
        ];
    }
}
