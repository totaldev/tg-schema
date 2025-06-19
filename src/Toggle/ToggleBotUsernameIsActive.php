<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes active state for a username of a bot. The editable username can't be disabled. May return an error with a message "USERNAMES_ACTIVE_TOO_MUCH" if the
 * maximum number of active usernames has been reached. Can be called only if userTypeBot.can_be_edited == true.
 */
class ToggleBotUsernameIsActive extends TdFunction
{
    public const TYPE_NAME = 'toggleBotUsernameIsActive';

    public function __construct(
        /**
         * Identifier of the target bot.
         */
        protected int    $botUserId,
        /**
         * The username to change.
         */
        protected string $username,
        /**
         * Pass true to activate the username; pass false to disable it.
         */
        protected bool   $isActive
    ) {}

    public static function fromArray(array $array): ToggleBotUsernameIsActive
    {
        return new static(
            $array['bot_user_id'],
            $array['username'],
            $array['is_active'],
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
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
            '@type'       => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
            'username'    => $this->username,
            'is_active'   => $this->isActive,
        ];
    }
}
