<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Compose;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes text using an AI model; must not be used in secret chats. May return an error with a message "AICOMPOSE_FLOOD_PREMIUM" if Telegram Premium is
 * required to send further requests.
 */
class ComposeTextWithAi extends TdFunction
{
    public const string TYPE_NAME = 'composeTextWithAi';

    public function __construct(
        /**
         * Pass true to add emoji to the text.
         */
        protected bool          $addEmojis,
        /**
         * Name of the style of the resulted text; handle updateTextCompositionStyles to get the list of supported styles; pass an empty string to keep the current style of the text.
         */
        protected string        $styleName,
        /**
         * The original text.
         */
        protected FormattedText $text,
        /**
         * Pass a language code to which the text will be translated; pass an empty string if translation isn't needed. See translateText.to_language_code for the list of supported values.
         */
        protected string        $translateToLanguageCode,
    ) {}

    public static function fromArray(array $array): ComposeTextWithAi
    {
        return new static(
            addEmojis              : $array['add_emojis'],
            styleName              : $array['style_name'],
            text                   : TdSchemaRegistry::fromArray($array['text']),
            translateToLanguageCode: $array['translate_to_language_code'],
        );
    }

    public function getAddEmojis(): bool
    {
        return $this->addEmojis;
    }

    public function getStyleName(): string
    {
        return $this->styleName;
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function getTranslateToLanguageCode(): string
    {
        return $this->translateToLanguageCode;
    }

    public function setAddEmojis(bool $value): static
    {
        $this->addEmojis = $value;

        return $this;
    }

    public function setStyleName(string $value): static
    {
        $this->styleName = $value;

        return $this;
    }

    public function setText(FormattedText $value): static
    {
        $this->text = $value;

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
            'add_emojis'                 => $this->addEmojis,
            'style_name'                 => $this->styleName,
            'text'                       => $this->text->jsonSerialize(),
            'translate_to_language_code' => $this->translateToLanguageCode,
        ];
    }
}
