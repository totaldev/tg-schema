<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes active state for a username of a bot. The editable username can't be disabled. May return an error with a message "USERNAMES_ACTIVE_TOO_MUCH" if the maximum number of active usernames has been reached. Can be called only if userTypeBot.can_be_edited == true
 */
class ToggleBotUsernameIsActive extends TdFunction
{
    public const TYPE_NAME = 'toggleBotUsernameIsActive';

    /**
     * Identifier of the target bot
     *
     * @var int
     */
    protected int $botUserId;

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

    public function __construct(int $botUserId, string $username, bool $isActive)
    {
        $this->botUserId = $botUserId;
        $this->username = $username;
        $this->isActive = $isActive;
    }

    public static function fromArray(array $array): ToggleBotUsernameIsActive
    {
        return new static(
            $array['bot_user_id'],
            $array['username'],
            $array['is_active'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
            'username' => $this->username,
            'is_active' => $this->isActive,
        ];
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
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
