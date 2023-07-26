<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Resets the login email address. May return an error with a message "TASK_ALREADY_EXISTS" if reset is still pending. Works only when the current authorization state is authorizationStateWaitEmailCode and authorization_state.can_reset_email_address == true
 */
class ResetAuthenticationEmailAddress extends TdFunction
{
    public const TYPE_NAME = 'resetAuthenticationEmailAddress';

    public function __construct()
    {
    }

    public static function fromArray(array $array): ResetAuthenticationEmailAddress
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
