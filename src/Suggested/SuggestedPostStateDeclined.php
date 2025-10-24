<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Suggested;

/**
 * The post was declined.
 */
class SuggestedPostStateDeclined extends SuggestedPostState
{
    public const string TYPE_NAME = 'suggestedPostStateDeclined';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SuggestedPostStateDeclined
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
