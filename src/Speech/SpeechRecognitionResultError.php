<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Speech;

use Totaldev\TgSchema\Error\Error;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The speech recognition failed.
 */
class SpeechRecognitionResultError extends SpeechRecognitionResult
{
    public const string TYPE_NAME = 'speechRecognitionResultError';

    public function __construct(
        /**
         * Recognition error. An error with a message "MSG_VOICE_TOO_LONG" is returned when media duration is too big to be recognized.
         */
        protected Error $error
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): SpeechRecognitionResultError
    {
        return new static(
            error: TdSchemaRegistry::fromArray($array['error']),
        );
    }

    public function getError(): Error
    {
        return $this->error;
    }

    public function setError(Error $value): static
    {
        $this->error = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'error' => $this->error->jsonSerialize(),
        ];
    }
}
