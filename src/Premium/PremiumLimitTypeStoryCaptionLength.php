<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The maximum length of captions of sent stories
 */
class PremiumLimitTypeStoryCaptionLength extends PremiumLimitType
{
    public const TYPE_NAME = 'premiumLimitTypeStoryCaptionLength';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumLimitTypeStoryCaptionLength
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
