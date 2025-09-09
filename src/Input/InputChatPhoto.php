<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a photo to be set as a user profile or chat photo.
 */
class InputChatPhoto extends TdObject
{
    public const TYPE_NAME = 'InputChatPhoto';

    public function __construct() {}

    public static function fromArray(array $array): InputChatPhoto
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
