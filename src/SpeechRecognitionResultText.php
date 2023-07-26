<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * The speech recognition successfully finished
 */
class SpeechRecognitionResultText extends SpeechRecognitionResult
{
    public const TYPE_NAME = 'speechRecognitionResultText';

    /**
     * Recognized text
     *
     * @var string
     */
    protected string $text;

    public function __construct(string $text)
    {
        parent::__construct();

        $this->text = $text;
    }

    public static function fromArray(array $array): SpeechRecognitionResultText
    {
        return new static(
            $array['text'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text' => $this->text,
        ];
    }

    public function getText(): string
    {
        return $this->text;
    }
}
