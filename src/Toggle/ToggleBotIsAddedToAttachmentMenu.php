<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Adds or removes a bot to attachment menu. Bot can be added to attachment menu, only if userTypeBot.can_be_added_to_attachment_menu == true
 */
class ToggleBotIsAddedToAttachmentMenu extends TdFunction
{
    public const TYPE_NAME = 'toggleBotIsAddedToAttachmentMenu';

    /**
     * Bot's user identifier
     *
     * @var int
     */
    protected int $botUserId;

    /**
     * Pass true to add the bot to attachment menu; pass false to remove the bot from attachment menu
     *
     * @var bool
     */
    protected bool $isAdded;

    /**
     * Pass true if the current user allowed the bot to send them messages. Ignored if is_added is false
     *
     * @var bool
     */
    protected bool $allowWriteAccess;

    public function __construct(int $botUserId, bool $isAdded, bool $allowWriteAccess)
    {
        $this->botUserId = $botUserId;
        $this->isAdded = $isAdded;
        $this->allowWriteAccess = $allowWriteAccess;
    }

    public static function fromArray(array $array): ToggleBotIsAddedToAttachmentMenu
    {
        return new static(
            $array['bot_user_id'],
            $array['is_added'],
            $array['allow_write_access'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
            'is_added' => $this->isAdded,
            'allow_write_access' => $this->allowWriteAccess,
        ];
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getIsAdded(): bool
    {
        return $this->isAdded;
    }

    public function getAllowWriteAccess(): bool
    {
        return $this->allowWriteAccess;
    }
}
