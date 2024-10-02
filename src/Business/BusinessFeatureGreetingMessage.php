<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Business;

/**
 * The ability to set up a greeting message.
 */
class BusinessFeatureGreetingMessage extends BusinessFeature
{
    public const TYPE_NAME = 'businessFeatureGreetingMessage';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): BusinessFeatureGreetingMessage
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
