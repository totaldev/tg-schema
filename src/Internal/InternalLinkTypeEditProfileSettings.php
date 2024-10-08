<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to the edit profile section of the application settings.
 */
class InternalLinkTypeEditProfileSettings extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeEditProfileSettings';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeEditProfileSettings
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
