<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Start;

use Totaldev\TgSchema\TdObject;

/**
 * Represents result of starting a live story.
 */
class StartLiveStoryResult extends TdObject
{
    public const string TYPE_NAME = 'StartLiveStoryResult';

    public function __construct() {}

    public static function fromArray(array $array): StartLiveStoryResult
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
