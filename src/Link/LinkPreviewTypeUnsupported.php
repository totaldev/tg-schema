<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

/**
 * The link preview type is unsupported yet.
 */
class LinkPreviewTypeUnsupported extends LinkPreviewType
{
    public const TYPE_NAME = 'linkPreviewTypeUnsupported';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeUnsupported
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
