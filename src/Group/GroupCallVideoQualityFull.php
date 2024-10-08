<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Group;

/**
 * The best available video quality.
 */
class GroupCallVideoQualityFull extends GroupCallVideoQuality
{
    public const TYPE_NAME = 'groupCallVideoQualityFull';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): GroupCallVideoQualityFull
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
