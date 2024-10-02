<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\TdObject;

/**
 * Describes type of link preview.
 */
class LinkPreviewType extends TdObject
{
    public const TYPE_NAME = 'LinkPreviewType';

    public function __construct() {}

    public static function fromArray(array $array): LinkPreviewType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
