<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Suggested;

/**
 * Suggests the user to add a passkey for login using addLoginPasskey.
 */
class SuggestedActionAddLoginPasskey extends SuggestedAction
{
    public const string TYPE_NAME = 'suggestedActionAddLoginPasskey';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SuggestedActionAddLoginPasskey
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
