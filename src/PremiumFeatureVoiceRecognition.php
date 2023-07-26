<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * The ability to convert voice notes to text
 */
class PremiumFeatureVoiceRecognition extends PremiumFeature
{
    public const TYPE_NAME = 'premiumFeatureVoiceRecognition';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumFeatureVoiceRecognition
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
