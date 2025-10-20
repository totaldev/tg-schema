<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Business;

/**
 * The ability to set up an away message.
 */
class BusinessFeatureAwayMessage extends BusinessFeature
{
    public const TYPE_NAME = 'businessFeatureAwayMessage';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): BusinessFeatureAwayMessage
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
