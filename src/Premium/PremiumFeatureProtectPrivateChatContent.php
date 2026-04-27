<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * The ability to enable content protection in private chats.
 */
class PremiumFeatureProtectPrivateChatContent extends PremiumFeature
{
    public const string TYPE_NAME = 'premiumFeatureProtectPrivateChatContent';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumFeatureProtectPrivateChatContent
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
