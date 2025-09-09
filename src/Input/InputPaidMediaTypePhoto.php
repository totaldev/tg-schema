<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * The media is a photo. The photo must be at most 10 MB in size. The photo's width and height must not exceed 10000 in total. Width and height ratio must be
 * at most 20.
 */
class InputPaidMediaTypePhoto extends InputPaidMediaType
{
    public const TYPE_NAME = 'inputPaidMediaTypePhoto';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): InputPaidMediaTypePhoto
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
