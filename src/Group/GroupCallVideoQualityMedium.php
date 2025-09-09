<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Group;

/**
 * The medium video quality.
 */
class GroupCallVideoQualityMedium extends GroupCallVideoQuality
{
    public const TYPE_NAME = 'groupCallVideoQualityMedium';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): GroupCallVideoQualityMedium
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
