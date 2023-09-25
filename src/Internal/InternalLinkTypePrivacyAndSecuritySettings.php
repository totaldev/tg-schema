<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to the privacy and security section of the app settings
 */
class InternalLinkTypePrivacyAndSecuritySettings extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypePrivacyAndSecuritySettings';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypePrivacyAndSecuritySettings
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
