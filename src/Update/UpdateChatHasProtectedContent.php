<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * A chat content was allowed or restricted for saving.
 */
class UpdateChatHasProtectedContent extends Update
{
    public const TYPE_NAME = 'updateChatHasProtectedContent';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int  $chatId,
        /**
         * New value of has_protected_content.
         */
        protected bool $hasProtectedContent
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatHasProtectedContent
    {
        return new static(
            $array['chat_id'],
            $array['has_protected_content'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'chat_id'               => $this->chatId,
            'has_protected_content' => $this->hasProtectedContent,
        ];
    }
}
