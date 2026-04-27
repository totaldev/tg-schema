<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

/**
 * The link is a link to a dialog for creating of a managed bot.
 */
class LinkPreviewTypeRequestManagedBot extends LinkPreviewType
{
    public const string TYPE_NAME = 'linkPreviewTypeRequestManagedBot';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeRequestManagedBot
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
