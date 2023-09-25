<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to the theme section of the app settings
 */
class InternalLinkTypeThemeSettings extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeThemeSettings';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeThemeSettings
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
