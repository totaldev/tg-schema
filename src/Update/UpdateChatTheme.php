<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

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
        protected int    $chatId,
        /**
         * The new name of the chat theme; may be empty if theme was reset to default.
         */
        protected string $themeName
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatTheme
    {
        return new static(
            $array['chat_id'],
            $array['theme_name'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getThemeName(): string
    {
        return $this->themeName;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'theme_name' => $this->themeName,
        ];
    }
}
