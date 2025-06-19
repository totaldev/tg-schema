<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Business;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about a business bot that manages the chat.
 */
class BusinessBotManageBar extends TdObject
{
    public const TYPE_NAME = 'businessBotManageBar';

    public function __construct(
        /**
         * User identifier of the bot.
         */
        protected int    $botUserId,
        /**
         * URL to be opened to manage the bot.
         */
        protected string $manageUrl,
        /**
         * True, if the bot is paused. Use toggleBusinessConnectedBotChatIsPaused to change the value of the field.
         */
        protected bool   $isBotPaused,
        /**
         * True, if the bot can reply.
         */
        protected bool   $canBotReply
    ) {}

    public static function fromArray(array $array): BusinessBotManageBar
    {
        return new static(
            $array['bot_user_id'],
            $array['manage_url'],
            $array['is_bot_paused'],
            $array['can_bot_reply'],
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getCanBotReply(): bool
    {
        return $this->canBotReply;
    }

    public function getIsBotPaused(): bool
    {
        return $this->isBotPaused;
    }

    public function getManageUrl(): string
    {
        return $this->manageUrl;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'bot_user_id'   => $this->botUserId,
            'manage_url'    => $this->manageUrl,
            'is_bot_paused' => $this->isBotPaused,
            'can_bot_reply' => $this->canBotReply,
        ];
    }
}
