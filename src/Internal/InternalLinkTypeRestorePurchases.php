<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link forces restore of App Store purchases when opened. For official iOS application only.
 */
class InternalLinkTypeRestorePurchases extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeRestorePurchases';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeRestorePurchases
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
