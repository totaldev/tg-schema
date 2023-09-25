<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to application settings
 */
class InternalLinkTypeSettings extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeSettings';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeSettings
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
