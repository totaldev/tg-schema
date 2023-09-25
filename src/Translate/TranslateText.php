<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Translate;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Translates a text to the given language. If the current user is a Telegram Premium user, then text formatting is preserved
 */
class TranslateText extends TdFunction
{
    public const TYPE_NAME = 'translateText';

    /**
     * Text to translate
     *
     * @var FormattedText
     */
    protected FormattedText $text;

    /**
     * Language code of the language to which the message is translated. Must be one of "af", "sq", "am", "ar", "hy", "az", "eu", "be", "bn", "bs", "bg", "ca",
     * "ceb", "zh-CN", "zh", "zh-Hans", "zh-TW", "zh-Hant", "co", "hr", "cs", "da", "nl", "en", "eo", "et", "fi", "fr", "fy", "gl", "ka", "de", "el", "gu",
     * "ht", "ha", "haw", "he", "iw", "hi", "hmn", "hu", "is", "ig", "id", "in", "ga", "it", "ja", "jv", "kn", "kk", "km", "rw", "ko", "ku", "ky", "lo", "la",
     * "lv", "lt", "lb", "mk", "mg", "ms", "ml", "mt", "mi", "mr", "mn", "my", "ne", "no", "ny", "or", "ps", "fa", "pl", "pt", "pa", "ro", "ru", "sm", "gd",
     * "sr", "st", "sn", "sd", "si", "sk", "sl", "so", "es", "su", "sw", "sv", "tl", "tg", "ta", "tt", "te", "th", "tr", "tk", "uk", "ur", "ug", "uz", "vi",
     * "cy", "xh", "yi", "ji", "yo", "zu"
     *
     * @var string
     */
    protected string $toLanguageCode;

    public function __construct(FormattedText $text, string $toLanguageCode)
    {
        $this->text = $text;
        $this->toLanguageCode = $toLanguageCode;
    }

    public static function fromArray(array $array): TranslateText
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
            $array['to_language_code'],
        );
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function getToLanguageCode(): string
    {
        return $this->toLanguageCode;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text' => $this->text->typeSerialize(),
            'to_language_code' => $this->toLanguageCode,
        ];
    }
}
