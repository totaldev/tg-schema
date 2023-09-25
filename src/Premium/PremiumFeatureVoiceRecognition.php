<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\TdSchemaRegistry;

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
