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
    public const string TYPE_NAME = 'updateChatBusinessBotManageBar';

    public function __construct(
        /**
         * The new value of the business bot manage bar; may be null.
         */
        protected ?BusinessBotManageBar $businessBotManageBar,
        /**
         * Chat identifier.
         */
        protected int                   $chatId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatBusinessBotManageBar
    {
        return new static(
            businessBotManageBar: (isset($array['business_bot_manage_bar']) ? TdSchemaRegistry::fromArray($array['business_bot_manage_bar']) : null),
            chatId              : $array['chat_id'],
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

    public function setBusinessBotManageBar(?BusinessBotManageBar $value): static
    {
        $this->businessBotManageBar = $value;

        return $this;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'business_bot_manage_bar' => (null !== $this->businessBotManageBar ? $this->businessBotManageBar->jsonSerialize() : null),
            'chat_id'                 => $this->chatId,
        ];
    }
}
