<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Chat\ChatTheme;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The chat theme was changed.
 */
class UpdateChatTheme extends Update
{
    public const TYPE_NAME = 'updateChatTheme';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int        $chatId,
        /**
         * The new theme of the chat; may be null if theme was reset to default.
         */
        protected ?ChatTheme $theme,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatTheme
    {
        return new static(
            $array['chat_id'],
            isset($array['theme']) ? TdSchemaRegistry::fromArray($array['theme']) : null,
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getTheme(): ?ChatTheme
    {
        return $this->theme;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'theme'   => $this->theme ?? null,
        ];
    }
}
