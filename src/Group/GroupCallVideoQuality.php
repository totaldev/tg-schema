<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Group;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes the quality of a group call video
 */
class GroupCallVideoQuality extends TdObject
{
    public const TYPE_NAME = 'GroupCallVideoQuality';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GroupCallVideoQuality
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}