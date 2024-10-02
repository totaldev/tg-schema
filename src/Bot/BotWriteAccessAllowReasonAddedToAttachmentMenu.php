<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Bot;

/**
 * The user added the bot to attachment or side menu using toggleBotIsAddedToAttachmentMenu.
 */
class BotWriteAccessAllowReasonAddedToAttachmentMenu extends BotWriteAccessAllowReason
{
    public const TYPE_NAME = 'botWriteAccessAllowReasonAddedToAttachmentMenu';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): BotWriteAccessAllowReasonAddedToAttachmentMenu
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
