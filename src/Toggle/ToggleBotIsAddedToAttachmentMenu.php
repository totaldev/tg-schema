<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Adds or removes a bot to attachment and side menu. Bot can be added to the menu, only if userTypeBot.can_be_added_to_attachment_menu == true.
 */
class ToggleBotIsAddedToAttachmentMenu extends TdFunction
{
    public const TYPE_NAME = 'toggleBotIsAddedToAttachmentMenu';

    public function __construct(
        /**
         * Bot's user identifier.
         */
        protected int  $botUserId,
        /**
         * Pass true to add the bot to attachment menu; pass false to remove the bot from attachment menu.
         */
        protected bool $isAdded,
        /**
         * Pass true if the current user allowed the bot to send them messages. Ignored if is_added is false.
         */
        protected bool $allowWriteAccess,
    ) {}

    public static function fromArray(array $array): ToggleBotIsAddedToAttachmentMenu
    {
        return new static(
            $array['bot_user_id'],
            $array['is_added'],
            $array['allow_write_access'],
        );
    }

    public function getAllowWriteAccess(): bool
    {
        return $this->allowWriteAccess;
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getIsAdded(): bool
    {
        return $this->isAdded;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'bot_user_id'        => $this->botUserId,
            'is_added'           => $this->isAdded,
            'allow_write_access' => $this->allowWriteAccess,
        ];
    }
}
