<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

/**
 * The user can't be messaged, because they are deleted or unknown.
 */
class CanSendMessageToUserResultUserIsDeleted extends CanSendMessageToUserResult
{
    public const TYPE_NAME = 'canSendMessageToUserResultUserIsDeleted';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CanSendMessageToUserResultUserIsDeleted
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
