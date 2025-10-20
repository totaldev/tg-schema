<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Suggested;

use Totaldev\TgSchema\TdObject;

/**
 * Describes state of a suggested post.
 */
class SuggestedPostState extends TdObject
{
    public const TYPE_NAME = 'SuggestedPostState';

    public function __construct() {}

    public static function fromArray(array $array): SuggestedPostState
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
