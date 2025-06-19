<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Affiliate;

use Totaldev\TgSchema\TdObject;

/**
 * Describes type of affiliate for an affiliate program.
 */
class AffiliateType extends TdObject
{
    public const TYPE_NAME = 'AffiliateType';

    public function __construct() {}

    public static function fromArray(array $array): AffiliateType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
