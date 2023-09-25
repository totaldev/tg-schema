<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The ability to set a custom emoji as a forum topic icon
 */
class PremiumFeatureForumTopicIcon extends PremiumFeature
{
    public const TYPE_NAME = 'premiumFeatureForumTopicIcon';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumFeatureForumTopicIcon
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
