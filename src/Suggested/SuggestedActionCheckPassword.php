<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Suggested;

/**
 * Suggests the user to check whether they still remember their 2-step verification password.
 */
class SuggestedActionCheckPassword extends SuggestedAction
{
    public const TYPE_NAME = 'suggestedActionCheckPassword';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SuggestedActionCheckPassword
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
