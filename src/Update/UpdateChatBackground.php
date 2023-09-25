<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Chat\ChatBackground;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The chat background was changed
 */
class UpdateChatBackground extends Update
{
    public const TYPE_NAME = 'updateChatBackground';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * The new chat background; may be null if background was reset to default
     *
     * @var ChatBackground|null
     */
    protected ?ChatBackground $background;

    public function __construct(int $chatId, ?ChatBackground $background)
    {
        parent::__construct();

        $this->chatId = $chatId;
        $this->background = $background;
    }

    public static function fromArray(array $array): UpdateChatBackground
    {
        return new static(
            $array['chat_id'],
            (isset($array['background']) ? TdSchemaRegistry::fromArray($array['background']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'background' => (isset($this->background) ? $this->background : null),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getBackground(): ?ChatBackground
    {
        return $this->background;
    }
}
