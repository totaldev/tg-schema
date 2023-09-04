<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Suggested;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Suggests the user to restore a recently expired Premium subscription
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
