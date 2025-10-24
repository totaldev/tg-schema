<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Suggested;

/**
 * The post must be approved or declined.
 */
class SuggestedPostStatePending extends SuggestedPostState
{
    public const string TYPE_NAME = 'suggestedPostStatePending';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): SuggestedPostStatePending
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
