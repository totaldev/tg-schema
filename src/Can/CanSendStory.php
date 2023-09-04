<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Can;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Checks whether the current user can send a story
 */
class CanSendStory extends TdFunction
{
    public const TYPE_NAME = 'canSendStory';

    public function __construct()
    {
    }

    public static function fromArray(array $array): CanSendStory
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
