<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Speech;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The speech recognition is ongoing
 */
class SpeechRecognitionResultPending extends SpeechRecognitionResult
{
    public const TYPE_NAME = 'speechRecognitionResultPending';

    /**
     * Partially recognized text
     *
     * @var string
     */
    protected string $partialText;

    public function __construct(string $partialText)
    {
        parent::__construct();

        $this->partialText = $partialText;
    }

    public static function fromArray(array $array): SpeechRecognitionResultPending
    {
        return new static(
            $array['partial_text'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'partial_text' => $this->partialText,
        ];
    }

    public function getPartialText(): string
    {
        return $this->partialText;
    }
}
