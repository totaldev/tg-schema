<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The chat is already boosted by the user
 */
class CanBoostChatResultAlreadyBoosted extends CanBoostChatResult
{
    public const TYPE_NAME = 'canBoostChatResultAlreadyBoosted';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CanBoostChatResultAlreadyBoosted
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
