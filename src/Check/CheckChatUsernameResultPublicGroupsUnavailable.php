<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Check;

/**
 * The user can't be a member of a public supergroup.
 */
class CheckChatUsernameResultPublicGroupsUnavailable extends CheckChatUsernameResult
{
    public const TYPE_NAME = 'checkChatUsernameResultPublicGroupsUnavailable';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CheckChatUsernameResultPublicGroupsUnavailable
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
