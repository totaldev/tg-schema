<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to the screen for creating a new channel chat.
 */
class InternalLinkTypeNewChannelChat extends InternalLinkType
{
    public const string TYPE_NAME = 'internalLinkTypeNewChannelChat';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeNewChannelChat
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
