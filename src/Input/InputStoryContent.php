<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The content of a story to send
 */
class InputStoryContent extends TdObject
{
    public const TYPE_NAME = 'InputStoryContent';

    public function __construct()
    {
    }

    public static function fromArray(array $array): InputStoryContent
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
