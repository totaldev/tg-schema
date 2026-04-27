<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Emoji;

use Totaldev\TgSchema\TdObject;

/**
 * Describes type of emoji status.
 */
class EmojiStatusType extends TdObject
{
    public const string TYPE_NAME = 'EmojiStatusType';

    public function __construct() {}

    public static function fromArray(array $array): EmojiStatusType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
