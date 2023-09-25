<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the translatable state of a chat; for Telegram Premium users only
 */
class ToggleChatIsTranslatable extends TdFunction
{
    public const TYPE_NAME = 'toggleChatIsTranslatable';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * New value of is_translatable
     *
     * @var bool
     */
    protected bool $isTranslatable;

    public function __construct(int $chatId, bool $isTranslatable)
    {
        $this->chatId = $chatId;
        $this->isTranslatable = $isTranslatable;
    }

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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'is_translatable' => $this->isTranslatable,
        ];
    }
}
