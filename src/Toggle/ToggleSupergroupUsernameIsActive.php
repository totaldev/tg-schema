<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes active state for a username of a supergroup or channel, requires owner privileges in the supergroup or channel. The editable username can't be
 * disabled. May return an error with a message "USERNAMES_ACTIVE_TOO_MUCH" if the maximum number of active usernames has been reached.
 */
class ToggleSupergroupUsernameIsActive extends TdFunction
{
    public const TYPE_NAME = 'toggleSupergroupUsernameIsActive';

    public function __construct(
        /**
         * Identifier of the supergroup or channel.
         */
        protected int    $supergroupId,
        /**
         * The username to change.
         */
        protected string $username,
        /**
         * Pass true to activate the username; pass false to disable it.
         */
        protected bool   $isActive,
    ) {}

    public static function fromArray(array $array): ToggleSupergroupUsernameIsActive
    {
        return new static(
            $array['supergroup_id'],
            $array['username'],
            $array['is_active'],
        );
    }

    public function getIsActive(): bool
    {
        return $this->isActive;
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'supergroup_id' => $this->supergroupId,
            'username'      => $this->username,
            'is_active'     => $this->isActive,
        ];
    }
}
