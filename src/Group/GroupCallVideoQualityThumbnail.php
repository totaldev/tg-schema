<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Group;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The worst available video quality
 */
class GroupCallVideoQualityThumbnail extends GroupCallVideoQuality
{
    public const TYPE_NAME = 'groupCallVideoQualityThumbnail';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): GroupCallVideoQualityThumbnail
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}