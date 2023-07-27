<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Update;

/**
 * Translation of chat messages was enabled or disabled
 */
class UpdateChatIsTranslatable extends Update
{
    public const TYPE_NAME = 'updateChatIsTranslatable';

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
        parent::__construct();

        $this->chatId = $chatId;
        $this->isTranslatable = $isTranslatable;
    }

    public static function fromArray(array $array): UpdateChatIsTranslatable
    {
        return new static(
            $array['chat_id'],
            $array['is_translatable'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'is_translatable' => $this->isTranslatable,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getIsTranslatable(): bool
    {
        return $this->isTranslatable;
    }
}
