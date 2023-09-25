<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the ability of users to save, forward, or copy chat content. Supported only for basic groups, supergroups and channels. Requires owner privileges
 */
class ToggleChatHasProtectedContent extends TdFunction
{
    public const TYPE_NAME = 'toggleChatHasProtectedContent';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * New value of has_protected_content
     *
     * @var bool
     */
    protected bool $hasProtectedContent;

    public function __construct(int $chatId, bool $hasProtectedContent)
    {
        $this->chatId = $chatId;
        $this->hasProtectedContent = $hasProtectedContent;
    }

    public static function fromArray(array $array): ToggleChatHasProtectedContent
    {
        return new static(
            $array['chat_id'],
            $array['has_protected_content'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'has_protected_content' => $this->hasProtectedContent,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getHasProtectedContent(): bool
    {
        return $this->hasProtectedContent;
    }
}
