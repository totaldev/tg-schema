<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Suggested;

/**
 * Suggests the user to subscribe to the Premium subscription with annual payments
 */
class SuggestedActionSubscribeToAnnualPremium extends SuggestedAction
{
    public const TYPE_NAME = 'suggestedActionSubscribeToAnnualPremium';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SuggestedActionSubscribeToAnnualPremium
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
