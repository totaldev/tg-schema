<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes active state for a username of a bot. The editable username can be disabled only if there are other active usernames. May return an error with a
 * message "USERNAMES_ACTIVE_TOO_MUCH" if the maximum number of active usernames has been reached. Can be called only if userTypeBot.can_be_edited == true.
 */
class ToggleBotUsernameIsActive extends TdFunction
{
    public const string TYPE_NAME = 'toggleBotUsernameIsActive';

    public function __construct(
        /**
         * Identifier of the target bot.
         */
        protected int    $botUserId,
        /**
         * Pass true to activate the username; pass false to disable it.
         */
        protected bool   $isActive,
        /**
         * The username to change.
         */
        protected string $username,
    ) {}

    public static function fromArray(array $array): ToggleBotUsernameIsActive
    {
        return new static(
            botUserId: $array['bot_user_id'],
            isActive : $array['is_active'],
            username : $array['username'],
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

    public function setBotUserId(int $value): static
    {
        $this->botUserId = $value;

        return $this;
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
            '@type'       => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
            'is_active'   => $this->isActive,
            'username'    => $this->username,
        ];
    }
}
