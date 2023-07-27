<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The content of a message to send
 */
class InputMessageContent extends TdObject
{
    public const TYPE_NAME = 'InputMessageContent';

    public function __construct()
    {
    }

    public static function fromArray(array $array): InputMessageContent
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
