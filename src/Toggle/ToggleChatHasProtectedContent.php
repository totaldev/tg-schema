<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the ability of users to save, forward, or copy chat content. Supported only for basic groups, supergroups and channels. Requires owner privileges.
 */
class ToggleChatHasProtectedContent extends TdFunction
{
    public const string TYPE_NAME = 'toggleChatHasProtectedContent';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int  $chatId,
        /**
         * New value of has_protected_content.
         */
        protected bool $hasProtectedContent,
    ) {}

    public static function fromArray(array $array): ToggleChatHasProtectedContent
    {
        return new static(
            chatId             : $array['chat_id'],
            hasProtectedContent: $array['has_protected_content'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getHasProtectedContent(): bool
    {
        return $this->hasProtectedContent;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setHasProtectedContent(bool $value): static
    {
        $this->hasProtectedContent = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'chat_id'               => $this->chatId,
            'has_protected_content' => $this->hasProtectedContent,
        ];
    }
}
