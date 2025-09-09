<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * Translation of chat messages was enabled or disabled.
 */
class UpdateChatIsTranslatable extends Update
{
    public const TYPE_NAME = 'updateChatIsTranslatable';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int  $chatId,
        /**
         * New value of is_translatable.
         */
        protected bool $isTranslatable,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatIsTranslatable
    {
        return new static(
            $array['chat_id'],
            $array['is_translatable'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getIsTranslatable(): bool
    {
        return $this->isTranslatable;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'chat_id'         => $this->chatId,
            'is_translatable' => $this->isTranslatable,
        ];
    }
}
