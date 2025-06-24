<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Business\BusinessBotManageBar;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The bar for managing business bot was changed in a chat.
 */
class UpdateChatBusinessBotManageBar extends Update
{
    public const TYPE_NAME = 'updateChatBusinessBotManageBar';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int                   $chatId,
        /**
         * The new value of the business bot manage bar; may be null.
         */
        protected ?BusinessBotManageBar $businessBotManageBar
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatBusinessBotManageBar
    {
        return new static(
            $array['chat_id'],
            isset($array['business_bot_manage_bar']) ? TdSchemaRegistry::fromArray($array['business_bot_manage_bar']) : null,
        );
    }

    public function getBusinessBotManageBar(): ?BusinessBotManageBar
    {
        return $this->businessBotManageBar;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'chat_id'                 => $this->chatId,
            'business_bot_manage_bar' => $this->businessBotManageBar ?? null,
        ];
    }
}
