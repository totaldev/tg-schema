<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A story can be sent
 */
class CanSendStoryResultOk extends CanSendStoryResult
{
    public const TYPE_NAME = 'canSendStoryResultOk';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CanSendStoryResultOk
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
