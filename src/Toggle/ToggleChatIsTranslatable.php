<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the translatable state of a chat.
 */
class ToggleChatIsTranslatable extends TdFunction
{
    public const string TYPE_NAME = 'toggleChatIsTranslatable';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int  $chatId,
        /**
         * New value of is_translatable.
         */
        protected bool $isTranslatable,
    ) {}

    public static function fromArray(array $array): ToggleChatIsTranslatable
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

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setIsTranslatable(bool $value): static
    {
        $this->isTranslatable = $value;

        return $this;
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
