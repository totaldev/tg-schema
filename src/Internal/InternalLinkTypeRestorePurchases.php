<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Internal;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link forces restore of App Store purchases when opened. For official iOS application only
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
