<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Suggested;

/**
 * Suggests the user to set birthdate.
 */
class SuggestedActionSetBirthdate extends SuggestedAction
{
    public const TYPE_NAME = 'suggestedActionSetBirthdate';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SuggestedActionSetBirthdate
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
