<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Toggles whether the bot can manage emoji status of the current user.
 */
class ToggleBotCanManageEmojiStatus extends TdFunction
{
    public const TYPE_NAME = 'toggleBotCanManageEmojiStatus';

    public function __construct(
        /**
         * User identifier of the bot.
         */
        protected int  $botUserId,
        /**
         * Pass true if the bot is allowed to change emoji status of the user; pass false otherwise.
         */
        protected bool $canManageEmojiStatus
    ) {}

    public static function fromArray(array $array): ToggleBotCanManageEmojiStatus
    {
        return new static(
            $array['bot_user_id'],
            $array['can_manage_emoji_status'],
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getCanManageEmojiStatus(): bool
    {
        return $this->canManageEmojiStatus;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'bot_user_id'             => $this->botUserId,
            'can_manage_emoji_status' => $this->canManageEmojiStatus,
        ];
    }
}
