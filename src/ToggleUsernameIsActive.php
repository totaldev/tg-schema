<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Changes active state for a username of the current user. The editable username can't be disabled. May return an error with a message "USERNAMES_ACTIVE_TOO_MUCH" if the maximum number of active usernames has been reached
 */
class ToggleUsernameIsActive extends TdFunction
{
    public const TYPE_NAME = 'toggleUsernameIsActive';

    /**
     * The username to change
     *
     * @var string
     */
    protected string $username;

    /**
     * Pass true to activate the username; pass false to disable it
     *
     * @var bool
     */
    protected bool $isActive;

    public function __construct(string $username, bool $isActive)
    {
        $this->username = $username;
        $this->isActive = $isActive;
    }

    public static function fromArray(array $array): ToggleUsernameIsActive
    {
        return new static(
            $array['username'],
            $array['is_active'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'username' => $this->username,
            'is_active' => $this->isActive,
        ];
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getIsActive(): bool
    {
        return $this->isActive;
    }
}
