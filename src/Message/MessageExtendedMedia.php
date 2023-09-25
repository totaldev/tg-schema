<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a media, which is attached to an invoice
 */
class MessageExtendedMedia extends TdObject
{
    public const TYPE_NAME = 'MessageExtendedMedia';

    public function __construct()
    {
    }

    public static function fromArray(array $array): MessageExtendedMedia
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
