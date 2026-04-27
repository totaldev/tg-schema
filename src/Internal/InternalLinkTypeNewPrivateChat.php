<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to the screen for creating a new private chat with a contact.
 */
class InternalLinkTypeNewPrivateChat extends InternalLinkType
{
    public const string TYPE_NAME = 'internalLinkTypeNewPrivateChat';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeNewPrivateChat
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
