<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Speech;

/**
 * The speech recognition successfully finished.
 */
class SpeechRecognitionResultText extends SpeechRecognitionResult
{
    public const TYPE_NAME = 'speechRecognitionResultText';

    public function __construct(
        /**
         * Recognized text.
         */
        protected string $text
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): SpeechRecognitionResultText
    {
        return new static(
            $array['text'],
        );
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text'  => $this->text,
        ];
    }
}
