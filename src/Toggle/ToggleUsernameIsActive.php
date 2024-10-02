<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes active state for a username of the current user. The editable username can't be disabled. May return an error with a message
 * "USERNAMES_ACTIVE_TOO_MUCH" if the maximum number of active usernames has been reached.
 */
class ToggleUsernameIsActive extends TdFunction
{
    public const TYPE_NAME = 'toggleUsernameIsActive';

    public function __construct(
        /**
         * The username to change.
         */
        protected string $username,
        /**
         * Pass true to activate the username; pass false to disable it.
         */
        protected bool   $isActive,
    ) {}

    public static function fromArray(array $array): ToggleUsernameIsActive
    {
        return new static(
            $array['username'],
            $array['is_active'],
        );
    }

    public function getIsActive(): bool
    {
        return $this->isActive;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'username'  => $this->username,
            'is_active' => $this->isActive,
        ];
    }
}
