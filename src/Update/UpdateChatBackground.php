<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Chat\ChatBackground;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The chat background was changed.
 */
class UpdateChatBackground extends Update
{
    public const string TYPE_NAME = 'updateChatBackground';

    public function __construct(
        /**
         * The new chat background; may be null if background was reset to default.
         */
        protected ?ChatBackground $background,
        /**
         * Chat identifier.
         */
        protected int             $chatId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatBackground
    {
        return new static(
            background: (isset($array['background']) ? TdSchemaRegistry::fromArray($array['background']) : null),
            chatId    : $array['chat_id'],
        );
    }

    public function getBackground(): ?ChatBackground
    {
        return $this->background;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function setBackground(?ChatBackground $value): static
    {
        $this->background = $value;

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
            '@type'      => static::TYPE_NAME,
            'background' => (null !== $this->background ? $this->background->jsonSerialize() : null),
            'chat_id'    => $this->chatId,
        ];
    }
}
