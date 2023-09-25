<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Speech;

use Totaldev\TgSchema\Error\Error;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The speech recognition failed
 */
class SpeechRecognitionResultError extends SpeechRecognitionResult
{
    public const TYPE_NAME = 'speechRecognitionResultError';

    /**
     * Recognition error
     *
     * @var Error
     */
    protected Error $error;

    public function __construct(Error $error)
    {
        parent::__construct();

        $this->error = $error;
    }

    public static function fromArray(array $array): SpeechRecognitionResultError
    {
        return new static(
            TdSchemaRegistry::fromArray($array['error']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'error' => $this->error->typeSerialize(),
        ];
    }

    public function getError(): Error
    {
        return $this->error;
    }
}
