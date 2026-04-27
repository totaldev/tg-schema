<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to the screen for creating a new group chat.
 */
class InternalLinkTypeNewGroupChat extends InternalLinkType
{
    public const string TYPE_NAME = 'internalLinkTypeNewGroupChat';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeNewGroupChat
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
