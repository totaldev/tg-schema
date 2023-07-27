<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns state of Telegram Premium subscription and promotion videos for Premium features
 */
class GetPremiumState extends TdFunction
{
    public const TYPE_NAME = 'getPremiumState';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetPremiumState
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}