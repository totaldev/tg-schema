<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about a file with messages exported from another app.
 */
class MessageFileType extends TdObject
{
    public const TYPE_NAME = 'MessageFileType';

    public function __construct() {}

    public static function fromArray(array $array): MessageFileType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
