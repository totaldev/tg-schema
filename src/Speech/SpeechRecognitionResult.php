<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Speech;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes result of speech recognition in a voice note
 */
class SpeechRecognitionResult extends TdObject
{
    public const TYPE_NAME = 'SpeechRecognitionResult';

    public function __construct()
    {
    }

    public static function fromArray(array $array): SpeechRecognitionResult
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
