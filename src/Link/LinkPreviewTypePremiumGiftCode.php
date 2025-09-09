<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

/**
 * The link is a link to a Telegram Premium gift code.
 */
class LinkPreviewTypePremiumGiftCode extends LinkPreviewType
{
    public const TYPE_NAME = 'linkPreviewTypePremiumGiftCode';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypePremiumGiftCode
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
