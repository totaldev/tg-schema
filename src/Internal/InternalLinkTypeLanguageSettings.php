<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to the language section of the app settings
 */
class InternalLinkTypeLanguageSettings extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeLanguageSettings';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeLanguageSettings
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
