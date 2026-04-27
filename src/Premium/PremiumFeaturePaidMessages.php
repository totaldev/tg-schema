<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * The ability to require a payment for incoming messages in new chats.
 */
class PremiumFeaturePaidMessages extends PremiumFeature
{
    public const string TYPE_NAME = 'premiumFeaturePaidMessages';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumFeaturePaidMessages
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
