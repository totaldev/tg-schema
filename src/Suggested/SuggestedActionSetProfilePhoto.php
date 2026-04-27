<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Suggested;

/**
 * Suggests the user to set profile photo.
 */
class SuggestedActionSetProfilePhoto extends SuggestedAction
{
    public const string TYPE_NAME = 'suggestedActionSetProfilePhoto';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SuggestedActionSetProfilePhoto
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
