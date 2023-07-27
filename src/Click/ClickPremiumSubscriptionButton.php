<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Click;

use Totaldev\TgSchema\TdFunction;

/**
 * Informs TDLib that the user clicked Premium subscription button on the Premium features screen
 */
class ClickPremiumSubscriptionButton extends TdFunction
{
    public const TYPE_NAME = 'clickPremiumSubscriptionButton';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ClickPremiumSubscriptionButton
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
