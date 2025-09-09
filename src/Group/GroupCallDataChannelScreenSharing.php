<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Group;

/**
 * The data channel for screen sharing.
 */
class GroupCallDataChannelScreenSharing extends GroupCallDataChannel
{
    public const TYPE_NAME = 'groupCallDataChannelScreenSharing';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): GroupCallDataChannelScreenSharing
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
