<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

/**
 * The link is a link to a shareable chat folder.
 */
class LinkPreviewTypeShareableChatFolder extends LinkPreviewType
{
    public const TYPE_NAME = 'linkPreviewTypeShareableChatFolder';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeShareableChatFolder
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
