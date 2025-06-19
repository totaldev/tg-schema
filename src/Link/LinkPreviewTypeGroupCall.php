<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

/**
 * The link is a link to a group call that isn't bound to a chat.
 */
class LinkPreviewTypeGroupCall extends LinkPreviewType
{
    public const TYPE_NAME = 'linkPreviewTypeGroupCall';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeGroupCall
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
