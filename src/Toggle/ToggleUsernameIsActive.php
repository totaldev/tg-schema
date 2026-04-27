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
    public const string TYPE_NAME = 'toggleUsernameIsActive';

    public function __construct(
        /**
         * Pass true to activate the username; pass false to disable it.
         */
        protected bool   $isActive,
        /**
         * The username to change.
         */
        protected string $username,
    ) {}

    public static function fromArray(array $array): ToggleUsernameIsActive
    {
        return new static(
            isActive: $array['is_active'],
            username: $array['username'],
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

    public function setIsActive(bool $value): static
    {
        $this->isActive = $value;

        return $this;
    }

    public function setUsername(string $value): static
    {
        $this->username = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'is_active' => $this->isActive,
            'username'  => $this->username,
        ];
    }
}
