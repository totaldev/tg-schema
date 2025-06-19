<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Group;

use Totaldev\TgSchema\TdObject;

/**
 * Describes data channel for a group call.
 */
class GroupCallDataChannel extends TdObject
{
    public const TYPE_NAME = 'GroupCallDataChannel';

    public function __construct() {}

    public static function fromArray(array $array): GroupCallDataChannel
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
