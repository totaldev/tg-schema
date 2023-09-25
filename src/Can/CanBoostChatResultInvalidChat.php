<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The chat can't be boosted
 */
class CanBoostChatResultInvalidChat extends CanBoostChatResult
{
    public const TYPE_NAME = 'canBoostChatResultInvalidChat';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CanBoostChatResultInvalidChat
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
