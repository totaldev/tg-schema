<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Suggested;

/**
 * Suggests the user to check whether authorization phone number is correct and change the phone number if it is inaccessible.
 */
class SuggestedActionCheckPhoneNumber extends SuggestedAction
{
    public const TYPE_NAME = 'suggestedActionCheckPhoneNumber';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SuggestedActionCheckPhoneNumber
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
