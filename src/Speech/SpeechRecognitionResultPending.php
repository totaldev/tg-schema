<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Speech;

/**
 * The speech recognition is ongoing.
 */
class SpeechRecognitionResultPending extends SpeechRecognitionResult
{
    public const TYPE_NAME = 'speechRecognitionResultPending';

    public function __construct(
        /**
         * Partially recognized text.
         */
        protected string $partialText
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): SpeechRecognitionResultPending
    {
        return new static(
            $array['partial_text'],
        );
    }

    public function getPartialText(): string
    {
        return $this->partialText;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'partial_text' => $this->partialText,
        ];
    }
}
