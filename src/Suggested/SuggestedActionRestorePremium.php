<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Suggested;

/**
 * Suggests the user to restore a recently expired Premium subscription.
 */
class SuggestedActionRestorePremium extends SuggestedAction
{
    public const TYPE_NAME = 'suggestedActionRestorePremium';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SuggestedActionRestorePremium
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
