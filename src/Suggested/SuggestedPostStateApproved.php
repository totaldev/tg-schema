<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Suggested;

/**
 * The post was approved.
 */
class SuggestedPostStateApproved extends SuggestedPostState
{
    public const string TYPE_NAME = 'suggestedPostStateApproved';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SuggestedPostStateApproved
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
