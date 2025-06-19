<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Group;

/**
 * The main data channel for audio and video data.
 */
class GroupCallDataChannelMain extends GroupCallDataChannel
{
    public const TYPE_NAME = 'groupCallDataChannelMain';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): GroupCallDataChannelMain
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
