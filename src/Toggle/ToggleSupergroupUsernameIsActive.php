<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes active state for a username of a supergroup or channel, requires owner privileges in the supergroup or channel. The editable username can't be disabled. May return an error with a message "USERNAMES_ACTIVE_TOO_MUCH" if the maximum number of active usernames has been reached
 */
class ToggleSupergroupUsernameIsActive extends TdFunction
{
    public const TYPE_NAME = 'toggleSupergroupUsernameIsActive';

    /**
     * Identifier of the supergroup or channel
     *
     * @var int
     */
    protected int $supergroupId;

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

    public function __construct(int $supergroupId, string $username, bool $isActive)
    {
        $this->supergroupId = $supergroupId;
        $this->username = $username;
        $this->isActive = $isActive;
    }

    public static function fromArray(array $array): ToggleSupergroupUsernameIsActive
    {
        return new static(
            $array['supergroup_id'],
            $array['username'],
            $array['is_active'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'supergroup_id' => $this->supergroupId,
            'username' => $this->username,
            'is_active' => $this->isActive,
        ];
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
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
