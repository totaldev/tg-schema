<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Suggested;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Suggests the user to upgrade the Premium subscription from monthly payments to annual payments
 */
class SuggestedActionUpgradePremium extends SuggestedAction
{
    public const TYPE_NAME = 'suggestedActionUpgradePremium';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SuggestedActionUpgradePremium
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
